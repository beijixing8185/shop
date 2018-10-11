
var curStep =1;
var asProblem;
var arrStp=[];
$(function(){
	$('#questionnairePublish input[name="otherAns"]').focus(function(){
		$('#questionnairePublish input[name="questionnaire"][value="6"]').click();
		$(this).removeAttr('placeholder');
	});
	$('#questionnairePublish input[name="otherAns"]').blur(function(){
		$(this).attr('placeholder','我要吐槽');
	});
	
	$('#prodbtnClose').click(function() {
		asProblem = $(this).attr('data-title');
		$('#questionnairePublish').show();
	});
	$('#animatemain').click(function() {
		//第一个页面点击关闭
		$('#questionnairePublish').show();
	});
	$('#publishPhone').focus(function(){
		$('#publishPhone').css('border','solid 1px #cccccc');
		$(".phoneError").hide();
	});
	$('#publishCode').focus(function(){
		$('#publishCode').css('border','solid 1px #cccccc');
		$(".codeError").hide();
	});
	
	//下一步事件
	$(".questionNextItem").each(function(i){
		$(this).click(function(){
//			swiperPublish.slideNext();
			nextFeature(this);
		})
		
	});
	//上一步事件
	$(".questionPrvItem").each(function(){
		$(this).click(function(){
//			swiperPublish.slidePrev();
			previousFeature(this);
		})
	});
	
	function nextFeature(el){
		$(el).parent().children(".publishError").hide();
		if(checkFeature(el)){
			var title = $(el).parents('.swiper-slide').next().find('.publishHeader h3').text();
			$('#prodbtnClose').attr('data-title',title);
			swiperPublish.slideNext();
			//获取 traceflag
			var traceFlag= $('#prodpublish .swiper-slide-prev .publishBg .questionNextItem').attr('traceflag')
			arrStp.push( parseInt(traceFlag.slice(traceFlag.lastIndexOf("_")+1)));
		}else{
			$(el).parent().children(".publishError").show();
		}
		swiperPublish.update();
	}
	//根据traceFlag获取点到哪一步
	function stepIndex( step){
		var lastStep = step.slice(step.lastIndexOf("_"));
	}
	function previousFeature(el){
		swiperPublish.slidePrev();
	}
	
	function checkFeature(el){
		var parentId = $(el).parent().parent().attr("id");
		if(parentId=="tradeDiv"){
			return checkRedio(el);
		}else if(parentId=="isSameAreaDiv"){
			if(checkRedio(el)){
				var prodArea = $("input[name='prodarea']:checked").val();
				if(1 == prodArea){
					if($('#prodproinfo option:selected').size()==0){
						return false;
					}
				}
			}else{
				return false;
			}
			return true;
		}else if(parentId=="companyScaleDiv"){
			return checkRedio(el);
		}else if(parentId=="requestStartTimeDiv"){
			return checkRedio(el);
		}else if(parentId=="budgetRangeDiv"){
			return checkRedio(el);
		}else if(parentId=="custPositionDiv"){
			return checkRedio(el);
		}else{//宝贝个性化问题
			if(!checkRedio(el) && !checkCheckBox(el)){
				return false;
			}
		}
		return true;
	}
	
	function checkRedio(el){
		var parentId = $(el).parent().parent().attr("id");
		var isPass = false;
		var tempName = "";
		$("#"+parentId).find("input[type='radio']").each(function(){
			var inputName = $(this).attr("name");
			var answerList = document.getElementsByName(inputName);
			for(var a = 0;a < answerList.length;a++){
				var isCheck = answerList[a].checked;
				if (isCheck) {
					isPass = true;
					break;
				}
			}
		});
		return isPass;
	}
	
	function checkCheckBox(el){
		var parentId = $(el).parent().parent().attr("id");
		var isPass = false;
		$("#"+parentId).find("input[type='checkbox']").each(function(){
			var inputName = $(this).attr("name");
			var answerList = document.getElementsByName(inputName);
			for(var a = 0;a < answerList.length;a++){
				var isCheck = answerList[a].checked;
				if (isCheck) {
					isPass = true;
					break;
				}
			}
		});
		return isPass;
	}
	
	setTimeout(function() {
		$('#prodpublish').hide();
	},0);
	
	//关闭发镖成功失败弹框
	$('.closeBtn').click(function(){
		$('#fbSuccess').hide();
		$('#fbError').hide();
	});
	
	//切换是否本地服务商隐藏后面下拉框
	$('input[name="prodarea"]').click(function(){
		var catId=$('input[name="prodarea"]:checked').val();
		if(catId==0){
			$('#prodlocation').hide();
		}else{
			$('#prodlocation').show();
		}
		swiperPublish.update();
	});
	
	//地域省市联动
	$("#prodproinfo").change(function(){
		var procode=$("#prodproinfo option:selected").val();
		$.ajax({
			url: "/sp/subarea_"+procode+".json",
			type : "POST",
			dataType : 'json',
			async : false,
			success: function(data){
				var citylist=data.subarea;
				$('#prodcityinfo').html("");
				if(citylist.length>0){
					for(var i=0;i<citylist.length;i++){
						if(citylist[i].isSelect=="1"){
		                    $('#prodcityinfo').append('<option value='+citylist[i].code+' selected="selected">'+citylist[i].name+'</option>');
		                }else{
		                    $('#prodcityinfo').append('<option value='+citylist[i].code+'>'+citylist[i].name+'</option>');
		                }
					}
					$('#prodcityinfo').parent().show();
				}else{
					$('#prodcityinfo').parent().hide();
				}
			},
			error: function(data){
				alert("系统出小差了!");
			}
		});
	});
});

//倒计时
var wait=120;
var counttime = null;
function prodcurtime() {
	if (wait == 0) {
		$("#authCodeProdBtn").attr("disabled", "");
		$('#authCodeProdBtn').css("color","#1183f7");
		$("#authCodeProdBtn").html("获取验证码");
		wait = 120;
	} else {
		$("#authCodeProdBtn").attr("disabled", "disabled");
		$("#authCodeProdBtn").html(wait + "s后重新获取");
		$('#authCodeProdBtn').css("color","#999");
		wait--;
		counttime = setTimeout("prodcurtime()",1000);
	}
}

function submitProdLeadsAndFeatures(el) {
	var productId = $('#productId').val();
	var packageId = $('#packageId').val();
	var contactName = "";
	//是否登录
	var telephone = $("#user_phone").val();
	if (telephone == '') {
		$('#prodpublish').hide();
		$('body').css('overflow','auto');
		$("#publishLogin").show();
		return;
	}else{
		contactName = telephone;
	}
	//是否本地服务商
	var issameArea=$('input:radio[name="prodarea"]:checked').val();
	//所在地域
	var procode=$("#prodproinfo option:selected").val();
	var citycode=$("#prodcityinfo option:selected").val();
	//所属行业
	var trade=$('input:radio[name="prodtrade"]:checked').val();
	//公司规模
	var companyScale=$('input:radio[name="prodcompanyscale"]:checked').val();
	//预计启动时间
	var requestStartTime=$('input:radio[name="prodrequeststartingtime"]:checked').val();
	//预算范围
	var range=$('input:radio[name="prodrange"]:checked').val();
	//您的职位
	var position=$('input:radio[name="prodposition"]:checked').val();
	var mobile = telephone;
	//补充需求
	var userrequest = $('#produserrequest').val();
	$.ajax({
		url: "/order/ajaxSubmit.json",
		dataType : 'json',
		type : "POST",
		async : false,
		data:{
			productId:productId,
			packageId:packageId,
			prodNum:1,
			isSameArea:issameArea,
			province:procode,
			city:citycode,
			trade:trade,
			companyScale:companyScale,
			requestStartTime:requestStartTime,
			budgetRange:range,
			custPosition:position,
			mobile:mobile,
			autoAllotSp:1,
			contactName:contactName,
			userRequest:userrequest
		},
		success: function(data){
			clearcontent();
			$('#prodpublish').hide();
			$('#publishLogin').hide();
			if(data.errorCode=="0"){
				$('#fbSuccess').show();
			}else{
				$('#fbError').show();
			}	
		},
		error: function(data){
			//失败！
			$('#prodpublish').hide();
			$('#publishLogin').hide();
			$('#fbError').show();
		}
	});
}

function clearcontent(){
	$('#questionnairePublish input[name="otherAns"]').val("");
	$('#questionnairePublish input:radio[name="questionnaire"]').removeAttr("checked");

	//隐藏地域选中
	$('#prodlocation').hide();
	//去掉选中状态
	var selectedInputs = $("#prodFeatureList .prod-q-answer").find("input:checked");
	for (var i = 0; i < selectedInputs.length; i++) {
		var dataId = $(selectedInputs[i]).attr("data-id");
		var textInput = $("input[data-id='text" + dataId + "']");
		if (typeof (textInput) != "undefined") {
			textInput.val("");
		}
	}
	$("#prodcontactname").val("");
	$("#prod_user_mobile").val("");
	$("#prod_phone_code").val("");
	$("#produserrequest").val("");
	$("#prodFeatureList input[type='radio']").removeAttr("checked");
	$("#prodFeatureList input[type='checkbox']").removeAttr("checked");
	$(".publishError").hide();
	swiperPublish.update();
	$("#authCodeProdBtn").attr("disabled", "");
	$('#authCodeProdBtn').css("color","#1183f7");
	$("#authCodeProdBtn").html("获取验证码");
	$("#publishPhone").val("");
	$("#publishCode").val("")
	wait = 120;
	clearTimeout(counttime);
	
	$("#publish_authCode").removeClass('disabled');
	$('#publish_authCode').css("color","#1183f7");
	$("#publish_authCode").html("获取验证码");
	publishWait = 120;
	clearTimeout(publishCounttime);
	$('#questionnairePublish input[name="otherAns"]').val("");
	$('#questionnairePublish input:radio[name="questionnaire"]').removeAttr("checked");
	$('body').css('overflow','auto');
	
	var isLogin = $('#prodisLogin').val();
	if (isLogin == "false") {
		$('#user_phone').val("");
	}
}

//关闭调查问卷
$('#questionnaireMask_publish').click(function() {
	$('#questionnairePublish').hide();
	$('.fbAAnimate').hide();
	$('.fbAAnimateMainText').removeClass('fadeAnim');
	$('body').css('overflow','auto');
	$('#prodpublish').hide();
	$('#commonFbError01').hide();
	$('#fbLogin,.codeError,.phoneError').hide();
	$("#publishLogin").hide();
	clearTimeout(publishCounttime);
	clearcontent();
});

var cancelProdPublishNum = 0;
$('#prodpublishSubmit').click(function() {
	if (cancelProdPublishNum == 1) {
		return;
	}
	var arrivedStep = 1;
	var custVersion = $('#commonfbversion').val();//当前版本号(A/B)

		if(arrStp.length == 0){
			arrivedStep = 1;
		}else{
			if (curStep==100){
				arrivedStep = Math.max.apply(null, arrStp)+1;
				asProblem ="登录";
			}else{
				arrivedStep = Math.max.apply(null, arrStp);
			}
			
		}
	
	var chooseVal = $('#questionnairePublish input:radio[name="questionnaire"]:checked').val();//选中的选项值
	if (null == chooseVal || chooseVal.trim() == "") {
		$('#commonFbError01').show();
		return;
	}else{
		$('#commonFbError01').show();
	}
	var leadsPosition = 2;//发镖位置
	var cancelReason = $('#questionnairePublish input:radio[name="questionnaire"]:checked').parent().text().trim();//取消原因
	if (chooseVal == 6) {
		if (null == cancelReason || cancelReason.trim() == "") {
			cancelReason = "其他";
		}else{
			var writecontent = $('#questionnairePublish input[name="otherAns"]').val();
			if (null != writecontent && writecontent.trim() != "") {
				cancelReason = "其他,"+writecontent;
			}else{
				cancelReason = "其他";
			}
		}
	}
	cancelProdPublishNum = 1;
	$.ajax({
		url: "/order/cancelleads.json",
		dataType : 'json',
		type : "POST",
		async : true,
		data:{
			leadsPosition:leadsPosition,
			arrivedStep:arrivedStep,
			arrivedStepProblem:asProblem,
			custVersion:custVersion,
			cancelReason:cancelReason
		},
		success: function(data){
			curStep =1 ;
			$('#commonFbError01').hide();
		},
		error: function(data){
			curStep =1;
		}
	});
	if (chooseVal == 0) {
		//继续填写,不关闭发镖弹窗
		$('#questionnairePublish').hide();
	}else{
		$('#questionnairePublish').hide();
		swiperPublish.slideTo(0, 10, false);
		$('#prodpublish').hide();
		$('body').css('overflow','auto');
		$('.fbAAnimate').hide();
		$("#publishLogin").hide();
		clearcontent();
	}
	$('#questionnairePublish input[name="otherAns"]').val("");
	$('#questionnairePublish input:radio[name="questionnaire"]').removeAttr("checked");
	cancelProdPublishNum = 0;
});

//监控文本框字数
$("#produserrequest").keyup(function () {
	publish_calWords();
});

function publish_calWords(){
	var length = $.trim($("#produserrequest").val()).length;
    if(length >= 200){
    	length = 200;
    	$("#produserrequest").siblings('p').css('color','#ff4400');
    }else{
    	$("#produserrequest").siblings('p').css('color','#999');
    };
    $("#produserrequest").val($("#produserrequest").val().slice(0,200));
    $("#produserrequest").next().find('span').text(length);
}