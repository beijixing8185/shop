
@extends('welcome')

@section('title','会员中心')

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

@include('./common/member_search')
@include('./common/right')
@include('./common/poper')

<div class="container-fluid orderList">
        <ul id="orderList" class="container">
            <li class="pull-left active caClass" traceflag=""menu_tab_我是雇主" data-id="01" id="tab0">我是雇主</li>
        </ul>
</div>
<style>
	.ger-right{
		margin-left: 11px;
	}
	.change-submit{
		margin-left: 190px;
	}
</style>

<div id="userCenter" class="container order-detalis">
    <div id="order_l02">
    	
    	<div class="container changepwd-div">
    		<ul class="changepwd-left">
    			<li data-id="changeInfo"  class="lib"><b></b>个人资料</li>
    			<li data-id="changePwd" onclick="window.open('/useraccount/pwdEdit.htm','_self')"><b></b>修改密码</li>
    		</ul>
    		<div class="changepwd-right">
    			<div id="changeInfo" >
    				<div class="confirm-pwd-title" style="margin-bottom: 10px;">
    					<p class="confirm-pwd"><span style="display:inline-block;width:79px;text-align:right;">个人资料</span></p>
    				</div>
    				<div class="change-list">
    						<div>
    							<form id="company-form">
    							<p class="ger-left">当前头像：</p>
    							<div class="ger-right">
									<div class="phone-img">
																					<img id="upload1_img" style="width:100%" src="/picture/rwu.png">
																				<p>修改头像<input onchange="prepareupload(this)" type="file" class="displaynone-input need_set"name="spLicenceImg1" id="_spLicence" accept="image/*" fn="spLicenceImg1" ft="1" fe="upload1_fail_desc" fu="upload1_img" fbu="''"></p>
									</div>
									<input type="hidden" name="userImage"  id="_imgPath1" value=""/>
									<span class="photo-ts">图片格式JPEG，png，建议尺寸200*200，不大于4M</span>
    							</div>
    							</form>
    							</div>
    							<div style="margin-bottom: 10px;">
    								<p class="ger-left">用户名：</p>
    								<div class="ger-right">
    										<p class="padding-jl"></p>
    								</div>
    							</div>
    							<div>
    								<p class="ger-left">昵称：</p>
    								<div class="ger-right form-list">
    									<input type="text" tabindex=""  name="nickName"  placeholder="昵称" value="">
    								</div>
    							</div>
    							<div>
    								<p class="ger-left">姓名：</p>
    								<div class="ger-right form-list">
    									<input type="text" tabindex=""  name="name"  placeholder="请输入您的姓名" value="">
    								</div>
    							</div>
    							<div>
    								<p class="ger-left">QQ号：</p>
    								<div class="ger-right form-list">
    									<input type="text" tabindex="" name="qq"  placeholder="QQ" value="">
    								</div>
    							</div>
    							<div>
    								<p class="ger-left">微信：</p>
    								<div class="ger-right form-list">
    									<input type="text" tabindex="" name="weChat"  placeholder="微信" value="">
    								</div>
    							</div>
    							<div>
    								<p class="ger-left">邮箱：</p>
    								<div class="ger-right form-list">
    									<input type="text" tabindex="" name="email"  placeholder="邮箱" value="">
    								</div>
    							</div>
    					</div>
    					<a onclick="javascript:updateUser();" class="change-submit caClass" traceflag="content_submit_个人资料保存" id="userinfosubmit">保存</a>
    			</div>
    		</div>
    	</div>
    </div>
</div>


@endsection