var sendFlag = false;

function sendCmsListMobileCode(mobile,sendObj){
		
		$.ajax({
			type : "POST",
			url : baseurl + "/validatecode/sendMobileVerifyCode.json",
			data : {
					"mobile" : mobile
				},
			dataType : "json",
			async : false,
		    success : function(data){
		    	if( data.status == "0" ){
		    		sendFlag = true;
		    	}else{
		    		sendFlag = false;
		    		sendObj.removeClass('disabled');
		    		$('.tipMask').text(data.msg);
		    		$('.yxQuest > div > p').css('border','1px solid #ff4400');
		    		$('.tipMask').show();
		    		setTimeout(function(){
		    			$('.tipMask').fadeOut('150');
		    		},3000);
		    	}
		    },
		    error : function (result) {
		    	sendObj.removeClass('disabled');
		    	sendFlag = false;
		    }
		});
	}

//短信验证
$('#sendCode').click(function(){
	if($(this).hasClass('disabled')){
		return false;
	}
	$(this).addClass('disabled');
	var send_obj = $(this);
	start_sms_cms(send_obj);
});
//短信验证码倒计时
var start_sms_cms = function(o){
	var count=1;
	var sum=120;
	var telPhone = $('#myScrollspy input[name="telPhone"]').val().trim();
	sendCmsListMobileCode(telPhone,o);
	if(sendFlag){
		var i= setInterval(function(){
			if(count==120){
				o.removeClass('disabled');
					o.text('重新获取');
				clearInterval(i);
			}else{
				o.text(parseInt(sum-count) + "s后重新获取");
			}
			count++;
		},1000);
	}
};
$('#myScrollspy input[name="telPhone"]').keydown(function(){
	$(this).css('border','none');
});
$('#myScrollspy input[name="phoneCode"]').keydown(function(){
	$('.yxQuest > div > p').css('border-color','#e5e5e5');
});

function cmsListsubmitLeads(){
	var mobile = $('#myScrollspy input[name="telPhone"]').val().trim();
	var phoneCode = $('#myScrollspy input[name="phoneCode"]').val().trim();
	var custom = $('#myScrollspy input[name="customName"]').val().trim();
	var userRequest = $("#userRequestSelect").val().trim();
	if(!isMobilePhoneNo(mobile)){
		$('.tipMask').text('请填写正确的手机号码');
		$('#myScrollspy input[name="telPhone"]').css('border','1px solid #ff4400');
		$('.tipMask').show();
		setTimeout(function(){
			$('.tipMask').fadeOut('150');
		},3000);
		return false;
	}
	if(!phoneCode){
		$('.tipMask').text('短信验证码不正确');
		$('.yxQuest > div > p').css('border','1px solid #ff4400');
		$('.tipMask').show();
		setTimeout(function(){
			$('.tipMask').fadeOut('150');
		},3000);
		return false;
	}
	var commonfbversion = $('#commonfbversion').val();
	var phonereg; 
	if (commonfbversion == "A") {
		phonereg = checkVAAuthCode(mobile,phoneCode);
	}else{
		phonereg = checkVBAuthCode(mobile,phoneCode);
	}
	if( phonereg ==  false ){
		$('.tipMask').text('短信验证码不正确');
		$('.yxQuest > div > p').css('border','1px solid #ff4400');
		$('.tipMask').show();
		setTimeout(function(){
			$('.tipMask').fadeOut('150');
		},3000);
		return false;
	}
		$.ajax({
			url:"/order/ajaxSubmit.json",
			type:"post",
			data:{"userRequest":userRequest,
				 "mobile":mobile,"isMobileAuthed":1},
			dataType:"json",
			success:function(result){
				if(result.errorCode == "0"){
					
					$("#userRequestSelect").val("");
					$('#myScrollspy input[name="telPhone"]').val("");
					$('#myScrollspy input[name="phoneCode"]').val("");
					$('#myScrollspy input[name="name"]').val("");
					if(result.isService){
						$("#sucinform02").text("您的问题已登记，15分钟内，镖狮管家将用010-8992开头的电话与您联系！联系时间:(9:30-18:30)");
					}else{
						$("#sucinform02").text("您的问题已登记，镖狮管家将在工作日（9：30-18：30）用010-8992开头的电话与您联系");
					}
					$("#_submit_success02").show();
				}else{
					$("#_submit_fail_no_verify").show();
				}
			},
			fail:function(e){
				$("#_submit_error02").show();
			}
		});
}

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
//关闭发镖成功提示弹层
function closeSuccess02(){
	$('#_submit_success02').hide();
}

function closeError02(){
	$('#_submit_error02').hide();
}
var ie6 = /msie 6/i.test(navigator.userAgent),dv = $('.strategyCode'),strategyNav = $('.strategyNav');
dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
strategyNav.attr('otop', strategyNav.offset().top); //存储原来的距离顶部的距离
$(window).scroll(function() {
	st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
	// 导航
	if (st >= parseInt(strategyNav.attr('otop')) - 10) {
		if (ie6) { //IE6不支持fixed属性，所以只能靠设置position为absolute和top实现此效果
			strategyNav.css({
				"position": 'absolute',
				"top": "10px"
			});
		} else if (strategyNav.css('position') != 'fixed') {
			strategyNav.css({
				'position': 'fixed',
				"left": "50%",
				"width": "100%",
				"transform": "translateX(-50%)",
				"z-index": 10,
				"margin-top": 0,
				"top": '0'
			});
			$('.strategyNav01').show();
			//$('.strategyCode01').show();
		}
	} else if (strategyNav.css('position') != 'static') {
		strategyNav.css({
			'position': 'static',
			'top': '0px',
			"left": '0px',
			"width": "1170px",
			"transform": "translateX(0)",
			"margin-top": "25px"
		});
		$('.strategyNav01').hide();
		//$('.strategyCode01').hide();
	}
});