//已答题数
var answerquestions = 0;

//总题数
var totalquestions=0;

var writeRequest="";
var checkarr;

function sendUserRequest(index){
	
//	$("#pL0"+index).find("[name='mobileError']").hide();
	$("#pL0"+index).find("[name='identifyCodeError']").hide();
	$("#pL0"+index).find("[name='offerAmountError']").hide();
	$("#yzmSha").find("[name='verifyCodeError']").hide();
	$("#pL0"+index).find("[name='_telephone']").removeClass("error");
	$("#pL0"+index).find("[name='identifyCode']").removeClass("error");
	$("#pL0"+index).find("[name='offerAmount']").removeClass("error");
	$("#yzmSha").find("[name='_verifyCode']").removeClass("error");
	
	var province = $("#pL0"+index).find("[name='province']").text();
//	var offerAmount = $("#pL0"+index).find("[name='offerAmount']").val();
	var userRequest = $("#pL0"+index).find("[name='_userRequest']").val();
	writeRequest=userRequest;
//	console.log("用户需求:"+userRequest);
//	var identifyCode = $("#pL0"+index).find("[name='identifyCode']").val();
	var mobile = $("#pL0"+index).find("[name='_telephone']").val();
	
	var prod_sp = $("#pL0"+index).find("[name='prod_sp']").find("span").html();
	
	if( prod_sp != "" && typeof(prod_sp)!= "undefined"){
		if(userRequest != ""){
			userRequest = userRequest+"|"+prod_sp;
		} else {
			userRequest = prod_sp;
		}
	}
	
	var productId = $("#pL0"+index).find("[name='_productId']").val();
	var spId = $("#pL0"+index).find("[name='_spId']").val();
	
	var isSameAreaClass = $("#pL0"+index).find("[name='isSameArea']").attr("class");
	var isSameArea = 0;
	if(isSameAreaClass != "proAreaClosed"){
		isSameArea = 1;
	}
	
	if(!isMobilePhoneNo(mobile)) {
//		$("#pL0"+index).find("[name='mobileError']").show();
		$("#pL0"+index).find("[name='_telephone']").addClass("error");
		return false;
	}
	
//	if(identifyCode==""){
//		$("#pL0"+index).find("[name='identifyCodeError']").show();
//		$("#pL0"+index).find("[name='identifyCode']").addClass("error");
//		return false;
//	}
	
//	if(!ajaxAuthCode(mobile, identifyCode)){
//		$("#pL0"+index).find("[name='identifyCodeError']").show();
//		$("#pL0"+index).find("[name='identifyCode']").addClass("error");
//		return false;
//	}
	
//	if(offerAmount != ""){
//		var re=/^(([1-9][0-9]*)|(([0]\.\d{1,2}|[1-9][0-9]*\.\d{1,2})))$/;
//		if(!re.test(offerAmount)){
//			$("#pL0"+index).find("[name='offerAmountError']").show();
//			$("#pL0"+index).find("[name='offerAmount']").addClass("error");
//			return false;
//		}
//	}
	if (sendState==0) {
		$('#proShader').hide();
		sendState = 1;
		
		$.ajax({
			url:"/order/ajaxSubmit.json",
			type:"post",
			data:{"isSameArea":isSameArea,"userRequest":userRequest,
				 "mobile":mobile,"province":province,"productId":productId,"spId":spId,"isMobileAuthed":0},
			dataType:"json",
			success:function(result){
				waitTime = 0;  
				sendState = 0;
				$("#pL0"+index).find("[name='_telephone']").val("");
//				$("#pL0"+index).find("[name='offerAmount']").val("");
				$("#pL0"+index).find("[name='_userRequest']").val("");
//				$("#pL0"+index).find("[name='identifyCode']").val("");
//				$("#yzmSha").find("[name='_verifyCode']").val("");
				
				$("#pL0"+index).find("[name='isSameArea']").parent().removeClass("selected-pop");
				$("#pL0"+index).find("[name='isSameArea']").addClass("proAreaClosed");
				$("#pL0"+index).find("[name='showArea']").addClass("proAreaClosed");
				$("#pL0"+index).find("[name='showArea']").next("ul").addClass("proAreaClosed");
				if(result.errorCode == "0"){
					if("" != productId){
						$("#featureLeadsId").val(result.leadsId);
						featureStepProcess(productId);
						refreshLeadsScore();
					}else{
						$("#_submit_success").show();
						$(".lx-people").text(mobile);
					}
				}else{
					$("#_submit_fail").show();
				}
			},
			fail:function(e){
				$("#_submit_fail").show();
				sendState = 0;
				waitTime = 0;  
			}
		});
	}
}


//分数刷新
function refreshLeadsScore(){
	answerquestions=0;
	var score=0;
	for(var i=0;i<checkarr.length;i++){
		checkarr[i]=false;
	}
	if(writeRequest.toString().trim()!=""){
		checkarr[0]=true;
		answerquestions=1;
	}
//	console.log("用户需求:"+writeRequest);
//	console.log("选中题数:"+answerquestions);
//	console.log("checkarr第一个:"+checkarr[0]);
	$("input[type='checkbox']").click(function(){
		  var featureid=$(this).attr("featureid");
		  var qno=$("input[featureid="+featureid+"]").parents("ul").prev().children("b").text();
		  $("input[featureid="+featureid+"]").each(function(){
		    	if($("input[featureid="+featureid+"]:checked").val()!=null){
		    		checkarr[qno]=true;
		    	}else{
		    		checkarr[qno]=false;
		    	}
		  });
		  if(checkarr[0]==true){
			  answerquestions=1;
		  }else{
			  answerquestions=0;
		  }
		  for(i=1;i<=checkarr.length;i++){		  	
		  	if(checkarr[i]==true){   			  		
		  		answerquestions=answerquestions+1;
		  	}
		  }
		  score=Math.round(100*(answerquestions/totalquestions));
		  if(score>=0 && score<=30){
			  $('[data-change="changebg"]').css({"background-position":"-97px 0","color":"#fb6748"});
		  }else if(score>30 && score<=80){
			  $('[data-change="changebg"]').css({"background-position":"-194px -1px","color":"#ff824b"});
		  }else if(score>80 && score<=100){
			  $('[data-change="changebg"]').css({"background-position":"0 0","color":"#1cb799"});
		  }
		  if(score>=0&&score<=10){
			  $('#requestdesc').html("您的需求描述很模糊，强烈建议完善下列需求点！");
		  }else if(score>10&&score<=30){
			  $('#requestdesc').html("很好！继续完善更多的需求，让专家给您更好的建议！");
		  }else if(score>30&&score<=50){
			  $('#requestdesc').html("专家了解到了您更多的需求！继续完善吧！");
		  }else if(score>50&&score<=80){
			  $('#requestdesc').html("真棒！您的需求完整度超过97%的用户！");
		  }else if(score>80&&score<=100){
			  $('#requestdesc').html("我想我知道您的需求了，专家将在15分钟内与您联系！");
		  }
		  $('[data-change="changebg"]').children("b").html(score);
	});
	
	$("input[type='radio']").click(function(){
		  var featureid=$(this).attr("featureid");
		  var qno=$("input[featureid="+featureid+"]").parents("ul").prev().children("b").text();
		  $("input[featureid="+featureid+"]").each(function(){
		    	if($('input:radio[featureid='+featureid+']:checked').val()!=null){
		    		checkarr[qno]=true;
		    	}else{
		    		checkarr[qno]=false;
		    	}
		  });
		  if(checkarr[0]==true){
			  answerquestions=1;
		  }else{
			  answerquestions=0;
		  }
		  for(i=1;i<=checkarr.length;i++){		  	
		  	if(checkarr[i]==true){   			  		
		  		answerquestions=answerquestions+1;
		  	}
		  }
		  score=Math.round(100*(answerquestions/totalquestions));
		  if(score>=0 && score<=30){
			  $('[data-change="changebg"]').css({"background-position":"-97px 0","color":"#fb6748"});
		  }else if(score>30 && score<=80){
			  $('[data-change="changebg"]').css({"background-position":"-194px 0","color":"#ff824b"});
		  }else if(score>80 && score<=100){
			  $('[data-change="changebg"]').css({"background-position":"0 0","color":"#1cb799"});
		  }
		  if(score>=0&&score<=10){
			  $('#requestdesc').html("您的需求描述很模糊，强烈建议完善下列需求点！");
		  }else if(score>10&&score<=30){
			  $('#requestdesc').html("很好！继续完善更多的需求，让专家给您更好的建议！");
		  }else if(score>30&&score<=50){
			  $('#requestdesc').html("专家了解到了您更多的需求！继续完善吧！");
		  }else if(score>50&&score<=80){
			  $('#requestdesc').html("真棒！您的需求完整度超过97%的用户！");
		  }else if(score>80&&score<=100){
			  $('#requestdesc').html("我想我知道您的需求了，专家将在15分钟内与您联系！");
		  }
		  $('[data-change="changebg"]').children("b").html(score);
	});
	
	  score=Math.round(100*(answerquestions/totalquestions));
//	  console.log("分数"+checkarr[0]);
	  if(score>=0 && score<=30){
		  $('[data-change="changebg"]').css({"background-position":"-97px 0","color":"#fb6748"});
	  }else if(score>30 && score<=80){
		  $('[data-change="changebg"]').css({"background-position":"-194px 0","color":"#ff824b"});
	  }else if(score>80 && score<=100){
		  $('[data-change="changebg"]').css({"background-position":"0 0","color":"#1cb799"});
	  }
	  if(score>=0&&score<=10){
		  $('#requestdesc').html("您的需求描述很模糊，强烈建议完善下列需求点！");
	  }else if(score>10&&score<=30){
		  $('#requestdesc').html("很好！继续完善更多的需求，让专家给您更好的建议！");
	  }else if(score>30&&score<=50){
		  $('#requestdesc').html("专家了解到了您更多的需求！继续完善吧！");
	  }else if(score>50&&score<=80){
		  $('#requestdesc').html("真棒！您的需求完整度超过97%的用户！");
	  }else if(score>80&&score<=100){
		  $('#requestdesc').html("我想我知道您的需求了，专家将在15分钟内与您联系！");
	  }
	  $('[data-change="changebg"]').children("b").html(score);
}

function featureStepProcess(productId){	
	var url = "/product/feature/"+productId+".json";
	$.ajax({
		url: url,
		dataType : 'json',
		async : false,
		data: {},
		success: function(data){
			var features = data.featureList;
			if(features.length == 0){
				$("#_submit_success").show();
				$(".lx-people").text(mobile);
			}else{
				//展示标准化需求弹层
				$(".question").empty();
				totalquestions=features.length+1;
//				console.log("总题数:"+totalquestions);
				checkarr=new Array(totalquestions);
//				console.log("提交时填写的值:"+writeRequest);
				for(var i=0;i<features.length;i++){
					var featureNo = i + 1;
                	$(".question").append("<p class='q-title'><b>"+featureNo+"</b>"+features[i].feature+"</p>");
                	$(".question").append("<ul class='q-answer' id='questionUL"+i+"'></ul>");
                	if(1 == features[i].featureType){
                		for(var j=0;j<features[i].opts.length;j++){
                			if("" != features[i].opts[j].optText){
                				$("#questionUL"+i).append("<li><label><input featureId='"+features[i].featureId+"' value='"+features[i].opts[j].optVal+"' data-id='"+i+"-"+j+"' type='checkbox' name='"+features[i].feature+"'/>"+features[i].opts[j].optVal+"<input data-id='ext"+i+"-"+j+"' type='text'  class='bor-all' placeholder='"+features[i].opts[j].optText+"'/></label></li>");
                			}else{
                				$("#questionUL"+i).append("<li><label><input featureId='"+features[i].featureId+"' value='"+features[i].opts[j].optVal+"' data-id='"+i+"-"+j+"' type='checkbox' name='"+features[i].feature+"'/>"+features[i].opts[j].optVal+"</label></li>");
                			}
                		}	
                	}
                	else{
                		for(var j=0;j<features[i].opts.length;j++){
                			if("" != features[i].opts[j].optText){
                				$("#questionUL"+i).append("<li><label><input featureId='"+features[i].featureId+"' value='"+features[i].opts[j].optVal+"' data-id='"+i+"-"+j+"' type='radio' name='"+features[i].feature+"'/>"+features[i].opts[j].optVal+"<input data-id='ext"+i+"-"+j+"' type='text'  class='bor-all' placeholder='"+features[i].opts[j].optText+"'/></label></li>");
                			}else{
                				$("#questionUL"+i).append("<li><label><input featureId='"+features[i].featureId+"' value='"+features[i].opts[j].optVal+"' data-id='"+i+"-"+j+"' type='radio' name='"+features[i].feature+"'/>"+features[i].opts[j].optVal+"</label></li>");
                			}
                		}
                	}
                		
                }
                $("#successShader").show();
			}
		},
		error: function(data){
			return "";
		}
	});
}

function featureSubmit(){
	var leadsId =  $("#featureLeadsId").val();
	var productId =  $("#pL09999").find("[name='_productId']").val();
	var arr = [];
	var selectedInputs = $(".question").find("input:checked");
	for(var i=0;i<selectedInputs.length;i++){
		var featureId = $(selectedInputs[i]).attr("featureId");
		var optValue = $(selectedInputs[i]).attr("value");
		var dataId = $(selectedInputs[i]).attr("data-id");
		var extValue =  $("input[data-id='ext"+dataId+"']").val();
		if(typeof(extValue)!="undefined"){
			optValue = optValue+"{"+extValue+"}";
		}
		
		arr.push({"featureId": featureId, "optValue": optValue});
	}
	
	$.ajax(
			{
				type : 'POST',
			    data:{featureData:JSON.stringify(arr),leadsId:leadsId,productId:productId},
			    dataType : 'json',
			    url:'/product/feature/save.json',
			    success : function(data){
			    	if (data.errorCode == '0') {
			    		$("#successShader").hide();
			    		$("#sucSure").show();
			    	} else {
			    		alert('保存出错!');
			    	}
			    },
			    error : function (result) {
			    	alert('保存失败！');
			    }
			}
	);
}

//获取手机验证码
function getVerifyCode(index) {
	var mobile = $("#pL0"+index).find("[name='_telephone']").val();
	var verifyCode = $("#yzmSha").find("[name='_verifyCode']").val();
	if(verifyCode==""){
		$("#yzmSha").find("[name='verifyCodeError']").show();
		$("#yzmSha").find("[name='_verifyCode']").addClass("error");
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
				$("#promitSha").show();
				codeWaitTime($("#pL0"+index).find("[name='genpassword']"));
				$("#yzmSha").hide();
			} else if(data.status =="verifyCodeError"){
				$("#yzmSha").find("[name='verifyCodeError']").show();
				$("#yzmSha").find("[name='_verifyCode']").addClass("error");
				changeAuthImg();
			} else {
				$("#yzmSha").find("[name='verifyCodeError']").show();
				$("#yzmSha").find("[name='_verifyCode']").addClass("error");
				changeAuthImg();
			}
			
		},
		error: function(data){
			$("#yzmSha").find("[name='verifyCodeError']").show();
			$("#yzmSha").find("[name='_verifyCode']").addClass("error");
		}
	});
	
}
//校验手机号
function getCode(index) {
//	$("#pL0"+index).find("[name='mobileError']").hide();
	$("#pL0"+index).find("[name='_telephone']").removeClass("error");
	var mobile = $("#pL0"+index).find("[name='_telephone']").val();
	
	if(!isMobilePhoneNo(mobile)) {
//		$("#pL0"+index).find("[name='mobileError']").show();
		$("#pL0"+index).find("[name='_telephone']").addClass("error");
		return false;
	}
	$("#yzmSha").show();
}

function ajaxAuthCode(mobile, authCode){
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

function codeWaitTime(o) {  
    if (waitTime == 0) {  
        o.removeAttr("disabled");            
        o.html("获取短信验证码");
        waitTime = 120;  
    } else {  
        o.attr("disabled", true);  
        o.html("重新发送(" + waitTime + ")");  
        waitTime--;  
        demandTimer = setTimeout(function() {  
        	codeWaitTime(o);  
        },  
        1000);  
    }  
} 

function showArea(index){
	if($("#pL0"+index).find("[name='isSameArea']").attr("class") == "areaClosed"){
		$("#pL0"+index).find("[name='showArea']").show();
	} else {
		$("#pL0"+index).find("[name='showArea']").hide();
	}
}

function headerDemand(orgName,spId,prodName,prodId){
	var prod_sp = "";
	if(spId != "" && prodId == ""){
		$("#pL09999").find("[name='_spId']").val(spId);
		prod_sp = "<p>您选择了：</p><span class='proSh-name'>"+orgName+"</span>";
	} else {
		$("#pL09999").find("[name='_spId']").val("");
	}
	
	if(spId == "" && prodId != ""){
		$("#pL09999").find("[name='_productId']").val(prodId);
		prod_sp = "<p>您选择了：</p><span class='proSh-name'>"+prodName+"</span>";
	} else {
		$("#pL09999").find("[name='_productId']").val("");
	}
	
	if(spId != "" && prodId != ""){
		$("#pL09999").find("[name='_productId']").val(prodId);
		$("#pL09999").find("[name='_spId']").val(spId);
		prod_sp = "<p>您选择了：</p><span class='proSh-name'>"+prodName+"&gt;"+orgName+"</span>";
	}
	
	$("#pL09999").find("[name='prod_sp']").html(prod_sp);
    $("#proShader").show();
    sendState = 0;
}

function prodSceneDemand(prodName,prodId,request) {
	$("#pL09999").find("[name='_userRequest']").val(request);
	headerDemand("", "", prodName, prodId);
}

function sceneDemand(sceneName) {
	var prod_sp = "<p>您选择了：</p><span class='proSh-name'>"+sceneName+"</span>";
	
	$("#pL09999").find("[name='prod_sp']").html(prod_sp);
    $("#proShader").show();
    sendState = 0;
}
  
