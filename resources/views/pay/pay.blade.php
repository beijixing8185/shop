@extends('welcome')

@section('title','支付')
@section('keywords','支付')
@section('description','支付')

@section('css')
	<link rel="stylesheet" href="/css/pay.css">
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<script src="{{asset('js/standardorder.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/common-header.js')}}"></script>
	<script src="{{asset('js/popup.js')}}"></script>
	<script src="{{asset('js/iconfont.js')}}"></script>
	<script src="{{asset('js/jquery.qrcode.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/pop.css')}}">
	<link rel="stylesheet" href="{{asset('css/fbwindowsuccess.css')}}">
	<script src="{{asset('js/swiper.min.js')}}"></script>
	<script src="{{asset('js/pop.js')}}"></script>
	<script src="{{asset('js/common-right.js')}}"></script>
	<script src="{{asset('js/commonfb.js')}}"></script>
@endsection


@section('content')


	@include('./common/member_search')
	@include('./common/right')
	@include('./common/poper')

   <div class="container buy-session">
        <!-- Nav tabs -->
		<ul class="nav nav-tabs buy-tab" role="tablist" id="buyTap" >
            <li class="active"><a href="#perfet" role="tab" data-toggle="tab"><b>1</b>订单结算</a><i></i></li>
            <li><a href="#orderPay" role="tab" data-toggle="tab"><b>2</b>订单支付</a><i></i></li>
            <li><a href="#successp" role="tab" data-toggle="tab"><b>3</b>分配服务商</a><i></i></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="perfet">
                <div class="baob-infor">
                    <p class="baob-title">宝贝信息</p>
                    <ul class="baob-list">
                        <li class="baob-list-bg">
                            <p class="pull-left baob-list-left">宝贝名称</p>
                            <div class="pull-left baob-list-right">
                                <p class="pull-right baob-list-price">总价</p>
                                <p class="pull-right baob-list-num">宝贝数量</p>
                                <p class="pull-right baob-list-dj">宝贝单价</p>
                            </div>
                        </li>
                        <li class="baob-list-border">
                            <dl class="pull-left baob-list-left">
                                <dt class="pull-left">
																			<img src="/picture/default-big.png" />
																	</dt>
                                <dd class="pull-left">
                                    <p></p>
                                    套餐类型：
                                    <input type="hidden" id="productId" value="">
                                    <input type="hidden" id="packageId" value="">
                                </dd>
                            </dl>
                            <div class="pull-left baob-list-right">
                                <p id="totalPrice" class="pull-right baob-list-price price-yen">&yen;</p>
                                <div class="pull-right baob-list-num ">
                                    <div class="buy-btn">
										<input type="hidden" id="specProdId" value="" >
																					<button onclick="subBuyNum()"><img src="/picture/minus.png" /></button>
                                            <input id="buyNum" type="text" value="" onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}" onafterpaste="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'0')}else{this.value=this.value.replace(/\D/g,'')}" />
                                            <button onclick="addBuyNum()"><img src="/picture/add.png" /></button>
										                                    </div>
                                </div>
								<input id="packagePrice" type="text" value="" style="display:none" />
                                <p class="pull-right baob-list-dj price-yen-dj">
																			&yen;
																	</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- <div class="buy-form">
                    <p class="baob-title">联系人信息</p>
                    <div class="pull-left buy-name"><input id="contactName" value="" type="text" placeholder="您的姓名（选填）"></div>
                    <div class="pull-left buy-phone">
                        <input id="contactPhone" value="" type="text" placeholder="请输入手机号（必填）">
                    </div>
                </div> -->
                <div class="fap-infor">
                    <p class="baob-title">发票信息</p>
                    <ul class="fap-list" id="fapList">
                        <li onclick="changeInvoiceType(0)" class="select" data-toggle="nofap">暂不开具<b><img src="/picture/tcselected.png" alt=""></b></li>
                        <li onclick="changeInvoiceType(1)" data-toggle="putfap">普通发票<b><img src="/picture/tcselected.png" alt=""></b></li>
                        <li onclick="changeInvoiceType(2)" data-toggle="zhuanyfap">增值税专用发票<b><img src="/picture/tcselected.png" alt=""></b></li>
                    	<input type="hidden" id="invoiceType" value="0">
                    </ul>
                    <div class="fap-totent">
                        <div id="nofap"></div>
                        <div id="putfap">
                            <div class="fap-div">
                                <p>发票票面信息</p>
                                <div class="fap-list">
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">发票抬头</label>
                                        <div class="col-sm-6">
                                            <input id="putTitle" value="" type="text" class="form-control"  placeholder="填写发票抬头">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">纳税人识别号</label>
                                        <div class="col-sm-6">
                                            <input id="putIdentifyNo" value="" type="text" class="form-control"  placeholder="填写纳税人识别号">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fap-div">
                                <p>收件人信息</p>
                                <div class="fap-list">
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">收件人</label>
                                        <div class="col-sm-6">
                                            <input id="putReceiver" value="" type="text" class="form-control"  placeholder="填写收件人">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">手机号</label>
                                        <div class="col-sm-6">
                                            <input id="putPhone" value="" type="text" class="form-control"  placeholder="填写手机号">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">收件地址</label>
                                        <div class="col-sm-6">
                                            <input id="putAddress" value="" type="text" class="form-control"  placeholder="填写收件地址">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="zhuanyfap">
                            <div class="fap-div">
                                <p>发票票面信息</p>
                                <div class="fap-list">
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">发票抬头</label>
                                        <div class="col-sm-6">
                                            <input id="zhuanTitle" value="" type="text" class="form-control"  placeholder="填写发票抬头">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">纳税人识别号</label>
                                        <div class="col-sm-6">
                                            <input id="zhuanIdentifyNo" value="" type="text" class="form-control"  placeholder="填写纳税人识别号">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">注册地址</label>
                                        <div class="col-sm-6">
                                            <input id="zhuanRegAddr" value="" type="text" class="form-control"  placeholder="填写注册地址">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">注册电话</label>
                                        <div class="col-sm-6">
                                            <input id="zhuanRegPhone" value="" type="text" class="form-control"  placeholder="填写注册电话">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">开户银行</label>
                                        <div class="col-sm-6 form-rela">
                                            <input type="text" value="" id="zhuanBank" class="form-control"  placeholder="填写开户银行">
                                            <span>例：中国农业银行股份有限公司南京两路支行</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">银行账户</label>
                                        <div class="col-sm-6">
                                            <input id="zhuanAccount" value="" type="text" class="form-control"  placeholder="填写银行账户">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fap-div">
                                <p>收件人信息</p>
                                <div class="fap-list">
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">收件人</label>
                                        <div class="col-sm-6">
                                            <input id="zhuanReceiver" value="" type="text" class="form-control"  placeholder="填写收件人">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">手机号</label>
                                        <div class="col-sm-6">
                                            <input id="zhuanPhone" value="" type="text" class="form-control"  placeholder="填写手机号">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">收件地址</label>
                                        <div class="col-sm-6">
                                            <input id="zhuanAddress" value="" type="text" class="form-control"  placeholder="填写收件地址">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buy-second">
                    <a href="javascript:void(0)" data-id="orderPay" class="caClass"  onclick="suresubmitorder()" traceflag="content_tab_订单结算下一步">下一步</a>
                    <span>在镖狮找营销服务商，能享受到高质量服务，比其他渠道便宜20%以上</span>
                </div>
            </div>
            <div class="tab-pane" id="orderPay">
                <div class="container">
					<input type="hidden" id="isStdProduct" value="1">
                	<input type="hidden" id="orderId" value="29918">
                	<input type="hidden" id="payId" value="34849">
                    <div class="pay-infor">
                        <p>宝贝名称：微信公众号注册认证、开通支付／公众号搭建
                        	                        		-微信公众号注册认证、开通支付／公众号搭建
                        	                        </p>
                        <p>订单编号：O201810101004543825443</p>
                        <div>应付金额：<span>&yen;399</span></div>
                    </div>
                    <div class="pay-way">
                        <p>请选择支付方式：</p>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" checked="checked" name="inlineRadioOptions" id="inlineRadio1" value="alipay"> 
                                <b><img src="/picture/zhi-pai.png" alt=""></b>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="wxpay">
                                <b><img src="/picture/weix-pay.png" alt=""></b>
                            </label>
                        </div>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="bankpay">
                                <b><img src="/picture/bank-pay.png" alt=""></b>
                            </label>
                        </div>
                    </div>
                    <div class="pay-btn">
                        <a class="btn-yellow caClass" href="javascript:void(0)" data-id="successp" id="paynext" data-toggle="nextTab" traceflag="content_tab_订单支付下一步">下一步</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="successp">
                <div class="buy-success">
                    <div class="buy-overflow">
                        <div class="buy-success-title">
                            <p><b><img src="/picture/success.png" alt=""></b>恭喜您支付完成！</p>
                        </div>
                    </div>
                    <span>服务商已收到您的订单，
                                        	将在工作日(9:30-18:30)使用170开头电话与您联系，请保持手机畅通。
                                        </br>
                                                           镖狮网保障您的服务效果，保护您的信息隐私安全，如有疑问请致电4000-581-581。
					<a class="dingdan" href="/ordermanager/details.htm?orderId=">查看订单</a>
                </span>
													<div class="lc-img">
                        <b></b>
                        <dl class="active-dt">
                            <dt >1</dt>
                            <dd>购买成功</dd>
                        </dl>
                        <dl class="active-dt">
                            <dt>2</dt>
                            <dd>服务商工作</dd>
                        </dl>
                        <dl>
                            <dt>3</dt>
                            <dd>服务验收</dd>
                        </dl>
                        <dl>
                            <dt>4</dt>
                            <dd>服务评价</dd>
                        </dl>
                    </div>
                    <div class="successCode">
						<input type="hidden" id="shareurl" value="">
	                	<p>邀请好友助力，升级我的保障服务，好友还能领现金</p>
	                	<div class="title2" style="font-weight: bold;">
	                		免费获得 <span>￥99</span>
	                	</div>
	                	<div class="box">
	                		<dl>
	                			<dt>
	                				<span id="assistCode"></span>
	                				<p>微信扫描二维码</p>
	                			</dt>
	                			<dd>
	                				<div>镖狮营销管家一对一服务: </div>
	                				<p>1.镖狮网先行赔付</p>
	                				<p>2.营销内容干货大礼包</p>
	                			</dd>
	                		</dl>
	                	</div>
	                </div>
                </div>
                <p class="border-bg"></p>
                <div class="you-like">
                    <p class="like-title">猜你喜欢</p>
                    <ul class="like-list">
                                            </ul>
                </div>
            </div>
        </div>
    </div>

	    <div id="orderNextPrompt" class="buySureShadow" style="display:none;">
        <div class="inner">
            <b class="suc-closed" data-toggle="buycont"><img src="/picture/des-closed.png" alt=""/></b>
            <div class="buySure-title"><b></b>温馨提示</div>
            <div class="sure-image">
                <b><img src="/picture/sure-img.png" alt=""></b>
                请确保您填写的订单信息无误，支付后不可修改！
            </div>
            <div class="anniu">
                <a class="caClass" traceflag="pop_close_返回修改订单" id="backModify">返回修改订单</a>
                <a id="suresubmitorder" class="rindex caClass" onclick="suresubmitorder()" traceflag="pop_submit_确认去支付">已确认，前往支付</a>
            </div>
        </div>
    </div>
        
        <div class="bank-shadow" style="display:none">
	    <div class="bank-inner">
	        <b id="closeOfflinePayPrompt" class="suc-closed caClass" data-toggle="buycont" traceflag="pop_close_线下支付返回"><img src="/picture/des-closed.png" alt=""/></b>
	        <div class="bank-xuz">
	            <p><b><img src="/picture/sure-img.png" alt=""></b>友情提示</p>
	            <div>
	                1.银行转账支付支持企业公对公转账和个人银行转账；</br>
	                2.银行转账需<span>将汇款识别码填写至电汇凭证的【汇款用途】、【附言】、【摘要】</span>等栏内，以便订单及时核销，请<span>正确填写</span>。注：不同银行的备注字段不同，最好是将所有的可填写备注的地方都写上汇款识别码；</br>
	                3.银行转账订单，一个识别码对应一次付款请求和相应的金额，请正确填写且勿多转账或少转账
	            </div>
	
	        </div>
	        <p class="bank-sure-tis">请确认保存好转账信息，打款成功后，系统自动推荐给您最优质的服务商！</p>
	        <dl class="bank-info">
	            <dt class="pull-left"><img src="/picture/icbc.png" alt=""></dt>
	            <dd class="pull-left">
	                <p class="red-wining"><span>汇款识别码</span>3825443</p>
	                <p><span>银&nbsp;行&nbsp;账&nbsp;号</span>110919349310301</p>
	                <p><span>开&nbsp;&nbsp;&nbsp;户&nbsp;&nbsp;&nbsp;名</span>北京发镖网络科技有限公司</p>
	                <p><span>开&nbsp;&nbsp;&nbsp;户&nbsp;&nbsp;&nbsp;行</span>招商银行北京东直门支行（基本户）</p>
	            </dd>
	        </dl>
	        <div class="anniu-other">
	        		<div class="float-div">
		                <div class="float-inner">
		                    <a id="backHome" href="/" class="caClass" traceflag="pop_load_线下支付返回首页">返回首页</a>
			           		<a id="lookOrderList" href="/ordermanager/orderList.htm" class="rindex caClass" traceflag="pop_load_线下支付查看订单">稍后付款,查看订单</a>
		                </div>
		            </div>
	            
	        </div>
	    </div>
	</div>
		
	<div id="errorPromptDiv" class="buySureShadow" style="display:none">
        <div class="inner">
            <b id="errorClose" class="suc-closed"><img src="/picture/des-closed.png" alt=""/></b>
            <div class="buySure-title"><b><img src="/picture/jgicon.png" /></b><span id="errorTitle">抱歉，您访问的页面异常！</span></div>
            <p id="errorDesc" class="workTime">您访问的页面出现了问题，请稍后再试。</p>
            <div id="errorSure" class="errorSure">
                <a>确定</a>
            </div>
        </div>
	</div>
	
		<div id="swaper" style="display:none">
	    <div class="shade">
	        <b id="pay-close"><img src="/picture/pay-close.png" alt=""/></b>
	        <p><img src="/picture/payway05.png" alt=""/></p>
	        <div class="erweima">
	            <img src="" alt="" id="_wx_qr"/>
	        </div>
	        <div class="describe">
	            <p class="des-money">实付金额：<span>399元</span></p>
	            <p>请使用微信扫描二维码 <br/>以完成支付</p>
	        </div>
	    </div>
	</div>
        





	<script type="text/javascript" src="/js/monitor.js"></script>
	<script>
        $(function(){
        	$('#buyTap li:eq(1) a').tab('show');

        	            $('#fapList').on("click","li",function(){
                $(this).addClass("select").siblings().removeClass("select");
                $("#"+$(this).attr("data-toggle")).show().siblings().hide();
            });

			            $('[data-toggle="buycont"]').click(function(){
                $(this).parent().parent().hide();
            });
			$('#backModify').click(function(){
                $('#orderNextPrompt').hide();
            });
            
                        $('#ordernext').click(function(){
            	            	checkInvoice();
            });
            
            $('#paynext').click(function(){
            	payorder();
            });
            
            $("#pay-close").click(function(){
	            $("#swaper").hide();
	        });
        });
    </script>
@endsection