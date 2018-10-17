<div class="container-fluid header-md">
    <div class="container">
        <div class="pull-left logoImgTitle" style="margin-right: 70px;">
            <h1>
                <p class="pull-left logo-img"><a href="/"></a></p>
            </h1>
        </div>
        <ul class="pull-left nav-list nav-list-new">
            <li class="hoverA" style="width: 60px;"><a href="/" class='active'>首页</a></li>
            <li class="hotImg"><a href="/news/list">聚划算 <!-- <img src="/picture/hot.gif" alt=""> --></a></li>
            <li><a rel="nofollow" href="/about/index/2">效果保障</a></li>
            <li><a href="/news/index">营销攻略</a></li>
        </ul>
        <div id="publish-hover" class="publish-hover pull-right">
            <b></b>
            <a class="publish-header pull-left color-theme caClass" traceflag="header_pop_发布需求" id="headerDemand" onclick="javascript:tofb('','');">发布需求</a>
            <div class="p-list">
                <p class="p-title">定制您的需求，坐等服务商上门</p>
                <dl class="p-con">
                    <dt class="pull-left"><img src="/picture/p-icon01.png" alt=""/></dt>
                    <dd class="pull-left">
                        <p>一键发布 </p>
                        不需花时间选服务商
                    </dd>
                </dl>
                <dl class="p-con">
                    <dt class="pull-left"><img src="/picture/p-icon02.png" alt=""/></dt>
                    <dd class="pull-left">
                        <p>快速响应 </p>
                        需求发布后，15分钟快速响应
                    </dd>
                </dl>
                <dl class="p-con">
                    <dt class="pull-left"><img src="/picture/p-icon03.png" alt=""/></dt>
                    <dd class="pull-left">
                        <p> 智能推荐</p>
                        大数据给你最需要的数据
                    </dd>
                </dl>
                <dl class="p-con">
                    <dt class="pull-left"><img src="/picture/p-icon04.png" alt=""/></dt>
                    <dd class="pull-left">
                        <p>完全免费</p>
                        不向雇主收取任何形式费用
                    </dd>
                </dl>
                <div class="p-public">
                    <a onclick="javascript:tofb('','');" class="caClass" traceflag="floatbar_pop_发布需求" id="headerFlowDemand">发布需求</a>
                </div>
                <div class="watch-xqgl">
                    <a rel="nofollow" href="/aboutus.htm">查看需求攻略</a>
                </div>
            </div>
        </div>
        <div class="pull-right res-input">
            <input type="text" id="searchFile" name="searchFile" placeholder=""/>
            <div class="glyphicon glyphicon-search" id="searchBtn"></div>
            <input type="hidden" id="searchStr" value='[{"searchName":"微信代运营","url":"http://www.51biaoshi.com/product/376.htm?_pb=search"},{"searchName":"朋友圈广告","url":"http://www.51biaoshi.com/product/428.htm?_pb=search"},{"searchName":"百度百科","url":"http://www.51biaoshi.com/product/427.htm?_pb=search"},{"searchName":"开发建站","url":"http://www.51biaoshi.com/product/370.htm?_pb=search"},{"searchName":"小程序定制","url":"http://www.51biaoshi.com/product/438.htm?_pb=search"},{"searchName":"整合营销","url":"http://www.51biaoshi.com/product/432.htm?_pb=search"}]'>
            <ul class="find-example" id="findExample">
                <li><a href="/search/index/媒体发稿" target="_blank">媒体发稿</a></li>
            </ul>
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
