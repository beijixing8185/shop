@extends('admin.common.index')

@section('content')

<link rel="stylesheet" href="{{ asset('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        banner图列表
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
              <a href="{{url('hx/admin/addBanner')}}" class="label label-primary">添加</a>
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
                        类型
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        主图
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        链接地址
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        状态
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                        添加时间
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                        修改时间
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                        编辑
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                        删除
                    </th>
                </tr>
            </thead>

                <tbody>
                @foreach($banner as $g)
                <tr role="row" class="odd">
                      <td class="sorting_1">{{$g->id}}</td>
                      <td>
                          @if($g->type==1)
                              <span class="label label-warning">首页</span>
                          @else
                              <span class="label label-success">新闻</span>
                          @endif
                      </td>
                      <td><img src="{{$g->picture}}" alt="" style="width: 100px;height: 100px;"></td>
                        <td>{{$g->open_url}}</td>

                        <td>
                            @if($g->status==0)
                                <span class="label label-warning">已删除</span>
                            @else
                                <span class="label label-success">有效</span>
                            @endif
                        </td>
                      <td>{{$g->created_at}}</td>
                      <td>{{$g->updated_at}}</td>
                    <td><a  class="fa fa-trash delSpec" title="删除" data-Id="{{$g->id}}" style="margin-left: 10px; cursor: pointer;" ></a></td>
                </tr>
                @endforeach
                </tbody>
              </table></div></div>

                  <div class="row pull-right">
                      <div class="col-sm-10 "></div>


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
        var resultUrl = '/hx/admin/delBanner?id='+ Id;
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



