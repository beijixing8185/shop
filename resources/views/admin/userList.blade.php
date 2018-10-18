@extends('admin.common.index')

@section('content')

<link rel="stylesheet" href="{{ asset('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        用户列表
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
                        用户昵称
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        手机号
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        邮箱
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        状态
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                        注册时间
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                        操作
                    </th>
                </tr>
            </thead>

                <tbody>
                @foreach($user as $li)
                <tr role="row" class="odd">
                      <td class="sorting_1">{{$li->id}}</td>
                      <td>{{$li->username}}</td>
                      <td>{{$li->mobile}}</td>
                      <td>{{$li->email}}</td>
                      <td>
                          @if($li->status==0)
                              <span class="label label-warning">已冻结</span>
                          @else
                              <span class="label label-success">有效</span>
                          @endif
                      </td>
                      <td>{{$li->created_at}}</td>
                    <td><a  class="fa fa-trash delSpec" title="删除" data-Id="{{$li->id}}" style="margin-left: 10px; cursor: pointer;" ></a></td>

                </tr>
                @endforeach
                </tbody>
              </table></div></div>

            <div class="row">
            <div class="col-sm-5"></div>
            {{$user->links()}}
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
        var resultUrl = '/hx/admin/delUser?id='+ Id;
        if(confirm('确定要冻结用户吗?')){
            $.get(resultUrl,function(res){
                if(res['code']){
                    alert('冻结失败')
                }else{
                    alert('冻结失败')
                    window.location.href=''
                }
            })
        }
    });
</script>

  @stop



