@extends('admin.common.index')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        执行发货
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:;history.back(-1)" style="font-size:20px;color:red;"><i class="fa fa-dashboard"></i> 返回</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <!-- /.box-header -->

            <div class="box-body  no-padding">

                <div class="box-body">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-1 control-label">订单编号：</label>
                        <div class="col-sm-2">
                            <p class="form-control">{{$orderInfo->order_sn}} </p>
                        </div>
                        <label for="inputPassword3" class="col-sm-1 control-label">订单类型：</label>
                          <div class="col-sm-2">
                              <p class="form-control" @if($orderInfo->order_type == 2) style="background:greenyellow;" @endif>{{$plat_order_type[$orderInfo->order_type]}} </p>
                          </div>
                        <label for="inputPassword3" class="col-sm-1 control-label">兑换码：</label>
                        <div class="col-sm-2">
                            <p class="form-control">{{$orderInfo->order_vcode}} </p>
                        </div>
                        <label for="inputPassword3" class="col-sm-1 control-label">订单状态：</label>
                        <div class="col-sm-2">
                            <p class="form-control" style="background:greenyellow;">{{$plat_order_status[$orderInfo->order_state]}} </p>
                        </div>

                        <label for="inputEmail3" class="col-sm-1 control-label">手机号：</label>
                        <div class="col-sm-2">
                            <p class="form-control"> {{$orderInfo->member_mobile}} </p>
                        </div>

                        <label for="inputPassword3" class="col-sm-1 control-label">商品名称：</label>
                        <div class="col-sm-2">
                            <p class="form-control"> {{$orderInfo->sku_name}} </p>
                        </div>
                        <label for="inputPassword3" class="col-sm-1 control-label">商品价格：</label>
                        <div class="col-sm-2">
                            <p class="form-control"> {{$orderInfo->price}} </p>
                        </div>
                        <label for="inputPassword3" class="col-sm-1 control-label">商品数量：</label>
                        <div class="col-sm-2">
                            <p class="form-control"> {{$orderInfo->number}} </p>
                        </div>
                        <label for="inputPassword3" class="col-sm-1 control-label">商品总价：</label>
                        <div class="col-sm-2">
                            <p class="form-control"> {{$orderInfo->goods_amounts}} </p>
                        </div>

                        <label for="inputPassword3" class="col-sm-1 control-label">下单时间：</label>
                        <div class="col-sm-2">
                            <p class="form-control"> {{date('Y-m-d H:i:s',$orderInfo->create_time)}} </p>
                        </div>

                        <label for="inputPassword3" class="col-sm-1 control-label">支付完成时间：</label>
                        <div class="col-sm-2 dianji">
                            <p class="form-control"> @if($orderInfo->pay_time) {{date('Y-m-d H:i:s',$orderInfo->pay_time)}} @else 未知 @endif</p>
                        </div>

                        <label for="inputPassword3" class="col-sm-1 control-label">到达时间：</label>
                        <div class="col-sm-2">
                            <p class="form-control"> @if($orderInfo->arrival_time) {{date('Y-m-d H:i:s',$orderInfo->arrival_time)}} @else 未知 @endif </p>
                        </div>

                        <label for="inputPassword3" class="col-sm-1 control-label">快递单号：</label>
                        <div class="col-sm-2">
                            <p class="form-control"> {{$orderInfo->express_number}} </p>
                        </div>

                        <label for="inputPassword3" class="col-sm-1 control-label">物流公司：</label>
                        <div class="col-sm-2">
                            <p class="form-control"> {{$orderInfo->express_name}} </p>
                        </div>

                        <label for="inputPassword3" class="col-sm-1 control-label">收货地址：</label>
                        <div class="col-sm-5">
                            <p class="form-control"> {{$orderInfo->address_info}} </p>
                        </div>

                        <label for="inputPassword3" class="col-sm-1 control-label">支付信息：</label>
                        <div class="col-sm-11">
                            <p class="form-control" style="height: 100px;"> {{$orderInfo->pay_info}} </p>
                        </div>


                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-1 control-label">商品图片：</label>
                        <div class="col-sm-1 dianji">
                            <img src="{{$orderInfo->sku_image}}" style="width:100px;height: 100px;">
                        </div>
                    </div>

                </div>

             </div>
                @if($orderInfo->order_state == 2)
              <div class="box-body ">
                  <label for="inputPassword3" class="col-sm-1 control-label " style="color:red;font-size:20px;">发货：</label>
                  <div class="input-group input-group-sm" style="width: 100%;">
                      <input type="text" name="table_search" class="form-control pull-left express_number" placeholder="请输入运单号" value="{{$orderInfo->express_number}}" style="width:200px;">
                      <select name="keyStatus" id="express_code" class="form-control form-control-my pull-left">
                          <option value="">请选择快递名称</option>
                          @foreach($expressInfo as $k=>$v)
                              <option value="{{$v->express_code}}" @if($orderInfo->express_code = $v->express_code) selected @endif>{{$v->express_name}}</option>
                          @endforeach
                      </select>
                      <div class="input-group-btn pull-left">
                          <button type="submit"  class="btn btn-default send" @if($orderInfo->express_number) disabled @endif>确定发货</button>
                      </div>
                  </div>

              </div>
                @endif
          </div>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  @include('admin.common.jss')

  <script>
      $(".send").click(function (){

          var express_number = $(".express_number").val();
          var express_code = $('#express_code').val();
          var express_name = $('#express_code  option:selected').html();
          var order_id = "{{$orderInfo->id}}";

          if(express_number.length == 0 || express_code.length ==0 ){
              alert('快递单号或者快递名称不能为空')
          }else{
              $.ajax({
                  url:'/zs/admin/sendLogistics',
                  type:'post',
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  data:{
                      express_number:express_number,
                      express_code:express_code,
                      express_name:express_name,
                      order_id:order_id
                  },
                  success:function(res){
                    if(res.code == 1){
                        alert('数据错误,请稍后再试')
                    }else{
                        window.location.href=document.referrer;
                    }
                  }
              })
          }


      })
  </script>
  @stop