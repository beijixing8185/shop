/** 验证手机号 **/
function isMobilePhoneNo(phone) { 
    var pattern = /^1\d{10}$/; 
    return pattern.test(phone); 
}
$('.integralSubmit').click(function(){
    var userName = $.trim($('input[name="userName"]').val());
    var telNumber = $.trim($('input[name="telNumber"]').val());
    if(!userName){
        $('.userNameError').show();
        return false;
    }else{
        $('.userNameError').hide();
    }
    if(!telNumber){
        $('.telNumberError').show();
        $('.telNumberError').text('用户手机号不能为空');
        return false;
    }else{
        $('.telNumberError').hide();
    }
    if(!isMobilePhoneNo(telNumber)){
        $('.telNumberError').show();
        $('.telNumberError').text('请输入正确的手机号码');
        return false;
    }
    var type = $('.groupItem > div > p').text();
  
    if(type=='-请选择-'){
    	type="";
    }

	var demandtoken=$("#demandtoken").val();//表单隐藏域
    var demandDetail = $("#xqTextarea").val();
    var companyName = $("#companyName").val();
    $.ajax({
		   url: "/order/submitdemand.json",
		   type : "post",
		   data:{"uName":userName,'phone':telNumber,'company':companyName,'classify':type,'demandDetail':demandDetail,'demandtoken':demandtoken},
		   dataType:"json",
		   success: function(data){
			   if(data.status=="success"){
				   $("#demandtoken").val(data.demandtoken);
				   $('.dfMask').show();
			   }else{
				   $("#demandtoken").val(data.demandtoken);
				   alert(data.msg);
			   }
		   }
		});	
});
var clock = true;
$('.groupItem > div > p').click(function(){
    if(clock){
        $('.groupItem > div > ul').show();
        clock = false;
    }else{
        $('.groupItem > div > ul').hide();
        clock = true;
    }
});
$('.groupItem > div > ul > li').click(function(){
    $('.groupItem > div > p').text($(this).text());
    $('.groupItem > div > ul').hide();
    clock = true;
});
$('#xqTextarea').keyup(function(){
    var len = $.trim($(this).val()).length;
    if(len > 500){
        $(this).val($(this).val().slice(0,501));
        $('.integralTextarea p b').text(500);
        return false;
    }else{
        $('.integralTextarea p b').text(len);
    }
});
$('.integralBannerMain .integralBannerButton span:nth-of-type(1)').hover(function(){
    $(this).siblings('div').show();
},function(){
    $(this).siblings('div').hide();
});
$('.integralBannerMain .integralBannerButton span:nth-of-type(2)').click(function(){
  		location.href="/integral/demandrecord.htm";
});
$('.dfMask .dfMain > img,.dfMask .dfMain > div').click(function(){
    $('.dfMask').hide();
    location.href="/ordermanager/orderList.htm";
});
