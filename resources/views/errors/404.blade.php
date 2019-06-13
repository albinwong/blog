@extends('layout.exclusive',['title' => '您所访问的页面不存在 - Albin Wong Blog'])
@section('css')
    <style> 
      @media (min-width: 400px) {
        .head404 {
          width:500px;
          height:234px;
          margin:10px auto 80px;
          background:url("//albinwongcdn.oss-cn-beijing.aliyuncs.com/exclusive/images/404.jpg") no-repeat;
        }
        .txtbg404 {
          width:499px;
          height:169px; 
          margin:10px auto 0 auto;
        }
        .txtbg404 .txtbox{
         width:390px;
         position:relative; 
         top:30px; left:60px;
         color:#48D1CC; 
         font-size:13px;
        }
        .txtbg404 .txtbox p {
          margin:5px 0; 
          line-height:18px;
        }
        .txtbg404 .txtbox .paddingbox { 
          padding-top:15px;
        }
        .txtbg404 .txtbox p a { 
          color:#48D1CC; 
          text-decoration:none;
        }
        .txtbg404 .txtbox p a:hover { 
          color:#48D1CC; 
          text-decoration:underline;
        }
      }
     </style>
@endsection
@section('content')
<div class="page-container">
    <div class="head404"></div>
    <div class="txtbg404">
        <div class="txtbox">
          <p>对不起，您请求的页面不存在、或已被删除、或暂时不可用</p>
          <p class="paddingbox">请点击以下链接继续浏览网页</p>
          <p>>> <a style="cursor:pointer" onclick="history.back()">返回上一页面</a></p>
          <p>>> <a href="/">返回首页</a></p>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection



