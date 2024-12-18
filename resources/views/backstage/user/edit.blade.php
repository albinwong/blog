@extends('layout.backstage',['title' => '添加文章 --- 文章管理 --- Backstage'])
@section('css')
<link rel="stylesheet" type="text/css" href="/backstage/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="/editor/css/editormd.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/posts/index">文章管理</a></li>
    <li class="breadcrumb-item active">添加文章</li>
@endsection
@section('content')
<div class="gallery-grids">
    @if (count($errors) > 0)
    <div class="w3ls">
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
            {{$error}}<br>
            @endforeach
        </div>
    </div>
    @endif
    <?php if (session('info')) : ?>
    <div class="w3ls">
        <div class="alert alert-info" role="alert">
            {{session('info')}}<br>
        </div>
    </div>
    <?php endif; ?>
    <div class="grid-form1">
        <h3>添加文章</h3>
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-1 control-label">标题</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control1" id="focusedinput" value="{!!$res->title ?? ''!!}" placeholder="请输入标题名">
                        </div>
                        <div class="col-sm-2">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-1 control-label">SEO</label>
                        <div class="col-sm-9">
                            <input type="text" name="seo" class="form-control1" id="focusedinput" value="{!!$res->seo ?? ''!!}" placeholder="多个SEO请用英文状态下逗号隔开">
                        </div>
                        <div class="col-sm-2">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="selector1" class="col-sm-1 control-label">文章类型</label>
                        <div class="col-sm-1">
                            <select name="arrticle_types" id="selector1" class="form-control1">
                                <option {!! isset($res) ? 'selected' : '' !!}>请选择</option>
                                <option value="original" {!! isset($res) && $res->arrticle_types == 'original' ? 'selected' : '' !!}>原创</option>
                                <option value="reprinted" {!! isset($res) && $res->arrticle_types == 'reprinted' ? 'selected' : '' !!}>转载</option>
                                <option value="translate" {!! isset($res) && $res->arrticle_types == 'translate' ? 'selected' : '' !!}>翻译</option>
                            </select>
                        </div>
                        <label for="selector1" class="col-sm-3 control-label">发布状态</label>
                        <div class="col-sm-1">
                            <select name="publish_status" id="selector1" class="form-control1">
                                <option {!! isset($res) ? 'selected' : '' !!}>请选择</option>
                                <option value="published" {!! isset($res) && $res->publish_status == 'published' ? 'selected' : '' !!}>发布</option>
                                <option value="draft" {!! isset($res) && $res->publish_status == 'draft' ? 'selected' : '' !!}>草稿</option>
                                <option value="covert" {!! isset($res) && $res->publish_status == 'covert' ? 'selected' : '' !!}>隐藏</option>
                            </select>
                        </div>
                        <label for="selector1" class="col-sm-3 control-label">置顶</label>
                        <div class="col-sm-1">
                            <select name="top_status" id="selector1" class="form-control1">
                                <option {!! isset($res) ? 'selected' : '' !!}>请选择</option>
                                <option value="normal" {!! isset($res) && $res->top_status == 'normal' ? 'selected' : '' !!}>正常</option>
                                <option value="top" {!! isset($res) && $res->top_status == 'top' ? 'selected' : '' !!}>置顶</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="selector1" class="col-sm-1 control-label">分类</label>
                        <div class="col-sm-2">
                            <select name="cate_id" id="selector1" class="form-control1">
                                <option {!! isset($res) ? 'selected' : '' !!}>请选择</option>
                                <option value="1" {!! isset($res) && $res->cate_id == 1 ? 'selected' : '' !!}>架构</option>
                                <option value="2" {!! isset($res) && $res->cate_id == 2 ? 'selected' : '' !!}>互联网</option>
                                <option value="3" {!! isset($res) && $res->cate_id == 3 ? 'selected' : '' !!}>运维</option>
                                <option value="4" {!! isset($res) && $res->cate_id == 4 ? 'selected' : '' !!}>数据库</option>
                                <option value="5" {!! isset($res) && $res->cate_id == 5 ? 'selected' : '' !!}>前端</option>
                                <option value="6" {!! isset($res) && $res->cate_id == 6 ? 'selected' : '' !!}>后端</option>
                                <option value="7" {!! isset($res) && $res->cate_id == 7 ? 'selected' : '' !!}>研发管理</option>
                                <option value="8" {!! isset($res) && $res->cate_id == 8 ? 'selected' : '' !!}>安全</option>
                                <option value="9" {!! isset($res) && $res->cate_id == 9 ? 'selected' : '' !!}>区块链</option>
                                <option value="10" {!! isset($res) && $res->cate_id == 10 ? 'selected' : '' !!}>资讯</option>
                                <option value="11" {!! isset($res) && $res->cate_id == 11 ? 'selected' : '' !!}>计算机理论与基础</option>
                                <option value="12" {!! isset($res) && $res->cate_id == 12 ? 'selected' : '' !!}>其他</option>
                            </select>
                        </div>
                        <label for="focusedinput" class="col-sm-2 control-label">阅读数</label>
                        <div class="col-sm-1">
                            <input type="number" name="page_view" min='0' value="{{$res->page_view ?? 0}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-1 control-label">标签</label>
                        <div class="col-sm-8">
                            <select name="tags_id[]" class="form-control1 js-example-basic-multiple" multiple="multiple" id="tags_id">
                                <option disabled="disabled">请选择</option>
                            <?php foreach ($tags as $tagsValue) : ?>
                                <option value="{{$tagsValue['id']}}" <?=in_array($tagsValue['id'], $defaultTag) ? 'selected' : ''; ?>>{{$tagsValue['name']}}</option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-1 control-label">Intro</label>
                        <div class="col-sm-8">
                            <input type="text" name="intro" class="form-control1" id="focusedinput" value="{!!$res->intro ?? ''!!}" placeholder="请输入文章简介">
                        </div>
                        <div class="col-sm-2">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtarea1" class="col-sm-1 control-label">内容</label>
                        <div class="col-sm-8" id="editormd">
                            <textarea name="content" class="form-control1" style="display:none;">{!!$res->content ?? ''!!}</textarea>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$res->id ?? ''}}">
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-1">
                                <button type="submit" class="btn-primary btn">提交</button>
                                <button type="reset" class="btn-default btn">取消</button>
                            </div>
                        </div>
                     </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/backstage/js/lightbox-plus-jquery.min.js"></script>
</div>
<script>
    $(document).ready(function() {
         /*var navoffeset=$(".header-main").offset().top;
         $(window).scroll(function(){
            var scrollpos=$(window).scrollTop(); 
            if (scrollpos >=navoffeset) {
                $(".header-main").addClass("fixed");
            }else{
                $(".header-main").removeClass("fixed");
            }
         });*/
    });
</script>
<div class="inner-block">
</div>
@endsection
@section('js')
<script src="/backstage/js/jquery.nicescroll.js"></script>
<script src="/editor/editormd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
    $(function() {
        var editor = editormd("editormd", {
            width: "91%",
            height: 800,
            path : '/editor/lib/',
            saveHTMLToTextarea : true,
            searchReplace : true, // 保存HTML到Textarea
            codeFold : true,
            emoji : true,
            taskList : true,
            tocm : true, // Using [TOCM]
            htmlDecode : "style,script,iframe|on*", // 开启HTML标签解析，为了安全性，默认不开启  
            placeholder: "Type into your coding!",  
            tex : true,
            autoLoadModules : true,
            previewCodeHighlight : true,
            flowChart : true,
            sequenceDiagram : true,
            imageUpload : true,
            imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL:"{{url('api/admin/uploadimage')}}",
            //dialogLockScreen : false,   // 设置弹出层对话框不锁屏，全局通用，默认为true
            //dialogShowMask : false,     // 设置弹出层对话框显示透明遮罩层，全局通用，默认为true
            //dialogDraggable : false,    // 设置弹出层对话框不可拖动，全局通用，默认为true
            //dialogMaskOpacity : 0.4,    // 设置透明遮罩层的透明度，全局通用，默认值为0.1
            //dialogMaskBgColor : "#000", // 设置透明遮罩层的背景颜色，全局通用，默认为#fff
            onload : function() {
                // console.log('onload', this);
                //this.fullscreen();
                //this.unwatch();
                //this.watch().fullscreen();
                //this.setMarkdown("#PHP");
                //this.width("100%");
                //this.height(480);
                //this.resize("100%", 640);
            }
        });
    });

    $(document).ready(function(){
        $('.js-example-basic-multiple').select2({
            placeholder: "Please, select a tag at least"
        });

    // var select_id = $("#select_id").val();
    // arr = bumen.split(","); //注意：arr为select的id值组成的数组
    // $('#tags_id').val(arr).trigger('change');
    });
</script>
@endsection