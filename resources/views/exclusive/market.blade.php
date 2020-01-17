@extends('layout.exclusive',['title' => '数字货币行情、恐惧贪婪指数、场外价格 - Albin Wong Blog'])
@section('seo')
        <meta name="keywords" content="比特币,数字货币行情,chain,恐惧贪婪指数,fgi,otc,场外价格,albin" />
        <meta name="description" content="提供区块链资源、实时行情、数据分析及数据指标 - Albin Wong Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结。" />
        <meta property="og:description" content="提供区块链资源、实时行情、数据分析及数据指标 - Albin Wong`s Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结。独自穿越人群看着两岸的灯火,其实所有漂泊的人,不过是为了有一天能够不再漂泊,能用自己的力量撑起天空." />
        <meta property="twitter:description" content="提供区块链资源、实时行情、数据分析及数据指标 - Albin Wong`s Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结。独自穿越人群看着两岸的灯火,其实所有漂泊的人,不过是为了有一天能够不再漂泊,能用自己的力量撑起天空.">
@endsection
@section('css')
<style>
.panel-body .table.table-coins.mt {
    margin-top: 5px;
}
.table.table-coins {
    background: #FFF;
    width: 100%;
    font-size: 16px;
    color: #121212;
    border-bottom: 1px solid #c5cedb;
    border-collapse: separate;
    margin-bottom: 0;
}
.table.table-coins>thead>tr>th {
    color: #333;
    padding: 7px;
    line-height: 1.42857143;
    vertical-align: top;
    font-weight: bold;
    font-size: 14px;
    text-align: center;
    background: #fff url(https://cdn.datatables.net/1.10.16/images/sort_both.png) no-repeat;
    background-position: center right;
}
.table.table-coins>tbody>tr>td.place {
    color: #97a4b5;
    font-weight: bold;
    text-align: center;
    border-right: 1px solid #DDD;
    padding-right: 5px;
}

.table.table-coins>tbody>tr>td.rate{
    border-bottom: 0;
    text-align: right;
    width: 15px;
}

.table.table-coins>tbody>tr>td.price{
    text-align: left;
    width: 20px;
}
thead tr>th {
  border-bottom: 3px double lightblue;
}
.text-center {
  text-align: center;
}
.table.table-coins>thead>tr>th.volume .full-volume{
    text-align: left;
    width: 80px;
    min-width: 80px;
    text-align: center;
}
.table.table-coins>thead>tr>th. {
    text-align: left;
    width: 140px;
    min-width: 140px;
    text-align: center;
}
.table.table-coins>tbody>tr>td.thumb {
    width: 32px;
    line-height: 32px;
    height: 30px;
    text-align: center;
    padding: 0;
    margin: 0 auto;
}
.table.table-coins>tbody>tr>td.thumb img {
    width: 25px;
}
.table.table-coins>tbody>tr>td.name {
    width: 45px;
    max-width: 45px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    position: relative;
    overflow: hidden;
    text-align: left;
    font-size: 14px;
    /*font-weight: bold;*/
}
.table.table-coins>tbody>tr>td {
    vertical-align: middle;
    text-align: left;
    border-right: 1px solid #f5f5f5;
    position: relative;
}
.table.table-coins>tbody>tr>th.price {
    width: 100px;
    min-width: 120px;
    max-width: 120px;
}
.table-coins tbody tr td{
    border-right: 1px solid #DDD;
}
canvas {
    display: block;
    margin: 0 auto;
}
.fgi {
    font-size: 20.75px;
    font-family: inherit;
    font-weight: bold;
    line-height: 20.75px;
    color: #3b4348;
    text-rendering: optimizeLegibility;
}
tbody tr:nth-child(odd) {
    border: none;
    background-color: #f8f8f8;
}
.rise {
    color: green;
}
.fall {
    color: red;
}
.otc img{
    border: 0;
    padding-left: 0;
    width: 25px;
    height: 25px;
}
.otc table .thumb {
    text-align: center;
    padding: 5px 0;
}

.table-coins td.name i{
    font-style: normal;
    font-weight: normal;
    font-size: 10px;
    width: 100px;
}
</style>
@endsection
@section('content')
<!-- Start of Page Container -->
    <div class="row" style="">
        <h2 class="post-title">行情数据</h2>
        <hr>
        <p class="error">
            <svg height="18" class="octicon octicon-alert mr-1" viewBox="0 0 15 15" version="1.1" width="18" aria-hidden="true">
                <path d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 000 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 00.01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z" fill-rule="evenodd" fill="#FF7F50"></path>
            </svg>
            风险提示及免责声明：本站所提供的行情数据与信息仅供参考，均不作为投资依据。投资有风险，入市需谨慎!

            <span id="riskTip" style="float:right;">&times;</span>
        </p>
        <div class="span8 page_content">
            <ul class="tabs-nav">
                <li class="active">
                    <a href="#">币种 Coins</a>
                </li>
                <li>
                    <a href="#">交易所平台</a>
                </li>
            </ul>
            <div class="tabs-container">
                <div class="tab-content panel-body" style="display: block;">
                    <table class="table table-coins table-hover table-homepage" border="0" cellpadding="1" cellspacing="1" style="width: 100%; border-collapse: collapse">
                        <thead>
                            <tr>
                              <th class="place">#</th>
                              <th class="thumb"colspan="2">币名</th>
                              <th class="price">价格</th>
                              <th class="rate">涨跌幅</th>
                              <th class="volume">24H成交量</th>
                              <th class="volume">市值</th>
                              <th class="full-volume">流通数量</th>
                            </tr>
                        </thead>
                        <tbody>
<?php foreach ($coins as $key => $value) : ?>
                            <tr>
                              <td class="place" style="vertical-align: center;">{{$value['rank']}}</td> 
                              <td class="thumb" style="border-right: none;">
                                <?php if (!in_array(strtolower($value['symbol']), ['xtz', 'miota', 'nano', 'waves'])) : ?>
                                <img style="border-width: inherit;" src="/media/coins/{{strtolower($value['symbol'])}}.png" alt="">
                                <?php else : ?>
                                <svg viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                  <g fill="none" fill-rule="evenodd">
                                    <circle cx="12" cy="10" r="10" stroke-width="1" fill="#D3D3D3" />
                                    <path d="M15.8426041,9.88827835 C16.1830454,9.41847646 16.3873141,8.82275849 16.3873141,8.18510804 C16.3873141,6.64134046 15.2213711,5.39119905 13.7745359,5.39119905 L13.3574914,5.39119905 L13.3574914,3.22653423 C13.3574914,3.10069726 13.2553269,3 13.1277016,3 L12.370276,3 C12.2426105,3 12.1404661,3.10071704 12.1404661,3.22653423 L12.1404661,5.39119905 L10.9319479,5.39119905 L10.9319479,3.22653423 C10.9319479,3.10069726 10.8297834,3 10.702138,3 L9.94471241,3 C9.81704694,3 9.71490253,3.10071704 9.71490253,3.22653423 L9.71490253,5.39119905 L7.22978981,5.39119905 C7.10214441,5.39119905 7,5.4919161 7,5.61775306 L7,6.37281442 C7,6.49024511 7.08509025,6.59096216 7.20424869,6.59936843 C8.05531167,6.67486665 8.5148311,7.23701887 8.5148311,7.93339455 L8.5148311,12.5562515 C8.5148311,13.1771092 8.19148415,13.6721496 7.47653347,13.739202 C7.374369,13.747549 7.28931888,13.8231065 7.27228478,13.9153777 L7.12762534,14.6789245 C7.10212435,14.8131677 7.20420857,14.939064 7.34890813,14.939064 L9.72334936,14.939064 L9.72334936,17.0952633 C9.72334936,17.2211002 9.82551383,17.3217975 9.95315923,17.3217975 L10.7105848,17.3217975 C10.8382302,17.3217975 10.9403746,17.2210804 10.9403746,17.0952633 L10.9403746,14.9305984 L12.1489129,14.9305984 L12.1489129,17.0952633 C12.1489129,17.2211002 12.2510774,17.3217975 12.3787028,17.3217975 L13.1361484,17.3217975 C13.2637938,17.3217975 13.3659382,17.2210804 13.3659382,17.0952633 L13.3659382,14.9305984 L14.3872218,14.9305984 C15.8254898,14.9305984 17,13.6972893 17,12.1702354 C16.9915331,11.2221265 16.5318732,10.383121 15.842564,9.88817946 L15.8426041,9.88827835 Z M10.9406154,7.16992692 L12.7959479,7.16992692 C13.4853374,7.16992692 14.0469812,7.72361353 14.0469812,8.403236 C14.0469812,9.08285847 13.4853374,9.63654508 12.7959479,9.63654508 L10.9406154,9.63654508 L10.9406154,7.16988736 L10.9406154,7.16992692 Z M13.39168,13.219101 L10.9321084,13.219101 L10.9321084,10.7608495 L13.39168,10.7608495 C14.0810293,10.7608495 14.6426932,11.3145163 14.6426932,11.9941388 C14.6426932,12.6653352 14.0895163,13.2190812 13.39168,13.2190812 L13.39168,13.219101 L13.39168,13.219101 Z" fill="#FFFFFF"></path>
                                  </g>
                                </svg>
                                <?php endif; ?>
                              </td>
                              <td class="name">
                                  {{$value['symbol']}} <br>
                                  <i class="ng-binding">{{$value['name']}}</i>
                              </td>
                              <td class="price">{{cyrptoPriceFormat($value['price'], '$')}}</td>
                              <td class="rate <?=$value['change_rate_daily'] < 0 ? 'fall' : 'rise';?>">{!!($value['change_rate_daily'] < 0) ? $value['change_rate_daily'] : '+'.$value['change_rate_daily'] !!}%</td>
                              <td class="volume">{{CryptoVolumnFormat($value['volume_daily'], '$')}}</td>
                              <td class="cap">{{CryptoVolumnFormat($value['market_cap'], '$')}}</td>
                              <td class="full-volume">{{CryptoVolumnFormat($value['total_supply'], '')}}</td>
                            </tr>
<?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
                <div class="tab-content" style="display: none;">...</div>
            </div>
        </div>
        <aside class="span4 page-sidebar">
            <div class="post-title">
                <span class="fgi">贪婪指数(<?=$fgi['value'];?>)</span>
                <span class="date" style="float: right;">Last updated:<?=date('M dS', $fgi['timestamp']);?></span>
            </div>
            <canvas id="board" height="150" class="widget" style="text-align: center;"></canvas>
            <section style="text-align: center;" class="widget" id="main">
                今日贪婪指数：<?=$fgi['value'];?>
            </section>
            <hr>
            <section class="widget otc">
                <h3>场外OTC价格</h3>
                <table class="table table-hover" border="0" cellpadding="1" cellspacing="1">
                    <thead>
                        <tr>
                          <th class="thumb" colspan="2" style="padding: 8px;">币种名</th>
                          <th class="price">场外价格 ¥</th>
                          <th style="text-align: left; width: 75px;">5分钟涨跌幅</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr></tr> 
                    </tbody>
                </table>
            </section>
        </aside>
    </div>
<!-- End of Page Container -->
@endsection
@section('js')
<script type="text/javascript" src="/echarts/echarts.min.js"></script>
<script>
    $(function(){ 
        var panelOption = {  
            maxLength: 30,  
            interval: 5,  
            level: [//仪表盘需要呈现的数据隔离区域  
                {
                    start: 0,
                    color: "#FF4500"
                },{ 
                    start: 45,
                    color: "#FFA07A"
                },{
                    start: 81, 
                    color: "#98FB98" 
                },{
                    start: 117,
                    color: "#32CD32"
                },{
                    start: 135,
                    color: "#006400"
                }
            ],  
            outsideStyle: {
                lineWidth: 0,
                color: "rgba(100,100,100,1)" 
            }  
        };  
         
        Panel = new panel("board", panelOption); 
        var fgiValue = "{{$fgi['value']}}"*1.8;
        Panel.init(fgiValue);
    });

    var panel = function(id, option) {  
        this.canvas = document.getElementById(id); //获取canvas元素  
        this.cvs = this.canvas.getContext("2d"); //得到绘制上下文  
        this.width = this.canvas.width; //对象宽度  
        this.height = this.canvas.height; //对象高度  
        this.level = option.level;  
        this.outsideStyle = option.outsideStyle;  
    } 

    panel.prototype.init = function(value) {  
        var p = this;  
        var cvs = this.cvs;  
        cvs.clearRect(0, 0, this.width, this.height);  
         
        p.drawArc();  
        p.drawLevelArea(p.level);  
        p.drawLine();  
        p.drawSpanner(value);  
    }

    var panelOption = {  
        maxLength: 30,  
        interval: 5,  
        level: [//仪表盘需要呈现的数据隔离区域  
            {
                start: 0,
                color: "red"
            },{
                start: 30,
                color: "yellow"
            },{
                start: 40,
                color: "blue"
            },{
                start: 100,
                color: "Lime"
            }  
        ],  
        outsideStyle: 
        {
            lineWidth: 4,
            color: "rgba(100,100,100,1)"
        }  
    }; 

    panel.prototype.save = function(fn) {  
        this.cvs.save();  
        fn();  
        this.cvs.restore();  
    } 

    panel.prototype.drawArc = function() {  
        var p = this;  
        var cvs = this.cvs;  
        p.save(function() {  
            cvs.translate(p.width / 2, p.height); //将坐标点移到矩形的底部的中间  
            cvs.beginPath();  
            cvs.lineWidth = p.outsideStyle.lineWidth;  
            cvs.strokeStyle = p.outsideStyle.color;  
            cvs.arc(0, 0, p.height - cvs.lineWidth, 0, Math.PI / 180 * 180, true); //画半圆  
            cvs.stroke();  
        });  
    } 

    panel.prototype.drawLevelArea = function(level) {  
        var p = this;  
        var cvs = this.cvs;  
        for (var i = 0; i < level.length; i++) {  
            p.save(function() {  
                cvs.translate(p.width / 2, p.height);  
                cvs.rotate(Math.PI / 180 * level[i].start);  
                p.save(function() {  
                    cvs.beginPath();  
                    cvs.arc(0, 0, p.height - p.outsideStyle.lineWidth, Math.PI / 180 * 180, Math.PI / 180 * 360);  
                    cvs.fillStyle = level[i].color;  
                    cvs.fill();  
                });  
            });  
        }  
    } 

    panel.prototype.drawLine = function() {  
        var p = this;
        var cvs = this.cvs;  
        for (var i = 0; i <= 180; i++) {  
            p.save(function() {  
                cvs.translate(p.width / 2, p.height);  
                cvs.rotate(Math.PI / 180 * i * 1.1);  
                p.save(function() {  
                    cvs.beginPath();  
                    // cvs.lineTo(-(p.height - p.outsideStyle.lineWidth) + 10, 0);  
                    // cvs.lineTo(-(p.height - p.outsideStyle.lineWidth) + 5, 0 );  
                    cvs.stroke();

                    /*0 - 25 Extreme Fear  25% 0
                    26- 46 Fear          20% 45
                    47 - 54 Neutral      10% 81
                    55 - 75 Greed        20% 117
                    76 - 100Extreme Greed 25% 135*/
                    // var lineAreaValue = {0:"Extreme Fear",45:"Fear",81: "Neutral",117: "Greed",145: "Extreme Greed"};
                    var lineAreaValue = {15:"极度恐惧",53:"恐惧",87: "中立",110: "贪婪",139: "极度贪婪"};
                    if (lineAreaValue.hasOwnProperty(i)) {
                        p.drawText(lineAreaValue[i], i);  
                    }
                });  
            });  
        }  
    } 

    panel.prototype.drawText = function(val, i) {  
        var p = this;  
        var cvs = this.cvs;  
        p.save(function() { 
            cvs.translate(3, -5);  
            // cvs.rotate(0.1);  
            cvs.beginPath();
            cvs.lineWidth = 1;
            cvs.strokeStyle = "#FFF";
            cvs.font = '12px 宋体';
            cvs.strokeText(val, -(p.height - p.outsideStyle.lineWidth), 0);  
            cvs.fill();
        });  
    } 

    panel.prototype.drawSpanner = function(value) {  
        var p = this;  
        var cvs = this.cvs;  
        p.save(function() {  
            cvs.translate(p.width / 2, p.height);  
            cvs.moveTo(0, 0);  
            cvs.arc(0, 0, p.height / 30, 0, (Math.PI / 180) * 360);  
            cvs.lineWidth = 3;  
            cvs.stroke();
        });

        p.save(function() {  
            cvs.translate(p.width / 2, p.height);
            cvs.rotate(Math.PI / 180 * -90);
            p.save(function() {
                cvs.rotate(Math.PI / 180 * value);
                cvs.beginPath();
                cvs.moveTo(5, -3);
                cvs.lineTo(0, -p.height * 0.7);
                cvs.lineTo(-5, -3);
                cvs.lineTo(5, -3); 
                cvs.fill();
            });
        });  
    } 
</script>
<script>
    $(function(){
        $("#riskTip").on('click', function(){
          $(this).parent('p.error').hide();
        });
        setTimeout(function() {
            otcPrice();
        }, 100);
        timer = window.setInterval(function(){
            otcPrice();
        }, 60000);
    });

    function otcPrice()
    {
      $.ajax({
        url:"/api/otc",
        type:"get",
        data:{
            // '_token' : '{{csrf_token()}}',
        },
        headers: {
            'X-CSRF-TOKEN': "{{csrf_token()}}",
        },
        dataType: 'json',
        async: true,
        success: function(res){
            if (res.status) {
                $('.otc table tbody').html("");
            var OTCdata = res.data;
                var otcInfo;
                for (var i in OTCdata) {
                    otcInfo += '<tr>'+
                                  '<td class="thumb">'+
                                    '<img src="'+OTCdata[i].coinImgPath+'" alt="" />'+
                                  '</td>'+
                                  '<td class="name">'+OTCdata[i].coinName+'</td>'+
                                  '<td class="'+OTCdata[i].chgTrend+'">'+OTCdata[i].price.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td>'+
                                  '<td class="'+OTCdata[i].chgTrend+'">'+OTCdata[i].chgRate+'</td>'+
                                '</tr>';
                }
                $('.otc table tbody').append(otcInfo);
            }
        },
        error: function(){
            // $('.otc table tbody');
        }
      });
    }
</script>
@endsection