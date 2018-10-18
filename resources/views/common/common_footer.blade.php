<script src="/js/xslider.js"></script>
<link rel="stylesheet" href="{{asset('css/commonfooter.css')}}">
<div class="container-fluid footer">
    <div class="zbBottom">
        <div class="zbBottomContent">
            <div class="zbBottomTop contentBox">
                <p class="tabspan"><span class="current">萤火虫服务</span></p>
                <div class="TABbox TABbox0">
                    <ul>
                        @if(!empty(Cache('goods_list')))
                            @foreach(Cache('goods_list') as $val)
                                <li>
                                    <a href="/goods/goodsDetail/{{$val['id']}}" target="_blank">{{$val['spu_name']}}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="lineBorder"></div>
            <div class="poi contentBox">
                <div class="zbtabList">
                    <ul>
                        @if(!empty(Cache('about_list')))
                            @foreach(Cache('about_list') as $val)
                        <li><a rel="nofollow" href="/about/index/{{$val['id']}}" target="_blank">{{$val['category']}}</a><i></i></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="phoneCode">
                    <p>
                        <img src="/picture/phone01.png" alt="phone">010-53526642 <span>工作时间 9:30-18:30</span>
                    </p>
                    <div>
                        © 2018 欢迎访问上海好歆信息科技有限公司萤火虫网 沪ICP备15050787号-16
                    </div>
                </div>
                <div class="qcodeBTM">
                    <dl>
                        <dt>
                            <img src="/picture/lion-weixin-new.png" alt="微信公众号">
                        </dt>
                        <dd>微信公众号</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>