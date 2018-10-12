$('#fbLogin_authCode').click(function() {
	if($(this).hasClass('disabled')){
		return false;
	}
	getFbLoginCode();
});

//倒计时
var Fbwait=120;
var FBcounttime = null;
function fbLogincurtime() {
	if (Fbwait == 0) {
		$("#fbLogin_authCode").removeClass('disabled');
		$('#fbLogin_authCode').css("color","#1183f7");
		$("#fbLogin_authCode").html("获取验证码");
		Fbwait = 120;
	} else {
		$("#fbLogin_authCode").addClass('disabled');
		$("#fbLogin_authCode").html(Fbwait + "s后重新获取");
		$('#fbLogin_authCode').css("color","#999");
		Fbwait--;
		FBcounttime = setTimeout("fbLogincurtime()",1000);
	}
}
//发送验证码
$('#fbLoginPhone').focus(function(){
	$('.phoneError').hide();
});

$('#fbLoginCode').focus(function(){
	$('.codeError').hide();
});
function getFbLoginCode() {
	var telephone = $("#fbLoginPhone").val();
	var phonereg = isMobilePhoneNo(telephone);
	if(!phonereg){
		$('.phoneError').show();
		return false;
	} else {
		var sendMsg = null;
		var commonfbversion = $('#commonfbversion').val();
		if (commonfbversion == "A") {
			sendMsg=sendVAMobileCode(telephone);
		} else {
			sendMsg=sendVBMobileCode(telephone);
		}
		if(sendMsg==true){
			fbLogincurtime();
			$('#fbLogin_authCode').addClass('disabled');
		}else{
			$("#fbLogin_authCode").removeClass('disabled');
			$('.codeError').text("获取验证码失败!").show();
		}
	}
}

$('#closeCommonFbLogin').click(function(){
	$('#questionnaire').show();
});

function LoginWithSubmitCommon(el){
	$('.phoneError').hide();
	$('.codeError').hide();
	
	var telephone = $("#fbLoginPhone").val().trim();
	var phonereg = isMobilePhoneNo(telephone);
	if(!phonereg){
		$('.phoneError').show();
		return;
	}
	
	var phoneCode = $('#fbLoginCode').val().trim();
	if (null == phoneCode || "" == phoneCode) {
		$('.codeError').show();
		return;
	}
	
	var commonfbversion = $('#commonfbversion').val();//通用发镖版本号
	
	var phonewithcodereg = null;
	if (commonfbversion == "A") {
		phonewithcodereg = checkVAAuthCode(telephone,phoneCode);
	} else {
		phonewithcodereg = checkVBAuthCode(telephone,phoneCode);
	}
	if (!phonewithcodereg) {
		$('.codeError').show();
		return;
	}
	
	if (commonfbversion == "A") {
		submitVALeads(el,telephone);
	} else {
		submitVBLeads(el,telephone);
	}
}