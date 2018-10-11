var timeImg = 1,timerBridge = '',timer = '';
$(function() {
    timerBridge = setTimeout(function(){
		$('.box-bridge').animate({'left':'-163px',"opacity": "1"},100);
		$('#onlineConsulting').addClass('anaimal-bridge');
	},3000); 
    timer = setTimeout(function(){
    	$('.box-bridge').animate({'left':'0px',"opacity": "0"},100);
		$('#onlineConsulting').removeClass('anaimal-bridge');
	},6000);
    $('#commonBoxUtil li').hover(function(){
    	clearTimeout(timerBridge);
    	clearTimeout(timer);
    	if($(this).hasClass('has-bridge')){
    		$('.box-bridge').animate({'left':'-163px',"opacity": "1"},100);
    		$('#onlineConsulting').addClass('anaimal-bridge');
    	}else{
    		$('.box-bridge').animate({'left':'0px',"opacity": "0"},0);
    		$('#onlineConsulting').removeClass('anaimal-bridge');
    	}
    },function(){
    	clearTimeout(timerBridge);
    	clearTimeout(timer);
    	$('.box-bridge').animate({'left':'0px',"opacity": "0"},100);
		$('#onlineConsulting').removeClass('anaimal-bridge');
    });
});