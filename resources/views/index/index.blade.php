@extends('welcome')

@section('title','首页')
@section('keywords','描述')
@section('description','关键字')

@section('css')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{asset('css/modular.css')}}">
@endsection


@section('content')

	@include('./common/index_search')
	@include('./common/index_nav')
	@include('./common/index_banner')


<div id="showtap01" class="container-fluid">
    <ul class="showtap-inner container">
		@if(!empty($new_hot))
			@foreach($new_hot as $hot)
    	    		<li>
	            <a href="/news/detail/{{$hot['id']}}" target="view_window">
	                <p class="media-img"><img src="{{$hot['picture']}}" alt="{{$hot['title']}}"></p>
	                <div class="media-title" >{{$hot['title']}}</div>
	            </a>
	        </li>
			@endforeach
		@endif

    	    </ul>
</div>
<!--保障 -->
<div id="showtap02" class="container-fluid">
    <div class="container">
        <ul class=" ensure">
        		  <li>
	                <img src="/picture/index_back.png" alt="严选服务商">
	                <div class="bz-con">
	                    <p>服务体系全面</p>
			            一对一服务，一对一指导,后期服务保证
	                </div>
	            </li>
	    		    		<li>
	                <img src="/picture/index_back.png" alt="效果数据监理">
	                <div class="bz-con">
	                    <p>效果数据监理</p>
			            真实数据跟踪，效果数据监理，24小时快速维权
	                </div>
	            </li>
	    		    		<li>
	                <img src="/picture/index_back.png" alt="资金担保">
	                <div class="bz-con">
	                    <p>资金担保</p>
			            交易资金平台托管，像淘宝一样，服务满意再付款
	                </div>
	            </li>
	    		    		<li>
	                <img src="/picture/index_back.png" alt="专注营销10年">
	                <div class="bz-con" >
	                    <p>专注营销10年</p>
			            专业团队，服务20万+企业，拥有丰富的成功案例
	                </div>
	            </li>
	    		    		<li>
	                <img src="/picture/index_back.png" alt="量身定制营销方案">
	                <div class="bz-con">
	                    <p>量身定制营销方案</p>
			            智能问诊系统，快速定位营销问题，量身定制解决方案
	                </div>
	            </li>
	    	        </ul>
    </div>
</div>
@if(!empty($goods[0]))
<div  id="showtype12" class="container-fluid">
    <div class="container">
        <div class="hot-bb">
            <div><div class="title-warp"><p class="title-inner"><b>{{$goods[0]['name']}}</b></p></div></div>
            <span>{{$goods[0]['description']}}
                  <a href="/news/list" target="_blank">更多>></a>
			</span>
        </div>
        <ul class="hotb-list hotb-list-back-1">
			@if(!empty($goods[0]['child']))
				@foreach($goods[0]['child'] as $val)
        	<li @if($val['main_image'] =='') style="background:url('/picture/index_default.png') no-repeat center center;background-size: 276px 186px;" @else style="background:url({{$val['main_image']}}) no-repeat center center;background-size: 276px 186px;" @endif >
                <a href="/goods/goodsDetail/{{$val['id']}}"  target="_blank">
                	<div class="topText">
                        <p>{{$val['spu_name']}}</p>
                        <p>{{$val['description']}}</p>
                    </div>
                    <div class="bottomPrice">
                        <p><b>¥</b>{{$val['price']}} <span>¥{{$val['market_price']}}</span></p>
                    </div>
                </a>
            </li>
				@endforeach
				@endif
		</ul>
    </div>
</div>
@endif
<!--热门宝贝-->
	@if(!empty($goods[1]))
<div  id="showtap03" class="container-fluid">
    <div class="container">
    	<div class="hot-bb">
            <div><div class="title-warp"><p class="title-inner"><b>{{$goods[1]['name']}}</b></p></div></div>
            <span>{{$goods[1]['description']}}</span>
        </div>
    	<ul class="hotb-list">
			@if(!empty($goods[1]['child']))
				@foreach($goods[1]['child'] as $val)
				<li>
					<a href="/goods/goodsDetail/{{$val['id']}}" target="view_window">
					<p class="list-img"><img src="{{$val['main_image']}}" alt="小程序模板开发"></p>
					<div class="hotb-con">
						<p>{{$val['spu_name']}}</p>
						<div style="">{{$val['description']}}<b style="">{{$val['price']}}</b></div>
					</div>
					</a>
				</li>
				@endforeach
			@endif
    	</ul>
    </div>
</div>
	@endif
<!--服务流程-->
<div id="showtap04" class="container-fluid">
    <div class="container">
        <div class="service">
            <div><div class="title-warp"><p class="title-inner"><b style="color:">服务流程</b></p></div></div>
        </div>
        <div class="lc-list">
        	        		<dl>
        			<dt><img src="/picture/loadimage.htm" alt="选择服务"></dt>
                	<dd style="color:">选择服务<b style="color:">1</b></dd>
                </dl>
        	        		<dl>
        			<dt><img src="/picture/loadimage.htm" alt="下单购买"></dt>
                	<dd style="color:">下单购买<b style="color:">2</b></dd>
                </dl>
        	        		<dl>
        			<dt><img src="/picture/loadimage.htm" alt="资金托管"></dt>
                	<dd style="color:">资金托管<b style="color:">3</b></dd>
                </dl>
        	        		<dl>
        			<dt><img src="/picture/loadimage.htm" alt="开始服务"></dt>
                	<dd style="color:">开始服务<b style="color:">4</b></dd>
                </dl>
        	        		<dl>
        			<dt><img src="/picture/loadimage.htm" alt="效果监理"></dt>
                	<dd style="color:">效果监理<b style="color:">5</b></dd>
                </dl>
        	        		<dl>
        			<dt><img src="/picture/loadimage.htm" alt="服务验收"></dt>
                	<dd style="color:">服务验收<b style="color:">6</b></dd>
                </dl>
        	            <i></i>
        </div>
    </div>
</div>

<!--
精品模块，暂时屏蔽	./common/jingpin.blade.php
-->

<script>
    $(function(){

        $('[data-id="changeTab"]').on("mouseover","li",function(){
            $(this).addClass("active").siblings().removeClass("active");
            $(this).parent().parent().next().find("[data-tab='"+$(this).attr("data-id")+"']").show();
            $(this).parent().parent().next().find("[data-tab='"+$(this).attr("data-id")+"']").siblings().hide()
        })
    })
</script>				<!--showtype end-->

	<!--营销攻略 begin-->

<!--热门宝贝-->
<div  id="stratrgy08" class="container-fluid">
    <div class="container">
        <div class="hot-bb">
            <div><div class="title-warp"><p class="title-inner"><b>营销攻略</b></p></div></div>
            <span>精炼营销干货，分享营销方案，学习营销策略</span>
        </div>
        <ul class="hotb-list">
			@if(!empty($newSite))
				@foreach($newSite as $val)
							<li>
                	<a href="/news/index/{{$val['id']}}" target="_blank">
    	                <div class="hot-head group04">
    	                	<p>{{$val['cate_name']}}</p>
    	                	<p>{{$val['description']}}</p>
    	                </div>
                	</a>
                    <div class="hot-articalList">
                    	<ul>
							@if(!empty($val['child']))
								@foreach($val['child'] as $child)
							<li><a href="/news/detail/{{$child['id']}}" target="articleId">{{$child['title']}}</a></li>
								@endforeach
							@endif
						</ul>
                    </div>
                </li>
				@endforeach
				@endif
			        </ul>
    </div>
</div>
	<!--营销攻略 end-->

	<!--真实案例begin-->
    <div class="jpal container">
    <div class="jpal-title">
            <div><div class="title-warp"><p class="title-inner"><b>这是过去合作伙伴和我们的故事</b></p></div></div>
        </div>
        <div class="commen-title">
			 <div class="anallList-wrap">
			 		<ul id="anallList" class="pull-right anallList">
						<li class="hoverAl caClass" data-id="caseitem1" traceflag="content_tab_电子商务" id="case1">电子商务</li>
						<li data-id="caseitem2" traceflag="content_tab_生活服务" id="case2">生活服务</li>
						<li data-id="caseitem3" traceflag="content_tab_实体店" id="case3">实体店</li>
					</ul>
			 </div>
        </div>
		<div class="alTabContain">
			<ul class="al-list" id="caseitem1" >
                @if(!empty($customer))
                    @foreach($customer as $val)
                        @if($val['gc_id'] ==1)
                            <li onclick="window.open('/customer/detail/{{$val->id}}');">
                                <div class="cgalNew">
                                    <p class="cgantit">{{$val['title']}}</p>
                                    <div class="anlist">
                                        <ul>
                                            <li>项目金额</li>
                                            <li>{{$val['money']}}</li>
                                        </ul>
                                        <ul>
                                            <li>项目周期</li>
                                            <li>{{$val['day']}}</li>
                                        </ul>
                                    </div>
                                    <div class="al-details">{{$val['description']}}</div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>
			<ul class="al-list" id="caseitem2" style="display:none">
                @if(!empty($customer))
                    @foreach($customer as $val)
                        @if($val['gc_id'] ==2)
                            <li onclick="window.open('/customer/detail/{{$val->id}}');">
                                <div class="cgalNew">
                                    <p class="cgantit">{{$val['title']}}</p>
                                    <div class="anlist">
                                        <ul>
                                            <li>项目金额</li>
                                            <li>{{$val['money']}}</li>
                                        </ul>
                                        <ul>
                                            <li>项目周期</li>
                                            <li>{{$val['day']}}</li>
                                        </ul>
                                    </div>
                                    <div class="al-details">{{$val['description']}}</div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>
			<ul class="al-list" id="caseitem3" style="display:none">
                @if(!empty($customer))
                    @foreach($customer as $val)
                        @if($val['gc_id'] ==3)
                            <li onclick="window.open('/customer/detail/{{$val->id}}');">
                                <div class="cgalNew">
                                    <p class="cgantit">{{$val['title']}}</p>
                                    <div class="anlist">
                                        <ul>
                                            <li>项目金额</li>
                                            <li>{{$val['money']}}</li>
                                        </ul>
                                        <ul>
                                            <li>项目周期</li>
                                            <li>{{$val['day']}}</li>
                                        </ul>
                                    </div>
                                    <div class="al-details">{{$val['description']}}</div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>
		</div>
    </div>
	<!--真实案例end-->

	<!--了解镖狮网 begin-->
    <div class="about-index">
    	<div class="about-index-title">
    		<div><div class="title-warp"><p class="title-inner"><b>了解萤火虫网</b></p></div></div>
    	</div>

    	<div class="container cards-wrap">
			@if(!empty($newCategory[0]))
				@if(!empty($newCategory[0]['child']))
    		<div class="good-service-card card">
    			<div class="card-title-wrap bg1">{{$newCategory[0]['cate_name']}}</div>
    			<div class="card-content-wrap">
    				<div class="border-bottom gs-card-img-wrap">
    					<span class="gs-card-img-txt">
    					<a rel="nofollow" href="/about/index/1" target="_blank" class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc1.png" />
    						</div>
    						<p>严选服务商</p>
    					</a>
    					<a rel="nofollow" href="/about/index/1" target="_blank"  class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc2.png" />
    						</div>
    						<p>效果监理</p>
    					</a>
    					<a rel="nofollow" href="/about/index/1" target="_blank"  class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc3.png" />
    						</div>
    						<p>资金担保</p>
    					</a>
    					<a rel="nofollow" href="/about/index/1"  target="_blank" class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc4.png" />
    						</div>
    						<p>专注营销</p>
    					</a>
    					<a rel="nofollow" href="/about/index/1"  target="_blank" class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc5.png" />
    						</div>
    						<p>量身定制</p>
    					</a>
    				</span>
    				</div>
    				<div>
						@foreach($newCategory[0]['child'] as $child)
    					<a rel="nofollow" href="/news/detail/{{$child['id']}}"  target="_blank" class="normal-link text-overflow">
    						<b></b>{{$child['title']}}
    					</a>
						@endforeach
    				</div>
    			</div>
    		</div>
				@endif
			@endif
				@if(!empty($newCategory[1]))
					@if(!empty($newCategory[1]['child']))
    		<div class="about-card  card">
    			<div class="card-title-wrap bg2">{{$newCategory[1]['cate_name']}}</div>
    			<div class="card-content-wrap j-card-wrap">
					@foreach($newCategory[1]['child'] as $child)
						@if($loop->index == 0)
    				<a href="/news/detail/{{$child['id']}}" class="first-link border-bottom" target="_blank">
    					<div class="card-img-wrap">
    						<img src="{{$child['picture']}}" />
    					</div>
    					<div class="card-other-warp">
    							<div class="text-overflow-two">[{{$child['author']}}]{{$child['title']}}</div>
    							<div class="origin">{{date('Y-m-d',$child['add_time'])}}</div>
    					</div>
    				</a>
					@else
						<a target="_blank" href="/news/detail/{{$child['id']}}" class="normal-link text-overflow">
							<b style="background:transparent"></b><span class="tag">[{{$child['author']}}]</span>{{$child['title']}}
						</a>
					@endif
					@endforeach
    			</div>

    		</div>
					@endif
				@endif
			@if(!empty($newCategory[2]))
				@if(!empty($newCategory[2]['child']))
    		<div class="sharing-card  card">
    			<div class="card-title-wrap bg3">{{$newCategory[2]['cate_name']}}</div>
    			<div class="card-content-wrap j-card-wrap">
					@foreach($newCategory[2]['child'] as $child)
						@if($loop->index == 0)
							<a href="/news/detail/{{$child['id']}}" class="first-link border-bottom" target="_blank">
								<div class="card-img-wrap">
									<img src="{{$child['picture']}}" />
								</div>
								<div class="card-other-warp">
									<div class="text-overflow-two">[{{$child['author']}}]{{$child['title']}}</div>
									<div class="origin">{{date('Y-m-d',$child['add_time'])}}</div>
								</div>
							</a>
						@else
							<a target="_blank" href="/news/detail/{{$child['id']}}" class="normal-link text-overflow">
								<b style="background:transparent"></b><span class="tag">[{{$child['author']}}]</span>{{$child['title']}}
							</a>
						@endif
					@endforeach
    				</div>
    			</div>
    		</div>
				@endif
			@endif
    	</div>
    </div>
	    <script src="{{asset('js/xslider.js')}}"></script>
@endsection


@section('js')
<script>
	//关闭发镖成功提示弹层
	function closeSuccess(){
		$('#_submit_success').hide();
	}
	function closeError(){
		$('#_submit_error').hide();
	}
</script>
	
<script>
		var timeImg = 1;
	    $(function() {
	        $(".lession-ewm").on("mouseover",function(){
	            $(this).find(".lession-ewm-b").show();
	        });
	        $(".lession-ewm").on("mouseleave",function(){
            	$(this).find(".lession-ewm-b").hide();
            });
	    })
</script>


	<script src="{{asset('js/index-v3.0.js')}}"></script>
<script>
	$('.zbBottomContentLeft .tabspan span').click(function(){
		var idx = $(this).index();
		$('.zbBottomContentLeft .tabspan span').removeClass('current');
		$(this).addClass('current');
		$('.zbBottomContentLeft .TABbox').hide();
		$('.zbBottomContentLeft .TABbox' + idx).show();

	});
	// 滚动
	var awardsList = $('#sep2016fList');
	if(awardsList.find('li').size()>3){
	    onescroll();
	};
	function onescroll(){
	    var oul=awardsList;
	    function c(){
	        oul.animate({marginTop:'-26px'},800,'',function(){
	            $(this).css({marginTop:'0px'}).find('li:first').appendTo(this);
	        });
	    }
	    var timer = setInterval(c,2000);
	};

	//轮播第一个加active
	$('.carousel-inner').children().eq(1).addClass('active');
</script>
	
<script type="text/javascript" src="{{asset('js/monitor.js')}}"></script>
@endsection