@extends('layout.exclusive',['title' => '数字货币行情 - Albin Wong Blog'])
@section('seo')
        @include('layout.meta')
        <meta name="keywords" content="比特币,albin,数字货币行情,Back-End Engineer" />
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div id="main-content">
          <!-- <article> -->
                <!-- <div class="art-content"> -->
                    <!-- <div class="row"> -->
                      <div id="tradingview_13d4f"></div>
  <div class="tradingview-widget-copyright"><a href="https://tw.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL 圖表</span></a>由TradingView提供</div>
                    <!-- </div> -->
                <!-- </div> -->
          <!-- </article> -->
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget({
      "width": 1350,
      "height": 700,
      "symbol": "HUOBI:BTCUSDT",
      "interval": "15",
      "timezone": "Etc/UTC",
      "theme": "Dark",
      "style": "1",
      "locale": "zh_TW",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": true,
      "details": false,
      // "watchlist": [
      //   "HUOBI:BTCUSDT",
      //   "HUOBI:ETHUSDT",
      //   "HUOBI:EOSUSDT",
      //   "HUOBI:LTCUSDT",
      // ],
      "container_id": "tradingview_13d4f"
    });
    </script>
@endsection