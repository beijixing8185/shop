
@extends('welcome')

@section('title','爆品专区')

@section('css')
	<link rel="stylesheet" href="{{asset('css/page.css')}}">
	<link rel="stylesheet" href="{{asset('css/strategy.css')}} "/>
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<link rel="stylesheet" href="{{asset('css/hotactive.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/news.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}"/>
	<script src="{{asset('js/swiper-4.2.6.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/common-header.js')}}"></script>
	<script src="{{asset('js/popup.js')}}"></script>
	<script src="{{asset('js/pop.js')}}"></script>
	<script src="/js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/common-auth.js"></script>
	<script type="text/javascript" src="/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="/js/jcarousel.connected-carousels.js"></script>
	<script type="text/javascript" src="/js/cmslist.js"></script>
	<script type="text/javascript" src="/js/monitor.js"></script>

@endsection

@section('content')


	@include('./common/demand')
	@include('./common/nav')
	@include('./common/search')
	@include('./common/right')
	@include('./common/poper')


	<!-- banner图 -->
	<div class="strategyBannerBox content">
		<div class="strategyBannerLeft">
			<a href="/cms/index.htm" target="_blank"><img src="/picture/banner01.png" alt="2018年微信朋友圈广告最新价格"></a>
		</div>
		<div class="strategyBannerRight">
			<div class="strategyBannerRightTop">
				<a href="/cms/cl79-cm56594-at764.htm" target="_blank"><img src="/picture/banner2.png" alt="如何进行微信平台的高级排版"></a><a href="/cms/cl77-cm56611-at781.htm" target="_blank"><img src="/picture/banner3.png" alt="一个网站一年要花多少钱"></a>
			</div>
			<div class="strategyBannerRightBottom">
				<a href="/cms/cl80-cm56430-at600.htm" target="_blank"><img src="/picture/banner4.png" alt="获取精准用户，达到最大转化"></a>
			</div>
		</div>
	</div>
	<!-- banner图结束 -->
	<!-- nav开始 -->
	<div class="strategyNav01 content" style="padding-bottom: 0;">
	</div>
	<div class="strategyNav content" style="padding-bottom: 0;">
		<ul>
			<li><h1><a class="current" href="/cmslist/cl0-pg1.htm">网络推广</a></h1></li>
			<li><a href="/cmslist/cl95-pg1.htm">镖狮原创</a></li>
			<li><a href="/cmslist/cl12-pg1.htm">微信营销</a></li>
			<li><a href="/cmslist/cl87-pg1.htm">营销百科</a></li>
			<li><a href="/cmslist/cl14-pg1.htm">SEM攻略</a></li>
			<li><a href="/cmslist/cl78-pg1.htm">SEO优化</a></li>
			<li><a href="/cmslist/cl88-pg1.htm">小程序</a></li>
			<li><a href="/cmslist/cl77-pg1.htm">APP推广</a></li>
			<li><a href="/cmslist/cl11-pg1.htm">互联网运营</a></li>
			<li><a href="/cmslist/cl86-pg1.htm">口碑营销</a></li>
			<li><a href="/cmslist/cl13-pg1.htm">开发建站</a></li>
			<li><a href="/cmslist/cl79-pg1.htm">文案写作</a></li>
			<li><a href="/cmslist/cl80-pg1.htm">活动策划</a></li>
			<li><a href="/cmslist/cl89-pg1.htm">品牌推广</a></li>
			<li><a href="/cmslist/cl90-pg1.htm">广告投放</a></li>
			<li><a href="/cmslist/cl91-pg1.htm">品牌公关</a></li>
			<li><a href="/cmslist/cl92-pg1.htm">营销经验</a></li>
			<li><a href="/cmslist/cl94-pg1.htm">0成本营销</a></li>
		</ul>
	</div>
	<!-- nav结束 -->
	<div class="strategyList content">
		<div class="strategyListContent">

			<div id ="cmslistcontent" class="strategyListContent">
				<div class="strategyListContentBox">
					<div class="fl strategyListContentMainImg">
						<a href="/cms/cl13-cm58409-at2482.htm">
							<img src="/picture/30180821zgcb.jpg">
						</a>
					</div>
					<div class="fl strategyListContentMainRight">
						<a href="/cms/cl13-cm58409-at2482.htm">
							<h2>手机网站建设需要注意些什么？</h2>
							<div class="strategyListText">
								明确自己想在手机网站上展示哪些信息：
								　　在手机网站制作之前应该明确自己想在手机网站上展示什么，如果能做到有针对性的进行手机网站制作，通常手机网站在推广之后都会为企业带来一定量的潜在用户。
							</div>
						</a>
						<div class="steategyTag">
							<span><img src="/picture/time.png" alt="">2018-09-30</span>
							<span><img src="/picture/look.png" alt="">2430</span>
							<div class="strategyTayText">
								<!-- <img src="/picture/edit.png" alt=""> -->
								<a href="/cmstag/tg2_pg1.htm">企业网站</a>
								<a href="/cmstag/tg877_pg1.htm">展示型网站</a>
								<a href="/cmstag/tg19_pg1.htm">开发建站</a>
								<a href="/cmstag/tg878_pg1.htm">营销型网站</a>
								<a href="/cmstag/tg51_pg1.htm">seo</a>
								<a href="/cmstag/tg295_pg1.htm">开发</a>
							</div>
						</div>
					</div>
				</div>
				<div class="strategyListContentBox">
					<div class="fl strategyListContentMainImg">
						<a href="/cms/cl13-cm58408-at2481.htm">
							<img src="/picture/30180657n94f.jpg">
						</a>
					</div>
					<div class="fl strategyListContentMainRight">
						<a href="/cms/cl13-cm58408-at2481.htm">
							<h2>手机网站建设有哪些流程？</h2>
							<div class="strategyListText">


								如今互联网营销的时代人们已经发现手机网站建设的潜在价值，大多数公司除了建设自己的官网以外，也有建设手机网站，在移动用户比PC端用户多的状况下，公司又该怎么去优化手机网站呢?其实手机网站建设都有一系列的流程，那么手机网站建设过程中流程都包括什么呢?下面卡密网络来给大家简单说几点!

							</div>
						</a>
						<div class="steategyTag">
							<span><img src="/picture/time.png" alt="">2018-09-30</span>
							<span><img src="/picture/look.png" alt="">2672</span>
							<div class="strategyTayText">
								<!-- <img src="/picture/edit.png" alt=""> -->
								<a href="/cmstag/tg2_pg1.htm">企业网站</a>
								<a href="/cmstag/tg877_pg1.htm">展示型网站</a>
								<a href="/cmstag/tg19_pg1.htm">开发建站</a>
								<a href="/cmstag/tg878_pg1.htm">营销型网站</a>
								<a href="/cmstag/tg51_pg1.htm">seo</a>
								<a href="/cmstag/tg295_pg1.htm">开发</a>
							</div>
						</div>
					</div>
				</div>
				<div class="strategyListContentBox">
					<div class="fl strategyListContentMainImg">
						<a href="/cms/cl13-cm58407-at2480.htm">
							<img src="/picture/30180534f1oo.jpg">
						</a>
					</div>
					<div class="fl strategyListContentMainRight">
						<a href="/cms/cl13-cm58407-at2480.htm">
							<h2>北京网站建设外包公司_手机网站建设需要多少钱</h2>
							<div class="strategyListText">
								对于企业来说做一个手机网站就是帮助企业抢占先机，定制型的营销型手机网站，就是为了满足现在各种尺寸的手机屏幕，需要一个有实力的建站公司，通过丰富经验的建站团队，有质量保障，满足用户的基本需求，使用起来非常方便，还能帮助用户节省流量，所以价格跟公司的专业性有关。
							</div>
						</a>
						<div class="steategyTag">
							<span><img src="/picture/time.png" alt="">2018-09-30</span>
							<span><img src="/picture/look.png" alt="">1431</span>
							<div class="strategyTayText">
								<!-- <img src="/picture/edit.png" alt=""> -->
								<a href="/cmstag/tg2_pg1.htm">企业网站</a>
								<a href="/cmstag/tg877_pg1.htm">展示型网站</a>
								<a href="/cmstag/tg19_pg1.htm">开发建站</a>
								<a href="/cmstag/tg878_pg1.htm">营销型网站</a>
								<a href="/cmstag/tg51_pg1.htm">seo</a>
								<a href="/cmstag/tg295_pg1.htm">开发</a>
							</div>
						</div>
					</div>
				</div>
				<div class="strategyListContentBox">
					<div class="fl strategyListContentMainImg">
						<a href="/cms/cl13-cm58406-at2479.htm">
							<img src="/picture/30180417yytz.jpg">
						</a>
					</div>
					<div class="fl strategyListContentMainRight">
						<a href="/cms/cl13-cm58406-at2479.htm">
							<h2>手机网站建设如何做好用户体验</h2>
							<div class="strategyListText">


								手机网站建设做好用户体验，需要注意以下几个方面的问题：

							</div>
						</a>
						<div class="steategyTag">
							<span><img src="/picture/time.png" alt="">2018-09-30</span>
							<span><img src="/picture/look.png" alt="">1587</span>
							<div class="strategyTayText">
								<!-- <img src="/picture/edit.png" alt=""> -->
								<a href="/cmstag/tg2_pg1.htm">企业网站</a>
								<a href="/cmstag/tg877_pg1.htm">展示型网站</a>
								<a href="/cmstag/tg19_pg1.htm">开发建站</a>
								<a href="/cmstag/tg878_pg1.htm">营销型网站</a>
								<a href="/cmstag/tg51_pg1.htm">seo</a>
								<a href="/cmstag/tg295_pg1.htm">开发</a>
							</div>
						</div>
					</div>
				</div>
				<div class="strategyListContentBox">
					<div class="fl strategyListContentMainImg">
						<a href="/cms/cl13-cm58405-at2478.htm">
							<img src="/picture/301802529r5e.jpg">
						</a>
					</div>
					<div class="fl strategyListContentMainRight">
						<a href="/cms/cl13-cm58405-at2478.htm">
							<h2>天津网站建设_手机网站如何快速建站</h2>
							<div class="strategyListText">
								首先正规的网站建设没有快速一说。所谓快速建站的有两种，
							</div>
						</a>
						<div class="steategyTag">
							<span><img src="/picture/time.png" alt="">2018-09-30</span>
							<span><img src="/picture/look.png" alt="">2090</span>
							<div class="strategyTayText">
								<!-- <img src="/picture/edit.png" alt=""> -->
								<a href="/cmstag/tg2_pg1.htm">企业网站</a>
								<a href="/cmstag/tg877_pg1.htm">展示型网站</a>
								<a href="/cmstag/tg19_pg1.htm">开发建站</a>
								<a href="/cmstag/tg878_pg1.htm">营销型网站</a>
								<a href="/cmstag/tg51_pg1.htm">seo</a>
								<a href="/cmstag/tg295_pg1.htm">开发</a>
							</div>
						</div>
					</div>
				</div>




			</div>



		</div>
		<div class="strategyCode01" style="z-index: 9">
		</div>
		<div class="strategyCode" style="z-index: 9" id="myScrollspy">
			<div class="yxQuest">
				<img src="/picture/yx-bg.png" alt=""/>
				<div>
					<textarea id="userRequestSelect" placeholder="如果您有营销问题，填写问题内容，我们可以快速帮您解答"></textarea>
					<input type="text" id="customName" name="customName" placeholder="您的称呼" maxlength="11">
					<input type="text" name="telPhone" placeholder="请填写您的手机号" maxlength="11">
					<p><input type="text" name="phoneCode" placeholder="短信验证码" maxlength="8"><a id="sendCode" class="caClass" traceflag="rightbar_vcode_获取验证码" href="javascript:void(0);">获取验证码</a></p>
					<a id="yxQuestSubmit" onclick="javascript:cmsListsubmitLeads();" class="caClass" traceflag="rightbar_fb_提交咨询" href="javascript:void(0);">提交咨询</a>
				</div>
				<div class="tipMask">请填写正确的手机号码</div>
			</div>
		</div>
	</div>


	<div class="pagination">
		<ul>
			<li><a href="/cmslist/cl0-pg1.htm" class="fir-page">首页</a></li>
			<li><a  class="prev"><上一页</a></li>
			<li><a href="/cmslist/cl0-pg1.htm"  class="cur" >1</a></li>
			<li><a href="/cmslist/cl0-pg2.htm" >2</a></li>
			<li><a href="/cmslist/cl0-pg3.htm" >3</a></li>
			<li><a href="/cmslist/cl0-pg4.htm" >4</a></li>
			<li><a href="/cmslist/cl0-pg5.htm" >5</a></li>
			<li><a   href="/cmslist/cl0-pg2.htm"   class="nextpage">下一页></a></li>

		</ul>
	</div>


	<script>
        $('.zbBottomTop .tabspan span').click(function(){
            var idx = $(this).index();
            $('.zbBottomTop .tabspan span').removeClass('current');
            $(this).addClass('current');
            $('.zbBottomTop .TABbox').hide();
            $('.zbBottomTop .TABbox' + idx).show();
        });
	</script>

	<script>
        var len = $('.strategyListText').length;
        for(var i = 0; i < len; i++){
            if($('.strategyListText:eq('+ i +')').text().length > 130){
                $('.strategyListText:eq('+ i +')').addClass('current');
            }
        }
        $('#myScrollspy').affix({
            offset: {
                top: 500,
                bottom: function () {
                    return (this.bottom = $('.footer').outerHeight(true)+80);
                }
            }
        });

	</script>

@endsection