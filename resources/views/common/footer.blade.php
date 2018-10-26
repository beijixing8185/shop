
<!--  发镖弹层 begin -->
<link rel="stylesheet" href="/css/fbwindowsuccess.css">
<link rel="stylesheet" href="/css/fbwindow.css">
<script src="/js/commonfb.js"></script>
{{--<script src="/js/pop.js"></script>--}}


<div class="container-fluid footer">
    <div class="zbBottom">
        <div class="zbBottomContent">
            <div class="zbBottomTop contentBox">
                <p class="tabspan">
                    <span class="current caClass" id="showfriendlink" traceflag="footer_tab_友情链接">友情链接</span>
                    <span class="caClass" id="showbsservice" traceflag="footer_tab_镖狮服务">萤火虫服务</span>
                </p>
                <div class="TABbox TABbox0">
                    <ul>
                        @if(!empty(Cache('link')))
                            @foreach(Cache('link') as $val)
                                <li>
                                    <a href="{{$val['link']}}" target="_blank">{{$val['name']}}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <div class="TABbox TABbox1">
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
<script>
    $('.zbBottomTop .tabspan span').click(function(){
        var idx = $(this).index();
        $('.zbBottomTop .tabspan span').removeClass('current');
        $(this).addClass('current');
        $('.zbBottomTop .TABbox').hide();
        $('.zbBottomTop .TABbox' + idx).show();
    });
</script>
@include('./common/right')

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
</script>	<!--  右侧工具栏 end -->



<input type="hidden" id="commonfbversion" value="A">

<!--奇数A版本-->
<!-- Swiper -->
<div class="faAMask">
    <div class="logoBox">
        <div class="logoLine">
            <img src="/picture/pubishi-lion@2x.png" alt="">
        </div>
        <div class="swiper-container-fabiaoA swiper-no-swiping">
            <div class="swiper-wrapper">
                <div quesNo="1" id="VA_catList" class="swiper-slide swiper-no-swiping swiper-slide1">
                    <div class="swiper-slide1-header">我们能为您做什么？</div>
                    <div class="swiper-list swiper-slide1-list">
                        <ul>
                            <li class="qNo1" value="123" data-tip="涨粉、阅读量增加、广点通、流量主、公众号代运营...">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>微信营销</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo1" value="124" data-tip="网站SEO优化、SEM竞价托管、应用商店排名优化（ASO)...">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>搜索营销</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo1" value="125" data-tip="百度百科、百度知道、知乎口碑、网红推荐、品牌公关...">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>口碑营销</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo1" value="126" data-tip="全网新闻、论坛发帖、软文写作、商业计划书...">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>文案撰写</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo1" value="127" data-tip="网站、公众号、小程序、APP等定制开发...">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>开发建站</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo1" value="158" data-tip="名片设计、海报设计、LOGO设计...">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>创意/设计</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo1" value="0" data-tip="我不清楚（没关系，交给严选师！）">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>我不清楚</span>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                        <p class="moveBlock"></p>
                    </div>
                    <div class="swiper-info">

                    </div>
                    <div class="buttoGroup">
                        <span onclick="nextVAPage(this)" class="caClass" traceflag="pop_tab_下一步_1" id="VA_buttoNext1">下一步</span>
                    </div>
                    <div class="errtip">
                        您有选项没有完成，请让我们更了解您
                    </div>
                </div>
                <div quesNo="2" id="VA_tradeList" class="swiper-slide swiper-slide2 swiper-no-swiping">
                    <div class="swiper-slide2-header">您所在的行业</div>
                    <div class="swiper-list">
                        <ul>
                            <li class="qNo2" value="A1037" data-tip="医疗卫生">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>医疗卫生</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1017" data-tip="教育培训">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>教育培训</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1000" data-tip="招商加盟">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>招商加盟</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1021" data-tip="机械设备">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>机械设备</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1009" data-tip="商务服务">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>商务服务</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1012" data-tip="旅游及票务">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>旅游及票务</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1005" data-tip="网络服务">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>网络服务</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1024" data-tip="广告及包装">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>广告及包装</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1015" data-tip="金融服务">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>金融服务</span>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                        <p class="moveBlock"></p>
                    </div>
                    <div class="swiper-list">
                        <ul>
                            <li class="qNo2" value="法律服务" data-tip="法律服务">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>法律服务</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="生活服务" data-tip="生活服务">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>生活服务</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="建筑及装修" data-tip="建筑及装修">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>建筑及装修</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="孕婴用品" data-tip="孕婴用品">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>孕婴用品</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1003" data-tip="休闲娱乐">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>休闲娱乐</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1016" data-tip="节能环保">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>节能环保</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="A1007" data-tip="食品餐饮">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>食品餐饮</span>
                                    </dd>
                                </dl>
                            </li>
                            <li class="qNo2" value="其他" data-tip="其他">
                                <dl>
                                    <dt>
                                        <img src="/picture/loadimage.htm" alt="">
                                    </dt>
                                    <dd>
                                        <span>其他</span>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                        <p class="moveBlock"></p>
                    </div>
                    <div class="buttoGroup">
                        <span onclick="prevVAPage(this)" class="caClass" traceflag="pop_tab_上一步" id="VA_buttoprev2">上一步</span><span onclick="nextVAPage(this)" class="caClass" traceflag="pop_tab_下一步" id="VA_buttoNext2">下一步</span>
                    </div>
                    <div class="errtip">
                        您有选项没有完成，请让我们更了解您
                    </div>
                </div>
                <div quesNo="3" class="swiper-slide swiper-slide3 swiper-no-swiping qNo3">
                    <div class="swiper-slide3-header">请放心，我们会保护您的所有信息</div>
                    <div class="swiper-slide3-box">
                        <div class="swiper-slide3-main">

                            <div id="VA_locationinfo" class="request" style="display:block">
                                <p class="swiper-slide3-title">您的所在地：</p>
                                <div class="group">
                                    <div class="selectBox">
                                        <select class="form-control" id="VA_proinfo">
                                            <option value="北京市" selected="selected">北京市</option>
                                            <option value="天津市">天津市</option>
                                            <option value="河北省">河北省</option>
                                            <option value="山西省">山西省</option>
                                            <option value="内蒙古自治区">内蒙古自治区</option>
                                            <option value="辽宁省">辽宁省</option>
                                            <option value="吉林省">吉林省</option>
                                            <option value="黑龙江省">黑龙江省</option>
                                            <option value="上海市">上海市</option>
                                            <option value="江苏省">江苏省</option>
                                            <option value="浙江省">浙江省</option>
                                            <option value="安徽省">安徽省</option>
                                            <option value="福建省">福建省</option>
                                            <option value="江西省">江西省</option>
                                            <option value="山东省">山东省</option>
                                            <option value="河南省">河南省</option>
                                            <option value="湖北省">湖北省</option>
                                            <option value="湖南省">湖南省</option>
                                            <option value="广东省">广东省</option>
                                            <option value="广西壮族自治区">广西壮族自治区</option>
                                            <option value="海南省">海南省</option>
                                            <option value="重庆市">重庆市</option>
                                            <option value="四川省">四川省</option>
                                            <option value="贵州省">贵州省</option>
                                            <option value="云南省">云南省</option>
                                            <option value="西藏自治区">西藏自治区</option>
                                            <option value="陕西省">陕西省</option>
                                            <option value="甘肃省">甘肃省</option>
                                            <option value="999999">其他</option>
                                        </select>
                                        <!-- <b><img src="/picture/zx_sq.png" alt=""></b> -->
                                    </div>
                                    <div class="selectBox" style="display:none">
                                        <!--所有市-->
                                        <select id="VA_cityinfo"></select>
                                        <!-- <b><img src="/picture/zx_sq.png" alt=""></b> -->
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="content_auth" value=""/>
                            <div class="request" style="margin-bottom: 0;">
                                <p class="swiper-slide3-title">您可能还想补充点<span style="color: #999;font-size: 12px;font-weight: normal;">（选填）</span>：</p>
                                <div class="group">
                                    <div class="textareaBox">
                                        <textarea tabIndex="-1" type="text" id="VA_userrequest" rows="2" placeholder="您可能还想说点什么，让我们更了解您的需求优先为您服务" maxlength="200"></textarea>
                                        <p><span>0</span>/200字</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttoGroup">
                        <span onclick="prevVAPage(this)" class="caClass" traceflag="pop_tab_上一步_3" id="VA_buttoprev3">上一步</span>
                        <span class="caClass" traceflag="公共A提交需求" id="VA_buttoNext3">提交需求</span>
                    </div>
                    <div class="errtip">
                        您有选项没有完成，请让我们更了解您
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <div id="VA_closeBtn_fb" class="closeBtn caClass" traceflag="pop_close_ 关闭通用"><img src="/picture/closed-gray.png" alt=""></div>
            <!-- Add Arrows -->
        </div>
    </div>
</div>	<script src="/js/commonfb.js"></script>

<div class="fbLogin" id="fbLogin">
    <div class="fbLoginMian">
        <div class="fbLoginTitle">
            <img src="/images/logo02.png" alt="">
            <img id="closeCommonFbLogin" class="closeFBlogin caClass" traceflag="pop_close_登录并提交弹窗关闭" src="/picture/close@2x.png" alt="">
        </div>
        <div class="fbLoginContent">
            <div>
                <img src="/picture/log-phone@2x.png" alt="">
                <input type="text" name="fbLoginPhone" id="fbLoginPhone" placeholder="请输入11位手机号码" maxlength="11">
            </div>
            <input id="phone_session" type="hidden" value="{{session('phone')}}"/>
            <p class="phoneError">请输入正确的手机号码</p>
            {{--            <div class="fbLoginCode">
                            <img src="/picture/log-message@2x.png" alt=""><input type="text" name="fbLoginCode" id="fbLoginCode" placeholder="请输入验证码">
                            <span id="fbLogin_authCode" class="caClass" traceflag="pop_vcode_获取验证码">获取验证码</span>
                        </div>
                        <p class="codeError" style="position: absolute;">验证码与手机号不匹配</p>--}}
        </div>
        <div class="fbLoginBtn">
            <span id="commfbsubmit" class="caClass" traceflag="pop_fb_登录并提交">登录并提交</span>
            <p>咨询电话：010-53526642</p>
        </div>
    </div>
</div>
<script src="/js/commonlogin.js"></script>

<div class="sucEroShadow" id="_submit_success" style="display:none;" >
    <div class="inner" style="width:600px;height:320px;top:calc(50% - 160px)">
        <p class="closed"><img onclick="closeSuccess()" src="/picture/des-closed.png" alt=""/></p>
        <div class="iconL">
            <b><img src="/picture/success.png" alt=""/></b>
            需求发布成功！
        </div>
        <div class="time"><span id="sucinform"></span></br>
            平台会保障您的服务效果，保护您的信息隐私安全，如有疑问请致电010-53526642</div>
        <p class="about-btn"><a rel="nofollow" href="/about/index/2" target="_about" >了解平台保障细节</a></p>
        <div class="anniu">
            <a href="http://p.qiao.baidu.com/cps/chat?siteId=12314605&userId=25925415">在线咨询</a>
            <a class="rindex" href="/">返回首页</a>
        </div>
    </div>
</div>
<!--  发镖成功end -->
<!--  发镖失败begin -->
<div class="sucEroShadow" id="_submit_error" style="display:none;">
    <div class="inner">
        <p class="closed"><img onclick="closeError()" src="/picture/des-closed.png" alt=""/></p>
        <div class="iconL">
            <b><img src="/picture/error.png" alt=""/></b>
            需求发布失败！
        </div>
        <div class="time">您的需求发布失败，请选择重新发布或致电010-53526642联系我们。</div>
        <p class="about-btn"><a href="">了解平台保障细节</a></p>
        <div class="anniu">
            <a href="/">重新发布</a>
            <a class="rindex" href="/">返回首页</a>
        </div>
    </div>
</div>
<!--  发镖失败end -->
<!-- 调查问卷 -->
{{--<div id="questionnaire" class="questionnaireMask">
    <div class="questionnaireMain">
        <div class="closeBtn caClass" id="closeQuestionaire" traceflag="pop_close_关闭问卷调查弹窗" id="questionnaireMask_close"><img src="/picture/close@2x.png" alt=""></div>
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
            <p>咨询电话：010-53526642</p>
        </div>
    </div>
</div>--}}
<!-- 调查问卷END -->
{{--
<div id="fbSuccess" class="fbMask">
    <div class="fbContent">
        <div class="logoLine">
            <img src="/picture/pubishi-lion@2x.png" alt="">
        </div>
        <div class="closeBtn caClass" id="closeBtn_fbsuccess" traceflag="pop_close_关闭通用发镖成功弹窗"><img src="/picture/closed-gray.png" alt=""></div>
        <p class="fbBar"></p>
        <div class="fbTitle">
            <img src="/picture/check-circle-fill@2x.png" alt="">提交成功！
            <p>我们会马上与您联系...</p>
        </div>
        <div class="fbCodeBox">
            <p class="codeP"><img src="/picture/qr-code@2x.png" alt=""><br/><span>关注萤火虫公众号</span></p>
            <div class="fbList">
                <p><img src="/picture/yellow-check@2x.png" alt="">免费营销课程</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">海量营销攻略</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">专家在线解答</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">业务案例展示</p>
            </div>
        </div>
        <p class="fbTips">请保持联系电话畅通。</p>
    </div>
</div>
<div id="fbError" class="fbMask">
    <div class="fbContent">
        <div class="logoLine">
            <img src="/picture/pubishi-lion@2x.png" alt="">
        </div>
        <div class="closeBtn caClass" id="closeBtn_fberror" traceflag="pop_close_关闭通用发镖失败弹窗"><img src="//picture/closed-gray.png" alt=""></div>
        <p class="fbBar"></p>
        <div class="fbTitle">
            <img src="/picture/close-circle-fill@2x.png" alt="">提交失败！
            <p>您的需求发布失败，请检查网络后重新发布或致电010-53526642联系我们</p>
        </div>
        <div class="fbCodeBox">
            <p class="codeP"><img src="/picture/qr-code@2x.png" alt=""><br/><span>关注萤火虫公众号</span></p>
            <div class="fbList">
                <p><img src="/picture/yellow-check@2x.png" alt="">免费营销课程</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">海量营销攻略</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">专家在线解答</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">业务案例展示</p>
            </div>
        </div>
        <p class="fbTips"><a href="/">重新发布</a><a href="/">返回首页</a></p>
    </div>
</div>--}}
