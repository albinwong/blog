<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Guzzle\Http\Exception\RequestException;
use GuzzleHttp\Client;
use Exception;

use Illuminate\Support\Facades\Redis;

class AlternativeController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.alternative.me']);
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
        
        $dingding = new \App\Http\Controllers\CommonController;
        try {
            $res = $this->client->request('GET', '/fng/', [
                'query' => $params
            ]);
            $data = $res->getBody()->getContents();
            $data = json_decode($data, true);
        } catch (Exception $e) {
            if ($e->getCode() != 200) {
                $dingding->dingDingSMS('Alternative API Interface exception: '.$e->getMessage());
            } else {
                return false;
            }
        }
        if (!count($data['data'])) {
            $dingding->dingDingSMS('Alternative API Interface Request Data empty! '.PHP_EOL.'Error msg:'.$data['metadata']['error']);
        }
        $result = json_encode($data['data'][0], true);
        $redis->set('Alternative_FGI_Index', $result);
        $dingding->dingDingSMS('Alternative FGI Sync Finished');
    }
}
