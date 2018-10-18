@extends('admin.common.index')
<link rel="stylesheet" href="{{ asset('kindeditor/themes/default/default.css') }}" />
<link rel="stylesheet" href="{{ asset('kindeditor/plugins/code/prettify.css') }}" />

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
        banner操作
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
            <form action="{{url('hx/admin/addBanner')}}" method="post"  class="form-horizontal" enctype="multipart/form-data"  onsubmit="return checkSubmit();">
        {!!csrf_field()!!}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">分类:</label>

                    <div class="col-sm-5">
                        <select name="type" class="type" id="type" >
                            <option value="0">请选择分类</option>
                              <option value="1" @if($banner->type == 1 ) selected @endif>首页</option>
                              <option value="2" @if($banner->type == 2 ) selected @endif>新闻</option>
                        </select>
                        <span class="cate" style="color:red"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">图片:</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="first_img" id="first_img" class="first_img" readonly="readonly" value="{{$banner->picture}}" />
                        <span class="tpxs">
                            @if($banner->picture)
                                <img src="{{ $banner->picture }}" class="images lf" style="height:100px; width:100px;">
                            @endif
                    </span>
                        <input type="button" id="browse" value="上传图片"/>
                        <span class="first_img" style="color:red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">图片链接:</label>

                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="请填写链接地址" name="open_url"  id="open_url" value="{{$banner->open_url}}" required>
                        <span class="title" style="color:red"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">状态:</label>
                <div class="col-sm-10">
                    <select name="status" id="status">
                    <option value="1" @if($banner->type == 1 ) selected @endif>有效</option>
                    <option value="0" @if($banner->type == 0 ) selected @endif>无效</option>
                </select>
                </div>
                </div>

              <div class="box-footer" style="padding-left: 600px;">
                <input type="hidden" name="id" id="id" value="{{$banner->id}}">
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
            extraFileUploadParams : {path:'banners'},
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

    // 表单提交
    function  checkSubmit()
    {
        //分类名称
        if($('#cate_two').val()==0) {
            $('.cate').html('二级分类名称不能为空');
            return false;
        }
        return true;
    }

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