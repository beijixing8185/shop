<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="renderer" content="webkit">
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>注册页</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/common.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/login.js')}}"></script>
	<!--[if lt IE 9]>
	<script src="{{asset('js/html5shiv.min.js')}}"></script>
	<script src="{{asset('js/respond.min.js')}}"></script>
	<![endif]-->
</head>
<body>
<div class="container-fluid regist">
	<ul class="container login-top">
		<li class="pull-left"><a href="/" id="login_logo"></a></li>
		<!--<li class="pull-left welcome">欢迎注册</li>-->
	</ul>
	<div id="login_wrapper">
		<div class="container">
			<div class="linkMask">
				<a href=""></a>
			</div>
			<div class="regist_contains">
				<div class="register-top">
					<p><span>账号注册</span></p>
				</div>

				<div id="fast_login">
					<form action="" id="fastLoginForm" method="post">
						<div class="reg-prompt" style="display:none;">
							<img src="/picture/error1.png" />
							<span  class="prompt" id="mobileTip" style="display:none;">请输入密码</span>
						</div>
						<div class="regist-list">
							<input type="text" id="mobile" name="userName" placeholder="请输入手机号码">
							<div class="reg-prompt" style="display:none;" id ="mobileErrorDiv">
								<img src="/picture/error1.png" />
								<span id="mobileTip">请输入手机号</span>
							</div>
						</div>
						<div class="regist-list">
							<input type="password"  id="pwd" name="pwd" placeholder="请输入密码">
							<div class="reg-prompt" style="display:none;">
								<img src="/picture/error1.png" />
								<span id="pwdError" >请输入密码</span>
							</div>
						</div>

						<div id="o-authcode">
							<input type="text" name="graphAuthCode" class="shuju" id="login_verify" placeholder="请输入图形验证码">
							<img src="{{ URL('login/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff8" border="0">
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
						<button type="button" class="btn-register caClass" id="regButton" traceflag="content_submit_同意协议并注册">同意协议并注册</button>
						<div class="headline">
							<p class="xieyi"><a target="_blank" href="/regist/help.html"><em>《服务协议》</em></a></p>
							<a href="{{url('login/index')}}" rel="nofollow">已有账号？<span>请登录</span></a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    function re_captcha() {
        $url = "{{ URL('login/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff8').src=$url;
    }
</script>
@include('./common/common_footer')
</body>
</html>