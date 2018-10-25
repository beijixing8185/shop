var timer;
function changePwds(){
	var newPwd = $("#newPwd").val();
	var newPwd2 = $("#newPwd2").val();
	$("#mobileTip").hide();
	$("#mobileTip2").hide();
	if(newPwd == ""){
		$("#mobileTip").html("请输入密码");
		$("#mobileTip").show();
		return false;
	}
	
	if(newPwd.length < 6 || newPwd.length > 12){
		$("#mobileTip").html("请输入6-12个字符");
		$("#mobileTip").show();
		return false;
	}
	
	
	if(newPwd2 == ""){
		$("#mobileTip2").html("请再次输入密码");
		$("#mobileTip2").show();
		return false;
	}
	
	if(newPwd2 != newPwd){
		$("#mobileTip2").html("两次输入的密码不一致，请重试");
		$("#mobileTip2").show();
		return false;
	}
	$.ajax({
			url: "/member/updateMemberPwd",
			type: "post",
			data: {password:newPwd},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
		    success: function(data){
                if(data==1){
                    alert("修改成功！");
                }else{
                    alert("修改失败！");
                }
		   }
		});
	
	
}
//修改头像按钮点击
function prepareupload(option){

}

$(document).ready(function() {
    //响应文件添加成功事件
    var feedback = $("#feedback");
    $("#inputfile").change(function () {

       var formData = new FormData();
        formData.append("imgFile",$('#inputfile')[0].files[0]);
        formData.append("path",'member');
        //发送数据
        $.ajax({
            url: '/upload', /*去过那个php文件*/
            type: 'POST', /*提交方式*/
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache: false,
            contentType: false, /*不可缺*/
            processData: false, /*不可缺*/
            success: function (data) {
            	$('#_imgPath1').val(data.url);
            	$('#upload1_img').attr('src',data.url);
            	alert('头像上传成功');
            },
            error: function () {
                alert('上传出错');
            }
        });
    });

});

//上传图片
function uploadImg(inputName,type,errorId,img1Id,baseUrl,imgSourceId){
	var timestamp = (new Date()).valueOf();  
	$("#company-form").attr("enctype","multipart/form-data");
	$("#company-form").attr("action","/sp/uploadImg.json") ;
	$("#company-form").ajaxSubmit({
		type:"post",
		url:"/sp/uploadImg.json?timestamp=" + timestamp,
		data:{"type": type,
			  "inputName":inputName,
			  "choice":"userupload"
			  },  //图文件类型，
		success: function(data){
			data = data.substring(0,data.indexOf("||"));
			var result = $.parseJSON(data); 
			if(result.state=='success'){
				$("#"+img1Id).attr("src","/product/loadImage.htm?imagepath="+result.imgDir);
				$("#"+img1Id).css({ "top":"0", "height":"100%", "width":"100%" });
				$("#_imgPath"+type).val(result.imgName);
				$("#upload_btn"+type+" span").text("点击上传");
				$("#upload_btn"+type).parent().removeClass("warn");
				$("#"+errorId).parent().parent().addClass("vis");
				$("#"+errorId).parent().parent().removeClass("err");
			}else{
				$("#"+errorId).text(result.errorInfo);
				$("#upload_btn"+type+" span").text("请重新上传");
				$("#"+errorId).parent().parent().removeClass("vis");
				$("#upload_btn"+type).parent().addClass("warn");
				$("#"+errorId).parent().parent().removeClass("err");
				if ($("#_imgPath"+type).val()=="") {
					$("#"+img1Id).css({ "top":"35px", "height":"auto", "width":"auto" });
				}else{
					$("#"+img1Id).css({ "top":"35px", "height":"auto", 	"width":"auto" });
					$("#"+img1Id).attr("src","/website_v2/images/sp/upload.png");
					$("#_imgPath"+type).val("");
				}
			}
			$("input[name='"+inputName+"']").val("");//重置inputName对应的input，使file的再次change事件生效
		},
		error: function(e){
			$("#"+img1Id).css({ "top":"35px", "height":"auto", 	"width":"auto" })
			$(".p2-fail").addClass("vis");
			$(".p2-success").removeClass("vis");
			$("input[name='"+inputName+"']").val("");
		}
	});  
}

//返回首页
function toHome() {
	clearInterval(timer);
    timer = null;
	var hrefUrl = "/";
	window.location.href = hrefUrl;
}
function changeUl(dom) {
	$(dom).addClass("lib").siblings().removeClass("lib");
	$("#"+$(dom).attr("data-id")).show().siblings().hide();
}
function changeName(dom) {
	$(dom).prev().removeAttr("disabled");
	$(dom).prev().focus();
}
//修改用户信息
function updateUserInfo(){
	var userImage = $('#_imgPath1').val();	//图片
	var nickName = $("input[name='nickName']").val();//昵称
	var email = $("input[name='email']").val();		//邮箱
	
	if(email!=""){
		var emailreg = /[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
		if(!emailreg.test(email)){
			alert("请输入正确的邮箱！");
			$("input[name='email']").focus();
			return;
		}
	}
	
	$.ajax({
	   url: "/member/updateMemberInfo",
	   type : "post",
	   data:{
		   picture:userImage,
		   username:nickName,
		   email:email
	   },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
	   success: function(data){
		   if(data==1){
			   alert("修改成功！");
		   }else{
			   alert("系统出错了！");
		   }
	   }
	});
}