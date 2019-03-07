@extends('layout.backstage',['title' => '文章管理 --- Backstage'])
@section('css')
<link rel="stylesheet" type="text/css" href="/backstage/css/table-style.css" />
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">文章管理</li>
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
    <h3>文章列表</h3>
    <a href="{{url('/admin/posts/edit')}}" class="hvr-icon-float-away pull-right">添加文章</a>
    <div class="c-tab col-md-10 col-sm-8 col-xs-12">
        <span type="button" class="btn btn-primary">
          全部 <span class="badge badge-light">4</span>
        </span>
        <span type="button" class="btn btn-light">
          发布 <span class="badge badge-light">3</span>
        </span>
        <span type="button" class="btn btn-light">
          草稿 <span class="badge badge-light">2</span>
        </span>
        <span type="button" class="btn btn-light">
          隐藏 <span class="badge badge-light">1</span>
        </span>
        <span type="button" class="btn btn-light">
          原创 <span class="badge badge-light">0</span>
        </span>
        <span type="button" class="btn btn-light">
          转载 <span class="badge badge-light">20</span>
        </span>
        <span type="button" class="btn btn-light">
          翻译 <span class="badge badge-light">5</span>
        </span>
        <span type="button" class="btn btn-light">
          置顶 <span class="badge badge-light">22</span>
        </span>
    </div>
    <table id="table-two-axis" class="two-axis col-md col-md-12">
        <thead>
            <tr>
                <th>文章名</th>
                <th>创建时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $value) : ?>
            <tr>
                <td>{{$value['title']}}</td>
                <td>{{$value['created_at']}}</td>
                <td>
                    <a href="/admin/posts/edit?id={{$value->id}}">
                        <i class="fa fa-pencil">编辑</i>
                    </a>&emsp;
                    <i class="fa fa-trash" id="{{$value->id}}">删除</i>
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

         $('.fa-trash').on('click', function(){
            layer.confirm('确认删除该标签?', {
                btn: ['确认','取消'] //按钮
            }, function(){
                var data = {
                    "_token": $("meta[name='csrf_token']").attr('content')
                }
                var id = $('.fa-trash').attr('id');
                $.ajax({
                    url: "/admin/tags/del/"+id,
                    type:  "DELETE",
                    data: data,
                    success: function(res){
                        if(res.status){
                            layer.msg(res.msg,{
                                time: 2000,
                                icon: 1,
                                end: function(){
                                    window.location.reload(true);
                                }
                            });

                        }else{
                            layer.msg(res.msg,{
                                time: 2000,
                                icon: 2
                            });
                        }
                    },
                    error: function(error){
                        console.log(error);
                    }
                })
            });
            

            // $.ajax();
            // layer.alert($(this).attr("id"));
         });
         $('.fa-trash').on('mouseover',function(){
            this.style.cursor='pointer';
         });
    });
</script>
<div class="inner-block">
</div>
@endsection
@section('js')
<script src="/backstage/js/jquery.nicescroll.js"></script>
@endsection