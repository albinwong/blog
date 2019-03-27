@extends('layout.exclusive',['title' => 'AlbinWong---Pencil do the thinking!'])
@section('css')
<meta name="keywords" content="albin,albinwong,Pencil do the thinking,王彬"/>
    <meta name="description" content="Albin,albinwong,blog">
    <meta name="author" content="albinwong">
@endsection
@section('content')
<div class="row">
    <!-- start of page content -->
    <div class="span8 main-listing">
    	@foreach($articles as $v)
        <article class="format-video format-image format-standrd type-post hentry clearfix">
            <header class="clearfix">
                <h3 class="post-title">
                    <a href="/archive/detail/{{$v['id']}}.html" title="{{$v['title']}}">{{$v['title']}}</a></h3>
                <div class="post-meta clearfix">
                    <span class="date">{{$v['created_at']}}</span>
                    <span class="category">
                        <a href="#" title="View all posts in Server &amp; Database">Server &amp; Database</a></span>
                    <span class="comments">
                        <a href="#" title="Comment on Integrating WordPress with Your Website">0 Comments</a></span>
                    <span class="like-count">0</span>
                </div>
                <!-- end of post meta -->
            </header>
			@if(false)
            <a href="#" title="Using Images">
                <img width="770" height="501" src="/exclusive/images/temp/living-room-770x501.jpg" class="attachment-std-thumbnail wp-post-image" alt="Living room">
            </a>
            <div class="post-video">
                <div class="video-wrapper">
                    <iframe src="//player.vimeo.com/video/24535181" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
            </div>
            @endif
            <p>{{$v['intro']}}
                <a class="readmore-link" href="/archivce/{{$v['id']}}">Read more</a>
            </p>
        </article>
        @endforeach
        <div id="pagination" class="list-unstyled">
            <a href="{{$articles->previousPageUrl()}}" class="btn">上一页 </a>
            <a href="{{$articles->nextPageUrl()}}" class="btn">下一页 </a>
        </div>
    </div>
    <!-- end of page content -->
    <!-- start of sidebar -->
    <aside class="span4 page-sidebar">
        <!-- <section class="widget">
            <div class="support-widget">
                <h3 class="title">Support</h3>
                <p class="intro">Need more support? If you did not found an answer, contact us for further help.</p></div>
        </section>
        <section class="widget" style="display: none;">
            <h3 class="title">Featured Articles</h3>
            <ul class="articles">
                <li class="article-entry standard">
                    <h4>
                        <a href="single.html">Integrating WordPress with Your Website</a></h4>
                    <span class="article-meta">25 Feb, 2013 in
                        <a href="#" title="View all posts in Server &amp; Database">Server &amp; Database</a></span>
                    <span class="like-count">66</span></li>
                <li class="article-entry standard">
                    <h4>
                        <a href="single.html">WordPress Site Maintenance</a></h4>
                    <span class="article-meta">24 Feb, 2013 in
                        <a href="#" title="View all posts in Website Dev">Website Dev</a></span>
                    <span class="like-count">15</span></li>
                <li class="article-entry video">
                    <h4>
                        <a href="single.html">Meta Tags in WordPress</a></h4>
                    <span class="article-meta">23 Feb, 2013 in
                        <a href="#" title="View all posts in Website Dev">Website Dev</a></span>
                    <span class="like-count">8</span></li>
                <li class="article-entry image">
                    <h4>
                        <a href="single.html">WordPress in Your Language</a></h4>
                    <span class="article-meta">22 Feb, 2013 in
                        <a href="#" title="View all posts in Advanced Techniques">Advanced Techniques</a>
                    </span>
                    <span class="like-count">6</span>
                </li>
            </ul>
        </section> -->
        <section class="widget">
            <h3 class="title">分类</h3>
            <ul>
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
        </section>
        <section class="widget">
            <h3 class="title">最新评论</h3>
            <ul id="recentcomments">
                <li class="recentcomments">
                    <a href="#" rel="external nofollow" class="url">John Doe</a>on
                    <a href="#">Integrating WordPress with Your Website</a></li>
                <li class="recentcomments">saqib sarwar on
                    <a href="#">Integrating WordPress with Your Website</a></li>
                <li class="recentcomments">
                    <a href="#" rel="external nofollow" class="url">John Doe</a>on
                    <a href="#">Integrating WordPress with Your Website</a></li>
                <li class="recentcomments">
                    <a href="#" rel="external nofollow" class="url">Mr WordPress</a>on
                    <a href="#">Installing WordPress</a></li>
            </ul>
        </section>
    </aside>
    <!-- end of sidebar -->
</div>
<!-- </div> -->
@endsection
@section('js')
<script type='text/javascript' src='/exclusive/js/jquery.easing.1.34e44.js'></script>
<!-- <script type='text/javascript' src='/exclusive/js/prettyphoto/jquery.prettyPhotoaeb9.js?ver=3.1.4'></script> -->
<!-- <script type='text/javascript' src='/exclusive/js/jquery.liveSearchd5f7.js?ver=2.0'></script> -->
<script type='text/javascript' src='/exclusive/js/jflickrfeed.js'></script>
<script type='text/javascript' src='/exclusive/js/jquery.formd471.js'></script>
<script type='text/javascript' src='/exclusive/js/jquery.validate.minfc6b.js'></script>
<script type='text/javascript' src='/exclusive/js/custom5152.js'></script>
@endsection
