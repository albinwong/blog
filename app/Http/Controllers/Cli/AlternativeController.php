<?php

namespace App\Http\Controllers\Cli;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Guzzle\Http\Exception\RequestException;
use GuzzleHttp\Client;
use Exception;

use Illuminate\Support\Facades\Redis;
use App\Model\CryptoTicker;

class AlternativeController extends Controller
{
    protected $client;
    protected $_notice;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.alternative.me']);
        $this->_notice = new \App\Http\Controllers\CommonController;
    }

    /**
     * Crypto Fear & Greed Index
     * Each day, we analyze emotions and sentiments from different sources and crunch them into one simple number: The Fear & Greed Index for Bitcoin and other large cryptocurrencies.
     * @author Albin Wong 2020-01-13
     */
    public function fgi()
    {
        $redis = app('redis')->connection('blog');
        $params = [
            // 'limit' =>   1,
            'format' => 'json',
        ];
        
        try {
            $res = $this->client->request('GET', '/fng/', [
                'query' => $params,
            ]);
            $data = $res->getBody()->getContents();
            $data = json_decode($data, true);
        } catch (Exception $e) {
            if ($e->getCode() != 200) {
                $this->_notice->dingTalk('Alternative Fear & Greed Index API Interface exception: '.$e->getMessage());
            } else {
                return false;
            }
        }
        if (!count($data['data'])) {
            $this->_notice->dingTalk('Alternative Fear & Greed Index API Interface Request Data empty! '.PHP_EOL.'Error msg:'.$data['metadata']['error']);
        }
        $result = json_encode($data['data'][0], true);
        $redis->set('Alternative_FGI_Index', $result);
        unset($data, $result);
        $this->_notice->dingTalk('Alternative FGI Sync Finished:'.$result);
    }

    /**
     * Ticker
     * Endpoint: /ticker/
     * Method: GET
     * Description: Coin and token prices updated every 5 minutes.
     * Optional Parameters:
     * limit, [int]: Limit the number of returned results. The default value is 100, use '0' for all available data.
     * start, [int]: Sets the first element to be fetched, all requests are ordered by the Marketcap. That means the order of the returned elements can change over time.
     * convert, [string]: In addition to the USD values the converted values will be delivered in the requested currency. Possible fiat conversion target values are: ' USD', 'EUR', 'GBP', 'RUB', 'JPY', 'CAD', 'KRW', 'PLN' it is also possible to convert to other cryptocurrencies like: 'BTC', 'ETH', 'XRP', 'LTC' and 'BCH'.
     * structure, [string]: sets the structure of the data field as either array or name-value pair style. Possible values are 'dictionary' for name-value pair style and 'array' for array style.
     * sort, [string]: returned results can be sorted by: 'id', 'rank' (means marketcap), 'volume_24h', 'percent_change_24h' default sorting is by rank. In addition it can be sorted by: 'price', 'percent_change_1h', 'percent_change_7d', 'circulating_supply' and 'name'.
     * @author Albin Wong 2020-01-17
     * @return
     */
    public function ticker()
    {
        try {
            $res = $this->client->request('GET', '/v2/ticker/', [
                'query' => [
                    'limit' => 1000,
                    'convert'   => 'USD',
                    'structure' => 'array',
                ]
            ]);
        } catch (Exception $e) {
            if ($e->getCode() != 200) {
                $this->_notice->dingTalk('Alternative Ticker API Interface exception: '.$e->getMessage());
            } else {
                $this->_notice->dingTalk('Alternative Ticker API Interface exception: '.$e->getMessage());
            }
        }
        $data = $res->getBody()->getContents();
        $data = json_decode($data, true)['data'];
        unset($res);
        if (count($data)) {
            foreach ($data as &$value) {
                $quotes = $value['quotes']['USD'];
                $result = [
                    'id' => $value['id'],
                    'name' => $value['name'],
                    'symbol' => $value['symbol'],
                    'slug' => $value['website_slug'],
                    'rank' => $value['rank'],
                    'circulating_supply' => $value['circulating_supply'] ?? 0,
                    'total_supply' => $value['total_supply'] ?? '',
                    'max_supply' => $value['max_supply'] ?? '',
                    'price' =>  $quotes['price'], // 24小时成交量
                    'volume_daily' =>  $quotes['volume_24h'], // 24小时成交量
                    'market_cap' =>  $quotes['market_cap'],
                    'change_rate_hourly' =>  $quotes['percentage_change_1h'],
                    'change_rate_daily' =>  $quotes['percentage_change_24h'],
                    'change_rate_weekly' =>  $quotes['percentage_change_7d'],
                    'updated_at' => $value['last_updated'] ? date('Y-m-d H:i:s', $value['last_updated']) : '',
                ];
                CryptoTicker::updateOrInsert(['id' => $value['id']], $result);
                unset($quotes, $result);
            }
        } else {
            $this->_notice->dingTalk('Alternative Ticker API Interface Request Data is Empty! ');
        }
        unset($data);
        // $this->_notice->dingTalk('Alternative Ticker API Sync Successed!');
    }

    public function __destruct()
    {
        $this->client;
        $this->__notice;
    }
}
