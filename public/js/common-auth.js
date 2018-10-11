//手机验证码校验
var authCodeTimer_quick;
var waitTime_quick = 0;
var commonWaitTime = 0;

//获取手机验证码，需要图形验证码
function getMobileCode_quick(mobile,verifyCode,waitingDom,errorTip,errorTip1,verityDiv) {
	errorTip.hide();
	errorTip.parent().removeClass("error");
	
	var url = baseurl+ "/regist/getCode.json";
	$.ajax({
		url: url,
		dataType : 'json',
		async : false,
		data: {mobile:mobile,verifyCode:verifyCode},
		success: function(data){
			if(data.status =="success"){
				if(waitTime_quick <= 0){
					waitTime_quick = 120;
				}
				codeWaitTime_quick(waitingDom);
				verityDiv.hide();
				
			} else if(data.status =="verifyCodeError"){
				errorTip1.show();
				errorTip1.parent().addClass("error");
				//服务商申请页面代码
				errorTip1.parent().addClass("err");
				errorTip1.parent().removeClass("vis");
				changeAuthImg();
			} else {
				alert("获取数据失败!");
			}
		},
		error: function(data){
			alert("获取数据失败!");
		}
	});
}

 
function codeWaitTime_quick(o) {  
    if (waitTime_quick <= 0) {  
        o.removeAttr("disabled");   
        o.parent().removeClass("error");
        o.html("点击获取");
    } else {  
        o.attr("disabled", true);  
        o.html("重新发送(" + waitTime_quick + ")");  
        waitTime_quick--; 
        authCodeTimer_quick = setTimeout(function() {  
        	codeWaitTime_quick(o);  
        	},  
        1000);  
    }  
}

function ajaxAuthCode_quick(mobile, authCode){
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

function clearAuthCode_quick(waitingDom){
	waitTime_quick = 0;
	window.clearTimeout(authCodeTimer_quick);
	waitingDom.removeAttr("disabled");   
	waitingDom.parent().removeClass("error");
	waitingDom.html("点击获取");
}

//获取手机验证码，无需图形验证码
function getMobileCode(mobile,waitingDom,errorTip) {
	errorTip.hide();
		
	var url = baseurl+ "/regist/getCodeNoVerifyCode.json";
	$.ajax({
		url: url,
		dataType : 'json',
		async : false,
		data: {mobile:mobile},
		success: function(data){
			if(commonWaitTime <= 0){
				commonWaitTime = 120;
			}
			commonCodeWaitTime(waitingDom);
		},
		error: function(data){
			alert("获取数据失败!");
		}
	});
}

function commonCodeWaitTime(o) {  
    if (commonWaitTime <= 0) {  
        o.removeAttr("disabled");            
        o.html("免费获取验证码");
    } else {  
        o.attr("disabled", true);  
        o.html("重新发送(" + commonWaitTime + ")");  
        commonWaitTime--; 
        authCodeTimer = setTimeout(function() {  
        	commonCodeWaitTime(o);  
        	},  
        1000);  
    }  
}


