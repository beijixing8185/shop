	var sendState = 0;
	$(function(){
		$('[data-toggle="sceneClosed"]').on("click",function(){
			$("#scene").hide();
		});
		$("#scene-tag").on("click","li",function(){
			$(this).parent().parent().hide().siblings().show();
			$("#"+$(this).attr("data-id")).show().siblings().hide();
		});
		$('[data-id="cj-tab"]').on("mouseover","li",function(){
			$("#"+$(this).attr("data-id")).show().siblings().hide();
			$(this).addClass("tabHover").siblings().removeClass("tabHover");
		});
		$('[data-id="cj-tabFixed"]').on("mouseover","li",function(){
			$("#"+$(this).attr("data-id")).show().siblings().hide();
			$(this).addClass("tabHover").siblings().removeClass("tabHover");
		});
		$('[data-toggle="cjzt-title"]').on("mouseover",function(){
			$(this).children(".cjzt-top").show();
			$(this).children("a").addClass("Ahover");
		});
		$('[data-toggle="cjzt-title"]').on("mouseleave",function(){
			$(this).children(".cjzt-top").hide();
			$(this).children("a").removeClass("Ahover");
		});
		$('[data-toggle="cjztChangeTop"]').on("mouseover","li",function(){
			$("#"+$(this).attr("data-id")).show().siblings().hide();
			$(this).addClass("hoverLi").siblings().removeClass("hoverLi");
			$('[data-toggle="cjztChangeBottom"]').children().removeClass("hoverLi");
		});
		$('[data-toggle="cjztChangeBottom"]').on("mouseover","li",function(){
			$("#"+$(this).attr("data-id")).show().siblings().hide();
			$(this).addClass("hoverLi").siblings().removeClass("hoverLi");
			$('[data-toggle="cjztChangeTop"]').children().removeClass("hoverLi");
		});
		$(".appIcon").on("mouseover",function(){
	        $(".app-erm").show();
	    });
	    $(".appIcon").on("mouseleave",function(){
	        $(".app-erm").hide();
	    });
		$("#searchFile").keydown(function(event){
			  if (event.keyCode == "13") {
				  var targetType = $("#searchFile").attr("searchType");
				  searchWord(targetType);
	          };
		});
		
		$("#fixed-searchFile").keydown(function(event){
			  if (event.keyCode == "13") {
				  var targetType = $("#searchFile").attr("searchType");
				  searchWord(targetType);
	          };
		});
		
		$("#searchFile").keyup(function(){
	    	$("#fixed-searchFile")[0].value=$(this).val();
	    });
	    $("#fixed-searchFile").keyup(function(){
	    	$("#searchFile")[0].value=$(this).val();
	    });
		
		$("#publish-hover").on("mouseover",function(){
			$(".p-list").fadeIn();
			$(".publish-hover > b").removeClass("rotate");
			$(".publish-hover > b").addClass("scale");
		});
		$("#publish-hover").mouseleave(function(){
			$(".p-list").hide();
			$(".publish-hover > b").removeClass("scale");
			$(".publish-hover > b").addClass("rotate");
		});
	    $(".f_close").click(function () {
	        $("#_submit_success").css("display", "none");
	        $("#_submit_fail").css("display","none");
	    });
	    $(".tabContain").on("click","li",function(){
	  	  var hrefUrl = baseurl+ "/scene/"+$(this).attr("data-id")+".htm";
	  	 // window.location.href = hrefUrl;
	  	  window.open(hrefUrl,"_blank");
	    });
	});
	
	function searchWord(targetType){
		var searchFile = $('#searchFile').val();
		searchFile = searchFile.replace(/^\s+|\s+$/gm,'');
		if(searchFile == ""){
			searchFile = "SEO";
		}
		
		var url = "";
		if("undefined" == typeof(targetType) || "" == targetType){
			url = "/search.htm?wd=" + searchFile;
		}else{
			url = "/search.htm?wd=" + searchFile+"&filter="+targetType;
		}
		window.open(url,"_self");
	};

	function quickSearchWord(searchFile){
		$('#searchFile').val(searchFile);
		searchWord();
	};
	
	function headPublish(){
		var selectCats = "";
		$.each($("#pro-list .hover"),function(i,element){
			if("" != selectCats){
				selectCats = selectCats + "||";
			}
			selectCats = selectCats + $(this).text();
		});
		var telephone = $("#_headTelephone").val();
		var userRequest = $("#_headUserRequest").val();
		var reg =/^1\d{10}$/;
		if(!reg.test(telephone)){
			$("#telephone_error_tip").css("display","inline-block");
			return false;
		}else{
			$("#telephone_error_tip").css("display","none");
		}
		if (sendState==0) {
			$('#shade').modal('hide');
			sendState = 1;
			$.ajax({
				url:"/order/ajaxSubmit.htm",
				type:"post",
				data:{"productCatCode":selectCats,"userRequest":userRequest,"mobile":telephone},
				dataType:"json",
				success:function(result){
					if(result.errorCode == "0"){
						$("#_headUserRequest").val("");
						$("#_headTelephone").val("");
						$(".lx-people").text(telephone);
						$("#_submit_success").css("display","block");
					}else{
						$("#_submit_fail").css("display","block");
					}
				sendState = 0;
				},
				fail:function(e){
					$("#_submit_fail").css("display","block");
					sendState = 0;
				}
			});
		}
	}
	

	function toSpManageCommon(path){
		$.ajax({
		  url: "/index/checkstatus.json",
		  type : "post",
		  dataType:"json",
		  async:false,
		  success: function(data){
				if(data.spFlag==1){
					//服务商负责人
					if(data.spBeactive==1){
						//服务商激活,进入服务商后台
						window.open(path,"_self");
					}else{
						//服务商冻结,提示冻结
						$('#commonbeactive').modal('show');
					}
				}else if(data.spFlag==2){
					//服务商跟单员
					if(data.spBeactive==1){
						//服务商激活,判断跟单员状态
						if(data.saleBeactive==1){
							window.open(path,"_self");
						}else{
							//服务商冻结,提示冻结
							$('#commonbeactive').modal('show');
						}
					}else{
						//服务商冻结,提示冻结
						$('#commonbeactive').modal('show');
					}
				}else if(data.spFlag==3){
					//既是负责人也是跟单员
					if(data.spBeactive==1){
						//服务商激活,进入服务商后台
						window.open(path,"_self");
					}else{
						//服务商冻结,提示冻结
						$('#commonbeactive').modal('show');
					}
				}
		  }
		  ,fail:function(e){
			 alert("系统出小差了!");
		  }
		});
	}