@extends('admin.common.index')
<link rel="stylesheet" type="text/css" href="/static/css/font-awesome.min.css">

<link rel="stylesheet" href="/static/css/index.css" />
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        栏目列表
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


          <div>
            <div class="box-header with-border">
                <label for="inputPassword3" class="col-sm-3 control-label pull-left" style="font-size:12px;">双击栏目名称修改或者删除</label>
                <h3 class="box-title">
                    <a href="{{url('hx/admin/addCates')}}" class="label label-primary" style="font-size:100%;">添加</a>
                </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


              <div class="box-body">

                  <div class="form-group">
                      <ul>
                          @foreach($cate as $c)
                              <li class="first">
                                  <div class="d-firstNav s-firstNav clearfix" data-id="{{$c->id}}">
                                      <i class="fa fa-bars"></i>
                                      <span ><a href="#" class="mdspan" data-ids="{{$c->id}}">{{$c->name}}</a></span>
                                      <i class="fa fa-caret-right fr "></i>
                                  </div>
                                  <ul class="d-firstDrop s-firstDrop">
                                      <li>
                                          <div class="d-secondNav s-secondNav">
                                              <i class="fa fa-minus-square-o"></i>
                                              <span></span>
                                              <i class="fa fa-caret-right fr"></i>
                                          </div>
                                          <ul class="d-secondDrop s-secondDrop">
                                              <li class="s-thirdItem">
                                                  <a href="#"></a>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </li>
                          @endforeach
                      </ul>
                  </div>
                  <div class="form-group mdinput" style="display:none;" >
                      <label for="inputPassword3" class="col-sm-1 control-label">修改名称:</label>
                      <div class="col-sm-3">
                          <input type="hidden"  class="form-control" id="cate_id" name="cate_id" value="" >

                          <input type="text" placeholder="修改栏目名称" class="form-control" name="name" id="name" value="" >
                          <input type="button" class="btn" id="cancelBtn" value="取消">


                          <input type="button" class="btn btn-info pull-right" id="confirmBtn" value="确认修改">
                          <input type="button" class="btn pull-right" id="delBtn " value="删除栏目">
                          <span class="price" style="color:red"></span>
                      </div>
                  </div>


                 </div>

              <!-- /.box-footer -->

          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="/static/js/index.js" ></script>

@stop