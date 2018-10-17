@extends('welcome')

@section('title','案例详情')
@section('keywords','案例详情')
@section('description','案例详情')

@section('css')

    <link rel="stylesheet" href="{{asset('css/fbwindowsuccess.css')}}">
    <link rel="stylesheet" href="{{asset('css/fbwindowb.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-header.css')}}">
	<link rel="stylesheet" href="{{asset('css/common-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/casedetails.css')}}">
	<script type="text/javascript" src="{{asset('js/common-header.js')}}"></script>
	<script src="{{asset('js/popup.js')}}"></script>
{{--	<script src="{{asset('js/iconfont.js')}}"></script>--}}
{{--	<script src="{{asset('js/monitor.js')}}"></script>--}}
    <script src="{{asset('js/respond.min.js')}}"></script>
    <script src="{{asset('js/spchoose.js')}}"></script>
    <script src="{{asset('js/jquery.slides.min.js')}}"></script>
    <script src="{{asset('js/commonlogin.js')}}"></script>
    <script src="{{asset('js/commonfbb.js.js')}}"></script>
    <style>
        body{background: #f5f5f5;min-width: 1170px;}
    </style>
@endsection


@section('content')


	@include('./common/demand')
	@include('./common/nav')
@include('./common/search')
@include('./common/right')
@include('./common/poper')
<!-- 面包屑 -->


    <div class="bread container">
        <ul class="bread-list">
            <li><a href="/">首页</a></li>
            <li>></li>
            <!-- <li><a href="/spcaselist/cc-pg.htm">案例列表</a></li>
            <li>></li> -->
            <li><a href="#">{{$getdetail['title']}}</a></li>
        </ul>
    </div>
    <div class="container case-banner">
        <div class="case-banner_left">
            <h1>{{$getdetail['title']}}</h1>
            <div class="titleInfo">
                <span>客户：<strong style="display:inline-block;max-width: 224px;overflow: hidden;white-space:nowrap;text-overflow:ellipsis;vertical-align: bottom;">{{$getdetail['customer']}}</strong></span>
                <span>价格：<strong>￥{{$getdetail['money']}}</strong></span>
                <span>服务周期：<strong>{{$getdetail['day']}} </strong></span>
            </div>
        </div>

    </div>
    <div class="case-session container">
        <div class="pull-left case-con">
            <div class="jianjie"><div style="word-break: break-all;">简介：{{$getdetail['description']}}</div></div>
            <img alt='{{$getdetail['title']}}' src="{{$getdetail['picture']}}"/>
            <div>
                {{$getdetail['content']}}
            </div>
        </div>
        <div class="pull-left case-mes">

            <div class="other-ser affix-top" id="myScrollspy" style="position: relative;">
                <p class="other-ser-t">推荐宝贝</p>
                <dl>
                    <dt class="custom">
                        <a href="/product/428.htm" target="_blank">
                            <img src="http://www.51biaoshi.com/product/loadImage.htm?imagepath=prod/pc/c533ea4a-263f-4ce2-bedc-3907d96b1b24_cubead.jpg" alt="微信朋友圈广告／广告投放">
                        </a>
                    </dt>
                    <dd>
                        <p><a href="/product/428.htm" target="_blank">微信朋友圈广告／广告投放</a></p>
                        <span>5000元起</span>
                    </dd>
                </dl>
                <dl>
                    <dt class="custom">
                        <a href="/product/430.htm" target="_blank">
                            <img src="http://www.51biaoshi.com/product/loadImage.htm?imagepath=prod/pc/c533ea4a-263f-4ce2-bedc-3907d96b1b24_cubead.jpg" alt="广点通广告／广告投放">
                        </a>
                    </dt>
                    <dd>
                        <p><a href="/product/430.htm" target="_blank">广点通广告／广告投放</a></p>
                        <span>5000元起</span>
                    </dd>
                </dl>


            </div>
        </div>

    </div>
    <div class="more-case container">
        <p><b></b>宝贝更多案例</p>
        <div>
            @foreach($getCustomerList as $val)
            <dl class="pull-left" onclick="window.open('/customer/detail/{{$val->id}}')">
                <dt>
                    <img src="{{$val['picture']}}" >
                </dt>
                <dd>{{$val['title']}}</dd>
            </dl>
            @endforeach
        </div>

    </div>

@endsection

