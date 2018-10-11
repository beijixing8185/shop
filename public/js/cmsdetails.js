
$(function(){
	$('.closeCode').click(function(){
		$(this).parent().css("display","none");
	});
});

//把内容链接转格式
function toUtf8(str) {
    var out, i, len, c;
    out = "";
    len = str.length;
    for(i = 0; i < len; i++) {
        c = str.charCodeAt(i);
        if ((c >= 0x0001) && (c <= 0x007F)) {
            out += str.charAt(i);
        } else if (c > 0x07FF) {
            out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
            out += String.fromCharCode(0x80 | ((c >>  6) & 0x3F));
            out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
        } else {
            out += String.fromCharCode(0xC0 | ((c >>  6) & 0x1F));
            out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
        }
    }
    return out;
}

//把内容链接转为二维码及展示
function generateCode(columnId,cmsId,articleId,option,mdomain){
	var url = mdomain+"/cms/cl"+columnId+"-cm"+cmsId+"-at"+articleId+".htm";
//	var url = "http://172.16.10.102:8080"+"/cms/cl"+columnId+"-cm"+cmsId+"-at"+articleId+".htm";
	url = toUtf8(url);
    $('#'+option).html("");
    $('#'+option).qrcode({
    	width: 90, //宽度
    	height:90, //高度
    	text: url //任意内容
    });
    $('.closeCode').parent().hide();
    $('#'+option).parent().show();
}