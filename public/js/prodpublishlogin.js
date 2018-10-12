$('#publish_authCode').click(function() {
	if($(this).hasClass('disabled')){
		return false;
	}
	$(this).addClass('disabled');
	getPublishLoginCode();
});

//倒计时
var publishWait=120;
var publishCounttime = null;
function publishLogincurtime() {
	if (publishWait == 0) {
		$("#publish_authCode").removeClass('disabled');
		$('#publish_authCode').css("color","#1183f7");
		$("#publish_authCode").html("获取验证码");
		publishWait = 120;
	} else {
		$("#publish_authCode").addClass('disabled');
		$("#publish_authCode").html(publishWait + "s后重新获取");
		$('#publish_authCode').css("color","#999");
		publishWait--;
		publishCounttime = setTimeout("publishLogincurtime()",1000);
	}
}
//发送验证码
$('#publishPhone').focus(function(){
	$('.phoneError').hide();
});
$('#publishCode').focus(function(){
	$('.codeError').hide();
});
function getPublishLoginCode() {
	var telephone = $("#publishPhone").val().trim();
	var phonereg = isMobilePhoneNo(telephone);
	if(!phonereg){
		$('.phoneError').show();
		$("#publish_authCode").removeClass('disabled');
		return false;
	} else {
		var sendMsg=sendPublishLoginCode(telephone);
		if(sendMsg==true){
			publishLogincurtime();
		}else{
			$("#publish_authCode").removeClass('disabled');
			$('.codeError').text("获取验证码失败!").show();
		}
	}
}
function sendPublishLoginCode(mobile){
	var sendFlag = false;
	$.ajax({
		type : "POST",
		url : baseurl + "/regist/getCodeNoVerifyCode.json",
		data : {
			"mobile" : mobile
		},
		dataType : "json",
		async : false,
	    success : function(data){
	    	if (data.status == "success") {
	    		sendFlag = true;
	    	}
	    	$("#publish_authCode").removeClass('disabled');
	    },
	    error : function (result) {
	    	sendFlag = false;
	    }
	});
	return sendFlag;
}


$('#publishLoginClose').click(function(){
	$('#fbLogin,.codeError,.phoneError').hide();
	$('#questionnairePublish').show();
	curStep =100;
});
//提交
$('#proPublishLogin').click(function(){
	//手机号验证
	var telephone = $("#publishPhone").val().trim();
	var phonereg = isMobilePhoneNo(telephone);
	if(!phonereg){
		$('.phoneError').show();
		$("#publish_authCode").removeClass('disabled');
		return false;
	}
	
	var publishCode = $('#publishCode').val().trim();//填写的验证码
	if(!publishCode){
		$('.codeError').text("请输入验证码!").show();
		return false;
	}
	
	var checkCode = checkAuthCode_quick(telephone,publishCode);
	if(!checkCode){
		$('.codeError').text("验证码与手机号不匹配!").show();
	}else{
		$("#user_phone").val(telephone);
		submitProdLeadsAndFeatures($('#proPublishLogin'));
	}
});

//验证手机验证码是否正确
function checkAuthCode_quick(mobile, authCode){
	var isPass = false;
	
	$.ajax({
		type : "POST",
		url : baseurl + "/validatecode/validatAuthCode.json",
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