@extends('welcome')

@section('title','密码修改')

@section('css')
	<link rel="stylesheet" href="{{asset('css/orderlist.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<script src="{{asset('js/popup.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/changepwd.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.form.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/member_pwd.js')}}"></script>
@endsection

@section('content')
<style>
	.ger-right{
		margin-left: 11px;
	}
	.change-submit{
		margin-left: 190px;
	}
</style>
@include('./common/member_search')
@include('./common/right')
@include('./common/poper')

<div class="container-fluid orderList">
        <ul id="orderList" class="container">
            <li class="pull-left caClass active" traceflag="menu_tab_我是雇主" data-id="01" id="tab0">我是雇主</li>
        </ul>
</div>
<div id="userCenter" class="container order-detalis">
    <div id="order_l02">
    	<div class="container changepwd-div">
    		<ul class="changepwd-left">
    			<li data-id="changeInfo" onclick="window.open('/member/getMember')"><b></b>个人资料</li>
    			<li data-id="changePwd" class="lib"><b></b>修改密码</li>
    		</ul>
    		<div class="changepwd-right">
    			<div  id="changePwd">
    				<form id="change-submit-form" >
    					<div class="confirm-pwd-title">
    						<p class="confirm-pwd"><span style="display:inline-block;width:79px;text-align:right;">修改密码</span></p>
    					</div>
    					<style>
							.ger-left{
								color: #666;
							}
							.change-list > div:not(:first-child){
								margin-top: 0;
							}
						</style>
    					<div class="change-list">
    							<div>
    								<p class="ger-left">密码：</p>
    								<div class="ger-right form-list">
    									<input type="password" tabindex="" id="newPwd" name="newPwd"  placeholder="请输入新的登录密码">
    									<span class="prompt" id="mobileTip" style="display:none;">请输入密码</span>
    								</div>
    							</div>
    							<div>
    									<p class="ger-left">密码：</p>
    									<div class="ger-right form-list">
    										<input type="password" tabindex="" id="newPwd2" name="newPwd2"  placeholder="请再输入一次密码">
    										<span class="prompt" id="mobileTip2" style="display:none;">两次输入的密码不一致，请重试</span>
    									</div>
    							</div>
    					</div>
    					<a onclick="changePwds();" class="change-submit caClass">提交</a>
    				</form>
    			</div>
    		</div>
    	</div>
    		<div id="pwdSuccess" class="pwd-success" style="display:none;">
    			<div class="suc-img">
                    <img src="/picture/pwdsuccess.png" alt=""/>
                    <p>密码修改成功</p>
    			</div>
    			<div class="success_anniu">
    				<button class="success_button" type="button" onclick="toHome();">返回首页（<span id="countNum">5</span>s） </button>
    			</div>
    		</div>
    </div>
</div>
@endsection
