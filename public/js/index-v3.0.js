/**
 * Created by Administrator on 2017/3/9.

 */
var timerTp;
function tpAppear(){
	$("#phoneTp").show();
	clearTimeout(timerTp);
	timerTp = null;
	
};
$(function(){
	var version = $("#version").val;
	$("body").click(function(e) {
        if($(e.target).is('#userRequestSelect > span')) {
            return;
        }else{
           $("#sele").removeClass("toggAh");
        }
    });
	$('[data-closed="tp"]').click(function(){
		$(this).parent().parent().hide();
	});
	$("#carousel-banner").on("mouseover",function(){
		$(".banner-l-span").css({"background":"#000"});
		});
	$("#carousel-banner").on("mouseout",function(){
		$(".banner-l-span").css({"background":"transparent"});
		});
	$("#faList").on("mouseover","li",function(){
		$(this).addClass("hovact").siblings().removeClass("hovact");
		});
	$("#userRequestSelect > span").click(function(){
		$("#sele").toggleClass("toggAh");
	});
	$("#bannerSerList").on("mouseover","li",function(){
		$(this).addClass("hovermos").siblings().removeClass("hovermos");
		$("#"+$(this).attr("data-toggle")).show().siblings().hide();
	});
	$("#bannerWaper").on("mouseleave",function(){
		$("#bannerSerList").children().removeClass("hovermos");
		$(this).find(".banner-list-con").children().hide();
	});
	$("#sele").on("click","li",function(){
		$("#userRequestSelect").children("span").html($(this).html());
		$(this).parent().removeClass("toggAh");
	});
	$('[data-toggle="sceneClosed"]').on("click",function(){
		$("#scene").hide();
	});
	$("#scene-tag").on("click","li",function(){
		$(this).parent().parent().hide().siblings().show();
		$("#"+$(this).attr("data-id")).show().siblings().hide();
	});
	$('[data-id="cj-tab"]').on("mouseover","li",function(){
		$("#"+$(this).attr("data-id")).show().siblings().hide();
		$(this).addClass("tabHover").siblings().removeClass("tabHover");
	});
	$('[data-id="cj-tabFixed"]').on("mouseover","li",function(){
		$("#"+$(this).attr("data-id")).show().siblings().hide();
		$(this).addClass("tabHover").siblings().removeClass("tabHover");
	});
	$('[data-toggle="cjzt-title"]').on("mouseover",function(){
		$(this).children(".cjzt-top").show();
		$(this).children("a").addClass("Ahover");
	});
	$('[data-toggle="cjzt-title"]').on("mouseleave",function(){
		$(this).children(".cjzt-top").hide();
		$(this).children("a").removeClass("Ahover");
	});
	$('[data-toggle="cjztChangeTop"]').on("mouseover","li",function(){
		$("#"+$(this).attr("data-id")).show().siblings().hide();
		$(this).addClass("hoverLi").siblings().removeClass("hoverLi");
		$('[data-toggle="cjztChangeBottom"]').children().removeClass("hoverLi");
	});
	$('[data-toggle="cjztChangeBottom"]').on("mouseover","li",function(){
		$("#"+$(this).attr("data-id")).show().siblings().hide();
		$(this).addClass("hoverLi").siblings().removeClass("hoverLi");
		$('[data-toggle="cjztChangeTop"]').children().removeClass("hoverLi");
	});
	$("#anallList").on("mouseover","li",function(){
		$(this).addClass("hoverAl").siblings().removeClass("hoverAl");
		$("#"+$(this).attr("data-id")).show().siblings().hide();
	});
	$("#ys-list").on("mouseover","li",function(){
		var url = $(this).children("dl").find("img").attr("src").slice(0,-4);
		$(this).children("dl").find("img").attr("src",url+"1.png");
	});
	$("#ys-list").on("mouseout","li",function(){
		var url = $(this).children("dl").find("img").attr("src").slice(0,-5);
		$(this).children("dl").find("img").attr("src",url+".png");
	});
    $(window).scroll(function(){
        if($(window).scrollTop() > document.body.clientHeight ){
            $(".header-fix").show();
        }else {
            $(".header-fix").hide();
        }
    });
    $("#area-chose > li:nth-child(6n)").css({"border-left":"none"});
    $("#serList").on("mouseenter","li",function(){
        var preElem = $("#serList .hoverd dt");
        var preUrl = preElem.children("img")[0].src.slice(0 ,-5);
        var imgUrl = $(this).children("dl").find("img")[0].src.slice(0 ,-5);
        $(this).addClass("hoverd").siblings().removeClass("hoverd");
        $(this).find("dt").attr("data-src","1");
        $(this).siblings().find("dt").each(function(){
            $(this).attr("data-src","2");
        });
        $(this).children("dl").find("img").attr("src",imgUrl+$(this).find("dt").attr("data-src")+".png");

        preElem.find("img").attr("src",preUrl+preElem.attr("data-src")+".png");
        $("#ser"+$(this).attr("data-id")).show().siblings().hide();
    });

    $("#slides").Xslider({
        unitdisplayed:1,
		numtoMove:1,
		loop:"cycle",
		dir:"V",
		autoscroll:2500,
		speed:500
       });

     	$(".footer-slides").Xslider({
             unitdisplayed:1,
    		numtoMove:1,
    		loop:"cycle",
    		dir:"V",
    		autoscroll:2500,
    		speed:300
            });

    $(".f_close").click(function () {
        $("#_submit_success").css("display", "none");
        $("#_submit_fail").css("display","none");
    });

    $(".find-input").on("mouseover",function(){
        $(this).children(".find-list").removeClass("closed");
        $(this).css({"background":"#f5f5f5"});
        $(this).children("b").css({"border-top":"none","border-bottom":"5px solid #666"});
    });
    $(".find-input").on("mouseout",function(){
        $(this).children(".find-list").addClass("closed");
        $(this).css({"background":"#f5f5f5"});
        $(this).children("b").css({"border-top":"5px solid #666","border-bottom":"none"});
    });
    $(".find-list").on("click","li",function(){
        $("#searchType").html($(this).html());
        $("#fixed-searchType").html($(this).html());
        $("#searchType").attr("searchType",$(this).attr("searchType"));
        $(this).parent().addClass("closed");
    });
    $(".appIcon").on("mouseover",function(){
        $(".app-erm").show();
    });
    $(".appIcon").on("mouseleave",function(){
        $(".app-erm").hide();
    });
    $(".userCenter").on("mouseover",function(){
        $(this).children("ul").removeClass("closed");
    });
    $(".userCenter").on("mouseleave",function(){
        $(this).children("ul").addClass("closed");
    });

    //大体检网址联想功能
    $("#site_url").focus(function() {
        $("#suffix-content").css("display", "block");
        var content = $(this).val();
        if(content =="www."){
            if (this.selectionStart !== undefined) { //IE 9 ，10，其他浏览器
                this.selectionStart = 0;
                this.selectionEnd = 4;
            } else { //IE 6,7,8
                var range = this.createTextRange();
                range.move("character", -this.value.length); //光标移到0位置。
                range.moveEnd("character",4);
                range.moveStart("character",0);
                range.select();
            }
        }
        if(content != "" && content !="www."){
            $("#suffix-content").css("display", "block");
        }
    });
    $("body").click(function(e) {
        if($(e.target).is('input')) {
            return;
        }else{
            $("#suffix-content").css("display", "none");
        }
    });

    $('#suffix-content').on('click','li',function() {
        var inputStr = $(this).html();
        var reg1 = /<span>/i;
        var reg2 = /<\/span>/i;
        inputStr = inputStr.replace(reg1,"");
        inputStr = inputStr.replace(reg2,"");
        console.log(inputStr);
        $('#site_url').val(inputStr);
        $("#suffix-content").css("display", "none");
    });

    $('#site_url').on('input propertychange', function() {
        $("#suffix-content").css("display", "block");
        var content = $(this).val();
        if(content.indexOf(".com") > 0 || content.indexOf(".net") > 0 || content == ""){
            $("#suffix-content").css("display", "none");
            return;
        }
        var reg = /[\.]$/i,reg1 = /\.c$/i,reg2 = /\.n$/i,reg3=/\.co$/i,reg4=/\.ne$/i;
        if(content.search(reg) > 0 ){
            content = content.slice(0,-1);
            $('#suffix-content > li > span ').html(content);
        }else if(content.search(reg1) > 0 || content.search(reg2) > 0){
            content = content.slice(0,-2);
            $('#suffix-content > li > span ').html(content);
        }else if(content.search(reg3) > 0 || content.search(reg4) > 0){
            content = content.slice(0,-3);
            $('#suffix-content > li > span ').html(content);
        }else {
            $('#suffix-content > li > span').html($(this).val());
        }

    });
    $("#suffix-content > li").mouseover(function(){
        $(this).addClass("tjhover").siblings().removeClass("tjhover");
    });
    $("#site_url").keydown(function(){
        var e=window.event||arguments[0];
        var code=e.keyCode||e.which||e.charCode;
        if(code==40){//向下
            if($(".tjhover").next().length==0){
                $("#suffix-content li:first-child").addClass("tjhover").siblings().removeClass("tjhover");
            }else{
                $(".tjhover").next().addClass("tjhover").siblings().removeClass("tjhover");
            }
            var inputStr =  $(".tjhover").html();
            var reg1 = /<span>/i;
            var reg2 = /<\/span>/i;
            inputStr = inputStr.replace(reg1,"");
            inputStr = inputStr.replace(reg2,"");
            $('#site_url').val(inputStr);
        }else if(code==38){//向上
            if($(".tjhover").prev().length==0){
                $("#suffix-content li:last-child").addClass("tjhover").siblings().removeClass("tjhover");
            }else{
                $(".tjhover").prev().addClass("tjhover").siblings().removeClass("tjhover");
            }
            var inputStr =  $(".tjhover").html();
            var reg1 = /<span>/i;
            var reg2 = /<\/span>/i;
            inputStr = inputStr.replace(reg1,"");
            inputStr = inputStr.replace(reg2,"");
            $('#site_url').val(inputStr);
        }else if(code==13){//回车
            var inputStr =  $(".tjhover").html();
            var reg1 = /<span>/i;
            var reg2 = /<\/span>/i;
            inputStr = inputStr.replace(reg1,"");
            inputStr = inputStr.replace(reg2,"");
            $('#site_url').val(inputStr);
            $("#suffix-content").css("display", "none");
        }

    });
    $("#site_url").keyup(function(e){
        site_url = $("#site_url").val().split(".")[0];
        if(site_url.length == 0){
            $("#l_com").text("");
            $("#l_cn").text("");
            $("#l_comcn").text("");
            $("#l_net").text("");
        } else {
            $("#l_com").text("http://" + site_url + ".com");
            $("#l_cn").text("http://" + site_url + ".cn");
            $("#l_comcn").text("http://" + site_url + ".com.cn");
            $("#l_net").text("http://" + site_url + ".net");
        }
    });


    //GIF点击事件
    $("#top-gif").on("click",function(){
            $("#shade-bottom").css({"left":"0"});
            $(this).hide();

    });
    $("#body-closed").on("click",function(){
        $("#shade-bottom").css({"left":"-100%"});
        $("#top-gif").show(2000);
    });

    $('[data-close="adClosed"]').click(function(e){
    		e.stopPropagation();
    		$(this).parent().remove();
		$.ajax({
    		url : "/index/closead.json",
    		dataType : 'json',
    		type : "post",
    		async : true,
    		data : {
    		},
    		success : function(result) {
    		},
    		error : function(result) {
    		}
    	});
    });
    $('[data-toggle="jpzj"]').click(function(){
    		$("#professor").html($(this).find('[data-id="professor"]').html());
    		$("#profSp").html($(this).find('[data-id="profSp"]').html());
    		$("#prospImg").children("img").attr("src",$(this).find("img").attr("src"));
    		$("#professorZw").html($(this).find('[data-id="professorZw"]').html());
    		$("#professorPro").html($(this).find('[data-id="professorPro"]').html());
    		$("#jpzjModal").modal("show");
    		if ($("#professor").html() == "李勇") {
    			$("#professorSpId").val("500711");
    			$("#proSpDesc").html("北京蜂传网络科技有限公司-李勇");
    		}
    		else if ($("#professor").html() == "殷文龙") {
    			$("#professorSpId").val("500551");
    			$("#proSpDesc").html("石家庄实搜网络科技有限公司-殷文龙");
    		}
			else if ($("#professor").html() == "梁晓双") {
				$("#professorSpId").val("504552");
    			$("#proSpDesc").html("上海梁成网络科技有限公司-梁晓双");			
			}
			else if ($("#professor").html() == "栗俊平") {
				$("#professorSpId").val("500232");
    			$("#proSpDesc").html("北京互联点客信息技术有限公司-栗俊平");
			}
			else if ($("#professor").html() == "仝治岳") {
				$("#professorSpId").val("508418");
    			$("#proSpDesc").html("北京同合至悦文化传播有限公司-仝治岳");
			}
    });
    $("#searchFile").focus(function(){
		$("#findExample").hide();
	});
	$("#searchFile").blur(function(){
		if(!$("#searchFile").val().length){
			$("#findExample").show();
		}
	});
    $("#searchFile").keydown(function(event){
  	  if (event.keyCode == "13") {
  		  searchWord();
      };
    });
    $("#fixed-searchFile").keydown(function(event){
    	  if (event.keyCode == "13") {
    		  searchWord();
        };
      });
    $("#searchFile").keyup(function(){
    	$("#fixed-searchFile")[0].value=$(this).val();
    });
    $("#fixed-searchFile").keyup(function(){
    	$("#searchFile")[0].value=$(this).val();
    });
    
  $(".tabContain").on("click","li",function(){
	  var hrefUrl = baseurl+ "/scene/"+$(this).attr("data-id")+".htm";
	  window.open(hrefUrl,"_blank");
  });
  
  $(".scene-tagContain").on("click","li",function(){
	  var hrefUrl = baseurl+ "/scene/"+$(this).attr("data-id")+".htm";
	  window.open(hrefUrl,"_blank");
  });
  
  
  $(".cjzt-details").on("click","li",function(){
	  var hrefUrl = baseurl+ "/scene/"+$(this).attr("data-id")+".htm?_pb=scene";
	  window.open(hrefUrl,"_blank");
  });
  
  	//顶部发布需求
	$("#publish-hover").on("mouseover",function(){
		$(".p-list").fadeIn();
		$(".publish-hover > b").removeClass("rotate");
		$(".publish-hover > b").addClass("scale");
	});
	$("#publish-hover").mouseleave(function(){
		$(".p-list").hide();
		$(".publish-hover > b").removeClass("scale");
		$(".publish-hover > b").addClass("rotate");
	});
	var findExampTime = '';
	
	var searchList = $('#searchStr').val();
	searchList = jQuery.parseJSON(searchList);
	$('#findExample a').hover(function(){
		clearInterval(findExampTime);
	},function(){
		findExampTime = setInterval(function(){
	 		randomNum++;
	 		if(randomNum > 4){
	 			randomNum = 0;
	 		}
	 		$('#findExample').find('a').text(searchList[randomNum].searchName);
	 	 	$('#findExample').find('a').attr('href',searchList[randomNum].url);
	 	},5000);
	});
	
	var randomNum = Math.floor(Math.random() * parseInt(searchList.length));
	
	$('#findExample').find('a').text(searchList[randomNum].searchName);
 	$('#findExample').find('a').attr('href',searchList[randomNum].url);
 	findExampTime = setInterval(function(){
 		randomNum++;
 		if(randomNum > 4){
 			randomNum = 0;
 		}
 		$('#findExample').find('a').text(searchList[randomNum].searchName);
 	 	$('#findExample').find('a').attr('href',searchList[randomNum].url);
 	},5000);
  
    
});

function searchWord(){
	var searchFile = $('#searchFile').val();
	searchFile = searchFile.replace(/^\s+|\s+$/gm,'');
	if(searchFile == ""){
		searchFile = "SEO";
	}
	
	var url = "/search.htm?wd=" + searchFile;
	
	window.open(url,"_self");
};


function toExam(){
	var companyName = $("#company_name").val();
	var siteUrl = $("#site_url").val();
	
	if(companyName == ""){
		$("#errorMsg").html("请输入公司名称！");
		$("#errorMsg").show();
		return false;
	}
	
	if (siteUrl.indexOf("http") == -1) {
		siteUrl = "http://" + siteUrl;
		$("#site_url").val(siteUrl);
	}
	
	if(!isURL(siteUrl)){
		$("#errorMsg").html("请输入正确的网址！");
		$("#errorMsg").show();
		return false;
	}
	
	$("#exam_form").submit();
}

function freeCall() {
	var phone = $("#phone").val();
	
	var reg =/^1\d{10}$/;
	if(!reg.test(phone)){
		$("#phoneError").html("请输入正确的电话号码！");
		$("#phoneError").show();
		return false;
	}
	
	$.ajax({
		url:"/order/ajaxSubmit.json",
		type:"post",
		data:{"mobile":phone},
		dataType:"json",
		success:function(result){
			$('[data-closed="tp"]').click();
		},
		fail:function(e){
			$("#_submit_fail").show();
		}
	});
}

function isURL(str_url) {// 验证url
	var strRegex = "^((https|http|ftp|rtsp|mms)?://)"
	+ "?(([0-9a-z_!~*'().&=+$%-]+: )?[0-9a-z_!~*'().&=+$%-]+@)?" // ftp的user@
	+ "(([0-9]{1,3}\.){3}[0-9]{1,3}" // IP形式的URL- 199.194.52.184
	+ "|" // 允许IP和DOMAIN（域名）
	+ "([0-9a-z_!~*'()-]+\.)*" // 域名- www.
	+ "([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\." // 二级域名
	+ "[a-z]{2,6})" // first level domain- .com or .museum
	+ "(:[0-9]{1,4})?" // 端口- :80
	+ "((/?)|" // a slash isn't required if there is no file name
	+ "(/[0-9a-z_!~*'().;?:@&=+$,%#-]+)+/?)$";
	var re = new RegExp(strRegex);
	return re.test(str_url);
}

function isMobilePhone(mobile){
	var mobilePattern =/^1\d{10}$/;
	return mobilePattern.test(mobile);
}

function showImgCode(fbNum){
	var mobile = "";
	if(1 == fbNum){
		mobile = $("#_mobile").val();
		if(!isMobilePhone(mobile)){
			$("#_mobile").addClass("error");
			$("#mobileError").show();
			return false;
		}else{
			$("#_mobile").removeClass("error");
			$("#mobileError").hide();
			$("#verifyCodeDiv").show();
		}
	}else if(2 == fbNum){
		mobile = $("#_mobile2").val();
		if(!isMobilePhone(mobile)){
			$("#_mobile2").addClass("error");
			$("#mobileError2").show();
			return false;
		}else{
			$("#_mobile2").removeClass("error");
			$("#mobileError2").hide();
			$("#verifyCodeDiv2").show();
		}
	}else if(3 == fbNum){
		//检查姓名
		if ($("#customerName").val() == "") {
			$("#customerName").addClass("error");
			$("#nameError3").show();
			return false;
		}
		else {
			$("#customerName").removeClass("error");
			$("#nameError3").hide();
		}
		
		mobile = $("#_mobile3").val();
		if(!isMobilePhone(mobile)){
			$("#_mobile3").addClass("error");
			$("#mobileError3").show();
			return false;
		}else{
			$("#_mobile3").removeClass("error");
			$("#mobileError3").hide();
			$("#verifyCodeDiv3").show();
		}
		
	}
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
				changeAuthImg();
			}
		},
		error : function (result) {
			codeFlag = false;
	    }
	});
	
	return codeFlag;
}

var sendState = 0;
//官网banner下免费咨询专家使用
function sendUserRequest1(){
	$("#_mobile").removeClass("error");
	$("#mobileError").hide();
	
	var userRequest = $("#userRequestSelect").children("span").html();
	var mobile = $("#_mobile").val();
	
	if(!isMobilePhone(mobile)){
		$("#_mobile").addClass("error");
		$("#mobileError").show();
		return false;
	}	
	
	if (sendState==0) {
		sendState = 1;
		$.ajax({
			url:"/order/ajaxSubmit.json",
			type:"post",
			data:{"userRequest":userRequest,
				 "mobile":mobile,"isMobileAuthed":0},
			dataType:"json",
			success:function(result){
				sendState = 0;
				$("#_mobile").val("");
				$("#userRequestSelect").children("span").html("请选择您的需求类型");
				$('#sucinform').html("");
				if(result.status == "success"){
					$("#mobileError").hide();
					if(result.isService==true){
						$('#sucinform').html("15分钟内，镖狮管家将用010-8992开头的电话与您联系！联系时间:(9:30-18:30)");
					}else{
						$('#sucinform').html("您的需求已收到，镖狮管家将在工作日（9:30-18:30）用010-8992开头的电话与您联系！");
					}
					$("#_submit_success").show();
				}else{
					$("#_submit_error").show();
				}
			},
			fail:function(e){
				$("#_submit_error").show();
				sendState = 0; 
			}
		});
	}
}

function sendUserRequest2(){
	
	$("#_mobile2").removeClass("error");
	$("#mobileError2").hide();
	$("#_verifyCode2").removeClass("error");
	$("#verifyError2").hide();
	
	var verifyCode = $("#_verifyCode2").val();
	var userRequest = $("#userRequestInput").val();
	var mobile = $("#_mobile2").val();
	
	if(!isMobilePhone(mobile)){
		$("#_mobile2").addClass("error");
		$("#mobileError2").show();
		return false;
	}
	
	if(""==verifyCode || !checkImgCode(verifyCode)){
		$("#_verifyCode2").addClass("error");
		$("#verifyError2").show();
		return false;
	}
	
	
	if (sendState==0) {
		sendState = 1;
		$.ajax({
			url:"/order/ajaxSubmit.json",
			type:"post",
			data:{"userRequest":userRequest,
				 "mobile":mobile,"isMobileAuthed":0},
			dataType:"json",
			success:function(result){
				sendState = 0;
				$("#_mobile2").val("");
				$("#userRequestInput").val("");
				if(result.errorCode == "0"){
					$("#verifyCodeDiv2").hide();
					$("#_submit_success").show();
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

function sendUserRequest3(){
	
	$("#customerName").removeClass("error");
	$("#nameError3").hide();
	$("#_mobile3").removeClass("error");
	$("#mobileError3").hide();
//	$("#_verifyCode3").removeClass("error");
//	$("#verifyError3").hide();
	
//	var verifyCode = $("#_verifyCode3").val();
	var userRequest = $("#customerName").val() + "快速预约了服务";
	var mobile = $("#_mobile3").val();
	//检查姓名
	if ($("#customerName").val() == "") {
		$("#customerName").addClass("error");
		$("#nameError3").show();
		return false;
	}else {
		$("#customerName").removeClass("error");
		$("#nameError3").hide();
	}
	if(!isMobilePhone(mobile)){
		$("#_mobile3").addClass("error");
		$("#mobileError3").show();
		return false;
	}
	
	if (sendState==0) {
		sendState = 1;
		$.ajax({
			url:"/order/ajaxSubmit.json",
			type:"post",
			data:{"userRequest":userRequest,
				"isMobileAuthed" : 0,
				"mobile":mobile,"isMobileAuthed":0},
			dataType:"json",
			success:function(result){
				sendState = 0;
				$("#_mobile3").val("");
				$("#customerName").val("");
				$("#nameError3").hide();
				$("#mobileError3").hide();
				if(result.errorCode == "0"){
					$("#_submit_success_no_verify").show();
				}else{
					$("#_submit_fail_no_verify").show();
				}
			},
			fail:function(e){
				$("#_submit_fail_no_verify").show();
				sendState = 0; 
			}
		});
	}
}

function sendUserRequest4(){
	
	$("#_mobile4").removeClass("error");
	$("#mobileError4").hide();
	
	var userRequest = "预约" + $("#proSpDesc").html() + "团队为我提供咨询";
	var mobile = $("#_mobile4").val();
	var spId = $("#professorSpId").val();
	
	if(!isMobilePhone(mobile)){
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
				"spId" : spId,
				"mobile":mobile},
			dataType:"json",
			success:function(result){
				sendState = 0;
				$("#_mobile4").val("");
				$("#mobileError4").hide();
				if(result.errorCode == "0"){
					$("#jpzjModal").modal("hide");
					$("#_submit_success_no_verify").show();
				}else{
					$("#_submit_fail_no_verify").show();
				}
			},
			fail:function(e){
				$("#_submit_fail_no_verify").show();
				sendState = 0; 
			}
		});
	}
}

//预约直播课程
function BookLesson(){
	var phone=$('#bookphone').val();
	var isPhone=isMobilePhoneNo(phone);
	if(!isPhone){
		alert("手机号码格式不正确！");
		return;
	}

	$.ajax({
	  url: "/index/booklesson.json",
	  type : "post",
	  data:{"content":phone},
	  dataType:"json",
	  async:false,
	  success: function(data){
		  if(data.status=="success"){
			  alert("预约成功!");
		  }else{
			  alert("系统出小差了!"); 
		  }
	  }
	  ,fail:function(e){
		 alert("系统出小差了!");
	  }
	});
}

function toSpManage(path){
	$.ajax({
	  url: "/index/checkstatus.json",
	  type : "post",
	  dataType:"json",
	  async:false,
	  success: function(data){
			if(data.spFlag==1){
				//服务商负责人
				if(data.spBeactive==1){
					//服务商激活,进入服务商后台
					window.open(path,"_self");
				}else{
					//服务商冻结,提示冻结
					$('#indexbeactive').modal('show');
				}
			}else if(data.spFlag==2){
				//服务商跟单员
				if(data.spBeactive==1){
					//服务商激活,判断跟单员状态
					if(data.saleBeactive==1){
						window.open(path,"_self");
					}else{
						//服务商冻结,提示冻结
						$('#indexbeactive').modal('show');
					}
				}else{
					//服务商冻结,提示冻结
					$('#indexbeactive').modal('show');
				}
			}else if(data.spFlag==3){
				//既是负责人也是跟单员
				if(data.spBeactive==1){
					//服务商激活,进入服务商后台
					window.open(path,"_self");
				}else{
					//服务商冻结,提示冻结
					$('#indexbeactive').modal('show');
				}
			}
	  }
	  ,fail:function(e){
		 alert("系统出小差了!");
	  }
	});
}
