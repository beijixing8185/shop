<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
	<meta charset="UTF-8">
	<title>登录页</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/login.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/common.js')}}"></script>

	<!--[if lt IE 9]>
	<script src="/js/html5shiv.min_2.js"></script>
	<script src="/js/respond.min_2.js"></script>
	<![endif]-->

</head>
<body>
<div class="container-fluid">
	<ul class="container login-top">
		<li class="pull-left"><a href="/" id="login_logo"></a></li>
		<!--<li class="pull-left welcome">欢迎登录</li>-->
	</ul>
	<div id="login_wrapper">
		<div class="container">
			<div class="linkMask">
				<a href=""></a>
			</div>
			<div class="login_contains">

				<div id="tab">
					<!--<b class="top-img"><img src="/picture/login05.png" /></b>-->
					<ul class="switcher">
						<li class="cur caClass" id="fastLoginLi" traceflag="content_tab_手机动态登录（页签）">手机动态登录</li>
						<li id="loginLi" class="caClass" traceflag="content_tab_账户登录（页签）">账户登录</li>
						<div class="clearfix"></div>
					</ul>
					<!-- 快速登录 -->
					<div id="login_fast" class="tab_form">
						<form action="" id="fastLoginForm" method="post">
							<span id="errorTip" class="prompt"></span>
							<input type="hidden" name="loginType" value="6">
							<div class="form-list">
								<input type="text" name="userName" placeholder="请输入手机号">
								<span class="prompt" id="mobileTip">请输入正确手机号</span>
							</div>
							<div id="o-authcode">
								<input type="text" name="graphAuthCode" class="shuju" placeholder="请输入图形验证码">
								<img src="{{ URL('login/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0">
								<a href="javascript:void(0)" onclick="javascript:re_captcha();"></a>
								<div class="clearfix"></div>
								<span class="prompt" id="graphAuthCodeTip">请输入图形验证码</span>
							</div>
							<div id="verify_code">
								<input type="text" id="mobileCode" name="mobileCode" class="shuju getCode" placeholder="请输入验证码">
								<input type="button" id="getPhoneCode" class="btn-phonecode"  value="获取验证码">
								<div class="clearfix"></div>
								<span class="prompt" id="mobileCodeTip">请输入验证码</span>
							</div>
							<div id="code" class="code"></div>
							<button type="button" class="btn-register caClass" id="fastLoginBtn" traceflag="content_submit_快捷登录">快捷登录</button>
							<a href="{{url('login/register')}}" class="free">免费注册</a>
						</form>
					</div>
					<!-- 登录 -->
					<div id="account_login" class="tab_form">
						<form action="/login/login.htm"  id="loginForm" method="post">
							<span id="errorTip" class="prompt"></span>
							<input type="hidden" name="loginType" value="1">
							<div class="form-list">

								<input type="text" name="userName" placeholder="输入注册用户名/手机号">
								<span class="prompt" id="userNameTip">输入注册用户名/手机号</span>
							</div>
							<div class="form-list">
								<input type="password" id="password" name="password" placeholder="请输入密码">
								<span class="prompt" id="passwordTip">请输入密码</span>
							</div>
							<div id="o-authcode">
								<input type="text" name="graphAuthCode" class="shuju" id="login_verify" placeholder="请输入图形验证码">
								<img src="{{ URL('login/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff7" border="0">
								<a href="javascript:void(0)" onclick="javascript:re_captcha();"></a>
								<div class="clearfix"></div>
								<span class="prompt" id="graphAuthCodeTips">请输入图形验证码</span>
							</div>
							<button type="button" class="btn-login caClass" id="loginBtn" traceflag="content_submit_立即登录">立即登录</button>
							<a href="{{url('login/register')}}" class="free">免费注册</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    function re_captcha() {
        $url = "{{ URL('login/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
        document.getElementById('c2c98f0de5a04167a9e427d883690ff7').src=$url;
    }
</script>
@include('./common/common_footer')
</body>
</html>