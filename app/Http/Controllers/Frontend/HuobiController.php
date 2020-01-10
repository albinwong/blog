<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Guzzle\Http\Exception\RequestException;
use GuzzleHttp\Client;
use Exception;

use App\Model\ListAllCryptocurrencies;
use DB;

class HuobiController extends Controller
{
    private $huobiClient;
    private $CMCClient;

    private $huobiClientEndpoint = 'https://api.huobi.io';
    private $CMCEndpoint = 'https://pro-api.coinmarketcap.com';

    private $CoinMarketCapApiKey = 'af6eb3f8-98a3-4257-83f6-cafe83d58d4f';
    // private $CoinMarketCapApiKey = '2699dd34-4676-4c9b-b351-17ad61730a92';

    public function __construct()
    {
        $this->huobiClient = new Client(['base_uri' => $this->huobiClientEndpoint]);
        $this->CMCClient = new Client(['base_uri' => $this->CMCEndpoint]);
    }

    public function marketHistoryKline($uri = '/market/history/kline')
    {
        $params = [
            'symbol' => 'btcusdt',
            'period' => '30min',
            'size' => '200',
        ];
        ksort($params);
        try {
            $res = $this->huobiClient->request('GET', $uri, ['query' => $params]);
            $data = $res->getBody()->getContents();
            $data = json_decode($data, true);
        } catch (Exception $e) {
            if ($e->getCode() != 200) {
                $this->dingDingSMS($e->getMessage());
            } else {
                return false;
            }
        }
        if ($data['status'] == 'ok') {
            return response()->json(['status' => 'success', 'data' => $data['data']]);
        } else {
            $this->dingDingSMS('Huobi Market History Kline: '.$data['err-msg']);
            return response()->json(['status' => 'fail', 'msg' => $data['err-msg']]);
        }
    }

    public function dingDingSMS($msg = '數據測試')
    {
        $webhook = "https://oapi.dingtalk.com";
        $param = [
            'msgtype' => 'text',
            'text' => ['content' => $msg],
            "at" => [
                "atMobiles" => ["18523977693", "16601119376"],
                "isAtAll" => false,
            ],
        ];
        $ddClient = new Client(['base_uri' => $webhook]);
        $methodToken = '/robot/send?access_token='.env('DDTALK_ROBOT_TOKEN');
        
        $res = $ddClient->request('POST', $methodToken, ['json' => $param]);
        if ($res->getStatusCode() == 200) {
            return true;
        }
        return false;
    }

    public function listAllCryptoCurrencies()
    {
        $headers = ['X-CMC_PRO_API_KEY' => $this->CoinMarketCapApiKey];
        $parameters = [
          'start' => '1',
          'limit' => '5000',
        ];
        try {
            $res = $this->CMCClient->request('GET', '/v1/cryptocurrency/listings/latest', [
                'headers' =>$headers,
                'query' => $parameters
            ]);
            $res = $res->getBody()->getContents();
            $res = json_decode($res, true);
        } catch (Exception $e) {
            if ($e->getCode() != 200) {
                $this->dingDingSMS('[CoinmarketCap] Attention, '.$e->getMessage());
            } else {
                $this->dingDingSMS('[CoinmarketCap] Attention, Request Cryptocurrency Listings Lastest Data Error!');
            }
        }
        if ($res['status']['error_code'] == '0' && count($res['data'])) {
            $data = $res['data'];
            $result = [];
            foreach ($data as $value) {
                $result = [
                    'cid' => $value['id'],
                    'name' => $value['name'],
                    'symbol' => $value['symbol'],
                    'slug' => $value['slug'],
                    'circulating_supply' => $value['circulating_supply'] ?? 0,
                    'total_supply' => $value['total_supply'] ?? '',
                    'max_supply' => $value['max_supply'] ?? '',
                    'num_market_pairs' => $value['num_market_pairs'],
                    'tags' => count($value['tags']) ? implode(',', $value['tags']) : '',
                    'cmc_rank' => $value['cmc_rank'],
                    'platform'  => $value['platform'] ? json_encode($value['platform']) : '',
                    'created_at' => $value['date_added'] ? date('Y-m-d', strtotime($value['date_added'])) : '',
                    'updated_at' => $value['last_updated'] ? date('Y-m-d', strtotime($value['last_updated'])) : '',
                ];
                ListAllCryptocurrencies::updateOrInsert(['cid' => $value['id']], $result);
            }
            $this->dingDingSMS('Coinmarketcap List All Cryptocurrencies Sync Success ');
        } else {
            $this->dingDingSMS('Oops, Coinmarketcap List All Cryptocurrencies Got Some Errors ');
        }
    }
}
