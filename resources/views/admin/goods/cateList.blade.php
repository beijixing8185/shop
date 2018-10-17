@extends('admin.common.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        分类操作
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
            <!-- /.box-header -->

          <div>
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


              <div class="box-body">

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">分类名称:</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="请填写分类名称" name="name"  id="name" value="">
                      <span class="name" style="color:red"></span>
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
  <script>

      //二级分类
      $('.cate_one').change(function(){
          $(".cate_two").children().remove();
          $(".cate_id").children().remove();
          var value=this.value;
          $.ajax({
              url:'/goods/cate',
              type:'get',
              data:{
                  '_token':'{{csrf_token()}}',
                  'value':value
              },
              success:function (data) {
                  console.log(data);
                  var result = data['data'];
                  $(".cate_two").append("<option value='0'>请选择二级分类</option>");
                  for(var i = 0; i < result.length; i++){
                      /*循环添加所有城市列表*/
                      $(".cate_two").append("<option value='"+result[i].id+"'>"+result[i].name+"</option>");
                  }
              }
          });
      });
      //三级分类
      $(document).on('change', '.cate_two', function (){
          $(".cate_id").children().remove();
          var value=this.value;
          $.ajax({
              url:'/goods/cate',
              type:'get',
              data:{
                  '_token':'{{csrf_token()}}',
                  'value':value
              },
              success:function (data) {
                  var result = data['data'];
                  $(".cate_id").append("<option value='0'>请选择三级分类</option>");
                  for(var i = 0; i < result.length; i++){
                      $(".cate_id").append("<option value='"+result[i].id+"'>"+result[i].name+"</option>");
                  }
              }
          });
      });
   // 表单提交
      function  checkSubmit()
      {
        //分类名称
        if($('#name').val()==0) {
          $('.name').html('分类名称不能为空');
          $('#name').focus();
          return false;
      }
     }
  </script>
      @stop