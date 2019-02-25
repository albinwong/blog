@extends('layout.backstage',['title' => '标签管理 --- Backstage'])
@section('css')
<link rel="stylesheet" type="text/css" href="/backstage/css/table-style.css" />
@endsection
@section('breadcrumb')
    标签管理
@endsection
@section('content')
<div class="gallery-grids">
    <h3>Two Axis Styling</h3>
    <table id="table-two-axis" class="two-axis">
        <thead>
            <tr>
                <th>标签名</th>
                <th>权重</th>
                <th>创建时间</th>
                <th>修改时间</th>
            </tr>
        </thead>
        <tbody>
		<?php foreach ($data as $key => $value) : ?>
            <tr>
                <td>{{$value['name']}}</td>
                <td>{{$value['frequency']}}</td>
                <td>{{$value['created_at']}}</td>
                <td>{{$value['updated_at']}}</td>
            </tr>
		<?php endforeach ?>
        </tbody>
    </table>
    <div class="pull-right">
        <nav>
        	{{$data->links()}}
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