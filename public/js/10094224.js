















if(typeof doyoo=='undefined' || !doyoo){
var d_genId=function(){
var id ='',ids='0123456789abcdef';
for(var i=0;i<32;i++){ id+=ids.charAt(Math.floor(Math.random()*16)); } return id;
};

var schema='http';
if(location.href.indexOf('https:') == 0){
	schema = 'https';
}
var doyoo={
env:{
secure:schema=='https',
mon:schema+'://m9109.looyu.com/monitor',
chat:schema+'://looyuoms7713.looyu.com/chat',
file:schema+'://yun-static.soperson.com/131221',
compId:20003394,
confId:10094224,
workDomain:'',
vId:d_genId(),
lang:'sc',
fixFlash:0,
fixMobileScale:0,
subComp:0,
_mark:'b2162a86972358544fae7540eccf6fd93473ab3a72f1ba0e74bfbb2f9c02e1958471c65749860c69'
},
chat:{
mobileColor:'',
mobileHeight:80,
mobileChatHintBottom:0,
mobileChatHintMode:0,
mobileChatHintColor:'',
mobileChatHintSize:0,
priorMiniChat:0
}

, monParam:{
index:1,
preferConfig:0,

title:'\u6b22\u8fce\u8bbf\u95ee\u9556\u72ee\u7f51',
text:'',
auto:-1,
group:'10078760',
start:'00:00',
end:'24:00',
mask:false,
status:false,
fx:0,
mini:3,
pos:1,
offShow:0,
loop:0,
autoHide:0,
hidePanel:0,
miniStyle:'#0680b2',
miniWidth:'340',
miniHeight:'490',
showPhone:0,
monHideStatus:[4,5,5],
monShowOnly:'',
autoDirectChat:-1,
allowMobileDirect:1,
minBallon:0,
chatFollow:1,
backCloseChat:0,
ratio:0
}




};

if(typeof talk99Init == 'function'){
talk99Init(doyoo);
}
if(!document.getElementById('doyoo_panel')){
var supportJquery=typeof jQuery!='undefined';
var doyooWrite=function(html){
document.writeln(html);
}

doyooWrite('<div id="doyoo_panel"></div>');


doyooWrite('<div id="doyoo_monitor"></div>');


doyooWrite('<div id="talk99_message"></div>')

doyooWrite('<div id="doyoo_share" style="display:none;"></div>');
doyooWrite('<lin'+'k rel="stylesheet" type="text/css" href="'+schema+'://yun-static.soperson.com/131221/oms.css?171107"></li'+'nk>');
doyooWrite('<scr'+'ipt type="text/javascript" src="'+schema+'://yun-static.soperson.com/131221/oms.js?180231" charset="utf-8"></scr'+'ipt>');
}
}
