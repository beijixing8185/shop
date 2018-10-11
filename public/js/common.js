/**
 * 获得应用的根路径
 *@author：胡海
 *@since：2011-11-24

function getContextPath() {
	var strFullPath = window.document.location.href;
	var strPath = window.document.location.pathname;
	var pos = strFullPath.indexOf(strPath);
	var prePath = strFullPath.substring(0, pos);
	var postPath = strPath.substring(0, strPath.substr(1).indexOf('/') + 1);
	var basePath = prePath;
	//if(canBeAccess(prePath + postPath)){
	basePath = prePath + postPath;
	//}
	return basePath;
}

$(document).ready(function() {
	
	var deviceToken = getCookie("ca_uid");
	if (null == deviceToken || deviceToken == "" ) {
		var nk = generateGuid();
		setCookie("ca_uid", nk, 365, "51biaoshi.com");
	}
});

function generateGuid() {
	return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
		var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
		return v.toString(16);
	});
}
//设置cookie
function setCookie(name, value, expired, domain) {
	var tmp = "";
	if(domain) {
		tmp = name + "=" + escape(value) + "; Path=/;domain=" + domain + ";";
	} else {
		tmp = name + "=" + escape(value) + "; Path=/;";
	}
	if (expired > 0) {
		var date = new Date();
		date.setTime(date.getTime() + expired * 3600000);//*hours
		tmp = tmp + " expires=" + date.toGMTString();
	}
	document.cookie = tmp;
}
//获取cookie
function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ')
			c = c.substring(1);
		if (c.indexOf(name) != -1)
			return c.substring(name.length, c.length);
	}
	return "";
}
 */

function openBDBridge(){
	doyoo.util.openChat('g=10078760');
	return false;
}

function addCookie(name, value, expired, domain) {
	var tmp = "";
	if(domain) {
		tmp = name + "=" + escape(value) + "; Path=/;domain=" + domain + ";";
	} else {
		tmp = name + "=" + escape(value) + "; Path=/;";
	}
	if (expired > 0) {
		var date = new Date();
		date.setTime(date.getTime() + expired * 3600000);//*hours
		tmp = tmp + " expires=" + date.toGMTString();
	}
	document.cookie = tmp;
}

function getCookie(name) {
	var d = new RegExp("(^|;)[ ]*" + name + "[ ]*=[ ]*[^;]+", "i");
	if (document.cookie.match(d)) {
		var tmp = document.cookie.match(d)[0];
		var pos = tmp.indexOf("=");
  		if (pos > 0)
  			return tmp.substring(pos + 1).replace(/^\s+|\s+$/g, "");
	}
	else
		return "";
}

//更换验证码
function changeAuthImg(){  
	var timestamp = (new Date()).valueOf(); 
	$(".authImgObj").each(function(i,a){
		var src = $(a).attr("src");    
		$(a).attr("src",chgUrl(src,timestamp)); 
	});
}    
//时间戳    
//为了使每次生成图片不一致，即不让浏览器读缓存，所以需要加上时间戳    
function chgUrl(url,timestamp){         
  if((url.indexOf("?")>=0)){    
      urlurl = url.substring(0,url.indexOf("?")) + "?timestamp=" + timestamp  
  }else{    
      urlurl = url + "?timestamp=" + timestamp;    
  }    
  return urlurl;    
}

/** 验证手机号 **/
function isMobilePhoneNo(phone) { 
 var pattern = /^1\d{10}$/; 
 return pattern.test(phone); 
}

/** 验证qq号 **/
function isQQ(qq) { 
	var pattern = /^[1-9][0-9]{4,10}$/; 
	return pattern.test(qq); 
}

/** 验证微信号 **/
function isWeiXin(weixin) { 
 var pattern = /^[a-zA-Z]([-_a-zA-Z0-9]{5,19})+$/; 
 return pattern.test(weixin); 
}

/** 验证电子邮件 **/
function isEmail(email) { 
 var pattern = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; 
 return pattern.test(email); 
}

/** 验证非0正整数 **/
function isNumber(year) { 
 var pattern = /^\+?[1-9][0-9]*$/; 
 return pattern.test(year); 
}

function getQueryString(name) {
    var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
    var r = window.location.search.substr(1).match(reg);
    if (r != null) {
        return unescape(r[2]);
    }
    return null;
}
