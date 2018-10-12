@extends('welcome')

@section('title','新闻详情')
@section('keywords','新闻详情')
@section('description','新闻详情')

@section('css')
	<link rel="stylesheet" href="{{asset('css/cmsdetails.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<script type="text/javascript" src="{{asset('js/common-header.js')}}"></script>
	<script src="{{asset('js/popup.js')}}"></script>
	<script src="{{asset('js/iconfont.js')}}"></script>
	<script src="{{asset('js/jquery.qrcode.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/cmsdetails.js')}}"></script>

@endsection


@section('content')


	@include('./common/demand')
	@include('./common/nav')
@include('./common/search')
@include('./common/right')
@include('./common/poper')
<!-- 面包屑 -->
<div class="strategyInfoNav content">
	<ul>
		<li><a href="/">首页</a></li>
		<li><a href="javascript:void(0);">></a></li>
		<li><a href="/cmslist/cl0-pg1.htm">营销攻略</a></li>
		<li><a href="javascript:void(0);">></a></li>
		<li><a href="/cmslist/cl78-pg1.htm">SEO优化</a></li>
	</ul>
</div>
<!-- 内容 -->
<div class="strategyInfoMain content">
	<div class="strategyInfoMainLeft fl">

		<div class="cmsFb">
			<div class="cmsFbTitle">今天已有 <span>34</span> 位用户得到了镖哥的专业解答</div>
			<div class="cmsFbTitleInfo">
				<img src="/picture/article-publishi-lion@2x.png" alt="">
				<div><img src="/picture/yh@2x.png" alt="">是这样的，我对营销还是有两下子的，您可以告诉我您的营销疑问，反正也不花钱，对吧<img src="/picture/yh@2x.png" alt=""></div>
			</div>
			<div class="cmsFbGroup">
				<span>您的疑问<b style="color: #999;">（选填）</b>：</span>
				<div>
					<textarea  style="height: 180px;"  id="cmsFbQuestion" name="cmsFbQuestion" placeholder="微信代运营？朋友圈广告？定制开发？无论什么，镖哥通通帮你搞定！！多说点吧，让镖哥更了解您的疑问优先为您服务"></textarea>
				</div>
			</div>
			<div class="cmsFbGroup cmsPhoneBox" id="cms_Phoneshow"  style="display:none;" >
				<span>您的电话：</span>
				<div>
					<input value="15010321498" type="text" name="cms_phone" id="cms_phone" placeholder="请输入11位手机号" maxlength="11">
					<!-- <div class="cmsPhoneCodeBox">
                        <input type="text" name="cms_codeNum" id="cms_codeNum" placeholder="请输入验证码"><span id="cms_codeBtn" class="caClass" traceflag="content_vcode_获取验证码">获取验证码</span>
                    </div>
                     -->
					<p class="cmsFbError">手机号输入有误</p>
				</div>
			</div>
			<div class="cmsFbCheckBox"  style="display:none;" >
				<label><input id="cms_hidephone" class="caClass" traceflag="content_select_向服务商隐藏手机号" type="checkbox" name="" checked="checked"/>向服务商隐藏您的真实手机号，隐私不外泄</label>
			</div>
			<div class="cmsFbSubmit">
				<span id="cmsSubmitBtn" class="caClass" traceflag="content_fb_发布需求" onclick="cmsSubmitLeads()">提交</span>
			</div>
			<div class="cmsFbErrtip">手机号输入有误</div>

			<!-- 发镖成功 -->
			<div class="cmsFbMask cmsFbSuccess" id="cmsFbSuccess">
				<img id="cmsclosesuccess" class="caClass" traceflag="content_close_关闭成功弹窗" src="/picture/closed-gray.png" alt="">
				<div class="cmsFbSuccessHeader">
					<img src="/picture/check-circle-fill@2x.png" alt="">提交成功！
					<p>稍后严选师将致电您，为您提供免费营销咨询服务</p>
				</div>
				<div class="CmsFbCodeBox">
					<p class="CmsFbcodeP"><img src="/picture/qr-code@2x.png" alt=""><br/><span>关注镖狮公众号</span></p>
					<div class="CmsFbfbList">
						<p><img src="/picture/yellow-check@2x.png" alt="">免费营销课程</p>
						<p><img src="/picture/yellow-check@2x.png" alt="">海量营销攻略</p>
						<p><img src="/picture/yellow-check@2x.png" alt="">专家在线解答</p>
						<p><img src="/picture/yellow-check@2x.png" alt="">业务案例展示</p>
					</div>
				</div>
				<!-- <p class="CmsFbfbTips">请注意010-8992开头的电话，保持联系电话畅通。</p> -->
			</div>
			<!-- 发镖失败 -->
			<div class="cmsFbMask cmsFbFail"　id="cmsFbFail">
				<img id="cmsclosefailure" class="caClass" traceflag="content_close_关闭错误弹窗" src="/picture/closed-gray.png" alt="">
				<div class="cmsFbSuccessHeader">
					<img src="/picture/close-circle-fill@2x.png" alt="">提交失败！
					<p>您的需求发布失败，请检查网络后重新发布或致电4000-581-581联系我们</p>
				</div>
				<div class="CmsFbCodeBox">
					<p class="CmsFbcodeP"><img src="/picture/qr-code@2x.png" alt=""><br/><span>关注镖狮公众号</span></p>
					<div class="CmsFbfbList">
						<p><img src="/picture/yellow-check@2x.png" alt="">免费营销课程</p>
						<p><img src="/picture/yellow-check@2x.png" alt="">海量营销攻略</p>
						<p><img src="/picture/yellow-check@2x.png" alt="">专家在线解答</p>
						<p><img src="/picture/yellow-check@2x.png" alt="">业务案例展示</p>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="/js/cmsfb.js"></script>			<div class="wxCode">
			<h1>SEO优化策略</h1>
			<div class="wxCodeMsg">
				分享到 <img class="wxicon" onclick="generateCode('78','58427','2500','sharecode1','http://m.51biaoshi.com')" src="/picture/wxicon.png" alt="微信二维码">
				<span><i class="closeCode"><img src='/picture/codeboxx.png'/></i><strong id="sharecode1"></strong></span>
			</div>
		</div>
		<div class="strategyinfoDate">
				<span>
				<img src="/picture/uesricon@2x.png" alt="镖狮网">
									镖狮网
								</span>
			<span><img src="/picture/timeicon@2x.png" alt="文章时间">2018-10-08</span>
		</div>
		<!-- 标签 -->
		<div class="strategyinfoTag">
			<ul>
				<li><a href="/cmstag/tg69_pg1.htm">SEO优化</a></li>
				<li><a href="/cmstag/tg545_pg1.htm">关键词优化</a></li>
				<li><a href="/cmstag/tg51_pg1.htm">seo</a></li>
				<li><a href="/cmstag/tg18_pg1.htm">网站优化</a></li>
				<li><a href="/cmstag/tg333_pg1.htm">网站收录</a></li>
				<li><a href="/cmstag/tg38_pg1.htm">百度推广</a></li>
				<li><a href="/cmstag/tg602_pg1.htm">关键词整站优化</a></li>
			</ul>
		</div>
		<!-- 摘要、内容 -->
		<div class="strategyinfoDes">
			1.内容调查和编写

			第一件事就是关键词调查，关键词是搜不尽、查不绝的。一般来说，调查越深入，发现的词条就越多，尽量在允许的时间内对这些词条进行进一步的分析和研究。反复此过程，最后才能确定关键词。

		</div>
		<div class="strategyinfoMain">
			<h2 style="text-align: center;">
				<img  alt='SEO优化策略'src="/picture/08191621y9on.jpg" style="width: 319px; height: 240px;" /></h2>
			<h2>
				<span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">&nbsp;</span></span></h2>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">搜索引擎优化策略应该包括三部分:</span></span></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;"><strong>1.内容调查和编写</strong></span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">第一件事就是关键词调查，关键词是搜不尽、查不绝的。一般来说，调查越深入，发现的词条就越多，尽量在允许的时间内对这些词条进行进一步的分析和研究。反复此过程，最后才能确定关键词。</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">记住重要的一点:Google上进行的一半以上的搜索是不一样的!</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">你需要为选定的每个关键词产生一个单独的页面:一个关键词条一个页面。这意味着一个站要产生无数页面。</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;"><strong>2.网站内容排版</strong></span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">这部分工作的目的是提高主页的页面等级PR。</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">理论上来讲，网站的每个页面都拥有自己的外部链接和PR 值，但实际上，这不仅不可能，而且也没有必要。</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">Google认为每个页面的链接数量最好不要超过50-100。简单来说，随着主页的点击次数的提高，页面的PR值反而会降低。所以我们追求的网站结构是:在每页的链接上限内，给每个页面最少的点击次数。</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;"><strong>3.外部链接建设</strong></span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">这是SEO策略中最难的部分，不仅需要投入大量精力，更需要创意，找到链接的独特方法。</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">获得外部链接的方式:</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">交换友情链接;</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">购买单向链接;</span></span></p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">增加网站创意与特色，链接自然会找上门。</span></span></p>
			<p>&nbsp;</p>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;"><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;">镖狮网是一家网络营销第三方服务平台，为您提供网络推广，微信代运营、网络代运营、SEO优化、营销策划等一站式代运营服务。找网络推广外包服务，就选择镖狮网，国内领先县的营销服务平台。SEO优化服务作为镖狮网最专业的一项服务，曾经为很多大公司做过成功的案例，如果您最近有想做SEO优化服务，不妨看一下我们镖狮网，你只管来，后期服务我来做，包你满意。</span></span></span></span></p>
			<p>&nbsp;</p>
			<h2>
				&nbsp;</h2>
			<p><span style="font-size: 16px;"><span style="font-family: courier new,courier,monospace;"><a href="http://www.51biaoshi.com/link.htm?target=http%3A%2F%2Fwww.51biaoshi.com%2Fproduct%2F378.htm%3F_pb%3Ddhtg11&params=7XAcRV0nADf_qA7grgYKY5bTO0vjOcfa" style="padding: 12px; background-color: #f6f6f6; display: block; overflow: hidden; max-width: 390px; margin: 5px auto;border-radius: 4px;">     <span style="display: inline-block;float: left;max-width: 140px;width: 30%;">         <img src="/picture/loadimage_9.htm" style="width: 100%; height: 80px; max-height: 80px;">     </span>     <span style="display: inline-block;float: left; width: 64%; margin-left: 0.1rem; font-size: 0.12rem; color: #999;">         <span style="display: inline-block;font-size: 16px; margin-bottom: 5px; color: #333; display: -webkit-box; overflow: hidden; text-overflow: ellipsis; -webkit-line-clamp: 2; -webkit-box-orient: vertical; line-height: 1.25; max-height: 40px;">SEO关键词整站优化／百度推广／网站收录</span>         <span style="display: inline-block;font-size: 14px; color: #ff4400;">              <i style="font-size: 12px;">¥</i> 10000         </span>     </span> </a></span></span></p>
			<p><span style="font-size: 16px;">&nbsp;</span></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>

		</div>

		<!-- 相关文章 -->
		<div class="strategyinfoArtical">
			<div class="strategyinfoArticalTitle">
				您可能感兴趣的文章
			</div>
			<div class="strategyinfoArticalTitleMain">
				<div class="strategyinfoArticalTitleList">
					<ul>
						<li><a href="/cms/cl78-cm57825-at1970.htm">分享网站SEO优化方法和站长工具</a></li>
						<li><a href="/cms/cl78-cm57894-at2031.htm">怎样让自己的网站排名上首页 获得用户的信任</a></li>
						<li><a href="/cms/cl78-cm57424-at1573.htm">史上最全的网站SEO策略方案</a></li>
						<li><a href="/cms/cl78-cm57900-at2037.htm">网站推广优化需要注意什么？如何操作呢</a></li>
						<li><a href="/cms/cl78-cm57855-at1996.htm">为何百度SEO越来越难做了</a></li>
					</ul>
				</div>
				<div class="strategyinfoArticalTitleList">
					<ul>
						<li><a href="/cms/cl78-cm57856-at1997.htm">SEO马龙说说怎么分析：百度统计访客标识码详解—SEM推广人员必看</a></li>
						<li><a href="/cms/cl78-cm56724-at891.htm">在做SEO时，文章原创度的一些观点和看法</a></li>
						<li><a href="/cms/cl78-cm57187-at1337.htm">我的SEO，SEM以及微信公众号运营经验</a></li>
						<li><a href="/cms/cl78-cm58101-at2200.htm">百度 SEO 是否已经名存实亡？</a></li>
						<li><a href="/cms/cl78-cm57899-at2036.htm">企业网站需要做好哪些维护工作</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<!-- 案例 -->
	<div class="strategyInfoMainRight fr">
		<div class="strategyInfoMainRightNewPro">
			<div class="prolistTitle">
				相关文章    <a href="/cmslist/cl0-pg1.htm" target="_blank">更多></a>
			</div>
			<ul class="newProList">
				<li>
					<a href="/cms/cl78-cm58100-at2199.htm" target="_blank">
						<p class="textInfo">SEO优化：3步轻松把高指数关键词优化到百度首页！</p>
						<div>
							<img src="/picture/05181449g15x.jpg">
							<div class="textImg">
								SEO优化：3步轻松把高指数关键词优化到百度首页！
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="/cms/cl78-cm57777-at1924.htm" target="_blank">
						<p class="textInfo">为什么说SEO大神都隐藏在灰色行业</p>
						<div>
							<img src="/picture/learn-default.png"/>
							<div class="textImg">
								为什么说SEO大神都隐藏在灰色行业
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="/cms/cl78-cm58099-at2198.htm" target="_blank">
						<p class="textInfo">SEO流量的三大核心影响因素，零预算增流量</p>
						<div>
							<img src="/picture/05173110w4du.jpg">
							<div class="textImg">
								SEO流量的三大核心影响因素，零预算增流量
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="/cms/cl78-cm57897-at2034.htm" target="_blank">
						<p class="textInfo">如何做品牌SEO，如何摆脱SEO收录？</p>
						<div>
							<img src="/picture/18213038jhix.jpg">
							<div class="textImg">
								如何做品牌SEO，如何摆脱SEO收录？
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="/cms/cl78-cm57427-at1576.htm" target="_blank">
						<p class="textInfo">网站SEO优化常见问题汇总</p>
						<div>
							<img src="/picture/21223929zv5c.jpg">
							<div class="textImg">
								网站SEO优化常见问题汇总
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="/cms/cl13-cm58201-at2275.htm" target="_blank">
						<p class="textInfo">网站开发框架及语言比较大盘点，5招教你如何选择网站开发语言</p>
						<div>
							<img src="/picture/112055004cy5.jpg">
							<div class="textImg">
								网站开发框架及语言比较大盘点，5招教你如何选择网站开发语言
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="/cms/cl88-cm58025-at2126.htm" target="_blank">
						<p class="textInfo">淘宝店铺为何转战微信运营</p>
						<div>
							<img src="/picture/30201249q9mm.jpg">
							<div class="textImg">
								淘宝店铺为何转战微信运营
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="/cms/cl95-cm57406-at1555.htm" target="_blank">
						<p class="textInfo">众位广告文案大神是怎么写出牛逼的slogan的呢？</p>
						<div>
							<img src="/picture/21095603yhp7.jpg">
							<div class="textImg">
								众位广告文案大神是怎么写出牛逼的slogan的呢？
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>


		<div id="myScrollspy" class="myScrollspyM">
			<div class="prolistTitle">
				文章中提到的服务
			</div>
			<ul>
				<li>
					<a href="/product/370.htm" target="_blank">
						<img src="/picture/hot.gif"/>                            <div class="smallTitle"><i>01</i>网站定制开发 </div>
						<div class="spyInfo"></div>
					</a>
				</li>
				<li>
					<a href="/product/378.htm" target="_blank">
						<div class="smallTitle"><i>02</i>SEO关键词整站优化／百度推广／网站收录 </div>
						<div class="spyInfo"></div>
					</a>
				</li>
				<li>
					<a href="/product/450.htm" target="_blank">
						<div class="smallTitle"><i>03</i>高端名片设计 </div>
						<div class="spyInfo"></div>
					</a>
				</li>
			</ul>
			<div class="noMessage">
				<p>没有找到我想要的:</p>
				<a class="caClass" traceflag="rightbar_pop_我要咨询" id="cmsdetailfb" href="javascript:tofb('','');">我要咨询</a>
			</div>
		</div>

	</div>
</div>




<script>
    var spyTop = 600;
    if($('#myScrollspy').length > 0){
        var spyTop = $('#myScrollspy').offset().top;
        $('#myScrollspy').affix({
            offset: {
                top: spyTop,
                bottom: function () {
                    return (this.bottom = $('.footer').outerHeight(true)+20);
                }
            }
        });
    }

    $(window).scroll(function(){
        if($(window).scrollTop() > spyTop){
            $(".header-fix").show();
        }else {
            $(".header-fix").hide();
        }
    });
    $('.newProList li').each(function() {
        var pLength = $(this).find('.textInfo').text().trim().length;
        var divLength = $(this).find('.textImg').text().trim().length;
        if(pLength > 30){
            $(this).find('.textInfo').addClass('slh');
        }
        if(divLength > 30){
            $(this).find('.textImg').addClass('slh');
        }
    });
    $('#myScrollspy ul li').each(function() {
        var divLength = $(this).find('.smallTitle').text().trim().length;
        var pLength = $(this).find('.spyInfo').text().trim().length;
        if(divLength > 28){
            $(this).find('.spyInfo').addClass('slh');
        }
        if(pLength > 36){
            $(this).find('.spyInfo').addClass('slh');
        }
    });
    $('.newProList li:nth-of-type(1)').addClass('active');
    $('.newProList li').hover(function(){
        $(this).addClass('active').siblings('li').removeClass('active');
    })
</script>

@endsection

