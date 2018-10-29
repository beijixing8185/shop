<div class="container-fluid header-top" id="header_top">
    <div class="container ">
        <ul class="pull-left ">
            <li class="appIcon">
                <b><img src="/picture/index-header-wechat@2x.png"/>关注萤火虫网</b>
                <div class="app-erm" style="display: none">
                    <img src="/picture/lion-weixin-new.jpg" alt=""/>
                </div>
            </li>
        </ul>
        <ul class="pull-right top-list">
            @if(!empty(session('user_id')))
                <li class="login-nav"> <a class="login" href="/member/getMember" rel="nofollow">欢迎您：{{session('phone')}}</a></li>
                <li class="login-nav"> <a class="login" href="/login/loginout" rel="nofollow">退出</a></li>
                @else
            <li class="login-nav"> <a class="login" href="{{url('login/index')}}" rel="nofollow">登录</a></li>
            <li class="regist-nav"><a class="register" href="{{url('login/register')}}" rel="nofollow">注册</a></li>
            @endif
            <li><a href="{{url('member/order')}}">我的订单</a></li>
            <li class="pull-right-kefu">
                <a href="http://p.qiao.baidu.com/cps/chat?siteId=12314605&userId=25925415" target="_blank">
                    <img src="/images/iconfont010_2.png" alt="在线客服" style="position: relative;top: -2px;right: 5px;"/>在线客服</a>
            </li>
            <li><a>热线电话：010-53526642</a></li>
        </ul>
    </div>
</div>