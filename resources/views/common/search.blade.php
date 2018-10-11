<div class="container-fluid header-md header-fix" style="display:none;height: 52px;">
    <div class="container">

        <ul class="pull-left navLlist">
            <li><a rel="nofollow" href="/">首页</a></li>
            <li><a rel="nofollow" href="/jhs/page1.htm" >聚划算</a></li>
            <li><a rel="nofollow" href="/aboutus.htm" >效果保障</a></li>
            <li><a href="/cmslist/cl0-pg1.htm" >营销攻略</a></li>
        </ul>
        <div class="pull-right fix-publish"><a href="#" id="floatDemand" class="caClass" onclick="javascript:tofb('','');" traceflag="fixbar_pop_发布需求滚动导航">我要发需求</a></div>
        <div class="fix-input pull-right">
            <input type="text" id="fixed-searchFile" name="searchFile_f"  value="" searchType="" placeholder="搜索您感兴趣的服务/案例"/>
            <div class="fixed-color-theme glyphicon glyphicon-search" onclick="searchWord()" id="searchBtn"></div>
        </div>
        <script>
            $('.tabList').hover(function(){
                $(this).find('.tabInfo').show();
                $(this).addClass('active');
            },function(){
                $(this).find('.tabInfo').hide();
                $(this).removeClass('active');
            });
            $('.tabInfo p').hover(function(){
                $(this).parents('li').addClass('active');
            },function(){
                $(this).parents('li').removeClass('active');
            })
        </script>
    </div>
</div>
<input type="hidden" value="true" id="dateInterval">