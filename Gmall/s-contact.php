<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>品牌故事-联系我们</title>
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
 $(function(){/*导航下滑线*/
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
      <li ><a href="#">国馆新闻</a></li>
      <li><a href="#">加入国馆</a></li>
      <li class="current"><a href="#">联系我们</a></li>
    </ul>
</div>    
</div>

  <div class="container single">
<div class="row line-b mt40">
   <h1 class="single-title pull-left pb40">联系我们</h1>
</div>    
  <!--内容-->
  <div class="row single-article pb20">
   <div class="line-b pt40 pb40">
   <iframe width="1000"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://l.map.qq.com/3314805110"></iframe>  
   <p class="mt20">地址: 广州市天河区燕岭路120号金燕大厦502<br>
邮编: 510000<br>
传真: 400-600-7776-2</p>
   </div><!--/.-->
   <div class="line-b pt40 pb40">
     <h3><b>客服服务</b> </h3> 
     <p class="mt30">
电话: 400-600-7776<br>
频道：kefu.guoguan.com
  </p>
   </div><!--/.-->
   <div class="line-b pt40 pb40">
     <h3><b>调酒师预约服务</b> </h3> 
     <p class="mt30">
电话: 400-600-7776<br>
联系人：李先生<br>
邮箱：jacky@guoguan.com
  </p>
   </div><!--/.-->
   <div class="line-b pt40 pb40">
     <h3><b>市场媒体合作</b> </h3> 
     <p class="mt30">
电话: 400-600-7776<br>
联系人：李先生<br>
邮箱：jacky@guoguan.com
  </p>
   </div><!--/.-->
   <div class="line-b pt40 pb40">
     <h3><b>投诉建议</b> </h3> 
     <p class="mt30">
电话: 400-600-7776<br>
联系人：李先生<br>
邮箱：jacky@guoguan.com
  </p>
   </div><!--/.-->
   </div>
  <!--/.内容-->
   </div>  
<!-- C内容结束--> 
<!-- F底部-->
<?php include'common/footer.php'?>
<!-- F底部结束--> 
</body>
</html>