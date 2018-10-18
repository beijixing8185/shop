
@extends('welcome')

@section('title','营销攻略')

@section('css')
	<link rel="stylesheet" href="{{asset('css/page.css')}}">
	<link rel="stylesheet" href="{{asset('css/strategy.css')}} "/>
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<link rel="stylesheet" href="{{asset('css/hotactive.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/news.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}"/>
	<script type="text/javascript" src="{{asset('js/common-header.js')}}"></script>
	<script src="{{asset('js/popup.js')}}"></script>
	<script src="{{asset('js/pop.js')}}"></script>
	<script src="/js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/common-auth.js"></script>
	<script type="text/javascript" src="/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="/js/jcarousel.connected-carousels.js"></script>

@endsection

@section('content')
	@include('./common/demand')
	@include('./common/nav')
	@include('./common/search')
	@include('./common/right')
{{--	@include('./common/poper')--}}
	<!-- banner图 -->

	<div class="strategyBannerBox content">
		@if(isset($hot[0]))
		<div class="strategyBannerLeft">
			<a href="{{$hot[0]['open_url']}}" target="_blank"><img src="{{$hot[0]['picture']}}"></a>
		</div>
		@endif
		<div class="strategyBannerRight">
			<div class="strategyBannerRightTop">
				@if(isset($hot[1]))
				<a href="{{$hot[1]['open_url']}}" target="_blank"><img src="{{$hot[1]['picture']}}"></a>
				@endif
				@if(isset($hot[2]))
					<a href="{{$hot[2]['open_url']}}" target="_blank"><img src="{{$hot[2]['picture']}}"></a>
				@endif
			</div>
			<div class="strategyBannerRightBottom">
				@if(isset($hot[3]))
				<a href="{{$hot[3]['open_url']}}" target="_blank"><img src="{{$hot[3]['picture']}}"></a>
				@endif
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
		<div class="page_css">
			{{ $news->links() }}
			<p style="clear: both"></p>
		</div>
	</div>


{{--

	<script>
        $('.zbBottomTop .tabspan span').click(function(){
            var idx = $(this).index();
            $('.zbBottomTop .tabspan span').removeClass('current');
            $(this).addClass('current');
            $('.zbBottomTop .TABbox').hide();
            $('.zbBottomTop .TABbox' + idx).show();
        });
	</script>--}}

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