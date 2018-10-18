@extends('admin.common.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        文章分类操作
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->

          <div>
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('hx/admin/addArticleCates')}}" method="post"  class="form-horizontal" enctype="multipart/form-data" onsubmit="return checkSubmit();">
          {!!csrf_field()!!}
              <input type="hidden" name="token" value="" />
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">一级分类:</label>

                  <div class="col-sm-5">
                    <select name="cate_one" class="cate_one" id="cate_one" >
                      <option value="0">请选择一级分类</option>
                        @if($cate)
                              @foreach($cate as $c)
                              <option value="{{$c->id}}" >{{$c->cate_name}}</option>
                              @endforeach
                        @endif
                    </select>
                <span style="color:red;">可选,不选择则默添加一级分类</span>

                  </div>
                 </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">分类名称:</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="请填写分类名称" name="name"  id="name" value="">
                      <span class="name" style="color:red"></span>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">分类描述:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" name="description" id="description"  value="" >
                          <span class="num" style="color:red"></span>
                      </div>
                  </div>

                 </div>
              <div class="box-footer" style="padding-left: 600px;">
                <input type="hidden" name="id" id="id" value="">
                  <a href="{{url('hx/admin/catesList')}}" class="btn btn-default">取消</a>
                  <input type="submit" class="btn btn-info" value="提交">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
  <script>

   // 表单提交
      function  checkSubmit()
      {
        //分类名称
        if($('#name').val()==0) {
          $('.name').html('分类名称不能为空');
          $('#name').focus();
          return false;
      }
     }
  </script>
      @stop