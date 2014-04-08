$(function() {/*单选项*/
	function $radio(obj){
			obj.click(function(){
				$(this).find("input").attr("checked",true);
				$(this).siblings().find("input").attr("checked",false);
				})
		}
	 		   $radio($(".radio"));
	 		   $radio($(".radio-inline"));
			})
$(function(){/*导航悬浮*/
   function navFixed(){
	var w = window,doc = document,$navbarwrap = $(".navbarwrap"),$navbar = $(".navbar-guoguan"),$top = $navbarwrap.offset().top,$logolg = $(".Glogo-lg");
	
	$navbarwrap.height($navbar.height());
	$(doc).scroll( function() { 
		if ($(doc).scrollTop()>$top) {
			$navbar.addClass("navbar-fixed-top");
			$logolg.css("display","inline-block");
			$(".current").trigger("mouseover");/*滑动对齐*/
			}
		else{
			$navbar.removeClass("navbar-fixed-top");
			$logolg.hide();
			$(".current").trigger("mouseover");/*滑动对齐*/
			}
	});
	}
	navFixed();
	$(window).resize(function(){
	  navFixed();
	  $(".current").trigger("mouseover");/*滑动对齐*/
	})
	})

$(function(){/*返回顶部*/
  function Rightbar(){
	var w = $(window),doc = $(document), h = document.body.clientHeight,Rightbar = $(".Rightbar"),GotoTop = Rightbar.find(".GotoTop"),GotoBottom = Rightbar.find(".GotoBottom"); 
	if($.browser.msie){h = w.height()}/*解决当前使用jquery-1.8.2IE 定义窗口高度不兼容*/
	var doc_h = doc.height()-h; 
	w.scroll(function(){
	 doc_h = doc.height()-h; 
	if(doc.scrollTop()>500){
		Rightbar.fadeIn("slow","linear");
		}else{
		Rightbar.fadeOut("slow","linear");
			}
	 if(doc.scrollTop()>doc_h-1){
		GotoBottom.fadeOut("slow","linear");
		}else{
		GotoBottom.fadeIn("slow","linear");
			}
	})
	GotoTop.click(function(){
		$('html,body').animate({scrollTop:'0px'},"slow", "easeout");
		})
	GotoBottom.click(function(){
		$('html,body').animate({scrollTop:doc_h + 'px'},"slow", "easeout");
		})

 }
  Rightbar();

 })
$(function(){/*微信二维码*/
	function GGweixin(){
		var obj = $("#GGweixin"),objbox = $("#GGweixinBox") ;
		obj.click(function(){
			 objbox.fadeToggle("slow","linear");
			 })
		 $(window).click(function(e){
			 if($(e.target).is("#GGweixin")){   
			      return false;  
			 }else {objbox.fadeOut("slow","linear");
			 }
		})
    }
	GGweixin();
	})
