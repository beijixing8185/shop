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
    {{--<script type="text/javascript" src="{{asset('js/jcarousel.connected-carousels.js')}}"></script>--}}
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

@if(!empty($goods))
        <div class="sp-xq juzhong">
            <div class="container prodetarls-top">
                <div>
                    <a class="fans-pic" id="head_pic" href="javascript:void(0);">
					<span>
                        <img src="{{$goods['main_image']}}" alt="{{$goods['spu_name']}}">
        			</span>
                    </a>
                    <div class="fan-message">
                        <div class="pro-title">
                            <h1>
                                {{$goods['spu_name']}}
                            </h1>
                        </div>

                        <p class="pro-produce"></p>
                        <ul class="pro-funct-tag">
                            @if($goods['is_commend'] ==1)
                                <li>严选师推荐</li>
                            @endif
                            @if($goods['is_hot'] ==1)
                            <li>热卖商品</li>
                            @endif
                        </ul>
                        <div class="dw-box">
                            <input type="hidden" id="spuId" value="{{$goods['gid']}}">
                            <input id="productId" type="hidden" value="376" />
                            <ul class="zb_ul">
                                <li class="fwjj">
                                    <div class="dw-left">商品价格
                                        <span id="packagePrice"><i style="font-size: 16px;">&yen;</i>{{$goods['market_price']}}
                                            <small >{{$goods['comp']}}</small>
									        <strong>[市场价：<b>&yen;{{$goods['price']}}<small>{{$goods['comp']}}</small></b>]</strong>
										</span>
                                    </div>
                                    <div class="dw-right dw-right-good"><span>成交量</span><p>{{$goods['salen_num']}}</p></div>
                                    {{--<div class="dw-right dw-right-well caClass" id="_evaluate_btn02" traceflag="content_tab_评分" onclick="scrollToEva()"><span>评分</span><p style="color: #ff4400 !important">4.8</p></div>--}}
                                </li>
                                <li class="dw-span">
                                    <div class="fwbx">适用于</div>
                                    <div class="taoc-sele">
                                        <p id=""><span>{{$goods['gc_name']}}</span><b></b></p>
                                    </div>
                                    <input id="tradeName" type="hidden" value="" />
                                </li>

                                <li >
                                    <p class="dw-left" style="position:relative;">套餐类型</p>
                                    <input type="hidden" id="isStdProduct" value="0">
                                    <ul class="taoc-right" id="taocanList">
                                        <input id="packageId" type="hidden" value="131" />
                                        @foreach($goodsSku as $g)
                                        <li isusable="1" packageId="{{$g->id}}" marketPrice="{{$g->market_price}}" packagePrice="{{$g->price}}" packageType="3" class=" caClass" id="package131" traceflag="content_select_微信代运营基础版">{{$g->spec_name}}<b><img src="/picture/tcselected.png" alt=""/></b>
                                            <p class="tradefilter xz-num" style="display:block" data-id="0000"><span></span></p>
                                        </li>
                                        @endforeach
                                        {{--<li isusable="1" packageId="132" marketPrice="8000.00" packagePrice="4999.00" packageType="3" class="caClass" id="package132" traceflag="content_select_微信代运营经济版	">微信代运营经济版	<b><img src="/picture/tcselected.png" alt=""/></b>
                                            <p class="tradefilter xz-num" style="display:block" data-id="0000"><span>46%</span>选择</p>
                                        </li>--}}

                                    </ul>
                                </li>

                                <!--  -->
                            </ul>

                            <div class="cnzc">
                                <div class="ptBz">
                                    平台保障
                                    <a href="/about/index/2" target='_blank'><i>严</i>严选优质服务商</a>
                                    <a href="/about/index/2" target='_blank'><i>保</i>资金担保</a>
                                </div>
                                <div class="bzMoney">
                                    {{--<p class="">服务商缴纳保证金 <span>20000</span> 元，承诺以下保障：</p>--}}
                                    <a rel="nofollow" class="glgy" href="/about/index/2" target='aboutUs'>
                                        <ul>
                                            <li>
                                                <a style="float: left;padding: 6px 0 0 8px;"href="/about/index/2" target="_blank">
                                                    <b>
                                                    </b>保证完成
                                                </a>
                                            </li>
                                            <li>
                                                <a style="float: left;padding: 6px 0 0 8px;"href="/about/index/2" target="_blank">
                                                    <b>
                                                    </b>保证原创
                                                </a>
                                            </li>
                                            <li>
                                                <a style="float: left;padding: 6px 0 0 8px;"href="/about/index/2" target="_blank">
                                                    <b>
                                                    </b>保证维护
                                                </a>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <!-- 服务质保 -->
                                {{--<div class="serverBao caClass" id="serverBao" traceflag="content_pop_服务质保"  >
                                    <div class="serverBaoHover">
                                        <label><input type="checkbox" name="serverBao" checked="checked" onclick="serverBaoFn();"/>
                                            <p class="serverBaoBox"><span>质</span> 服务质保：<b style="color: #ff4400;">¥0.00</b>
                                                <s id="quaprice">
                                                    ¥199
                                                </s>
                                            </p> <span style="position: relative;top: 2px">服务不满意，投诉可<b style="font-weight: 600;">退款</b></span></label>
                                        <div class="tipsBox">
                                            <div>百万赔偿计划</div>
                                            <p>1.服务过程中您有任何不满意，均可拨打镖狮官方电话<b style="font-weight: 600;">010-53526642</b>进行投诉；</p>
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
                                </div>--}}
                            </div>
                            <div class="zixun-div">
                                <!--非标品B版-->
                                <p class="zx-online  caClass" traceflag="content_im_在线咨询" id="zxzx1" onclick="window.location.href='http://p.qiao.baidu.com/cps/chat?siteId=12314605&userId=25925415'"><b></b>在线咨询</p>
                                <div class="zixun" id="immediatelySubmitOrder1" >
                                    <!--非标品-->
                                    <a id="buynow"  class="selected caClass" traceflag="content_pop_立即下单" >立即下单</a>
                                    {{--<a id="recommsp" onclick="customizationConsult()" class="selected recommspShow caClass" traceflag="content_pop_推荐服务商" >推荐服务商</a>--}}
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
                        <div style="border: 1px solid #e5e5e5;">
                            <p>推荐宝贝</p>
                            <ul>
                                @if(!empty($commend))
                                    @foreach($commend as $val)
                                <li>
                                    <a href="/goods/goodsDetail/{{$val['id']}}" target="_blank">
                                        <dl class="tjbb">
                                            <dt>
                                                <img src="{{$val['main_image']}}" alt="{{$val['spu_name']}}">
                                            </dt>
                                            <dd>
                                                <p><a href="/goods/goodsDetail/{{$val['id']}}" target="_blank">{{$val['spu_name']}}</a></p>
                                                <span>{{$val['price']}}</span>
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="xq-l" style="float: left;">
                        <div class="list-guide">
                            <ul>
                                <li class="current" id="_service_btn"><a href="javascript:void(0);" class="caClass" traceflag="content_tab_服务项目页签" id="_service_a">服务项目</a></li>
                                <li id="_service_flow_btn">
                                    <a href="javascript:void(0);" class="caClass" traceflag="content_tab_成功案例页签" id="_service_flow_a">成功案例</a>
                                </li>
                                <li id="_evaluate_btn">
                                    <a href="javascript:void(0);" class="caClass" traceflag="content_tab_用户评价页签" id="_evaluate_a">用户评价	({{$count_message}})</a>
                                </li>
                                <li id="_service_ensure_btn">
                                    <a class="caClass" traceflag="content_tab_服务保障页签" id="_service_ensure_a">服务保障</a>
                                </li>
                                <li class="fix-a-btn pull-right other-fix-btn" style="height: 44px;">
                                    <a id="zxzx3" class="caClass" traceflag="fixbar_im_在线咨询" onclick="javascript:window.location.href='http://p.qiao.baidu.com/cps/chat?siteId=12314605&userId=25925415'">在线咨询</a>
                                </li>
                            </ul>
                        </div>
                        <div id="_service_eva" class="service-items">
                            <div id="_prod_desc" class="ss_inner">
                                {!!$goods['content']!!}
                            </div>
                        </div>
                        {{--<div id="_serqdan" class="serqdan">
                            <div class="pj-number">
                                <div>项目明细</div>
                            </div>
                            <div class="qd-con">
                                <p class="com-img"> <img src="/picture/loadimage.htm"/></p>
                            </div>
                        </div>--}}
                        <div id="_case_list"  class="service-items">
                            <div class="produce-case">
                                <div class="pj-number">
                                    <div>案例</div>
                                </div>
                                <div>
                                    @if(!empty($customer))
                                    @foreach($customer as $val)
                                    <dl>
                                        <dt >
                                            <a href="/customer/detail/{{$val['id']}}" target="_blank">
                                                <img src="{{$val['picture']}}" >
                                                <div class="case_swaper">{{$val['description']}}</div>
                                            </a>
                                        </dt>
                                        <dd>
                                            <a class="case-a-btn" href="/customer/detail/{{$val['id']}}" target="_blank">
                                                {{$val['title']}}
                                            </a>
                                            <ul class="case-tags">
                                                <li>{{$val['customer']}}</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="pj-number" id="_evaluate_list">
                            <div>用户评价</div>
                        </div>
                        {{--<div class="pj-tit-start">
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
                        </div>--}}

                        <div class="lj-evaluate"  id="evalist">
                            <div class="lj_inner clearfix lj_inner_list" >
                                <div class="lj-message">
                                    <ul class="pro-pj">
                                        @if(!empty($goods_message))
                                        @foreach($goods_message as $val)
                                        <li>
                                            <div class="pull-left pro-pjc">
                                                <dl>
                                                    @if(!empty($val->member))
                                                    <dt class="pull-left">
                                                        @if($val->member =='')
                                                        <img src="{{$val['member']['picture']}}" alt="">
                                                        @else
                                                        <img src="/picture/rwu.png" alt="">
                                                        @endif
                                                    <p>{{ substr_replace($val['member']['mobile'],'****',3,4)}}</p>
                                                    </dt>
                                                    @endif
                                                    <dd class="pull-left">
                                                        <div>
                                                            <div class="assess_bar sp_listbar pull-left">
                                                                @if(!empty($val->stars))
                                                                    @if($val->stars ==1)
                                                                        <span class="assess_full f_left"></span>
                                                                        @elseif($val->stars ==2)
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                    @elseif($val->stars ==3)
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                    @elseif($val->stars ==4)
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                    @elseif($val->stars ==5)
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                        <span class="assess_full f_left"></span>
                                                                        @endif
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="pj-con">
                                                            <div class="pull-left">{{$val['content']}}</div>
                                                        </div>
                                                        <div class="pj-con">
                                                            {{--<div class="pull-left">
                                                                <ul class="yxbq">
                                                                    <li>性价比高</li>
                                                                    <li>专业度高</li>
                                                                    <li>服务周到</li>
                                                                    <li>效果好</li>
                                                                    <li>响应及时</li>
                                                                </ul>
                                                            </div>--}}
                                                            <div>
                                                                <p class="pull-left pro-tm">{{$val['created_at']}}</p>
                                                            </div>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </li>
                                        @endforeach
                                            @endif

                                    </ul>
                                </div>
                                <div class="distanse">
                                    {{ $goods_message->links() }}
                                </div>
                            </div>
                        </div>
                        <style></style>
                        <div id="_service_ensure" class="lj-evaluate">
                            <div class="lj_inner clearfix">
                                <div class="lj-message">
                                    <div class="pj-number">
                                        <div>服务保障</div>
                                    </div>
                                    <div class="promise">
                                        <p class="title">平台</p>
                                        <div class="d1">我们的定位是：用户的第三方“营销合伙人”。</div>
                                        <div class="d1">营火虫平台秉持公证，公平的原则，维护用户权益，我们尽最大的努力，服务客户，保障营销效果。</div>
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
                                                    <p>营火虫网</p>
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
                                        <div class="d1">1.直接拨打010-53526642进行反馈</div>
                                        <div class="d1">2.点击页面【在线咨询】按钮，将问题进行详细描述反馈</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
  {{--      <div class="wrap_zhezhao" id="successNote" style=" display:none;z-index: 999;">
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
                        <p> 您还可以直接拨打进行咨询：<span>010-53526642</span></p>
                    </div>

                </div>
            </div>
        </div>--}}

@endsection

@section('js')
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
        $('#buynow').click(function(){
            var spuId = $('#spuId').val()
            var packageid = $('.selectedLi').attr('packageid');
            window.location.href="/member/showOrder?spuId="+spuId + "&skuId="+packageid
            //var url = '/member/addOrder?spuId='+spuId + '&skuId='+packageid;
            /*var url = '/member/addOrder?spuId=4&skuId=1';
            $.get(url, function(result){
                if(result['code']){
                    alert('下单失败,商品数据有误,请重新选择');
                }else{
                    alert('下单成功,请立即支付');
                    window.location.href="/member/showOrder";
                }
            });*/


        });

        var spu_id = "{{$goods->gid}}";
        $('.pagination li:first').html('');
        $('.pagination li:last').html('');
        //console.log(spu_id);
        //解决不能点击第一页
        $('.pagination li:eq(1)').html('<a class="page-link" href="/goods/getDetailPage?spu_id='+spu_id+'&page=1">1</a>');
        $('.pagination li:eq(1)').css('border-left','1px solid #ddd');


        /*
        //第一个按钮
        $('.pagination li:first').html('<a class="page-link" href="/goods/getDetailPage?spu_id='+spu_id+'&page=1"><</a>');
        //最后一个按钮
        $('.pagination li:last').html('<a class="page-link" href="/goods/getDetailPage?spu_id='+spu_id+'&page=2">></a>');*/

        $('.pagination a').on('click', function (event) {
            var page = parseInt($(this).html());  //分页，当前页
            //console.log(page);
            /*var pagenext =   page +1;   //+1页码
            console.log(pagenext);
            var pagefirst =   page -1;  // -1页码
            if($(this).html() =='>'){
                page = page +1;
            }
            if($(this).html() =='<'){
                page = page -1;
            }
            //第一个按钮
            $('.pagination li:first').html('<a class="page-link" href=""><</a>');
            //最后一个按钮
            $('.pagination li:last').html('<a class="page-link" href="/goods/getDetailPage?spu_id='+spu_id+'&page='+pagenext+'">></a>');*/

            event.preventDefault();
            if ( $(this).attr('href') != '#' ) {
                var itemActive = $('.pagination').find('.active'); // 选中项
                itemActive.removeClass('active');//移除active
                $(this).parent().addClass('active');
                var pagehtml = '';  //组装标签
                $.ajax({
                    url: '/goods/getDetailPage',
                    type: 'get',
                    data:{'spu_id': "{{$goods->gid}}",'page':page},
                    success: function(data) {
                        if(data.code ==0){
                            $('.pro-pj').html('');
                            $.each(data.data,function (i ,item) {
                                var xing = '';  //星星数
                                if(item.stars==1){xing = '<span class="assess_full f_left"></span>'}
                                if(item.stars==2){xing = '<span class="assess_full f_left"></span><span class="assess_full f_left"></span>'}
                                if(item.stars==3){xing = '<span class="assess_full f_left"></span><span class="assess_full f_left"></span><span class="assess_full f_left"></span>'}
                                if(item.stars==4){xing = '<span class="assess_full f_left"></span><span class="assess_full f_left"></span><span class="assess_full f_left"></span><span class="assess_full f_left"></span>'}
                                if(item.stars==5){xing = '<span class="assess_full f_left"></span><span class="assess_full f_left"></span><span class="assess_full f_left"></span><span class="assess_full f_left"></span><span class="assess_full f_left"></span>'}
                                var member_img = '';//头像
                                if(item.member.picture==''){
                                    member_img = '<img src="/picture/rwu.png" alt="">';
                                }else {
                                    member_img = '<img src="'+ item.member.picture +'">';
                                }
                                var phones = item.member.mobile;
                                var phone = phones.substring(0, 3) + "****" + phones.substring(7, 11);
                                pagehtml += '<li>' +
                                    '<div class="pull-left pro-pjc">' +
                                    '<dl>' +
                                    '<dt class="pull-left">' +
                                        member_img +
                                    '<p>' + phone + '</p>' +
                                    '</dt>' +
                                    '<dd class="pull-left">' +
                                    '<div>' +
                                    '<div class="assess_bar sp_listbar pull-left">' +
                                    xing+
                                    '</div> </div> <div class="pj-con">' +
                                    '<div class="pull-left">' + item.content + '</div></div>' +
                                    '<div class="pj-con"> <div>' +
                                    '<p class="pull-left pro-tm">'+ item.created_at +'</p>' +
                                    '</div> </div> </dd> </dl> </div> </li>';

                            })
                            //console.log(data.data);
                            $('.pro-pj').append(pagehtml);
                        }

                        // 加载图书列表
                        /*var html = compiled_tpl.render(data);
                        document.getElementById('booklist').innerHTML = html;*/

                    }

                });
            }
        });
    </script>
@endsection
