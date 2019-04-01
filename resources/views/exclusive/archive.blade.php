@extends('layout.exclusive',['title' => $cateName.' | Albin Wong Blog'])
@section('css')
@endsection
@section('content')
<div class="page-container">
    <div class="container">
        <div class="row">
            <!-- start of page content -->
            <div class="page-content">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Albin Wong</a>
                        <span class="divider">/</span>
                    </li>
                    <li class="active">{{$cateName}}</li>
                </ul>
        </div>
    </div>
    <!-- start of page content -->
    <div class="span8 main-listing">
    	@if ($articles->total() > 0)
    	@foreach($articles as $v)
        <article class="format-standrd type-post hentry clearfix"> <!-- format-video format-image  -->
            <header class="clearfix">
                <h3 class="post-title">
                    <a href="/{{Hashids::connection('recommend')->encode($v['id'])}}.html" title="{{$v['title']}}">{{$v['title']}}</a>
                </h3>
                <div class="post-meta clearfix">
                    <span class="date">{{$v['created_at']}}</span>
                    <span class="author">Albin Wong</span>
                    <span class="category">
                        <a href="/archive/list/{{Hashids::encode($v['cate_id'])}}.html" title="{$cateList[$v['cate_id']]}}">{{$cateList[$v['cate_id']]}}</a>
                    </span>
                    <span class="comments">
                        <a href="#" title="">0</a>
                    </span>
                    <span class="pv-count">{{$v['page_view']}}</span>
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
                <a class="readmore-link" href="/{{Hashids::connection('recommend')->encode($v['id'])}}.html">Read more</a>
            </p>
        </article>
        @endforeach
        @else 
        <div style="margin: 100px 50px;">
        	<h3>No articles!</h3>
        	<p class="notice">暂无相关文章!</p>
        </div>
        @endif
        @if ($articles->total() > 2)
        <div id="pagination" class="list-unstyled">
            <a href="{{$articles->previousPageUrl()}}" class="btn">上一页 </a>
            <a href="{{$articles->nextPageUrl()}}" class="btn">下一页 </a>
        </div>
        @endif
    </div>
</div>
@endsection
@section('js')
@endsection