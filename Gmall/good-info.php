<!DOCTYPE>
<html>
 <head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>产品-详细页</title>
 <!--公用-->
 <script src='js/pace/PACE.js'></script>
 <link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" type="text/css" href="css/base.css"/>
 <link rel="stylesheet" type="text/css" href="css/Gstyle.css"/>
 <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
  <![endif]-->
 <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
 <script type="text/javascript" src="js/jquery.easing.min.js"></script>
 <script type="text/javascript" src="js/lavaLamp.js"></script>
 <script type="text/javascript" src="js/common.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" >
 $(function(){
	 /*导航下滑线*/
       $("#Gnav,#SingleGnav").lavaLamp({
                fx: "backout", 
                speed: 700,
                click: function(event, menuItem) {
                    return false;
                }
				})
	/*导航切换*/
	  $("#SingleGnav li").click(function(){
		   var i = $(this).index();
		    $(this).siblings().removeClass("current");
		    $(this).addClass("current");
			$(".single-info").eq(i).removeClass("hidden").siblings(".single-info").addClass("hidden");
            });
   /*导航悬浮*/
   function SinglenavFixed(){
	var w = window,doc = document,$navbarwrap = $(".navbarwrap"),$SingleGnavId = $("#SingleGnavId"),$top = $navbarwrap.offset().top;
	$(w).scroll( function() { 
		if ($(doc).scrollTop()>$top) {
			$SingleGnavId.addClass("navbar-fixed-top");
			}
		else {
			$SingleGnavId.removeClass("navbar-fixed-top");
			}
	});
	}
	SinglenavFixed();
	$(window).resize(function(){
	   SinglenavFixed();
	})
   /*产品淡出效果*/
	function productshow(){
		  var a = $(".section");
		   a.each(function(){
		    var h = document.body.clientHeight,s = $(document).scrollTop(),$this = $(this),o = $this.offset().top;
			if(s>o-h){
			    $this.addClass("gg-animation-active");	
				}
			})	
		}
	productshow();
		$(window).scroll(function(){
					productshow();
		  })
		 
		$(window).resize(function(){
             productshow();
        })
})
    </script>
 </head>
 <body>
<!-- H头部-->
<?php include'common/header.php'?>
<!-- H头部结束--> 
<!-- C内容-->
<div class="single-hd-wrap">
   <div class="single-hd" id="SingleGnavId">
   <div class="container goodnav">
   <div class="row">
    <ul class="SingleGnav clearfix" id="SingleGnav">
       <li class="tab current"><a href="#">概述</a></li>
       <li class="tab"><a href="#">详细参数</a></li>
       <li class="tab"><a href="#">外观与工艺</a></li>
       <li class="tab"><a href="#">文化与传承</a></li>
       <li >
         <a href="#" class="Buynow">马上购买 <span class="f-st">></span></a>
         <!--<a href="#" class="Buynow none">暂时缺货 <span class="f-st">></span></a> --><!--暂时缺货时 -->
       </li>
     </ul>
    </div>
    </div>
  </div>
 </div>
<div class="single-info">
<div class="good-infoban"><img src="images/infoimg1.png" class="img-responsive"></div>
   <div class="container single mt40">
    <div class="row">
       <h2>概述</h2>
       <div class="h3 mt10 single-article"> 
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收藏性、
艺术性。包装灵感源于中国传统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家李正天先生亲
笔题写，朴拙写意，意蕴非凡。 </div>
     </div>
  </div>
  <div class="section"><img src="images/infoimg2.png" class="product product1 img-responsive"></div>
  <div class="section"><img src="images/infoimg3.png" class="product product2 img-responsive"></div>
  <div class="section"><img src="images/infoimg4.png" class="product product1 img-responsive"></div>
  <div class="section"><img src="images/infoimg5.png" class="product product2 img-responsive"></div>

 </div>
<div class="single-info hidden">
   <div class="container single mt40">
    <div class="row">
       <h2>详细参数</h2>
       <div class="h3 mt10 single-article"> 
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收藏性、
艺术性。包装灵感源于中国传统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家李正天先生亲
笔题写，朴拙写意，意蕴非凡。 </div>
     </div>
  </div>
  <div><img src="images/infoimg4.png" class="img-responsive"></div>
  <div><img src="images/infoimg5.png" class="img-responsive"></div>
 </div>
<div class="single-info hidden">
   <div class="container single mt40">
    <div class="row">
       <h2>外观与工艺</h2>
       <div class="h3 mt10 single-article"> 
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收藏性、
艺术性。包装灵感源于中国传统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家李正天先生亲
笔题写，朴拙写意，意蕴非凡。 </div>
     </div>
  </div>
  <div><img src="images/infoimg2.png" class="img-responsive"></div>
  <div><img src="images/infoimg3.png" class="img-responsive"></div>
  <div><img src="images/infoimg4.png" class="img-responsive"></div>
  <div><img src="images/infoimg5.png" class="img-responsive"></div>

 </div>
<div class="single-info hidden">
   <div class="container single mt40">
    <div class="row">
       <h2>文化与传承</h2>
       <div class="h3 mt10 single-article"> 
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收藏性、
艺术性。包装灵感源于中国传统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家李正天先生亲
笔题写，朴拙写意，意蕴非凡。 </div>
     </div>
  </div>
  <div><img src="images/infoimg2.png" class="img-responsive"></div>
  <div><img src="images/infoimg3.png" class="img-responsive"></div>

 </div>
<!-- C内容结束--> 
<!-- F底部-->
<?php include'common/footer.php'?>
<!-- F底部结束-->
</body>
</html>