
$(function(){
	//账号登录
	$($("#loginForm").find("input[name='userName']")[0]).keyup(function(){
		$("#userNameTip").hide();
		$($("#loginForm").find("input[name='userName']")[0]).css("border", "1px solid #e1e1e1");
	});

	$($("#loginForm").find("input[name='password']")[0]).keyup(function(){
		$("#passwordTip").hide();
		$($("#loginForm").find("input[name='password']")[0]).css("border", "1px solid #e1e1e1");
	});

	$($("#loginForm").find("input[name='graphAuthCode']")[0]).keyup(function(){
		$($("#loginForm").find("span[id='graphAuthCodeTip']")).text("").hide();
		$($("#loginForm").find("input[name='graphAuthCode']")[0]).css("border", "1px solid #e1e1e1");
	});

	$("#loginBtn").click(function() {
		$($("#loginForm").find("span[id='errorTip']")).text("").hide();
		$("#userNameTip").hide();
		$("#passwordTip").hide();

		$($("#loginForm").find("input[name='userName']")[0]).css("border", "1px solid #e1e1e1");
		$($("#loginForm").find("input[name='password']")[0]).css("border", "1px solid #e1e1e1");
		$($("#loginForm").find("input[name='graphAuthCode']")[0]).css("border", "1px solid #e1e1e1");

		$($("#loginForm").find("span[id='graphAuthCodeTip']")).hide();
		var userName = $($("#loginForm").find("input[name='userName']")[0]).val().trim();
		var password = $($("#loginForm").find("input[name='password']")[0]).val().trim();
		var graphAuthCode = $($("#loginForm").find("input[name='graphAuthCode']")[0]).val().trim();
		if(userName == ""){
			$("#userNameTip").show();
			$($("#loginForm").find("input[name='userName']")[0]).css("border", "1px solid #ff3f3f");
			return;
		}
		if(password == ""){
			$("#passwordTip").show();
			$($("#loginForm").find("input[name='password']")[0]).css("border", "1px solid #ff3f3f");
			return;
		}
		if(graphAuthCode == ""){
			$($("#loginForm").find("span[id='graphAuthCodeTip']")).text("请输入图形验证码").show();
			$($("#loginForm").find("input[name='graphAuthCode']")[0]).css("border", "1px solid #ff3f3f");
			return;
		}
        //图形验证码
        var captcha = $("#login_verify").val();
        var validate_captcha = verify(captcha);
        if(validate_captcha ==true){
            loginPwd(userName,password);
        }else{
            $('#graphAuthCodeTips').text('图形验证码有误');
            $('#graphAuthCodeTips').css('display','block');
        }
		//var loginType= $($("#loginForm").find("input[name='loginType']")[0]).val();

	});

	//快速登录
	$($("#fastLoginForm").find("input[name='userName']")[0]).keyup(function(){
		$("#mobileTip").hide();
		$($("#fastLoginForm").find("input[name='userName']")[0]).css("border", "1px solid #e1e1e1");
	});

	$($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).keyup(function(){
		$($("#fastLoginForm").find("span[id='graphAuthCodeTip']")).text("").hide();
		$($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).css("border", "1px solid #e1e1e1");
	});

	$("#mobileCode").keyup(function(){
		$("#mobileCodeTip").text("").hide();
		$($("#fastLoginForm").find("input[name='mobileCode']")[0]).css("border", "1px solid #e1e1e1");
	});

	$("#getPhoneCode").click(function(){
		var mobile = $($("#fastLoginForm").find("input[name='userName']")[0]).val().trim();

		var mobilereg = isMobilePhoneNo(mobile);
		if (!mobilereg) {
			$("#mobileTip").show();
			$($("#fastLoginForm").find("input[name='userName']")[0]).css("border", "1px solid #ff3f3f");
			return;
		}

		var graphAuthCode = $($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).val().trim();
		if (graphAuthCode == '') {
			$("#graphAuthCodeTip").show();
			$($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).css("border", "1px solid #ff3f3f");
			return;
		}

		//图形验证码
        var captcha = $("input[name='graphAuthCode']").val();
		var validate_captcha = verify(captcha);
		if(validate_captcha ==true){
			var validate_lsm = lsmSms(mobile);
			if(validate_lsm == true){
                time($(this));
			}
		}else{
            $('#graphAuthCodeTip').css('display','block');
            $('#graphAuthCodeTip').text('图形验证码有误');
		}
	});

    /**
	 * 快捷登陆
     */
	$("#fastLoginBtn").click(function() {
		$($("#fastLoginForm").find("span[id='errorTip']")).text("").hide();
		$($("#fastLoginForm").find("span[id='graphAuthCodeTip']")).hide();
		$("#mobileCodeTip").hide();

		$($("#fastLoginForm").find("input[name='userName']")[0]).css("border", "1px solid #e1e1e1");
		$($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).css("border", "1px solid #e1e1e1");
		$($("#fastLoginForm").find("input[name='mobileCode']")[0]).css("border", "1px solid #e1e1e1");

		var userName = $($("#fastLoginForm").find("input[name='userName']")[0]).val().trim();
		var graphAuthCode = $($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).val().trim();
		var mobileCode = $($("#fastLoginForm").find("input[name='mobileCode']")[0]).val().trim();

		var mobilereg = isMobilePhoneNo(userName);
		if (!mobilereg) {
			$("#mobileTip").show();
			$($("#fastLoginForm").find("input[name='userName']")[0]).css("border", "1px solid #ff3f3f");
			return;
		}
		if(graphAuthCode == ""){
			$($("#fastLoginForm").find("span[id='graphAuthCodeTip']")).text("请输入图形验证码").show();
			$($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).css("border", "1px solid #ff3f3f");
			return;
		}
		if(mobileCode == ""){
			$("#mobileCodeTip").text("请输入验证码").show();
			$($("#fastLoginForm").find("input[name='mobileCode']")[0]).css("border", "1px solid #ff3f3f");
			return;
		}
		var loginType= $($("#fastLoginForm").find("input[name='loginType']")[0]).val();
		ajaxLogin(userName,mobileCode);
	});

    /**
	 * 注册页面登陆
     */
    $("#regButton").click(function() {
        $($("#fastLoginForm").find("span[id='errorTip']")).text("").hide();
        $($("#fastLoginForm").find("span[id='graphAuthCodeTip']")).hide();
        $("#mobileCodeTip").hide();

        $($("#fastLoginForm").find("input[name='userName']")[0]).css("border", "1px solid #e1e1e1");
        $($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).css("border", "1px solid #e1e1e1");
        $($("#fastLoginForm").find("input[name='mobileCode']")[0]).css("border", "1px solid #e1e1e1");

        var userName = $($("#fastLoginForm").find("input[name='userName']")[0]).val().trim();
        var graphAuthCode = $($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).val().trim();
        var mobileCode = $($("#fastLoginForm").find("input[name='mobileCode']")[0]).val().trim();
        var passwords = $('#pwd').val().trim();

        var mobilereg = isMobilePhoneNo(userName);
        if (!mobilereg) {
            $("#mobileTip").show();
            $($("#fastLoginForm").find("input[name='userName']")[0]).css("border", "1px solid #ff3f3f");
            return;
        }
        if (!passwords) {
            $("#pwdError").show();
            $($("#fastLoginForm").find("input[name='pwd']")[0]).css("border", "1px solid #ff3f3f");
            return;
        }
        if(graphAuthCode == ""){
            $($("#fastLoginForm").find("span[id='graphAuthCodeTip']")).text("请输入图形验证码").show();
            $($("#fastLoginForm").find("input[name='graphAuthCode']")[0]).css("border", "1px solid #ff3f3f");
            return;
        }
        if(mobileCode == ""){
            $("#mobileCodeTip").text("请输入验证码").show();
            $($("#fastLoginForm").find("input[name='mobileCode']")[0]).css("border", "1px solid #ff3f3f");
            return;
        }
        registerLogin(userName,passwords,mobileCode);
    });


	$('.switcher li').click(function(){
		$(this).addClass('cur').siblings().removeClass('cur');
		var index = $(".switcher li").index($(this));
		$(".tab_form").hide().eq(index).show();
	});

    /**
	 * 发送短信验证码
     */
    var resul;
    function lsmSms(mobile){
    //发送验证码
		$.ajax({
			url:'/common/lsmSms',
			type:'get',
			data:{phone:mobile},
			success:function (res) {
                if(res==1){
                    resul = true;
                }
			},
		});
        return resul;
	}

    /**
	 * 发送图形验证码
     */
	function verify(captcha) {
        $.ajax({
            url:'/login/verify_img',
            type:'get',
			async:false,
            data:{captcha:captcha},
            success:function (res) {
                if(res==1){
                    resul = true;
                }
            }
        });
		return resul;
    }

    /**
	 * 密码登陆
     * @param phone
     * @param password
     */
	function loginPwd(phone,password) {
        $.ajax({
            url:'/login/login_pwd',
            type:'post',
            data:{phone:phone,password:password},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function (res) {
            	console.log(res);
                if(res == true){
                    window.location.href='/';
                }else{
                    alert('请核对您的信息');
                }
            },
        })
	}

    /**
	 * 注册登陆
     */
	function registerLogin(phone,passwords,code) {
        $.ajax({
            url:'/login/register_login',
            type:'post',
            data:{phone:phone,password:passwords,code:code},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function (res) {
                if(res == 1){
                    window.location.href='/';
                }else if(res == 2){
                    alert('您已经是会员了，请登陆');
                }else{
                    alert('注册失败，请再试一次');
				}
            },
        })
    }
    /**
	 * 快捷登陆
     * @param phone
     * @param mobileCode
     */
	function ajaxLogin(phone,mobileCode){
        $.ajax({
            url:'/login/login',
            type:'post',
            data:{phone:phone,mobileCode:mobileCode},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function (res) {
                if(res == 1){
                    window.location.href=document.referrer;
                }else{
                    alert('请核对您的信息');
                }
            },
        })
	}


	var wait=120;
	$("#getPhoneCode").prop("disabled", false);
	function time(obj) {
		if (wait == 0) {
			$(obj).prop("disabled", false);
			$(obj).val("获取验证码");
			wait = 120;
		} else {
			$(obj).prop("disabled", true);
			$(obj).val(wait + "s后重新获取");
			wait--;
			setTimeout(function() {
				time(obj)
			},
				1000)
		}
	}
});


