<?php
    $category = [
        1 => '架构',
        '互联网',
        '运维',
        '数据库',
        '前端',
        '后端',
        '研发管理',
        '安全',
        '区块链',
        '资讯',
        '计算机理论与基础',
        '其他',
    ];
    $description = str_replace('[TOC]', '', $data->content_html_code);
    $description = mb_substr(str_replace("\n", "", strip_tags($description)), 0, 120, "utf-8");
    ?>
@extends('layout.exclusive',['title' => $data->title.' - '.$category[$data->cate_id].' - Albin Wong`s Blog'])
@section('seo')
        <meta name="keywords" content="{{$data->seo}}albin,{{$category[$data->cate_id]}},albinwong"/>
        <meta name="description" content="{{$description}}">
        <meta property="og:description" content="{{$description}}" />
        <meta property="twitter:description" content="{{$description}}...">
@endsection
@section('css')
        <link rel="stylesheet" href="{{env('APP_CDN')}}/highlight/styles/default.css">

<link rel="stylesheet" type="text/css" href="/editor/css/editormd.min.css" />
<link rel="stylesheet" href="/editor/css/editormd.css" />
        <style>
            /*.hljs {
                border: 0;
                font-size: 12px;
                background: #eee !important;
                display: block;
                padding: 1px;
                margin: 0;
                width: 100%;
                font-weight: 200;
                color: #333;
                white-space: pre-wrap;
            }
            .hljs ol {
                list-style: decimal;
                margin: 0px 0px 0 40px !important;
            }
            .hljs ol li {
                list-style: decimal-leading-zero;
                border-left: 1px dashed #FF9912 !important;
                padding: 5px!important;
                margin: 0 !important;
                line-height: 14px;
                word-break: break-all;
                word-wrap: break-word;
            }*/
            table,table tr th, table tr td {
                border:1px solid #FFF;
            }
            table th, table td {
                border: 1px solid #E6E6E6;
                padding: 5px 8px;
                word-break: normal;
            }
            table th {
                background: #F3F3F3;
            }
            .editormd-html-preview {
                padding: 0;
                margin:0;
                border-width: 0;
                height: 100%;
            }
        </style>
@endsection
@section('content')
<!-- <div class="page-container"> -->
    <div class="container">
        <div class="row">
            <!-- start of page content -->
            <div class="page-content">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Albin Wong</a>
                        <span class="divider">/</span></li>
                    <li>
                        <a href="/archive/list/{{Hashids::encode($data->cate_id)}}.html" title="{{$category[$data->cate_id]}}">{{$category[$data->cate_id]}}</a>
                        <span class="divider">/</span>
                    </li>
                    <li class="active">{{$data->title}}</li>
                </ul>
                <article class=" type-post format-standard hentry clearfix">
                    <h1 class="post-title">
                        <a href="#">{{$data->title}}</a></h1>
                    <div class="post-meta clearfix">
                        <span class="date">{{date('Y-m-d H:i:s', strtotime($data->created_at))}}</span>
                        <span class="author">
                            Albin Wong
                            <!-- <a href="/archive/category/{{$data->cate_id}}" title="{{$category[$data->cate_id]}}">{{$category[$data->cate_id]}}</a> -->
                        </span>
                        <!-- <span class="comments">
                            <a href="#" title="">0</a>
                        </span> -->
                        <span class="pv-count">{{$data->page_view}}</span></div>
                    <?php if ($data->intro) : ?>
                        <blockquote>
                            {!!$data->intro!!}
                        </blockquote>
                    <?php endif; ?>
                    <!-- end of post meta -->
                    <div id="editormd" class="editormd" style="border:0; ">
                        <textarea style="display:none;" name="editormd-markdown-doc">{!!$data->content!!}</textarea>
                    </div>
                </article>
                <div class="like-btn">
                    <span class="tags">
                        <span class="tag-ico" style="float: left;"></span>
                        <div class="tagcloud">
                        <?php foreach ($tags as $tagKey => $tagValue) : ?>
                            <a href="/archive/tag/{{Hashids::encode($tagValue['id'])}}.html" title="{{$tagValue['name']}}">{{$tagValue['name']}}</a>
                        <?php endforeach ?>
                        </div>
                    </span>
                </div>
                <section style="display: none;" id="comments">
                    <h3 id="comments-title">(3) Comments</h3>
                    <ol class="commentlist">
                        <li class="comment even thread-even depth-1" id="li-comment-2">
                            <article id="comment-2">
                                <a href="#">
                                    <img alt="" src="#" class="avatar avatar-60 photo" height="60" width="60"></a>
                                <div class="comment-meta">
                                    <h5 class="author">
                                        <cite class="fn">
                                            <a href="#" rel="external nofollow" class="url">John Doe</a></cite>-
                                        <a class="comment-reply-link" href="#">Reply</a></h5>
                                    <p class="date">
                                        <a href="#">
                                            <time datetime="2013-02-26T13:18:47+00:00">February 26, 2013 at 1:18 pm</time></a>
                                    </p>
                                </div>
                                <!-- end .comment-meta
                                <div class="comment-body">
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                </div>
                                <!-- end of comment-body -->
                            </article>
                            <!-- end of comment -->
                            <ul class="children">
                                <li class="comment byuser comment-author-saqib-sarwar bypostauthor odd alt depth-2" id="li-comment-3">
                                    <article id="comment-3">
                                        <a href="#">
                                            <img alt="" src="#" class="avatar avatar-60 photo" height="60" width="60"></a>
                                        <div class="comment-meta">
                                            <h5 class="author">
                                                <cite class="fn">saqib sarwar</cite>-
                                                <a class="comment-reply-link" href="#">Reply</a></h5>
                                            <p class="date">
                                                <a href="#">
                                                    <time datetime="2013-02-26T13:20:14+00:00">February 26, 2013 at 1:20 pm</time></a>
                                            </p>
                                        </div>
                                        <!-- end .comment-meta -->
                                        <div class="comment-body">
                                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                        </div>
                                        <!-- end of comment-body --></article>
                                    <!-- end of comment --></li>
                            </ul>
                        </li>
                        <li class="comment even thread-odd thread-alt depth-1" id="li-comment-4">
                            <article id="comment-4">
                                <a href="#">
                                    <img alt="" src="#" class="avatar avatar-60 photo" height="60" width="60"></a>
                                <div class="comment-meta">
                                    <h5 class="author">
                                        <cite class="fn">
                                            <a href="#" rel="external nofollow" class="url">John Doe</a></cite>-
                                        <a class="comment-reply-link" href="#">Reply</a></h5>
                                    <p class="date">
                                        <a href="#">
                                            <time datetime="2013-02-26T13:27:04+00:00">February 26, 2013 at 1:27 pm</time></a>
                                    </p>
                                </div>
                                <!-- end .comment-meta -->
                                <div class="comment-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                </div>
                                <!-- end of comment-body --></article>
                            <!-- end of comment --></li>
                    </ol>
                    <div id="respond">
                        <h3>Leave a Reply</h3>
                        <div class="cancel-comment-reply">
                            <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Click here to cancel reply.</a></div>
                        <form action="#" method="post" id="commentform">
                            <p class="comment-notes">Your email address will not be published. Required fields are marked
                                <span class="required">*</span></p>
                            <div>
                                <label for="author">Name *</label>
                                <input class="span4" type="text" name="author" id="author" value="" size="22"></div>
                            <div>
                                <label for="email">Email *</label>
                                <input class="span4" type="text" name="email" id="email" value="" size="22"></div>
                            <div>
                                <label for="url">Website</label>
                                <input class="span4" type="text" name="url" id="url" value="" size="22"></div>
                            <div>
                                <label for="comment">Comment</label>
                                <textarea class="span8" name="comment" id="comment" cols="58" rows="10"></textarea>
                            </div>
                            <p class="allowed-tags">You can use these HTML tags and attributes
                                <small>
                                    <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt;</code></small>
                            </p>
                            <div>
                                <input class="btn" name="submit" type="submit" id="submit" value="Submit Comment"></div>
                        </form>
                    </div>
                </section> 
                <!-- end of comments --></div>
            <!-- end of page content -->
        </div>
    <!-- </div> -->
<!-- </div> -->
@endsection
@section('js')
        <script src="{{env('APP_CDN')}}/highlight/highlight.pack.js"></script>
        <script src="{{env('APP_CDN')}}/editor/lib/marked.min.js"></script>
        <script src="{{env('APP_CDN')}}/editor/lib/prettify.min.js"></script>
        <script src="{{env('APP_CDN')}}/editor/lib/raphael.min.js"></script>
        <script src="{{env('APP_CDN')}}/editor/lib/underscore.min.js"></script>
        <script src="{{env('APP_CDN')}}/editor/lib/sequence-diagram.min.js"></script>
        <script src="{{env('APP_CDN')}}/editor/lib/flowchart.min.js"></script>
        <script src="{{env('APP_CDN')}}/editor/lib/jquery.flowchart.min.js"></script>
        <script src="{{env('APP_CDN')}}/editor/editormd.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                hljs.initHighlightingOnLoad();
                    $('pre code').each(function(i, block) {
                        hljs.highlightBlock(block);
                        $(this).html("<ol><li>" + $(this).html().replace(/\n/g,"\n</li><li>") +"\n</li></ol>");
                    });

                    editormd.markdownToHTML("editormd", {
                        height: 100,
                        htmlDecode      : "style,script,iframe",  // you can filter tags decode
                        emoji           : true,
                        taskList        : false,
                        tex             : true,  // 默认不解析
                        flowChart       : true,  // 默认不解析
                        sequenceDiagram : true,  // 默认不解析
                        tocm : false,//菜单
                        tocContainer : "",
                        tocDropdown   : true,
                        emoji : true,
                    });

                })
        </script>
@endsection