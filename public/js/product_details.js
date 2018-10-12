var globalVars = {
		prodId:0
}
var sendState = 0;

var tipTimer; 
$(document).ready(function(){
	tipTimer = setTimeout(function(){
		$("#zixunTip").fadeIn(100);
		var tipTimer1 = setTimeout(function(){
			$("#zixunTip").fadeOut(100);
			clearTimeout(tipTimer1);
			tipTimer1=null;
		},3000);
		clearTimeout(tipTimer);
		tipTimer=null;
	},5000);
	
	
	var pdTips=getCookie("pd_tips");
	if(pdTips!="1"){
		addCookie("pd_tips","1",10000,null);
		setTimeout(function(){
			$('.taoc-sele-ab').show();
		},2000);
	}
	
	var isrecomm=getCookie("isRecomm");
	if(isrecomm!="1"){
		addCookie("isRecomm","1",10000,null);
		var optcss=$('#recomminform').prev().css("display");
		if(optcss!="none"){
			setTimeout(function(){
				$('#recomminform').show();
			},2000);
		}
	}
	
	$('#closeseesame').click(function(){
		$('.taoc-sele-ab').hide();
	});
	
	$('#recomminform').click(function(){
		$('#recomminform').hide();
	});
	
	$("body").click(function(e) {
        if($(e.target).is('#userRequestSelect > span')) {
            return;
        }else{
           $("#sele").removeClass("toggAh");
        }
    });
	$("#userRequestSelect ").click(function(e){
		e.stopPropagation();
		$("#sele").toggleClass("toggAh");
	});
	$("[data-appear='big']").on("click","li",function(){
		$(this).parent().next().show();
		$(this).addClass("active")
	})
	//切换行业
	$('.choosetrade').click(function(){
		var code=$(this).attr("tradecode");
		 $('.tradefilter').each(function(){
			 if ($(this).attr("data-id") == code) {
				 $(this).show();
			 }
			 else {
				 $(this).hide();
			 }
		 });
		$('#tradeinfo').val(code);
	});
	
	$("#sele").on("click","li",function(){
		$("#userRequestSelect").children("span").html($(this).html());
		$(this).parent().removeClass("toggAh");
		var tradeName = $(this).html();
		var showDom = $(".fwbx-list").find('p[data-id="'+tradeName+'"]');
		$(".fwbx-list").children().hide();
		for(var i=0;i<showDom.length;i++){
			$(showDom[i]).show();
		}
	});
	$("#taocanList").on("click","li",function(){
		$(this).addClass("selectedLi").siblings().removeClass("selectedLi");
		
		var isconsult=$('#isStdProduct').val();//是否可咨询,判断是否标品
		var recomm=getCookie('isRecomm');
		var isusable = $(this).attr("isusable");//是否有服务商提供服务 0:没有  1:有
		if(isconsult==1){
			$(".buy-num").show();
			$('#buynow').show();
			$("#recommsp").hide();
			if(recomm!="1"){
				$('#recomminform').hide();
			}
			
		}else{
			$(".buy-num").hide();
			$('#buynow').hide();
			$("#recommsp").show();
			
			if(recomm!="1"){
				$('#recomminform').show();
			}
		}
		
		var packageId = $(this).attr("packageId");
		$("#packageId").val(packageId);
		
		var packagePrice = $(this).attr("packagePrice");
		var marketPrice = $(this).attr("marketPrice");
		setPackagePrice(packagePrice,marketPrice);
		
		//计算服务质保价格
		if (isconsult == 1) {
			var quaPrice = parseFloat(packagePrice) * 0.15;
			if (quaPrice < 199) {
				$('#quaprice').html("");
				if (quaPrice < 0.01) {
					$('#quaprice').html("¥0.1");
				}else{
					quaPrice = quaPrice + "";
					if(quaPrice.indexOf(".")>0){
						var lastStr = quaPrice.substring(quaPrice.indexOf(".")+1,quaPrice.length);
						if(lastStr.length == 2){
							quaPrice = quaPrice.substring(0,quaPrice.length-1);
						}
						if (lastStr==0) {
							quaPrice = quaPrice.substring(0,quaPrice.indexOf("."));
						}
					}
					$('#quaprice').html("¥"+quaPrice);
				}
			}else{
				$('#quaprice').html("");
				$('#quaprice').html("¥199");
			}
		} else {
			$('#quaprice').html("¥199");
		}
		
		
		if(isconsult==1){
			$('.curopt').find('a').attr("onclick","immediatelySubmitOrder()");
			$('.curopt').attr("id","immediatelySubmitOrder2");
			$('.curopt').find('a').html("立即下单");
		}else{
			$('.curopt').find('a').attr("onclick","customizationConsult()");
			$('.curopt').attr("id","customizationConsult2");
			$('.curopt').find('a').html("推荐服务商");
		}
		
		if(isusable==0){
			//套餐无可提供服务的服务商
			$('.curopt').addClass("disable_click");
			$('.curopt').find('a').attr("onclick","javascipt:void(0);");
			$('#buynow').addClass("disable_click");
			$('#buynow').attr("onclick","javascript:void(0);");
			$("#recommsp").addClass("disable_click");
			$("#recommsp").attr("onclick","javascript:void(0);");
			if(isconsult==1){
				$('#buynow').text("停售");
				$('.curopt').find('a').html("停售");
			} else {
				$("#recommsp").text("推荐服务商");
				$('.curopt').find('a').html("推荐服务商");
			}
		}else{
			$('.curopt').removeClass("disable_click");
			$('#buynow').removeClass("disable_click");
			$("#recommsp").removeClass("disable_click");
			$('#buynow').attr("onclick","immediatelySubmitOrder()");
			$("#recommsp").attr("onclick","customizationConsult()");
			if(isconsult==1){
				$('#buynow').text("立即下单");
			} else {
				$("#recommsp").text("推荐服务商");
			}
		}
				
		$('#compList li[packageId="' + packageId + '"]').find("p").addClass("selected");
		$('#compList li[packageId="' + packageId + '"]').siblings().find("p").removeClass("selected");
	});	
	
	$("#compList").on("click","li",function(){
        $(this).find("p").addClass("selected");
        $(this).siblings().find("p").removeClass("selected");
        
        var packageId = $(this).attr("packageId");
		$("#packageId").val(packageId);
		
		var packagePrice = $(this).attr("packagePrice");
		setPackagePrice(packagePrice,null);
		
		var packageType = $('#isStdProduct').val();
		updatePacakgeOperateBtn(packageType);
		
		$('#taocanList li[packageId="' + packageId + '"]').addClass("selectedLi").siblings().removeClass("selectedLi");
    });
	$("[data-id='tcCompare']").click(function(){
		$("#_serqdan").show();
		$("#_serqdan").prevAll().hide();
		$("#_service_ensure").nextAll().show();
		$('.list-guide').show();
		$('#_serqdan_btn').addClass('current').siblings('li').removeClass('current');
		var height = $("#_serqdan").offset().top;
		$('body,html').animate({scrollTop:height-100},200);
	});
	$('[data-closed="comp"]').click(function(){
		$(this).parent().parent().hide();
		$('body').css('overflow','auto');
	});
	$("#share").on("mouseover",function(){
		$(this).find(".share-sb").show();
	});
	$("#share").on("mouseleave",function(){
		$(this).find(".share-sb").hide();
	});
	$("#phoneSub").on("mouseover",function(){
		$(this).find(".zx-phone-ab").show();
	});
	$("#phoneSub").on("mouseleave",function(){
		$(this).find(".zx-phone-ab").hide();
	});
	$("#bsAsk").on("click","li",function(){
		$(this).toggleClass("selected");
		$(this).siblings().removeClass("selected");
		if($(this).hasClass("selected")){
			$(this).siblings().children("p").css({"border-color":"#e5e5e5"});
			$(this).prev().children("p").css({"border-color":"transparent"});
			$(this).children("p").css({"border-color":"transparent"});
			
		}else{
			$(this).children("p").css({"border-color":"#e5e5e5"});
			$(this).siblings().children("p").css({"border-color":"#e5e5e5"});
		}
	});
	$(".rz-img").on("mouseover",function(){
		$(this).children("b").css({"display":"block"});
	});
	$(".rz-img").on("mouseout",function(){
		$(this).children("b").css({"display":"none"});
	});
	$("#sp_tj").on("mouseover","li",function(){
		$(this).children(".tj-btn").css({"display":"block"});
	});
	$("#sp_tj").on("mouseleave","li",function(){
		$(this).children(".tj-btn").css({"display":"none"});
	});
	$("#icon_list > li").click(function(e){
		$(this).children("b").fadeOut("slow");
		$(this).siblings().children("b").fadeIn("slow");
		var src=$(this).children("img").get(0).src;
		var i=src.lastIndexOf(".");
		var s = src.slice(i-3,i);
		$("#mImg"+s).fadeIn("slow");
		$("#mImg"+s).siblings("img").css("display","none");
		var c = parseInt(src.slice(i-1,i));
		zoom.current = c+1 ;
		$("#"+s).slideDown("slow");
		$("#"+s).siblings("p").css("display","none");
	});
	$('[data-toggle="change"]').click(function(){
			if($(this).html()=="+"){
				$(this).next().removeClass("close");
				$(this).html("-");
			}else if($(this).html()=="-"){
				$(this).next().addClass("close");
				$(this).html("+");
			};
		
	});
	$(".fixed-close").click(function(){
		$(".sp-fixed").addClass("bounceOutLeft");
		var timerC = setTimeout(function(){
			$(".sp-fixed").remove();
			clearTimeout(timerC);
			timerC = null;
		},1000);
		
	});
	if($(".list-guide").length > 0){
		var scollHeight=$(".list-guide").offset().top;
		$(document).scroll(function(){
		  if($(this).scrollTop()<=scollHeight){
			  $(".list-guide").removeClass("fixed_div");
			  $(".sp-fixed").addClass("close");
		  }else{
			  $(".list-guide").addClass("fixed_div");
			  if($(".sp-fixed").hasClass("close")){
				  $(".sp-fixed").removeClass("close");
				  tipTimer = setTimeout(function(){
						$("#onlineGuideTip").fadeIn(100);
						var tipTimer1 = setTimeout(function(){
							$("#onlineGuideTip").fadeOut(100);
							clearTimeout(tipTimer1);
							tipTimer1=null;
						},3000);
						clearTimeout(tipTimer);
						tipTimer=null;
					},5000);
			  	}
			  
			  }
		  });
	}
	 $("#zxOnline").on("mouseover",function(){
		 $(this).addClass("bian");
	 });
	 $("#zxOnline").on("mouseout",function(){
		 $(this).removeClass("bian");
	 });
	 var scollHeightmajor=$(".list-guide").offset().top;
	 $(".list-guide ul li").click(function(){
		if(!$(this).hasClass("fix-a-btn")) {
			$(this).addClass("current").siblings().removeClass("current");
		}
		$('body,html').animate({scrollTop: scollHeightmajor},200);

		$("#_effect_img").css("display","block");
		$("#_service_eva").css("display","block");
		if($(this).attr("id")=='_evaluate_btn'){
			//var height = $("#_evaluate_list").offset().top;
			//$('body,html').animate({scrollTop:height-50},200);
			$("#_evaluate_list").prevAll().hide();
			$("#_evaluate_list").show();
			$("#_evaluate_list").nextAll().show();
		}else if($(this).attr("id")=='_service_btn'){
			$("#_prod_desc").show();
			$("#_prod_desc").prevAll().hide();
			$("#_prod_desc").nextAll().show();
		}else if($(this).attr("id")=='_service_flow_btn'){
			$("#_case_list").show();
			$("#_case_list").prevAll().hide();
			$("#_case_list").nextAll().show();
		} else if($(this).attr("id")=='_service_ensure_btn'){
			$("#_service_ensure").show();
			$("#_service_ensure").prevAll().hide();
			$("#_service_ensure").nextAll().show();
		}else if($(this).attr("id")=='_serqdan_btn'){
			$("#_serqdan").show();
			$("#_serqdan").prevAll().hide();
			$("#_service_ensure").nextAll().show();
		}
		$('.list-guide').show();
	});
	 
	 //点击关闭按钮的时候，遮罩层关闭
	    $(".f_close").click(function () {
	        $(".wrap_zhezhao").css("display", "none");
	        $(".error_tip").css("display","none");
	    });
    
    $("#_btn_productDetails_require").click(function(){
    	sendUserRequest();
    });
    $("#_telephone").blur(function(){
    	var reg =/^1\d{10}$/;
    	var telephone = $(this).val();
    	if (telephone!= undefined && telephone != "") {
    		if(!reg.test(telephone)){
    			$(".error_tip").css("display","inline-block");
    			return false;
    		}else{
    			$(".error_tip").css("display","none");
    		}
		}
    });
    $(".gbi").click(function(){
    	$(".submit-suc").css("display","none");
    });
	$("#buyNum").on('input propertychange', function() {
		var buyNum = $(this).val();
		if (buyNum == "") {
			$(this).val("1");
		}
	});	
	  
	//显示评论大图
    $('body').on('click','.carousel-indicators li',function(){
    		$(this).parents('li').addClass('active');
    		$(this).parents('.evaluates-generic').find('.carousel-inner').show();
    		$(this).parents('.evaluates-generic').find('.carousel-control').show();
    });
    
    //隐藏评论大图
    $('body').on('click','.carousel-inner img',function(){
    		$(this).parents('.evaluates-generic').find('.carousel-inner').hide();
    		$(this).parents('.evaluates-generic').find('.carousel-control').hide();
    		$(this).parents('.evaluates-generic').find('.carousel-indicators li').removeClass('active');
    });
    
    var pkgId = getQueryString("pkgId");
	if (null != pkgId) {
		$('#package'+pkgId).click();
	}
});

function sendUserRequest(){
	var telephone = $("#_telephone").val();
	var userRequest = $("#_userRequest").val();
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
			data:{"productId":globalVars.prodId,"userRequest":userRequest,"mobile":telephone},
			dataType:"json",
			success:function(result){
				if(result.errorCode == "0"){
					$("#_userRequest").val("");
					$("#_telephone").val("");
					$(".wrap_zhezhao").css("display", "none");
					$(".lx-people").text(telephone);
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
function goToPage(toPage,productId,pageSize,type,baseurl){
	$("#_service_btn").removeClass("cur");
	if (type=="1") {
		if ($("#goPageNum").val() != null && $("#goPageNum").val() != "") {
			toPage = $("#goPageNum").val();
		}else{
			return false;
		}
	}
	$.ajax({
	   url: baseurl+"/product/pagingEvaluate.htm",
	   type : "post",
	   data:{"currentPage":toPage,"productId":productId,"pageSize":pageSize},
	   dataType:"html",
	   success: function(result){
		   $("#evalist").html(result);
		   var height = $("#_evaluate_list").offset().top;
		   $('body,html').animate({scrollTop:height-50},200);
	   }
	});
}

function goToPage1(toPage,productId,pageSize,type,baseurl){
	$("#_service_btn").removeClass("cur");
	if (type=="1") {
		if ($("#goPageNum1").val() != null && $("#goPageNum1").val() != "") {
			toPage = $("#goPageNum1").val();
		}else{
			return false;
		}
	}
	$.ajax({
		   url: baseurl+"/product/pagingCase.htm",
		   type : "post",
		   data:{"currentPage":toPage,"productId":productId,"pageSize":pageSize},
		   dataType:"html",
		   success: function(result){
			   $("#_case_list").html(result);
		   }
		});
}
function spChoose(orgName,spId){
	$("#_spId").val(spId);
	$("#_orgName").text("【"+orgName+"】");
    $(".wrap_zhezhao").css({
        display: "block"
    });
    sendState = 0;
}

function checkImgCode(authCode){
	var codeFlag = false;
	
	$.ajax({
		type : "POST",
		url : baseurl + "/validatecode/checkImgCode.json",
		data : {"graphAuthCode":authCode},
		dataType : "json",
		async : false,
		success : function(data) {
			if (data.status == "0") {
				codeFlag = true;
			} else {
				codeFlag = false;
			}
		},
		error : function (result) {
			codeFlag = false;
	    }
	});
	
	return codeFlag;
}

function sendUserRequest4(){
	
	$("#_mobile4").removeClass("error");
	$("#mobileError4").hide();
//	$("#_verifyCode4").removeClass("error");
//	$("#verifyError4").hide();
	
//	var verifyCode = $("#_verifyCode4").val();
	var userRequest = "留手机号进行咨询";
	var mobile = $("#_mobile4").val();
	
	if(!isMobilePhoneNo(mobile)){
		$("#_mobile4").addClass("error");
		$("#mobileError4").show();
		return false;
	}
	
	if (sendState==0) {
		sendState = 1;
		$.ajax({
			url:"/order/ajaxSubmit.json",
			type:"post",
			data:{"userRequest":userRequest,
				"isMobileAuthed" : 0,
				"mobile":mobile},
			dataType:"json",
			success:function(result){
				sendState = 0;
				$("#_mobile4").val("");
				if(result.errorCode == "0"){
					$("#sucSure").show();
				}else{
					$("#_submit_fail").show();
				}
			},
			fail:function(e){
				$("#_submit_fail").show();
				sendState = 0; 
			}
		});
	}
}

function addBuyNum() {
	var buyNum = $("#buyNum").val();
	$("#buyNum").val(++buyNum);
}

function subBuyNum() {
	var buyNum = $("#buyNum").val();
	if (buyNum > 1) {
		$("#buyNum").val(--buyNum);
	}
}

/**
 * 立即下单
 */
function immediatelySubmitOrder() {
	var productId = $('#productId').val();
	var packageId = $("#packageId").val();
	var buyNum = $("#buyNum").val();
	
	if(!$("#tcOmpFixed").is(":hidden")) {
		var height = $("#_serqdan").offset().top;
		$('body,html').animate({scrollTop:height-50},200);
		
	}
	window.open('/settlementorder/pd' + productId + '-pkd' + packageId + '-pn' + buyNum + '.htm');
}

/**
 * 定制化咨询(推荐服务商)
 */

function customizationConsult() {
	$('.fbAAnimateMainText').addClass('fadeAnim');
	var version = $("#version_info").val();
	if (version == 'A') {
		//新的咨询窗口
		swiperPublish.update();
		$('#prodpublish').css('opacity','1');
		$('#prodpublish').show();
		$('body').css('overflow','hidden');
		swiperPublish.slideTo(0, 100, false);
	} else {
		//类通用发镖B
		showProdRecommB();
	}
}

function setPackagePrice(packagePrice,marketPrice) {
	if (packagePrice != "") {
		$("#packagePrice").html("<i style='font-size: 16px;'>¥</i>" + packagePrice);
		if(null!=marketPrice&&marketPrice>0){
			$("#packagePrice").append(' <strong>[市场价：<b>¥'+marketPrice+'<b>]</strong>');
		}
	} else {
		$("#packagePrice").html("面议");
	}
}

/**
 * 根据套餐类型更新套餐操作按钮
 * @param packageType 套餐类型
 */
function updatePacakgeOperateBtn(packageType) {
	if ("1" == packageType) {
		// 标品套餐（有价格，不可咨询）
		enablePacakgeOperateBtn($("#immediatelySubmitOrder1"));
		disablePacakgeOperateBtn($("#customizationConsult1"), "btn-mengb");
		
		enablePacakgeOperateBtn($("#immediatelySubmitOrder2"));
		disablePacakgeOperateBtn($("#customizationConsult2"), "fixed-mengb");
		
		$("#immediatelySubmitOrder3").show();
		$("#customizationConsult3").hide();
	}else{
		// 非标品套餐（无价格，可咨询）
		disablePacakgeOperateBtn($("#immediatelySubmitOrder1"), "btn-mengb");
		enablePacakgeOperateBtn($("#customizationConsult1"));
		
		disablePacakgeOperateBtn($("#immediatelySubmitOrder2"), "fixed-mengb");
		enablePacakgeOperateBtn($("#customizationConsult2"));
		
		$("#immediatelySubmitOrder3").hide();
		$("#customizationConsult3").show();
	}
}

function disablePacakgeOperateBtn(obj, style) {
	bDom = obj.find("b");
	if (0 == bDom.length) {
		obj.append("<b class='" + style + "'></b>");
	}
}

function enablePacakgeOperateBtn(obj) {
	var bDom = obj.find("b");
	if (0 < bDom.length) {
		bDom.remove();
	}
}

//定位到评价
function scrollToEva(){
	 $("#_evaluate_list").prevAll().hide();
	 $("#_evaluate_list").show();
	 $("#_evaluate_list").nextAll().show();
	 $('.list-guide').show();
	 var height = $("#_evaluate_list").offset().top;
	 $('body,html').animate({scrollTop:height-50},200);
	 $('.list-guide ul li').removeClass('current');
	 $('#_evaluate_btn').addClass('current');
}