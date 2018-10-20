@extends('welcome')

@section('title','新闻详情')
@section('keywords','新闻详情')
@section('description','新闻详情')

@section('css')
	<link rel="stylesheet" href="{{asset('css/cmsdetails.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<script type="text/javascript" src="{{asset('js/common-header.js')}}"></script>
	<script src="{{asset('js/popup.js')}}"></script>
	<script src="{{asset('js/iconfont.js')}}"></script>
	<script src="{{asset('js/jquery.qrcode.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/cmsdetails.js')}}"></script>

@endsection


@section('content')


	@include('./common/demand')
	@include('./common/nav')
@include('./common/search')
@include('./common/right')
@include('./common/poper')
<!-- 面包屑 -->
<div class="strategyInfoNav content">
	<ul>
		<li><a href="/">首页</a></li>
		<li><a href="javascript:void(0);">></a></li>
		<li><a href="/cmslist/cl0-pg1.htm">营销攻略</a></li>
		<li><a href="javascript:void(0);">></a></li>
		<li><a href="/cmslist/cl78-pg1.htm">SEO优化</a></li>
	</ul>
</div>
<!-- 内容 -->
<div class="strategyInfoMain content">

	<div class="strategyInfoMainLeft fl">
        @include('./common/newsDetail_message')
        @if(!empty($getdetail))
		<script type="text/javascript" src="/js/cmsfb.js"></script>
        <div class="wxCode">
			<h1>{{$getdetail['title']}}</h1>
			<div class="wxCodeMsg">
				分享到 <img class="wxicon" onclick="generateCode('78','58427','2500','sharecode1','<?php echo url()->full();?>')" src="/picture/wxicon.png" alt="微信二维码">
				<span><i class="closeCode"><img src='/picture/codeboxx.png'/></i><strong id="sharecode1"></strong></span>
			</div>
		</div>
		<div class="strategyinfoDate">
				<span>
				<img src="/picture/uesricon@2x.png" alt="{{$getdetail['author']}}">{{$getdetail['author']}}</span>
			<span><img src="/picture/timeicon@2x.png" alt="文章时间">{{date('Y-m-d H:i:s',$getdetail['add_time'])}}</span>
		</div>
		<!-- 标签 -->
		<div class="strategyinfoTag">
			<ul>
                @foreach($getdetail['tags'] as $val)
				<li><a href="#">{{$val}}</a></li>
                @endforeach
			</ul>
		</div>
		<!-- 摘要、内容 -->
		<div class="strategyinfoDes">{{$getdetail['description']}}</div>
		<div class="strategyinfoMain">
			<h2 style="text-align: center;">
				<img  alt='{{$getdetail['title']}}'src="{{$getdetail['picture']}}g" style="width: 319px; height: 240px;" /></h2>
			<h2>
				<span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">&nbsp;</span></span></h2>
            <div>{{$getdetail['content']}}</div>
		</div>

		<!-- 相关文章 -->
		<div class="strategyinfoArtical">
			<div class="strategyinfoArticalTitle">
				您可能感兴趣的文章
			</div>
			<div class="strategyinfoArticalTitleMain">
				<div class="strategyinfoArticalTitleList">
					<ul>
                        @foreach($hot as $val)
						<li><a href="{{url('news/detail',['id'=>$val['id']])}}">{{$val['title']}}</a></li>
						@endforeach
					</ul>
				</div>
				{{--<div class="strategyinfoArticalTitleList">
					<ul>
                        @foreach($hot as $val)
                            <li><a href="{{url('news/detail',['id'=>$val['id']])}}">{{$val['title']}}</a></li>
                        @endforeach
					</ul>
				</div>--}}
			</div>
		</div>
        @endif
	</div>


	<!-- 案例 -->
	<div class="strategyInfoMainRight fr">
		<div class="strategyInfoMainRightNewPro">
			<div class="prolistTitle">
				相关文章    <a href="{{$getdetail['article_cate_id']}}" target="_blank">更多></a>
			</div>
			<ul class="newProList">
				@if(!empty($news))
                @foreach($news as $val)
				<li>
					<a href="{{url('news/detail',['id'=>$val['id']])}}" target="_blank">
						<p class="textInfo">{{$val['title']}}</p>
						<div>
							<img src="{{$val['picture']}}">
							<div class="textImg">
                                {{$val['title']}}
							</div>
						</div>
					</a>
				</li>
            @endforeach
					@endif
			</ul>
		</div>
		<div id="myScrollspy" class="myScrollspyM">
			<div class="prolistTitle">
				您可能需要的服务
			</div>
			<ul>
				@if(!empty($goods))
					@foreach($goods as $val)
				<li>
					<a href="/goods/goodsDetail/{{$val['id']}}" target="_blank">
						@if($val['is_hot'] ==1)
							<img src="/picture/hot.gif"/>
						@endif
						<div class="smallTitle"><i></i>{{$val['spu_name']}}</div>
						<div class="spyInfo"></div>
					</a>
				</li>
					@endforeach
				@endif
			</ul>
			<div class="noMessage">
				<p>没有找到我想要的:</p>
				<a class="caClass" traceflag="rightbar_pop_我要咨询" id="cmsdetailfb" href="javascript:window.location.href='http://p.qiao.baidu.com/cps/chat?siteId=12314605&userId=25925415'">我要咨询</a>
			</div>
		</div>

	</div>
</div>




<script>
    var spyTop = 600;
    if($('#myScrollspy').length > 0){
        var spyTop = $('#myScrollspy').offset().top;
        $('#myScrollspy').affix({
            offset: {
                top: spyTop,
                bottom: function () {
                    return (this.bottom = $('.footer').outerHeight(true)+20);
                }
            }
        });
    }

    $(window).scroll(function(){
        if($(window).scrollTop() > spyTop){
            $(".header-fix").show();
        }else {
            $(".header-fix").hide();
        }
    });
    $('.newProList li').each(function() {
        var pLength = $(this).find('.textInfo').text().trim().length;
        var divLength = $(this).find('.textImg').text().trim().length;
        if(pLength > 30){
            $(this).find('.textInfo').addClass('slh');
        }
        if(divLength > 30){
            $(this).find('.textImg').addClass('slh');
        }
    });
    $('#myScrollspy ul li').each(function() {
        var divLength = $(this).find('.smallTitle').text().trim().length;
        var pLength = $(this).find('.spyInfo').text().trim().length;
        if(divLength > 28){
            $(this).find('.spyInfo').addClass('slh');
        }
        if(pLength > 36){
            $(this).find('.spyInfo').addClass('slh');
        }
    });
    $('.newProList li:nth-of-type(1)').addClass('active');
    $('.newProList li').hover(function(){
        $(this).addClass('active').siblings('li').removeClass('active');
    })
</script>

@endsection

