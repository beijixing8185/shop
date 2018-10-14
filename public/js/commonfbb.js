var arrivedVBStep = 1;//发镖到达的最远一步
var arrivedVBStepProblem = "筛选服务商";//发镖到达的最远一步的问题

//B版本通用发镖js
setTimeout(function() {
	$('.fbwindowBMask').hide();
});

function tofb(spId,spName){
	$('.fbwindowBMask').css('opacity','1');
    $(".fbwindowBMask").show();
   	var boxLeft = $('.fbwindowBMain').offset().left;
	var leftWidth = $('.fbwindowBTap1 dt').offset().left;
	$('.fbwindowBTap').find('.moveP').animate({"left":leftWidth-boxLeft -25 +'px'});
	swiperFB.update();
};

function closeFbBwindow(){
	$('.fbwindowBMask').hide();
	$('#fbLogin').hide();
	clearVBinput();
}

$(function(){
	$('#closeBtn_fbsuccess').click(function(){
		$('#fbSuccess').hide();
	});
	
	$('#closeBtn_fberror').click(function(){
		$('#fbError').hide();
	});
	
	$('#questionnaire input[name="otherAns"]').focus(function(){
		$('#questionnaire input[name="questionnaire"][value="6"]').click();
		$(this).removeAttr('placeholder');
	});
	$('#questionnaire input[name="otherAns"]').blur(function(){
		$(this).attr('placeholder','我要吐槽');
	});
	
	$('#questionnaire input[name="questionnaire"]').click(function(){
		var curVal = $(this).val();
		if (curVal != 6) {
			$('#questionnaire input[name="otherAns"]').blur();
		}
	});
	
	//关闭调查问卷
	$('#closeQuestionaire').click(function() {
		closeFbBwindow();
		$('#questionnaire').hide();
		$('#commonFbError').hide();
		$('#fbLogin').hide();
	});
	
	//关闭通用发镖弹窗B
	$('#closeBtn_fb_B').click(function() {
		$('#questionnaire').show();
	});
	
	//切换是否本地服务商隐藏后面下拉框
	$('.fbwindowBMain input[name="issame"]').click(function(){
		var isSame = $('.fbwindowBMain input:radio[name="issame"]:checked').val();
		if(isSame==0){
			$('#VB_locationinfo').hide();
			$('#VB_issameTip').hide();
		}else{
			$('#VB_locationinfo').show();
			$('#VB_issameTip').show();
		}
		swiperFB.update()
	});

	//地域省市联动
	$("#VB_proinfo").change(function(){
		var procode=$("#VB_proinfo option:selected").val();
		$.ajax({
			url: "/sp/subarea_"+procode+".json",
			type : "POST",
			dataType : 'json',
			async : false,
			success: function(data){
				var citylist=data.subarea;
				$('#VB_cityinfo').html("");
				if(citylist.length>0){
					for(var i=0;i<citylist.length;i++){
						if(citylist[i].isSelect=="1"){
		                    $('#VB_cityinfo').append('<option value='+citylist[i].code+' selected="selected">'+citylist[i].name+'</option>');
		                }else{
		                    $('#VB_cityinfo').append('<option value='+citylist[i].code+'>'+citylist[i].name+'</option>');
		                }
					}
					$('#VB_cityinfo').parent().show();
				}else{
					$('#VB_cityinfo').parent().hide();
				}
			},
			error: function(data){
				pop.error("获取市级列表失败！");
			}
		});
	});
});

var boxLeft = $('.fbwindowBMain').offset().left;
var leftWidth = $('.fbwindowBTap1 dt').offset().left;
$('.fbwindowBTap').find('.moveP').animate({"left":leftWidth-boxLeft -25 +'px'},400);

var swiperFB = new Swiper('.swiper-container-fbB', {
	autoHeight: true, //高度随内容变化
  	pagination: {
    	// el: '.swiper-pagination',
    	// type: 'progressbar',
    	noSwiping : true
  	}
});

function sendVBMobileCode(mobile){
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
	    },
	    error : function (result) {
	    	sendFlag = false;
	    }
	});
	return sendFlag;
}

//验证手机验证码是否正确
function checkVBAuthCode(mobile, authCode){
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


//上一步
function prevVBPage(el){
	swiperFB.slidePrev();
	var id = $(el).parents(".swiper-slide").attr("data-id");
	$('.fbwindowBTap ul li:nth-of-type('+(parseInt(id)-1)+')').addClass("active").siblings('li').removeClass('active');
	var leftWidth = $('.fbwindowBTap'+(parseInt(id)-1) + ' dt').offset().left;
	$('.fbwindowBTap').find('.moveP').animate({"left":leftWidth-boxLeft -25 +'px'},400);
}

//下一步
function nextVBPage(el){
	$(el).next().css("visibility","hidden");
	
	var isPass = checkQues(el);
	if (!isPass) {
		return;
	}
	var id = $(el).parents(".swiper-slide").attr("data-id");
	swiperFB.slideNext();
	var nextNo = parseInt(id)+1;
	if (nextNo > arrivedVBStep) {
		arrivedVBStep = nextNo;//发镖到达的最远一步
		if (arrivedVBStep == 2) {
			arrivedVBStepProblem = "项目预估";
		}else if(arrivedVBStep == 3){
			arrivedVBStepProblem = "联系方式";
		}
	}
	
	$('.fbwindowBTap ul li:nth-of-type('+(parseInt(id)+1)+')').addClass("active").siblings('li').removeClass('active');
	var leftWidth = $('.fbwindowBTap'+(parseInt(id)+1) + ' dt').offset().left;
	$('.fbwindowBTap').find('.moveP').animate({"left":leftWidth-boxLeft -25 +'px'},400);
}

function checkQues(el){
	$('.fbwindowBMask .requestGroup').find('div:nth-of-type(1)').removeClass("shake");
	var parentId = $(el).parent().parent().attr("id");
	var isPass = true;
	var tempName = "";
	$("#"+parentId).find("input[type='radio']").each(function(){
		var inputName = $(this).attr("name");
		if (tempName != inputName) {
			tempName = inputName;
			var tempPass = false;
			var answerList = document.getElementsByName(inputName);
			for(var a = 0;a < answerList.length;a++){
				var isCheck = answerList[a].checked;
				if (isCheck) {
					tempPass = true;
					break;
				}
			}
			if (!tempPass) {
				isPass = false;
				$('.fbwindowBMask input[name='+inputName+']').parents('ul').prev().addClass("shake");
				$(el).next().css("visibility","visible");
				return false;
			}
		}
	});
	return isPass;
}

//清空输入
function clearVBinput(){
	swiperFB.slideTo(0, 100, false);
	$('.fbwindowBMask input[type="radio"]').attr("checked",false);
	$('#VB_locationinfo').hide();

	$('.fbwindowBMask input[name="phoneCode"]').val("");
	$('#VB_userrequest').val("");
	$('#VB_issameTip').hide();
	$('.fbBerror').css("visibility","hidden");
	$('.fbwindowBMask .requestGroup').find('div:nth-of-type(1)').removeClass("shake");
	$('.fbwindowBMask .mobile_box_error').hide();
	$("#fbLogin_authCode").removeClass('disabled');
	$('#fbLogin_authCode').css("color","#1183f7");
	$("#fbLogin_authCode").html("获取验证码");
	$("#fbLoginPhone").val("");
	$('#fbLoginCode').val("");
	Fbwait=120;
	clearTimeout(FBcounttime);
	$('#fbLogin,.codeError,.phoneError').hide();
	$('.fbwindowBTap ul li:nth-of-type(1)').addClass("active").siblings('li').removeClass('active');
	$('#questionnaire input[name="otherAns"]').val("");
	$('#questionnaire input:radio[name="questionnaire"]').removeAttr("checked");
	arrivedVBStep = 1;
	arrivedVBStepProblem = "筛选服务商";
}

var isVBSend = 0;
function submitVBLeads(el,userPhone){
	$('.fbwindowBMask .mobile_box_error').hide();
	$('.fbBerror').css("visibility","hidden");
	
	if(isVBSend == 1){
		return;
	}
	
	var isPass = checkQues(el);
	if (!isPass) {
		return;
	}
	
	//服务类型
	var catId=$('.fbwindowBMask input:radio[name="fbcat"]:checked').val();
	if(null == catId || catId.trim() == ""){
		return;
	}
	
	//是否本地服务商
	var issameArea=$('.fbwindowBMask input:radio[name="issame"]:checked').val();	
	if(null == issameArea || issameArea.trim() == ""){
		return;
	}
	
	//所在地域
	var procode=$("#VB_proinfo option:selected").val();
	var citycode=$("#VB_cityinfo option:selected").val();
	//所属行业
	var trade=$('.fbwindowBMask input:radio[name="trade"]:checked').val();
	if(null == trade || trade.trim() == ""){
		return;
	}
	
	//公司规模
	var companyScale=$('.fbwindowBMask input:radio[name="companyScale"]:checked').val();
	if(null == companyScale || companyScale.trim() == ""){
		return;
	}
	
	//项目预计启动时间
	var requestStartTime=$('.fbwindowBMask input:radio[name="requestStartingTimeList"]:checked').val();
	if(null == requestStartTime || requestStartTime.trim() == ""){
		return;
	}
	
	//预算范围
	var range=$('.fbwindowBMask input:radio[name="range"]:checked').val();
	if(null == range || range.trim() == ""){
		return;
	}
	
	//职位
	var custPosition=$('.fbwindowBMask input:radio[name="custPosition"]:checked').val(); 
	if(null == custPosition || custPosition.trim() == ""){
		$(".fbwindowBMask input[name='custPosition']").parents('ul').prev().addClass("shake");
		$('.fbwindowBMask .fbBerror').css("visibility","visible");
		return;
	}
	
	//校验是否登录
	var phonereg = isMobilePhoneNo(userPhone.trim());
	if (!phonereg) {
		//未登录显示登录提交tab
		$(".fbwindowBMask").hide();
		$('#fbLogin').show();
		arrivedVBStep = 4;
		arrivedVBStepProblem = "通用发镖B登录提交页";
		return;
	}
	
	//补充需求
	var userrequest=$('#VB_userrequest').val();
	
	isVBSend = 1;
	$.ajax({
		url: "/order/ajaxSubmit.json",
		dataType : 'json',
		type : "POST",
		async : false,
		data:{
			productCatId:catId, // 服务类型
			isSameArea:issameArea, // 是否同地域
			trade:trade, // 行业
			companyScale:companyScale,// 公司规模
			requestStartTime:requestStartTime,// 预计启动时间
			budgetRange:range, // 预算范围
			custPosition:custPosition, // 职位
			province:procode, // 省编码
			city:citycode, // 市编码
			mobile:userPhone, // 电话
			userRequest:userrequest // 补充需求
		},
		success: function(data){
			closeFbBwindow();
			if(data.status=="success"){
				$('#fbSuccess').show();
			}else{
				$('#fbError').show();
			}
			isVBSend = 0;
		},
		error: function(data){
			closeFbBwindow();
			$('#fbError').show();
			isVBSend = 0;
		}
	});
}

//取消发镖提交问卷信息
var cancelVBNum = 0;
function cancelSubmit(){
	if (cancelVBNum == 1) {
		return;
	}
	
	var chooseVal = $('#questionnaire input:radio[name="questionnaire"]:checked').val();//选中的选项值
	if (null == chooseVal || chooseVal.trim() == "") {
		$('#commonFbError').show();
		return;
	}else{
		$('#commonFbError').hide();
	}
	var leadsPosition = 1;//发镖位置
	var custVersion = $('#commonfbversion').val();//当前版本号(A/B)
	var cancelReason = $('#questionnaire input:radio[name="questionnaire"]:checked').parent().text().trim();//取消原因
	if (chooseVal == 6) {
		if (null == cancelReason || cancelReason.trim() == "") {
			cancelReason = "其他";
		}else{
			var writecontent = $('#questionnaire input[name="otherAns"]').val();
			if (null != writecontent && writecontent.trim() != "") {
				cancelReason = "其他,"+writecontent;
			}else{
				cancelReason = "其他";
			}
		}
	}
	cancelVBNum = 1;
	$.ajax({
		url: "/order/cancelleads.json",
		dataType : 'json',
		type : "POST",
		async : true,
		data:{
			leadsPosition:leadsPosition,
			arrivedStep:arrivedVBStep,
			arrivedStepProblem:arrivedVBStepProblem,
			custVersion:custVersion,
			cancelReason:cancelReason
		},
		success: function(data){
			$('#commonFbError01').hide();
		},
		error: function(data){
			
		}
	});
	if (chooseVal == 0) {
		//继续填写,不关闭发镖弹窗
		$('#questionnaire').hide();
	}else{
		$('#questionnaire').hide();
		closeFbBwindow();
	}
	$('#questionnaire input[name="otherAns"]').val("");
	$('#questionnaire input:radio[name="questionnaire"]').removeAttr("checked");
	cancelVBNum = 0;
}