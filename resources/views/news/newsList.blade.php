
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
<style>
	body{
		background: #FFEEE7;
	}
</style>
@endsection

@section('content')
		<div style="background-color: #fff;">
			<div class="container newlogo">

				@include('./common/demand')




		<div id="showtype08">
			<div class="swiper-container showtype08" id="swipper5441375">
				<div class="swiper-wrapper">
					<a class="swiper-slide swiper-noslide swiper-img"  >
						<img src="/picture/newsBanner.png" alt="">
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
			<p class="title">栏目名称</p>
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

				</ul>
			</div>
		</div>
				@include('./common/search')
			</div>
		</div>
@endsection