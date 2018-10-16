@extends('welcome')

@section('title',"$about->title")
@section('description',"$about->description")
@section('keyword',"$about->keywords")

@section('css')
	<link rel="stylesheet" href="{{asset('css/about.css')}}">
	<link rel="stylesheet" href="{{asset('css/aboutfwbz.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
	<link rel="stylesheet" href="{{asset('css/publish.css')}}">
	<script src="{{asset('js/about.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.jcarousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jcarousel.connected-carousels.js')}}"></script>
	<script src="{{asset('js/popup.js')}}"></script>
	<script src="{{asset('js/iconfont.js')}}"></script>
	<script src="{{asset('js/common-right.js')}}"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=eXG9E4aojaGMBP1cU0Y8lX6I7qxHfejV"></script>
@endsection
@section('content')
@include('./common/demand')
@include('./common/nav')
@include('./common/search')
@include('./common/right')
<div>
        <ul class="nav-tabs container tab-list" role="tablist" id="mytab">
			@if(!empty(Cache('about_list')))
			@foreach(Cache('about_list') as $val)
				@if($val['id'] == $id)
            <li class="active"><a class="caClass"  href="/about/index/{{$val['id']}}" role="tab" data-toggle="tab" id="procedure_tab">{{$val['category']}}</a></li>
				@else
            <li><a class="caClass"  href="/about/index/{{$val['id']}}" role="tab" data-toggle="tab" id="procedure_tab">{{$val['category']}}</a></li>
				@endif
			@endforeach
				@endif
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="lineUs">
                <div class="line-banner" style="background: url('{{$about->picture}}') no-repeat center center;">
                    <div class="container">
                    		<!--<img src="/picture/banne-writer-min.png" />-->
                        <div class="lineUs-con">
                            <p class="lineUs-title">
								{{$about->category}}
                            </p>
                            <div style="text-align: left;">
								{{$about->content}}<br/>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="hzdt-fuilt">
						<div class="container line-us-bottom">
							<div><div class="title-warp"><p class="title-inner"><b>联系我们</b></p></div></div>
                        			<ul class="hzdt">
                                        <div style="width:1170px;height:450px;border:#ccc solid 1px;font-size:12px" id="map"></div>
		                            </ul>
							<div style="margin-top:20px;"></div>
                        </div>
				</div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){
        map = new BMap.Map("map");
        map.centerAndZoom(new BMap.Point(116.549701,39.90194),16);
    }
    function setMapEvent(){
        map.enableScrollWheelZoom();
        map.enableKeyboard();
        map.enableDragging();
        map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
        target.addEventListener("click",function(){
            target.openInfoWindow(window);
        });
    }
    function addMapOverlay(){
        var markers = [
            {content:"好歆网络有限公司",title:"好歆网络有限公司",imageOffset: {width:0,height:3},position:{lat:39.900916,lng:116.550492}}
        ];
        for(var index = 0; index < markers.length; index++ ){
            var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
            var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
            })});
            var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
            var opts = {
                width: 200,
                title: markers[index].title,
                enableMessage: false
            };
            var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
            marker.setLabel(label);
            addClickHandler(marker,infoWindow);
            map.addOverlay(marker);
        };
    }
    //向地图添加控件
    function addMapControl(){
        var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
        map.addControl(scaleControl);
        var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(navControl);
        var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
        map.addControl(overviewControl);
    }
    var map;
    initMap();
</script>
@endsection
