@extends('welcome')

@section('title','会员订单')

@section('css')
	<link rel="stylesheet" href="{{asset('css/orderlist.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}"/>
	<script src="{{asset('js/popup.js')}}"></script>
	<script src="{{asset('js/swiper-4.2.6.min.js')}}"></script>
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
				<dd>
					@if(!empty(Cache('phone')))
					<p>{{Cache('phone')}}</p>
					@else
						<p>您未登陆</p>
					@endif
					<a class="publish-header publish-header-icon user-hed pull-left color-theme" style="margin-left: 25px;"  href="/member/getMember" target="_blank" >&nbsp;&nbsp;&nbsp;&nbsp;账号设置<i></i></a>
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
				@foreach($order as $v)
				<div class="order-all onlyassess">
					<ul class="common-top">
						<li class="pull-left cmt-list">{{$v->created_at}}</li>
						<li class="pull-left cmt-list">订单号: {{$v->order_sn}}</li>
						<li class="pull-right tousu"><b class="caClass" traceflag="content_pop_订单投诉" id="{{$v->id}}" onclick="javascript:toComplain('O201810081201574884445','29865');"></b></li>
					</ul>
					<div class="common-con">
						<ul >
							<li class="pull-left cm-list ">
								<dl class="cm-list-prodl">
									<a href="/product/387.htm" target="论坛推广/贴吧推广/贴吧营销/手工发帖"><dt class="pull-left"><img alt="" src="{{$v->main_image}}"></dt>
										<dd class="pull-left"><p>
												{{$v->spu_name}}
											</p></dd></a>
								</dl>
							</li>
							<li class="pull-left order-secmid"><span>{{$v->gc_name}}</span></li>
							<li class="pull-left order-secmid">
									<span>
																			    										价格：{{$v->order_amounts}}元
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
							<li  @if($v->plat_order_state==1) style="color:red;" @endif>
								<i ></i>
								资金待托管
								<span></span>
							</li>
							<li @if($v->plat_order_state==2) style="color:red;" @endif>
								<i></i>
								服务商工作
								<span></span>
							</li>
							<li @if($v->plat_order_state==3) style="color:red;" @endif>
								<i></i>
								服务验收
								<span></span>
							</li>
							<li @if($v->plat_order_state==4) style="color:red;" @endif>
								<i></i>
								服务评价
								<span></span>
							</li>
						</ul>
					</div>
				</div>
			@endforeach
				<div style="width: 938px;text-align:right;">
					{{$order->links()}}
				</div>

				<!--订单信息 end-->
			</div>            </div>
	</div>
</div>
	<!--	下线通知---弹窗	-->
<div class="maskAlert maskAlertKnow" style="/* display: none; */">
	<div class="maskAlertMain">
		<img onclick="closeMask()" class="closeMask" src="/picture/closed-gray.png" alt="">
		<div class="maskTitle">
			提示
		</div>
		<div class="tips">
			非常抱歉，您所购买的产品已下线，详情<br/>请咨询010-53526642
		</div>
		<div class="buttonGroup">
			<span id="Ikown" onclick="closeMask()">知道了</span>
		</div>
	</div>
</div>
<a id="toorderdet" href="" target="" style="display:none"></a>



@endsection