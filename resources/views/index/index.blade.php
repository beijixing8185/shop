@extends('welcome')

@section('title','首页')
@section('keywords','描述')
@section('description','关键字')

@section('css')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{asset('css/modular.css')}}">
@endsection


@section('content')
	<!--头部2 begin-->
	@include('./common/index_search')
	<!--头部2 end-->
	<!--头部 banner begin-->
	@include('./common/index_nav')
	<!--头部 banner end-->
<!--服务流程-->
	@include('./common/index_banner')
<div id="showtap01" class="container-fluid">
    <ul class="showtap-inner container">
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56498-at668.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="镖狮获央视关注，多次报道"></p>
	                <div class="media-title" >镖狮获央视关注，多次报道</div>
	            </a>
	        </li>
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56494-at664.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="镖狮网助力大学生创业"></p>
	                <div class="media-title">镖狮网助力大学生创业</div>
	            </a>
	        </li>
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56496-at666.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="中国互联网大会开幕，镖狮网获关注"></p>
	                <div class="media-title">中国互联网大会开幕，镖狮网获关注</div>
	            </a>
	        </li>
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56495-at665.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="镖狮网受邀参加世界互联网大会"></p>
	                <div class="media-title">镖狮网受邀参加世界互联网大会</div>
	            </a>
	        </li>
    	    		<li>
	            <a href="http://www.51biaoshi.com/cms/cl82-cm56497-at667.htm" target="view_window">
	                <p class="media-img"><img src="/picture/loadimage.htm" alt="镖狮网的创业成功之路"></p>
	                <div class="media-title">镖狮网的创业成功之路</div>
	            </a>
	        </li>
    	    </ul>
</div>
<!--保障 -->
<div id="showtap02" class="container-fluid">
    <div class="container">
        <ul class=" ensure">
        		    		<li>
	                <img src="http://www.51biaoshi.com/product/loadImage.htm?imagepath=showtype/778286c4-0f86-4e2a-b6e8-7d970d727530_cubead.jpg" alt="严选服务商">
	                <div class="bz-con" style="color:">
	                    <p style="color:">严选服务商</p>
			            录取率16%，100%缴纳保证金，5年服务经验
	                </div>
	            </li>
	    		    		<li>
	                <img src="http://www.51biaoshi.com/product/loadImage.htm?imagepath=showtype/778286c4-0f86-4e2a-b6e8-7d970d727530_cubead.jpg" alt="效果数据监理">
	                <div class="bz-con" style="color:">
	                    <p style="color:">效果数据监理</p>
			            真实数据跟踪，效果数据监理，24小时快速维权
	                </div>
	            </li>
	    		    		<li>
	                <img src="http://www.51biaoshi.com/product/loadImage.htm?imagepath=showtype/778286c4-0f86-4e2a-b6e8-7d970d727530_cubead.jpg" alt="资金担保">
	                <div class="bz-con" style="color:">
	                    <p style="color:">资金担保</p>
			            交易资金平台托管，像淘宝一样，服务满意再付款
	                </div>
	            </li>
	    		    		<li>
	                <img src="http://www.51biaoshi.com/product/loadImage.htm?imagepath=showtype/778286c4-0f86-4e2a-b6e8-7d970d727530_cubead.jpg" alt="专注营销10年">
	                <div class="bz-con" style="color:">
	                    <p style="color:">专注营销10年</p>
			            专业团队，服务20万+企业，拥有丰富的成功案例
	                </div>
	            </li>
	    		    		<li>
	                <img src="http://www.51biaoshi.com/product/loadImage.htm?imagepath=showtype/778286c4-0f86-4e2a-b6e8-7d970d727530_cubead.jpg" alt="量身定制营销方案">
	                <div class="bz-con" style="color:">
	                    <p style="color:">量身定制营销方案</p>
			            智能问诊系统，快速定位营销问题，量身定制解决方案
	                </div>
	            </li>
	    	        </ul>
    </div>
</div>
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
</div>
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
                        @if($val['cid'] ==1)
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
                        @if($val['cid'] ==2)
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
                        @if($val['cid'] ==3)
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