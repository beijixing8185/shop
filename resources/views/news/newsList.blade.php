
@extends('welcome')

@section('title','爆品专区')

@section('css')
	<link rel="stylesheet" href="{{asset('css/orderlist.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<link rel="stylesheet" href="{{asset('css/hotactive.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/news.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}"/>
	<script src="{{asset('js/swiper-4.2.6.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/common-header.js')}}"></script>
	<script src="{{asset('js/popup.js')}}"></script>
	<script src="{{asset('js/pop.js')}}"></script>

@endsection

@section('content')
		<div style="background-color: #fff;">
			<div class="container newlogo">
				<a href="/"><img src="/picture/logo03.png" alt="" style="width:236px;height:44px;margin:10px 0;"/></a>
				<ul>
					<li  class="active" ><a href="/jhs/page1.htm">爆品专区</a></li>
					<li ><a href="/jhs/page2.htm">优惠活动</a></li>
				</ul>

				@include('./common/poper')

		<div id="showtype08">
			<div class="swiper-container showtype08" id="swipper5441375">
				<div class="swiper-wrapper">
					<a class="swiper-slide swiper-noslide swiper-img"  >
						<img src="/picture/loadimage.htm" alt="">
					</a>
				</div>
				<!-- 如果需要分页器 -->
				<div class="swiper-pagination"></div>
			</div>
		</div>


		<script>
            (function(){
                var mySwiper = new Swiper('#swipper5441375', {
                    autoplay: true, //轮播的时间
                    autoHeight: true,
                    autoplayDisableOnInteraction : false,
                    noSwiping : true,//禁止鼠标滚动
                    noSwipingClass : 'swiper-noslide'
                });
                $("#swipper5441375").mouseenter(function () {//滑过悬停
                    mySwiper.autoplay.stop();//mySwiper 为上面你swiper实例化的名称
                }).mouseleave(function(){//离开开启
                    mySwiper.autoplay.start();
                });
            })(window);
		</script>

		<div id="showtype11" class="showtype11_group group01 container">
			<p class="title" style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 331px 92px;"></p>
			<div class="groupMain">
				<ul>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/452.htm?_pb=jhsrxph1" target="_blank">
							<div class="listGroup">
								<p>微信原创文章撰写</p>
								<p>专业文案，快速抓住用户</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>399起
								<span>¥500起</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/434.htm?_pb=jhsrxph2" target="_blank">
							<div class="listGroup">
								<p>抖音网红打造</p>
								<p>作品快速吸粉，视频数据提升</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>58起
								<span>¥100起</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/428.htm?_pb=jhsrxph3" target="_blank">
							<div class="listGroup">
								<p>朋友圈广告</p>
								<p>精准触达，系统投放</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>5000起
								<span>¥7000起</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/367.htm?_pb=jhsrxph4" target="_blank">
							<div class="listGroup">
								<p>营销软文写作</p>
								<p>专业写手执笔</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>280
								<span>¥400</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/376.htm?_pb=jhsrxph5" target="_blank">
							<div class="listGroup">
								<p>公众号托管服务</p>
								<p>专业运作，成本控制</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>2499起
								<span>¥3500起</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/370.htm?_pb=jhsrxph6" target="_blank">
							<div class="listGroup">
								<p>网站定制开发</p>
								<p>定制服务，满足您的要求</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>2388
								<span>¥4000</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="showtype11" class="showtype11_group group01 container">
			<p class="title" style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 331px 92px;"></p>
			<div class="groupMain">
				<ul>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/442.htm?_pb=dhjz21?_pb=jhsjz1" target="_blank">
							<div class="listGroup">
								<p>小程序模板全行业型</p>
								<p>操作简单，使用方便</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>7
								<span>¥2500</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/429.htm?_pb=jhsjz2" target="_blank">
							<div class="listGroup">
								<p>企业模板建站</p>
								<p>快速建站，一步到位</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>2000
								<span>¥2988</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/370.htm?_pb=jhsjz3" target="_blank">
							<div class="listGroup">
								<p>网站定制开发</p>
								<p>定制服务，满足您的要求</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>2388
								<span>¥4000</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/423.htm?_pb=jhsjz4" target="_blank">
							<div class="listGroup">
								<p>微信公众号定制开发</p>
								<p>通过社交关系链传播您的产品</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>5000
								<span>¥8000</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/440.htm?_pb=jhsjz5" target="_blank">
							<div class="listGroup">
								<p>微网站模版</p>
								<p>高端高效，品质专业</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>3288
								<span>¥5000</span>
							</div>
						</a>
					</li>
					<li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 376px 186px;">
						<a href="http://www.51biaoshi.com/product/379.htm?_pb=jhsjz6" target="_blank">
							<div class="listGroup">
								<p>小程序开发</p>
								<p>专业团队，专业服务</p>
							</div>
							<div class="bottomPrice">
								<span>￥</span>8800起
								<span>¥10000起</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>				<!--showtype end-->

		<div class="container-fluid header-md header-fix" style="display:none;height: 52px;">
			<div class="container">
				<ul class="pull-left navLlist">
					<li><a rel="nofollow" href="/">首页</a></li>
					<li><a rel="nofollow" href="/jhs/page1.htm"  class='active' >聚划算</a></li>
					<li><a rel="nofollow" href="/aboutus.htm" >效果保障</a></li>
					<li><a href="/cmslist/cl0-pg1.htm" >营销攻略</a></li>
				</ul>
				<div class="pull-right fix-publish"><a href="#" id="floatDemand" class="caClass" onclick="javascript:tofb('','');" traceflag="fixbar_pop_发布需求">我要发需求</a></div>
				<div class="fix-input pull-right">
					<input type="text" id="fixed-searchFile" name="searchFile_f"  value="" searchType="" placeholder="搜索您感兴趣的服务/案例"/>
					<div class="fixed-color-theme glyphicon glyphicon-search" onclick="searchWord()" id="searchBtn"></div>
				</div>

			</div>
		</div>
			</div>
		</div>
@endsection