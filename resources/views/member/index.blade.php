
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
            <li class="pull-left active caClass" traceflag="menu_tab_我是雇主" data-id="01" id="tab0">我是雇主</li>
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
@if(!empty($getMember))
<div id="userCenter" class="container order-detalis">
    <div id="order_l02">
    	
    	<div class="container changepwd-div">
    		<ul class="changepwd-left">
    			<li data-id="changeInfo"  class="lib"><b></b>个人资料</li>
    			<li data-id="changePwd" onclick="window.open('/member/member_pwd')"><b></b>修改密码</li>
    		</ul>
    		<div class="changepwd-right">
    			<div id="changeInfo" >
    				<div class="confirm-pwd-title" style="margin-bottom: 10px;">
    					<p class="confirm-pwd"><span style="display:inline-block;width:79px;text-align:right;">个人资料</span></p>
    				</div>
    				<div class="change-list">

    						<div>
    							<p class="ger-left">当前头像：</p>
    							<div class="ger-right">
									<div class="phone-img">
										@if(!empty($getMember['picture']))
											<img id="upload1_img" style="width:100%" src="{{$getMember['picture']}}">
										@else
											<img id="upload1_img" style="width:100%" src="/picture/rwu.png">
										@endif
											<p>修改头像
												<input multiple="multiple" {{--onchange="prepareupload(this)"--}} type="file" class="displaynone-input need_set"name="spLicenceImg1" id="inputfile">
											</p>
									</div>
									<div id="feedback">
									</div>
									<input type="hidden" name="userImage"  id="_imgPath1" value=""/>
									<span class="photo-ts">图片格式JPEG，png，建议尺寸200*200，不大于4M</span>
    							</div>

    							</div>
    							<div style="margin-bottom: 10px;">
    								<p class="ger-left">用户名：</p>
    								<div class="ger-right">
    										<p class="padding-jl">{{$getMember['mobile']}}</p>
    								</div>
    							</div>
    							<div>
    								<p class="ger-left">昵称：</p>
    								<div class="ger-right form-list">
    									<input type="text" tabindex=""  name="nickName" value="{{$getMember['username']}}">
    								</div>
    							</div>
    							<div>
    								<p class="ger-left">邮箱：</p>
    								<div class="ger-right form-list">
    									<input type="text" tabindex="" name="email" value="{{$getMember['email']}}">
    								</div>
    							</div>
    					</div>
    					<a onclick="javascript:updateUserInfo();" class="change-submit caClass">保存</a>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endif

@endsection