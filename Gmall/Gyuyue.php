<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>国管预约页</title>
<!--公用-->
<script src='js/pace/PACE.js'></script>
<!--<script>paceOptions = { elements: true};</script> -->
<link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" type="text/css" href="css/Gstyle.css"/>
<!--<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 -->  <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
</head>
<body class="Gyuyue">
<!-- H头部-->
<?php include'common/header-simple.php'?>
<!-- H头部结束-->
<!-- C内容-->
<div class="container ptonav">
  <div class="row GyuyueCon">
   <div class="col-xs-12 col-md-5 HomeCon section">
    <h1 class="font font-lg">中国道开放预约</h1>
    <!--<img src="img/font-yuyue.png" class="font-img"> -->
    <p class="txt">预约专场于2014年1月21号 中午12：00 开抢限售5000款</p>
    <div><!--<a href="" class="Gbtn Gbtn-buynow">马上预约<span>></span></a><a href="" class="Gbtn">商品详情<span>></span></a> -->
     <a href="javascript:;" class="btn btn-default btn-icon-right" >
      <i class="h2">马上预约</i> <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
     <a href="javascript:;" class="btn btn-default btn-icon-right" >
      <i class="h2">商品详情</i> <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
    </div>
   </div>
   <div class="col-xs-12 col-md-7 Gyuyue-ban section" style="float:right"><img class="product" src="images/Gyuyue-ban.png" ></div>
  </div>
</div>
<!-- C内容结束-->
<!-- F底部-->
    <script type="text/javascript" >
    $(function(){
		function productshow(){
		  var a = $(".section");
		   a.each(function(){
		    var $this = $(this);			
			    $this.addClass("gg-animation-active");	
		  });
		  var w = $(window).width(),p = a.find(".product"),l = p.offset().left,p_w = w-l;
		  p.width(p_w+30);
		}
		function GyuyueProduct(){
		  var a = $(".section"),w = $(window).width(),p = a.find(".product"),l = p.offset().left,p_w = w-l;
		  p.width(p_w);
			}
		$(window).resize(function(){
             GyuyueProduct();
        })
		productshow();
		
		
		})
    </script>

<!-- F底部结束-->
</body>
</html>