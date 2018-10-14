var sendState = 0;
$(document).ready(function(){
	$(".biaoshi-star").on("mouseover",function(){
		$(this).children("b").css({"display":"block"});
	});
	$(".biaoshi-star").on("mouseout",function(){
		$(this).children("b").css({"display":"none"});
	});
	$(".rz-img").on("mouseover",function(){
		$(this).children("b").css({"display":"block"});
	});
	$(".rz-img").on("mouseout",function(){
		$(this).children("b").css({"display":"none"});
	});
//	$("#sp-name").on("mouseover",function(){
//		$(this).next().css({"display":"block"});
//	});
//	$("#sp-name").on("mouseout",function(){
//		$(this).next().css({"display":"none"});
//	});
	$("#custom-name").on("mouseover",function(){
		$(this).next().css({"display":"block"});
	});
	$("#custom-name").on("mouseout",function(){
		$(this).next().css({"display":"none"});
	});
	//点击关闭按钮的时候，遮罩层关闭
    $(".f_close").click(function () {
        $(".wrap_zhezhao").css("display", "none");
        $(".error_tip").css("display","none");
    });
    
    $(".xq-release").click(function(){
    	sendUserRequest();
    });
    $(window).scroll(function(){
        if($(window).scrollTop() > 350){
            $(".header-fix").show();
        }else {
            $(".header-fix").hide();
        }
    });
});


function spChoose(orgName,spId){
	$("#_spId").val(spId);
	if(spId != null && spId !=""){
		$("#_orgName").text("【"+orgName+"】");
	}
	$(".choose p span").text($(this).attr("cat")+"-"+$(this).attr("pname"));
    $(".wrap_zhezhao").css({
        display: "block"
    });
    sendState = 0;
}

function sendUserRequest(){
	var telephone = $("#__telephone").val();
	var userRequest = $("#__userRequest").val();
	var prodId = $("#_prodId").val();
	var spId = $("#_spId").val();
	var reg =/^1\d{10}$/;
	if(!reg.test(telephone)){
		$(".error_tip").css("display","inline-block");
		return false;
	}else{
		$(".error_tip").css("display","none");
	}
	if (sendState==0) {
		sendState = 1;
		$.ajax({
			url:"/order/ajaxSubmit.htm",
			type:"post",
			data:{"spId":spId,"productId":prodId,"userRequest":userRequest,"mobile":telephone},
			dataType:"json",
			success:function(result){
				if(result.errorCode == "0"){
					$("#__userRequest").val("");
					$("#__telephone").val("");
					$(".lx-people").text(telephone);
					$(".wrap_zhezhao").css("display", "none");
					$("#_submit_success").css("display","block");
				}else{
					$("#_submit_fail").css("display","block");
				}
				sendState = 0;
			},
			fail:function(e){
				$("#_submit_fail").css("display","block");
				sendState = 0;
			}
		});
	}
}

function quickSendUserRequest(){
	var telephone = $("#_user_mobile").val();
	var userRequest = $("#_user_name").val();
	var mobileidentifyCode = $("#_mobile_identyfy_code").val();
	var reg =/^1\d{10}$/;
	if(!reg.test(telephone)){
		$("#mobile_error").show();
		$("#mobile_error").parent().addClass("error");
		return false;
	}else{
		$("#mobile_error").hide();
		$("#mobile_error").parent().removeClass("error");
	}
	if("" == mobileidentifyCode){
		$("#auth_error").show();
		$("#auth_error").parent().addClass("error");
		return false;
	}
	if(!ajaxAuthCode(telephone,mobileidentifyCode)){
		$("#auth_error").show();
		$("#auth_error").parent().addClass("error");
		return false;
	}else{
		$("#auth_error").hide();
		$("#auth_error").parent().removeClass("error");
	}
	if (sendState==0) {
		sendState = 1;
		$.ajax({
			url:"/order/ajaxSubmit.htm",
			type:"post",
			data:{"userRequest":userRequest,"mobile":telephone},
			dataType:"json",
			success:function(result){
				if(result.errorCode == "0"){
					$("#_user_name").val("");
					$("#_user_mobile").val("");
					$("#_mobile_identyfy_code").val("");
					$(".lx-people").text(telephone);
					$("#_submit_success").css("display","block");
					clearAuthCode_quick($("#authButton"));
				}else{
					$("#_submit_fail").css("display","block");
				}
				sendState = 0;
			},
			fail:function(e){
				$("#_submit_fail").css("display","block");
				sendState = 0;
			}
		});
	}
}

function getAuthCode(){
	var telephone = $("#_user_mobile").val();
	var reg =/^1\d{10}$/;
	if(!reg.test(telephone)){
		$("#mobile_error").show();
		$("#mobile_error").parent().addClass("error");
		return false;
	}else{
		$("#mobile_error").hide();
		$("#mobile_error").parent().removeClass("error");
	}
	
	getMobileCode_quick(telephone,$("#authButton"),$("#auth_error"));
}

function loadSuccessCase(id, spId) {
	var childDom = $("#" + id + " dl");
	if (0 == childDom.length) {
		$.ajax({
			url : "/spList/case.htm",
			dataType : 'html',
			type : "get",
			async : true,
			data : {
				spId : spId
			},
			success : function(html) {
				$("#" + id).append(html);
			},
			error : function(data) {
			}
		});
	}
}