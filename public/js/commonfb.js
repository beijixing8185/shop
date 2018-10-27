var arrivedVAStep = 1;///发镖到达的最远一步
var arrivedVAStepProblem = "我们能为您做什么？";//发镖到达的最远一步的问题

setTimeout(function() {
	$('.faAMask').hide();
})
//A版本通用发镖js
var fabiaoAswiper = new Swiper('.swiper-container-fabiaoA', {
	autoHeight: true, //高度随内容变化
  	pagination: {
    	el: '.swiper-pagination',
    	type: 'progressbar',
    	noSwiping : true
  	}
});

function tofb(spId,spName){
	$('.faAMask').css('opacity','1');
    $(".faAMask").show();
    $('body').css('overflow','hidden');
    fabiaoAswiper.update();
};

function closeFbAwindow(){
	// 初始化返回首个问题
	$('.faAMask').hide();
	$('#fbLogin').hide();
	clearVAinput();
	$('body').css('overflow','auto');
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
		closeFbAwindow();
		$('#questionnaire').hide();
		$('#commonFbError').hide();
		$('#fbLogin').hide();
	});
	
	//关闭通用发镖弹窗A
	$('#VA_closeBtn_fb').click(function() {
		//关闭时打开调查问卷
		/*$('#questionnaire').show();*///在这里做了修改，不让再继续弹窗
        $('body').css('overflow','visible');
        $('.faAMask').css('display','none');
	});
	
	//切换是否本地服务商隐藏后面下拉框
	/*$('.faAMask input[name="issame"]').click(function(){
		var isSame = $('.faAMask input:radio[name="issame"]:checked').val();
		if(isSame==0){
			$('#VA_locationinfo').hide();
			$('#VA_issameTip').hide();
		}else{
			$('#VA_locationinfo').show();
			$('#VA_issameTip').show();
		}
		fabiaoAswiper.update();
	});*/

	//地域省市联动
/*	$("#VA_proinfo").change(function(){
		var procode=$("#VA_proinfo option:selected").val();
		$.ajax({
			url: "/sp/subarea_"+procode+".json",
			type : "POST",
			dataType : 'json',
			async : false,
			success: function(data){
				var citylist=data.subarea;
				$('#VA_cityinfo').html("");
				if(citylist.length>0){
					for(var i=0;i<citylist.length;i++){
						if(citylist[i].isSelect=="1"){
		                    $('#VA_cityinfo').append('<option value='+citylist[i].code+' selected="selected">'+citylist[i].name+'</option>');
		                }else{
		                    $('#VA_cityinfo').append('<option value='+citylist[i].code+'>'+citylist[i].name+'</option>');
		                }
					}
					$('#VA_cityinfo').parent().show();
				}else{
					$('#VA_cityinfo').parent().hide();
				}
			},
			error: function(data){
				pop.error("获取市级列表失败！");
			}
		});
	});*/
    //地域省市联动


	// SECTION3
	//监控文本框字数
	$("#VA_userrequest").keyup(function () {
		VA_calWords();
	});
	
	$('.faAMask .swiper-list ul li').hover(function() {
		var dataTips = $(this).attr('data-tip');
		$('.faAMask .swiper-info').css('visibility','visible').text(dataTips);
	},function(){
		$('.faAMask .swiper-info').text(windowDataTip);
	});
});

// block移动
var windowDataTip = ' ';
$('body').on('click','.swiper-list ul li',function(){
	$(this).parents('.swiper-list').siblings('.swiper-list').find('li').removeClass('active');
	$(this).parents('.swiper-list').siblings('.swiper-list').find('.moveBlock').hide();
	$('.errtip').css('visibility','hidden');
	$(this).parents('.swiper-list').find('.moveBlock').show();

	var boxLeft = $('.swiper-container-fabiaoA').offset().left;
	var leftWidth = $(this).find('span').offset().left;
	
	var spanWidth = $(this).find('span').width();

	$(this).parents('.swiper-list').find('.moveBlock').css('width',spanWidth + 'px');
	$(this).parents('.swiper-list').find('.moveBlock').animate({"left":leftWidth-boxLeft+'px'},400);
	$(this).addClass('active').siblings('li').removeClass('active');

	var dataTips = $(this).attr('data-tip');
    //console.log(dataTips);
    var content_auth = $('#content_auth').val();
    if(content_auth ==''){
        $('#content_auth').val(dataTips);
	}else {
        $('#content_auth').val(content_auth+'。客户选择的行业为：+'+dataTips);
	}

	windowDataTip = dataTips;
	$('.swiper-info').css('visibility','visible').text(dataTips);
});

function VA_calWords(){
	var length = $.trim($("#VA_userrequest").val()).length;
    if(length >= 200){
    	length = 200;
    	$("#VA_userrequest").siblings('p').css('color','#ff4400');
    }else{
    	$("#VA_userrequest").siblings('p').css('color','#999');
    };
    $("#VA_userrequest").val($("#VA_userrequest").val().slice(0,200));
    $("#VA_userrequest").next().find('span').text(length);
}

function sendVAMobileCode(mobile){
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

//上一步
function prevVAPage(el){
	var quesNo = $(el).parent().parent().attr("quesNo");
	fabiaoAswiper.slidePrev();
	$('.faAMask .errtip').css('visibility','hidden');
	i = 0;
	//下一页提示
	var showStr = "";
	if (quesNo == 3) {
		showStr = "您所在的行业";
	}else if(quesNo == 2){
		showStr = "我们能为您做什么？";
	}
	$('.faAMask .swiper-slide').children().eq(0).text(showStr);
}

//下一步
function nextVAPage(el){
	var quesNo = $(el).parent().parent().attr("quesNo");
	var clock = false;
	var curQues = document.getElementsByClassName("qNo"+quesNo);
	for(var a = 0 ;a<curQues.length;a++){
		var className = curQues[a].getAttribute("class");
		if (className.indexOf("active") > 0) {
			clock = true;
			break;
		}
	}
	if(clock){
		fabiaoAswiper.slideNext();
		i = 0;
		//下一页提示
		var showStr = "";
		if (quesNo == 1) {
			showStr = "您所在的行业";
		}else if(quesNo == 2){
			showStr = "请放心，我们会保护您的所有信息";
		}
		var nextNo = parseInt(quesNo)+1;
		if (nextNo > arrivedVAStep) {
			arrivedVAStep = nextNo;
			arrivedVAStepProblem = showStr;
		}
		$('.faAMask .errtip').css('visibility','hidden');
	}else{
		$('.faAMask .errtip').css('visibility','visible');
	}
}

//验证手机验证码是否正确
function checkVAAuthCode(mobile, authCode){
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

//清空输入
function clearVAinput(){
	fabiaoAswiper.slideTo(0, 100, false);
	$('.faAMask .swiper-slide ul li').removeClass("active");
	$('.faAMask .moveBlock').hide();
	$('#VA_allowArea').css('color',"");
	$('#VA_phonetitle').css('color',"");
	$('.faAMask input[name="issame"]').attr("checked",false);
	$('#VA_userrequest').val("");
	$('#VA_issameTip').hide();
	$('#VA_locationinfo').hide();
	$('.faAMask .errtip').css('visibility','hidden');
	$('.faAMask .swiper-slide').children().eq(0).text('我们能为您做什么？');
	$('.faAMask .mobile_box_error').hide();
	$("#fbLogin_authCode").removeClass('disabled');
	$('#fbLogin_authCode').css("color","#1183f7");
	$("#fbLogin_authCode").html("获取验证码");
	$("#fbLoginPhone").val("");
	$('#fbLoginCode').val("");
	Fbwait=120;
	clearTimeout(FBcounttime);
	$('#fbLogin,.codeError,.phoneError').hide();
	$('#questionnaire input[name="otherAns"]').val("");
	$('#questionnaire input:radio[name="questionnaire"]').removeAttr("checked");
	arrivedVAStep = 1;
	arrivedVAStepProblem = "我们能为您做什么？";
	
}
function isMobilePhoneNos(phone) {
    var patt = /^1(3|4|5|7|8)\d{9}$/;
    if(phone ==''){
        return false;
	}
    if(!patt.test(phone)){
        return false;
    }else {
    	return true;
	}
}
var isVASend = 0;

//关闭按钮
function closeSuccess() {
	$('#_submit_success').css('display','none');
}

$(document).on('click','#closeCommonFbLogin',function () {
	$('body').css('overflow','visible');
	$('#questionnaire').hide();
	$('#fbLogin').css('display','none');
});


//有电话的提交，
$(document).on('click','#commfbsubmit',function () {

    var patt = /^1(3|4|5|7|8)\d{9}$/;	//正则电话
    var content1 = $('#content_auth').val();
    var city = $('#VA_proinfo').val();
    var content2 = $('#VA_userrequest').val();	//补充的条数据
    var contents = '客户需要的服务为：'+content1+' 。 '+	content2+'。客户所再城市为：'+city;//组装总数据
	var phone_text = $('#fbLoginPhone').val();
    if(!patt.test(phone_text)){
        $('.phoneError').css('display','block');
        return false;
    }else{
        $.ajax({
            url:'/message/index',
            type:'post',
            data:{phone:phone_text,content:contents},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function (res) {
                if(res==1){
                    $('#_submit_success').css('display','block');
                    $('body').css('overflow','visible');
                    $('#fbLogin').css('display','none');
                }
            }
        });
	}
});

//不输入电话直接提交的
$('#VA_buttoNext3').click(function () {
    var content1 = $('#content_auth').val();
    if(content1 ==''){
        $('.faAMask .errtip').css('visibility','visible');
        return false;
    }
    var city = $('#VA_proinfo').val();
    var content2 = $('#VA_userrequest').val();	//补充的条数据
    var contents = '客户需要的服务为：'+content1+' 。 '+	content2+'。客户所再城市为：'+city;//组装总数据

    //校验是否登录
    var phone_session = $('#phone_session').val();
    if(phone_session ==''){
        //未登录显示登录提交tab
        $('.faAMask').hide();
        $('#fbLogin').show();
        arrivedVAStep = 4;
        arrivedVAStepProblem = "通用登录提交页";
    }else{
        $.ajax({
            url:'/message/index',
            type:'post',
            data:{phone:phone_session,content:contents},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function (res) {
                if(res==1){
                    $('#_submit_success').css('display','block');
                    $('body').css('overflow','visible');
                    $('#fbLogin').css('display','none');
                }
            }
        });
	}
});

/**
 *
 * 解决新闻详情页没有hover效果的问题
 */
$('#headerDemand').hover(function () {
	$('.p-list').css('display','block');
});
$('.appIcon').hover(
    function() {
        $('.app-erm').css('display','block');
    }, function() {
        $('.app-erm').css('display','none');
    }
);



function submitVALeads(el,userPhone){
	if (isVASend == 1) {
		return;
	}
	$('#VA_allowArea').css('color',"");
	$('#VA_phonetitle').css('color',"");
	$('.faAMask .mobile_box_error').hide();
	$('#VA_user_mobile').css("border-color","#cccccc");
	$('.faAMask .errtip').css('visibility','hidden');
	
	//类目
	var catId = $('#VA_catList ul').find('.active').attr("value");
	if(null == catId || catId.trim() == ""){
		return;
	}
	
	//行业
	var trade = $('#VA_tradeList ul').find('.active').attr("value");
	if(null == trade || trade.trim() == ""){
		return;
	}
	
	var quesNo = $(el).parent().parent().attr("quesNo");

	
	//所在地域
	var procode=$("#VA_proinfo option:selected").val();
	var citycode=$("#VA_cityinfo option:selected").val();
	//校验是否登录
	var phonereg = isMobilePhoneNo(userPhone.trim());
	if (!phonereg) {
		//未登录显示登录提交tab
		$('.faAMask').hide();
		$('#fbLogin').show();
		arrivedVAStep = 4;
		arrivedVAStepProblem = "通用发镖A登录提交页";
		return;
	}
	
	//补充需求
	var userrequest=$('#VA_userrequest').val();
	
	isVASend = 1;
	$.ajax({
		url: "/order/ajaxSubmit.json",
		dataType : 'json',
		type : "POST",
		async : false,
		data:{
			productCatId:catId, // 服务类型
			isSameArea:issameArea, // 是否同地域
			trade:trade, // 行业
			province:procode, // 省编码
			city:citycode, // 市编码
			mobile:userPhone, // 电话
			userRequest:userrequest // 补充需求
		},
		success: function(data){
			closeFbAwindow();
			if(data.status=="success"){
				$('#fbSuccess').show();
			}else{
				$('#fbError').show();
			}
			isVASend = 0;
		},
		error: function(data){
			closeFbAwindow();
			isVASend = 0;
			$('#fbError').show();
		}
	});
}

//取消发镖提交问卷信息
var cancelVAlNum = 0;
function cancelSubmit(){
	if (cancelVAlNum == 1) {
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
	cancelVAlNum = 1;
	$.ajax({
		url: "/order/cancelleads.json",
		dataType : 'json',
		type : "POST",
		async : true,
		data:{
			leadsPosition:leadsPosition,
			arrivedStep:arrivedVAStep,
			arrivedStepProblem:arrivedVAStepProblem,
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
		closeFbAwindow();
		$('#questionnaire').hide();
	}
	$('#questionnaire input[name="otherAns"]').val("");
	$('#questionnaire input:radio[name="questionnaire"]').removeAttr("checked");
	cancelVAlNum = 0;
}