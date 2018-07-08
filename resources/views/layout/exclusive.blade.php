<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="albinwong,Pencil do the thinking,王彬"/>
    <meta name="description" content="Albin,albinwong,blog">
    <meta name="author" content="albinwong">
    <meta name="_token" content="{{csrf_token()}}">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="/exclusive/css/bootstrap.min.css"  type="text/css">
    <link href="/exclusive/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/exclusive/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="/exclusive/css/style.css">
    <link rel="stylesheet" href="/exclusive/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
    @yield('css')
</head>
<body class="index-page">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">AlbinWong</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" class="{!! isset($sidebar) ? 'a1': '' !!}" href="/">首页</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/archive">博客</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/about">关于</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/contact">联系</a>
                    </li>
                    <li>
                        <a class="page-scroll" style="text-transform: none;" target="_blank" href="https://github.com/albinwong">GitHub</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('header')
    <header class="container" style="visibility: hidden;">
        <div class="site-branding">
            <h1 class="site-title">
                <a href="/">
                    <span>Albin</span>
                </a>
            </h1>
            <h2 class="site-description">Welcome!</h2>
        </div>
        <div class="social-links">
            <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="wrap-footer">
            <div class="container">
                <div class="row"> 
                    <div class="col-footer col-md-3">
                        <h2 class="footer-title">关于我</h2>
                        <div class="textwidget">独自穿越人群看着两岸的灯火<br>其实所有漂泊的人 <br>不过是为了有一天能够不再漂泊 <br> 能用自己的力量撑起天空 </div>
                    </div> 
                    <div class="col-footer col-md-3 widget_recent_entries">
                        <h2 class="footer-title">最新文章</h2>
                        <ul>
                            <li><a href="#">MOST VISITED COUNTRIES</a></li>
                            <li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
                            <li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
                            <li><a href="#">STARTUP COMPANY&#8217;S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
                        </ul>
                    </div>
                    <div class="col-footer col-md-3">
                        <h2 class="footer-title">文章订阅</h2>
                        如果您想接收我的最新消息直接发送到您的电子邮件，请留下您的电子邮件地址。订阅是免费的，您可以随时取消。
                        <form action="#" method="post">
                            <input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
                            <input type="submit" value="订阅" class="btn btn-skin" />
                        </form>
                    </div>
                    <div class="col-footer col-md-3">
                        <h2 class="footer-title" style="text-transform: none;">Tags</h2>
                        <div class="footer-tags">
                            <a href="#">PHP</a>
                            <a href="#">html</a>
                            <a href="#">css</a>
                            <a href="#">mysql</a>
                            <a href="#">linux</a>
                            <a href="#">javascript</a>
                            <a href="#">python</a>
                            <a href="#">laravel</a>
                            <a href="#">yii</a>
                            <a href="#">tp</a>
                            <a href="#">随笔</a>
                            <a href="#">旅行</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p> &copy; 2016-2018 Albinwong.com All Rights Reserved. <br>  <a href="javascript:viod(0)" target="_blank" title="">ICP证：京ICP备17026115号</a> </p>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a target="_blank" href="https://weibo.com/319333577"><i class="fa fa-weibo"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/100014758775849"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="mailto:albinwong@sina.com"><i class="fa fa-mail-forward"></i></a>
                            </li>
                            <li><a href="https://github.com/albinwong"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="#">隐私策略</a></li>
                            <li><a href="#">服务条款</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="/exclusive/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/exclusive/js/bootstrap.min.js"></script>
    <script src="/exclusive/js/agency.js"></script>
    <script src="/exclusive/js/jquery.easing.min.js"></script>
    <script src="/exclusive/js/classie.js"></script>
    <script src="/exclusive/js/cbpAnimatedHeader.js"></script>
    @yield('js')
</body>
</html>