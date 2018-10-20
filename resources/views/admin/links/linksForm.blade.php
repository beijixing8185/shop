@extends('admin.common.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        链接操作
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
            <form action="{{url('hx/admin/addLink')}}" method="post"  class="form-horizontal" enctype="multipart/form-data" onsubmit="return checkSubmit();">
          {!!csrf_field()!!}
              <input type="hidden" name="token" value="" />
              <div class="box-body">

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">链接名称:</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="请填写分类名称" name="name"  id="name" value="{{$link->name}}">
                      <span class="name" style="color:red"></span>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">链接地址:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" name="url" id="url"  value="{{$link->link}}" >
                          <span class="num" style="color:red"></span>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">状态:</label>
                      <div class="col-sm-10">
                          <select name="status" id="status">
                              <option value="1" @if($link->status == 1) selected @endif>有效</option>
                              <option value="0" @if($link->status == 0) selected @endif>无效</option>
                          </select>
                      </div>
                  </div>

                 </div>
              <div class="box-footer" style="padding-left: 600px;">
                <input type="hidden" name="id" id="id" value="{{$link->id}}">
                  <a href="{{url('hx/admin/addList')}}" class="btn btn-default">取消</a>
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
        if($('#name').val()=='') {
          $('.name').html('链接名称不能为空');
          $('#name').focus();
          return false;
      }
      if($('#url').val() == ''){
          $('.name').html('链接地址不能为空');
          $('#name').focus();
          return false;
      }
      return true;
     }
  </script>
      @stop