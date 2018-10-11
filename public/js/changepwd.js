var timer;
function changePwd(){
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
			url: "/updatepwd/updatePwd.json",
			dataType : 'json',
			type: "post",  
			async : false,
			data: {newPwd:newPwd},
		    success: function(result){
			   var status = result.status;
			   if(status == "0"){
				   $("#change-submit-form").hide();
				   $("#pwdSuccess").show();
				   var num = 5;
				   timer = setInterval(countDown,1000)
				    function countDown(){
				        num--;
				        $("#countNum").html(num);
				        console.log(num < 0);
				        if(num <= 0){
				        	toHome();
				            clearInterval(timer);
				            timer = null;
				        }
				    };
			   }
		   }
		});
	
	
}
//修改头像按钮点击
function prepareupload(option){
   var fn = $(option).attr("fn");
   var ft = $(option).attr("ft");
   var fe = $(option).attr("fe");
   var fu = $(option).attr("fu");
   var fbu = $(option).attr("fbu");
   uploadImg(fn, ft, fe, fu, fbu);
}

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
function updateUser(){
	var userImage = $('#_imgPath1').val();
	var nickName = $("input[name='nickName']").val();
	var name = $("input[name='name']").val();
	var qq = $("input[name='qq']").val();
	var weChat = $("input[name='weChat']").val();
	var email = $("input[name='email']").val(); 
	
	if(qq!=""){
		var qqreg = /[1-9][0-9]{4,}/;
		if(!qqreg.test(qq)){
			alert("请输入正确的QQ号！");
			$("input[name='qq']").focus();
			return;
		}
	}
	
	if(email!=""){
		var emailreg = /[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
		if(!emailreg.test(email)){
			alert("请输入正确的邮箱！");
			$("input[name='email']").focus();
			return;
		}
	}
	
	$.ajax({
	   url: "/useraccount/updateuser.json",
	   type : "post",
	   data:{
		   userImage:userImage,
		   nickName:nickName,
		   name:name,
		   qq:qq,
		   weChat:weChat,
		   email:email
	   },
	   dataType:"json",
	   success: function(data){
		   var status = data.status;
		   if(status=="success"){
			   alert("修改成功！");
		   }else{
			   alert("系统出错了！");
		   }
	   }
	});
}