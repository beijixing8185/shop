
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
            @foreach($column as $val)
                @if($val['id']==$statusId)
                <li><h1><a class="current" href="{{url('news/index',['statusId'=>$val['id']])}}">{{$val['cate_name']}}</a></h1></li>
                @else
                <li><a href="{{url('news/index',['statusId'=>$val['id']])}}">{{$val['cate_name']}}</a></li>
                @endif
                @endforeach
{{--			<li><h1><a class="current" href="/cmslist/cl0-pg1.htm">网络推广</a></h1></li>
			<li><a href="/cmslist/cl94-pg1.htm">0成本营销</a></li>--}}
		</ul>
	</div>
	<!-- nav结束 -->
	<div class="strategyList content">
		<div class="strategyListContent">

			<div id ="cmslistcontent" class="strategyListContent">
                @foreach($news as $val)
				<div class="strategyListContentBox">
					<div class="fl strategyListContentMainImg">
						<a href="{{url('news/detail',['id'=>$val['id']])}}">
							<img src="{{$val['picture']}}">
						</a>
					</div>
					<div class="fl strategyListContentMainRight">
						<a href="{{url('news/detail',['id'=>$val['id']])}}">
							<h2>{{$val['article_title']}}</h2>
							<div class="strategyListText">
                                {{$val['description']}}
							</div>
						</a>
						<div class="steategyTag">
							<span><img src="/picture/time.png" alt="">{{date('Y-m-d H:i:s',$val['add_time'])}}</span>
							<span><img src="/picture/look.png" alt="">{{$val['number']}}</span>
							<div class="strategyTayText">
                                @foreach($val['tags'] as $tags)
								<a href="#">{{$tags}}</a>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
		<div class="strategyCode01" style="z-index: 9">
		</div>
        @include('./common/news_message')
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
        {{ $news->links() }}
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