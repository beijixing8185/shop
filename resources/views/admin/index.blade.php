@extends('admin.common.index')

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            好歆后台首页
            <small>首页详情</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h2>订单总数 <span style="color:green;">({{$count}})</span></h2>

                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/hx/admin/orderList" class="small-box-footer label-success">查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h2>待发货订单数 <span style="color:red;">({{$wait_count}})</span></h2>

                    </div>
                    <div class="icon">

                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/hx/admin/orderList?orderStatus=2" class="small-box-footer label-danger">查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                </div>


            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->

            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->

            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->

            </div>
            <!-- ./col -->
        </div>
        <div class="row">
            <div class="col-lg-10 col-xs-10" style="font-size:30px;">
                <!-- small box -->

            </div>
        </div>

    </section>
</div>
@include('admin.common.jss')
@stop