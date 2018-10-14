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
        服务操作
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
            <form action="{{url('hx/admin/serviceForm')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
        {!!csrf_field()!!}


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">服务名称:</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="请填写服务名称" name="title"  id="title" value=""  onchange="checkTitle();">
                    <span class="title" style="color:red"></span>
                  </div>
                </div>


              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">服务价格:</label>
                  <div class="col-sm-2">
                    <input type="text" placeholder="商品价格(元)" class="form-control" name="price" id="price" value="" >
                    <span class="price" style="color:red"></span>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">服务库存:</label>

                  <div class="col-sm-5">
                    <input type="number" class="form-control" name="num" id="num" min="0" value="" >
                    <span class="num" style="color:red"></span>
                  </div>
              </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">服务详情:</label>

                    <div class="col-sm-5">
                        <script id="editor" style="width: 668px;height: 600px;"></script>
                    </div>
                </div>

              <div class="form-group" style="display:none;">
                  <label for="inputPassword3" class="col-sm-2 control-label">服务描述:</label>

                  <div class="col-sm-5">
                  <input type="text" placeholder="请填写商品描述" name="describe" id="describe" data-required value=""  />
                  <!--   <textarea name="describe" id="describe" cols="30" rows="10" class="lf" style="width: 668px;" ></textarea> -->
                    <span class="describe" style="color:red"></span>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">服务介绍:</label>

                  <div class="col-sm-5">
                    <textarea name="introduce" id="introduce" cols="30" rows="10" class="lf" style="width: 668px;" ></textarea>
                    <span class="introduce" style="color:red"></span>
                  </div>
              </div>



              <!-- /.box-body -->

              <!-- if(($check && $goodsDetail->status ==0) || empty($check)) -->
              <div class="box-footer" style="padding-left: 600px;">
                <input type="hidden" name="id" id="id" value="">
                <input type="submit" class="btn btn-info" value="提交">
                <a href="" class="btn btn-default">取消</a>
              </div>
              <!-- endif -->
              <!-- /.box-footer -->
            </form>
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