

@extends('welcome')

@section('title','会员订单')

@section('css')
	<link rel="stylesheet" href="{{asset('css/orderlist.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<script src="{{asset('js/popup.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/changepwd.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.form.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/member_pwd.js')}}"></script>
	<script src="{{asset('js/ordermanager.js')}}"></script>
	<script src="{{asset('js/myorder.js')}}"></script>
	<script src="{{asset('js/isemployer.js')}}"></script>
	<script src="{{asset('js/myevaluate.js')}}"></script>
	<script src="{{asset('js/complain.js')}}"></script>
@endsection

@section('content')

	@include('./common/member_search')
	@include('./common/right')
	@include('./common/poper')
	<div class="container-fluid orderList">
		<ul id="orderList" class="container">
			<li class="pull-left caClass active" traceflag="menu_tab_我是雇主" data-id="01" id="tab0">我是雇主</li>
		</ul>
	</div>


<div id="userCenter" class="container order-detalis">
	<div id="order_l01">
		<div class="em-left pull-left">

			<dl>
				<dt>
					<img src="/picture/rwu.png" alt=""/>
				</dt>
				<dd> <p>15010321498</p>
					<a class="publish-header publish-header-icon user-hed pull-left color-theme"  href="/useraccount/userInfoEdit.htm" target="_blank" >账号设置<i></i></a>
				</dd>
			</dl>
			<div class="my-order">
				<p><img src="/picture/icon01.png" alt="交易中心"/>交易中心</p>
				<ul id="or-mold" class="or-mold">
					<li  class="or-mold  active"  onclick="javascript:evaliclick(1);">我的订单</li>
				</ul>

				<p><img src="/picture/icon02.png" alt="交易中心"/>评价管理</p>
				<ul class="storeList or-mold" id="storeList">
					<li  onmouseover="evalimouseover(this);" onmouseout="evalimouseout(this);" onclick="javascript:evaliclick(2);" id="evali1" litxt="待评价">待评价</li>
					<li  onmouseover="evalimouseover(this);" onmouseout="evalimouseout(this);" onclick="javascript:evaliclick(3);" id="evali2" litxt="已评价">已评价</li>
				</ul>
				<p><img src="/picture/icon03.png" alt="交易中心">资金管理</p>
				<ul class="storeList or-mold" id="storeList1">
					<!--<li  onmouseover="evalimouseover(this);" onmouseout="evalimouseout(this);" onclick="javascript:evaliclick(4);" id="evali1" litxt="我的镖狮币">我的镖狮币</li>-->
					<li  onmouseover="evalimouseover(this);" onmouseout="evalimouseout(this);" onclick="javascript:evaliclick(5);" id="evali2" litxt="我的镖狮币">我的镖狮币</li>
				</ul>

				<p><img src="/picture/icon04.png" alt="交易中心">推荐有好礼</p>
				<ul class="storeList or-mold" id="storeList1">
					<li  onmouseover="evalimouseover(this);" onmouseout="evalimouseout(this);" onclick="javascript:evaliclick(6);" id="evali1" litxt="代发需求">代发需求<i>有礼</i></li>
					<li  onmouseover="evalimouseover(this);" onmouseout="evalimouseout(this);" onclick="javascript:evaliclick(7);" id="evali2" litxt="代发记录">代发记录</li>
				</ul>
			</div>
		</div>
		<div class="em-right pull-right">
			<div id="myOrder">
				<style>
					.order-bottom-prd ul li strong{
						display: none;
						color: red;
						margin-top: 5px;
					}
				</style>
				<p class="sc-title ordeclass orderType0  orderType1  orderType2 orderType3  orderType4  orderType5  orderType6 ">
					我的订单
				</p>
				<!--订单信息 begin-->
				<!--订单基础信息,map-->
				<div class="order-all onlyassess">
					<ul class="common-top">
						<li class="pull-left cmt-list">2018-10-08 12:01:57</li>
						<li class="pull-left cmt-list">订单号: O201810081201574884445</li>
						<li class="pull-right tousu"><b class="caClass" traceflag="content_pop_订单投诉" id="zxzxO201810081201574884445" onclick="javascript:toComplain('O201810081201574884445','29865');">投诉</b></li>
					</ul>
					<div class="common-con">
						<ul >
							<li class="pull-left cm-list ">
								<dl class="cm-list-prodl">
									<a href="/product/387.htm" target="论坛推广/贴吧推广/贴吧营销/手工发帖"><dt class="pull-left"><img alt="" src="/picture/loadimage.htm"></dt>
										<dd class="pull-left"><p>
												论坛推广/贴吧推广/贴吧营销/手工发帖
											</p></dd></a>
								</dl>
							</li>
							<li class="pull-left order-secmid"><span>文案+渠道执行版</span></li>
							<li class="pull-left order-secmid">
									<span>
																			    										价格：400元
    																											</span>
							</li>
							<li class="pull-right order-seclast">
								<div>
									<!--未关闭订单-->
									<!--判断是否标品 begin-->
									<!--标品 begin-->
									<a  style="width:135px"  class="btn-a" href="javascript:checkOrderProd(29865,387)">支付（服务资金托管）</a>
									<!--标品 end-->
									<!--判断是否标品 end-->
								</div>
							</li>
						</ul>
					</div>
					<div class="order-bottom-prd">
						<b></b>
						<ul>
							<li>
								<i></i>
								资金待托管
								<span></span>
							</li>
							<li>
								<i></i>
								服务商工作
								<span></span>
							</li>
							<li>
								<i></i>
								服务验收
								<span></span>
							</li>
							<li>
								<i></i>
								服务评价
								<span></span>
							</li>
						</ul>
					</div>
				</div>
				<!--订单信息 end-->
			</div>            </div>
	</div>
</div>
<style>

</style>
<div id="tsShadow" class="tsShadow" style="display: none">
	<input type="hidden" id="orderNo" value=""/>
	<input type="hidden" id="orderId" value=""/>
	<div class="tsInner">
		<p>投诉
			<b data-toggle="closed"><img src="/picture/des-closed.png" alt=""/></b>
		</p>
		<div class="ts-list" id="spwork">
			<h6><i style="color:#ff4400;">*</i>您要投诉的对象是？</h6>
			<p id="spworkTap"><span>服务商</span><span>镖狮网</span></p>
			<ul id="showQuestion">
			</ul>
		</div>

		<div class="tsArea">
			<h6><i style="color:#ff4400;">*</i>您要投诉的内容是？</h6>
			<textarea cols="30" rows="4" id="complain" placeholder="我想投诉，因为......"></textarea>
		</div>

		<div class="tsAn">
			<a style="background-color: #ffda44;border-color:#ffda44;" href="javascript:complain();" class="caClass" traceflag="pop_submit_确认投诉" id="confirmComplain">确认</a>
			<a style="background-color: #fff;border-color:#eee;" class="quxiao caClass" traceflag="pop_close_取消投诉" id="cancleComplain">取消</a>
		</div>
		<div class="tsSm">您的投诉我们很重视，镖狮工作人员将在24小时内与您联系</div>
	</div>
</div>
<div class="maskAlert maskAlertKnow" style="/* display: none; */">
	<div class="maskAlertMain">
		<img onclick="closeMask()" class="closeMask" src="/picture/closed-gray.png" alt="">
		<div class="maskTitle">
			提示
		</div>
		<div class="tips">
			非常抱歉，您所购买的产品已下线，详情<br/>请咨询4000-581-581
		</div>
		<div class="buttonGroup">
			<span id="Ikown" onclick="closeMask()">知道了</span>
		</div>
	</div>
</div>
<a id="toorderdet" href="" target="" style="display:none"></a>



@endsection