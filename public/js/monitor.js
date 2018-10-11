
var script=document.createElement("script");
script.setAttribute("type","text/javascript");
script.setAttribute("src","http://51biaoshi.com/js/ba.js?ver=1.0");
script.async = 1;
script.onload = script.onreadystatechange = function () {
  if ((!this.readyState) || (this.readyState == "loaded") || (this.readyState == "complete")) {
    try {
      _traker._init("www.51biaoshi.com", "1");
      if (typeof (convertclk) == "function") {
        convertclk(_traker);
      }
      if (typeof (_ca_convert) == "function") {
        _ca_convert(_traker);
      }
      _ba_initex();
    } catch (e) {}
    script.onload = script.onreadystatechange = null;
  }
}
document.getElementsByTagName("head")[0].appendChild(script);

function convertclk(_traker) {
    var caClass = document.getElementsByClassName("caClass");
	for(var a = 0 ;a<caClass.length;a++){
		var id = caClass[a].getAttribute("id");
        var traceFlag = caClass[a].getAttribute("traceflag");
        var domType = caClass[a].tagName;
        if (typeof(traceFlag) != "undefined" && typeof(domType) != "undefined") {
	        if (typeof(id) == "undefined") {
	        	id = "__ba_id_" + a;
	        	caClass[a].id = id;
	        }
            _traker._monitorEvent(domType.toUpperCase(), "id", id, "C", traceFlag);
        }
	}
    
    if (typeof(_convertAction)=="function"){
        _convertAction(_traker);
    }
}

var _ba_mmed = false, _ba_inited_ex = false;
function _ba_initex() {
  if (!_ba_inited_ex) {
	_ba_inited_ex = true;
    if (window.addEventListener) {
      document.addEventListener("mousemove", _ba_onmm, false);
      window.addEventListener("scroll", _ba_onms, false);
    } else if (window.attachEvent) {
      document.attachEvent("onmousemove", _ba_onmm);
      window.attachEvent("onscroll", _ba_onms);
    }
  }
}

function _ba_submit_mm(action) {
  if (window.removeEventListener) {
    document.removeEventListener("mousemove", _ba_onmm, false);
    window.removeEventListener("scroll", _ba_onms, false);
  } else if (window.detachEvent) {
    document.detachEvent("onmousemove", _ba_onmm);
    window.detachEvent("onscroll", _ba_onms);
  }
  if (!_ba_mmed) {
    _ba_mmed = true;
    var p = [];
	p.push("ca_dm=" + document.domain);
	p.push("ca_tenant=1");
	p.push("ca_ptype=N");
	p.push("ca_curl=" + escape(document.location));
	p.push("ca_preref=" + escape(filterCaPreref(document.referrer)));
	p.push("ca_action=0-0-PAGE:EVENT(" + (action == 0 ? "MOUSEMOVE" : "SCROLL") + ")");
	p.push("ca_cookie=" + escape(filterCaParams(document.cookie)));
	p.push("ca_sessionid=" + _getCookie("ca_sessionid"));
	p.push("ca_uid=" + _getCookie("ca_uid"));
	_ba_log(_ba_api + '?' + p.join("&"));
  }
}
function _ba_onmm() {
	_ba_submit_mm(0);
}
function _ba_onms() {
	_ba_submit_mm(1);
}

function _ba_log(url) {
    var d = new Image(), g = "_ba_log_img_" + Math.floor(2147483648 * Math.random()).toString(36);
    window[g] = d;
    d.onload = d.onerror = d.onabort = function() {
        d.onload = d.onerror = d.onabort = null;
        d = window[g] = null;
    };
    d.src = url;
};

//百度统计
var _hmt = _hmt || [];
(function() {
	var hm = document.createElement("script");
	hm.src = "//hm.baidu.com/hm.js?415b134ffdb6ae5eb5f13a82577a3e56";
	var s = document.getElementsByTagName("script")[0]; 
	s.parentNode.insertBefore(hm, s);
})();

//谷歌统计
(function(i, s, o, g, r, a, m) {
	i['GoogleAnalyticsObject'] = r;
	i[r] = i[r] || function() {
		(i[r].q = i[r].q || []).push(arguments)
	}, i[r].l = 1 * new Date();
	a = s.createElement(o), m = s.getElementsByTagName(o)[0];
	a.async = 1;
	a.src = g;
	m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-105326831-1', 'auto');
ga('send', 'pageview');