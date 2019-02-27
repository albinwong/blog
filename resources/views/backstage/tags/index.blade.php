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
                <td><span class="badge badge-pill {{$value['status'] == '1' ? 'badge-primary' : 'badge-warning'}}">{{$value['status'] == '1' ? '展示' : '隐藏'}}</span></td>
                <td>{{$value['created_at']}}</td>
                <td>{{$value['updated_at']}}</td>
                <td>
                    <a href="/admin/tags/edit?id={{$value->id}}">
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