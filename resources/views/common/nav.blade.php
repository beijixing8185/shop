<div class="container-fluid header-bor">
    <div class="header-nav container">
        <div class="aside pull-left">
            <p id="all-classify" class="aside-title"><b><img src="/picture/icon01.png"/></b>全部服务分类</p>
            <!--leftmenuarea start-->
            @if(!empty(Cache('getColumn')))
                <div  id="leftmenuarea"  style="display:none">
                    <!--nav-left start-->
                    <div class="nav-left" >
                        <!--主类目 start-->
                        <ul class="nav-list">
                            @foreach(Cache('getColumn') as $val)
                                <li class="left-menu" data-id="{{$val['id']}}">
                                    <div class="banner-nav-list-title">
                                        <p class="ban-nav-logo00"></p>{{$val['name']}}
                                        <b class="ban-nav-pointer"><img src="/picture/pb-pointer.png" /></b>
                                    </div>
                                    <ul class="banner-baob">
                                        @if(!empty($val['hot']))
                                            @foreach($val['hot'] as $item)
                                                <li class="" ><a style="color:#999;font-size:12px" href='/goods/goodsDetail/{{$item["id"]}}' target="_blank">{{$item["spu_name"]}}</a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                        <!--主类目 end-->

                        <!--产品 start-->
                        <div class="details-list " style="display:none">
                            @foreach(Cache('getColumn') as $val)
                                <div id="nav-0{{$val['id']}}" style=" display:none" class="banner-list-inner">
                                    @if(!empty($val['child']))
                                        @foreach($val['child'] as $item)
                                            <div class="pull-left banner-list">
                                                <p class="banner-list-title">{{$item['name']}}</p>
                                                <ul class="pull-left pro-list">
                                                    @if(!empty($item['goods']))
                                                        @foreach($item['goods'] as $goods)
                                                            <li class="hotProd">
                                                                <p>
                                                                    <a href="/goods/goodsDetail/{{$goods["id"]}}" target="_blank">{{$goods["spu_name"]}}</a>
                                                                    @if($goods['is_commend'] ==1)
                                                                    <b><img src="/picture/new.gif" alt=""/></b>
                                                                        @endif
                                                                </p>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <!--产品 end-->
                    </div>
                    <!--nav-left end-->
                </div>
        @endif
        <!--leftmenuarea end-->
        </div>

        <div class="aside-right pull-left">
            <ul class="pull-left navList">
                <li><a rel="nofollow" href="/">首页</a></li>
                <li><a rel="nofollow" href="/news/list" >聚划算</a></li>
                <li><a rel="nofollow" href="/about/index/2" >效果保障</a></li>
                <li><a href="/news/index" >营销攻略</a></li>
            </ul>
        </div>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function(){
        $(".huaguo").hover(
            function(){
                $(".xiala").css("display","block");
                $(".ci-right").css({
                    transform:"rotate(90deg)"
                });
            },function(){
                $(".xiala").css("display","none");
                $(".ci-right").css({
                    transform:"rotate(-90deg)"
                });
            });
        $(".xiala a").hover( function(){
            $(this).css("color","black");
        },function(){
            $(this).css("color","#696969");
        });

        $(".second").hover(
            function(){
                $(".daohang_xiala").css("display","block");
            },function(){
                $(".daohang_xiala").css("display","none");
            });
        $(document).scroll(function(){


            var agent = navigator.userAgent;
            if (/.*Firefox.*/.test(agent)) {
                document.addEventListener("DOMMouseScroll", function(e) {
                    e = e || window.event;
                    var detail = e.detail;
                    if (detail > 0) {
                        console.log(detail);
                        scrollFn()
                    } else {
                        scrollFn()
                    }
                });
            } else {
                document.onmousewheel = function(e) {
                    e = e || window.event;
                    var wheelDelta = e.wheelDelta;
                    if (wheelDelta > 0) {
                        scrollFn()
                    } else {
                        scrollFn()
                    }
                }
            }


            function scrollFn(){
                if($(this).scrollTop()<=30){
                    $(".gg-header-hidden").css("display","none");
                    $(".gg-header").removeClass("fixed_div");
                }else{
                    $(".gg-header-hidden").css({"display":"block"});
                    $(".gg-header").addClass("fixed_div");
                }
            }
        });
    });


</script>
<script>
    $(function(){
        $(".nav-list .left-menu").on("mouseover",function(){
            $(this).addClass("hover");
            var currentId = $(this).attr("data-id");
            $("#nav-0"+currentId).show();
            $("#nav-0"+currentId).siblings().hide();
            $(this).siblings().removeClass("hover");
            $(".details-list").show();

        });
        $( "#leftmenuarea .nav-left" ).mouseleave( function(){
            $(".details-list").hide();
            $("#leftmenuarea").hide();
            $(".nav-list .left-menu").removeClass("hover");
        });
        $("#all-classify").on("mouseover",function(){
            $("#leftmenuarea").show();
        });
        $( ".aside" ).mouseleave( function(){
            $("#leftmenuarea").hide();
            $(".details-list").hide();
            $(".nav-list .left-menu").removeClass("hover");
        });
        $("#pro-list").on("click","li",function(){
            $(this).toggleClass("hover");
        });
        $(".find-input").on("mouseover",function(){
            $(this).children(".find-list").removeClass("closed");
            $(this).css({"background":"#fff"});
            $(this).children("b").css({"border-top":"none","border-bottom":"5px solid #e5e5e5"});
        });
        $(".find-input").on("mouseout",function(){
            $(this).children(".find-list").addClass("closed");
            $(this).css({"background":"#f9f9f9"});
            $(this).children("b").css({"border-top":"5px solid #e5e5e5","border-bottom":"none"});
        });
        $(".find-list").on("click","li",function(){
            $("#searchType").html($(this).html());
            $("#searchType").attr("searchType",$(this).attr("searchType"));
        });
        $(".find-list").on("click","li",function(){
            $("#searchType").html($(this).html());
            $("#searchType").attr("searchType",$(this).attr("searchType"));
            $(this).parent().addClass("closed");
        });
        $(".userCenter").on("mouseover",function(){
            $(this).children("ul").removeClass("closed");
        });
        $(".userCenter").on("mouseleave",function(){
            $(this).children("ul").addClass("closed");
        })
    })
</script>