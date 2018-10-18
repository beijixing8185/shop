<div class="container-fluid header-md header-fix" style="display:none;height: 52px;">
    <div class="container">
        <ul class="pull-left navLlist">
            <li><a rel="nofollow" href="/">首页</a></li>
            <li><a rel="nofollow" href="/news/list" >聚划算</a></li>
            <li><a rel="nofollow" href="/about/index/2" >效果保障</a></li>
            <li><a href="/news/index" >营销攻略</a></li>
        </ul>
        <div class="pull-right fix-publish">
            <a href="#" id="floatDemand" class="caClass" onclick="javascript:tofb('','');" traceflag="fixbar_pop_发布需求滚动导航">我要发需求</a></div>
        <div class="fix-input pull-right">
            <input type="text" id="searchFile" name="searchFile"  value="" searchType="" placeholder="搜索您感兴趣的服务/案例"/>
            <div class="fixed-color-theme glyphicon glyphicon-search" id="searchBtn"></div>
        </div>
    </div>
</div>
<script>
    $('#searchBtn').click(function () {
        var content = $('#searchFile').val();
        if(content == ''){
            alert("请输入您要查询的服务/案例");
        }else{
            window.location.href='/search/index/'+content;
        }
    })
</script>
{{--
<input type="hidden" value="true" id="dateInterval">--}}
