<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <!-- META TAGS -->
        <meta charset="UTF-8" />
        <title>{{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="google-site-verification" content="JVIqOJwwheTUldJ-VflUIhkb7PmC_U5PPmMZBuJYD2M" />
        <meta name="baidu-site-verification" content="AYZCwj0i9n" />
        <meta name="sogou_site_verification" content="o62AVopAMZ" />
        <meta name="msvalidate.01" content="1B6604F318075DAFFAA6A0E8B3462066" />
        <meta name="author" content="albinwong" />
        <meta name="copyright" content="https://www.albinwong.com" />
        <meta name="revisit-after" content="7 days" />
        <meta property="og:title" content="{{$title}}" />
        <meta property="og:type" content="article" />
        <meta property="og:site_name" content="albinwong.com" />
        <meta property="og:url" content="{{URL::full()}}" />
        <meta property="og:image" content="{{env('APP_CDN')}}/logo.png" /> 
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:alt" content="Albin Wong" />
        <meta property="twitter:site" content="@albinwong" />
        <meta property="twitter:creator" content="@Albin_Wong" />
        <meta property="twitter:card" content="summary" />
        <meta property="twitter:title" content="{{$title}}" />
        <meta property="twitter:url" content="{{URL::full()}}">
        <meta property="twitter:image" content="{{env('APP_CDN')}}/logo.png" />
        <meta property="fb:fbid" content="Ciyqxd17HD5" /> 
        <meta property="fb:app_id" content="425855268165541" /> 
        <meta name="_token" content="{{csrf_token()}}" />
@yield('seo')
        <link rel="shortcut icon" href="{{env('APP_CDN')}}/favicon.ico" />
        <link rel="stylesheet" id="bootstrap-css-css" href="{{env('APP_CDN')}}/exclusive/css/bootstrap.css" type="text/css" media="all" />
        <link rel="stylesheet" id="responsive-css-css" href="{{env('APP_CDN')}}/exclusive/css/responsive.css" type="text/css" media="all" />
        <link rel="stylesheet" id="main-css-css"  href="{{env('APP_CDN')}}/exclusive/css/main.css" type="text/css" media="all" />
@yield('css')
    </head>
    <body>
        <!-- Start of Header -->
        <div class="header-wrapper">
            <header class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="logo-container">
                        <span class="tag-line" style="font-size:20px;color: #ffffff" onclick="javascript:window.location.href='/'">Albin Wong</span>
                    </div>
                    <!-- Start of Main Navigation -->
                    <nav class="main-nav">
                        <div class="menu-top-menu-container">
                            <ul id="menu-top-menu" class="clearfix">
                                <li class="{!! isset($sidebar) && $sidebar == 'home' ? 'current-menu-item': '' !!}">
                                    <a href="/">首页</a>
                                </li>
                                <li class="{!! isset($sidebar) && $sidebar == 'archive' ? 'current-menu-item': '' !!}">
                                    <a href="javascript:void(0);">博客</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(1)}}.html" title="架构">架构</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(2)}}.html" title="互联网">互联网</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(3)}}.html" title="运维">运维</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(4)}}.html" title="数据库">数据库</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(5)}}.html" title="前端">前端</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(6)}}.html" title="后端">后端</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(7)}}.html" title="研发管理">研发管理</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(8)}}.html" title="安全">安全</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(9)}}.html" title="区块链">区块链</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(10)}}.html" title="资讯">资讯</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(11)}}.html" title="计算机理论与基础">计算机理论与基础</a>
                                        </li>
                                        <li>
                                            <a href="/archive/list/{{Hashids::encode(12)}}.html" title="其他">其他</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="{!! isset($sidebar) && $sidebar == 'about' ? 'current-menu-item': '' !!}"><a href="/about">关于</a></li> -->
                                <!-- <li class="{!! isset($sidebar) && $sidebar == 'market' ? 'current-menu-item': '' !!}">
                                    <a href="/market">数字货币</a>
                                </li> -->
                                <li class="{!! isset($sidebar) && $sidebar == 'contact' ? 'current-menu-item': '' !!}">
                                    <a href="/contact">联系</a>
                                </li>
                                <li>
                                    <a href="https://github.com/albinwong" target="_blank">GitHub</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End of Main Navigation -->
                </div>
            </header>
        </div>
        <!-- End of Header -->
        <!-- Start of Search Wrapper -->
        <!-- <div class="search-area-wrapper">
            <div class="search-area container">
                <h3 class="search-header">Have a Question?</h3>
                <p class="search-tag-line">If you have any question you can ask below or enter what you are looking for!</p>
                <form id="search-form" class="search-form clearfix" method="get" action="#" autocomplete="off">
                    <input class="search-term required" type="text" id="s" name="s" placeholder="Type your search terms here" title="* Please enter a search term!" />
                    <input class="search-btn" type="submit" value="Search" />
                    <div id="search-error-container"></div>
                </form>
            </div>
        </div> -->
        <!-- End of Search Wrapper -->

        <!-- Start of Page Container -->
        <div class="page-container">
            <div class="container">
            @yield('content')
            </div>
        </div>
        <!-- End of Page Container -->
        <!-- Start of Footer -->
        <footer id="footer-wrapper">
            <div id="footer" class="container">
                <div class="row">
                    <div class="span3">
                        <section class="widget">
                            <h3 class="title">关于我</h3>
                            <div class="textwidget">
                                <p>独自穿越人群看着两岸的灯火</p>
                                <p>其实所有漂泊的人</p>
                                <p>不过是为了有一天能够不再漂泊</p>
                                <p>能用自己的力量撑起天空</p>
                            </div>
                        </section>
                    </div>
                    <?php
                        $tags = \App\Http\Controllers\CommonController::tags();
                        $article = \App\Http\Controllers\CommonController::lastArticle();
                    ?>
                    <div class="span3">
                        <section class="widget">
                            <h3 class="title">最新文章</h3>
                            <ul>
@foreach($article as $articleValue)
                                <li style="width: 210px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                    <a href="/{{Hashids::connection('recommend')->encode($articleValue['id'])}}.html" title="{{$articleValue['title']}}" target="_blank">{{$articleValue['title']}}</a>
                                </li>
@endforeach
                            </ul>
                        </section>
                    </div>
                    <div class="span3 subscribe">
                        <section class="widget">
                            <h3 class="title">文章订阅</h3>
                            如果您想接收我的最新消息直接发送到您的电子邮件，请留下您的电子邮件地址。订阅是免费的，您可以随时取消。
                            <div id="twitter_update_list">
                                <input type="text" name="subscibe_email" value="" size="40" placeholder="Your Email" />
                                <button type="button" class="btn btn-primary btn-sm">订阅</button>
                            </div>
                        </section>
                    </div>
                    <div class="span3">
                        <section class="widget">
                            <h3 class="title">Tags</h3>
                            <div class="tagcloud" >
@foreach($tags as $tagsValue)
                                <a href="/archive/tag/{{Hashids::encode($tagsValue['id'])}}.html">
                                    <span style="color: #00B2EE!important">{{$tagsValue['name']}}</span>
                                </a>
@endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- end of #footer -->
            <!-- Footer Bottom -->
            <div id="footer-bottom-wrapper">
                <div id="footer-bottom" class="container">
                    <div class="row">
                        <div class="span6">
                            <p class="copyright">&copy; 2016-2026 Albinwong.com All Rights Reserved. <br>
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAoCAYAAACWwljjAAAFQklEQVRYw+3Wa1BUdRjH8SOpMeg4WhZGpDIxiaaTeUFgWrxE4AVRQJGlRRAVIV1JkbgMgQLi5AVBQSVLSp0xlEAUKBEEFZCrCstll8UV2AV2YbmoGCrYv31+R95UL5pmmtamZ+bz6rz5nvOc/5zDcX9jGLs/iTxuyvIlWYkRFeTHA2HVRFtzfhthTG5KuH96/vUgNlC4mMgyw1NJit/aAXLKazYje9xtIMZ/OZz50gW+9hcNkvoLEemEPbnrSP47QYwxQ5Ifv54RqzcXwFFvSyjaOhfavN8F7Y5ZcC/HH9JOB4LNa9Zw5YA76OZV8vIGMdZtSp7cDrtOnOavYiQhTAiPwi1AMtIQaqyngsxpBtw2GAGDKfaQmpUAa6xc4Vfp4UtEdzAMycsT9JQ1Tyctl/2eEkuTlYysF/rCUNxMqDEzgTqzSXBnpgnIHCzgjvEEuD52DLBr3rA1MAaWmNtB582wdtIljZ9G9D+IPU6aTxIPBjHCcXvg3CEh9K2fDLWvjIH6D6fwTIyheuwEqLUyhzLOALq8pkN+bgRw3HY4FBsMzxojZxP9DequLjAlQwVrbpIjhyIY4UYGQ/buhdBqPxlk3Gion2IMDQIz3kJe/ZS34I7uHkmD7VSQVgYDNyIAwsNCgfXGXoOBPjP9DKrOCAogA2etGTmTHAMcFwFZye7wS5QlVHGjoEw4A2qPCUBZ6AzNcQ5Q/YYRdO+YB1U3dsDwypLio4FJ3ECryIzWz6Cm3NgTRHN8HiPF6eHAGSbAdh8feFZkB7krzaHE9h2o85sDsiAbkIsXQMN+e2CtGyF0kzdwXCgU5++D/ouLQFV4OEU/g2Q/iNuIPNaKkQflAWBqexxGjhLDVUcL6IwSQN3SGVChe6FJg9dckCx6D1QBliDZLIAxo7eA8eyv4KE0BJqTrHkZvnL9DJKn+Twmt0NsGGHZy2Dn3kQYfsQ53Hh4/r4RNGz8AIpdzKEuaAF0RC2E57MmQgE3ATjuM/CPiANW7AqSfQJQ5vk362eQKmd3JrmXsoSRocpNIMnbB9zbceDIWUPmuHFQNMkISqa9DpUvNK6YDpW2s8DfwBK48WFQnhMCgzUBoLy0BrRVe5P0NWjPLdKUsJiR1tR1wGp8IeZwMgx/SrgRvjxuAziNcwLvyathLOcJHLflhRDYGRYFrNET2rJ5yvPLoas0tOj/oL8UpC4JHyTSU+6MNCS4gvKoAB5WiKG+MAQSg0WwLXQ/ZJ3xhao0FxB5hYCbUwAEfhEF3Td8QP2dAOQnPwFlxgrolUVq9TPoaX+ZB2nLc2Gk6awj1MU78HZZwJMid2Byb550JQwVO0NfxlJgdz14vWKeRAiK6DlQF28PLZdcoLNcBIO92bb6GTQ8Q/33RURT6tlH2gvXMlITLYD6uI+gp2ozdF0VQXumM6ivCqGvahM8kPiDItkeGo8tB025GFQ3xFrSr06zI3/4yde7oN7m0sWk5eKWDqK5JWJQvAHac9ygq3Adr9gTNNc3QG85rzPfHe5/7wDtPwuhp/Zz6CjyhaZzwi6ivfetHdH/oP77+3PJQOsuRnqkQdCa4wWqyx6gyecpL64GTaEX7ycXUJz4GJp1B4O0X/Hg0Xp1tFV+8Ei1k6c5coHofxBrrzQinbKYo0SVJ+wn6iurGHlY5gY911aDJnMFaHXXiDp9GQyvtKfUA9QFTtBZ7gPdit0tpFd9OpwwFmlA9D/o9yNLDpxIKmI8PMnNSNtviCLVpYTITzrXEGWaq4qos0WgOPdpCenIF+eRrurjB4k0PXopYZG6gMg/D/gNBUxhAbSAmKMAAAAASUVORK5CYII=" alt="公安备案图标" style="width:12px;height:12px;"><a style="color:#ff6a00;"  href="https://beian.mps.gov.cn/#/query/webSearch?code=11011402055074" rel="noreferrer" target="_blank">京公网安备11011402055074号</a>

                            ICP证：<a href="//beian.miit.gov.cn" target="_blank" style="color: #ff6a00;">京ICP备17026115号-1</a></p>
                        </div>
                        <div class="span6">
                            <!-- Social Navigation -->
                            <ul class="social-nav clearfix">
                                <li class="linkedin">
                                    <a target="_blank" href="https://www.linkedin.com/in/albinwong/"></a>
                                </li>
                                <li class="twitter">
                                    <a target="_blank" href="https://twitter.com/Albin_Wong"></a>
                                </li>
                                <li class="facebook">
                                    <a target="_blank" href="https://www.facebook.com/albin.wong.3958"></a>
                                </li>
                                <li class="weibo">
                                    <a target="_blank" href="https://weibo.com/319333577"><i class="fa fa-weibo"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:albinwong@sina.com"><i class="fa fa-mail-forward"></i></a>
                                </li>
                                <li class="github">
                                    <a href="https://github.com/albinwong"><i class="fa fa-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Footer Bottom -->
        </footer>
        <!-- End of Footer -->
        <a href="#top" id="scroll-top"></a>
    </body>
    <!-- script -->
    <script type="text/javascript" src="{{env('APP_CDN')}}/exclusive/js/jquery-2.1.1.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137037174-1"></script>
    <script async src="{{env('APP_CDN')}}/exclusive/js/subscribe.js"></script>
    <script src="{{env('APP_CDN')}}/exclusive/js/analytics.js"></script>
    <script src="{{env('APP_CDN')}}/js/layer/layer.js"></script>
    <script src="{{env('APP_CDN')}}/exclusive/js/custom.js"></script>
@yield('js')
</html>
