$(function(){
//	$('[data-toggle="mouse"]').on("mouseover",function(){
//		$(this).find(".send-jl").show();
//		$(this).find("dl").addClass("hoverdl");
//	});
//	$('[data-toggle="mouse"]').on("mouseleave",function(){
//		$(this).find(".send-jl").hide();
//		$(this).find("dl").removeClass("hoverdl");
//	});
	$('[data-toggle="logo"]').on("mouseenter",function(e){
		e.stopPropagation();
		var position = parseInt($(this).find(".inter-img").css("background-position-x").slice(0,-2))-220;
		$(this).find(".inter-img").css({"background-position-x":position+"px"});
	});
	$('[data-toggle="logo"]').on("mouseleave",function(){
		var position = parseInt($(this).find(".inter-img").css("background-position-x").slice(0,-2))+220;
		$(this).find(".inter-img").css({"background-position-x":position+"px"});
	});
	$("#mediaList").on("mouseover","li",function(){
		$(this).find(".progr > p ").addClass("allfull");
	});
	$("#mediaList").on("mouseleave","li",function(){
		$(this).find(".progr > p ").removeClass("allfull");
	});
	$(window).scroll(function(){
        if($(window).scrollTop() > 600){
            $(".header-fix").show();
        }else {
            $(".header-fix").hide();
        }
    });
})
var sendState = 0;
function quickSendUserRequest(obj){
	var telephone = $(obj).parent().parent().find("[name='_user_mobile']").val();
	var userName =  $(obj).parent().parent().find("[name='_user_name']").val();
	var userRequest =  $(obj).parent().parent().find("[name='_user_request']").val();
	userRequest = userName + "|" + userRequest;
//	var mobileidentifyCode = $(obj).parent().parent().find("[name='_mobile_identyfy_code']").val();
	var reg =/^1\d{10}$/;
	if(!reg.test(telephone)){
		$(obj).parent().parent().find("[name='mobile_error']").show();
		$(obj).parent().parent().find("[name='mobile_error']").parent().addClass("error");
		return false;
	}else{
		$(obj).parent().parent().find("[name='mobile_error']").hide();
		$(obj).parent().parent().find("[name='mobile_error']").parent().removeClass("error");
	}
//	if("" == mobileidentifyCode){
//		$(obj).parent().parent().find("[name='auth_error']").show();
//		$(obj).parent().parent().find("[name='auth_error']").parent().addClass("error");
//		return false;
//	}
//	if(!ajaxAuthCode(telephone,mobileidentifyCode)){
//		$(obj).parent().parent().find("[name='auth_error']").show();
//		$(obj).parent().parent().find("[name='auth_error']").parent().addClass("error");
//		return false;
//	}else{
//		$(obj).parent().parent().find("[name='auth_error']").hide();
//		$(obj).parent().parent().find("[name='auth_error']").parent().removeClass("error");
//	}
	if (sendState==0) {
		sendState = 1;
		$.ajax({
			url:"/order/ajaxSubmit.htm",
			type:"post",
			data:{"userRequest":userRequest,"mobile":telephone},
			dataType:"json",
			success:function(result){
				if(result.errorCode == "0"){
					$(obj).parent().parent().find("[name='_user_name']").val("");
					$(obj).parent().parent().find("[name='_user_mobile']").val("");
					$(obj).parent().parent().find("[name='_user_request']").val("");
					$(".lx-people").text(telephone);
					$("#_submit_success").css("display","block");
//					$(obj).parent().parent().find("[name='_mobile_identyfy_code']").val("");
//					clearAuthCode_quick($(obj).parent().parent().find("[name='authButton']"));
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
function getVerfyCode(obj){
	
	var telephone = $(obj).parent().parent().parent().find("[name='_user_mobile']").val();
	var verifyCode = $(obj).parent().parent().find("[name='_verifyCode']").val();
	
	if(verifyCode ==""){
		$(obj).parent().parent().find("[name='verifyCode_error']").show();
		$(obj).parent().parent().find("[name='verifyCode_error']").parent().addClass("error");
		return false;
	}
	getMobileCode_quick(telephone,verifyCode,$(obj).parent().parent().find("[name='authButton']"),$(obj).parent().parent().find("[name='auth_error']"),$(obj).prev().find("[name='verifyCode_error']"),$(obj).parent());

}

function getAuthCode(obj){
	var telephone = $(obj).parent().parent().find("[name='_user_mobile']").val();
	var reg =/^1\d{10}$/;
	if(!reg.test(telephone)){
		$(obj).parent().parent().find("[name='mobile_error']").show();
		$(obj).parent().parent().find("[name='mobile_error']").parent().addClass("error");
		return false;
	}
	$(obj).siblings(".imgCode-ab").show();
	$(obj).parent().parent().find("[name='mobile_error']").hide();
	$(obj).parent().parent().find("[name='mobile_error']").parent().removeClass("error");
	$(obj).parent().find("[name='verifyCode_error']").hide();
	$(obj).parent().find("[name='verifyCode_error']").parent().removeClass("error");
}  

