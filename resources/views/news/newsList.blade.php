
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
						@foreach($banner as $val)
					<a class="swiper-slide swiper-noslide swiper-img" style="width:100%" href="{{$val['open_url']}}" >
						<img src="{{$val['picture']}}" alt="">
					</a>
						@endforeach
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
				@if(!empty($goodsCategory))
					@foreach($goodsCategory as $val)
						@if(!empty($val->child))
		<div id="showtype11" class="showtype11_group group01 container">
			<p class="title">{{$val['name']}}</p>
			<div class="groupMain">
				<ul>
					@foreach($val->child as $goods)
						@if(!empty($goods['main_image']))
					<li style="background:url({{$goods['main_image']}}) no-repeat center center;background-size: 376px 376px">
						@else
					<li style="background:url('/picture/goods_img.png') no-repeat center center;background-size: 376px 376px;">
						@endif
						<a href="/goods/goodsDetail/{{$goods['id']}}" target="_blank">
							{{--<div class="listGroup">
								<p>{{$goods['spu_name']}}</p>
								<p>{{$goods['description']}}</p>
							</div>--}}
							<div class="bottomPrice">
								<span>￥</span>{{$goods['price']}}
								<span>{{$goods['market_price']}}</span>
							</div>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
						@endif
				@endforeach
				@endif
				@include('./common/search')
			</div>
		</div>
@endsection