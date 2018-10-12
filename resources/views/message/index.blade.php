@extends('welcome')

@section('title','爆品专区')

@section('css')
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<link rel="stylesheet" href="{{asset('css/integraldfxq.css')}}">
	<script type="text/javascript" src="{{asset('js/common-header.js')}}"></script>
	<script src="{{asset('js/iconfont.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}"/>
	<script src="{{asset('js/popup.js')}}"></script>
	<script src="{{asset('js/pop.js')}}"></script>
	<script src="{{asset('js/integraldfxq.js')}}"></script>
@endsection

@section('content')

	@include('./common/member_search')
	@include('./common/right')
	@include('./common/poper')

	<div class="integralBanner">
        <div class="integralBannerMain content">
            <div class="integralBannerButton">
                <span>规则</span><span>历史代发记录</span>
                <div>
                    1.您代朋友、客户下咨询单，如果在镖狮平台成交，您将获得按成交金额换算的佣金奖励，成交金额越大，佣金奖励越多，无门槛直接可提现。<br>
                    2.更多细节请在微信中搜索“镖狮大使”了解详情。
                </div>
            </div>
            <h1>代朋友、客户发布需求</h1>
            <p>帮助朋友、客户成单，可获得佣金奖励，无门槛直接提现</p>
        </div>
    </div>
	<div class="integralContent content">
	<input id="demandtoken" type="hidden" value ="1539136079315"/>
        <div class="integralTitle">
            <span>用户信息</span>请准确填写代发用户的信息，更准确的联系到用户
        </div>
        <div class="groupBox">
            <div class="groupItem">
                <span><i>*</i>用户名称：</span>
                <input type="text" name="userName" placeholder="请输入用户名">
                <p class="userNameError">用户名称不能为空</p>
            </div>
            <div class="groupItem">
                <span>公司名称：</span>
                <input type="text" id="companyName" name="companyName" placeholder="请输入公司名称">
            </div>
            <div class="groupItem">
                <span><i>*</i>用户手机：</span>
                <input type="text" name="telNumber" placeholder="请输入正确的手机号码">
                <p class="telNumberError">用户手机号不能为空</p>
            </div>
            <div class="groupItem">
                <span style="position: relative;top: 7px;">客户意向分类：</span>
                <div>
                    <p>-请选择-</p>
                    <ul>
                        <li>微信代运营微商城开发</li>
                        <li>SEO优化</li>
                        <li>SEM竞价</li>
                        <li>品牌维护</li>
                        <li>媒体发稿</li>
                        <li>模板建站</li>
                        <li>企业建站</li>
                        <li>品牌文案</li>
                        <li>商业计划书</li>
                        <li>VI设计</li>
                        <li>其他</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="integralTitle">
            <span>需求信息</span>需求信息越详细，成交拿现金机会更大
        </div>
        <div class="integralTextarea">
            <span>用户需求：</span>
            <div>
                <textarea id="xqTextarea" name="xq" placeholder="请输入用户的具体需求"></textarea>
                <p><b>0</b>/500</p>
            </div>
        </div>
        <div class="integralSubmit">提交</div>
    </div>



    <div class="dfMask">
        <div class="dfMain">
            <img src="/picture/des-closed_7.png" alt="">
            <p>需求发布成功</p>
            <div>关闭</div>
        </div>
    </div>
    {{--<script src="/js/xslider.js"></script>--}}

@endsection