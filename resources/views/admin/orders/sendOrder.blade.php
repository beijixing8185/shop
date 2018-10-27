@extends('admin.common.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        发货，修改订单状态
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
            <form action="{{url('hx/admin/updateOrder')}}" method="post"  class="form-horizontal" enctype="multipart/form-data" onsubmit="return checkSubmit();">
          {!!csrf_field()!!}

              <div class="box-body">
               <div class="form-group">
                   <label for="inputPassword3" class="col-sm-2 control-label">订单编号:</label>

                   <div class="col-sm-5">
                       <input type="text" class="form-control" placeholder="请填写服务名称" name="order_sn"  id="order_sn" value="{{$order->order_sn}}"  onchange="checkTitle();">
                       <span class="title" style="color:red"></span>
                   </div>
                 </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">商品名称:</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="请填写分类名称" name="name"  id="name" value="{{$order->spu_name}}">
                      <span class="name" style="color:red"></span>
                    </div>
                  </div>
                  <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">状态:</label>
                          <div class="col-sm-10">
                              <select name="status" id="status">
                                 <option value="3">发货</option>
                                 <option value="4">已完成</option>
                              </select>
                          </div>
                  </div>

                 </div>
              <div class="box-footer" style="padding-left: 600px;">
                <input type="hidden" name="id" id="id" value="{{$order->id}}">
                  <a href="{{url('hx/admin/orderList')}}" class="btn btn-default">取消</a>
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