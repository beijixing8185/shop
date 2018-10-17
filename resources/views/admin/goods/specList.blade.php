@extends('admin.common.index')

@section('content')

<link rel="stylesheet" href="{{ asset('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        规格列表
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
              <a href="{{url('hx/admin/serviceSpecForm')}}" class="label label-primary">添加</a>
              </h3>


            </div>
            <!-- /.box-header -->
            <div class="box-body  no-padding">

              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                        标识id
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        规格名称
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        服务名称
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        市场价格
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        零售价格
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        库存
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        状态
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                        注册时间
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                        更新时间
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                        操作
                    </th>
                </tr>
            </thead>

                <tbody>
                @foreach($goods as $g)
                    <tr role="row" class="odd">
                        <td class="sorting_1">{{$g->id}}</td>
                        <td>{{$g->spec_name}}</td>
                        <td>{{$g->spec_name}}</td>

                        <td>{{$g->market_price}}</td>
                        <td>{{$g->price}}</td>
                        <td>{{$g->num}}</td>
                        <td>{{$g->status}}</td>
                        <td>{{$g->created_at}}</td>
                        <td>{{$g->updated_at}}</td>
                        <td><a href="{{url('hx/admin/serviceSpecForm',['id'=>$g->id])}}" class="fa fa-edit" title="编辑"style="margin-left: 10px;" ></a></td>
                    </tr>
                @endforeach
                </tbody>
              </table></div></div>

            <div class="row">
            <div class="col-sm-5"></div>
            <div class="popup"></div>
            <div class="datu"></div>
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

  @stop



