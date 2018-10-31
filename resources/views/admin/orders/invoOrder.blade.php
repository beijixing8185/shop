@extends('admin.common.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        发票信息
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
              @if(!empty($order))
            <form action="{{url('hx/admin/postInvo')}}" method="post"  class="form-horizontal" enctype="multipart/form-data" onsubmit="return checkSubmit();">
          {!!csrf_field()!!}

              <div class="box-body">
               <div class="form-group">
                   @if($order->type == 1)
                   <h3 style="width:800px;margin: 0 auto;padding-bottom: 5px;">普通发票</h3>
                   @elseif($order->type == 2)
                   <h3 style="width:800px;margin: 0 auto;padding-bottom: 5px;">增值税发票</h3>
                   @endif
                   <label for="inputPassword3" class="col-sm-2 control-label">发票抬头:</label>

                   <div class="col-sm-5">
                       <input type="text" class="form-control" readonly  name="title"   value="{{$order->title}}"  onchange="checkTitle();">
                       <span class="title" style="color:red"></span>
                   </div>
                 </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">纳税人识别号:</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" readonly name="pay_id"   value="{{$order->pay_id}}">
                      <span class="name" style="color:red"></span>
                    </div>
                  </div>
                  @if($order->type == 2)
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">注册地址:</label>

                      <div class="col-sm-5">
                          <input type="text" class="form-control" readonly name="reg_address"   value="{{$order->reg_address}}"  onchange="checkTitle();">
                          <span class="title" style="color:red"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">注册电话:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" readonly name="reg_phone"   value="{{$order->reg_phone}}">
                          <span class="name" style="color:red"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">开户银行:</label>

                      <div class="col-sm-5">
                          <input type="text" class="form-control" readonly name="reg_bank"   value="{{$order->reg_bank}}"  onchange="checkTitle();">
                          <span class="title" style="color:red"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">银行账户:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" readonly name="bank_number"  value="{{$order->bank_number}}">
                          <span class="name" style="color:red"></span>
                      </div>
                  </div>
                  @endif
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">收件人:</label>

                      <div class="col-sm-5">
                          <input type="text" class="form-control" readonly name="username"   value="{{$order->username}}" >
                          <span class="title" style="color:red"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">收件人手机号:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" readonly name="phone"   value="{{$order->phone}}">
                          <span class="name" style="color:red"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">收件人地址:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" readonly name="address"   value="{{$order->address}}">
                          <span class="name" style="color:red"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">快递单号:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" placeholder="请填写快递单号" name="express_id"   value="">
                          <span class="name" style="color:red"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">快递公司:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" placeholder="请填写快递公司" name="express_type"   value="">
                          <span class="name" style="color:red"></span>
                      </div>
                  </div>
                  <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">状态:</label>
                          <div class="col-sm-10">
                              <select name="status" id="status">
                                 <option value="0" >未发货</option>
                                 <option value="1" @if($order->status ==1) selected @endif>发货</option>
                                 <option value="2" @if($order->status ==2) selected @endif>完成</option>
                              </select>
                          </div>
                  </div>

                 </div>
              <div class="box-footer" style="padding-left: 600px;">
                <input type="hidden" name="id" id="id" value="{{$order->id}}">
                  <a href="#" class="btn btn-default">取消</a>
                  <input type="submit" class="btn btn-info" value="提交">
              </div>
              <!-- /.box-footer -->
            </form>
                  @else
                  <h2>暂无发票信息。。。</h2>
                  @endif
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