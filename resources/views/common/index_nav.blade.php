<div class="banner container-fluid" style="position: relative;">
    <div class="banner-nav container">
        @if(!empty(Cache('getColumn')))
            <div class="banner-nav-inner" id="bannerWaper">
                <ul class="banner-nav-list" id="bannerSerList">
                    @foreach(Cache('getColumn') as $val)
                        <li data-toggle="catInfo{{$val['id']}}">
                            <div class="banner-nav-list-title"><p class="ban-nav-logo00"></p>{{$val['name']}}<b class="ban-nav-pointer"></b></div>
                            <ul class="banner-baob">
                                @if(!empty($val['hot']))
                                    @foreach($val['hot'] as $goods)
                                        <li class=""><a style="color:#f1f3f6;font-size:12px" href='/goods/goodsDetail/{{$goods["id"]}}' target="_blank">{{$goods["spu_name"]}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                    @endforeach
                </ul>
                <div class="banner-list-con">
                    @foreach(Cache('getColumn') as $val)

                        <div  class="banner-list-inner" id="catInfo{{$val->id}}" style="display:none">
                            @if(!empty($val['child']))
                                @foreach($val['child'] as $item)
                                    <div class="pull-left banner-list">
                                        <p class="banner-list-title">{{$item->name}}</p>
                                        <div>

                                            <ul class="pull-left pro-list">
                                                @if(!empty($item['goods']))
                                                    @foreach($item['goods'] as $goods)
                                                        <li class="hotProd">
                                                            <p>
                                                                <a href="/goods/goodsDetail/{{$goods["id"]}}" target="_blank">{{$goods["spu_name"]}}</a>
                                                                <b>
                                                                    <img src="/picture/new.gif" alt=""/>
                                                                </b>
                                                            </p>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    @endforeach


                </div>
            </div>
        @endif

        <div class="adviceRight">
            <div class="adviceRightTitle">营销达人免费解答</div>
            <div class="adviceRightInfo">萤火虫今天已为<span> 322 </span>人提供营销咨询</div>
            <div class="adviceRightSubmit">
                <span id="bannerIM" class="caClass" traceflag="content_im_首页banner在线咨询" onclick="window.location.href='http://p.qiao.baidu.com/cps/chat?siteId=12314605&userId=25925415'">在线咨询</span>
            </div>
        </div>
    </div>
</div>