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
            <li><a href="#successp" role="tab" data-toggle="tab"><b>3</b>支付</a><i></i></li>
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
																			<img src="{{$goods->main_image}}" />
																	</dt>
                                <dd class="pull-left">
                                    <p>{{$goods->spu_name}}</p>
                                    所选类型：{{$goods->gc_name}}
                                    <input type="hidden" id="productId" value="{{$goods->gid}}">
                                    <input type="hidden" id="packageId" value="{{$goods->gkid}}">
                                </dd>
                            </dl>
                            <div class="pull-left baob-list-right">
                                <p id="totalPrice" class="pull-right baob-list-price price-yen">&yen;{{$goods->price}}</p>
                                <div class="pull-right baob-list-num ">
                                    <div class="buy-btn">
										<input type="hidden" id="specProdId" value="" >
																					<button onclick="subBuyNum()"><img src="/picture/minus.png" /></button>
                                            <input id="buyNum" type="text" value="1" onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}" onafterpaste="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'0')}else{this.value=this.value.replace(/\D/g,'')}" />
                                            <button onclick="addBuyNum()"><img src="/picture/add.png" /></button>
										                                    </div>
                                </div>
								<input id="packagePrice" type="text" value="399.0" style="display:none" />
                                <p class="pull-right baob-list-dj price-yen-dj">
																			&yen;{{$goods->price}}
																	</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- <div class="buy-form">
                    <p class="baob-title">联系人信息</p>
                    <div class="pull-left buy-name"><input id="contactName" value="15010321498" type="text" placeholder="您的姓名（选填）"></div>
                    <div class="pull-left buy-phone">
                        <input id="contactPhone" value="15010321498" type="text" placeholder="请输入手机号（必填）">
                    </div>
                </div> -->
                <div class="fap-infor">
                    <p class="baob-title">发票信息</p>
                    <ul class="fap-list" id="fapList">
                        <li onclick="changeInvoiceType(0)" class="select" data-toggle="nofap">暂不开具<b><img src="/picture/tcselected.png" alt=""></b></li>
                        <li onclick="changeInvoiceType(1)" data-toggle="putfap">普通发票<b><img src="/picture/tcselected.png" alt=""></b></li>
                        <li onclick="changeInvoiceType(2)" data-toggle="zhuanyfap">增值税专用发票<b><img src="/picture/tcselected.png" alt=""></b></li>
                    	<input type="hidden" id="invoiceType" value="0"/>
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
                    <a href="javascript:void(0)" data-id="orderPay" class="caClass"  id="addOrder" traceflag="content_tab_订单结算下一步">下一步</a>
                    <span>享受高质量服务，比其他渠道便宜20%以上</span>
                </div>
            </div>
        </div>
    </div>
    <div id="errorPromptDiv" class="buySureShadow" style="display:none">
        <div class="inner">
            <b id="errorClose" class="suc-closed"><img src="/picture/des-closed.png" alt=""/></b>
            <div class="buySure-title"><b><img src="/picture/jgicon.png" /></b><span id="errorTitle">抱歉，请填入需要的信息！</span></div>
            <p id="errorDesc" class="workTime">您的信息添加有误，请确认。</p>
            <div id="" class="errorSure">
                <a id="error_none">确定</a>
            </div>
        </div>
    </div>
        
	<script src="/js/xslider.js"></script>

	<script type="text/javascript" src="/js/monitor.js"></script>    <script>
        $(function(){
        	$('#buyTap li:eq(0) a').tab('show');

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

        $('#addOrder').click(function(){
            var spuId = $('#productId').val();
            var packageid = $('#packageId').val();
            var num = $('#buyNum').val();
            //提交发票
            var fap = $('#invoiceType').val();
            if(fap ==1){
                var status_a = checkInvoice_a();
                if(status_a ==true){
                    //checkInvoice_a();//验证发票
                    var putTitle = $('#putTitle').val();    //发票抬头
                    var putIdentifyNo = $('#putIdentifyNo').val();//识别号
                    var putReceiver = $('#putReceiver').val();  //收件人
                    var putPhone = $('#putPhone').val();    //手机号
                    var putAddress = $('#putAddress').val();    //收件地址
                    var data_a = {
                        putTitle:putTitle,
                        putIdentifyNo:putIdentifyNo,
                        putReceiver:putReceiver,
                        putPhone:putPhone,
                        putAddress:putAddress
                    };
                    $.ajax({
                        url: "/member/invoice_a",
                        type: "post",
                        data: data_a,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            console.log(data);
                            if(data > 0){
                                window.location.href= '/member/addOrder?spuId='+spuId + '&skuId='+packageid + '&num=' + num + '&invo_id=' + data;
                            }
                        }
                    });
                }


            }else if(fap ==2){
                var status_b = checkInvoice_b();
                if(status_b ==true){
                    //checkInvoice_b();//验证增值税发票
                    var zhuanTitle = $('#zhuanTitle').val();    //发票抬头
                    var zhuanIdentifyNo = $('#zhuanIdentifyNo').val();//识别号
                    var zhuanRegAddr = $('#zhuanRegAddr').val();  //注册地址
                    var zhuanRegPhone = $('#zhuanRegPhone').val();    //注册电话
                    var zhuanBank = $('#zhuanBank').val();    //开户银行
                    var zhuanAccount = $('#zhuanAccount').val();    //银行账户
                    var zhuanReceiver = $('#zhuanReceiver').val();  //收件人
                    var zhuanPhone = $('#zhuanPhone').val();    //手机号
                    var zhuanAddress = $('#zhuanAddress').val();    //收件地址
                    var data_b = {
                        zhuanTitle:zhuanTitle,
                        zhuanIdentifyNo:zhuanIdentifyNo,
                        zhuanRegAddr:zhuanRegAddr,
                        zhuanRegPhone:zhuanRegPhone,
                        zhuanBank:zhuanBank,
                        zhuanAccount:zhuanAccount,
                        zhuanReceiver:zhuanReceiver,
                        zhuanPhone:zhuanPhone,
                        zhuanAddress:zhuanAddress,
                    }
                    $.ajax({
                        url: "/member/invoice_b",
                        type: "post",
                        data: data_b,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            console.log(data);
                            if(data > 0){
                                window.location.href= '/member/addOrder?spuId='+spuId + '&skuId='+packageid + '&num=' + num + '&invo_id=' + data;
                            }
                        }
                    });
                }
            }else{
                window.location.href= '/member/addOrder?spuId='+spuId + '&skuId='+packageid + '&num=' + num;
            }

           /* window.location.href="/member/showOrder?spuId=4&skuId=1"
           var url = '/member/addOrder?spuId=4&skuId=1';
            $.get(url, function(result){
                if(result['code']){
                    alert('下单失败,商品数据有误,请重新选择');
                }else{
                    alert('下单成功,请立即支付');
                    window.location.href="/member/showOrder";
                }
            });
            alert(111)*/
        })


    </script>
@endsection