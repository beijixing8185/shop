
@extends('welcome')

@section('title','萤火虫搜索')

@section('css')
	<link rel="stylesheet" href="{{asset('css/result.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<script type="text/javascript" src="{{asset('js/common-header.js')}}"></script>
@endsection

@section('content')
	@include('./common/demand')
	@include('./common/nav')
	@include('./common/search')
	<script type="text/javascript">
        $(function(){
            var elem = $(".cursom").children().children();
            var height = 160;
            imgOnLoad(elem,height);
            function imgOnLoad(elem,h){
                elem.each(function(i,item){
                    if($(item).height() > $(item).width()){
                        $(item).css({"width":"auto","height":h,"text-align":"center"});
                    };
                    $(item).css("display","inline-block");
                });
            };
        });
	</script>
@if($customer->isNotEmpty() || $article->isNotEmpty())
	<div class="session container">
		<div class="aside-left pull-left">
			<div class="tab-content">
				<div id="pro" class="pro">
					<ul class="commen-ul">
						@if(!empty($article))
							@foreach($article as $val)
						<li>
							<b><img src="/picture/cp-l.png" alt=""/></b>
							<dl class="pull-left">
								<dt class="pull-left">
								<div class="cursom" >
									<a href="/goods/goodsDetail/{{$val['id']}}"  target="_blank" >
										<img src="{{$val['main_image']}}" alt=""/>
									</a>
								</div>

								</dt>
								<dd class="pull-left">
									<a class="title" href="/goods/goodsDetail/{{$val['id']}}" target="_blank">{{$val['spu_name']}}</a>
									<ul class="spList">
										<li><p class="pull-left">产品分类：</p>{{$val['gc_name']}}</li>
										{{--<li><p class="pull-left">服务周期：</p>3个月~1年</li>--}}
										<li><p class="pull-left">销售量：</p>{{$val['salen_num']}}</li>
										<li><p class="pull-left">市场价：</p>{{$val['market_price']}}</li>
									</ul>
									<p class="produce"></p>
								</dd>
							</dl>
							<div class="an-right pull-right">
								<span>¥ {{$val['price']}} </span>
								<a class="an-pro" href="/goods/goodsDetail/{{$val['id']}}" target="_blank">查看详情</a>
							</div>
						</li>
						@endforeach
						@endif
						@if(!empty($customer))
						@foreach($customer as $val)
						<li class="caseInfo">
							<b><img src="/picture/al-l.png" alt=""/></b>
							<dl class="pull-left">
								<dt class="pull-left ">
								<div class="cursom">
									<a href="/customer/detail/{{$val['id']}}" target="_blank">
										<img src="{{$val['picture']}}">
									</a>
								</div>
								</dt>
								<dd class="pull-left">
									<div class="title">
										<a class="pull-left" href="/customer/detail/{{$val['id']}}" target="_blank">{{$val['title']}}</a>

									</div>
									<ul class="spList">
										<li><p class="pull-left">客户名称：</p>{{$val['customer']}}</li>
										<li><p class="pull-left">客户花费：</p></li>
									</ul>
									<p class="produce">{{$val['description']}}</p>
								</dd>
							</dl>
							<div class="an-right pull-right">
								<a class="an-case" href="/customer/detail/{{$val['id']}}" target="_blank">查看详情</a>
							</div>
						</li>
						@endforeach
							@endif
					</ul>

				</div>
			</div>
		</div>


		<div class="aside-right pull-right">
			<div class="mfyy">
				<div class="aside-bg">
					<img src="/picture/aside-bg.png" alt=""/>
					<p>免费申请营销方案 <span>资深营销专家免费帮您出方案</span></p>
				</div>
				<div class="an-yy">
					<div>
						<input type="text" id="name" placeholder="您的称呼"/>
						<span></span>
					</div>

					<div>
						<input type="text" id="phone" placeholder="手机号码"/>
						<span id="mobile_error" style="display:none;">请输入正确的手机号码</span>
					</div>

					<div class="yzm">
						<input type="text" id="code" placeholder="短信验证码"/>
						<button id="getPhoneCode" class="caClass" traceflag="rightbar_vcode_获取验证码">点击获取</button>
						<span id="auth_error" style="display:none;">请输入正确的短信验证码</span>
					</div>
					<a class="caClass" traceflag="rightbar_fb_免费预约" onclick="javascript:cmsListsubmitLeadss();">免费预约</a>
				</div>
			</div>

			<div class="yxwz">
				<p>萤火虫服务，比任何渠道便宜20%以上；资金托管，服务监理，高于行业标准。</p>
				<dl>
					<dt class="pull-left"><img src="/picture/ser-icon01.png" alt=""/></dt>
					<dd class="pull-right">
						<p>不懂营销里的坑？</p>
						平台专业营销顾问，<br/>免费一对一帮你解疑惑。
					</dd>
				</dl>
				<dl>
					<dt class="pull-left"><img src="/picture/ser-icon02.png" alt=""/></dt>
					<dd class="pull-right">
						<p>不懂营销效果如何验收？</p>
						验收通过，<br/>服务商才能收到款。
					</dd>
				</dl>
				<dl>
					<dt class="pull-left"><img src="/picture/ser-icon03.png" alt=""/></dt>
					<dd class="pull-right">
						<p>怕被忽悠？ </p>
						“金牌服务商”为您保障
					</dd>
				</dl>
				<dl class="noBorder">
					<dt class="pull-left"><img src="/picture/ser-icon04.png" alt=""/></dt>
					<dd class="pull-right">
						<p>怕给了钱，质量没保障？ </p>
						平台监理，<br/>为您保障服务效果。
					</dd>
				</dl>
				<a id="" class="sxfw caClass" href="http://p.qiao.baidu.com/cps/chat?siteId=12314605&userId=25925415" traceflag="rightbar_pop_享受省心的营销服务">享受省心的营销服务</a>
			</div>
			<div class="zsewm">
				<p></p>
				<div>
					<img src="/picture/lion-weixin-new.jpg" />
					<p>扫码关注公众号</p>
				</div>
			</div>
		</div>
	</div>
	@else
	<div class="session-error container">
		<p>
			抱歉！没有找到<span>“{{$search}}”</span>相关的内容！<br>
			您可以在线咨询我们
		</p>
		<img src="/picture/reaultNull.png" alt="">
		<div class="fs">
			<a class="caClass"  href="http://p.qiao.baidu.com/cps/chat?siteId=12314605&userId=25925415">在线资咨询</a>
		</div>
	</div>
	@endif
	<script>
        var patt = /^1(3|4|5|7|8)\d{9}$/;
        var resul;
        function lsmSms(mobile){
            //发送验证码
            $.ajax({
                url:'/common/lsmSms',
                type:'get',
                async:false,
                data:{phone:mobile},
                success:function (res) {
                    if(res==1){
                        resul = true;
                    }
                },
            });
            return resul;
        }
        //留言
        function cmsListsubmitLeadss() {
            var name = $('#name').val();
            var phone = $('#phone').val();
            var code = $('#code').val();
            var content = '该留言的来源是/search/index';
            $.ajax({
                url:'/message/indexCode',
                type:'post',
                data:{name:name,phone:phone,code:code,content:content},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function (res) {
                    if(res==1){
                        alert('提交成功，稍后马上与您联系！');
                    }else if (res == -2){
                        $('#auth_error').text('输入的验证码不正确');
                        $('#auth_error').css('display','block');
                    }else{
                        alert('提交失败，稍后尝试');
                    }
                }
            });
        }
        //发送验证码
        $('#getPhoneCode').click(function () {
            var phoneCode = $('#phone').val();
            if(!patt.test(phoneCode)){
                $('#mobile_error').css('display','block');
                return false;
            }else {
                var validate_lsm = lsmSms(phoneCode);
                if(validate_lsm == true){
                    time($(this));
                }
            };
        });
        var wait=120;
        $("#getPhoneCode").prop("disabled", false);
        function time(obj) {
            if (wait == 0) {
                $(obj).prop("disabled", false);
                $(obj).val("获取验证码");
                wait = 120;
            } else {
                $(obj).prop("disabled", true);
                $(obj).text(wait + "s后重新获取");
                wait--;
                setTimeout(function() {
                        time(obj)
                    },
                    1000)
            }
        }
	</script>

@endsection