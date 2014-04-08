<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>品牌故事-加入国馆</title>
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
      <li><a href="#">国馆新闻</a></li>
      <li class="current"><a href="#">加入国馆</a></li>
      <li><a href="#">联系我们</a></li>
    </ul>
</div>    
</div>

  <div class="container single">
<div class="row line-b mt40">
   <h1 class="single-title pull-left pb40">加入国馆</h1>
</div>    
  <!--内容-->
  <div class="row single-article pb20">
   <div class="line-b pt40 pb40">
     <h3><span class="glyphicon glyphicon-envelope mr10"></span>简历投递邮箱：HR@guoguan.com</h3> 
     <p class="hover ml20 mt20"><span class="ml10">&nbsp;注：应聘时请携带本人近期作品</span></p>
   </div><!--/.-->
   <div class="line-b pt40 pb40">
     <h3><b>产品经理</b> </h3> 
     <p class="mt30">负责产品：<br>
     电子商务后台管理系统</p>
     <p class="mt30">工作职责：<br>
     负责电子商务后台系统功能和模块设计。确保电子商务系统业务后台稳定运行。
     </p>
     <p class="mt30">岗位要求：<br>
     1、本科学历以上<br>
2、2年以上电子商务后台管理系统相关产品工作经验<br>
3、对电子商务的物流、库存订单或售后维修管理或财务对接等业务流程有深刻的理解和系统开发建设经验；<br>
4、能够清楚认识不同阶段对自建平台系统的挑战；<br>
5、能够并乐于承担工作压力；
     </p>
   </div><!--/.-->
   <div class="line-b pt40 pb40">
     <h3><b>Android开发工程师</b> </h3> 
     <p class="mt30">任职条件：<br>

1、在计算机技术领域拥有扎实的技术功底，尤其在数据结构、算法和代码、软件设计方面功力深厚；<br>
2、有一定的手机/嵌入式应用程序开发经验；<br>
3、1年以上Android客户端或者手机/嵌入式开发经验者优先；<br>
4、熟悉网络通讯协议，有GPRS/3G环境下的网络应用程序开发经验者优先；     </p>
   </div><!--/.-->
   <div class="line-b pt40 pb40">
     <h3><b>新技术工程师</b> </h3> 
     <p class="mt30">任职条件：<br>
1、在计算机技术领域拥有扎实的技术功底，尤其在数据结构、算法和代码、软件设计方面功力深厚；<br>
2、热衷于创新，对相关领域具有浓厚的兴趣（如机器学习、计算机图形学、计算机视觉、多媒体、语音、自然语言处理、人机交互等）；<br>
3、有相关领域研究经验的硕士或博士研究生优先；<br>
4、有相关领域开发经验者优先；<br>
5、有Android客户端或者手机/嵌入式开发经验者优先。
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