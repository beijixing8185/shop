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
        if($(this).scrollTop()<=30){
            $(".gg-header-hidden").css("display","none");
            $(".gg-header").removeClass("fixed_div");
        }else{
            $(".gg-header-hidden").css({"display":"block"});
            $(".gg-header").addClass("fixed_div");
        }
    });
});

$(function(){

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