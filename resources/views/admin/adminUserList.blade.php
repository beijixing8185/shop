@extends('admin.common.index')

@section('content')

<link rel="stylesheet" href="{{ asset('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        后台用户列表
        <small>用户基本信息</small>
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
              <a href="{{url('zs/admin/addAdminUser')}}" class="label label-primary">添加</a>
              </h3>


            </div>
            <!-- /.box-header -->
            <div class="box-body  no-padding">

              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                        用户id
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        用户名
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        用户昵称
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        用户头像
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
                @foreach($list as $li)
                <tr role="row" class="odd">
                      <td class="sorting_1">{{$li->id}}</td>
                      <td>{{$li->username}}</td>
                      <td>{{$li->name}}</td>
                      <td><img src="{{$li->avatar}}" alt="" style="width: 100px;height: 100px;"></td>
                      <td>{{$li->created_at}}</td>
                      <td>{{$li->updated_at}}</td>
                      <td><a href="{{url('/zs/admin/modifyPassword',['userId'=>$li->id])}}" class="fa fa-credit-card" title="修改密码"></a><a href="{{url('/zs/admin/modifyPersonData',['id'=>$li->id])}}" class="fa fa-edit" title="编辑"style="margin-left: 10px;" ></a></td>
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



