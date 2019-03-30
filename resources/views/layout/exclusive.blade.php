<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <!-- META TAGS -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="_token" content="{{csrf_token()}}">
        <meta name="baidu-site-verification" content="AYZCwj0i9n" />
        <meta name="author" content="albinwong">
        <meta name="Copyright" content="albinwong.com">
        <title>{{$title}}</title>
        <link rel='stylesheet' id='bootstrap-css-css'  href='/exclusive/css/bootstrap5152.css' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive-css-css'  href='/exclusive/css/responsive5152.css' type='text/css' media='all' />
        <link rel='stylesheet' id='pretty-photo-css-css'  href='/exclusive/js/prettyphoto/prettyPhotoaeb9.css' type='text/css' media='all' />
        <link rel='stylesheet' id='main-css-css'  href='/exclusive/css/main5152.css' type='text/css' media='all' />
        <link rel="shortcut icon" href="/favicon.ico"/>
        <!-- <link rel="stylesheet" href="/exclusive/font-awesome-4.4.0/css/font-awesome.min.css" type="text/css"> -->
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
                                <li class="{!! $sidebar == 'home' ? 'current-menu-item': '' !!}"><a href="/">首页</a></li>
                                <li class="{!! $sidebar == 'archive' ? 'current-menu-item': '' !!}"><a href="#">博客</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#" title="架构">架构</a>
                                        </li>
                                        <li>
                                            <a href="#" title="互联网">互联网</a>
                                        </li>
                                        <li>
                                            <a href="#" title="运维">运维</a>
                                        </li>
                                        <li>
                                            <a href="#" title="数据库">数据库</a>
                                        </li>
                                        <li>
                                            <a href="#" title="前端">前端</a>
                                        </li>
                                        <li>
                                            <a href="#" title="后端">后端</a>
                                        </li>
                                        <li>
                                            <a href="#" title="研发管理">研发管理</a>
                                        </li>
                                        <li>
                                            <a href="#" title="安全">安全</a>
                                        </li>
                                        <li>
                                            <a href="#" title="区块链">区块链</a>
                                        </li>
                                        <li>
                                            <a href="#" title="资讯">资讯</a>
                                        </li>
                                        <li>
                                            <a href="#" title="计算机理论与基础">计算机理论与基础</a>
                                        </li>
                                        <li>
                                            <a href="#" title="其他">其他</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="{!! $sidebar == 'about' ? 'current-menu-item': '' !!}"><a href="/about">关于</a></li> -->
                                <li class="{!! $sidebar == 'contact' ? 'current-menu-item': '' !!}"><a href="/contact">联系</a></li>
                                <li><a href="https://github.com/albinwong">GitHub</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End of Main Navigation -->
                </div>
            </header>
        </div>
        <!-- End of Header -->
        <div class="div" style="margin-top: 50px;"></div>
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
                                <li><a href="/archive/detail/{{$articleValue['id']}}.html" title="{{$articleValue['title']}}" target="_blank">{{$articleValue['title']}}</a></li>
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
                                <a href="/tags/{{$tagsValue['id']}}" style="color: red!important">{{$tagsValue['name']}}</a>
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
                            <p class="copyright">&copy; 2016-2019 Albinwong.com All Rights Reserved. <br>
                            <a href="http://www.miitbeian.gov.cn" target="_blank" title="" style="color: #fff;">ICP证：京ICP备17026115号</a> </p>
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
                                    <a target="_blank" href="https://www.facebook.com/100014758775849"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://weibo.com/319333577"><i class="fa fa-weibo"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:albinwong@sina.com"><i class="fa fa-mail-forward"></i></a>
                                </li>
                                <li>
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
        <!-- script -->
        <script type='text/javascript' src='/exclusive/js/jquery-2.1.1.js'></script>
        <script src="/js/layer/layer.js"></script>
        <script src='/exclusive/js/custom.js?v=2'></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137037174-1"></script>
        <script>
            var _hmt = _hmt || [];
            (function() {
              var hm = document.createElement("script");
              hm.src = "https://hm.baidu.com/hm.js?59e2b1c07ab5e1abad93b236d38daeba";
              var s = document.getElementsByTagName("script")[0]; 
              s.parentNode.insertBefore(hm, s);
            })();

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-137037174-1');
            $(function(){
                var subscribe = $(".subscribe"),
                    emailBox  = subscribe.find("input[name=subscibe_email]");
                subscribe.find("button").on("click", function(){
                    var email = emailBox.val(),
                        data = 'email='+email;
                    if (!email) {
                        layer.alert('Email地址不能为空！');
                        return false;
                    }
                    $.post('/api/subscribe', data, function(data){
                        if(data.status){
                            layer.alert('Congratulations! You`ve been subscribed.');
                            emailBox.val('');
                        }else {
                            layer.alert(data.msg);
                        }
                    }, 'json');
                });
            });
        </script>
        @yield('js')
    </body>
</html>
