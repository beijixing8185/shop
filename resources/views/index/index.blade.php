@extends('welcome')

@section('title','首页')
@section('keywords','描述')
@section('description','关键字')

@section('css')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection


@section('content')

	<style>
		.nav-list li{
			display: inline-block;
		    padding: 0 5px;
		    height: 40px;
		    line-height: 40px;
		    margin-top: 18px;
		}
		.nav-list li a{
			font-size: 16px;
		}
		.logo-title{
			font-size: 14px;
			padding-left: 10px;
			padding-right: 20px;
		}
		.nav-list-new li a{
			font-size: 16px;
		}
		.res-input > input{
			width: 225px;
		}
		#goTop{
			display: none;
		}
		#_submit_error02,#_submit_success02{
			display: none;
		}
	</style>
    <!--头部1 begin-->

	<!--头部1 end-->
	
	<!--冻结提示 begin-->
	<div id="indexbeactive" class="freeze modal fade">
		<div class="freeze-inner">
			<b  data-dismiss="modal"><img src="/picture/shader-closed.png" /></b>
			<div><img src="/picture/sure-img.png" />您的账号已冻结</div>
			<p>如有疑问，请联系客服4000-581-581</p>
			<a data-dismiss="modal">确定</a>
		</div>
	</div>
	<!--冻结提示 end-->
	<style>
		.nav-list-new li{
			width: 115px;
			text-align: center;
		}
		.hotImg{
			position: relative;
		}
		.hotImg img{
			position: absolute;
			top: 0px;
			right: 5px;
		}
		.logo-img a{
			margin:5px 0;
			display: inline-block;
			width: 155px;
			height: 54px;
			background: url(/images/logo02.png) no-repeat center;
			background-size: 155px 54px;
		}
	</style>
	<!--头部2 begin-->
    <div class="container-fluid header-md">
        <div class="container">
            <div class="pull-left logoImgTitle" style="margin-right: 70px;">
            	<h1>
	                <p class="pull-left logo-img"><a href="/"></a></p>
                </h1>
            </div>
            <ul class="pull-left nav-list nav-list-new">
                <li class="hoverA" style="width: 60px;"><a href="" class='active'>首页</a></li>
                <li class="hotImg"><a href="/jhs/page1.htm">聚划算 <!-- <img src="/picture/hot.gif" alt=""> --></a></li>
                <li><a rel="nofollow" href="/aboutus.htm">效果保障</a></li>
				<li><a href="/cmslist/cl0-pg1.htm">营销攻略</a></li>
            </ul>
            <div id="publish-hover" class="publish-hover pull-right">
				<b></b>
            	<a class="publish-header pull-left color-theme caClass" traceflag="header_pop_发布需求" id="headerDemand" onclick="javascript:tofb('','');">发布需求</a>
				<div class="p-list">
					<p class="p-title">定制您的需求，坐等服务商上门</p>
					<dl class="p-con">
						<dt class="pull-left"><img src="/picture/p-icon01.png" alt=""/></dt>
						<dd class="pull-left">
							<p>一键发布 </p>
							不需花时间选服务商  
						</dd>
					</dl>
					<dl class="p-con">
						<dt class="pull-left"><img src="/picture/p-icon02.png" alt=""/></dt>
						<dd class="pull-left">
							<p>快速响应 </p>
							需求发布后，15分钟快速响应 
						</dd>
					</dl>
					<dl class="p-con">
						<dt class="pull-left"><img src="/picture/p-icon03.png" alt=""/></dt>
						<dd class="pull-left">
							<p> 智能推荐</p>
							大数据智能推荐最优服务商
						</dd>
					</dl>
					<dl class="p-con">
						<dt class="pull-left"><img src="/picture/p-icon04.png" alt=""/></dt>
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
			<div class="pull-right res-input">
				 <input type="text" id="searchFile" name="searchFile" placeholder=""/>
				 <div class="glyphicon glyphicon-search" onclick="searchWord()" id="searchBtn"></div>
				 <input type="hidden" id="searchStr" value='[{"searchName":"微信代运营","url":"http://www.51biaoshi.com/product/376.htm?_pb=search"},{"searchName":"朋友圈广告","url":"http://www.51biaoshi.com/product/428.htm?_pb=search"},{"searchName":"百度百科","url":"http://www.51biaoshi.com/product/427.htm?_pb=search"},{"searchName":"开发建站","url":"http://www.51biaoshi.com/product/370.htm?_pb=search"},{"searchName":"小程序定制","url":"http://www.51biaoshi.com/product/438.htm?_pb=search"},{"searchName":"整合营销","url":"http://www.51biaoshi.com/product/432.htm?_pb=search"}]'>
				 <ul class="find-example" id="findExample">
                    <li><a href="/product/419.htm" target="_blank">媒体发稿</a></li>
                </ul>
			</div>
        </div>
    </div>
	<!--头部2 end-->
	
	<!--固定滚动头部 begin-->
	<style>
		.tabList1{
			position: relative;
			text-align: center;
			cursor: pointer;
		}
		.nav-list1 li{
			margin-top: 0;
		}
		.tabInfo2{
			top: 52px;
			left: 0;
			box-shadow: 0 0 8px rgba(0, 36, 100, 0.3);
		}
		.tabList1 .rotate{
			display: inline-block;
		    width: 0;
		    height: 0;
		    border: 5px solid transparent;
		    border-top: 5px solid #3c404c;
		    background-color: #ffda44;
		    position: relative;
		    top: 2px;
		    left: 3px;
		}
		.tabInfo2 p{
			height: 40px;
		    line-height: 40px;
		    text-align: center;
		    background-color: #fff;
		    width: 110px;
		    cursor: pointer;
		}
		.header-fix{
			height: 52px;
		}
		.header-fix .nav-list li:hover a{
			border-radius: 4px;
		}
	</style>
    <div class="container-fluid header-md header-fix" style="display:none">
        <div class="container">
            <!--<div class="pull-left logoImgTitle">
                <p class="pull-left logo-img"><img src="/picture/fixed-logo01.png" alt=""/></p>
            </div>-->
            <ul class="pull-left nav-list nav-list1">
            	<li><a href="/" class="active">首页</a></li>
            	<li><a href="/jhs/page1.htm">聚划算</a></li>
            	<li><a rel="nofollow" href="/aboutus.htm?tab=3">效果保障</a></li>
            	<li><a rel="nofollow" href="/cmslist/cl0-pg1.htm">营销攻略</a></li>
            </ul>
            <div class="pull-right fix-publish"><a href="javascript:void(0)" class="caClass" onclick="javascript:tofb('','');" id="toLeadsButton1" traceflag="fixbar_pop_我要发需求" >我要发需求</a></div>
            <div class="fix-input pull-right">
                <input type="text" id="fixed-searchFile" name="searchFile_f" placeholder="搜索您感兴趣的服务/案例"/>
				<div class="fixed-color-theme glyphicon glyphicon-search" onclick="searchWord()"></div>
            </div>
			<script>
				$('.tabList1').hover(function(){
					$(this).find('.tabInfo').fadeIn(200);
					$('.tabList1 .rotate').css('background-color', '#fff');
				},function(){
					$(this).find('.tabInfo').fadeOut(200);
					$('.tabList1 .rotate').css('background-color', '#ffda44');
				});
				$('.tabInfo p').hover(function(){
					$(this).parents('li').addClass('active');
				},function(){
					$(this).parents('li').removeClass('active');
				})
			</script>
        </div>
    </div>
	<!--固定滚动头部 end-->
   
	<!--头部 banner begin-->
	@include('./common/index_nav')
	<!--头部 banner end-->
   	
	<!--showtype begin-->
    <!--遍历判断数据对应的showtype-->
					    			<style>
	#showtap07 {background:;}
    #showtap07 .itembg {width:100%;height:504px;background:url("/images/bannerimg01-v1.1.png") no-repeat center center;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;}
    /*头部*/
	#showtap07 #carousel-banner {cursor:pointer;position:relative;}
	#showtap07 #carousel-banner .banner-indicator {position:absolute;top:0;left:20%;left:calc(50% - 585px);left:-webkit-calc(50% - 585px);left:-moz-calc(50% - 585px);width:1170px;height:504px;}
	#showtap07 #carousel-banner .carousel-indicators{width: 20%;left: 80%; text-align: right;margin-left:0;}
	#showtap07 #carousel-banner .carousel-indicators li {background:rgba(255,255,255,0.68);box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);width:12px;height:12px;border:none}
	#showtap07 #carousel-banner .carousel-indicators .active{background:rgba(255,218,68,1);border:none;width:14px;height:14px;}
	#showtap07 .banner-ji.carousel-control {margin-top: 210px;width: 60px;opacity: 0.6;} 
	#showtap07 .banner-ji.carousel-control:hover { opacity: 1;}
	#showtap07 .carousel-control {width:28px;}
	#showtap07 .carousel-control.left, .carousel-control.right{background-image:none !important;}
	#showtap07 .banner-l-span {display:block;opacity:0.6;width:60px;height:80px;background:transparent;padding-top: 24px;}
</style>
<!--服务流程-->
<div id="showtap07" class="container-fluid">
        <div id="carousel-banner" class="carousel slide" data-ride="carousel">
         	<div class="container banner-indicator">
         		<ol class="carousel-indicators">
        	            	<li id="bannerNum1" class="caClass" traceflag="content_tab_banner切换1" data-target="#carousel-banner" data-slide-to="0" class="active" ></li>
        	            	<li id="bannerNum2" class="caClass" traceflag="content_tab_banner切换2" data-target="#carousel-banner" data-slide-to="1" ></li>
        	            	<li id="bannerNum3" class="caClass" traceflag="content_tab_banner切换3" data-target="#carousel-banner" data-slide-to="2" ></li>
        	            	<li id="bannerNum4" class="caClass" traceflag="content_tab_banner切换4" data-target="#carousel-banner" data-slide-to="3" ></li>
        					</ol>
         	</div>
            <div class="carousel-inner" role="listbox">
                        	<div class="item  active " onclick="window.open('http://www.51biaoshi.com/activity/906.htm?tab=0&_pb=slb001')">
					<!--div class="itembg" style="background:url('http://www.51biaoshi.com/product/loadImage.htm?imagepath=showtype/ec1dd631-e0eb-4b41-be76-b1d57e120340_cubead.jpg') no-repeat center center;"></div-->
                    <div class="itembg" style="background:url('/images/loadimage.htm') no-repeat center center;"></div>
                </div>
                        	<div class="item " onclick="window.open('http://www.51biaoshi.com/activity/379.htm?_pb=slb002')">
					<!--div class="itembg" style="background:url('http://www.51biaoshi.com/product/loadImage.htm?imagepath=showtype/24a41163-4e01-4086-a733-2e12c5d576ad_cubead.jpg') no-repeat center center;"></div-->
                    <div class="itembg" style="background:url('/images/loadimage.htm') no-repeat center center;"></div>
                </div>
                        	<div class="item " onclick="window.open('http://www.51biaoshi.com/product/419.htm?_pb=slb003')">
					<!--div class="itembg" style="background:url('http://www.51biaoshi.com/product/loadImage.htm?imagepath=showtype/037c1383-5a27-4904-93c0-c62a43f7cb12_cubead.jpg') no-repeat center center;"></div-->
                    <div class="itembg" style="background:url('/images/loadimage.htm') no-repeat center center;"></div>
                </div>
                        	<div class="item " onclick="window.open('http://www.51biaoshi.com/aboutus.htm?tab=0&_pb=slb004')">
					<!--div class="itembg" style="background:url('http://www.51biaoshi.com/product/loadImage.htm?imagepath=showtype/3a4f2092-fbe9-4718-85b3-a31115067502_cubead.jpg') no-repeat center center;"></div-->
                    <div class="itembg" style="background:url('/images/loadimage.htm') no-repeat center center;"></div>
                </div>
                        </div>
				 <a class="left banner-ji carousel-control" href="#carousel-banner" role="button" data-slide="prev">
                    <span class="banner-l-span"><img src="/picture/banner-l01.png" /></span>
                </a>
                <a class="right banner-ji carousel-control" href="#carousel-banner" role="button" data-slide="next">
                    <span class="banner-l-span"><img src="/picture/banner-r01.png" /></span>
                </a>  
        </div>
</div>
<script src="/js/bootstrap.min.js"></script>
<script>
	$('#carousel-hotSp').carousel({
        pause: true,
        interval: false
    });
</script>											<style>
	#showtap01 {background-color:;}
    #showtap01 .showtap-inner {}
    #showtap01 li {float:left;width:234px;padding:12px 0;padding-left:20px;}
    #showtap01 a {display:block;overflow: hidden;}
    #showtap01 .media-img {width:58px;float:left;}
    #showtap01 .media-title {width:141px;float:left;line-height:16px;font-size:14px;color:#999;margin-left:10px;margin-top:5px;border-right:1px solid #e6e6e6;padding-right:10px;}
    #showtap01  li:last-child .media-title {border-right:none}
</style>
<div id="showtap01" class="container-fluid">
    <ul class="showtap-inner container">
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56498-at668.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="镖狮获央视关注，多次报道"></p>
	                <div class="media-title" style="color:">镖狮获央视关注，多次报道</div>
	            </a>
	        </li>
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56494-at664.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="镖狮网助力大学生创业"></p>
	                <div class="media-title" style="color:">镖狮网助力大学生创业</div>
	            </a>
	        </li>
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56496-at666.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="中国互联网大会开幕，镖狮网获关注"></p>
	                <div class="media-title" style="color:">中国互联网大会开幕，镖狮网获关注</div>
	            </a>
	        </li>
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56495-at665.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="镖狮网受邀参加世界互联网大会"></p>
	                <div class="media-title" style="color:">镖狮网受邀参加世界互联网大会</div>
	            </a>
	        </li>
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56497-at667.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="镖狮网的创业成功之路"></p>
	                <div class="media-title" style="color:">镖狮网的创业成功之路</div>
	            </a>
	        </li>
    	    </ul>
</div>											<style>
    #showtap02 {background-color:#F6F6F6;padding:30px 0;}
    #showtap02 .ensure {margin-left:-12.5px;padding:0;}
    #showtap02 li{position:relative;float:left;width:224px;background:#fff;margin-left:12.5px;text-align: center;}
    #showtap02 .bz-con {position:absolute;top:30px;left:20px;width:184px;font-size:14px;color:#666;line-height:23px;}
    #showtap02 .bz-con p {font-size:18px;color:#333;margin-bottom:15px;overflow: hidden}
    #showtap02 li:hover{box-shadow: 0px 15px 30px 0px rgba(0, 0, 0, 0.1);}
</style>
<!--保障 -->
<div id="showtap02" class="container-fluid">
    <div class="container">
        <ul class=" ensure">
        		    		<li>
	                <img src="/picture/loadimage.htm" alt="严选服务商">
	                <div class="bz-con" style="color:">
	                    <p style="color:">严选服务商</p>
			            录取率16%，100%缴纳保证金，5年服务经验
	                </div>	
	            </li>
	    		    		<li>
	                <img src="/picture/loadimage.htm" alt="效果数据监理">
	                <div class="bz-con" style="color:">
	                    <p style="color:">效果数据监理</p>
			            真实数据跟踪，效果数据监理，24小时快速维权
	                </div>	
	            </li>
	    		    		<li>
	                <img src="/picture/loadimage.htm" alt="资金担保">
	                <div class="bz-con" style="color:">
	                    <p style="color:">资金担保</p>
			            交易资金平台托管，像淘宝一样，服务满意再付款
	                </div>	
	            </li>
	    		    		<li>
	                <img src="/picture/loadimage.htm" alt="专注营销10年">
	                <div class="bz-con" style="color:">
	                    <p style="color:">专注营销10年</p>
			            专业团队，服务20万+企业，拥有丰富的成功案例
	                </div>	
	            </li>
	    		    		<li>
	                <img src="/picture/loadimage.htm" alt="量身定制营销方案">
	                <div class="bz-con" style="color:">
	                    <p style="color:">量身定制营销方案</p>
			            智能问诊系统，快速定位营销问题，量身定制解决方案
	                </div>	
	            </li>
	    	        </ul>
    </div>
</div>							    			<style>
    #showtype12 {background:#ffffff;}
    #showtype12 .hotb-list {padding:40px 0;}
    #showtype12 .hotb-list > li {float:left;width:276px;margin-right:22px;-webkit-transition: all .3s ease;transition: all .3s ease;box-sizing: border-box;margin-bottom: 15px;}
    #showtype12 .hotb-list > li:hover {-webkit-box-shadow: 0 15px 30px rgba(0,0,0,.1);
        box-shadow: 0 15px 30px rgba(0,0,0,.1);
        -webkit-transform: translate3d(0,-2px,0);
        transform: translate3d(0,-2px,0);
        border-radius: 2px;
        border-color: transparent;}
    #showtype12 .hotb-list > li:nth-child(4n){
        margin-right: 0;
    }
    #showtype12 .hot-bb {padding-top:60px;text-align: center;}
    #showtype12 .hot-bb span {display:block;position:relative;top:-10px;font-size:16px;color:#666;}
    #showtype12 .hot-bb span a{position:absolute;top:0;right:0; color: #666;font-size: 12px;}
    #showtype12 .hot-bb span a:hover{color: #ff4400;}
    #showtype12 .title-warp {position:relative;float:left;left:50%}
    #showtype12 .title-inner {position:relative;float:left;right:50%;padding:0 40px;border-top:1px solid #ccc;}
    #showtype12 .title-inner > b {background-color: #ffffff;display: block;position:relative;top:-20px;padding:0 15px;font-size:28px;color:#333;}
    #showtype12 .hotb-list li{
        width: 276px;
        height: 186px;
        background: url(/images/jhs-01.png) no-repeat center center;
        background-size: 276px 186px;
        cursor: pointer;
        position: relative;
    }
    #showtype12 .hotb-list li a{display:block;width:100%;height:100%;}
    #showtype12 .hotb-list li div.topText{position: absolute; top: 25px; left: 20px; font-size: 20px; color: #fff; }
    #showtype12 .hotb-list li div.topText p{overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    #showtype12 .hotb-list li div.topText p:nth-of-type(1){width: 255px; }
    #showtype12 .hotb-list li div.topText p:nth-of-type(2){font-size: 14px; width: 180px; }
    #showtype12 .hotb-list li div.bottomPrice{position: absolute; bottom: 10px; left: 12px; font-size: 20px; color: #fff; }
    #showtype12 .hotb-list li div.bottomPrice b,#showtype12 .hotb-list li div.bottomPrice span{font-size: 14px; }
    #showtype12 .hotb-list li div.bottomPrice span{text-decoration: line-through; }
</style>
<div  id="showtype12" class="container-fluid">
    <div class="container">
        <div class="hot-bb">
            <div><div class="title-warp"><p class="title-inner"><b>优选聚划算</b></p></div></div>
            <span>优选服务，引爆价格优惠
                                        <a href="http://www.51biaoshi.com/jhs/page1.htm?_pb=yxjhs001" target="_blank">更多>></a>
                                                                                                                                                        </span>
        </div>
        <ul class="hotb-list">
        	                        	                            <li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 276px 186px;">
                <a href="http://www.51biaoshi.com/product/376.htm?_pb=yxjhs2"  target="_blank">
                	<div class="topText">
                        <p>公众号代运营</p>   
                        <p>微信运营整包方案</p>
                    </div>
                    <div class="bottomPrice">
                        <p><b>¥</b>2499起 <span>¥5000起</span></p>
                    </div>
                </a>
            </li>
                        	                            <li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 276px 186px;">
                <a href="http://www.51biaoshi.com/product/457.htm?_pb=yxjhs3"  target="_blank">
                	<div class="topText">
                        <p>订阅号搭建</p>   
                        <p>低成本从零打造宣传阵地</p>
                    </div>
                    <div class="bottomPrice">
                        <p><b>¥</b>1999起 <span>¥4200起</span></p>
                    </div>
                </a>
            </li>
                        	                            <li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 276px 186px;">
                <a href="http://www.51biaoshi.com/product/427.htm?_pb=yxjhs4"  target="_blank">
                	<div class="topText">
                        <p>百度百科</p>   
                        <p>百科词条创建修改</p>
                    </div>
                    <div class="bottomPrice">
                        <p><b>¥</b>1500起 <span>¥2500起</span></p>
                    </div>
                </a>
            </li>
                        	                            <li style="background:url('/images/loadimage.htm') no-repeat center center;background-size: 276px 186px;">
                <a href="http://www.51biaoshi.com/product/370.htm?_pb=yxjhs5"  target="_blank">
                	<div class="topText">
                        <p>网站定制开发</p>   
                        <p>量身定制网站</p>
                    </div>
                    <div class="bottomPrice">
                        <p><b>¥</b>2388起 <span>¥5000起</span></p>
                    </div>
                </a>
            </li>
                        	        </ul>
    </div>
</div>
											<style>
    #showtap03 {background:#ffffff;}
    #showtap03 .hotb-list {padding:30px 0 50px;margin-left:-16.5px;}
    #showtap03 .hotb-list li {float:left;width:280px;margin-left:16.5px;border:1px solid #e6e6e6;box-shadow: 0 0 0 #fff;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;cursor:pointer;}
    #showtap03 .hotb-list li:hover {-webkit-box-shadow: 0 15px 30px rgba(0,0,0,.1);
        box-shadow: 0 15px 30px rgba(0,0,0,.1);
        -webkit-transform: translate3d(0,-2px,0);
        transform: translate3d(0,-2px,0);
        border-radius: 2px;
        border-color: transparent;}
    #showtap03 .hotb-list li .list-img {width:278px;height:190px;overflow: hidden;}
    #showtap03 .hotb-list li .list-img img{   -webkit-transition: all .7s;
        -moz-transition: all .7s;
        -ms-transition: all .7s;
        -o-transition: all .7s;
        transition: all .7s;}
    #showtap03 .hotb-list li:hover  .list-img img{    -webkit-transform: scale(1.03);
        -moz-transform: scale(1.03);
        transform: scale(1.03);}
    #showtap03 .hotb-con {height:72px;overflow: hidden;padding:15px 10px;background-color: #fff;}
    #showtap03 .hotb-con > p {font-size:16px;color:#333;}
    #showtap03 .hotb-con > div {position:relative;font-size:14px;color:#999;margin-top: 2px;}
    #showtap03 .hotb-con > div b {position:absolute;bottom:0;right:0;font-size:14px;color:#ff4400}
    #showtap03 .hot-bb {padding-top:70px;text-align: center;}
    #showtap03 .hot-bb span {display:block;position:relative;top:-10px;font-size:16px;color:#666;}
    #showtap03 .title-warp {position:relative;float:left;left:50%}
    #showtap03 .title-inner {position:relative;float:left;right:50%;padding:0 40px;border-top:1px solid #ccc;}
    #showtap03 .title-inner > b {display: block;position:relative;top:-20px;padding:0 15px;background-color: #ffffff;font-size:28px;color:#333;}
</style>
<!--热门宝贝-->
<div  id="showtap03" class="container-fluid">
    <div class="container">
    	<div class="hot-bb">
            <div><div class="title-warp"><p class="title-inner"><b>最热门服务</b></p></div></div>
            <span>行业热点，给您最快捷服务推荐</span>
        </div>
    	<ul class="hotb-list">
    	    		<li>
    			<a href="http://www.51biaoshi.com/product/379.htm?_pb=rmfw1" target="view_window">
                <p class="list-img"><img src="/picture/loadimage.htm" alt="小程序模板开发"></p>
                <div class="hotb-con">
                    <p style="color:">小程序模板开发</p>
                    <div style="color:">低成本，高效率<b style="color:">8800元起</b></div>
                </div>
                </a>
            </li>
    	    		<li>
    			<a href="http://www.51biaoshi.com/product/428.htm?_pb=rmfw2" target="view_window">
                <p class="list-img"><img src="/picture/loadimage.htm" alt="朋友圈广告"></p>
                <div class="hotb-con">
                    <p style="color:">朋友圈广告</p>
                    <div style="color:">用最生活的方式接近客户<b style="color:">5000元起</b></div>
                </div>
                </a>
            </li>
    	    		<li>
    			<a href="http://www.51biaoshi.com/product/429.htm?_pb=rmfw3" target="view_window">
                <p class="list-img"><img src="/picture/loadimage.htm" alt="模版建站"></p>
                <div class="hotb-con">
                    <p style="color:">模版建站</p>
                    <div style="color:">维护简单，节省成本<b style="color:">2000元起</b></div>
                </div>
                </a>
            </li>
    	    		<li>
    			<a href="http://www.51biaoshi.com/product/432.htm?_pb=rmfw4" target="view_window">
                <p class="list-img"><img src="/picture/loadimage.htm" alt="口碑营销"></p>
                <div class="hotb-con">
                    <p style="color:">口碑营销</p>
                    <div style="color:">量身定制推广渠道<b style="color:">2800元起</b></div>
                </div>
                </a>
            </li>
    	    	</ul>
    </div>
</div>											<style>
    #showtap04 {background:#F6F6F6;}
    #showtap04 .service {padding-top:70px;}
    #showtap04 .title-warp {position:relative;float:left;left:50%}
    #showtap04 .title-inner {position:relative;float:left;right:50%;padding:0 40px;border-top:1px solid #ccc;}
    #showtap04 .title-inner > b {display: block;position:relative;top:-20px;padding:0 15px;background:#f6f6f6;font-size:28px;color:#333;}
    #showtap04 .lc-list {position:relative;overflow: hidden;padding:30px 0 50px;}
    #showtap04 .lc-list dl {float:left;width:195px;text-align: center}
    #showtap04 .lc-list dl:hover dd b {background:#ffe000;color:#333;}
    #showtap04 .lc-list dd {margin-top:25px;font-size:14px;color:#333;}
    #showtap04 .lc-list dd b {position:relative;display: block;z-index:99;margin:15px auto 0;width:32px;height:32px;line-height:32px;text-align: center;font-size:14px;color:#999;border-radius:50%;background:#fff;}
    #showtap04 .lc-list > i {display: block;position:absolute;width:975px;bottom:66px;left:97px;z-index:9;border-top:1px solid #e6e6e6;}
    #showtap04 .lc-list  dt img{   -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -ms-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;}
    #showtap04 .lc-list dl:hover dt img{    -webkit-transform: translateY(-5px);
        -moz-transform: translateY(-5px);
        transform: translateY(-5px);}
</style>
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
</div>											<style>
    #showtap05 {background:;}
    #showtap05 .jingx-bb {padding-top:70px;padding-bottom:40px;text-align: center}
    #showtap05 .jingx-bb span {display:block;position:relative;top:-10px;font-size:16px;color:#666;}
    #showtap05 .title-warp {position:relative;float:left;left:50%}
    #showtap05 .title-inner {position:relative;float:left;right:50%;padding:0 40px;border-top:1px solid #ccc;}
    #showtap05 .title-inner > b {display: block;position:relative;top:-20px;padding:0 15px;background-color:#fff;font-size:28px;color:;}
</style>
<!--精选产品title-->
<div id="showtap05" class="container-fluid">
    <div class="container">
        <div class="jingx-bb">
        	<div><div class="title-warp"><p class="title-inner"><b>精选产品与服务</b></p></div></div>
            <span>已为上百万企业提供满意的企业营销服务</span>          
        </div>

    </div>
</div>											<!--拆分标题-->
				<!--拆分背景色-->
						<style>
    #showtap06 {background:#FFF;}
    #showtap06 .jingx-list {padding-bottom:30px;}
    #showtap06 .jingx-div {width:575px;}
    #showtap06 .list-left {float:left;width:125px;height:380px;overflow: hidden;background-color: #55a3f2;}
    #showtap06 .jingx-title {font-size: 24px;color:#fff;padding:35px;}
    #showtap06 .list-right {float:left;width:450px;height:380px;}
    #showtap06 .jptab-list {padding-left:20px;text-align: right}
    #showtap06 .jptab-list li {color:#fff;font-size:14px;padding:8px 10px;}
    #showtap06 .jingx-div .jptab-list .active {background:#fff;color:#55a3f2}
    #showtap06 .jingx-right-div .jptab-list .active {background:#fff;color:#24a4f5}
    #showtap06 .list-right > a {}
    #showtap06 .list-right dl{position:relative;z-index:5;float:left;width: 225px;height: 190px;background-color: #fff;padding:25px 0 25px 20px;box-shadow: 0 0 0 #fff; -webkit-transition: all .3s ease;
        transition: all .3s ease;cursor:pointer;    border-top: 1px solid #e5e5e5;    border-right: 1px solid #e5e5e5;}
    #showtap06 .list-right dl:hover {-webkit-box-shadow: 0 15px 30px 0px rgba(0,0,0,.1);
        box-shadow: 0 15px 30px 0px rgba(0,0,0,.1);border-color:transparent;z-index: 99;}
    #showtap06 .list-right dl:hover dd {border-color:transparent;}
     #showtap06 .list-right  > div a:nth-child(3) dl{border-bottom: 1px solid #e5e5e5;}
     #showtap06 .list-right  > div a:last-child dl{border-bottom: 1px solid #e5e5e5;}
    #showtap06 .list-right dt{position:absolute;bottom:1px;right:1px;z-index:9;}
    #showtap06 .list-right dd {position:absolute;top:25px;left:20px;bottom:20px;right:0;z-index:99;}
    #showtap06 .list-right dd >p {font-size:16px;color:#333;width:100%;overflow:hidden;text-overflow:ellipsis;white-space: nowrap}
    #showtap06 .list-right dd >span {display:block;font-size:14px;color:#999;margin:5px 0 10px;}
    #showtap06 .list-right dd >b {font-size:14px;color:#ff4400;}
    #showtap06 .list-right dt img{   -webkit-transition: all .7s;
        -moz-transition: all .7s;
        -ms-transition: all .7s;
        -o-transition: all .7s;
        transition: all .7s;}
    #showtap06 .list-right dl:hover dt img{    -webkit-transform: scale(1.03);
        -moz-transform: scale(1.03);
        transform: scale(1.03);}
</style>
<!--精选产品列表-->
<div id="showtap06" class="container-fluid">
    <div class="container jingx-list">
        <div class="jingx-div pull-left" >
            <div class="list-left" style="background-color:#55a3f2">
                <p class="jingx-title">营销套餐</p>
                <ul class="jptab-list" data-id="changeTab">
                	<!--左侧导航栏 start-->
                	                		                			                				<li data-id="tab1" class="active">微信套餐</li>
                				                			                		                                    		                                    		                                    		                                    		                                    		                			                				<li data-id="tab6">百度搜索营销</li>
                				                			                		                                    		                                    		                                    		                                    		                                    		                			                				<li data-id="tab11">小程序开发</li>
                				                			                		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                        <!--左侧导航栏 end-->
                </ul>
            </div>
            <div class="list-right">
            	<!--右侧详情 start-->
            	            		            		            		<div data-tab="tab1">
	            		            		            			            		            			            		<a href="http://www.51biaoshi.com/product/376.htm?_pb=yxtc002"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">微信公众号代运营</p>
	                                <span style="color:">微信公众号全托管</span>
	                                <b style="color:">2499元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="微信公众号代运营"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/375.htm?_pb=yxtc003"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">微信公众号注册</p>
	                                <span style="color:">开通微信公众号，基础搭建</span>
	                                <b style="color:">399元</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="微信公众号注册"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/428.htm?_pb=yxtc004"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">微信朋友圈广告</p>
	                                <span style="color:">腾讯朋友圈原生广告</span>
	                                <b style="color:">5000元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="微信朋友圈广告"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/430.htm?_pb=yxtc005"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">广点通广告</p>
	                                <span style="color:">定向投放，精准曝光</span>
	                                <b style="color:">5000元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="广点通广告"></dt>
	                        </dl>
                    	</a>
                    		            		            		                    			            </div>
            		            		            		<div data-tab="tab6" style="display:none">
	            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		<a href="http://www.51biaoshi.com/product/378.htm?_pb=yxtc007"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">SEO关键词整站优化</p>
	                                <span style="color:">成本低，品牌效应好</span>
	                                <b style="color:">10000元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="SEO关键词整站优化"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/383.htm?_pb=yxtc008"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">竞价账户开通充值</p>
	                                <span style="color:">竞价广告账户开通充值</span>
	                                <b style="color:">10000元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="竞价账户开通充值"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/405.htm?_pb=yxtc009"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">百度知道</p>
	                                <span style="color:">百度知道问答推广</span>
	                                <b style="color:">600元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="百度知道"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/427.htm?_pb=yxtc010"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">百度百科</p>
	                                <span style="color:">百度百科创建/修改</span>
	                                <b style="color:">1500元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="百度百科"></dt>
	                        </dl>
                    	</a>
                    		            		            		                    			            </div>
            		            		            		<div data-tab="tab11" style="display:none">
	            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		<a href="http://www.51biaoshi.com/product/442.htm?_pb=yxtc012"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:"> 全行业小程序模版</p>
	                                <span style="color:">仅需7元即可体验</span>
	                                <b style="color:">7元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt=" 全行业小程序模版"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/438.htm?_pb=yxtc013"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">小程序定制开发</p>
	                                <span style="color:">个性UI设计 定制专属功能</span>
	                                <b style="color:">6800元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="小程序定制开发"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/440.htm?_pb=yxtc014"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">微网站模版</p>
	                                <span style="color:">高端高效 品质专业</span>
	                                <b style="color:">3288元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="微网站模版"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/379.htm?_pb=yxtc015"" target="view_window">
	            			<dl class="con-first">
	                            <dd>
	                                <p style="color:">小程序模板升级开发</p>
	                                <span style="color:">高性价比</span>
	                                <b style="color:">8800元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="小程序模板升级开发"></dt>
	                        </dl>
                    	</a>
                    		            		            		                    			            </div>
            		            		            		<div data-tab="tab16" style="display:none">
	            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            		                    			            </div>
            		            		            		<div data-tab="tab21" style="display:none">
	            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            		                    			            </div>
            		            		            		<div data-tab="tab26" style="display:none">
	            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            		                    			            </div>
            	            	<!--右侧详情 end-->
            </div>
        </div>
        <div class="jingx-div pull-right jingx-right-div">
            <div class="list-left" style="background-color:#24a4f5">
                <p class="jingx-title">网络推广</p>
                <ul class="jptab-list" data-id="changeTab">
                    <!--左侧导航栏 start-->
                	                		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                                    		                			                				<li data-id="tab31" class="active">微信推广</li>
                				                			                		                                    		                                    		                                    		                                    		                                    		                			                				<li data-id="tab36">品牌/公关</li>
                				                			                		                                    		                                    		                                    		                                    		                                    		                			                				<li data-id="tab41">文案撰写</li>
                				                			                		                                    		                                    		                                    		                                    		                                        <!--左侧导航栏 end-->
                </ul>
            </div>
            <div class="list-right">
				<!--右侧详情 start-->
            	            	            	            		<div data-tab="tab31">
            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		<a href="http://www.51biaoshi.com/product/399.htm?_pb=yxtc032" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">微信粉丝增长</p>
	                                <span style="color:">公众号粉丝快速增加</span>
	                                <b style="color:">15元</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="微信粉丝增长"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/402.htm?_pb=yxtc033" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">微信朋友圈真人转发</p>
	                                <span style="color:">非机器转发，精准引流</span>
	                                <b style="color:">56元</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="微信朋友圈真人转发"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/400.htm?_pb=yxtc034" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">微信文章阅读量快速增长</p>
	                                <span style="color:">阅读真实增长</span>
	                                <b style="color:">70元</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="微信文章阅读量快速增长"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/431.htm?_pb=yxtc035" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">WIFI精准吸粉</p>
	                                <span style="color:">二维码投放，获精准活跃粉丝</span>
	                                <b style="color:">3600元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="WIFI精准吸粉"></dt>
	                        </dl>
                    	</a>
                    		            		            		                    			            </div>
            	            	            		<div data-tab="tab36" style="display:none">
            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		<a href="http://www.51biaoshi.com/product/387.htm?_pb=yxtc037" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">论坛贴吧推广</p>
	                                <span style="color:">百度贴吧推广/手工发帖</span>
	                                <b style="color:">180元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="论坛贴吧推广"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/432.htm?_pb=yxtc038" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">全网口碑营销</p>
	                                <span style="color:">整合网络渠道，矩阵式曝光</span>
	                                <b style="color:">2800元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="全网口碑营销"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/397.htm?_pb=yxtc039" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">微整合营销</p>
	                                <span style="color:">微整合营销，花小钱办大事</span>
	                                <b style="color:">15000元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="微整合营销"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/394.htm?_pb=yxtc040" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">知乎问答</p>
	                                <span style="color:">知乎营销/知乎推广/知乎策划</span>
	                                <b style="color:">15000元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="知乎问答"></dt>
	                        </dl>
                    	</a>
                    		            		            		                    			            </div>
            	            	            		<div data-tab="tab41" style="display:none">
            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		<a href="http://www.51biaoshi.com/product/387.htm?_pb=yxtc042" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">媒体发稿</p>
	                                <span style="color:">自选新闻源</span>
	                                <b style="color:">10元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="媒体发稿"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/367.htm?_pb=yxtc043" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">软文写作</p>
	                                <span style="color:">新媒体文章/营销软文/新闻稿</span>
	                                <b style="color:">280元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="软文写作"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/366.htm?_pb=yxtc044" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">品牌宣传文案</p>
	                                <span style="color:">品牌文案撰写/企业定位策划</span>
	                                <b style="color:">800元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="品牌宣传文案"></dt>
	                        </dl>
                    	</a>
                    		            		            			            		<a href="http://www.51biaoshi.com/product/390.htm?_pb=yxtc045" target="view_window">
	                        <dl class="con-first">
	                            <dd>
	                                <p style="color:">商业计划书撰写</p>
	                                <span style="color:">项目融资第一步</span>
	                                <b style="color:">1000元起</b>
	                                <i></i>
	                            </dd>
	                            <dt><img src="/picture/loadimage.htm" alt="商业计划书撰写"></dt>
	                        </dl>
                    	</a>
                    		            		            </div>
            	            	            		<div data-tab="tab46" style="display:none">
            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            </div>
            	            	            		<div data-tab="tab51" style="display:none">
            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            </div>
            	            	            		<div data-tab="tab56" style="display:none">
            		            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            			            		            </div>
            	            	<!--右侧详情 end-->
            </div>
        </div>
    </div>
</div>

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
	<style>
    #stratrgy08 {background:#F6F6F6;}
    #stratrgy08 .hotb-list {padding:40px 0;}
    #stratrgy08 .hotb-list > li {float:left;width:376px;margin-right:21px;border:1px solid #e6e6e6;box-shadow: 0 0 0 #fff;-webkit-transition: all .3s ease;transition: all .3s ease;box-sizing: border-box;margin-bottom: 15px;}
    #stratrgy08 .hotb-list > li:hover {-webkit-box-shadow: 0 15px 30px rgba(0,0,0,.1);
        box-shadow: 0 15px 30px rgba(0,0,0,.1);
        /*-webkit-transform: translateY(-2px);
        transform: translateY(-2px);*/
        border-radius: 2px;
        border-color: transparent;}
    #stratrgy08 .hotb-list > li:nth-child(3n){margin-right: 0; }
    #stratrgy08 .hotb-list > li .list-img {width:278px;height:190px;overflow: hidden;}
    #stratrgy08 .hotb-list > li .list-img img{   -webkit-transition: all .7s;
        -moz-transition: all .7s;
        -ms-transition: all .7s;
        -o-transition: all .7s;
        transition: all .7s;}
    #stratrgy08 .hot-bb {padding-top:60px;text-align: center;}
    #stratrgy08 .hot-bb span {display:block;position:relative;top:-10px;font-size:16px;color:#666;}
    #stratrgy08 .title-warp {position:relative;float:left;left:50%}
    #stratrgy08 .title-inner {position:relative;float:left;right:50%;padding:0 40px;border-top:1px solid #ccc;}
    #stratrgy08 .title-inner > b {display: block;position:relative;top:-20px;padding:0 15px;background:#F6F6F6;font-size:28px;color:#333;}
    #stratrgy08 .hotb-list .hot-head{padding: 20px; background-color: #3abc8f; color: #fff; font-size: 20px; }
	
			#stratrgy08 .hotb-list .hot-head.group01{
			background-color: #f3c157;
			background-image:url(/images/loadimage.htm);
		}
			#stratrgy08 .hotb-list .hot-head.group02{
			background-color: #f3c157;
			background-image:url(/images/loadimage.htm);
		}
			#stratrgy08 .hotb-list .hot-head.group03{
			background-color: #f3c157;
			background-image:url(/images/loadimage.htm);
		}
			#stratrgy08 .hotb-list .hot-head.group04{
			background-color: #f3c157;
			background-image:url(/images/loadimage.htm);
		}
			#stratrgy08 .hotb-list .hot-head.group05{
			background-color: #f3c157;
			background-image:url(/images/loadimage.htm);
		}
			#stratrgy08 .hotb-list .hot-head.group06{
			background-color: #f3c157;
			background-image:url(/images/loadimage.htm);
		}
	    #stratrgy08 .hotb-list .hot-head.group02{background-color: #f3c157; }
    #stratrgy08 .hotb-list .hot-head.group03{background-color: #828ad9; }

    #stratrgy08 .hotb-list .hot-head p:nth-of-type(2){font-size: 14px; }
    #stratrgy08 .hotb-list .hot-articalList{padding:15px 20px; padding-bottom: 5px; height: 110px;background-color:#fff; }
    #stratrgy08 .hotb-list .hot-articalList ul li{
    	padding-left: 10px; position: relative; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;margin-bottom: 10px;font-size: 14px;
    }
    #stratrgy08 .hotb-list .hot-articalList ul li a{color: #666; }
    #stratrgy08 .hotb-list .hot-articalList ul li:before{
		content: ""; width: 4px; height: 4px; background-color: #666; border-radius: 50%; position: absolute; top: 7px; left: 0px;
    }
    #stratrgy08 .hotb-list .hot-articalList ul li:hover a{color: #ff4400; cursor: pointer; }
    #stratrgy08 .hotb-list .hot-articalList ul li:hover:before{background-color: #ff4400; }
</style>
<!--热门宝贝-->
<div  id="stratrgy08" class="container-fluid">
    <div class="container">
        <div class="hot-bb">
            <div><div class="title-warp"><p class="title-inner"><b>营销攻略</b></p></div></div>
            <span>精炼营销干货，分享营销方案，学习营销策略</span>
        </div>
        <ul class="hotb-list">
							<li>
                	<a href="/cmslist/cl12-pg1.htm" target="_blank">
    	                <div class="hot-head group01">
    	                	<p>微信营销</p>
    	                	<p>学习营销思路，掌握营销技巧</p>
    	                </div>
                	</a>
                    <div class="hot-articalList">
                    	<ul>
															<li><a href="/cms/cl12-cm58391-at2464.htm" target="articleId">微信服务号运营方案解析</a></li>
															<li><a href="/cms/cl12-cm58390-at2463.htm" target="articleId">微信公众平台运营地区是什么意思</a></li>
															<li><a href="/cms/cl12-cm58389-at2462.htm" target="articleId">如何运营公众号订阅号并快速倍增粉丝？</a></li>
							                    	</ul>
                    </div>
                </li>
							<li>
                	<a href="/cmslist/cl87-pg1.htm" target="_blank">
    	                <div class="hot-head group02">
    	                	<p>营销百科</p>
    	                	<p>借助百科知识,传播企业价值</p>
    	                </div>
                	</a>
                    <div class="hot-articalList">
                    	<ul>
															<li><a href="/cms/cl87-cm58326-at2400.htm" target="articleId">网络营销主要做些什么？</a></li>
															<li><a href="/cms/cl87-cm58325-at2399.htm" target="articleId">网络营销的优势是什么？</a></li>
															<li><a href="/cms/cl87-cm58324-at2398.htm" target="articleId">如何开展网络营销</a></li>
							                    	</ul>
                    </div>
                </li>
							<li>
                	<a href="/cmslist/cl78-pg1.htm" target="_blank">
    	                <div class="hot-head group03">
    	                	<p>SEO优化</p>
    	                	<p>关键词优化排名，小成本高转化</p>
    	                </div>
                	</a>
                    <div class="hot-articalList">
                    	<ul>
															<li><a href="/cms/cl78-cm58101-at2200.htm" target="articleId">百度 SEO 是否已经名存实亡？</a></li>
															<li><a href="/cms/cl78-cm58100-at2199.htm" target="articleId">SEO优化：3步轻松把高指数关键词优化到百度首页！</a></li>
															<li><a href="/cms/cl78-cm58099-at2198.htm" target="articleId">SEO流量的三大核心影响因素，零预算增流量</a></li>
							                    	</ul>
                    </div>
                </li>
							<li>
                	<a href="/cmslist/cl88-pg1.htm" target="_blank">
    	                <div class="hot-head group04">
    	                	<p>小程序</p>
    	                	<p>如何让小程序，带来大流量？</p>
    	                </div>
                	</a>
                    <div class="hot-articalList">
                    	<ul>
															<li><a href="/cms/cl88-cm58069-at2170.htm" target="articleId">为什么微信公众号阅读率低？教你4招公众号运营技巧</a></li>
															<li><a href="/cms/cl88-cm58068-at2169.htm" target="articleId">开发及推广微信公众账号需要多少预算？</a></li>
															<li><a href="/cms/cl88-cm58067-at2168.htm" target="articleId">如何获取微信公众号第一批粉丝？</a></li>
							                    	</ul>
                    </div>
                </li>
							<li>
                	<a href="/cmslist/cl77-pg1.htm" target="_blank">
    	                <div class="hot-head group05">
    	                	<p>APP推广</p>
    	                	<p>掌握APP的运营之道</p>
    	                </div>
                	</a>
                    <div class="hot-articalList">
                    	<ul>
															<li><a href="/cms/cl77-cm57755-at1902.htm" target="articleId">从APP应用运营的角度看，运营到底是干啥的？</a></li>
															<li><a href="/cms/cl77-cm57753-at1900.htm" target="articleId">渠道运营是一个怎样的存在？</a></li>
															<li><a href="/cms/cl77-cm57740-at1887.htm" target="articleId">渠道运营：经费有限的情况下，如何运营好一款产品</a></li>
							                    	</ul>
                    </div>
                </li>
							<li>
                	<a href="/cmslist/cl95-pg1.htm" target="_blank">
    	                <div class="hot-head group06">
    	                	<p>镖狮原创</p>
    	                	<p>营销不花冤枉钱</p>
    	                </div>
                	</a>
                    <div class="hot-articalList">
                    	<ul>
															<li><a href="/cms/cl95-cm58072-at2173.htm" target="articleId">中小网站必看SEO九步曲</a></li>
															<li><a href="/cms/cl95-cm57928-at2041.htm" target="articleId">营销干货-如何做一个好的朋友圈广告？</a></li>
															<li><a href="/cms/cl95-cm57708-at1855.htm" target="articleId">怎么做好SEM推广计划方案？</a></li>
							                    	</ul>
                    </div>
                </li>
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
															<li onclick="window.open('http://www.51biaoshi.com/spcase/1302.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">巨梨公众号代运营</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>1999元</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>14天</li>
                				</ul>
            				</div>
            				<div class="al-details">玩转社交类APP巨梨，建立公众号和小程序，通过优质内容和高可玩性活动策划引流，14天达到粉丝增长3500+</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1292.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">优惠券购物网站</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>15万</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>60天</li>
                				</ul>
            				</div>
            				<div class="al-details">为美就购提供建站服务，为网友提供优质折扣商品和优惠折扣商品信息，也可与淘宝卖家沟通合作，内容每天更新</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1295.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">深圳嘉华利电子模版网站</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>6980元/首年</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>30天</li>
                				</ul>
            				</div>
            				<div class="al-details">量身打造的展示型网站，网站色彩饱满中和，排版富有吸引力，引导客户深层浏览网站，目的寻找客源和展示公司实力</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1291.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">博领科技电子模版网站</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>6980元/首年</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>30天</li>
                				</ul>
            				</div>
            				<div class="al-details">客户要求是展现产品和公司实力，网站首页满屏滚动banner 具有强烈的视觉冲击感。 设计上衬托出科技感，交互上便于用户操作</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1284.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">如何打造平台小程序</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>500元/年</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>10天</li>
                				</ul>
            				</div>
            				<div class="al-details">为掌上北京生活通提供互动平台型小程序，同城本地的分类导航服务、兴趣圈子的交流、行业化的专业平台等</div>
                        </li>
									</ul>
												<ul class="al-list" id="caseitem2" style="display:none">
															<li onclick="window.open('http://www.51biaoshi.com/spcase/1301.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">装修行业朋友圈广告</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>10000/月</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>6个月</li>
                				</ul>
            				</div>
            				<div class="al-details">保定业之峰装饰有限公司通过朋友圈广告，收集有效线索3000+，客户转化率高达30%</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1294.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">法律服务小程序</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>3.5万</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>40天</li>
                				</ul>
            				</div>
            				<div class="al-details">页面设计简洁，短步骤找到专业律师，可在线咨询、预约。同时提供合同审查，股权咨询等为用户在线解决法律问题。</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1293.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">在线阅读小程序</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>3万</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>30天</li>
                				</ul>
            				</div>
            				<div class="al-details">用户进入在线阅读小程序可在线选择书籍阅读，另外用户还可通过小游戏赚积分、解锁书籍，增加了用户的粘性。</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1296.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">乐在点点餐饮小程序模版</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>3980元/首年</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>10天</li>
                				</ul>
            				</div>
            				<div class="al-details">餐饮模版提供单店多店、配送系统、扫码点餐、预约桌位、扫码付款、支付收银、会员营销、优惠卡劵、打印系统等。</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1283.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">餐饮店的智慧运营</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>980元/年</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>10天</li>
                				</ul>
            				</div>
            				<div class="al-details">《罗大胡子》实现了线上点餐、线上预约及外送、到店一桌一码自助点餐、自助买单等，让繁忙变轻松！</div>
                        </li>
									</ul>
												<ul class="al-list" id="caseitem3" style="display:none">
															<li onclick="window.open('http://www.51biaoshi.com/spcase/1297.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">张一元公众号代运营</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>5000/月</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>12个月</li>
                				</ul>
            				</div>
            				<div class="al-details">茶叶零售行业，通过搭建商城，微信图文运营输入茶文化，达到有效曝光，粉丝增长1万，文章平均阅读达400</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1300.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">保定新天地百货朋友圈广告</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>10000/月</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>2个月</li>
                				</ul>
            				</div>
            				<div class="al-details">传统行业大型综合百货商场，通过朋友圈广告的原创文案、活动策划、设计等达到短期内曝光40+万，粉丝增长5+千</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1043.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">哈尔滨万达乐园代运营</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>20000元/月</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>12个月</li>
                				</ul>
            				</div>
            				<div class="al-details">订阅号运营，玩得转内容，抓得住群众，创造10万+，你的品牌也能成爆款</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1282.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">时装店如何线上引流</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>2500元/天</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>10天</li>
                				</ul>
            				</div>
            				<div class="al-details">《米诺时装店》通过商城小程序实现打通线上线下，甚至把很多老客户都引流到了线下店</div>
                        </li>
											<li onclick="window.open('http://www.51biaoshi.com/spcase/1281.htm','_blank');">
                            <div class="cgalNew">
            					<p class="cgantit">鲜花店小程序</p>
            					<div class="anlist">
            					<ul>
            						<li>项目金额</li>
            						<li>3000元/年</li>
                				</ul>
                				<ul>
                					<li>项目周期</li>
                					<li>10天</li>
                				</ul>
            				</div>
            				<div class="al-details">门店小程序上线后，鲜花店的日点击高达1563次，门店日营业额增长5倍</div>
                        </li>
									</ul>
					</div>
       
    </div>
	<!--真实案例end-->
	
	<!--了解镖狮网 begin-->
    <div class="about-index">
    	<div class="about-index-title">
    		<div><div class="title-warp"><p class="title-inner"><b>了解镖狮网</b></p></div></div>
    	</div>
     
    	<div class="container cards-wrap">
    		<div class="good-service-card card">
    			<div class="card-title-wrap bg1">服务保障</div>
    			<div class="card-content-wrap">
    				<div class="border-bottom gs-card-img-wrap">
    					<span class="gs-card-img-txt">
    					<a rel="nofollow" href="/aboutus.htm" target="_blank" class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc1.png" />
    						</div>
    						<p>严选服务商</p>
    					</a>
    					<a rel="nofollow" href="/aboutus.htm" target="_blank"  class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc2.png" />
    						</div>
    						<p>效果监理</p>
    					</a>
    					<a rel="nofollow" href="/aboutus.htm" target="_blank"  class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc3.png" />
    						</div>
    						<p>资金担保</p>
    					</a>
    					<a rel="nofollow" href="/aboutus.htm"  target="_blank" class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc4.png" />
    						</div>
    						<p>专注营销</p>
    					</a>
    					<a rel="nofollow" href="/aboutus.htm"  target="_blank" class="text-left">
    						<div class="text-img">
    							<img src="/picture/biaoshilc5.png" />
    						</div>
    						<p>量身定制</p>
    					</a>
    				</span>
    				</div>
    				<div>
    					<a rel="nofollow" href="/aboutus.htm"  target="_blank" class="normal-link text-overflow">
    						<b></b>服务商入驻镖狮需要考核的72项指标
    					</a>
    					<a rel="nofollow" href="/aboutus.htm"  target="_blank" class="normal-link text-overflow">
    						<b></b>镖狮自主研发数据监控系统BA（Biaoshi Analytics）
    					</a>
    					<a rel="nofollow" href="/aboutus.htm?tab=1"  target="_blank" class="normal-link text-overflow">
    						<b></b>镖狮网定制化服务与标准化服务的服务流程
    					</a>
    				</div>
    			</div>
    		</div>
    		<div class="about-card  card">
    			<div class="card-title-wrap bg2">媒体报道</div>
    			<div class="card-content-wrap j-card-wrap">
    				<a href="http://tv.cctv.com/2016/07/31/VIDEKgiGHR7tlrenAsdACgZl160731.shtml" class="first-link border-bottom" target="_blank">
    					<div class="card-img-wrap">
    						<img src="/picture/news02.png" />
    					</div>
    					<div class="card-other-warp">
    							<div class="text-overflow-two">[朝闻天下]大学毕业生创业比例持续攀升，镖狮网助力大学生创业</div>
    							<div class="origin">cctv</div>
    					</div>
    				</a>
    				<div>
    					<a target="_blank" href="http://tv.cctv.com/2016/11/20/VIDEOfYLqYSBfkUI9XajjphP161120.shtml" class="normal-link text-overflow">
    						<b style="background:transparent"></b><span class="tag">[朝闻天下]</span>镖狮网受邀世界互联网大会 
    					</a>
    					<a target="_blank" href="http://www.iqiyi.com/w_19ruhbnuu5.html" class="normal-link text-overflow">
    						<b style="background:transparent"></b><span class="tag">[发现者说]</span>不断的归零，复盘，镖狮网的创业成功之路
    					</a>
    					<a target="_blank" href="http://ln.ifeng.com/a/20160622/4673761_0.shtml" class="normal-link text-overflow">
    						<b style="background:transparent"></b><span class="tag">[凤凰网]</span>中国互联网大会开幕，镖狮网获央视关注
    					</a>
    				</div>
    			</div>
    		</div>
    		<div class="sharing-card  card">
    			<div class="card-title-wrap bg3">镖狮头条</div>
    			<div class="card-content-wrap j-card-wrap">
    				<a target="_blank" href="https://36kr.com/p/5083717.html" class="first-link border-bottom">
    					<div class="card-img-wrap">
    						<img src="/picture/news01.png"/>
    					</div>
    					<div class="card-other-warp">
    							<div class="text-overflow-two">打造三个标准化，镖狮网想要成为企业营销界的阿尔法Go</div>
    							<div class="origin">36kr</div>
    					</div>
    				</a>
    				<div>
    					<a target="_blank" href="http://www.51biaoshi.com/cms/cl82-cm56341-at524.htm" class="normal-link text-overflow">
    						<b></b>镖狮网入驻阿里云，助力企业获取更优质互联网营销服务
    					</a>
    					<a target="_blank" href="http://www.51biaoshi.com/cms/cl82-cm56314-at508.htm" class="normal-link text-overflow">
    						<b></b>镖狮网获1500万天使轮融资，以“天猫”模式颠覆营销链
    					</a>
    					<a target="_blank" href="http://v.youku.com/v_show/id_XMzAzMjUzNTQzMg====.html?refer=pc-sns-1&source=&from=singlemessage&isappinstalled=0" class="normal-link text-overflow">
    						<b></b>江小白从0到1营销哲学，镖狮网营销动物沙龙成功落幕
    					</a>
    				</div>
    			</div>
    		</div>
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
</script>
	
<script type="text/javascript" src="{{asset('js/monitor.js')}}"></script>
@endsection