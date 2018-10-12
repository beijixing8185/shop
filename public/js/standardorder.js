var orderId=null;
var payId=null;
/**
 * 定时器
 */
var orderStateTimer = null;
var payState = null;

//订单是否能提交
var isSubmit=false;

$(function() {
	$('[data-toggle="nextTab"]').click(function() {
		$(window).scrollTop(0);
	});
	$("#buyNum").on('input propertychange', function() {
		var buyNum = $(this).val();
		if (buyNum == "") {
			$(this).val("1");
			updateTotalPrice();
		}else{
			 var ex = /^[1-9]\d*$/;
			 var state=ex.test(buyNum);
			 if(state){
				 updateTotalPrice();
			 }
		}
	});
	
	//支付成功设置助力二维码url
	assistUrl();
})

function addBuyNum() {
	var buyNum = $("#buyNum").val();
	$("#buyNum").val(++buyNum);
	updateTotalPrice();
}

function subBuyNum() {
	var buyNum = $("#buyNum").val();
	if (buyNum > 1) {
		$("#buyNum").val(--buyNum);
		updateTotalPrice();
	}
}

function updateTotalPrice() {
	var buyNum = $("#buyNum").val();
	var packagePrice = $("#packagePrice").val();
	
	var totalPrice = (buyNum * packagePrice).toFixed(2);
	$("#totalPrice").html("￥" + totalPrice);
}

//切换发票类型
function changeInvoiceType(type){
	$("#invoiceType").val(type);
}

//标品购买确认提交订单
function suresubmitorder(){
	$('#orderNextPrompt').hide();
//	if(isSubmit==false){
//		showErrorPrompt("提示", "请检查填写信息是否完整！", null, null);
//		return;
//	}
	var prodNum=null;
	var ajaxurl = "/order/submitstandardorder.json";
	var specProdId = $('#specProdId').val();
	if(specProdId!=""){
		prodNum=1;
		ajaxurl = "/order/submitnewsorder.json";
	}else{
		prodNum=$('#buyNum').val();
	}
	
	var productId=$('#productId').val();
	var packageId=$('#packageId').val();
	//var contactPhone=$('#contactPhone').val();
	var contactName=$('#contactName').val();
	//发票信息
	var invoiceType=$('#invoiceType').val();
	var invoiceTitle=null;
	var invoiceIdentifyNo=null;
	var invoiceBizLicenseAddr=null;
	var invoiceBizLicensePhone=null;
	var invoiceBank=null;
	var invoiceBankCard=null;
	var invoiceReceiver=null;
	var invoiceReceiverMobile=null;
	var invoiceReceiverAddress=null;
	if(invoiceType==1){
		invoiceTitle=$('#putTitle').val();
		invoiceIdentifyNo=$('#putIdentifyNo').val();
		invoiceReceiver=$('#putReceiver').val();
		invoiceReceiverMobile=$('#putPhone').val();
		invoiceReceiverAddress=$('#putAddress').val();
	}else if(invoiceType==2){
		invoiceTitle=$('#zhuanTitle').val();
		invoiceIdentifyNo=$('#zhuanIdentifyNo').val();
		invoiceBizLicenseAddr=$('#zhuanRegAddr').val();
		invoiceBizLicensePhone=$('#zhuanRegPhone').val();
		invoiceBank=$('#zhuanBank').val();
		invoiceBankCard=$('#zhuanAccount').val();
		invoiceReceiver=$('#zhuanReceiver').val();
		invoiceReceiverMobile=$('#zhuanPhone').val();
		invoiceReceiverAddress=$('#zhuanAddress').val();
	}
	$.ajax({
		url: ajaxurl,
		dataType : 'json',
		type: "post",  
		async : false,
		data: {
			productId:productId,
			packageId:packageId,
			prodNum:prodNum,
			//contactPhone:contactPhone,
			contactName:contactName,
			invoiceType:invoiceType,
			title:invoiceTitle,
			identifyno:invoiceIdentifyNo,
			regaddress:invoiceBizLicenseAddr,
			regphone:invoiceBizLicensePhone,
			bank:invoiceBank,
			card:invoiceBankCard,
			receiver:invoiceReceiver,
			phone:invoiceReceiverMobile,
			address:invoiceReceiverAddress
		},
	    success: function(result){
		   if(result.status == "success"){
				var orderMap = result.orderMap;
				location.href = '/topayorder/od' + orderMap.orderId + '-pyd' + orderMap.payId + '.htm';
		   }else{
			   showErrorPrompt("下单失败", "服务器开小差了，请稍后重试！", null, null);
		   }
	   }
	});	
}

//标品支付处理
function payorder(){
	var payway=$('input:radio[name="inlineRadioOptions"]:checked').val();
	console.log("当前支付方式:"+payway);
	if(payway=="alipay"){
		//支付宝
		alipay();
	}else if(payway=="wxpay"){
		//微信
		wxpay();
	}else if(payway=="bankpay"){
		//线下付款
		$('.bank-shadow').show();
	}
}

//微信支付
function wxpay(){
	orderId=$("#orderId").val();
	payId=$("#payId").val();
	var paystate = getOrderState();
	if(4 == paystate){
		showErrorPrompt("提示", "该支付单已支付完成！", null, null);
	}else{
		if (null != orderId) {
			$("#swaper").show();
			if(null == orderStateTimer){
				orderStateTimer = setInterval("checkOrderState()", 3*1000);//每三秒检查一次
			}
			$("#_wx_qr").attr("src","/pay/wxPayQrCode.htm?orderId="+orderId+"&payId="+payId+"&t="+new Date().getTime());
		}
	}
}

//支付宝支付
function alipay(){
	 orderId=$("#orderId").val();
	 payId=$("#payId").val();	 
	 var paystate = getOrderState();
	 var isStdProd = $('#isStdProduct').val();
	 if(4 == paystate){
		 showErrorPrompt("提示", "该支付单已支付完成！", null, null);
	 }else{
		 if (1 == isStdProd) {
			 location.href = "/pay/jumpAlipay.htm?returnType=newpay&orderId="+orderId+"&payId="+payId+"&t="+new Date().getTime();
		 } else {
			 location.href = "/pay/jumpAlipay.htm?orderId="+orderId+"&payId="+payId+"&t="+new Date().getTime();
		 }
	 }
	
}

//检查订单状态
function checkOrderState(){
	if(null != orderId && null != payId){
		$.ajax({
			   url: "/ordermanager/orderStatus.json",
			   type : "get",
			   data:{"orderId":orderId,"payId":payId},
			   dataType:"json",
			   success: function(data){
				  if (data.payState == 0) {
					  showErrorPrompt("提示", "支付失败，订单信息异常！！", null, null);
				  }else if (data.payState == 4){
					  	if(null != orderStateTimer){
				    		window.clearInterval(orderStateTimer);
				    		orderStateTimer=null;
				    	}
					  	//微信支付完成回调
					  	var isStdProd = $('#isStdProduct').val();
					  	if (1 == isStdProd) {
					  		location.href="/afterpayorder/od" + orderId + "-pyd" + payId + ".htm?payOffline=0"; 
					  	} else {
					  		location.href="/ordermanager/payOver.htm?orderId="+orderId+"&payId="+payId;
					  	}
				  }
			   }
			});
	}
}

//获取订单状态
function getOrderState(){
	$.ajax({
			  url: "/ordermanager/orderStatus.json",
			  type : "get",
			  data:{"orderId":orderId,"payId":payId},
			  dataType:"json",
			  async:false,
			  success: function(data){
				  payState = data.payState;
			  }
	});
	return payState;
}

//错误信息提示
function showErrorPrompt(errorTitle, errorDesc, sureCallback, closeCallback) {
	$("#errorTitle").html(errorTitle);
	$("#errorDesc").html(errorDesc);

	if (null == sureCallback) {
		$("#errorSure").click(function() {
			dismissErrorPrompt();
		});
	} else {
		$("#errorSure").click(sureCallback);
	}

	if (null == closeCallback) {
		$("#errorClose").click(function() {
			dismissErrorPrompt();
		});
	} else {
		$("#errorClose").click(closeCallback);
	}

	$("#errorPromptDiv").show();
}

//关闭错误信息提示
function dismissErrorPrompt() {
	$("#errorPromptDiv").hide();
}

//检查用户填写信息
function checkInvoice(){	
	//联系人电话
	//var contactPhone=$('#contactPhone').val();
	//var isPhone=isMobilePhoneNo(contactPhone);
	//if(!isPhone){
		//showErrorPrompt("提示", "请填写正确的联系人手机号！", null, null);
		//return;
	//}
	//显示弹窗
	isSubmit=true;
	suresubmitorder();
	//$('#orderNextPrompt').show();
}

//生成助力url
function assistUrl(){
	var url = $('#shareurl').val();
	if(null==url||url==""){
		return;
	}
	$('#assistCode').html("");
    $('#assistCode').qrcode({
    	correctLevel:1,
    	width: 84, //宽度
    	height:84, //高度
    	text: url //任意内容
    });
}


