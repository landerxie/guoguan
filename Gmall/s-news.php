<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>品牌故事-国馆新闻</title>
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
       $("#SingleGnav").lavaLamp({
                fx: "backout", 
                speed: 700,
                click: function(event, menuItem) {
                    return false;
                }
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
	});
 </script>
</head>
<body style="background: url(img/bg.jpg) fixed; ">
<!-- H头部-->
<?php include'common/header.php'?>
<!-- H头部结束--> 
<!-- C内容-->
<div class="single-hd-wrap">
<div class="single-hd" id="SingleGnavId">
    <ul class="SingleGnav clearfix" id="SingleGnav">                        
      <li><a href="#">公司介绍</a></li>
      <li><a href="#">管理团队</a></li>
      <li><a href="#">国馆产品</a></li>
      <li><a href="#">国馆文化</a></li>
      <li class="current"><a href="#">国馆新闻</a></li>
      <li><a href="#">加入国馆</a></li>
      <li><a href="#">联系我们</a></li>
    </ul>
</div>    
</div>

  <div class="container single">
<div class="row line-b mt40">
  <div class="col-sm-6">
   <h1 class="single-title pull-left pb40">国馆新闻</h1>
   </div>
  <div class="col-sm-6">
   <div class="Gpagination pull-right text-right">
  <ul>
  <li class="pbtn prev prev2"><a href="#" class="disabled"><b></b><b class="b2"></b></a></li>
  <li class="pbtn prev prev1"><a href="#" class="disabled"><b></b></a></li>
  <li class="num"><a href="#" class="on">1</a></li>
  <li class="num"><a href="#">2</a></li>
  <li class="num"><a href="#">3</a></li>
  <li class="point"><span></span><span></span><span></span></li>
  <li class="num"><a href="#">10</a></li>
  <li class="pbtn next next1"><a href="#"><b></b></a></li>
  <li class="pbtn next next2"><a href="#"><b class="b2"></b><b></b></a></li>
  </ul>
  </div><!--分页-->
  </div>
</div>    
  <!--文章内容-->
  <div class="single-article pb20">
   <div class="row line-b mt40">
    <div class="col-xs-3">
     <a href=""><img src="images/storyimg.jpg" class="img-responsive"></a>
     </div>
    <div class="col-xs-9">
     <h3 class="mt10"><b>「国馆·中国道」系列——中国古代哲学的经典表达</b></h3>
     <div class="mt40">
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收
藏性、艺术性。包装灵感源于中国传统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家
李正天先生亲笔题写，朴拙写意，意蕴非凡。<a href="" class="hover">【详细】</a></div>
    </div>
    <div class="col-xs-12 text-right">
     <span class="mr20">2014年1月21日</span>
     <span class="mr20">我要分享 <i class="h6">▼</i></span>
     </div>
    </div>
   <div class="row line-b mt40">
    <div class="col-xs-3">
     <a href=""><img src="images/storyimg.jpg" class="img-responsive"></a>
     </div>
    <div class="col-xs-9">
     <h3 class="mt10"><b>「国馆·中国道」系列——中国古代哲学的经典表达</b></h3>
     <div class="mt40">
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收
藏性、艺术性。包装灵感源于中国传统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家
李正天先生亲笔题写，朴拙写意，意蕴非凡。<a href="" class="hover">【详细】</a></div>
    </div>
    <div class="col-xs-12 text-right">
     <span class="mr20">2014年1月21日</span>
     <span class="mr20">我要分享 <i class="h6">▼</i></span>
     </div>
    </div>
   <div class="row line-b mt40">
    <div class="col-xs-3">
     <a href=""><img src="images/storyimg.jpg" class="img-responsive"></a>
     </div>
    <div class="col-xs-9">
     <h3 class="mt10"><b>「国馆·中国道」系列——中国古代哲学的经典表达</b></h3>
     <div class="mt40">
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收
藏性、艺术性。包装灵感源于中国传统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家
李正天先生亲笔题写，朴拙写意，意蕴非凡。<a href="" class="hover">【详细】</a></div>
    </div>
    <div class="col-xs-12 text-right">
     <span class="mr20">2014年1月21日</span>
     <span class="mr20">我要分享 <i class="h6">▼</i></span>
     </div>
    </div>
   <div class="row line-b mt40">
    <div class="col-xs-3">
     <a href=""><img src="images/storyimg.jpg" class="img-responsive"></a>
     </div>
    <div class="col-xs-9">
     <h3 class="mt10"><b>「国馆·中国道」系列——中国古代哲学的经典表达</b></h3>
     <div class="mt40">
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收
藏性、艺术性。包装灵感源于中国传统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家
李正天先生亲笔题写，朴拙写意，意蕴非凡。<a href="" class="hover">【详细】</a></div>
    </div>
    <div class="col-xs-12 text-right">
     <span class="mr20">2014年1月21日</span>
     <span class="mr20">我要分享 <i class="h6">▼</i></span>
     </div>
    </div>
   <div class="row line-b mt40">
    <div class="col-xs-3">
     <a href=""><img src="images/storyimg.jpg" class="img-responsive"></a>
     </div>
    <div class="col-xs-9">
     <h3 class="mt10"><b>「国馆·中国道」系列——中国古代哲学的经典表达</b></h3>
     <div class="mt40">
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收
藏性、艺术性。包装灵感源于中国传统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家
李正天先生亲笔题写，朴拙写意，意蕴非凡。<a href="" class="hover">【详细】</a></div>
    </div>
    <div class="col-xs-12 text-right">
     <span class="mr20">2014年1月21日</span>
     <span class="mr20">我要分享 <i class="h6">▼</i></span>
     </div>
    </div>
   </div>
  <!--/.文章内容-->
  <div class="Gpagination text-right pb40">
  <ul>
  <li class="pbtn prev prev2"><a href="#" class="disabled"><b></b><b class="b2"></b></a></li>
  <li class="pbtn prev prev1"><a href="#" class="disabled"><b></b></a></li>
  <li class="num"><a href="#" class="on">1</a></li>
  <li class="num"><a href="#">2</a></li>
  <li class="num"><a href="#">3</a></li>
  <li class="point"><span></span><span></span><span></span></li>
  <li class="num"><a href="#">10</a></li>
  <li class="pbtn next next1"><a href="#"><b></b></a></li>
  <li class="pbtn next next2"><a href="#"><b class="b2"></b><b></b></a></li>
  </ul>
  </div><!--分页-->
   </div>  
<!-- C内容结束--> 
<!-- F底部-->
<?php include'common/footer.php'?>
<!-- F底部结束--> 
</body>
</html>