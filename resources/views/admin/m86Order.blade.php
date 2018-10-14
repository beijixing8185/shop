@extends('admin.common.index')

@section('content')

<link rel="stylesheet" href="{{ asset('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        移动商城订单
        <small>订单总数<span class="label label-info" style="font-size: 15px;">{{$count}}</span>个</small>
        <small>已兑换数<span class="label label-success" style="font-size: 15px;">{{$exchanged_count}}</span>个</small>
        <small>兑换占比<span class="label label-danger" style="font-size: 15px;">{{$percent}}</span></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/index" style="font-size: 20px;"><i class="fa fa-dashboard"></i>返回</a></li>
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

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 100%;">
                  <input type="text" name="table_search" class="form-control pull-left vcode" placeholder="查询兑换码名" value="{{$vcode}}" style="width:200px;">
                  <input type="text" name="mobile" class="form-control pull-left mobile" placeholder="查询手机号" value="{{$mobile}}" style="width:150px;">



                  <div class="input-group-btn pull-left">
                    <button type="submit" class="btn btn-default userSearch"><i class="fa fa-search"></i></button>
                  </div>

                <div class="input-group pull-left">

                  <input type="text" class="form-control col-xs-5" id="reservation" value="">

                  <div class="input-group-addon">
                    <i class="fa fa-calendar dateSearch" style="cursor:pointer;">按日期查询</i>
                  </div>


                </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body  no-padding">

              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                        id
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        订单id
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        手机号
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        M86商品id
                    </th>
                     <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        商品名称
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        价格
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        兑换码
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        订单状态
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        兑换状态
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        兑换时间
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        下单时间
                    </th>

                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                        操作
                    </th>
                </tr>
            </thead>

                <tbody>
                @foreach($list as $li)
                <tr role="row" class="odd">
                      <td>{{$li->id}}</td>
                      <td>{{$li->orderId}}</td>
                      <td>{{$li->phone}}</td>
                      <td>{{$li->itemId}}</td>
                      <td>{{$li->title}}</td>
                      <td>{{$li->price}}</td>
                      <td>{{$li->vcode_user}}</td>
                      <td><span class="label  @if($li->exchanged == 1)  label-success @else label-primary @endif">{{$m86_exchange_status[$li->exchanged]}}</span></td>
                      <td><span class="label  @if($li->orderStatus == 1)  label-success @else label-primary @endif">{{$m86_order_status[$li->orderStatus]}}</span></td>
                      <td>{{$li->exchangeTime}}</td>
                      <td>{{$li->created_at}}</td>
                      <td>查看</td>

                </tr>
                @endforeach
                </tbody>
              </table></div>
           </div>

            <div class="row">
            <div class="col-sm-5"></div>
                {{$links}}
            </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
          <div class="popup"></div>
          <div class="datu"></div>
    </section>
    <!-- /.content -->
  </div>
  @include('admin.common.jss')
  <script src="{{ asset('js/mask.js') }}"></script>
  <script type="text/javascript">

  $(function(){

        $('html').ready(function () {
            var current = 0;
           /* $('#example2').on('click','.dianji',function(){*/
              $('.dianji').click(function(){
            mask();
             $(".datu").show();
             var xiaotu = $(this).html();
              $('.datu').html(xiaotu);
         })
          $('.datu').click(function(){
              current = (current+90)%360;
              this.style.transform = 'rotate('+current+'deg)';
              /*$(".datu").hide();
              $('.popup').hide();*/
          });
            $('html').click(function (event) {
                var eo = $(event.target);

                if (eo[0].localName != "img" ) {
                    $(".datu").hide();
                    $('.popup').hide();
                }
            });
        });
    });



  $(".userSearch").click(function (){

      var vcode = $(".vcode").val();
      var mobile = $('.mobile').val();
      var pattern = /^1[345789]\d{9}$/;

      var link = "/zs/admin/m86OrderList";
          link +="?vcode="+ vcode;

        if (mobile != ''){
            link +="&mobile="+mobile;
        }


        window.location.href = link;
    })



  </script>
      @stop



