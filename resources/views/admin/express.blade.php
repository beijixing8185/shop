@extends('admin.common.index')

@section('content')
<link rel="stylesheet" href="{{ asset('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        物流信息
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:;history.back(-1)" style="font-size: 20px;"><i class="fa fa-dashboard"></i>返回</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>


            </div>
            <!-- /.box-header -->
            <div class="box-body  no-padding">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-1 control-label">签收状态：</label>
                        <div class="col-sm-2">
                            <p class="form-control">{{$expressInfo['State']}} </p>
                        </div>
                        <label for="inputPassword3" class="col-sm-1 control-label">快递单号：</label>
                        <div class="col-sm-2">
                            <p class="form-control">{{$expressInfo['express']['express_number']}} </p>
                        </div>
                        <label for="inputPassword3" class="col-sm-1 control-label">快递名称：</label>
                        <div class="col-sm-2">
                            <p class="form-control">{{$expressInfo['express']['express_name']}} </p>
                        </div>
                    </div>
                </div>
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">




            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                        物流信息
                    </th>

                </tr>
            </thead>

                <tbody>
                @if(!empty($expressInfo['result']))
                    @foreach($expressInfo['result'] as $e)
                    <tr role="row" class="odd">
                          <td>{{$e['AcceptTime']}}  {{$e['AcceptStation']}}</td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
              </table></div>
           </div>

              </div>
            </div>

          </div>

        </div>
      </div>
          <div class="popup"></div>
          <div class="datu"></div>
    </section>
    <!-- /.content -->
  </div>

      @stop



