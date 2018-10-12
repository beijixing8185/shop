@extends('welcome')

@section('title','商品详情')

@section('css')
    <link rel="stylesheet" href="{{asset('css/com-details.css')}}">
    <link rel="stylesheet" href="{{asset('css/pro-details.css')}}">
    <link rel="stylesheet" href="{{asset('css/page.css')}}">
    <link rel="stylesheet" href="{{asset('css/star.css')}}">
    <link rel="stylesheet" href="{{asset('css/goodsDetail.css')}}">
    <link rel="stylesheet" href="{{asset('css/common-header.css')}}">
    <link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/publish.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery.jcarousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jcarousel.connected-carousels.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/product_slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/product_details.js')}}"></script>
    <script src="{{asset('js/popup.js')}}"></script>
    <script src="{{asset('js/iconfont.js')}}"></script>
    <script src="{{asset('js/goodsDetail.js')}}"></script>
    <script src="{{asset('js/common-right.js')}}"></script>

@endsection


@section('content')

    @include('./common/demand')
@include('./common/nav')
@include('./common/search')
@include('./common/right')
@include('./common/poper')


        <div class="sp-xq juzhong">
            <div class="container prodetarls-top">
                <div>
                    <a class="fans-pic" id="head_pic" href="javascript:void(0);">
					<span>
						         					<img src="/picture/loadimage.htm" alt="微信代运营托管公众号服务号订阅号内容代运营_找微信代运营，就选择镖狮网">
        										</span>
                        <div class="head_pic_imgList">
                            <ul>
                                <li class="active caClass" id="effpic1" traceflag="content_tab_详情图片切换1"><img src="/picture/loadimage.htm" alt="" /></li>
                                <li class="caClass" id="effpic2" traceflag="content_tab_详情图片切换2"><img src="/picture/loadimage.htm" alt="" /></li>
                                <li class="caClass" id="effpic3" traceflag="content_tab_详情图片切换3"><img src="/picture/loadimage.htm" alt="" /></li>
                                <li class="caClass" id="effpic4" traceflag="content_tab_详情图片切换4"><img src="/picture/loadimage.htm" alt="" /></li>
                                <li class="caClass" id="effpic5" traceflag="content_tab_详情图片切换5"><img src="/picture/loadimage.htm" alt="" /></li>
                            </ul>
                        </div>
                    </a>
                    <div class="fan-message">
                        <div class="pro-title">
                            <h1>
                                微信公众号代运营托管服务/微信代运营
                            </h1>
                        </div>

                        <p class="pro-produce"></p>
                        <ul class="pro-funct-tag">
                            <li>严选师推荐</li>
                            <li>热卖爆品</li>
                        </ul>
                        <div class="dw-box">

                            <input id="productId" type="hidden" value="376" />


                            <ul class="zb_ul">
                                <li class="fwjj">
                                    <div class="dw-left">镖狮价格<span id="packagePrice"><i style="font-size: 16px;">&yen;</i>2499.00
																					<strong>[市场价：<b>&yen;5000.00</b>]</strong>
										</span>
                                    </div>
                                    <div class="dw-right dw-right-good"><span>成交量</span><p>498</p></div>
                                    <div class="dw-right dw-right-well caClass" id="_evaluate_btn02" traceflag="content_tab_评分" onclick="scrollToEva()"><span>评分</span><p style="color: #ff4400 !important">4.8</p></div>
                                </li>
                                <li class="dw-span">
                                    <div class="fwbx">行业推荐</div>
                                    <div class="taoc-sele">

                                        <p id="userRequestSelect"><span>全部行业</span><b></b></p>
                                        <input type="hidden" id="tradeinfo" value="">
                                        <ul class="sele" id="sele">
                                            <li id="trade1" class="choosetrade caClass" tradecode="0000" traceflag="content_select_行业推荐_">全部行业</li>
                                        </ul>

                                        <div style="display:none" class="taoc-sele-ab">看看同行选哪个套餐<i><img src="/picture/icon02.png" /></i><span><img src="/picture/free_close.png" id="closeseesame"/></span></div>
                                    </div>
                                    <input id="tradeName" type="hidden" value="" />
                                </li>

                                <li >
                                    <p class="dw-left" style="position:relative;">套餐类型</p>
                                    <input type="hidden" id="isStdProduct" value="0">
                                    <ul class="taoc-right" id="taocanList">
                                        <input id="packageId" type="hidden" value="131" />
                                        <li isusable="1" packageId="131" marketPrice="5000.00" packagePrice="2499.00" packageType="3" class="selectedLi caClass" id="package131" traceflag="content_select_微信代运营基础版">微信代运营基础版<b><img src="/picture/tcselected.png" alt=""/></b>
                                            <p class="tradefilter xz-num" style="display:block" data-id="0000"><span>25%</span>选择</p>
                                        </li>
                                        <li isusable="1" packageId="132" marketPrice="8000.00" packagePrice="4999.00" packageType="3" class="caClass" id="package132" traceflag="content_select_微信代运营经济版	">微信代运营经济版	<b><img src="/picture/tcselected.png" alt=""/></b>
                                            <p class="tradefilter xz-num" style="display:block" data-id="0000"><span>46%</span>选择</p>
                                        </li>
                                        <li isusable="1" packageId="133" marketPrice="18000.00" packagePrice="9999.00" packageType="3" class="caClass" id="package133" traceflag="content_select_微信代运营品质版	">微信代运营品质版	<b><img src="/picture/tcselected.png" alt=""/></b>
                                            <p class="tradefilter xz-num" style="display:block" data-id="0000"><span>11%</span>选择</p>
                                        </li>
                                        <li isusable="1" packageId="208" marketPrice="" packagePrice="" packageType="3" class="caClass" id="package208" traceflag="content_select_微信代运营定制版">微信代运营定制版<b><img src="/picture/tcselected.png" alt=""/></b>
                                            <p class="tradefilter xz-num" style="display:block" data-id="0000"><span>18%</span>选择</p>
                                        </li>
                                    </ul>
                                </li>

                                <!--  -->

                            </ul>

                            <div class="cnzc">
                                <div class="ptBz">
                                    平台保障
                                    <a href="/aboutus.htm#bzo1" target='_blank'><i>严</i>严选优质服务商</a>
                                    <a href="/aboutus.htm#bz02" target='_blank'><i>保</i>资金担保</a>
                                </div>
                                <div class="bzMoney">
                                    <p class="">服务商缴纳保证金 <span>20000</span> 元，承诺以下保障：</p>
                                    <a rel="nofollow" class="glgy" href="/aboutus.htm?tab=3" target='aboutUs'>
                                        <ul>
                                            <li>
                                                <a style="float: left;padding: 6px 0 0 8px;"href="/aboutus.htm?tab=1#BzTitle01" target="_blank">
                                                    <b>
                                                        <!-- <img src="/picture/loadimage.htm" stylt="position:relative;top:-3px;"/> -->
                                                    </b>保证完成
                                                </a>
                                            </li>
                                            <li>
                                                <a style="float: left;padding: 6px 0 0 8px;"href="/aboutus.htm?tab=1#BzTitle02" target="_blank">
                                                    <b>
                                                        <!-- <img src="/picture/loadimage.htm" stylt="position:relative;top:-3px;"/> -->
                                                    </b>保证原创
                                                </a>
                                            </li>
                                            <li>
                                                <a style="float: left;padding: 6px 0 0 8px;"href="/aboutus.htm?tab=1#BzTitle03" target="_blank">
                                                    <b>
                                                        <!-- <img src="/picture/loadimage.htm" stylt="position:relative;top:-3px;"/> -->
                                                    </b>保证维护
                                                </a>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <!-- 服务质保 -->
                                <div class="serverBao caClass" id="serverBao" traceflag="content_pop_服务质保"  >
                                    <div class="serverBaoHover">
                                        <label><input type="checkbox" name="serverBao" checked="checked" onclick="serverBaoFn();"/>
                                            <p class="serverBaoBox"><span>质</span> 服务质保：<b style="color: #ff4400;">¥0.00</b>
                                                <s id="quaprice">
                                                    ¥199
                                                </s>
                                            </p> <span style="position: relative;top: 2px">服务不满意，投诉可<b style="font-weight: 600;">退款</b></span></label>
                                        <div class="tipsBox">
                                            <div>百万赔偿计划</div>
                                            <p>1.服务过程中您有任何不满意，均可拨打镖狮官方电话<b style="font-weight: 600;">4000-581-581</b>进行投诉；</p>
                                            <p>2.收到投诉后，镖狮将在24小时内核实投诉情况，若投诉有效，即可退款；</p>
                                            <p>3.请确保所有沟通在镖狮平台的工作人员陪同下，以保障您的利益。</p>
                                        </div>
                                    </div>
                                    <div class="tipALert">
                                        <p>“服务质保”现在是免费的，您确定要放弃吗？</p>
                                        <div>
                                            <span class="cancelHover caClass" id="cancelHover"  traceflag="pop_close_服务质保弹窗取消按钮" onclick="closeServerBao(this)">取 消</span><span class="caClass" id="sureFree" traceflag="pop_submit_服务质保弹窗确定按钮" onclick="sureServerBao(this)">确 定</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="zixun-div">
                                <!--非标品B版-->
                                <p class="zx-online  caClass" traceflag="content_im_在线咨询" id="zxzx1" onclick="javascript:openBDBridge();"><b></b>在线咨询</p>
                                <div class="zixun caClass" traceflag="content_tab_套餐对比" id="tcdb1"><a class="dzh-btn" data-id="tcCompare">套餐对比</a></div>
                                <div class="zixun" id="immediatelySubmitOrder1" >
                                    <!--非标品-->
                                    <a id="buynow" onclick="immediatelySubmitOrder()" class="selected caClass" traceflag="content_pop_立即下单" style="display:none">立即下单</a>
                                    <a id="recommsp" onclick="customizationConsult()" class="selected recommspShow caClass" traceflag="content_pop_推荐服务商" >推荐服务商</a>
                                    <!-- <p style="display:none" id="recomminform" class="zixun-ab"><b><img src="/picture/icon03.png" /></b>系统将推荐该套餐1-3家最适合您的服务商与您取得联系，详细沟通您的需求，此过程无需支付任何费用<span><img src="/picture/free_close.png" /></span> </p> -->
                                </div>
                                <!--标品-->
                                <!--非标品A版-->
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="xq-major container">
                <div class="xq-major_inner clearfix" >
                    <div class="xq-r" style="float: right;">

                        <div>
                            <img src="/picture/surrenderfb.png" alt="镖狮全程陪同"/>
                        </div>

                        <div style="border: 1px solid #e5e5e5;">
                            <p>推荐宝贝</p>
                            <ul>
                                <li>
                                    <a href="/product/428.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="微信朋友圈广告／广告投放">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/428.htm" target="_blank">微信朋友圈广告／广告投放</a></p>
                                                <span>5000元起</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/430.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="广点通广告／广告投放">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/430.htm" target="_blank">广点通广告／广告投放</a></p>
                                                <span>5000元起</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/367.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="软文写作/新媒体文章/营销软文/新闻稿写作（标准版）">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/367.htm" target="_blank">软文写作/新媒体文章/营销软文/新闻稿写作（标准版）</a></p>
                                                <span>280元</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/375.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="微信公众号注册认证、开通支付／公众号搭建">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/375.htm" target="_blank">微信公众号注册认证、开通支付／公众号搭建</a></p>
                                                <span>399元</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/392.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="推广软文/产品软文/微博软文/原创文章（套餐版）">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/392.htm" target="_blank">推广软文/产品软文/微博软文/原创文章（套餐版）</a></p>
                                                <span>300元</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/399.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="微信公众号粉丝增长／公众号粉丝快速增加／粉丝数量">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/399.htm" target="_blank">微信公众号粉丝增长／公众号粉丝快速增加／粉丝数量</a></p>
                                                <span>15元起</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/400.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="微信文章阅读量/文章阅读量增长/文章点赞/文章转发">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/400.htm" target="_blank">微信文章阅读量/文章阅读量增长/文章点赞/文章转发</a></p>
                                                <span>38.8元</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/402.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="朋友圈真人转发／限公众号图文[微信后台统计数据]">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/402.htm" target="_blank">朋友圈真人转发／限公众号图文[微信后台统计数据]</a></p>
                                                <span>56元</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/431.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="WIFI吸粉/真实吸粉/真人粉丝/精准粉丝">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/431.htm" target="_blank">WIFI吸粉/真实吸粉/真人粉丝/精准粉丝</a></p>
                                                <span>3000元</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/433.htm" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="/picture/loadimage.htm" alt="微信公众号流量主开通【包通过】">
                                            </dt>
                                            <dd>
                                                <p><a href="/product/433.htm" target="_blank">微信公众号流量主开通【包通过】</a></p>
                                                <span>680元</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="xq-l" style="float: left;">
                        <div class="list-guide">
                            <ul>
                                <li class="current" id="_service_btn"><a href="javascript:void(0);" class="caClass" traceflag="content_tab_服务项目页签" id="_service_a">服务项目</a></li>
                                <li id="_serqdan_btn"><a href="javascript:void(0);" class="caClass" traceflag="content_tab_套餐明细页签" id="_serqdan_a">套餐明细</a></li>
                                <li id="_service_flow_btn"><a href="javascript:void(0);" class="caClass" traceflag="content_tab_成功案例页签" id="_service_flow_a">成功案例</a></li>
                                <li id="_evaluate_btn"><a href="javascript:void(0);" class="caClass" traceflag="content_tab_用户评价页签" id="_evaluate_a">
                                        用户评价										(47)
                                    </a></li>
                                <li id="_service_ensure_btn"><a href="javascript:void(0);" class="caClass" traceflag="content_tab_服务保障页签" id="_service_ensure_a">服务保障</a></li>
                                <li id="customizationConsult2" class="fix-a-btn pull-right lj-fix-btn curopt" style="height: 44px;"><a id="recommsp2" style="padding: 0 20px;" onclick="customizationConsult()" class="recommspShow caClass" traceflag="fixbar_pop_推荐服务商">推荐服务商</a></li>
                                <li class="fix-a-btn pull-right other-fix-btn" style="height: 44px;"><a id="zxzx3" class="caClass" traceflag="fixbar_im_在线咨询" onclick="javascript:openBDBridge();">在线咨询</a></li>
                            </ul>
                        </div>
                        <div id="_service_eva" class="service-items">
                            <div id="_prod_desc" class="ss_inner">
                                <p>
                                    <img alt="微信公众号代运营托管服务/微信代运营" src="/picture/20180903201205_361.png" alt="" width="100%" /><img alt="微信公众号代运营托管服务/微信代运营" src="/picture/20180903201205_564.png" alt="" width="100%" />
                                </p>
                                <p>
                                    <img alt="微信公众号代运营托管服务/微信代运营" src="/picture/20180925162707_583.png" width="100%" alt="" /><img alt="微信公众号代运营托管服务/微信代运营" src="/picture/20180903201206_109.png" alt="" width="100%" />
                                </p>
                            </div>
                        </div>
                        <div id="_serqdan" class="serqdan">
                            <div class="pj-number">
                                <div>套餐明细</div>
                            </div>
                            <div class="qd-con">
                                <p class="com-img"> <img src="/picture/loadimage.htm"/></p>
                            </div>
                        </div>
                        <div id="_case_list"  class="service-items">
                            <div class="produce-case">
                                <div class="pj-number">
                                    <div>案例</div>
                                </div>
                                <div>
                                    <dl>
                                        <dt >
                                            <a href="/spcase/1303.htm" target="_blank">
                                                <img src="/picture/loadimage.htm" >
                                                <div class="case_swaper">小鱼定制微信公众号代运营案例，包含：菜单栏设计、原创图文、排版设计、活动策划</div>
                                            </a>
                                        </dt>
                                        <dd>
                                            <a class="case-a-btn" href="/spcase/1303.htm" target="_blank">
                                                小鱼定制微信公众号代运营
                                            </a>
                                            <ul class="case-tags">
                                                <li>休闲娱乐</li>					<li>专注微信内容</li>				</ul>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt >
                                            <a href="/spcase/1297.htm" target="_blank">
                                                <img src="/picture/loadimage.htm" >
                                                <div class="case_swaper">张一元公众号代运营案例</div>
                                            </a>
                                        </dt>
                                        <dd>
                                            <a class="case-a-btn" href="/spcase/1297.htm" target="_blank">
                                                张一元公众号代运营案例
                                            </a>
                                            <ul class="case-tags">
                                                <li>食品餐饮</li>					<li>微信代运营</li>				</ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="pj-number" id="_evaluate_list">
                            <div>用户评价</div>
                        </div>
                        <div class="pj-tit-start">
                            <div class="startLeft">
                                <ul>
                                    <li class="pj_title">用户总体打分</li>
                                    <li class="pj_score">4.8</li>
                                    <li class="assess_bar">
                                        <span class="assess_full f_left"></span>
                                        <span class="assess_full f_left"></span>
                                        <span class="assess_full f_left"></span>
                                        <span class="assess_full f_left"></span>
                                        <span class="assess_full f_left"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="startRight" style="display:table;">
                                <div class="tagBox" style="display:table-cell;height: 80px;vertical-align: middle;">
                                    <span>沟通顺畅（31）</span>
                                    <span>性价比高（27）</span>
                                    <span>交付准时（25）</span>
                                    <span>服务周到（23）</span>
                                    <span>态度好（14）</span>
                                </div>
                            </div>
                        </div>

                        <div class="lj-evaluate"  id="evalist">
                            <div class="lj_inner clearfix lj_inner_list" >
                                <div class="lj-message">
                                    <ul class="pro-pj">
                                        <li>
                                            <div class="pull-left pro-pjc">
                                                <dl>
                                                    <dt class="pull-left">
                                                        <img src="/picture/rwu.png" alt="">
                                                    <p>135*****106</p>
                                                    </dt>
                                                    <dd class="pull-left">
                                                        <div>
                                                            <div class="assess_bar sp_listbar pull-left">
                                                                <span class="assess_full f_left"></span>
                                                                <span class="assess_full f_left"></span>
                                                                <span class="assess_full f_left"></span>
                                                                <span class="assess_full f_left"></span>
                                                                <span class="assess_full f_left"></span>
                                                            </div>
                                                        </div>
                                                        <div class="pj-con">
                                                            <p class="pull-left"></p>
                                                            <div class="pull-left">
                                                                公众号之前就是在这注册的，效率很快，代运营也做了一阵了，都很好，打算在这一条龙服务了，接下来考虑朋友圈广告了
                                                            </div>
                                                        </div>
                                                        <div class="pj-con">
                                                            <p class="pull-left"></p>
                                                            <div class="pull-left">
                                                                <ul class="yxbq">
                                                                    <li>性价比高</li>
                                                                    <li>专业度高</li>
                                                                    <li>服务周到</li>
                                                                    <li>效果好</li>
                                                                    <li>响应及时</li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <p class="pull-left pro-tm">2018-09-11 10:30</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div id="evaluates-generic-1" class="carousel slide evaluates-generic" >
                                                                <!-- Indicators -->
                                                                <ol class="carousel-img carousel-indicators">
                                                                </ol>

                                                                <!-- Wrapper for slides -->
                                                                <div class="carousel-inner" role="listbox" style="display:none">
                                                                </div>

                                                                <!-- Controls -->
                                                                <a style="display:none" class="left carousel-control" href="#evaluates-generic-1" role="button" data-slide="prev">
                                                                    <span class="glyphicon glyphicon-chevron-left" ></span>
                                                                    <!--<span class="glyphicon glyphicon-chevron-left" ><img src="/picture/arrow-left.png" /></span></span>-->
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a style="display:none" class="right carousel-control" href="#evaluates-generic-1" role="button" data-slide="next">
                                                                    <span class="glyphicon glyphicon-chevron-right" ></span>
                                                                    <!--<span class="glyphicon glyphicon-chevron-right" ><img src="/picture/arrow-right.png" /></span>-->
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </li>



                                    </ul>
                                </div>
                                <div class="pagination distanse">
                                    <ul>
                                        <li class="caClass" traceflag="content_load_评价分页第1页" id="evapage1"><a href="javascript:void(0);" onclick="javascript:goToPage('1','376','10','null','');" class="cur" >1</a></li>
                                        <li class="caClass" traceflag="content_load_评价分页第2页" id="evapage2"><a href="javascript:void(0);" onclick="javascript:goToPage('2','376','10','null','');"  >2</a></li>
                                        <li class="caClass" traceflag="content_load_评价分页第3页" id="evapage3"><a href="javascript:void(0);" onclick="javascript:goToPage('3','376','10','null','');"  >3</a></li>
                                        <li class="caClass" traceflag="content_load_评价分页第4页" id="evapage4"><a href="javascript:void(0);" onclick="javascript:goToPage('4','376','10','null','');"  >4</a></li>
                                        <li class="caClass" traceflag="content_load_评价分页第5页" id="evapage5"><a href="javascript:void(0);" onclick="javascript:goToPage('5','376','10','null','');"  >5</a></li>
                                        <!--
			 <li><span>第1/5页 &nbsp;</span></li>
			 -->
                                    </ul>
                                </div>
                            </div>
                        </div>					                    <style>

                        </style>
                        <div id="_service_ensure" class="lj-evaluate">
                            <div class="lj_inner clearfix">
                                <div class="lj-message">
                                    <div class="pj-number">
                                        <div>服务保障</div>
                                    </div>
                                    <div class="promise">
                                        <p class="title">平台</p>
                                        <div class="d1">我们的定位是：用户的第三方“营销合伙人”。</div>
                                        <div class="d1">镖狮平台秉持公证，公平的原则，维护用户权益，我们尽最大的努力，服务客户，保障营销效果。</div>
                                    </div>
                                    <div class="promise">
                                        <p class="title">效果保障</p>
                                        <ul class="ul">
                                            <li>严选专业服务商</li>
                                            <li>效果数据监理</li>
                                            <li>资金担保</li>
                                            <li>专注营销10年</li>
                                            <li>量身定制营销方案</li>
                                        </ul>
                                    </div>
                                    <div class="promise">
                                        <p class="title">效果数据监理</p>
                                        <ul class="ul">
                                            <li>真实数据跟踪</li>
                                            <li>实时监测服务效果</li>
                                            <li>24小时快速维权</li>
                                        </ul>
                                    </div>
                                    <div class="promise">
                                        <p class="title">资金担保</p>
                                        <div class="zjdb">
                                            <dl>
                                                <dt>
                                                    <img src="/picture/zj01.png" alt="资金担保"/>
                                                </dt>
                                                <dd>
                                                    <p>用户</p>
                                                    <p>资金安全</p>
                                                </dd>
                                            </dl>
                                            <p class="centerLine1">资金托管</p>
                                            <dl>
                                                <dt>
                                                    <img style="width: 62px;height: 28px;margin: 9px 0;" src="/picture/zj02_01.png" alt="资金担保"/>
                                                </dt>
                                                <dd>
                                                    <p>镖狮网</p>
                                                    <p>交易资金托管</p>
                                                </dd>
                                            </dl>
                                            <p class="centerLine2">服务满意再付费</p>
                                            <dl>
                                                <dt>
                                                    <img src="/picture/zj03.png" alt="资金担保"/>
                                                </dt>
                                                <dd>
                                                    <p>服务商</p>
                                                    <p>满意再付款</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="promise">
                                        <p class="title">投诉</p>
                                        <ul class="ul-list list1">
                                            <li class="last frst" style="width: 88px;text-align: center;">问题解决<br/>继续服务</li>
                                        </ul>
                                        <ul class="ul-list">
                                            <li style="width: 88px;text-align: center;">用户服务<br/>不满意</li>
                                            <li style="width: 125px;text-align: center;">用户中心、400电话<br/>与平台沟通选择服务</li>
                                            <li style="width: 88px;text-align: center;">平台24小时<br/>内核实、处理</li>
                                            <li style="width: 88px;text-align: center;" class="lineHeight">确定责任方</li>
                                            <li style="width: 88px;text-align: center;" class="lineHeight">确认退款</li>
                                            <li style="width: 88px;text-align: center;" class="lineHeight last">退款完成</li>
                                        </ul>
                                        <ul class="ul-list list3">
                                            <li class="lineHeight frst" style="width: 88px;text-align: center;">用户责任</li>
                                            <li class="lineHeight last" style="width: 88px;text-align: center;">协商</li>
                                        </ul>
                                    </div>
                                    <div class="promise">
                                        <p class="title">平台承诺</p>
                                        <div class="d1">1.直接拨打4000-581-581按3进行反馈投诉</div>
                                        <div class="d1">2.点击页面【在线咨询】按钮，将问题进行详细描述反馈</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap_zhezhao" id="successNote" style=" display:none;z-index: 999;">
            <input type="hidden" id="_spId" value="">
            <div class="free-bounced small">
                <div class="fb_inner ">
                    <div class="lj-menu">
                        <h6>免费专家咨询【<span>微信公众号代运营托管服务/微信代运营</span>】</h6>

                        <img class="f_close guanbi" src="/picture/free_close.png" alt="">
                    </div>

                    <div class="xq-content">
                        <div class="content_inner ded">
                            <form action="">
                                <div class="xq-description">
                                    <ul>
                                        <li class="pull-left">
                                            <dl>
                                                <dt class="hover">1</dt>
                                                <dd>输入手机号</dd>
                                            </dl>
                                        </li>
                                        <li class="second-li pull-left">
                                            <dl>
                                                <dt>2</dt>
                                                <dd>您接听来电</dd>
                                            </dl>
                                        </li>
                                        <li class="pull-left">
                                            <dl>
                                                <dt>3</dt>
                                                <dd>专家为您解惑</dd>
                                            </dl>
                                        </li>
                                    </ul>
                                    <div class="company-mes">
                                        <p id="_orgName"></p>
                                    </div>
                                    <textarea id="_userRequest" class="description-word" rows="4" placeholder="请输入您的需求"></textarea>
                                </div>
                                <div class="xq_tel">
                                    <input type="text" id="_telephone" class="xq_telp" placeholder="请输入您的手机号"><span class="error_tip" style="display:none;color:red;">手机号码格式不正确</span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="xq-release caClass" traceflag="pop_fb_发布需求" id="_btn_productDetails_require">发布需求</a>
                    <div class="xq-describe">
                        <p>本次电话咨询完全免费，我们将对您的号码严格保密，请放心使用</p>
                        <p> 您还可以直接拨打进行咨询：<span>4000-581-581</span></p>
                    </div>

                </div>
            </div>
        </div>

@endsection

@section('js')
    <!-- 调查问卷END -->
    <script src="/js/prodpublish.js"></script>
    <script src="/js/prodpublishlogin.js"></script>
    <script type="text/javascript" src="/js/monitor.js"></script>
    <script>
        var swiperPublish = new Swiper('.swiper-container-publish', {
            autoHeight: true, //高度随内容变化
            pagination: {
                el: '.swiper-pagination',
                type: 'progressbar',
                noSwiping : true
            }
        });
    </script>

    <script>
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
    </body>

    <script>
        //分享到qq
        var qqShareUrl="http://connect.qq.com/widget/shareqq/index.html?summary=&title=微信公众号代运营托管服务/微信代运营&pics=http://www.51biaoshi.com/product/loadImage.htm?imagepath=prod/pc/a964c5b0-6386-4725-9bd0-6a32b4d81a31_cubead.jpg&site=镖狮网&url="+location.href;
        $(".qqShare").attr("href",qqShareUrl);
        //分享到微信好友
        var sinaShareUrl="http://v.t.sina.com.cn/share/share.php?title=微信公众号代运营托管服务/微信代运营——&&source=镖狮网&sourceUrl=http://51biaoshi.com&url="+location.href;
        $(".sinaShare").attr("href",sinaShareUrl);
        var num = 0,length=$('#compList li').length,liWidth = 195;
        $('#compList').css('width',length*195 + 'px');
        if(length <= 4){
            $('.comp-taocanRight').hide();
            $('.comp-taocanLeft').hide();
        }
        $('.comp-overflow-new .comp-taocanLeft').click(function(){
            if(length-num > 4){
                num++;
                var left = num * liWidth;
                $('#compList').animate({left:'-'+ left + 'px'},300);
                console.log(num,length)
                if(num == length-4){
                    $('.comp-overflow-new .comp-taocanLeft').hide();
                    $('.comp-overflow-new .comp-taocanRight').show();
                }else{
                    $('.comp-overflow-new .comp-taocanRight').show();
                }
            }
        });
        $('.comp-overflow-new .comp-taocanRight').click(function(){
            if(num > 0){
                num--;
                var left = num * liWidth;
                $('#compList').animate({left:'-'+ left + 'px'},300);
                if(num == 0){
                    $('.comp-overflow-new .comp-taocanRight').hide();
                    $('.comp-overflow-new .comp-taocanLeft').show();
                }else{
                    $('.comp-overflow-new .comp-taocanLeft').show();
                }
            }
        });

        //小图切换
        $('.head_pic_imgList li').click(function(){
            $(this).addClass('active').siblings('li').removeClass('active');
            var imgSrc = $(this).find('img').attr('src');
            $('#head_pic').find('span').find('img').attr('src',imgSrc);
        });

        //服务质保
        var clockHover = false;
        function serverBaoFn(e){
            e = e || window.event;
            if (e.stopPropagation) {
                e.stopPropagation();
            }else{
                e.cancelBubble = true;
            }
            if(!clockHover){
                $('.tipALert').show();
                clockHover = true;
            }else{
                $('.tipALert').hide();
                clockHover = false;
            }
        };

        //服务质保弹窗取消按钮
        function closeServerBao(e){
            e = e || window.event;
            if (e.stopPropagation) {
                e.stopPropagation();
            }else{
                e.cancelBubble = true;
            }
            $('.tipALert').hide();
            $('.serverBaoHover label input').click();
            clockHover = false;
        }
        //服务质保弹窗确定按钮
        function sureServerBao(e){
            e = e || window.event;
            if (e.stopPropagation) {
                e.stopPropagation();
            }else{
                e.cancelBubble = true;
            }
            $('.tipALert').hide();
            $('input[name="serverBao"]').attr("checked","false");
        }
        $('.prodetarls-top').click(function(e) {
            if(clockHover && !$('.tipALert').is(":hidden")){
                $('.tipALert').hide();
                $('.serverBaoHover label input').click();
                clockHover = false;
            }
        })
    </script>
@endsection
