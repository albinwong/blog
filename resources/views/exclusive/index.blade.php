@extends('layout.exclusive',['title' => 'Albin Wong`s Blog - Pencil do the thinking!'])
@section('seo')
        <meta name="keywords" content="albin,albinwong,blog,Pencil do the thinking,php,技术博客" />
        <meta name="description" content="Albin Wong`s Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结，是一个互联网从业者值得收藏的网站。独自穿越人群看着两岸的灯火,其实所有漂泊的人,不过是为了有一天能够不再漂泊,能用自己的力量撑起天空." />
        <meta property="og:description" content="Albin Wong`s Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结，是一个互联网从业者值得收藏的网站。独自穿越人群看着两岸的灯火,其实所有漂泊的人,不过是为了有一天能够不再漂泊,能用自己的力量撑起天空." />
        <meta property="twitter:description" content="Albin Wong`s Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结，是一个互联网从业者值得收藏的网站。独自穿越人群看着两岸的灯火,其实所有漂泊的人,不过是为了有一天能够不再漂泊,能用自己的力量撑起天空.">
@endsection
@section('content')
<div class="div" style="margin-top: 30px;"></div>
<div class="row">
    <!-- start of page content -->
    <div class="span8 main-listing">
@foreach($articles as $v)
        <article class="format-standrd type-post hentry clearfix">
            <header class="clearfix">
                <h3 class="post-title">
                    <a href="/{{Hashids::connection('recommend')->encode($v['id'])}}.html" title="{{$v['title']}}">{{$v['title']}}</a>
                </h3>
                <div class="post-meta clearfix">
                    <span class="date">{{$v['created_at']}}</span>
                    <span class="author">Albin Wong</span>
                    <span class="category">
                        <a href="/archive/list/{{Hashids::encode($v['cate_id'])}}.html" title="{{$cateList[$v['cate_id']]}}">{{$cateList[$v['cate_id']]}}</a>
                    </span>
                    <!-- <span class="comments">
                        <a href="#" title="">0</a>
                    </span> -->
                    <span class="pv-count">{{$v['page_view']}}</span>
                </div>
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
            <p>{{mb_substr(strip_tags($v['content_html_code']), 0, 200, 'utf-8')}}... </p>
            <p>
                <a class="readmore-link" href="/{{Hashids::connection('recommend')->encode($v['id'])}}.html">Read more</a>
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
            <h3 class="title">分类 Categories</h3>
            <ul>
@foreach ($cateList as $clKey => $clValue)
    @if($cates[$clKey] ?? 0)
                <li>
                    <a href="/archive/list/{{Hashids::encode($clKey)}}.html" title="{{$clValue}}">{{$clValue}}</a>
                    <span>({{$cates[$clKey] ?? 0}})</span>
                </li>
    @endif
@endforeach
            </ul>
        </section>
@include('layout.filing')
        <section class="widget" style="display: none;">
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
<script type='text/javascript' src="{{env('APP_CDN')}}/exclusive/js/jquery.easing.1.34e44.js"></script>
<!-- <script type='text/javascript' src="{{env('APP_CDN')}}/exclusive/js/prettyphoto/jquery.prettyPhotoaeb9.js?ver=3.1.4"></script> -->
<!-- <script type='text/javascript' src="{{env('APP_CDN')}}/exclusive/js/jquery.liveSearchd5f7.js?ver=2.0"></script> -->
<script type='text/javascript' src="{{env('APP_CDN')}}/exclusive/js/jquery.formd471.js"></script>
<script type='text/javascript' src="{{env('APP_CDN')}}/exclusive/js/jquery.validate.minfc6b.js"></script>
@endsection
