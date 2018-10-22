@extends('admin.common.index')

@section('content')

<link rel="stylesheet" href="{{ asset('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        订单列表
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
            <div class="box-header">
              <h3 class="box-title">
              <a href="" class="label label-primary"></a>
              </h3>


            </div>
            <!-- /.box-header -->
            <div class="box-body  no-padding">

              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                        订单id
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        订单编号
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        下单手机号
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        商品名称
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        商品主图
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        商品数量
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        订单金额
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        支付金额
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        支付时间
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        订单状态
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                        下单时间
                    </th>

                </tr>
            </thead>

                <tbody>
                @foreach($order as $g)
                <tr role="row" class="odd">
                      <td class="sorting_1">{{$g->id}}</td>
                      <td>{{$g->order_sn}}</td>
                    <td>{{$g->mobile}}</td>
                    <td>{{$g->spu_name}}</td>
                    <td><a href="/goods/goodsDetail/{{$g->spu_id}}"><img src="{{$g->main_image}}" alt="" style="width: 100px;height: 100px;"></a></td>
                        <td>{{$g->number}}</td>
                        <td>{{$g->order_amounts}}</td>
                        <td>{{$g->payable_amount}}</td>
                        <td >{{$g->pay_time}}</td>
                        <td >
                            @if($g->plat_order_state==1)
                                <span class="label label-warning">待付款</span>
                            @elseif($g->plat_order_state==2)
                                <span class="label label-danger">已支付,待发货</span>
                            @elseif($g->plat_order_state==3)
                                <span class="label label-default">已发货,待签收</span>
                            @elseif($g->plat_order_state==4)
                                <span class="label label-success">已完成</span>
                            @endif
                        </td>
                        <td >{{$g->created_at}}</td>

                </tr>
                @endforeach
                </tbody>
              </table></div></div>

                  <div class="row pull-right">
                      <div class="col-sm-10 "></div>
                      {{$order->links()}}

                  </div>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
<script>
    //重置密码
    $('#example2').on('click','.delSpec',function(){
        var Id = $(this).attr('data-Id');
        var resultUrl = '/hx/admin/delService?id='+ Id;
        if(confirm('确定要删除吗?')){
            $.get(resultUrl,function(res){
                if(res['code']){
                    alert('删除失败')
                }else{
                    alert('删除成功')
                    window.location.href=''
                }
            })
        }
    });
</script>

  @stop



