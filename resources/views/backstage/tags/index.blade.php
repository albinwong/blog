@extends('layout.backstage',['title' => '标签管理 --- Backstage'])
@section('css')
<link rel="stylesheet" type="text/css" href="/backstage/css/table-style.css" />
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">标签管理</li>
@endsection
@section('content')
<div class="gallery-grids">
    <?php if (session('info')) : ?>
    <div class="w3ls">
        <div class="alert alert-info" role="alert">
            {{session('info')}}<br>
        </div>
    </div>
	<?php endif ?>
    <h3>标签列表</h3>
    <a href="{{url('/admin/tags/edit')}}" class="hvr-icon-float-away pull-right">添加标签</a>
    <table id="table-two-axis" class="two-axis col-md col-md-12">
        <thead>
            <tr>
                <th>标签名</th>
                <th>权重</th>
                <th>状态</th>
                <th>创建时间</th>
                <th>修改时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $value) : ?>
            <tr>
                <td>{{$value['name']}}</td>
                <td>{{$value['frequency']}}</td>
                <td>{{$value['status'] == '1' ? '展示' : '隐藏'}}</td>
                <td>{{$value['created_at']}}</td>
                <td>{{$value['updated_at']}}</td>
                <td>
                    <a href="/admin/tags/edit?id={{$value->id}}">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    &emsp;|&emsp;
                    <i class="fa fa-trash" id="{{$value->id}}" aria-hidden="true"></i>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <div class="pull-right">
        <nav>
            {!!$data->links()!!}
        </nav>
    </div>
    <div class="clearfix"></div>
    <script src="/backstage/js/lightbox-plus-jquery.min.js"></script>
</div>
<script>
    $(document).ready(function() {
         var navoffeset=$(".header-main").offset().top;
         $(window).scroll(function(){
            var scrollpos=$(window).scrollTop(); 
            if (scrollpos >=navoffeset) {
                $(".header-main").addClass("fixed");
            }else{
                $(".header-main").removeClass("fixed");
            }
         });
         
    });
</script>
<div class="inner-block">
</div>
@endsection
@section('js')
<script src="/backstage/js/jquery.nicescroll.js"></script>
@endsection