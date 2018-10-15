<div class="con_t"><h3>产品管理</h3>
<span>
<?php echo CHtml::link('新增商品',array('Create')); ?>
<?php echo CHtml::link('返回',array('Admin'));?>
</span>
</div><br>
<style>
.simple label{width:150px;}
.adds,.del{cursor:pointer;}
.photos{ margin-bottom:10px;}
.my_photos{ margin:10px 0;}
.my_photos p{ margin:10px 50px 0px 0px;position:relative; width:100px; float:left;}
.my_photos p font{cursor:pointer;color:red; font-size:20px;position:absolute;z-index:999;margin-left:85px; margin-top:-5px;background:white;}
.my_photos span{width:136px; text-align:right; display:inline-block;}
</style>
<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : false,
					imageTabIndex : 1,
                    extraFileUploadParams : {imageType:'goods',objectCode:100,upType:'detail'},
					basePath : "<?php echo Yii::app()->request->baseUrl ?>"+'/php/kindeditor/',
				});
			});
			KindEditor.ready(function(K) {
				var editor = K.editor({
					allowFileManager : true,
					imageTabIndex : 1,
                    extraFileUploadParams : {imageType:'goods',objectCode:100,isthumbs:'1'},
					basePath : "<?php echo Yii::app()->request->baseUrl ?>"+'/php/kindeditor/',
				});
				K('#image3').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							showRemote : false,
							imageUrl : K('#url3').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url3').val(url);
								editor.hideDialog();
							}
						});
					});
				});
			});
		</script>

<div class="yiiForm">
<p>带 <span class="required">*</span> 的项目为必填</p>

<p><input type="text" id="url3" value="" /> <input type="button" id="image3" value="选择图片" />（本地上传）</p>
<form>
			<textarea name="content" style="width:800px;height:400px;visibility:hidden;">KindEditor</textarea>
		</form>
<div class="action">
<?php echo CHtml::submitButton('提交'); ?>
</div>