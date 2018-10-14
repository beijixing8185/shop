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
                        <h2>订单总数 <span style="color:green;">(100)</span></h2>

                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/zs/admin/orderList" class="small-box-footer label-success">查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h2>待发货订单数 <span style="color:red;">(100)</span></h2>

                    </div>
                    <div class="icon">

                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/zs/admin/orderList?orderStatus=2" class="small-box-footer label-danger">查看详情 <i class="fa fa-arrow-circle-right"></i></a>
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
            <span style="color:red;">温馨提示:</span>该后台为临时后台,仅具有查看订单和执行发货的功能,其他功能有待后续开发,所有的订单均可通过左侧导航栏的订单/本平台订单查看,并且均以本平台订单所显示的数据为准
            </div>
        </div>

    </section>
</div>
@include('admin.common.jss')
@stop