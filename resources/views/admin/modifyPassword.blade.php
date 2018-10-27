@extends('admin.common.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        修改密码
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
            <form action="{{url('hx/admin/updatePass')}}" method="post"  class="form-horizontal" enctype="multipart/form-data" onsubmit="return checkSubmit();">
          {!!csrf_field()!!}

              <div class="box-body">

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">用户名:</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="请填写分类名称" name="username"  id="name" value="{{$user->username}}">
                      <span class="name" style="color:red"></span>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">旧密码:</label>

                      <div class="col-sm-5">
                          <input type="password" class="form-control" placeholder="请填写服务名称" name="old_pass"  id="new_pass" value="" required>
                          <span class="title" style="color:red"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">新密码:</label>

                      <div class="col-sm-5">
                          <input type="password" class="form-control" placeholder="请填写服务名称" name="new_pass"  id="new_pass" value=""  required>
                          <span class="title" style="color:red"></span>
                      </div>
                  </div>

                 </div>
              <div class="box-footer" style="padding-left: 600px;">
                <input type="hidden" name="id" id="id" value="{{$user->id}}">
                  <a href="{{url('hx/admin/getAdminUserList')}}" class="btn btn-default">取消</a>
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

      @stop