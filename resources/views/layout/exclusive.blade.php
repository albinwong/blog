<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by HTML5XCSS3 dot com - Free Responsive Html5 Templates">
    <meta name="author" content="#">
    <meta name="_token" content="{{csrf_token()}}">
    <title>@yield('title','AlbinWong')</title>
    <link rel="stylesheet" href="/exclusive/css/bootstrap.min.css"  type="text/css">
    <link href="/exclusive/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/exclusive/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="/exclusive/css/style.css">
    <link rel="stylesheet" href="/exclusive/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
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
                        <a class="page-scroll" target="_blank" href="https://github.com/albinwong">GitHub</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner">
            <div class="item active">
                <img src="/exclusive/images/banner1.jpg" alt="...">
                <div class="container">
                <div class="header-text hidden-xs">
                    <div class="col-md-12 text-center">
                        <h1>Free Bootstrap Themes Html5xCss3 dot com</h1>
                        <hr>
                        <p>Nunc eu velit metus. Donec in massa libero. Donec bibendum orci a lorem scelerisque luctus. Aliquam et ante quis erat semper pretium.</p>
                        <a href="" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <img src="/exclusive/images/banner2.jpg" alt="...">
                <div class="header-text hidden-xs">
                    <div class="col-md-12 text-center">
                        <h1>Free Bootstrap Themes Html5xCss3 dot com</h1>
                        <hr>
                        <p>Suspendisse porttitor sapien ac lectus euismod imperdiet. Curabitur nec nibh at massa pellentesque accumsan eu id nibh. Donec accumsan ut mi.</p>
                        <a href="" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <header class="container">
        <div class="site-branding">
            <h1 class="site-title">
                <a href="index.html">
                    <span>Justice</span>
                </a>
            </h1>
            <h2 class="site-description">Welcome to Us !</h2>
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
                        <h2 class="footer-title">About Us</h2>
                        <div class="textwidget">Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. <br> <br> 
                        Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan.</div>
                    </div> 
                    <div class="col-footer col-md-3 widget_recent_entries">
                        <h2 class="footer-title">Recent Posts</h2>
                        <ul>
                            <li><a href="#">MOST VISITED COUNTRIES</a></li>
                            <li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
                            <li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
                            <li><a href="#">STARTUP COMPANY&#8217;S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
                        </ul>
                    </div>
                    <div class="col-footer col-md-3">
                        <h2 class="footer-title">NEWS LETTER</h2>
                        If you want to receive our latest news send directly to your email, please leave your email address bellow. Subscription is free and you can cancel anytime.
                        <form action="#" method="post">
                            <input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
                            <input type="submit" value="SUBSCRIBE" class="btn btn-skin" />
                        </form>
                    </div>
                    <div class="col-footer col-md-3">
                        <h2 class="footer-title">Tags</h2>
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
                        <p> &copy; 2016-2018 Albinwong.com 版权所有 <br>  <a href="javascript:viod(0)" target="_blank" title="">ICP证：京ICP备17026115号</a> </p>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
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