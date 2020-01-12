@extends('layout.exclusive',['title' => '数字货币行情 - Albin Wong Blog'])
@section('seo')
        @include('layout.meta')
        <meta name="keywords" content="比特币,albin,数字货币行情,Back-End Engineer" />
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
    padding: 5px;
    line-height: 1.42857143;
    vertical-align: top;
    font-weight: bold;
    /*border-bottom: 1px solid #00d665;*/
    font-size: 13px;
}
.table.table-coins>tbody>tr>td.place {
    color: #97a4b5;
    font-weight: bold;
    text-align: center;
    width: 10px;
    border-right: 1px solid #DDD;
    padding-right: 5px;
}
thead tr>th {
  border-bottom: 3px double black;
}
.text-center {
  text-align: center;
}
.table.table-coins>thead>tr>th.volume {
    text-align: left;
    width: 140px;
    min-width: 140px;
}
.table.table-coins>thead>tr>th.full-volume {
    text-align: left;
    width: 140px;
    min-width: 140px;
}
.table.table-coins>tbody>tr>td.thumb {
    width: 30px;
    line-height: 30px;
    height: 30px;
    text-align: center;
}
.table.table-coins>tbody>tr>td.thumb img {
    width: 25px;
}
.table.table-coins>tbody>tr>td.name {
    width: 50px;
    max-width: 50px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    position: relative;
    overflow: hidden;
    text-align: left;
    font-size: 12px;
}
.table.table-coins>tbody>tr>td {
    vertical-align: middle;
    text-align: left;
    border-right: 1px solid #f5f5f5;
    position: relative;
}
.table.table-coins>tbody>tr>td.price, .table.table-coins>tbody>tr>th.price {
    width: 160px;
    min-width: 160px;
    max-width: 160px;
}
</style>
@endsection
@section('content')
<!-- Start of Page Container -->
    <div class="row" style="">
      <h2 class="post-title">行情数据</h2>
      <hr>
      <p class="error">风险提示及免责声明：本站所提供的行情数据与信息仅供参考，均不作为投资依据。投资有风险，入市需谨慎!<span id="riskTip" style="float:right;">X</span></p>
      <div class="span8 page_content">
        <ul class="tabs-nav">
          <li class="active" style=""><a href="#">币种 Coins</a></li>
          <li><a href="#">交易所平台</a></li>
        </ul>
        <div class="tabs-container">
          <div class="tab-content panel-body" style="display: block;">
            <table class="table table-coins table-hover table-homepage mt" border="0" cellpadding="1" cellspacing="1" style="width: 100%; border-collapse: collapse">
              <thead>
                <tr>
                  <th class="place text-center">#</th>
                  <th class="thumb" style="text-align: center" colspan="2">币名</th>
                  <th class="price text-center">市值</th>
                  <th class="volume">价格</th>
                  <th class="full-volume">流通数量</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($coins as $key => $value) : ?>
                <tr>
                  <td class="place" style="vertical-align: center;">{{$value['cmc_rank']}}</td> 
                  <td class="thumb" style="border-right: none;">
                    <svg viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg" version="1.1">
                      <g fill="none" fill-rule="evenodd">
                        <circle cx="12" cy="10" r="10" stroke-width="1" fill="#D3D3D3" />
                        <path d="M15.8426041,9.88827835 C16.1830454,9.41847646 16.3873141,8.82275849 16.3873141,8.18510804 C16.3873141,6.64134046 15.2213711,5.39119905 13.7745359,5.39119905 L13.3574914,5.39119905 L13.3574914,3.22653423 C13.3574914,3.10069726 13.2553269,3 13.1277016,3 L12.370276,3 C12.2426105,3 12.1404661,3.10071704 12.1404661,3.22653423 L12.1404661,5.39119905 L10.9319479,5.39119905 L10.9319479,3.22653423 C10.9319479,3.10069726 10.8297834,3 10.702138,3 L9.94471241,3 C9.81704694,3 9.71490253,3.10071704 9.71490253,3.22653423 L9.71490253,5.39119905 L7.22978981,5.39119905 C7.10214441,5.39119905 7,5.4919161 7,5.61775306 L7,6.37281442 C7,6.49024511 7.08509025,6.59096216 7.20424869,6.59936843 C8.05531167,6.67486665 8.5148311,7.23701887 8.5148311,7.93339455 L8.5148311,12.5562515 C8.5148311,13.1771092 8.19148415,13.6721496 7.47653347,13.739202 C7.374369,13.747549 7.28931888,13.8231065 7.27228478,13.9153777 L7.12762534,14.6789245 C7.10212435,14.8131677 7.20420857,14.939064 7.34890813,14.939064 L9.72334936,14.939064 L9.72334936,17.0952633 C9.72334936,17.2211002 9.82551383,17.3217975 9.95315923,17.3217975 L10.7105848,17.3217975 C10.8382302,17.3217975 10.9403746,17.2210804 10.9403746,17.0952633 L10.9403746,14.9305984 L12.1489129,14.9305984 L12.1489129,17.0952633 C12.1489129,17.2211002 12.2510774,17.3217975 12.3787028,17.3217975 L13.1361484,17.3217975 C13.2637938,17.3217975 13.3659382,17.2210804 13.3659382,17.0952633 L13.3659382,14.9305984 L14.3872218,14.9305984 C15.8254898,14.9305984 17,13.6972893 17,12.1702354 C16.9915331,11.2221265 16.5318732,10.383121 15.842564,9.88817946 L15.8426041,9.88827835 Z M10.9406154,7.16992692 L12.7959479,7.16992692 C13.4853374,7.16992692 14.0469812,7.72361353 14.0469812,8.403236 C14.0469812,9.08285847 13.4853374,9.63654508 12.7959479,9.63654508 L10.9406154,9.63654508 L10.9406154,7.16988736 L10.9406154,7.16992692 Z M13.39168,13.219101 L10.9321084,13.219101 L10.9321084,10.7608495 L13.39168,10.7608495 C14.0810293,10.7608495 14.6426932,11.3145163 14.6426932,11.9941388 C14.6426932,12.6653352 14.0895163,13.2190812 13.39168,13.2190812 L13.39168,13.219101 L13.39168,13.219101 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                    <!-- <img style="border-width: inherit;width: 100%;" src="{{$value['ImageUrl']}}" alt=""> -->
                  </td>
                  <td class="name" style="border-right: 1px solid #DDD;">
                      {{$value['symbol']}} <br>
                      <i style="font-style: normal; font-size: 12px;" class="ng-binding">{{$value['name']}}</i>
                  </td>
                  <td class="price" style="border-right: 1px solid #DDD;">{{$value['total_supply']}}</td>
                  <td class="volume">{{$value['total_supply']}}</td>
                  <td class="full-volume">{{$value['total_supply']}}</td>
                </tr>
                <?php endforeach; ?>
                <tr>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-content" style="display: none;">...</div>
          <!-- <div class="tab-content" style="display: none;">Third lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</div> -->
        </div>
      </div>

      <aside class="span4 page-sidebar">
       <section class="widget" id="main" style="height: 330px;">
         贪婪指数
       </section>
       <section class="widget">
         涨跌排行榜
       </section>
      </aside>
      <!-- <div class="span12 page-content" id="main" style="height: 880px;">111</div>  -->
    </div>
<!-- End of Page Container -->
@endsection
@section('js')
<script type="text/javascript" src="/echarts/echarts.min.js"></script>
<script type="text/javascript">
$(function(){
  var myChart = echarts.init(document.getElementById('main'));
  /*var option = {
      title: {
          text: 'BTC OHLCV'
      },
      tooltip: {},
      legend: {
          data:['销量']
      },
      xAxis: {
          data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
      },
      yAxis: {},
      series: [{
          name: '销量',
          type: 'bar',
          data: [5, 20, 36, 10, 10, 20]
      }]
  };
  // 使用刚指定的配置项和数据显示图表。  
  myChart.setOption(option);*/

var upColor = '#ec0000';
var upBorderColor = '#8A0000';
var downColor = '#00da3c';
var downBorderColor = '#008F28';


// 数据意义：开盘(open)，收盘(close)，最低(lowest)，最高(highest)

var data0 = splitData([
    ['2013/1/24', 2320.26,2320.26,2287.3,2362.94],
    ['2013/1/25', 2300,2291.3,2288.26,2308.38],
    ['2013/1/28', 2295.35,2346.5,2295.35,2346.92],
    ['2013/1/29', 2347.22,2358.98,2337.35,2363.8],
    ['2013/1/30', 2360.75,2382.48,2347.89,2383.76],
    ['2013/1/31', 2383.43,2385.42,2371.23,2391.82],
    ['2013/2/1', 2377.41,2419.02,2369.57,2421.15],
    ['2013/2/4', 2425.92,2428.15,2417.58,2440.38],
    ['2013/2/5', 2411,2433.13,2403.3,2437.42],
    ['2013/2/6', 2432.68,2434.48,2427.7,2441.73],
    ['2013/2/7', 2430.69,2418.53,2394.22,2433.89],
    ['2013/2/8', 2416.62,2432.4,2414.4,2443.03],
    ['2013/2/18', 2441.91,2421.56,2415.43,2444.8],
    ['2013/2/19', 2420.26,2382.91,2373.53,2427.07],
    ['2013/2/20', 2383.49,2397.18,2370.61,2397.94],
    ['2013/2/21', 2378.82,2325.95,2309.17,2378.82],
    ['2013/2/22', 2322.94,2314.16,2308.76,2330.88],
    ['2013/2/25', 2320.62,2325.82,2315.01,2338.78],
    ['2013/2/26', 2313.74,2293.34,2289.89,2340.71],
    ['2013/2/27', 2297.77,2313.22,2292.03,2324.63],
    ['2013/2/28', 2322.32,2365.59,2308.92,2366.16],
    ['2013/3/1', 2364.54,2359.51,2330.86,2369.65],
    ['2013/3/4', 2332.08,2273.4,2259.25,2333.54],
    ['2013/3/5', 2274.81,2326.31,2270.1,2328.14],
    ['2013/3/6', 2333.61,2347.18,2321.6,2351.44],
    ['2013/3/7', 2340.44,2324.29,2304.27,2352.02],
    ['2013/3/8', 2326.42,2318.61,2314.59,2333.67],
    ['2013/3/11', 2314.68,2310.59,2296.58,2320.96],
    ['2013/3/12', 2309.16,2286.6,2264.83,2333.29],
    ['2013/3/13', 2282.17,2263.97,2253.25,2286.33],
    ['2013/3/14', 2255.77,2270.28,2253.31,2276.22],
    ['2013/3/15', 2269.31,2278.4,2250,2312.08],
    ['2013/3/18', 2267.29,2240.02,2239.21,2276.05],
    ['2013/3/19', 2244.26,2257.43,2232.02,2261.31],
    ['2013/3/20', 2257.74,2317.37,2257.42,2317.86],
    ['2013/3/21', 2318.21,2324.24,2311.6,2330.81],
    ['2013/3/22', 2321.4,2328.28,2314.97,2332],
    ['2013/3/25', 2334.74,2326.72,2319.91,2344.89],
    ['2013/3/26', 2318.58,2297.67,2281.12,2319.99],
    ['2013/3/27', 2299.38,2301.26,2289,2323.48],
    ['2013/3/28', 2273.55,2236.3,2232.91,2273.55],
    ['2013/3/29', 2238.49,2236.62,2228.81,2246.87],
    ['2013/4/1', 2229.46,2234.4,2227.31,2243.95],
    ['2013/4/2', 2234.9,2227.74,2220.44,2253.42],
    ['2013/4/3', 2232.69,2225.29,2217.25,2241.34],
    ['2013/4/8', 2196.24,2211.59,2180.67,2212.59],
    ['2013/4/9', 2215.47,2225.77,2215.47,2234.73],
    ['2013/4/10', 2224.93,2226.13,2212.56,2233.04],
    ['2013/4/11', 2236.98,2219.55,2217.26,2242.48],
    ['2013/4/12', 2218.09,2206.78,2204.44,2226.26],
    ['2013/4/15', 2199.91,2181.94,2177.39,2204.99],
    ['2013/4/16', 2169.63,2194.85,2165.78,2196.43],
    ['2013/4/17', 2195.03,2193.8,2178.47,2197.51],
    ['2013/4/18', 2181.82,2197.6,2175.44,2206.03],
    ['2013/4/19', 2201.12,2244.64,2200.58,2250.11],
    ['2013/4/22', 2236.4,2242.17,2232.26,2245.12],
    ['2013/4/23', 2242.62,2184.54,2182.81,2242.62],
    ['2013/4/24', 2187.35,2218.32,2184.11,2226.12],
    ['2013/4/25', 2213.19,2199.31,2191.85,2224.63],
    ['2013/4/26', 2203.89,2177.91,2173.86,2210.58],
    ['2013/5/2', 2170.78,2174.12,2161.14,2179.65],
    ['2013/5/3', 2179.05,2205.5,2179.05,2222.81],
    ['2013/5/6', 2212.5,2231.17,2212.5,2236.07],
    ['2013/5/7', 2227.86,2235.57,2219.44,2240.26],
    ['2013/5/8', 2242.39,2246.3,2235.42,2255.21],
    ['2013/5/9', 2246.96,2232.97,2221.38,2247.86],
    ['2013/5/10', 2228.82,2246.83,2225.81,2247.67],
    ['2013/5/13', 2247.68,2241.92,2231.36,2250.85],
    ['2013/5/14', 2238.9,2217.01,2205.87,2239.93],
    ['2013/5/15', 2217.09,2224.8,2213.58,2225.19],
    ['2013/5/16', 2221.34,2251.81,2210.77,2252.87],
    ['2013/5/17', 2249.81,2282.87,2248.41,2288.09],
    ['2013/5/20', 2286.33,2299.99,2281.9,2309.39],
    ['2013/5/21', 2297.11,2305.11,2290.12,2305.3],
    ['2013/5/22', 2303.75,2302.4,2292.43,2314.18],
    ['2013/5/23', 2293.81,2275.67,2274.1,2304.95],
    ['2013/5/24', 2281.45,2288.53,2270.25,2292.59],
    ['2013/5/27', 2286.66,2293.08,2283.94,2301.7],
    ['2013/5/28', 2293.4,2321.32,2281.47,2322.1],
    ['2013/5/29', 2323.54,2324.02,2321.17,2334.33],
    ['2013/5/30', 2316.25,2317.75,2310.49,2325.72],
    ['2013/5/31', 2320.74,2300.59,2299.37,2325.53],
    ['2013/6/3', 2300.21,2299.25,2294.11,2313.43],
    ['2013/6/4', 2297.1,2272.42,2264.76,2297.1],
    ['2013/6/5', 2270.71,2270.93,2260.87,2276.86],
    ['2013/6/6', 2264.43,2242.11,2240.07,2266.69],
    ['2013/6/7', 2242.26,2210.9,2205.07,2250.63],
    ['2013/6/13', 2190.1,2148.35,2126.22,2190.1]
]);


function splitData(rawData) {
    var categoryData = [];
    var values = []
    for (var i = 0; i < rawData.length; i++) {
        categoryData.push(rawData[i].splice(0, 1)[0]);
        values.push(rawData[i])
    }
    return {
        categoryData: categoryData,
        values: values
    };
}

function calculateMA(dayCount) {
    var result = [];
    for (var i = 0, len = data0.values.length; i < len; i++) {
        if (i < dayCount) {
            result.push('-');
            continue;
        }
        var sum = 0;
        for (var j = 0; j < dayCount; j++) {
            sum += data0.values[i - j][1];
        }
        result.push(sum / dayCount);
    }
    return result;
}



option = {
    title: {
        text: '上证指数',
        left: 0
    },
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'cross'
        }
    },
    legend: {
        data: ['日K', 'MA5', 'MA10', 'MA20', 'MA30']
    },
    grid: {
        left: '10%',
        right: '10%',
        bottom: '15%'
    },
    xAxis: {
        type: 'category',
        data: data0.categoryData,
        scale: true,
        boundaryGap: false,
        axisLine: {onZero: false},
        splitLine: {show: false},
        splitNumber: 20,
        min: 'dataMin',
        max: 'dataMax'
    },
    yAxis: {
        scale: true,
        splitArea: {
            show: true
        }
    },
    dataZoom: [
        {
            type: 'inside',
            start: 50,
            end: 100
        },
        {
            show: true,
            type: 'slider',
            top: '90%',
            start: 50,
            end: 100
        }
    ],
    series: [
        {
            name: '日K',
            type: 'candlestick',
            data: data0.values,
            itemStyle: {
                color: upColor,
                color0: downColor,
                borderColor: upBorderColor,
                borderColor0: downBorderColor
            },
            markPoint: {
                label: {
                    normal: {
                        formatter: function (param) {
                            return param != null ? Math.round(param.value) : '';
                        }
                    }
                },
                data: [
                    {
                        name: 'XX标点',
                        coord: ['2013/5/31', 2300],
                        value: 2300,
                        itemStyle: {
                            color: 'rgb(41,60,85)'
                        }
                    },
                    {
                        name: 'highest value',
                        type: 'max',
                        valueDim: 'highest'
                    },
                    {
                        name: 'lowest value',
                        type: 'min',
                        valueDim: 'lowest'
                    },
                    {
                        name: 'average value on close',
                        type: 'average',
                        valueDim: 'close'
                    }
                ],
                tooltip: {
                    formatter: function (param) {
                        return param.name + '<br>' + (param.data.coord || '');
                    }
                }
            },
            markLine: {
                symbol: ['none', 'none'],
                data: [
                    [
                        {
                            name: 'from lowest to highest',
                            type: 'min',
                            valueDim: 'lowest',
                            symbol: 'circle',
                            symbolSize: 10,
                            label: {
                                show: false
                            },
                            emphasis: {
                                label: {
                                    show: false
                                }
                            }
                        },
                        {
                            type: 'max',
                            valueDim: 'highest',
                            symbol: 'circle',
                            symbolSize: 10,
                            label: {
                                show: false
                            },
                            emphasis: {
                                label: {
                                    show: false
                                }
                            }
                        }
                    ],
                    {
                        name: 'min line on close',
                        type: 'min',
                        valueDim: 'close'
                    },
                    {
                        name: 'max line on close',
                        type: 'max',
                        valueDim: 'close'
                    }
                ]
            }
        },
        {
            name: 'MA5',
            type: 'line',
            data: calculateMA(5),
            smooth: true,
            lineStyle: {
                opacity: 0.5
            }
        },
        {
            name: 'MA10',
            type: 'line',
            data: calculateMA(10),
            smooth: true,
            lineStyle: {
                opacity: 0.5
            }
        },
        {
            name: 'MA20',
            type: 'line',
            data: calculateMA(20),
            smooth: true,
            lineStyle: {
                opacity: 0.5
            }
        },
        {
            name: 'MA30',
            type: 'line',
            data: calculateMA(30),
            smooth: true,
            lineStyle: {
                opacity: 0.5
            }
        },

    ]
};
myChart.setOption(option);
});



</script>
<script>
$("#riskTip").on('click', function(){
  // $(this).parent('p.error').hide();
  huobi_test();
});

function huobi_test()
{
  $.ajax({
    url:"/api/digiccy",
    type:"post",
    data:{
      // '_token':$("meta[name='_token']").attr('content'),
    },
    async: true,
    success: function(res){
      console.log(res);
      /*if(res.status){
      }else{
          
      }*/
    }
  });
  // console.log(111);
}
</script>
@endsection