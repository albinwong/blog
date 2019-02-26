@extends('layout.backstage',['title' => '标签管理 --- Backstage'])
@section('css')
<link rel="stylesheet" type="text/css" href="/backstage/css/table-style.css" />
@endsection
@section('breadcrumb')
    <a href="/admin/tags">标签管理</a> <i class="fa fa-angle-right"></i>添加标签
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
    <div class="grid-form1">
        <h3>添加标签</h3>
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">标签名</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control1" id="focusedinput" placeholder="请输入标签名">
                        </div>
                        <div class="col-sm-2">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="disabledinput" class="col-sm-2 control-label">权重</label>
                        <div class="col-sm-8">
                            <input type="number" name="frequency" class="form-control1" id="disabledinput" placeholder="请输入权重">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="selector1" class="col-sm-2 control-label">状态</label>
                        <div class="col-sm-8">
                            <select name="status" id="selector1" class="form-control1">
                                <option value="1">显示</option>
                                <option value="2">不显示</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-primary btn">提交</button>
                                <button class="btn-default btn">取消</button>
                                <button class="btn-inverse btn">重填</button>
                            </div>
                        </div>
                     </div>
                </form>
            </div>
        </div>
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