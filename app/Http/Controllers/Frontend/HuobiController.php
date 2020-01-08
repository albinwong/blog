<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Guzzle\Http\Exception\RequestException;
use GuzzleHttp\Client;
use Exception;

class HuobiController extends Controller
{
    private $client;
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.huobi.io']);
    }

    public function marketHistoryKline()
    {
        $test = "/market/history/kline";
        $params = [
            'symbol' => 'btcusdt',
            'period' => '30min',
            'size' => '200',
        ];
        ksort($params);
        try {
            $res = $this->client->request('GET', $test, ['query' => $params]);
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

    private function dingDingSMS($msg = '數據測試')
    {
        $webhook = "https://oapi.dingtalk.com";
        $param = [
            'msgtype' => 'text',
            'text' => ['content' => $msg],
            "at" => [
                "atMobiles" => ["18523977693", "16601119376"],
                "isAtAll" => false
            ],
        ];
        $ddClient = new Client(['base_uri' => $webhook]);
        $methodToken = '/robot/send?access_token='.env('DDTALK_ROBOT_TOKEN');
        
        $res = $ddClient->request('POST', $methodToken, ['json' => $param]);
        // $data = $res->getBody()->getContents();
        // $data = json_decode($data);
    }
}
