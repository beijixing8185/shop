<!DOCTYPE html>
    <html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	
				<title>专业顾问亲自指导，营销效果监理，全程免费服务-镖狮网官网</title>
		
				<meta name="description" content="镖狮网服务品质优中选优，1500家服务商严选，业界实力保障，为您匹配最佳的服务商，营销推广就选择镖狮网，品质担保有保障。" />
	    
    			<meta name="keywords" content="营销推广,镖狮网" />
		
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0,user-scalable=no">
	<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />	<link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="css/bootstrap.min_1.css"/>
    <link rel="stylesheet" href="css/reset_1.css">
	<link rel="stylesheet" href="css/common-header_1.css">
    <link rel="stylesheet" href="css/common-footer_1.css">
		
    <link rel="stylesheet" href="css/about.css"/>
    <link rel="stylesheet" href="css/aboutfwbz.css"/>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <!-- <script type="text/javascript" src="js/about_slider.js"></script> -->
	<script src="js/about.js"></script>
	<script type="text/javascript" src="js/common-auth.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="js/jcarousel.connected-carousels.js"></script>
	<script type="text/javascript">
	$(function(){
		if(location.href.split('?')[1]){
			var tab = location.href.split('&')[0].split('=')[1][0];
			//600 1080 1585 2105 2615
			$('#mytab li').removeClass('active');
			$('.tab-pane').hide();
			$('#mytab li:eq('+tab+')').addClass('active');
			$('.tab-pane:eq('+tab+')').show();
			if(location.href.split('&')[1]){
				var top = location.href.split('&')[1].split('=')[1];
				setTimeout(function(){
					$('html,body').animate({'scrollTop':top + 'px'},300);
				},2000)
			}
		};
		$('#mytab li').click(function(){
			var idx = $(this).index();
			$('#mytab li').removeClass('active');
			$(this).addClass('active');
			$('.tab-pane').hide();
			$('.tab-pane:eq('+idx+')').show();
		})
	});
    </script>
	<script type="text/javascript">
	var baseurl = "";
	</script>
	<style>
		.tab-list > li{
			padding:0 85px;
		}
		.lineUs-con{
			top: 230px;
		}
	</style>
</head>
<body>
		<script type="text/javascript">
    var baseurl = "";
</script>
<script type="text/javascript" src="js/common-header_1.js"></script>
<link rel="stylesheet" href="css/popup_1.css"/>
<link rel="stylesheet" href="css/propopup_1.css"/>
<script src="js/popup.js"></script>
<script src="js/demand.js"></script>
<script src="js/demand-top.js"></script>
<script src="js/iconfont.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$(".huaguo").hover( 
		function(){
	        $(".xiala").css("display","block");
	        $(".ci-right").css({
	        	transform:"rotate(90deg)"
	        });
    	},function(){
	        $(".xiala").css("display","none");
	        $(".ci-right").css({
	        	transform:"rotate(-90deg)"
	        });
    });	
	$(".xiala a").hover( function(){
        $(this).css("color","black");
    },function(){
        $(this).css("color","#696969");
    });	
    
    $(".second").hover(
        function(){
            $(".daohang_xiala").css("display","block");
        },function(){
            $(".daohang_xiala").css("display","none");
     });
      $(document).scroll(function(){
      
      
      	var agent = navigator.userAgent;
		if (/.*Firefox.*/.test(agent)) {
		    document.addEventListener("DOMMouseScroll", function(e) {
		        e = e || window.event;
		        var detail = e.detail;
		        if (detail > 0) {
		        	console.log(detail);
		            scrollFn()
		        } else {
		            scrollFn()
		        }
		    });
		} else {
		    document.onmousewheel = function(e) {
		        e = e || window.event;
		        var wheelDelta = e.wheelDelta;
		        if (wheelDelta > 0) {
		            scrollFn()
		        } else {
		            scrollFn()
		        }
		    }
		}
      
      
      	function scrollFn(){
      		if($(this).scrollTop()<=30){
		      	$(".gg-header-hidden").css("display","none");
		      	$(".gg-header").removeClass("fixed_div");
	      	}else{
		      	$(".gg-header-hidden").css({"display":"block"});
		      	$(".gg-header").addClass("fixed_div");
	      	}
      	}
	  });
});


</script>
<script>
        $(function(){
            $(".nav-list .left-menu").on("mouseover",function(){
                $(this).addClass("hover");
                var currentId = $(this).attr("data-id");
                $("#nav-0"+currentId).show();
                $("#nav-0"+currentId).siblings().hide();
                $(this).siblings().removeClass("hover");
                $(".details-list").show();			
    
            });
            $( "#leftmenuarea .nav-left" ).mouseleave( function(){
                $(".details-list").hide();
                $("#leftmenuarea").hide();
                $(".nav-list .left-menu").removeClass("hover");
            });
            $("#all-classify").on("mouseover",function(){
                    $("#leftmenuarea").show();
            });
            $( ".aside" ).mouseleave( function(){
                $("#leftmenuarea").hide();
                $(".details-list").hide();
                $(".nav-list .left-menu").removeClass("hover");
            });
            $("#pro-list").on("click","li",function(){
             $(this).toggleClass("hover");
        });
        $(".find-input").on("mouseover",function(){
    		$(this).children(".find-list").removeClass("closed");
    		$(this).css({"background":"#fff"});
    		$(this).children("b").css({"border-top":"none","border-bottom":"5px solid #e5e5e5"});
    	});
    	$(".find-input").on("mouseout",function(){
    		$(this).children(".find-list").addClass("closed");
    		$(this).css({"background":"#f9f9f9"});
    		$(this).children("b").css({"border-top":"5px solid #e5e5e5","border-bottom":"none"});
    	});
    	$(".find-list").on("click","li",function(){
    		$("#searchType").html($(this).html());
    		$("#searchType").attr("searchType",$(this).attr("searchType")); 
    	});
    	$(".find-list").on("click","li",function(){
    		$("#searchType").html($(this).html());
    		$("#searchType").attr("searchType",$(this).attr("searchType")); 
    		$(this).parent().addClass("closed");
    	});
    	$(".userCenter").on("mouseover",function(){
    		$(this).children("ul").removeClass("closed");
    	});
    	$(".userCenter").on("mouseleave",function(){
    		$(this).children("ul").addClass("closed");
    	})
        }) 
 </script>

 <div>
	<div class="header-top container-fluid">
       <div class="container">
            <ul class="pull-left">
            	<li class="appIcon">
					<b><img src="picture/index-header-wechat@2x.png"/>关注镖狮公众号</b>
                    <div class="app-erm" style="display: none">
                        <img src="picture/lion-weixin-new.jpg" alt=""/>
                    </div>
                </li>
            </ul>
            <ul class="pull-right top-list">
            
								    				<li class="login-nav"> <a class="login" href="/login/tologin.htm" rel="nofollow">登录</a></li>
                    <li class="regist-nav"><a class="register" href="/regist/toRegist.htm" rel="nofollow">注册</a></li>
				                <li><a href="/ordermanager/orderList.htm">我的订单</a></li>
									<li><a href="/regist/toRegist.htm">申请成为服务商</a></li>
				                
                <li class="">
					<a href="/cmstools.htm" target="_blank">
					<!--<svg class="icon" aria-hidden="true"  style=" position:relative;left:-3px;   font-size: 15px;">
                        <use xlink:href="#icon-liwu"></use>
                    </svg>--><img src="picture/saletools.png" alt="营销工具" style="position: relative;top: -2px;right: 5px;"/>营销百宝箱</a>
                </li>
                <li><a>热线电话：4000-581-581</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid" style="background:#fff;min-width:1170px;">
    	<div class="header-res container">
        <div class="pull-left"><a href="/" class="logo"><img src="picture/logo03.png" alt="镖狮网" title="镖狮网" style="width:236px;height:44px;margin:10px 0;"/></a></div>
		<!--<p class="pull-left logoTitle">严选营销服务，保障营销效果</p>-->
         <div id="publish-hover" class="publish-hover pull-right">
			<b></b>
            	<a class="publish-header pull-left color-theme caClass" traceflag="header_pop_发布需求" id="headerDemand" onclick="javascript:tofb('','');">发布需求</a>
				<div class="p-list">
					<p class="p-title">定制您的需求，坐等服务商上门</p>
					
							<dl class="p-con">
								<dt class="pull-left"><img src="picture/p-icon01.png" alt=""/></dt>
								<dd class="pull-left">
									<p>一键发布 </p>
									不需花时间选服务商  
								</dd>
							</dl>
							<dl class="p-con">
								<dt class="pull-left"><img src="picture/p-icon02.png" alt=""/></dt>
								<dd class="pull-left">
									<p>快速响应 </p>
									需求发布后，15分钟快速响应 
								</dd>
							</dl>
							<dl class="p-con">
								<dt class="pull-left"><img src="picture/p-icon03.png" alt=""/></dt>
								<dd class="pull-left">
									<p> 智能推荐</p>
									大数据智能推荐最优服务商
								</dd>
							</dl>
							<dl class="p-con">
								<dt class="pull-left"><img src="picture/p-icon04.png" alt=""/></dt>
								<dd class="pull-left">
									<p>完全免费</p>
									不向雇主收取任何形式费用
								</dd>
							</dl>
					
					<div class="p-public">
						<a onclick="javascript:tofb('','');" class="caClass" traceflag="floatbar_pop_发布需求" id="headerFlowDemand">发布需求</a>
					</div>
					<div class="watch-xqgl">
						<a rel="nofollow" href="/aboutus.htm">查看需求攻略</a>
					</div>
					
				</div>
          </div>
		<div class="research pull-right">
            <div class="pull-left">
                <div class="res-input">
                    <input type="text" value="" id="searchFile" name="searchFile" searchType="" placeholder="搜搜您感兴趣的服务/案例"/>
                    <div class="color-theme search glyphicon glyphicon-search" onclick="searchWord()" id="searchBtn"></div>
                </div>
            
            </div>
        </div>
        <div></div>
    </div>
    </div>
    
	<div class="container-fluid header-bor">
		<div class="header-nav container">
        <div class="aside pull-left">
            <p id="all-classify" class="aside-title"><b><img src="picture/icon01.png"/></b>全部服务分类</p>
            <!--leftmenuarea start-->
            <div  id="leftmenuarea"  style="display:none">
            	<!--nav-left start-->
            	<div class="nav-left" >
            		<!--主类目 start-->
					<ul class="nav-list">
																		   					       <li class="left-menu" data-id="1">
					           <div class="banner-nav-list-title">
					              <p class="ban-nav-logo00"></p>微信营销<b class="ban-nav-pointer"><img src="picture/pb-pointer.png" /></b>
					           </div>
					           <ul class="banner-baob">
						          																																										<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/376.htm?_pb=dhwx1' target="_blank">微信代运营</a></li>
																																																															<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/457.htm?_pb=dhwx2' target='_blank'>订阅号搭建</a></li>
																																																																												  							  </ul>
					       </li>
					       					       					    						   					       <li class="left-menu" data-id="2">
					           <div class="banner-nav-list-title">
					              <p class="ban-nav-logo01"></p>开发建站<b class="ban-nav-pointer"><img src="picture/pb-pointer.png" /></b>
					           </div>
					           <ul class="banner-baob">
						          																																										<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/370.htm?_pb=dhjz1' target="_blank">网站定制开发</a></li>
																																																															<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/429.htm?_pb=dhjz2' target='_blank'>模板建站</a></li>
																																																																												  							  </ul>
					       </li>
					       					       					    						   					       <li class="left-menu" data-id="3">
					           <div class="banner-nav-list-title">
					              <p class="ban-nav-logo02"></p>新闻/文案<b class="ban-nav-pointer"><img src="picture/pb-pointer.png" /></b>
					           </div>
					           <ul class="banner-baob">
						          																																										<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/367.htm?_pb=dhxw1' target="_blank">软文写作</a></li>
																																																															<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/387.htm?_pb=dhxw2' target='_blank'>论坛发帖</a></li>
																																																																												  							  </ul>
					       </li>
					       					       					    						   					       <li class="left-menu" data-id="4">
					           <div class="banner-nav-list-title">
					              <p class="ban-nav-logo03"></p>口碑营销<b class="ban-nav-pointer"><img src="picture/pb-pointer.png" /></b>
					           </div>
					           <ul class="banner-baob">
						          																																										<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/427.htm?_pb=dhkb1' target="_blank">百度百科</a></li>
																																																															<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/405.htm?_pb=dhkb2' target='_blank'>百度知道</a></li>
																																																																												  							  </ul>
					       </li>
					       					       					    						   					       <li class="left-menu" data-id="5">
					           <div class="banner-nav-list-title">
					              <p class="ban-nav-logo04"></p>推广/设计<b class="ban-nav-pointer"><img src="picture/pb-pointer.png" /></b>
					           </div>
					           <ul class="banner-baob">
						          																																										<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/378.htm?_pb=dhtg1' target="_blank">SEO优化</a></li>
																																																															<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/383.htm?_pb=dhtg2' target='_blank'>SEM竞价托管</a></li>
																																																																												  							  </ul>
					       </li>
					       					       					    						   					       <li class="left-menu" data-id="6">
					           <div class="banner-nav-list-title">
					              <p class="ban-nav-logo05"></p>广告投放<b class="ban-nav-pointer"><img src="picture/pb-pointer.png" /></b>
					           </div>
					           <ul class="banner-baob">
						          																																										<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/222.htm' target="_blank">移动端广告</a></li>
																																																															<li class="" ><a style="color:#999;font-size:12px" href='http://www.51biaoshi.com/product/350.htm' target='_blank'>信息流广告</a></li>
																																						  							  </ul>
					       </li>
					       					       					    					</ul>
					<!--主类目 end-->
						
					<!--产品 start-->
					<div class="details-list " style="display:none">
					    				          	 	<div id="nav-01" style=" display:none" class="banner-list-inner">
				          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">微信基础服务</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/433.htm?_pb=dhwx12" target="_blank">公众号流量主开通【包通过】</a><b><img src="picture/new.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/431.htm?_pb=dhwx15" target="_blank">精准粉丝增长wifi版</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/400.htm?_pb=dhwx13' target="_blank">微信文章阅读量增长</a></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/375.htm?_pb=dhwx14" target="_blank">公众号注册/开通</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/399.htm?_pb=dhwx11' target="_blank">微信粉丝增长</a></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/402.htm?_pb=dhwx16' target="_blank">微信朋友圈真人转发</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">微信运营推广</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/457.htm?_pb=dhwx21" target="_blank">零基础订阅号搭建</a><b><img src="picture/new.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/376.htm?_pb=dhwx22" target="_blank">微信代运营</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/452.htm?_pb=dhwx23' target="_blank">微信原创文章撰写</a></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/428.htm?_pb=dhwx24" target="_blank">微信朋友圈广告</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/430.htm?_pb=dhwx25' target="_blank">广点通广告</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 	</div>
				          	 				          	 	<div id="nav-02" style=" display:none" class="banner-list-inner">
				          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">网站开发</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/370.htm?_pb=dhjz11" target="_blank">网站定制开发</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/429.htm?_pb=dhjz12' target="_blank">企业模板建站</a></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/440.htm?_pb=dhjz22' target="_blank">微网站模版（按年付费）</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">公众号功能开发</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/423.htm?_pb=dhjz21" target="_blank">微信公众号定制开发</a><b><img src="picture/new.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/447.htm?_pb=dhjz23' target="_blank">微信公众号功能模块</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">微信小程序</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/438.htm?_pb=dhjz31" target="_blank">小程序定制开发</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/439.htm?_pb=dhjz32' target="_blank">小程序模版买断型（提供源码）</a></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/379.htm?_pb=dhjz33' target="_blank">小程序模板开发</a></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/442.htm?_pb=dhjz34" target="_blank">小程序模板全行业型（年付）</a><b><img src="picture/new.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">app开发</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li><p><a href='http://www.51biaoshi.com/product/421.htm?_pb=dhjz41' target="_blank">app开发</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 	</div>
				          	 				          	 	<div id="nav-03" style=" display:none" class="banner-list-inner">
				          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">新闻发布</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/419.htm?_pb=dhxw11" target="_blank">10元起新闻发布</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/432.htm?_pb=dhxw12" target="_blank">全网新闻营销</a><b><img src="picture/new.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">文案撰写</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/367.htm?_pb=dhxw21" target="_blank">软文写作</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/392.htm?_pb=dhxw22' target="_blank">微信微博软文</a></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/387.htm?_pb=dhxw23" target="_blank">论坛发帖</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/366.htm?_pb=dhxw24' target="_blank">品牌文案</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">商业策划</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li><p><a href='http://www.51biaoshi.com/product/390.htm?_pb=dhxw31' target="_blank">商业计划书</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 	</div>
				          	 				          	 	<div id="nav-04" style=" display:none" class="banner-list-inner">
				          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">问答/百科</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/427.htm?_pb=dhkb11" target="_blank">百度百科创建</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/405.htm?_pb=dhkb12' target="_blank">百度知道</a></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/388.htm?_pb=dhkb13' target="_blank">搜狗问答</a></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/394.htm?_pb=dhkb14" target="_blank">知乎口碑营销</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">抖音KOL推广</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li><p><a href='http://www.51biaoshi.com/product/434.htm?_pb=dhkb22' target="_blank">抖音粉丝增长</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">品牌公关</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/432.htm?_pb=dhkb31" target="_blank">口碑营销全网霸屏</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/397.htm?_pb=dhkb32' target="_blank">微整合营销</a></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/389.htm?_pb=dhkb33" target="_blank">舆情监控</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 	</div>
				          	 				          	 	<div id="nav-05" style=" display:none" class="banner-list-inner">
				          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">搜索营销</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/378.htm?_pb=dhtg11" target="_blank">网站SEO优化</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/383.htm?_pb=dhtg12' target="_blank">SEM竞价托管</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">APP排名优化</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li><p><a href='http://www.51biaoshi.com/product/380.htm?_pb=dhtg21' target="_blank">应用商店排名优化（ASO）</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">创意设计</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/450.htm?_pb=dhtg31" target="_blank">高端名片设计</a><b><img src="picture/new.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/451.htm?_pb=dhtg32" target="_blank">数字海报设计</a><b><img src="picture/new.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/453.htm?_pb=dhtg33" target="_blank">LOGO设计</a><b><img src="picture/new.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 	</div>
				          	 				          	 	<div id="nav-06" style=" display:none" class="banner-list-inner">
				          	 						          	 							          	 				<div class="pull-left banner-list">
				                	 			<p class="banner-list-title">移动端广告</p>
				                	 							                	 							                	 																		<ul class="pull-left pro-list">
																										
																																										<li class="hotProd"><p><a href="http://www.51biaoshi.com/product/199.htm" target="_blank">朋友圈广告</a><b><img src="picture/hot.gif" alt=""/></b></p></li>
																																								
																	                	 							                	 																	
																																										<li><p><a href='http://www.51biaoshi.com/product/245.htm' target="_blank">QQ群广告</a></p></li>
																																								
																	                	 							                	 																</ul>
																                	 		</div>	
				          	 							          	 						          	 	</div>
				          	 					</div>
					<!--产品 end-->
            	</div>
            	<!--nav-left end-->
            </div>
            <!--leftmenuarea end-->
        </div>
        <style>
			.tabList{
				position: relative;
				text-align: center;
				cursor: pointer;
				width: 110px;
			}
			.tabInfo{
				position: absolute;
				top: 54px;
				left: 0px;
				z-index: 3;
				font-size: 14px;
				color: #666;
				box-shadow: 0 0 8px rgba(0, 36, 100, 0.3);
				display: none;
			}
			.tabInfo p{
				height: 40px;
			    line-height: 40px;
			    text-align: center;
			    background-color: #fff;
			    width: 110px;
			    cursor: pointer;
			}
			.tabInfo p:hover{
				background-color: #ffda44;
			}
			.tabList .rotate{
				display: inline-block;
			    width: 0;
			    height: 0;
			    border: 5px solid transparent;
			    border-top: 5px solid #3c404c;
			    background-color: transparent;
			    position: relative;
			    top: 2px;
			    left: 3px;
			}
			.tabList.active a{
				background: #fff;
    			border-radius: 5px;
			}
			#goTop{
				display: none;
			}
		</style>
        <div class="aside-right pull-left">
            <ul class="pull-left navList">
				<li><a href="/">首页</a></li>
				<li><a rel="nofollow" href="/jhs/page1.htm">聚划算</a></li>
				<li  class="active" ><a rel="nofollow" href="/aboutus.htm">效果保障</a></li>
                <li ><a href="/cmslist/cl0-pg1.htm">营销攻略</a></li>
            </ul>
        </div>
    </div>
	</div>
	
</div>
	

 <div class="container-fluid header-md header-fix" style="display:none;height: 52px;">
        <div class="container">
            <!--<div class="pull-left logoImgTitle">
                <p class="pull-left logo-img"><img src="picture/fixed-logo01.png" alt=""/></p>
            </div>-->
            <ul class="pull-left navLlist">
            	<li><a rel="nofollow" href="/">首页</a></li>
            	<li><a rel="nofollow" href="/jhs/page1.htm" >聚划算</a></li>
	            <li><a rel="nofollow" href="/aboutus.htm"  class='active' >效果保障</a></li>
                <li><a href="/cmslist/cl0-pg1.htm" >营销攻略</a></li>
            </ul>
            <div class="pull-right fix-publish"><a href="#" id="floatDemand" class="caClass" onclick="javascript:tofb('','');" traceflag="fixbar_pop_发布需求滚动导航">我要发需求</a></div>
            <div class="fix-input pull-right">
                <input type="text" id="fixed-searchFile" name="searchFile_f"  value="" searchType="" placeholder="搜索您感兴趣的服务/案例"/>
				<div class="fixed-color-theme glyphicon glyphicon-search" onclick="searchWord()" id="searchBtn"></div>
            </div>
			<script>
				$('.tabList').hover(function(){
					$(this).find('.tabInfo').show();
					$(this).addClass('active');
				},function(){
					$(this).find('.tabInfo').hide();
					$(this).removeClass('active');
				});
				$('.tabInfo p').hover(function(){
					$(this).parents('li').addClass('active');
				},function(){
					$(this).parents('li').removeClass('active');
				})
			</script>
        </div>
    </div>
	<input type="hidden" value="false" id="dateInterval">
	
	<style>	    
    #boxRight{
    	width: 112px;
        position: fixed;
        bottom: 100px;right:10px;z-index:99;
    }
    #boxRight ul li{
    	text-align: center;
		cursor: pointer;
		position: relative;
		margin-bottom: 5px;
		background-color: #fff;
		border-radius: 2px;
		border: solid 1px #e5e5e5;
	    box-sizing: border-box;
    }
    #boxRight ul li dl{
    	z-index: 99;
	    position: relative;
	    background: #fff;
	    padding-left: 8px;
    }
    #boxRight ul li dt,#boxRight ul li dd{
    	float: left;
    	line-height: 44px;
    	height: 44px;
    }
	#boxRight ul li dt span{
		display: inline-block;
		width: 30px;
		height: 30px;
		background: url(images/iconfont01.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
		margin-top: 7px;
		margin-right: 8px;
	}
	#boxRight ul li#onlineConsulting dt span{
		display: inline-block;
		width: 30px;
		height: 30px;
		background: url(images/iconfont02.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#releaseRequirements dt span{
		display: inline-block;
		width: 30px;
		height: 30px;
		background: url(images/iconfont01.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#rightInsure dt span{
		display: inline-block;
		width: 30px;
		height: 30px;
		background: url(images/iconfont05.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#rightSuggestion dt span{
		display: inline-block;
		width: 30px;
		height: 30px;
		background: url(images/iconfont06.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#bsGurden dt span{
		display: inline-block;
		width: 30px;
		height: 30px;
		background: url(images/wechat07.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#goTop dt span{
		display: inline-block;
		width: 30px;
		height: 30px;
		background: url(images/iconfont04.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li dd{
		font-size: 12px;
		color: #333;
	}
	#boxRight ul li#onlineConsulting:hover dt span,#boxRight ul li#onlineConsulting.active dt span{
		background: url(images/iconfont022.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#releaseRequirements:hover dt span,#boxRight ul li#releaseRequirements.active dt span{
		background: url(images/iconfont011.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#rightInsure:hover dt span,#boxRight ul li#rightInsure.active dt span{
		background: url(images/iconfont055.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#rightSuggestion:hover dt span,#boxRight ul li#rightSuggestion.active dt span{
		background: url(images/iconfont066.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#bsGurden:hover dt span,#boxRight ul li#bsGurden.active dt span{
		background: url(images/wechat077.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li#goTop:hover dt span,#boxRight ul li#goTop.active dt span{
		background: url(images/iconfont044.png) no-repeat center;
		-webkit-background-size: 30px 30px;
		background-size: 30px 30px;
	}
	#boxRight ul li:hover,#boxRight ul li:hover dl{
		background-color: #fafafa;
	}
	#boxRight ul li:hover dd,#boxRight ul li.active dd{
		color: #f5a540;
	}
	#boxRight ul li:hover .info{
		opacity: 1 !important;
		right: 105px !important;
		transition: all 0.6s;
	}
	#goTop{
		display: none;
	}
	#boxRight ul li .info{
		position: absolute;		
		right: -30%;
		top: 50%;
		transform: translateY(-50%);
		opacity: 0;
		padding-right: 20px;
		border-radius: 4px;
		white-space: nowrap;
	}
	#boxRight ul li.bsGurden .info{
		top: -60%;
	}
	
	#boxRight ul li .info div{
		padding: 10px;
		font-size: 14px;
		color: #333333;
		background-color: #fff;
		white-space: nowrap;
		border: solid 1px #e5e5e5;
		color: #f5a540;
	}
	#boxRight ul li .info:after{
		content: '';
		display: block;
		width: 8px;
		height: 8px;
		background-color: #fff;
		position: absolute;
		right: 16px;
		top: 50%;
		transform: translateY(-50%) rotate(45deg);
	    border: 1px solid #e5e5e5;
	    border-left: none;
	    border-bottom: none
	}
	#boxRight ul li.bsGurden .info:after{
		top: 83%;
	}
	#boxRight ul li.btDq .info{
		top: 57%;
	}
	#boxRight ul li.btDq .info:after{
		top: 50%;
	}
	#boxRight ul li .info span{
		font-size: 12px;
		display: block;
		color: #999;
	}
	#boxRight ul li .info img{
		display: none;
	}
	#boxRight ul li:hover .info img{
		display: block;
	}
</style>
<div id="boxRight">
	<div class="boxRightHeader">
					<img id="outTime" src="picture/index-tabb@2x.png" alt="" style="position: relative;bottom: -3px;z-index: 999;">
			</div>
	<ul>
					<li onclick="javascript:tofb('','');" id="releaseRequirements" class="caClass" traceFlag="floatbar_pop_发布需求">
    			<dl>
    				<dt>
    					<span></span>
    				</dt>
    				<dd>发布需求</dd>
    			</dl>
    			<div class="info">
					<div>
						资深营销顾问
					</div>
				</div>
    		</li>
			<li onclick="javascript:openBDBridge();" id="onlineConsulting" class="caClass" traceFlag="floatbar_im_在线咨询">
    			<dl>
    				<dt>
    					<span></span>
    				</dt>
    				<dd>在线咨询</dd>
    			</dl>
    			<div class="info">
					<div>
						直接获得报价
					</div>
				</div>
    		</li>
				<li class="bsGurden" id="bsGurden" style="cursor:default;">
			<dl>
				<dt>
					<span></span>
				</dt>
				<dd>镖狮微信</dd>
			</dl>
			<div class="info">
				<div style="width: 120px;padding: 0;padding-bottom: 5px;">
					<img src="picture/code01.png" alt="">
					<p style="font-size: 12px;">微信扫码加镖狮微信</p>
				</div>
			</div>
		</li>
		<li id="goTop" class="caClass" traceFlag="floatbar_toTop_返回顶部">
			<dl>
				<dt>
					<span></span>
				</dt>
				<dd>返回顶部</dd>
			</dl>
		</li>
	</ul>
</div>
<script>
	$('#goTop').click(function(){
		$('html,body').animate({'scrollTop':0},300);
	});
	
	$(window).scroll(function() {
		st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
		if (st >= 300) {
			$('#goTop').show();
			$('#bsGurden').addClass('btDq');
			$('.last-child01').removeClass('last-child');
		} else {
			$('#goTop').hide();
			$('#bsGurden').removeClass('btDq');
			$('.last-child01').addClass('last-child');
		}
	});
</script>	<!--  发镖弹层 begin -->
		<link rel="stylesheet" href="css/swiper.min_1.css">
<link rel="stylesheet" href="css/pop_1.css">
<link rel="stylesheet" href="css/fbwindowsuccess_1.css">
	
<script src="js/swiper.min.js"></script>
<script src="js/common.js"></script>
<script src="js/pop.js"></script>

<!--地域信息-->

<input type="hidden" id="commonfbversion" value="B">
	<link rel="stylesheet" href="css/fbwindowb_1.css">
	<!--偶数B版本-->
	<div class="fbwindowBMask">
	<div class="fbwindowBMain">
		<div id="closeBtn_fb_B" class="closeBtn caClass" traceflag="pop_close_关闭通用发镖"><img src="picture/closed-gray.png" alt=""></div>
		<div class="fbwindowBTitle">
			发布需求 <span>只需三步，快速梳理需求</span>
		</div>
		<div class="fbwindowBList">
			<ul>
				<li>
					<p>严选服务商</p>
					<p>录取率16%，100%缴纳保证金，5年服务经验</p>
				</li>
				<li>
					<p>效果数据监理</p>
					<p>真实数据跟踪，效果数据监理，24小时快速维权</p>
				</li>
				<li>
					<p>资金担保</p>
					<p>交易资金平台托管，像淘宝一样，服务满意再付款</p>
				</li>
				<li>
					<p>专注营销10年</p>
					<p>专业团队，服务20万+企业，拥有丰富的成功案例</p>
				</li>
				<li>
					<p>全额赔付</p>
					<p>服务不满意，经镖狮确认，可直接退款，并获得镖现金补偿</p>
				</li>
			</ul>
		</div>
		<div class="fbwindowBTap">
			<ul>
				<li class="active">
					<dl class="fbwindowBTap1">
						<dt>01</dt>
						<dd>
							<p>筛选服务商</p>
							<p>有行业相关经验，更懂您的需求</p>
						</dd>
					</dl>
					<span></span>
				</li>
				<li>
					<dl class="fbwindowBTap2">
						<dt>02</dt>
						<dd>
							<p>项目预估</p>
							<p>项目有大小，预算有高低</p>
						</dd>
					</dl>
					<span></span>
				</li>
				<li>
					<dl class="fbwindowBTap3">
						<dt>03</dt>
						<dd>
							<p>补充完善</p>
							<p>更好的为您服务</p>
						</dd>
					</dl>
					<span></span>
				</li>
			</ul>
			<p class="moveP"></p>
		</div>
		<!-- Swiper -->
		<div class="swiper-container-fbB swiper-no-swiping">
		    <div class="swiper-wrapper">
		      	<div class="swiper-slide swiper-no-swiping" id="VA_pageNo1" data-id="1">
					<div class="requestGroup">
						<div> 服务类型: </div>
						<ul class="q-answer">
							                        		<li><label><input tabIndex="-1" type="radio" name="fbcat" value="123"/>微信营销</label></li>	
                        	                        		<li><label><input tabIndex="-1" type="radio" name="fbcat" value="124"/>搜索营销</label></li>	
                        	                        		<li><label><input tabIndex="-1" type="radio" name="fbcat" value="125"/>口碑营销</label></li>	
                        	                        		<li><label><input tabIndex="-1" type="radio" name="fbcat" value="126"/>文案撰写</label></li>	
                        	                        		<li><label><input tabIndex="-1" type="radio" name="fbcat" value="127"/>开发建站</label></li>	
                        	                        		<li><label><input tabIndex="-1" type="radio" name="fbcat" value="158"/>创意/设计</label></li>	
                        	                        		<li><label><input tabIndex="-1" type="radio" name="fbcat" value="0"/>我不清楚</label></li>	
                        	                        </ul>
					</div>
					<div class="requestGroup">
						<div> 行业分类: </div>
						<ul class="q-answer">
							                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1037"/>医疗卫生</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1017"/>教育培训</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1000"/>招商加盟</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1021"/>机械设备</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1009"/>商务服务</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1012"/>旅游及票务</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1005"/>网络服务</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1024"/>广告及包装</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1015"/>金融服务</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1028"/>法律服务</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1035"/>生活服务</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1019"/>建筑及装修</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1001"/>孕婴用品</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1003"/>休闲娱乐</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1016"/>节能环保</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1007"/>食品餐饮</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="trade" value="A1036"/>其他</label></li>
                        	                    	</ul>
					</div>	
					<div class="requestGroup">
						<div> 本地服务商： </div>
						<ul class="q-answer">
                            <li><label><input tabIndex="-1" type="radio" name="issame" value="1">是</label></li>
                            <li><label><input tabIndex="-1" type="radio" name="issame" value="0">否</label></li>
                            <li id="VB_issameTip" style="width: 40%;position: relative;top: 5px;left: -60px;color: #ff4400;display: none;">选择本地服务商，会减少您匹配到更多优质的异地服务商</li>
                        </ul>
					</div>	
					<div id="VB_locationinfo" class="requestGroup" style="display:none">
						<div> 您的所在地： </div>
						<ul class="q-answer q-select">
                            <li>
                            	<div class="selectBox">
		      						<select class="form-control" id="VB_proinfo">
			      						                                        	                                        		<option value="110000" selected="selected">北京市</option>
                                        	                                                                                	                                        		<option value="120000">天津市</option>
                                        	                                                                                	                                        		<option value="130000">河北省</option>
                                        	                                                                                	                                        		<option value="140000">山西省</option>
                                        	                                                                                	                                        		<option value="150000">内蒙古自治区</option>
                                        	                                                                                	                                        		<option value="210000">辽宁省</option>
                                        	                                                                                	                                        		<option value="220000">吉林省</option>
                                        	                                                                                	                                        		<option value="230000">黑龙江省</option>
                                        	                                                                                	                                        		<option value="310000">上海市</option>
                                        	                                                                                	                                        		<option value="320000">江苏省</option>
                                        	                                                                                	                                        		<option value="330000">浙江省</option>
                                        	                                                                                	                                        		<option value="340000">安徽省</option>
                                        	                                                                                	                                        		<option value="350000">福建省</option>
                                        	                                                                                	                                        		<option value="360000">江西省</option>
                                        	                                                                                	                                        		<option value="370000">山东省</option>
                                        	                                                                                	                                        		<option value="410000">河南省</option>
                                        	                                                                                	                                        		<option value="420000">湖北省</option>
                                        	                                                                                	                                        		<option value="430000">湖南省</option>
                                        	                                                                                	                                        		<option value="440000">广东省</option>
                                        	                                                                                	                                        		<option value="450000">广西壮族自治区</option>
                                        	                                                                                	                                        		<option value="460000">海南省</option>
                                        	                                                                                	                                        		<option value="500000">重庆市</option>
                                        	                                                                                	                                        		<option value="510000">四川省</option>
                                        	                                                                                	                                        		<option value="520000">贵州省</option>
                                        	                                                                                	                                        		<option value="530000">云南省</option>
                                        	                                                                                	                                        		<option value="540000">西藏自治区</option>
                                        	                                                                                	                                        		<option value="610000">陕西省</option>
                                        	                                                                                	                                        		<option value="620000">甘肃省</option>
                                        	                                                                                	                                        		<option value="630000">青海省</option>
                                        	                                                                                	                                        		<option value="640000">宁夏回族自治区</option>
                                        	                                                                                	                                        		<option value="650000">新疆维吾尔自治区</option>
                                        	                                                                                	                                        		<option value="710000">台湾省</option>
                                        	                                                                                	                                        		<option value="810000">香港特别行政区</option>
                                        	                                                                                	                                        		<option value="820000">澳门特别行政区</option>
                                        	                                                                                	                                        		<option value="999999">其他</option>
                                        	                                        			      					</select>
			      					<!-- <b><img src="picture/zx_sq.png" alt=""></b> -->
		      					</div>
																	<div class="selectBox" style="display:none">
										      						<select class="form-control" id="VB_cityinfo">
			      									      					</select>
			      					<!-- <b><img src="picture/zx_sq.png" alt=""></b> -->
		      					</div>
		      				</li>
                        </ul>
					</div>
					<div class="rectangleBg">
						<span id="VB_next_3-1" onclick="nextVBPage(this)" class="rectangle-1 caClass" traceflag="pop_tab_下一步_1">
							下一步
						</span>
						<div class="fbBerror">您有选项没有完成，请让我们更了解您</div>
					</div>
		      	</div>
		      	<div class="swiper-slide swiper-no-swiping" id="VB_pageNo2" data-id="2">
					<div class="requestGroup">
						<div> 您的公司规模: </div>
						<ul class="q-answer q-ans-wid20">
							                        		<li><label><input tabIndex="-1" type="radio" name="companyScale" value="0"/>个人</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="companyScale" value="1"/>企业（9人以下）</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="companyScale" value="2"/>企业（10-29人）</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="companyScale" value="3"/>企业（30-99人）</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="companyScale" value="4"/>企业（100人以上）</label></li>
                        	                    	</ul>
					</div>	
					<div class="requestGroup">
						<div> 项目启动时间: </div>
						<ul class="q-answer">
							                        		<li><label><input tabIndex="-1" type="radio" name="requestStartingTimeList" value="1"/>一周内</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="requestStartingTimeList" value="2"/>两周内</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="requestStartingTimeList" value="3"/>一个月内</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="requestStartingTimeList" value="4"/>一个月以上</label></li>
                        	                        </ul>
					</div>	
					<div class="requestGroup">
						<div> 项目预算: </div>
						<ul class="q-answer q-ans-menoy">
                    		                        		<li><label><input tabIndex="-1" type="radio" name="range" value="0,1000"/>1000元以下</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="range" value="1000,5000"/>1000-5000元</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="range" value="5000,10000"/>5000-10000元</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="range" value="10000,-1"/>10000元以上</label></li>
                        	                        </ul>
					</div>
					<div class="rectangleBg">
						<span id="VB_prev_3-2" onclick="prevVBPage(this)" class="rectangleprev-2 caClass" traceflag="pop_tab_上一步_2">
							上一步
						</span>
						<span id="VB_next_3-2" onclick="nextVBPage(this)" class="rectangle-2 caClass" traceflag="pop_tab_下一步_2">
							下一步
						</span>
						<div class="fbBerror">您有选项没有完成，请让我们更了解您</div>
					</div>	
		      	</div>
				<div class="swiper-slide swiper-no-swiping" id="VB_pageNo3" data-id="3">
					<div class="requestGroup">
						<div> 您的职位: </div>
						<ul class="q-answer q-ans-w20">
                    		                        		<li><label><input tabIndex="-1" type="radio" name="custPosition" value="公司负责人"/>公司负责人</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="custPosition" value="项目负责人"/>项目负责人</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="custPosition" value="项目执行人"/>项目执行人</label></li>
                        	                        		<li><label><input tabIndex="-1" type="radio" name="custPosition" value="代理公司/广告公司"/>代理公司/广告公司</label></li>
                        	                        </ul>
					</div>
					<div class="requestGroup">
						<div style="position: relative;"> 补充需求:<span style="position: absolute;bottom:-17px;right: 35px;color:#999;font-size: 12px;">（选填）</span> </div>
						<div class="rightDiv">
							<div class="_user_mobile_box">
		      					<textarea tabIndex="-1" id="VB_userrequest" name="userrequest" placeholder="您可能还想说点什么，让我们更了解您的需求优先为您服务"></textarea>
		      				</div>
						</div>	
					</div>
					<div class="rectangleBg">
						<span id="VB_prev_3-3" onclick="prevVBPage(this)" class="rectangleprev-3 caClass" traceflag="pop_tab_上一步_3">
							上一步
						</span>
						<span id="VB_submit_3-3" onclick="submitVBLeads(this,'')" class="rectangle-3 caClass" traceflag="pop_fb_公共提交需求">
							立即提交
						</span>
						<div class="fbBerror">您有选项没有完成，请让我们更了解您</div>
					</div>
		      	</div>
		    </div>
		    <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>
		    <!-- Add Arrows -->
		</div>
	</div>
</div>	<script src="js/commonfbb.js"></script>
<style>
    .fbLogin{
    	position: fixed;
    	top: 0;
    	right: 0;
    	left: 0;
    	bottom: 0;
    	background-color: rgba(0,0,0,0.4);
    	display: none;
    	z-index: 1000;
    }
    .fbLogin .fbLoginMian{
    	width: 500px;
		background-color: #ffffff;
		border-radius: 4px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		padding: 40px 0;
    }
    .fbLogin .fbLoginMian .fbLoginTitle{
    	padding:0 40px;
    }
    .fbLogin .fbLoginMian .fbLoginTitle img:nth-of-type(1){
		width: 122px;
		height: 42px;
    }
    .fbLogin .fbLoginMian .fbLoginTitle img:nth-of-type(2){
    	float: right;
    	width: 16px;
		height: 16px;
		cursor: pointer;
    }
    .fbLogin .fbLoginMian .fbLoginContent{
    	padding: 20px 40px 30px;
    	background-color: #fafafa;
    	position: relative;
    	margin-top: 20px;
    }
    .fbLogin .fbLoginMian .fbLoginContent > div{
		width: 420px;
		height: 48px;
		background-color: #ffffff;
		border-radius: 4px;
		border: solid 1px #cccccc;
		padding-left: 10px;
    }
    .fbLogin .fbLoginMian .fbLoginContent > div img{
    	width: 26px;
		height: 26px;
		margin-right: 5px;
		position: relative;
		top: -2px;
    }
    .fbLogin .fbLoginMian .fbLoginContent > div input{
    	width: 90%;
    	height: 100%;
    	border: none;
    	outline: none;
    	font-size: 14px;
    	color: #999;
    }
    .fbLogin .fbLoginMian .fbLoginContent > div.fbLoginCode{
    	margin-top: 28px;
    }
    .fbLogin .fbLoginMian .fbLoginContent > div.fbLoginCode input{
    	width: 60%;
    }
    .fbLogin .fbLoginMian .fbLoginContent > div.fbLoginCode span{
    	display: inline-block;
    	width: 30%;
    	color: #1183f7;
    	text-align: center;
    	cursor: pointer;
    }
    .fbLogin .fbLoginMian .fbLoginContent > p{
    	color: #ff4400;
    	margin-top: 5px;
    	display: none;
    }
    .fbLogin .fbLoginMian .fbLoginContent > p.phoneError{
    	position: absolute;
    	top: 66px;
    	left: 40px;
    }
    .fbLoginBtn span{
    	display: block;
    	width: 420px;
		height: 50px;
		margin:0 auto;
		background-color: #ffda44;
		border-radius: 4px;
		font-size: 16px;
		color: #333333;
		cursor: pointer;
		margin: 30px auto 5px;
		text-align: center;
		line-height: 50px;
    }
    .fbLoginBtn span:hover{
    	background-image: linear-gradient(#ffe366, #ffe366), linear-gradient(#ffda44, #ffda44);
    }
    .fbLoginBtn p{
    	text-align: center;
    	color: #999;
    }
</style>
<div class="fbLogin" id="fbLogin">
	<div class="fbLoginMian">
		<div class="fbLoginTitle">
			<img src="picture/logo02.png" alt="">
			<img id="closeCommonFbLogin" class="closeFBlogin caClass" traceflag="pop_close_通用发镖登录并提交弹窗关闭" src="picture/close@2x.png" alt="">
		</div>
		<div class="fbLoginContent">
			<div>
				<img src="picture/log-phone@2x.png" alt=""><input type="text" name="fbLoginPhone" id="fbLoginPhone" placeholder="请输入11位手机号码" maxlength="11">
			</div>
			<p class="phoneError">请输入正确的手机号码</p>
			<div class="fbLoginCode">
				<img src="picture/log-message@2x.png" alt=""><input type="text" name="fbLoginCode" id="fbLoginCode" placeholder="请输入验证码">
				<span id="fbLogin_authCode" class="caClass" traceflag="pop_vcode_通用发镖获取验证码">获取验证码</span>
			</div>
			<p class="codeError" style="position: absolute;">验证码与手机号不匹配</p>
		</div>
		<div class="fbLoginBtn">
			<span id="commfbsubmit" class="caClass" traceflag="pop_fb_登录并提交" onclick="LoginWithSubmitCommon(this)">登录并提交</span>
			<p>咨询电话：4000-581-581</p>
		</div>
	</div>
</div>
<script src="js/commonlogin.js"></script><style>
	#_submit_success,#_submit_success02  {position:fixed;top:0px;left:0px;bottom:0px;right:0px;background: rgba(0,0,0,.6);z-index:999999999;}
    #_submit_success  .inner,#_submit_success02  .inner {width:600px;height:284px;background: #fff;position:absolute;top:20%;top: calc(50% - 142px);top: -webkit-calc(50% - 142px);top: -moz-calc(50% - 142px);left:25%;left:calc(50% - 300px);left:-webkit-calc(50% - 300px);left:-moz-calc(50% - 300px);border-radius:4px;}
    #_submit_success .closed,#_submit_success02 .closed {float: right;margin:20px 20px 0px 0;cursor: pointer;}
    #_submit_success .iconL,#_submit_success02 .iconL {margin:55px auto 30px;width:210px;font-size:24px;text-align: right;position:relative}
    #_submit_success .iconL > b,#_submit_success02 .iconL > b {display:block;position: absolute;top:5px;left:0px;width:23px;height:23px;}
    #_submit_success .iconL > b > img,#_submit_success02 .iconL > b > img {position: absolute;top:1px;left:0px;}
    #_submit_success .time,#_submit_success02 .time {font-size:14px;color:#999;text-align:center;padding:0 35px;line-height:23px;height:auto;}
    #_submit_success .about-btn a,#_submit_success02 .about-btn a {float:right;margin-right:40px;text-decoration: underline;font-size: 14px;color: #3b98fb;margin-top:10px;}
    #_submit_success .anniu,#_submit_success02 .anniu {width:313px;margin:27px auto 20px;}
    #_submit_success .anniu > a,#_submit_success02 .anniu > a{display: block;float:left;width:146px;color:#333;text-align:center;border:1px solid #ccc;padding:8px 0;font-size:14px;margin-right:20px;border-radius: 3px;cursor: pointer;}
    #_submit_success .anniu .rindex,#_submit_success02 .anniu .rindex {background: #ffda44;border:1px solid #ffda44;margin-right:0px;}
    #_submit_success .again,#_submit_success02 .again {width:70px;margin:15px auto 20px;}
    #_submit_success .again > a,#_submit_success02 .again > a{display: block;color:#333;text-align:center;background: #ffda44;padding:5px 0;border-radius: 3px;cursor: pointer} 
    
    #_submit_error,#_submit_error02  {position:fixed;top:0px;left:0px;bottom:0px;right:0px;background: rgba(0,0,0,.6);z-index:999999999;}
    #_submit_error  .inner,#_submit_error02  .inner {width:600px;height:284px;background: #fff;position:absolute;top:20%;top: calc(50% - 142px);top: -webkit-calc(50% - 142px);top: -moz-calc(50% - 142px);left:25%;left:calc(50% - 300px);left:-webkit-calc(50% - 300px);left:-moz-calc(50% - 300px);border-radius:4px;}
    #_submit_error .closed,#_submit_error02 .closed {float: right;margin:20px 20px 0px 0;cursor: pointer;}
    #_submit_error .iconL,#_submit_error02 .iconL {margin:55px auto 30px;width:210px;font-size:24px;text-align: right;position:relative}
    #_submit_error .iconL > b ,#_submit_error02 .iconL > b {display:block;position: absolute;top:5px;left:0px;width:23px;height:23px;}
    #_submit_error .iconL > b > img,#_submit_error02 .iconL > b > img {position: absolute;top:1px;left:0px;}
    #_submit_error .time,#_submit_error02 .time {font-size:14px;color:#999;text-align:center;padding:0 35px;line-height:23px;height:auto;}
    #_submit_error .about-btn a,#_submit_error02 .about-btn a {float:right;margin-right:40px;text-decoration: underline;font-size: 14px;color: #3b98fb;margin-top:10px;}
    #_submit_error .anniu,#_submit_error02 .anniu {width:313px;margin:27px auto 20px;}
    #_submit_error .anniu > a,#_submit_error02 .anniu > a{display: block;float:left;width:146px;color:#333;text-align:center;border:1px solid #ccc;padding:8px 0;font-size:14px;margin-right:20px;border-radius: 3px;cursor: pointer;}
    #_submit_error .anniu .rindex,#_submit_error02 .anniu .rindex {background: #ffda44;border:1px solid #ffda44;margin-right:0px;}
    #_submit_error .again,#_submit_error02 .again {width:70px;margin:15px auto 20px;}
    #_submit_error .again > a,#_submit_error02 .again > a{display: block;color:#333;text-align:center;background: #ffda44;padding:5px 0;border-radius: 3px;cursor: pointer} 

</style>
<style>
    .questionnaireMask{
    	position: fixed;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		display: none;
		background-color: rgba(0,0,0,0.4);
		z-index: 999999;
		overflow: auto;
    }
    .questionnaireMask .questionnaireMain{
    	position: absolute;
    	top: 100px;
    	left: 50%;
    	width: 460px;
    	transform: translateX(-50%);
    	background-color: #fff;
    	padding-bottom: 17px;
    	border-radius: 4px;
    	margin-bottom: 20px;
    }
    .questionnaireMask .publishHeader{
		padding: 40px 40px 15px 40px;
		text-align: justify;
	}
	.questionnaireMask .publishHeader h3{
		font-size: 24px;
		color: #333;
		font-weight: 600;
		/*opacity: 0;*/
	}
	.questionnaireMask .publishHeader p{
		font-size: 14px;
		color: #f5b940;
		margin-top: 5px;
		/*opacity: 0;*/
	}
	.questionnaireMask .publistRequest{
		padding: 20px 40px 1px;
		background-color: #fafafa;
		margin-bottom: 30px;
	}
	.questionnaireMask .publistRequest ul{
		overflow: hidden;
	}
	.questionnaireMask .publistRequest ul li{
		font-size: 14px;
		color: #666;
		margin-bottom: 15px;
		margin-right: 0px;
		margin-top: 0px;
		float: none;
     	padding: 0;
	}
     	.questionnaireMask .publistRequest ul li input[type="radio"]{
		margin-right: 8px;
		cursor: pointer;
		-webkit-appearance: none;
		-moz-appearance: none;
	    width: 16px;
	    height: 16px;
	    background: url(images/radio-default@2x.png) no-repeat center;
	    background-size: 14px 14px;
	    border: 1px solid transparent;
	    position: relative;
	    top: 3px;
	    outline: none;
	}
     	.questionnaireMask .publistRequest ul li input[type="radio"]:checked{
    	background: url(images/radio-dselected.png) no-repeat center;
		background-size: 14px 14px;
    }
     	.questionnaireMask .publistRequest ul li input[type="text"]{
		border: 1px solid #e5e5e5;
	    padding-left: 8px;
	    font-size: 12px;
	    margin-left: 10px;
	    height: 24px;
	    width: 180px;
	}	
	.submitQuestionnaire span{
		display: block;
		margin:20px auto 5px;
		width: 120px;
		height: 37px;
		text-align: center;
		line-height: 37px;
		background-color: #ffd943;
		font-size: 14px;
		color: #333;
		border-radius: 4px;
		cursor: pointer;
	}
	.submitQuestionnaire span:hover{
		background-image: linear-gradient(#ffe366, #ffe366), linear-gradient(#ffda44, #ffda44);
	}
	.submitQuestionnaire p{
		font-size: 12px;
		color: #999999;
		text-align: center;
	}
	.submitQuestionnaire > div{
		font-size: 12px;
		color: #ff4400;
		margin-bottom: 5px;
		text-align: center;
		display: none;
	}
	.questionnaireMain .closeBtn{
		position: absolute;
		top: 20px;
		right: 20px;
		cursor: pointer;
		z-index: 99;
	}
	.questionnaireMain img{
    	width: 16px;
    	height: 16px;
    }
</style>

<!--  发镖成功begin -->
<div class="sucEroShadow" id="_submit_success" style="display:none;" >
    <div class="inner" style="width:600px;height:320px;top:calc(50% - 160px)">
        <p class="closed"><img onclick="closeSuccess()" src="picture/des-closed.png" alt=""/></p>
         <div class="iconL">
             <b><img src="picture/success.png" alt=""/></b>
             需求发布成功！
         </div>
         <div class="time"><span id="sucinform"></span></br>
 镖狮网保障您的服务效果，保护您的信息隐私安全，如有疑问请致电4000-581-581</div>
 		<p class="about-btn"><a rel="nofollow" href="/aboutus.htm" target="_about" >了解平台保障细节</a></p>
         <div class="anniu">
             <a href="/ordermanager/orderList.htm">查看咨询单</a>
             <a class="rindex" href="/">返回首页</a>
         </div>
     </div>
 </div>
<!--  发镖成功end -->
<!--  发镖失败begin -->
<div class="sucEroShadow" id="_submit_error" style="display:none;">
    <div class="inner">
        <p class="closed"><img onclick="closeError()" src="picture/des-closed.png" alt=""/></p>
        <div class="iconL">
            <b><img src="picture/error.png" alt=""/></b>
            需求发布失败！
        </div>
        <div class="time">您的需求发布失败，请选择重新发布或致电4000-581-581联系我们。</div>
		<p class="about-btn"><a href="">了解平台保障细节</a></p>
        <div class="anniu">
            <a href="/">重新发布</a>
            <a class="rindex" href="/">返回首页</a>
        </div>
    </div>
</div>
<!--  发镖失败end -->
<!-- 调查问卷 -->
<div id="questionnaire" class="questionnaireMask">
	<div class="questionnaireMain">
		<div class="closeBtn caClass" id="closeQuestionaire" traceflag="pop_close_关闭问卷调查弹窗" id="questionnaireMask_close"><img src="../../..picture/close@2x.png" alt=""></div>
		<div class="publishHeader">
			<h3>您取消了需求发布</h3>
			<p>可以的话，请告知我们原因，非常希望能更好的为您提供服务</p>
		</div>
		<div class="publistRequest">
			<ul class="q-answer">
				<li>
					<label><input type="radio" name="questionnaire" value="0">点错了，我还想继续发布需求</label>
				</li>
				<li>
					<label><input type="radio" name="questionnaire" value="1">先看看，等会再发</label>
				</li>
				<li>
					<label><input type="radio" name="questionnaire" value="2">我不知道该选哪个</label>
				</li>
				<li>
					<label><input type="radio" name="questionnaire" value="3">提问引起了我的不适</label>
				</li>
				<li>
					<label><input type="radio" name="questionnaire" value="4">问题太多</label>
				</li>
				<li>
					<label><input type="radio" name="questionnaire" value="5">页面错误，无法提交</label>
				</li>
				<li>
					<label><input type="radio" name="questionnaire" value="6">其他</label> <input type="text" name="otherAns" placeholder="我要吐槽" maxlength="50">
				</li>
           	</ul>
		</div>
		<div class="submitQuestionnaire">
			<span class="caClass" id="submitCancel" traceflag="pop_submit_问卷调查提交" onclick="cancelSubmit()">提交</span>
			<div id="commonFbError">请选择取消原因</div>
			<p>咨询电话：4000-581-581</p>
		</div>
	</div>
</div>
<!-- 调查问卷END -->
<div id="fbSuccess" class="fbMask">
	<div class="fbContent">
		<div class="logoLine">
            <img src="picture/pubishi-lion@2x.png" alt="">
        </div>
		<div class="closeBtn caClass" id="closeBtn_fbsuccess" traceflag="pop_close_关闭通用发镖成功弹窗"><img src="picture/closed-gray.png" alt=""></div>
		<p class="fbBar"></p>
		<div class="fbTitle">
			<img src="picture/check-circle-fill@2x.png" alt="">提交成功！
			<p>严选师正在根据您的需求挑选优质服务商...</p>
		</div>
		<div class="fbCodeBox">
			<p class="codeP"><img src="picture/qr-code@2x.png" alt=""><br/><span>关注镖狮公众号</span></p>
			<div class="fbList">
				<p><img src="picture/yellow-check@2x.png" alt="">免费营销课程</p>
				<p><img src="picture/yellow-check@2x.png" alt="">海量营销攻略</p>
				<p><img src="picture/yellow-check@2x.png" alt="">专家在线解答</p>
				<p><img src="picture/yellow-check@2x.png" alt="">业务案例展示</p>
			</div>
		</div>
		<p class="fbTips">请注意010-8992开头的电话，保持联系电话畅通。</p>
	</div>
</div>	<div id="fbError" class="fbMask">
	<div class="fbContent">
        <div class="logoLine">
            <img src="picture/pubishi-lion@2x.png" alt="">
        </div>
		<div class="closeBtn caClass" id="closeBtn_fberror" traceflag="pop_close_关闭通用发镖失败弹窗"><img src="picture/closed-gray.png" alt=""></div>
		<p class="fbBar"></p>
		<div class="fbTitle">
			<img src="picture/close-circle-fill@2x.png" alt="">提交失败！
			<p>您的需求发布失败，请检查网络后重新发布或致电4000-581-581联系我们</p>
		</div>
		<div class="fbCodeBox">
			<p class="codeP"><img src="picture/qr-code@2x.png" alt=""><br/><span>关注镖狮公众号</span></p>
			<div class="fbList">
				<p><img src="picture/yellow-check@2x.png" alt="">免费营销课程</p>
				<p><img src="picture/yellow-check@2x.png" alt="">海量营销攻略</p>
				<p><img src="picture/yellow-check@2x.png" alt="">专家在线解答</p>
				<p><img src="picture/yellow-check@2x.png" alt="">业务案例展示</p>
			</div>
		</div>
		<p class="fbTips"><a href="/">重新发布</a><a href="/">返回首页</a></p>
	</div>
</div>	<script>
//关闭发镖成功提示弹层
function closeSuccess(){
	$('#_submit_success').hide();
}

function closeError(){
	$('#_submit_error').hide();
}

</script>	<!--  发镖弹层 end -->
	<div id="commonbeactive" class="freeze modal fade">
		<div class="freeze-inner">
			<b  data-dismiss="modal"><img src="picture/shader-closed.png" /></b>
			<div><img src="picture/sure-img.png" />您的账号已冻结</div>
			<p>如有疑问，请联系客服4000-581-581</p>
			<a data-dismiss="modal">确定</a>
		</div>
	</div>
	<script>
	
   	</script>
	    <div>
        <!-- Nav tabs -->
        <ul class="nav-tabs container tab-list" role="tablist" id="mytab">
            <li class="active"><a class="caClass" traceflag="content_select_效果保障页签" href="#procedure" role="tab" data-toggle="tab" id="procedure_tab">效果保障</a></li>
            <li><a class="caClass" traceflag="content_select_服务保障页签" href="#baozhang" role="tab" data-toggle="tab" id="baozhang_tab">服务保障</a></li>
            <li><a class="caClass" traceflag="content_select_服务流程页签" href="#service" role="tab" data-toggle="tab" id="service_tab">服务流程</a></li>
            <li><a class="caClass" traceflag="content_select_联系我们页签" href="#lineUs" role="tab" data-toggle="tab" id="lineUs_tab">关于我们</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            
            <div class="tab-pane active" id="procedure">
					<div class="procedure-banner">
                			<div class="container">
                				<!--<img src="picture/banner-copy-min.png" />-->
                			</div>
                	</div>
                	<div class="container bz01" id="bzo1">
                			<div class="bz00-title">
							<div><div class="title-warp"><p class="title-inner"><b>保障一  严选服务商</b></p></div></div>
						</div>
						<div>
							<ul class="khzb-ul">
								<li class="khzb-01"><p>申请入驻服务商</p></li>
								<li class="khzb-02"></li>
								<li class="khzb-03">
										<div class="khzb-03-title"><p>入驻镖狮72项考核指标</p></div>
										<ul>
											<li>企业规模</li>
											<li>专业能力</li>
											<li>服务质量</li>
											<li>行业经验</li>
											<li>基础配套</li>
											<li>法人背景</li>
											<li>响应速度</li>
											<li>从业年限</li>
											<li>运营投入</li>
											<li>员工资历</li>
											<li>服务态度</li>
											<li>成功案例</li>                    
                        						<li>荣誉奖项</li>
											<li>核心技术</li>
											<li>市场口碑</li>
											<li>品牌案例</li>  
										</ul>
										<span>......</span>
								</li>
								<li class="khzb-02"></li>
								<li class="khzb-04"><p>服务商录取率</p></li>
							</ul>
						
							<div class="khzb-table">
								<p>根据2017年镖狮网入驻服务商数据统计</p>
								<ul class="khzb-table01">
									<li>比例</li>
									<li>价格</li>
									<li>服务质量</li>
									<li>从业年限</li>
									<li>入驻</li>
								</ul>
								<ul>
									<li>16%</li>
									<li>合理</li>
									<li>好</li>
									<li>5年以上</li>
									<li><img src="picture/correct.png" /></li>
								</ul>
								<ul class="khzb-table03">
									<li>78%</li>
									<li>低</li>
									<li>差</li>
									<li>1-3年</li>
									<li><img src="picture/fault.png" /></li>
								</ul>
								<ul>
									<li>6%</li>
									<li>太高</li>
									<li>好</li>
									<li>3年以上</li>
									<li><img src="picture/fault.png" /></li>
								</ul>
							</div>
							<div id="bz02" style="position: relative;bottom: -40px;"></div>
					</div>
                	</div>
                	<div class="bz02">
                		<div class="bz02-title">
							<div><div class="title-warp"><p class="title-inner"><b>保障二  资金担保</b></p></div></div>
						</div>
						<div class="container bz03-inner">
								<ul class="bz03-ul">
									<li>
										<p><b>01</b></p>
										<b class="bz03-b1"></b>
										<div>用户</div>
										<span>资金安全</span>
									</li>
									<li><p><b>资金托管</b></p></li>
									<li>
										<p><b>02</b></p>
										<b class="bz03-b201"></b>
										<div>镖狮网</div>
										<span>交易资金托管</span>
									</li>
									<li><p><b>服务满意再付费</b></p></li>
									<li>
										<p><b>03</b></p>
										<b class="bz03-b3"></b>
										<div>服务商</div>
										<span>满意再付款</span>
									</li>
								</ul>
								<div></div>
						</div>
                	</div>
                	<div class="bz03" style="padding-bottom: 50px;">
                		  	<i></i>
                			<div class="bz03-title">
								<div><div class="title-warp"><p class="title-inner"><b>保障三  数据效果监理</b></p></div></div>
						</div>
						<div class="container ">
							<div class="bz02-padding">
								<dl class="bz02-dl">
										<dt class="bz02-dt01"></dt>
										<dd>
											<p>真实数据跟踪</p>
											<b></b>
											<div>
												部署镖狮自主研发数据监控系统BA(Biaoshi Analytics)，获取推广真实数据。
											</div>
										</dd>
									</dl>
									<dl class="bz02-dl margin-rl">
										<dt class="bz02-dt02"></dt>
										<dd>
											<p>实时监测服务效果</p>
											<b></b>
											<div>
												实时收集数据，分析并统计，监测服务效果。
											</div>
										</dd>
									</dl>
									<dl class="bz02-dl">
										<dt class="bz02-dt03"></dt>
										<dd>
											<p>24小时快速维权</p>
											<b></b>
											<div>
												如服务发生纠纷，平台提供维权通道，24小时快速响应。
											</div>
										</dd>
									</dl>
							</div>
							
						</div>
                	</div>
                	
                	<div class="bz04">
                			<div class="bz04-title">
								<div><div class="title-warp"><p class="title-inner"><b>保障四  专注营销10年</b></p></div></div>
						</div>
						<div class="container">
								<ul class="bz04-list">
									<li>
										<div>500+<span>家</span></div>
										<p>严选服务商</p>
									</li>
									<li>
										<div>8960<span>个</span></div>
										<p>累计需求承接</p>
									</li>
									<li>
										<div>200,000+<span>家</span></div>
										<p>帮助企业</p>
									</li>
									<li>
										<div>6758<span>例</span></div>
										<p>成功案例</p>
									</li>
								</ul>
						</div>
						
                	</div>
                	<div class="bz05">
                			<div class="bz05-title">
								<div><div class="title-warp"><p class="title-inner"><b>保障五  量身定制营销方案</b></p></div></div>
						</div>
						<div class="container bz05-list">
							<ul>
								<li class="bzli01">
									<b class="lib01"></b>
									<p>营销智能问诊系统</p>
								</li>
								<li class="bzli02"></li>
								<li class="bzli01">
									<b class="lib02"></b>
									<p>镖狮管家</p>
								</li>
								<li class="bzli03"></li>
								<li class="bzli01">
									<b class="lib03"></b>
									<p>量身定制营销方案</p>
								</li>
							</ul>
						</div>
						
                	</div>
                	<div class="bz06">
                			<div class="bz04-title">
								<div><div class="title-warp"><p class="title-inner"><b>为什么选择镖狮？</b></p></div></div>
						</div>
						<div class="container" style="padding-top:10px;">
							<div class="bz06-left">
								<p>对比项目</p>
								<ul>
									<li>服务态度</li>
									<li>服务能力</li>
									<li>服务效率</li>
									<li>资金保障</li>
									<li>效果监理</li>
									<li>售后服务</li>
								</ul>
							</div>
							<div class="bz06-mid">
								<p><b class="bz06-mid-b"></b>镖狮平台</p>
								<ul>
									<li class="line-height2">镖狮管家给您托付式服务，让您感受到安心，省心</li>
									<li class="no-line-height">严选专业服务商，100%交纳保证金，拥有成功服务的案例，核心业务人员工作年限5年以上。</li>
									<li class="line-height2">15分钟快速响应，全程跟踪，及时汇报进度，省心无忧。</li>
									<li class="line-height2">像淘宝一样，提供资金托管，服务效果满意您再付费</li>
									<li class="line-height2">服务过程监理，实际效果数据收集，效果数据监测，定时回访。</li>
									<li class="line-height2">服务发生纠纷，平台提供维权通道，24小时快速响应。</li>
								</ul>
							</div>
							<div class="bz06-r">
								<p>其他服务商</p>
								<ul>
									<li class="line-height2">服务过程费心，费力，得不到好的服务体验</li>
									<li class="line-height2">鱼目混杂良莠不齐，服务能力不确定，业务人员工作年限不确定年</li>
									<li class="line-height2">联系困难，诸多借口推脱，拖延时间，完成时间难以保证</li>
									<li class="no-line-height">没有开始服务就先付费，服务过程处于被动，服务效果不好，但没有办法，双方扯皮</li>
									<li class="line-height2">服务过程不了解，不知道效果数据，沟通靠催，效果靠猜</li>
									<li class="line-height2">钱款到账业务结束，放任客户不管不顾</li>
								</ul>
							</div>
						
						</div>
						<a id="appointservice" onclick="javascript:tofb('','');" class="bz06-btn caClass" traceflag="content_pop_预约镖狮管家">预约镖狮管家，解决您的营销问题</a>
                	</div>
                	<div class="bz07">
                			<div class="bz05-title">
								<div><div class="title-warp"><p class="title-inner"><b>投诉处理流程</b></p></div></div>
						</div>
						<div class="bz07-list">
								<p class="bz07-list-p">问题解决，继续服务</p>
								<ul class="bz07-list-ul">
									<li class="bz7-lineheight">用户服务不满意</li>
									<li class="bz7-lineheight">400电话与平台沟通</li>
									<li class="bz7-nolineheight">平台24小时</br>内核实，处理</li>
									<li class="bz7-lineheight">确定责任方</li>
									<li class="bz7-lineheight">确认退款</li>
									<li class="bz7-lineheight">退款完成</li>
								</ul>
								<ul class="bz07-list2">
									<li class="bz7-lineheight">用户责任</li>
									<li class="bz7-lineheight">协商</li>
								</ul>
						</div>
                	</div>
                	
            </div>
            <div class="tab-pane baozhang" id="baozhang">
                <div class="BzBanner">
                    <!-- <img src="picture/fubz_banner.png" alt=""> -->
                </div>
                <div class="BzBxo container" style="margin-top: -170px">
                    <div class="BzNav">
                        <ul>
                            <li data-id="BzBox1" class="current caClass" id="bztb1" traceflag="content_tab_保证完成页签">
                                <b></b><!-- <img src="picture/xg-11.png" alt="保证完成"> -->
                            </li>
                            <li data-id="BzBox2" class="caClass" id="bztb2" traceflag="content_tab_保证原创页签">
                               <b></b><!-- <img src="picture/xg-22.png" alt="保证完成"> -->
                            </li>
                            <li data-id="BzBox3" class="caClass" id="bztb3" traceflag="content_tab_保证维护页签">
                                <b></b><!-- <img src="picture/xg-33.png" alt="保证完成"> -->
                            </li>
                            <li data-id="BzBox4" class="caClass" id="bztb4" traceflag="content_tab_保证提供源码页签">
                                <b></b><!-- <img src="picture/xg-44.png" alt="保证完成"> -->
                            </li>
                            <li data-id="BzBox5" class="caClass" id="bztb5" traceflag="content_tab_保证推广效果页签">
                                <b></b><!-- <img src="picture/xg-55.png" alt="保证完成"> -->
                            </li>
                        </ul>
                    </div>
                    <!-- 完 -->
                    <div class="BzBox container" id="BzBox1">
                        <div class="BzMain">
                            <div class="BzTitle" id="BzTitle01">
                                <p><img src="picture/xg-11.png" alt="保证完成">保证完成</p>
                                <div>
                                    保证按时，按质完成签订的工作内容
                                </div>
                            </div>
                            <div class="BzText">
                                <div class="BzTextTop">
                                    <p class="BzTextTitle">使用范围</p>
                                    <div class="BzTextMain">
                                        <p>1.适用于加入“保证完成”服务项目的所有服务商，承诺保证按时完成并保证质量。雇主和服务商就需求完成时间、工作内容及具体要求等内容签订协议。</p>
                                        <p>2.若服务商违约，雇主有权在指定期限内发起维权并申请赔付，若维权成功，雇主可获得保证金赔付。</p>
                                    </div>
                                </div>
                                <div class="BzTextBottom">
                                    <div class="BzTextBottomLeft">
                                        <p class="BzTextTitle">雇主发起维权条件</p>
                                        <div class="BzTextMain">
                                            <p>部分付款，或者全额付款给服务商后30日内，若出现以下情况，雇主有权发起维权：</p>
                                            <p>1.服务商未在规定时间内完成雇主需求时。</p>
                                            <p>2.服务商拒绝根据双方协议内容为雇主修改作品，且雇主和服务商协商未果时。</p>
                                        </div>
                                    </div>
                                    <div class="BzTextBottomRight">
                                        <p class="BzTextTitle">雇主专享保障权益</p>
                                        <div class="BzTextMain">
                                            <p>若交易中服务商提供“保证完成”的服务，并客户和服务商就需求完成时间、工作内容及具体要求签订了协议的。如服务商未在约定时间完成需求或拒绝，根据协议要求为客户修改作品的，双方协商未果，客户有权在保证期内发起维权。若判定成立，客户可获得保证金赔付。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 完 -->
                    <div class="BzBox container" id="BzBox2">
                    	<div id="BzTitle02" style="position: relative;top:-40px;"></div>
                        <div class="BzMain">
                            <div class="BzTitle">
                                <p><img src="picture/xg-22.png" alt="">保证原创</p>
                                <div>
                                    	保证提供原创或全新作品
                                </div>
                            </div>
                            <div class="BzText">
                                <div class="BzTextTop">
                                    <p class="BzTextTitle">使用范围</p>
                                    <div class="BzTextMain">
                                        <p>1.适用于加入“保证原创”服务项目的所有服务商，承诺向雇主提供原创或全新作品。</p>
                                        <p>2.若服务商违约，雇主有权在指定期限内发起维权并申请赔付，若维权成功，雇主可获得保证金赔付。</p>
                                    </div>
                                </div>
                                <div class="BzTextBottom">
                                    <div class="BzTextBottomLeft">
                                        <p class="BzTextTitle">雇主发起维权条件</p>
                                        <div class="BzTextMain">
                                            <p>部分付款，或者全额付款给服务商后30日内，若出现以下情况，雇主有权发起维权：</p>
                                            <p>1.服务商加入“保证原创”，且双方确定合作关系。</p>
                                            <p>2.如雇主发现服务商提供作品为非原创（包括复制、改编、剽窃、模仿、抄袭、二次创作等），并能提供确凿证据。</p>
                                        </div>
                                    </div>
                                    <div class="BzTextBottomRight">
                                        <p class="BzTextTitle">雇主专享保障权益</p>
                                        <div class="BzTextMain">
                                            <p>雇主与加入“保证原创”的服务商订立合作关系后，服务商保证其提供作品为原创。在交易完成30天内，如雇主发现服务商提供作品为非原创（包括复制、改编、剽窃、模仿、抄袭、二次创作等），且双方协商未果情况下，雇主有权在保障期限内发起维权并申请赔付。雇主可获得保证金赔付。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 维 -->
                    <div class="BzBox container" id="BzBox3">
                    	<div id="BzTitle03" style="position: relative;top:-40px;"></div>
                        <div class="BzMain">
                            <div class="BzTitle">
                                <p><img src="picture/xg-33.png" alt="保证完成">保证维护</p>
                                <div>
                                    	保证提供维护服务
                                </div>
                            </div>
                            <div class="BzText">
                                <div class="BzTextTop">
                                    <p class="BzTextTitle">使用范围</p>
                                    <div class="BzTextMain">
                                        <p>1.适用于加入“保证维护”服务项目的所有服务商，承诺为雇主提供维护服务。</p>
                                        <p>2.若服务商违约，雇主有权在指定期限内发起维权并申请赔付，若维权成功，雇主可获得保证金赔付。</p>
                                    </div>
                                </div>
                                <div class="BzTextBottom">
                                    <div class="BzTextBottomLeft">
                                        <p class="BzTextTitle">雇主发起维权条件</p>
                                        <div class="BzTextMain">
                                            <p>全额付款给服务商后30天内，如交易过程中出现以下情况时，雇主有权发起维权：</p>
                                            <p>1.服务商加入“保证维护”，且双方确定合作关系。</p>
                                            <p>2.雇主对服务商提交作品有维护需求，且符合双方交易协议内容。</p>
                                        </div>
                                    </div>
                                    <div class="BzTextBottomRight">
                                        <p class="BzTextTitle">雇主专享保障权益</p>
                                        <div class="BzTextMain">
                                            <p>全额付款给服务商后30天内，雇主对服务商提交作品有维护需求，且符合双方交易协议内容，若服务商拒绝为雇主提供维护，且与服务商协商未果的情况下，雇主有权发起赔付申请，镖狮网网判定成立后，雇主可获得保证金赔付。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 维 -->
                    <div class="BzBox container" id="BzBox4">
                    	<div id="BzTitle04" style="position: relative;top:-40px;"></div>
                        <div class="BzMain">
                            <div class="BzTitle">
                                <p><img src="picture/xg-44.png" alt="保证提供源码">保证提供源码</p>
                                <div>
                                    	提供可供二次开发使用的完整程序代码
                                </div>
                            </div>
                            <div class="BzText">
                                <div class="BzTextTop">
                                    <p class="BzTextTitle">使用范围</p>
                                    <div class="BzTextMain">
                                        <p>1.适用于加入“保证提供源码”服务项目的所有服务商，承诺向雇主提供可供二次开发使用的完整程序代码（非部署/安装性质）。</p>
                                        <p>2.若服务商违约，雇主有权在指定期限内发起维权并申请赔付，若维权成功，雇主可获得保证金赔付。</p>
                                    </div>
                                </div>
                                <div class="BzTextBottom">
                                    <div class="BzTextBottomLeft">
                                        <p class="BzTextTitle">雇主发起维权条件</p>
                                        <div class="BzTextMain">
                                            <p>1.服务商加入“保证提供源码”，且双方确定合作关系。</p>
                                            <p>2.服务商拒绝按约履行，并雇主能提供确凿证据证明。</p>
                                            <p>3.交易完成后30天内。</p>
                                        </div>
                                    </div>
                                    <div class="BzTextBottomRight">
                                        <p class="BzTextTitle">雇主专享保障权益</p>
                                        <div class="BzTextMain">
                                            <p>雇主与加入“保证提供源码”的服务商订立合作关系后，服务商保证向雇主提供可供二次开发使用的完整程序代码（非部署/安装性质）。在交易过程中及30天内，如服务商拒绝按协议履行，且与服务商协商未果的情况下，雇主有权发起赔付申请，镖狮网网判定成立后，雇主可获得保证金赔付。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 效 -->
                    <div class="BzBox container" id="BzBox5">
                    	<div id="BzTitle05" style="position: relative;top:-40px;"></div>
                        <div class="BzMain">
                            <div class="BzTitle">
                                <p><img src="picture/xg-55.png" alt="">保证推广效果</p>
                                <div>
                                    	保证在交易过程中向雇主提供符合约定的真实的推广效果
                                </div>
                            </div>
                            <div class="BzText">
                                <div class="BzTextTop">
                                    <p class="BzTextTitle">使用范围</p>
                                    <div class="BzTextMain">
                                        <p>1.适用于加入“保证推广效果”服务项目的所有服务商，服务商保证在交易过程中向雇主提供符合约定的真实的推广效果。</p>
                                        <p>2.若服务商违约，雇主有权在指定期限内发起维权并申请赔付，若维权成功，雇主可获得保证金赔付。</p>
                                    </div>
                                </div>
                                <div class="BzTextBottom">
                                    <div class="BzTextBottomLeft">
                                        <p class="BzTextTitle">雇主发起维权条件</p>
                                        <div class="BzTextMain">
                                            <p>1.服务商加入“保证推广效果”，且双方确定合作关系。</p>
                                            <p>2.服务商无法达到约定的推广效果，并雇主能提供确凿证据证明。</p>
                                            <p>3.交易完成后30天内。</p>
                                        </div>
                                    </div>
                                    <div class="BzTextBottomRight">
                                        <p class="BzTextTitle">雇主专享保障权益</p>
                                        <div class="BzTextMain">
                                            <p>雇主与加入“保证推广效果”的服务商订立合作关系后，服务商保证在交易过程中向雇主提供符合约定的真实的推广效果。交易完成30天内，如服务商无法达到推广效果，且雇主与服务商协商未果的情况下，雇主有权发起赔付申请，镖狮网网判定成立后，雇主可获得保证金赔付。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 我们的承诺 -->
                    <div class="BzPro">
                        <div class="BzProTitle">
                            我们的承诺
                        </div>
                        <div class="BzProMain">
                            <p>我们的定位是：用户的第三方“营销合伙人”。</p>
                            <p>镖狮平台秉持公平，公正的原则，维护用户权益，我们尽最大努力，服务用户，保障营销效果。</p>
                        </div>
                    </div>
                    <!-- 我们的承诺 -->
                    <div class="BzPro">
                        <div class="BzProTitle">
                            投诉/咨询方式
                        </div>
                        <div class="BzProMain">
                            <p>1.拨打4000-581-581；</p>
                            <p>2.点击页面【在线咨询】按钮，将问题进行详细描述反馈。</p>
                        </div>
                    </div>
                </div>
                <script>
                	var ie6 = /msie 6/i.test(navigator.userAgent),dv = $('.BzNav');
				    dv.attr('otop', 560); //存储原来的距离顶部的距离
				    $(window).scroll(function() {
				        st = $(this).scrollTop();
				        if (st >= parseInt(dv.attr('otop')) + 40) {
				            if (!dv.hasClass('fixedNav')) {
				                dv.addClass('fixedNav');
				            }
				        } else if (dv.hasClass('fixedNav')) {
				            dv.removeClass('fixedNav');
				        }
				        //430 910 1415 1935 2445
				        if(st < 430+100){
				        	$('.BzNav li').removeClass('current');
				        	$('.BzNav li:nth-of-type(1)').addClass('current');
				        }else if(st > 430+100 && st < 910+100){
				        	$('.BzNav li').removeClass('current');
				        	$('.BzNav li:nth-of-type(2)').addClass('current');
				        }else if(st > 910+100 && st < 1415+100){
				        	$('.BzNav li').removeClass('current');
				        	$('.BzNav li:nth-of-type(3)').addClass('current');
				        }else if(st > 1415+100 && st < 1935+100){
				        	$('.BzNav li').removeClass('current');
				        	$('.BzNav li:nth-of-type(4)').addClass('current');
				        }else if(st > 1935+100 && st < 2445+100){
				        	$('.BzNav li').removeClass('current');
				        	$('.BzNav li:nth-of-type(5)').addClass('current');
				        }
				    });
                </script>			
            </div>
            <div class="tab-pane" id="service">
                <div class="ser-banner">
                			<div class="container">
                				<!--<img src="picture/banner-copywriter-min.png" />-->
                			</div>
                </div>
                <div class="container cjquestion">
                		<div class="service-title">
							<div><div class="title-warp"><p class="title-inner"><b>服务流程</b></p></div></div>
						</div>
						<div class="service-list">
							<p class="service-list-title">我想要一个适合我的定制化方案</p>
							<ul>
									<li>
										<p>发布需求</p>
										<span class="onehang">快捷填写</span>
									</li>	
									<li>
										<p>需求梳理</p>
										<span>镖狮管家</br>1对1和您沟通</span>
									</li>	
									<li>
										<p>匹配服务商</p>
										<span>匹配适合</br>您的服务商</span>
									</li>	
									<li>
										<p>沟通签约</p>
										<span>选择服务商沟通</br>并签约</span>
									</li>							
							</ul>
						</div>
						<div class="service-list-two service-list">
							<p class="service-list-title">我需求明确，我要快捷购买</p>
							<ul>
									<li>
										<p>选择服务</p>
										<span >选您要做</br>的推广服务</span>
									</li>	
									<li>
										<p>下单购买</p>
										<span class="onehang">直接下单购买</span>
									</li>	
														
							</ul>
						</div>
						<div class="service-list-three service-list">
							<ul>
									<li>
										<p>资金托管</p>
										<span class="onehang">将资金托管在平台</span>
									</li>	
									<li>
										<p>开始服务</p>
										<span class="onehang">服务商开始服务</span>
									</li>	
									<li>
										<p>效果监理</p>
										<span>平台多项保障</br>和效果数据监理</span>
									</li>	
									<li>
										<p>服务验收</p>
										<span class="onehang">服务满意再付款</span>
									</li>					
							</ul>
						</div>
                </div>
                <div class="container  service-bottom">
	                		<div class="service-bottom-title">
								<div><div class="title-warp"><p class="title-inner"><b>常见问题</b></p></div></div>
						</div>
						<div class="wd-list">
								<p>1.为什么要选择镖狮 ?</p>
								<div>镖狮网是国内领先的营销保障平台，首家承诺保障用户营销服务效果。平台以严选服务商，资金担保，监理服务，服务满意再付款，等多项免费保障，最大限度的保护用户权益，满足用户需求，保障服务效果。</div>
						</div>
						<div class="wd-list">
								<p>2. 什么是资金托管?</p>
								<div>用户将服务费用，不直接支付给服务商，而是支付给镖狮平台，像淘宝一样。只有在服务效果满意后，用户确认打款，平台才会支付给服务商。如果服务不满意，平台提供24小时快速维权，客户可申请退款。
									</br>服务商：不用担心服务完成，拿不到服务费；
									</br>用户：不用担心给服务商交钱后，服务商不配合，沟通困难，问题得不到解决，不能保障服务效果。</div>
						</div>
						<div class="wd-list">
								<p>3.  镖狮平台有几种类型交易服务?</p>
								<div>镖狮平台提供两种交易方式：
									</br>1.先咨询后购买: 直接发布需求，平台管家将一对一和您沟通，梳理定位您的需求后，成交。服务过程中，平台将通过多项保障服务，保障您的服务效果。
									</br>2.快捷购买：明确您的推广服务，可以直接下单，交易，缩短成交周期，节约时间，快速开始服务。服务过程中，平台将通过多项保障服务，保障您的服务效果。</div>
						</div>
						<div class="wd-list">
								<p>4.  服务完成，如何给服务商付款?</p>
								<div>服务满意: 在镖狮APP或镖狮官网用户中心，对订单确认打款，平台打款给服务商。</div>
						</div>
						<div class="wd-list last-wd-list">
								<p>5. 服务不满意，如何投诉、申请退款?</p>
								<div>您可以直接拨打4000-581-581，或在用户中心订单上发起投诉，平台24小时快速维权。</div>
						</div>
				</div>
            </div>
             
            <div class="tab-pane" id="lineUs">
                <div class="line-banner">
                    <div class="container">
                    		<!--<img src="picture/banne-writer-min.png" />-->
                        <div class="lineUs-con">
                            <p class="lineUs-title">
                                关于镖狮
                            </p>
                            <div style="text-align: left;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;镖狮——网络推广严选网（51biaoshi.com） 于2015年10月筹划上线，2016年12月开始独立运营。首创网络推广领域“严选”模式，镖狮通过72个指标项清晰识别网络推广服务商的真实专业服务能力，筛除了大量的不专业、效果差的服务商，解决了中小企业在网络推广中如何找到靠谱服务商、如何保障推广效果的难题，真正实现了“严选营销服务，保障营销效果”！<br/><br/>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;镖狮聚焦于开发建站、内容创意、渠道推广三大互联网营销核心业务群。为最大限度保障营销效果，镖狮采取“四重效果保障机制”。<br/>
								&nbsp;&nbsp;* 行业内顶尖推广专家组成的“严选师”团队以仅16%的严选通过率，甄选出真正的优质服务商。全心全意成就客户“严选营销服务，保障营销效果”！<br/>
								&nbsp;&nbsp;* 所有入选服务商100%向镖狮缴纳保证金，以保障服务质量和营销推广效果；<br/>
								&nbsp;&nbsp;* 所有交易款项交由镖狮托管，客户满意确认后再付款给服务商，以保障交易的安全和营销效果的达成 <br/>
								&nbsp;&nbsp;* 镖狮独有的效果数据监理系统，实时监测服务商服务效果数据真实性；<br/><br/>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;镖狮于2017年2月完成1500万元天使轮融资，3次被CCTV报道并受邀乌镇世界互联网大会。截至目前，平台累计为客户筛选服务商3000余家，其中严选入驻服务商近500家；累计服务30余万企业客户；实现北、上、广、深一线城市全覆盖，正在向二三线城市极速扩张。<br/>
                            </div>
                            
                        </div>
                       
                    </div>
					 
                        
                </div>
                <div class="media-fluit ">
                <i></i>
                <div class="container">
                		<div class="media-title">
							<div><div class="title-warp"><p class="title-inner"><b>媒体报道</b></p></div></div>
						</div>
						<div class="commen-title">
				            <p>央视报道 <span>镖狮网吸引了央视多家重要媒体的关注</span></p>
				        </div>
				        <div  class="container">
								<ul class="media-list"  id="mediaList">
				                			<li>
				                				<a href="http://www.51biaoshi.com/cms/cl82-cm56494-at664.htm" target="_blank">
				                					<dl>
				                							<dt>
				                							<img src="picture/img01.png" alt=""/>
				                							<!--<b class="mengb"><img src="picture/play.png" alt=""></b>-->
				                							</dt>
				                							<dd>
				                								<p>镖狮网助力大学生创业</p>
				                								<span>大学毕业生创业比例持续攀升，运营、营销等各环节的通畅保证了创业的成功。</span>
				                								<div class="media-name"><b></b>朝闻天下</div>
				                							</dd>
				                					</dl>
				                					<div class="progr">
					        							<p></p>
					        						</div>  
					        					</a>
				                			</li>
				        						<li>
				        							<a href="http://www.51biaoshi.com/cms/cl82-cm56495-at665.htm" target="_blank">
						                					<dl>
						                							<dt>
						                								<img src="picture/img02.png" alt=""/>
						                								<!--<b class="mengb"><img src="picture/play.png" alt=""></b>-->
						                							</dt>
						                							<dd>
						                								<p>镖狮网受邀参加世界互联网大会</p>
						                								<span>镖狮网以大数据应用提升企业商业效率，促进B2B企业级服务产业升级。</span>
						                								<div class="media-name"><b></b>朝闻天下</div>
						                							</dd>
						                					</dl>
						                					<div class="progr">
							        							<p></p>
							        						</div>  
					        						</a>
				                			</li>
				                			<li>
				                				<a href="http://www.51biaoshi.com/cms/cl82-cm56497-at667.htm" target="_blank">
				                					<dl>
				                							<dt>
				                								<img src="picture/img03.png" alt=""/>
				                								<!--<b class="mengb"><img src="picture/play.png" alt=""></b>-->
				                							</dt>
				                							<dd>
				                								<p>镖狮网创业成功之路</p>
				                								<span>不断的归零，复盘，才能战战兢兢、如履薄冰的走下去。</span>
				                								<div class="media-name"><b class="fazs"></b>发现者说</div>
				                							</dd>
				                					</dl>
				                					<div class="progr">
					        							<p></p>
					        						</div>  
					        					</a>
				                			</li>
				                			<li>
				                				<a href="http://www.51biaoshi.com/cms/cl82-cm56496-at666.htm" target="_blank">
				                					<dl>
				                							<dt>
				                								<img src="picture/img04.png" alt=""/>
				                								<!--<b class="mengb"><img src="picture/play.png" alt=""></b>-->
				                							</dt>
				                							<dd>
				                								<p>镖狮网打造企业服务2.0</p>
				                								<span>中国互联网大会，镖狮引领企业级服务跨越式发展。</span>
				                								<div class="media-name"><b class="fhw"></b>CCTV</div>
				                							</dd>
				                					</dl>
				                					<div class="progr">
					        							<p></p>
					        						</div>  
					        					</a>
				                			</li>    		
				                </ul>
						</div>
						<div class="commen-title">
				            <p>网络媒体 <span>核心媒体争相报道镖狮的每一步发展</span></p>
				        </div>
				        <div class="container inter-margin">
								<div class="inter-list" data-toggle="logo"> 
										<a href="http://finance.ifeng.com/a/20160808/14704852_0.shtml" target="_blank">
											<b class="inter-img"></b>
											<div class="inter-con">
												<p>镖狮网获黑马企业级营销TOP10 数据化信用体系引领趋势</p>
												8月6日，在北京国家会议中心，第二届黑马创交会——效率革命强势登场。这场企业级服务狂欢节，吸引了超过20个行业的300多家知名企业级服务商、4000位创始人鼎力加盟。
											</div>
											<div class="inter-time">
												<p>08-08</p>
												<span>2016</span>
												<b class="inter-pointer"></b>
											</div>
										</a>
								</div>
								<div class="inter-list" data-toggle="logo">
										<a href="http://www.sohu.com/a/133761454_115060" target="_blank">
											<b class="inter-img inter-sh"></b>
											<div class="inter-con">
												<p>镖狮网与优客工场签署合作协议 继续关注初创企业</p>
												4月13日，企业营销服务电商镖狮网与创业平台优客工场举行了战略合作签约仪式。镖狮网联合创始人兼战略合作副总裁周莉与优客工场的首席战略官张鹏在会上正式签署了战略合作协议。
											</div>
											<div class="inter-time">
												<p>04-13</p>
												<span>2017</span>
												<b class="inter-pointer"></b>
											</div>
										</a>
								</div>
								<div class="inter-list" data-toggle="logo">
										<a href="https://36kr.com/p/5083717.html" target="_blank">
											<b class="inter-img inter-k"></b>
											<div class="inter-con">
												<p>打造三个标准化，镖狮网想要成为企业营销界的阿尔法Go</p>
												如何把低频、非标服务变成高频、标准化服务，是做企业的一个关键点。 但如此非标的行业究竟要标准化到何种程度，机器才有机会取代一部分人力的工作，我们拭目以待。
											</div>
											<div class="inter-time">
												<p>07-07</p>
												<span>2017</span>
												<b class="inter-pointer"></b>
											</div>
										</a>
								</div>
								<div class="inter-list" data-toggle="logo">
										<a href="http://v.youku.com/v_show/id_XMzAzMjUzNTQzMg====.html?refer=pc-sns-1&source=&from=singlemessage&isappinstalled=0" target="_blank">
											<b class="inter-img inter-yk"></b>
											<div class="inter-con">
												<p>江小白从0到1营销哲学全解析，镖狮网营销动物沙龙成功落幕</p>
												营销动物沙龙由国内领先的互联网B2B营销服务平台镖狮网主办，最受中国中产阶级欢迎的新闻及商业社交平台界面新闻、国内知名园区运营商尚8文化创意产业园联合主办。
											</div>
											<div class="inter-time">
												<p>09-15</p>
												<span>2017</span>
												<b class="inter-pointer"></b>
											</div>
										</a>
								</div>
								
								
								<div class="inter-list" data-toggle="logo">
										<a href="http://www.lieyunwang.com/archives/374706" target="_blank">
											<b class="inter-img inter-ly"></b>
											<div class="inter-con">
												<p>跨过“营销”那些坑，镖狮网帮助中小企业量身匹配互联网营销服务</p>
												“中国的中小企业体量非常庞大，七八千万家，还有不断新增的创业者，不妨想一想这些中小企业最刚需的是什么？活下来，活下来就得有客户，那客源怎么来？通过营销来。
											</div>
											<div class="inter-time">
												<p>10-23</p>
												<span>2017</span>
												<b class="inter-pointer"></b>
											</div>
										</a>
								</div>
						</div>
						<div class="commen-title">
				            <p>行业认可 <span>镖狮的快速发展获得的资质荣誉与行业认可</span></p>
				        </div>
						<div class="wrapper">
				
                                    <div class="connected-carousels">
                                        <div class="stage">
                                            <div class="carousel-hid carousel-stage">
                                                <ul>
    													<li>
    														<img src="picture/pic01.png" width="709" height="416" alt="">
    														<p>黑马公司TOP10</p>
    													</li>
    													<li><img src="picture/pic02.png" width="709" height="416" alt="">
    														<p>中关村创业未来之星</p>
    													</li>
    													<li><img src="picture/pic03.png" width="709" height="416" alt="">
    														<p>发现者联盟成员</p>
    													</li>
                                                </ul>
                                            </div>
                                            <a href="#" class="prevBtn prev-stage"><span>&lsaquo;</span></a>
                                            <a href="#" class="nextBtn next-stage"><span>&rsaquo;</span></a>
                                        </div>
                        
                                        <div class="navigation"><!-- 
                                            <a href="#" class="prevBtn prev-navigation">&lsaquo;</a>
                                            <a href="#" class="nextBtn next-navigation">&rsaquo;</a> -->
                                            <div class="carousel-hid carousel-navigation">
                                                <ul>
    													<li class="caClass" id="showpic01" traceflag="content_tab_行业认可图片切换1"><img src="picture/pic011.png" width="166" height="107" alt=""></li>
    													<li class="caClass" id="showpic02" traceflag="content_tab_行业认可图片切换2"><img src="picture/pic022.png" width="166" height="107" alt=""></li>
    													<li class="caClass" id="showpic03" traceflag="content_tab_行业认可图片切换3"><img src="picture/pic033.png" width="166" height="107" alt=""></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
			</div>
				<div class="hzdt-fuilt">
						<div class="container line-us-bottom">
							<div><div class="title-warp"><p class="title-inner"><b>联系我们</b></p></div></div>
                        			<ul class="hzdt">
		                                <li class="pull-left hzwz">
		                                    <ul>
		                                        <li>媒体/品牌：  li.zhou@51biaoshi.com</li>
		                                        <li>市场BD合作： li.zhou@51biaoshi.com</li>
		                                        <li>活动/推广：  xinshuang.wang@51biaoshi.com</li>
		                                        <li>公司地址：   北京市朝阳区西坝河南路1号金泰大厦1105</li>
		                                    </ul>
		                                </li>
		                                <li class="pull-right"><img src="picture/ditu.png" alt=""/></li>
		                            </ul>
                        </div>
				</div>
            </div>
       		
        </div>
    </div>
	<script src="js/xslider.js"></script>
<!--<script src="js/jquery.slides.min.js"></script>-->
<!--尾巴-->
<style>
   	.zbBottom{
		background-color: #3c3c3c;
		padding: 30px 0 40px;
	}
	.zbBottom .contentBox{
		width: 1170px;
		margin:0 auto;
	}
	.zbBottom .zbBottomContent .zbBottomTop span{
		display: inline-block;
	    margin-right: 20px;
	    font-size: 14px;
	    text-align: center;
	    background-color: #2d2d2d;
	    color: #afafaf;
	    cursor: pointer;
	    padding: 7px 12px;
	}
	.zbBottom .zbBottomContent .zbBottomTop span.current,.zbBottom .zbBottomContent .zbBottomTop span:hover{
		position: relative;
	    color: #fff;
	    background-color: #495059;
	}
	.zbBottomTop .TABbox{
		margin-top: 20px;
	}
	.zbBottomTop .TABbox ul{
		overflow: hidden;
	}
	.zbBottomTop .TABbox ul li{
		float: left;
		margin-right: 14px;
		margin-bottom: 10px;
	}
	.zbBottomTop .TABbox ul li a{
		font-size: 12px;
		color: #ccc;
	}
	.zbBottomTop .TABbox ul li a:hover{
		color: #fff;
	}
	.zbBottomTop .TABbox.TABbox1{
		display: none;
	}
	.zbBottom .zbBottomContent .lineBorder{
		border-top:1px solid #666;
		opacity: 0.6;
		margin: 10px 0 30px;
	}
	.zbBottom .zbBottomContent .zbtabList{
		margin-bottom: 20px;
	}
	.zbBottom .zbBottomContent .zbtabList ul{
		overflow: hidden;
	}
	.zbBottom .zbBottomContent .zbtabList ul li{
		float: left;
	}
	.zbBottom .zbBottomContent .zbtabList ul a{
		height: 16px;
   		color: #fff;
   		font-size: 14px;
	}
	.zbBottom .zbBottomContent .zbtabList ul a:hover{
		color: #fff;
	}
	.zbBottom .zbBottomContent .zbtabList ul li i {
	    display: inline-block;
	    margin: 0 19px;
	    width: 1px;
	    height: 12px;
	    background-color: #666;
	    position: relative;
	    top: 2px;
	}
	.phoneCode p{
		font-size: 24px;
		color: #ccc;
	}
	.phoneCode p img{
		width: 30px;
		height: 24px;
		margin-right: 10px;
		position: relative;
		top: -4px;
	}
	.phoneCode p span{
		font-size: 12px;
		margin-left: 8px;
	}
	.phoneCode div{
		margin-top: 20px;
		font-size: 12px;
		color: #ccc;
	}
	.zbBottomContent .poi{
		position: relative;
	}
	.qcodeBTM{
		position: absolute;
		right: 0;
		top: 0px;
	}
	.qcodeBTM dl{
		float: left;
		margin-left: 30px;
	}
	.qcodeBTM dl dt{
		width: 102px;
		height: 102px;
		margin-bottom: 9px;
	}
	.qcodeBTM dl dd{
		text-align: center;
		color: #ccc;
		font-size: 12px;
	}
 	</style>
<div class="container-fluid footer">
    <div class="zbBottom">
    	<div class="zbBottomContent">
			<div class="zbBottomTop contentBox">  
				<p class="tabspan"><span class="current">镖狮服务</span></p>
				<div class="TABbox TABbox0">
					<ul>
						<li><a href="/product/376.htm?_pb=bsfw" target="_blank">微信代运营</a></li>
						<li><a href="/product/427.htm?_pb=bsfw" target="_blank">百度百科</a></li>
						<li><a href="/product/428.htm?_pb=bsfw" target="_blank">微信朋友圈广告</a></li>
						<li><a href="/product/370.htm?_pb=bsfw" target="_blank">网站定制开发</a></li>
						<li><a href="/product/379.htm?_pb=bsfw" target="_blank">微信小程序模版开发</a></li>
						<li><a href="/product/397.htm?_pb=bsfw" target="_blank">整合营销推广</a></li>
					</ul>
				</div>
			</div>
			<div class="lineBorder"></div>
			<div class="poi contentBox">
				<div class="zbtabList">
					<ul>
						<li><a rel="nofollow" href="/aboutus.htm?tab=3" target="_blank">关于我们</a><i></i></li>
						<li><a rel="nofollow" href="/aboutus.htm" target="_blank">效果保障</a><i></i></li>
						<li><a rel="nofollow" href="/aboutus.htm?tab=1" target="_blank">服务保障</a><i></i></li>
						<li><a rel="nofollow" href="/aboutus.htm?tab=2" target="_blank">服务流程</a><i></i></li>
						<li><a rel="nofollow" href="/complain/suggest.htm" target="_blank">意见反馈</a><i></i></li>
						<li><a rel="nofollow" href="/websiteNav.htm" target="_blank">网站导航</a></li>
					</ul>
				</div>
				<div class="phoneCode">
					<p>
						<img src="picture/phone01.png" alt="phone">4000-581-581 <span>工作时间 9:30-18:30</span>
					</p>
					<div>
						©Designed by @51biaoshi.com 北京发镖网络科技有限公司 京ICP备15062508-2
					</div>
				</div>
				<div class="qcodeBTM">
					<dl>
						<dt>
							<img src="picture/lion-weixin-new.png" alt="微信公众号">
						</dt>
						<dd>微信公众号</dd>
					</dl>
					<dl>
						<dt>
							<img src="picture/lion-app-zhushou.jpg" alt="微信公众号">
						</dt>
						<dd>镖狮助手（服务商）</dd>
					</dl>
				</div>
			</div>
    	</div>
    </div>
</div>
<!--乐语在线咨询-->
<script type="text/javascript" charset="utf-8" src="js/10094224.js"></script>
	<script type="text/javascript" src="js/monitor.js"></script></body>
<!-- 服务保障 -->
<script>
	$(function(){
		$('.BzNav ul li').click(function(){
	        //$(this).siblings('li').removeClass('current');
	        //$(this).addClass('current');
	        var id = $(this).attr('data-id');
	        var top = parseInt($('#'+id).offset().top) - 55;
	        $('html,body').animate({'scrollTop':top + 'px'},300);
	    });
	    
	})
</script>
</html>