@extends('admin.common.index')
<link rel="stylesheet" href="{{ asset('kindeditor/themes/default/default.css') }}" />
<link rel="stylesheet" href="{{ asset('kindeditor/plugins/code/prettify.css') }}" />
<script type="text/javascript" charset="utf-8" src="/uedit/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/uedit/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/uedit/lang/zh-cn/zh-cn.js"></script>

<style type="text/css">
#uploader2 ul{
  overflow: hidden;
  padding-left: 0;
}
   #uploader2 ul li{
    list-style: none;
    float: left;
    margin-right: 5px;
    position: relative;
    width: 100px;
    height: 100px;
  }
  #uploader2 ul li>img{
    width: 100%;
      height:100%;
  }
.up span{
    position: relative;
    z-index:20;
    margin-left:5px;
    cursor: pointer;
    }
</style>
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        添加关于
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
            <form action="{{url('hx/admin/addAbout')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
        {!!csrf_field()!!}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">分类:</label>

                    <div class="col-sm-5">
                        <select name="cate_one" class="cate_one" id="cate_one" >
                            @foreach($category_type as $k=>$v)
                                <option value="{{$k}}" @if($k == $case->gc_id) selected  @endif>{{$v}}</option>
                            @endforeach
                        </select>
                        <span class="cate" style="color:red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">主图:</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="first_img" id="first_img" class="first_img" readonly="readonly" value="{{$case->picture}}" />
                        <span class="tpxs">
                            @if($case->picture)
                                <img src="{{ $case->picture }}" class="images lf" style="height:100px; width:100px;">
                            @endif
                    </span>
                        <input type="button" id="browse" value="上传图片"/>
                        <span class="first_img" style="color:red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">标题:</label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="请填写标题" name="title"  id="title" value="{{$case->title}}" >
                        <span class="title" style="color:red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">关键词:</label>
                    <div class="col-sm-5">
                        <input type="text" placeholder="填写关键词,中间用逗号隔开，" class="form-control" name="keywords" id="keywords" value="{{$case->keywords}}" >
                        <span class="price" style="color:red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">描述:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="description" id="description" placeholder="案例描述" value="{{$case->description}}" >
                        <span class="num" style="color:red"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">内容详情:</label>
                    <div class="col-sm-5">
                        <script id="editor" style="width: 650px;height: 600px;">{!! $case->content !!}</script>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">状态:</label>
                <div class="col-sm-10">
                    <select name="status" id="status">
                        <option value="0" @if($case->status == 0) selected @endif>无效</option>
                        <option value="1" @if($case->status == 1) selected @endif>有效</option>
                </select>
                </div>
                </div>

              <div class="box-footer" style="padding-left: 600px;">
                <input type="hidden" name="id" id="id" value="{{$case->id}}">
                <a href="" class="btn btn-default">取消</a>
                <input type="submit" class="btn btn-info" value="提交">
              </div>

            </form>
          </div>
          </div>

        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>

  <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<script charset="utf-8" src="{{ asset('kindeditor/kindeditor.js') }}"></script>
<script charset="utf-8" src="{{ asset('kindeditor/lang/zh_CN.js') }}"></script>
<script charset="utf-8" src="{{ asset('kindeditor/plugins/code/prettify.js') }}"></script>
<script>
    //上传列表图
    KindEditor.ready(function(K) {
        var editor = K.editor({
            allowFileManager : true,
            imageTabIndex : 1,
            extraFileUploadParams : {path:'goods'},
            basePath : '/kindeditor/',
            uploadJson : '{{config('app.APP_URL')}}/upload'
        });
        K('#browse').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    showRemote : false,
                    imageUrl : K('.first_img').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        K('.first_img').val(url);
                        $(".tpxs").html('<img src="'+url+'" class="images lf" style="height:100px; width:100px;">');
                        editor.hideDialog();
                    }
                });
            });
        });
    });

</script>
<script>
    var options = {
        cssPath : '/css/index.css',
        filterMode : true
    };
    var editor = K.create('textarea[name="content"]', options);

</script>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
@stop