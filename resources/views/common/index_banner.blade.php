<div id="showtap07" class="container-fluid">
    <div id="carousel-banner" class="carousel slide" data-ride="carousel">
        <div class="container banner-indicator">
            <ol class="carousel-indicators">
                <li id="bannerNum1" class="caClass" traceflag="content_tab_banner切换1" data-target="#carousel-banner" data-slide-to="0" class="active" ></li>
                <li id="bannerNum2" class="caClass" traceflag="content_tab_banner切换2" data-target="#carousel-banner" data-slide-to="1" ></li>
                <li id="bannerNum3" class="caClass" traceflag="content_tab_banner切换3" data-target="#carousel-banner" data-slide-to="2" ></li>
                <li id="bannerNum4" class="caClass" traceflag="content_tab_banner切换4" data-target="#carousel-banner" data-slide-to="3" ></li>
            </ol>
        </div>
        <div class="carousel-inner" role="listbox">
            @foreach($banner as $val)
                <div class="item  " onclick="window.open('{{$val->open_url}}')">
                    <div class="itembg" style="background:url('{{$val->picture}}') no-repeat center center;"></div>
                </div>
            @endforeach
        </div>
        <a class="left banner-ji carousel-control" href="#carousel-banner" role="button" data-slide="prev">
            <span class="banner-l-span"><img src="/picture/banner-l01.png" /></span>
        </a>
        <a class="right banner-ji carousel-control" href="#carousel-banner" role="button" data-slide="next">
            <span class="banner-l-span"><img src="/picture/banner-r01.png" /></span>
        </a>
    </div>
</div>