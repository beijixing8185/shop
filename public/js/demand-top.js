
var sendState = 0;
var waitTime_top = 120;  
var demandTimer;
function sendUserRequest_top(index){
	
	$("#pL0"+index).find("[name='mobileTopError']").hide();
//	$("#pL0"+index).find("[name='identifyCodeTopError']").hide();
//	$("#pL0"+index).find("[name='offerAmountTopError']").hide();
//	$("#yzmSha").find("[name='verifyCodeTopError']").hide();
	$("#pL0"+index).find("[name='_telephoneTop']").removeClass("error");
//	$("#pL0"+index).find("[name='identifyCodeTop']").removeClass("error");
//	$("#pL0"+index).find("[name='offerAmountTop']").removeClass("error");
//	$("#yzmSha").find("[name='_verifyCodeTop']").removeClass("error");
//	
	
	var mobile = $("#pL0"+index).find("[name='_telephoneTop']").val();
	var province = $("#pL0"+index).find("[name='provinceTop']").text();
//	var offerAmount = $("#pL0"+index).find("[name='offerAmountTop']").val();
	var userRequest = $("#pL0"+index).find("[name='_userRequestTop']").val();
//	var identifyCode = $("#pL0"+index).find("[name='identifyCodeTop']").val();
	
	
	var isSameAreaClass = $("#pL0"+index).find("[name='isSameAreaTop']").attr("class");
	var isSameArea = 0;
	if(isSameAreaClass != "areaClosed"){
		isSameArea = 1;
	}
	
	var arr = [];
	var tags = $("#pL0"+index).find("[class='clicked']");
	var productTags="";
	for(i=0;i< tags.length;i++){
		arr.push(tags.eq(i).attr("liValue"));
	}
	if(arr != null){
		productTags = arr.join(',');
	}
	
	if(!isPhoneNo_Top(mobile)) {
		$("#pL0"+index).find("[name='mobileTopError']").show();
		$("#pL0"+index).find("[name='_telephoneTop']").addClass("error");
		return false;
	}
	
//	if(identifyCode==""){
//		$("#pL0"+index).find("[name='identifyCodeTopError']").show();
//		$("#pL0"+index).find("[name='identifyCodeTop']").addClass("error");
//		return false;
//	}
//	
//	if(!ajaxAuthCode_Top(mobile, identifyCode)){
//		$("#pL0"+index).find("[name='identifyCodeTopError']").show();
//		$("#pL0"+index).find("[name='identifyCodeTop']").addClass("error");
//		return false;
//	}
//	
//	if(offerAmount != ""){
//		var re=/^(([1-9][0-9]*)|(([0]\.\d{1,2}|[1-9][0-9]*\.\d{1,2})))$/;
//		if(!re.test(offerAmount)){
//			$("#pL0"+index).find("[name='offerAmountTopError']").show();
//			$("#pL0"+index).find("[name='offerAmountTop']").addClass("error");
//			return false;
//		}
//	}
	if (sendState==0) {
		$('#shader').hide();
		sendState = 1;
		$.ajax({
			url:"/order/ajaxSubmit.json",
			type:"post",
			data:{"isSameArea":isSameArea,"userRequest":userRequest,
				 "mobile":mobile,"province":province,"productTags":productTags,"isMobileAuthed":0},
			dataType:"json",
			success:function(result){
				waitTime_top = 0;  
				sendState = 0;
				$("#pL0"+index).find("[name='_telephoneTop']").val("");
//				$("#pL0"+index).find("[name='offerAmountTop']").val("");
				$("#pL0"+index).find("[name='_userRequestTop']").val("");
//				$("#pL0"+index).find("[name='identifyCodeTop']").val("");
//				$("#yzmSha").find("[name='_verifyCodeTop']").val("");
				
				$("#pL0"+index).find("[name='isSameAreaTop']").parent().removeClass("selected-pop");
				$("#pL0"+index).find("[name='isSameAreaTop']").addClass("areaClosed");
				$("#pL0"+index).find("[name='showAreaTop']").addClass("areaClosed");
				$("#pL0"+index).find("[name='showAreaTop']").next("ul").addClass("areaClosed");
				$("#shaderSerList").children().removeClass("clicked");
				if(result.errorCode == "0"){
					$("#_submit_success").show();
					$(".lx-people").text(mobile);
				}else{
					$("#_submit_fail").show();
				}
			},
			fail:function(e){
				$("#_submit_fail").show();
				sendState = 0;
				waitTime_top = 0;  
			}
		});
	}
}

/** 验证手机号 **/
function isPhoneNo_Top(phone) { 
 var pattern = /^1\d{10}$/; 
 return pattern.test(phone); 
}
//获取手机验证码
function getVerifyCode_Top(index) {
	var mobile = $("#pL0"+index).find("[name='_telephoneTop']").val();
	var verifyCode = $("#topSha").find("[name='_verifyCodeTop']").val();
	if(verifyCode==""){
		$("#topSha").find("[name='verifyCodeTopError']").show();
		$("#topSha").find("[name='_verifyCodeTop']").addClass("error");
		return false;
	}	
	var url = "/regist/getCode.json";
	$.ajax({
		url: url,
		dataType : 'json',
		async : false,
		data: {mobile:mobile,verifyCode:verifyCode},
		success: function(data){
			if(data.status =="success"){
				$("#promitShaTop").show();
				codeWaitTime_Top($("#pL0"+index).find("[name='genpasswordTop']"));
				$("#topSha").hide();
			} else if(data.status =="verifyCodeError"){
				$("#topSha").find("[name='verifyCodeTopError']").show();
				$("#topSha").find("[name='_verifyCodeTop']").addClass("error");
				changeAuthImg();
			} else {
				$("#topSha").find("[name='verifyCodeTopError']").show();
				$("#topSha").find("[name='_verifyCodeTop']").addClass("error");
				changeAuthImg();
			}
			
		},
		error: function(data){
			$("#topSha").find("[name='verifyCodeTopError']").show();
			$("#topSha").find("[name='_verifyCodeTop']").addClass("error");
		}
	});
	
}
//校验手机号
function getCode_Top(index) {
	$("#pL0"+index).find("[name='mobileTopError']").hide();
	$("#pL0"+index).find("[name='_telephoneTop']").removeClass("error");
	var mobile = $("#pL0"+index).find("[name='_telephoneTop']").val();
	
	if(!isPhoneNo_Top(mobile)) {
		$("#pL0"+index).find("[name='mobileTopError']").show();
		$("#pL0"+index).find("[name='_telephoneTop']").addClass("error");
		return false;
	}
	$("#topSha").show();
}

function ajaxAuthCode_Top(mobile, authCode){
	var isPass = false;
	
	$.ajax({
		type : "POST",
		url : "/validatecode/validatAuthCode.json",
		data : {
				"mobile" : mobile,
				"authCode" : authCode
			},
		dataType : "json",
		async : false,
		success : function(data) {
			var status = data.status;
			if (status == "0") {
				isPass = true;
			}
		},
		error : function (result) {
			isPass = false;
	    }
	});
	return isPass;
}

function codeWaitTime_Top(o) {  
    if (waitTime_top == 0) {  
        o.removeAttr("disabled");            
        o.html("获取短信验证码");
        waitTime_top = 120;  
    } else {  
        o.attr("disabled", true);  
        o.html("重新发送(" + waitTime_top + ")");  
        waitTime_top--;  
        demandTimer = setTimeout(function() {  
        	codeWaitTime_Top(o);  
        },  
        1000);  
    }  
} 

function showArea_Top(index){
	if($("#pL0"+index).find("[name='isSameAreaTop']").attr("class") == "areaClosed"){
		$("#pL0"+index).find("[name='showAreaTop']").show();
	} else {
		$("#pL0"+index).find("[name='showAreaTop']").hide();
	}
}  

function headerDemand_Top(){
    $("#shader").show();
    sendState = 0;
}
