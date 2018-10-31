@extends('admin.common.index')

@section('content')

<link rel="stylesheet" href="{{ asset('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        文章列表
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
                <div class="layui-tab layui-tab-brief">
                    <form class="layui-form layui-form-pane" method="get" action="{{url('hx/admin/articleList')}}">
                        <div class="layui-inline">
                            <label class="layui-form-label">栏目分类</label>
                            <div class="layui-input-inline">
                                <select name="cid">
                                    @if(!empty($cid))
                                        <option selected="selected" value="{{$cid}}"></option>
                                    @endif
                                    <option value="">全部</option>
                                    @if(!empty($cate))
                                        @foreach($cate as $val)
                                    <option value="{{$val['id']}}">{{$val['cate_name']}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">状态</label>
                            <div class="layui-input-inline">
                                <select name="status">
                                    @if(isset($status))
                                        <option value="{{$status}}" selected="selected"></option>
                                    @endif
                                    <option value="" >不限</option>
                                    <option value="1" >有效</option>
                                    <option value="0" >无效</option>
                                </select>
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">关键词</label>
                            <div id="keywords" class="layui-input-inline">
                                @if(!empty($name))
                                <input type="text" name="name" value="{{$name}}" placeholder="请输入标题/关键词" class="layui-input">
                                @else
                                    <input type="text" name="name" value="" placeholder="请输入标题/关键词" class="layui-input">
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="layui-inline" id="search">
                            <button class="layui-btn">搜索</button>
                        </div>
                        <div class="layui-inline add_arti">
                            <a href="{{url('hx/admin/addArticle')}}"><button class="layui-btn">添加</button></a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body  no-padding">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                        标识id
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                        分类
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        标题
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        标签
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        关键词
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        图片
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        描述
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        点击量
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        是否推荐
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        状态
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                        添加时间
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
                @foreach($article as $g)
                <tr role="row" class="odd">
                      <td align="center" class="sorting_1">{{$g->id}}</td>
                      <td align="center">{{$cates[$g->article_cate_id] or '未知'}}</td>
                        <td align="center" style="width: 200px;">{{$g->title}}</td>
                        <td align="center" style="width: 200px;">{{$g->tag}}</td>
                        <td align="center" style="width: 200px;">{{$g->keywords}}</td>
                        <td align="center"><img src="{{$g->picture}}" alt="" style="width: 50px;height: 50px;"></td>
                        <td align="center" style="width: 200px;">{{str_limit($g->description,50,'...')}}</td>
                        <td align="center">{{$g->number}}</td>
                        <td align="center">
                            @if($g->hot==0)
                                <span class="label label-warning">否</span>
                            @else
                                <span class="label label-success">是</span>
                            @endif
                        </td>
                        <td align="center">
                        @if($g->status==0)
                            <span class="label label-warning">无效</span>
                        @else
                            <span class="label label-success">有效</span>
                        @endif
                        </td>
                      <td align="center">{{$g->created_at}}</td>

                      <td align="center"><a href="{{url('hx/admin/addArticle',['id'=>$g->id])}}" class="fa fa-edit" title="编辑"style="margin-left: 10px;" ></a></td>
                      <td align="center"><a  class="fa fa-trash delSpec" title="删除" data-Id="{{$g->id}}" style="margin-left: 10px; cursor: pointer;" ></a></td>
                </tr>
                @endforeach
                </tbody>
              </table></div></div>

            <div class="row pull-right">
            <div class="col-sm-10 "></div>
                {{$article->links()}}

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
    //删除
    $('#example2').on('click','.delSpec',function(){
        var Id = $(this).attr('data-Id');
        var resultUrl = '/hx/admin/delArticle?id='+ Id;
        if(confirm('确定要删除文章吗?')){
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



