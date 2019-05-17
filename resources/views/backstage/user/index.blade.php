@extends('layout.backstage',['title' => '用户管理 --- Backstage'])
@section('css')
<link rel="stylesheet" type="text/css" href="/backstage/css/table-style.css" />
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">用户管理</li>
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
    <a href="{{url('/admin/posts/edit')}}" class="hvr-icon-float-away pull-right">添加用户</a>
    <table id="table-two-axis" class="two-axis col-md col-md-12">
        <thead>
            <tr>
                <th>用户名</th>
                <th>Email</th>
                <th>权限</th>
                <th>创建时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $value) : ?>
            <tr>
                <td><a href="/admin/users/edit?id={{$value->id}}">{{$value->username}}</a></td>
                <td>{{$value->email}}</td>
                <td>{{$value->auth == 2 ? '管理员' : '用户'}}</td>
                <td>{{date('Y-m-d H:i', $value->regtime)}}</td>
                <td>
                    <i class="fa fa-trash" id="{{$value->id}}">删除</i>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <div class="pull-right">
        <nav>
            {!!$users->links()!!}
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
            layer.confirm('确认删除该用户?', {
                btn: ['确认','取消'] //按钮
            }, function(){
                var data = {
                    "_token": $("meta[name='csrf_token']").attr('content')
                }
                var id = $('.fa-trash').attr('id');
                $.ajax({
                    url: "/admin/user/del/"+id,
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