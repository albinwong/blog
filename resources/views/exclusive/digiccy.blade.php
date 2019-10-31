@extends('layout.exclusive',['title' => '数字货币行情 - Albin Wong Blog'])
@section('seo')
        <meta name="keywords" content="albin,数字货币行情,Back-End Engineer,chaindd"/>
        <meta name="description" content="数字货币行情-Albin Wong Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结，是一个互联网从业者值得收藏的网站。" />
        <meta property="og:description" content="Albin Wong`s Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结，是一个互联网从业者值得收藏的网站。独自穿越人群看着两岸的灯火,其实所有漂泊的人,不过是为了有一天能够不再漂泊,能用自己的力量撑起天空." />
        <meta property="twitter:description" content="Albin Wong`s Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结，是一个互联网从业者值得收藏的网站。独自穿越人群看着两岸的灯火,其实所有漂泊的人,不过是为了有一天能够不再漂泊,能用自己的力量撑起天空.">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <!-- <div id="main-content"> -->
          <!-- <article> -->
                <!-- <div class="art-content"> -->
                    <!-- <div class="row"> -->
                      <div class="tradingview-widget-container">
                        <div id="tradingview_24a66"></div>
                        <div class="tradingview-widget-copyright"><a href="https://cn.tradingview.com/symbols/HUOBIPRO-BTCUSDT/" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT图表</span></a>由TradingView提供</div>
                      </div>
                    <!-- </div> -->
                <!-- </div> -->
          <!-- </article> -->
        <!-- </div> -->
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget({
      "width": 1350,
      "height": 770,
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
      "container_id": "tradingview_24a66"
    });
    </script>
@endsection