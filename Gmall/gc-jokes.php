<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>国管社区-段子</title>
<!--公用-->
<script src='js/pace/PACE.js'></script>
<!--<script>paceOptions = { elements: true};</script> -->
<link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" type="text/css" href="css/gc.css"/>
<!--<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 -->  <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" >
	$(function(){
		 $("#weixinbnt").click(function(){
	  $("#bsWXBox").fadeToggle();
	 });
   $("#bsWXBox .bsClose").click(function(){
	  $("#bsWXBox").fadeOut();
	 });

		})
    </script>
</head>
<body>
<!-- H头部-->
<div class="gc-header">
  <?php include'common/header-simple.php'?>
</div>
<!-- H头部结束-->
<!-- C内容-->
<div class="Community" style="background-image:url(images/gc-bg1.png)">
<div class="Filter">
<div class="container">
  <div class="row gc-jokes ">
  <div class="dis-cell">
   <div class="col-xs-12 col-sm-12 col-md-6">
    <div class="gc-jokes-con">
   国馆酒业全称为广东国馆酒业有限公司[1]。国馆致力于中华5000年文化、尤其是酒文化的研究和探索，旨在联合中国酿酒大师与各界艺术家，在国内发起一场   "酒以载道"的酒文化运动——以白酒为载体，以艺术为视角，开辟了"中国收藏级文化白酒"的新领域。
   </div>
   </div>
   </div>
   <div class="Gcgtn-jokes">
    <a href="">随机浏览</a>
   </div>
</div>
</div>
</div>
</div><!-- /.Community-->
<div class="Community-footer">
<div class="container">
  <div class="row">
   <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="txt">在精神荒芜的年代，<br>我们依然怀有温暖的梦想。<br>

我们是国馆，<br>一个年轻激情、充满梦想的团队，<br>

我们致力于传承5000年中华文化，<br>

用人文的视角去重新发现传统文化的美好。<br>

我们的官网页面正在建设中，<br>

一段温暖人心的文化旅程，即将开启……
</div>
   </div>
     <div class="col-xs-12 col-sm-6 col-md-6">
      <p class="mt60">关注我们</p>
      <div id="Link">
      <a target="_blank" class="xl" href="http://weibo.com/guoguan5000">新浪</a>
      <a href="javascript:;" class="wx" id="weixinbnt">微信</a>
      <a target="_blank" class="db" href="http://site.douban.com/guoguan/">豆瓣</a>
      </div>
     </div>
  </div>
 </div>
<div id="bsWXBox">
      <div class="bsClose" style=" ">X</div>
         <div class="bsTop" ><span style="margin-left:15px;">微信关注</span></div>
         <div class="bsFrameDiv">
           <img src="img/weixin.jpg">
          </div>
         </div>
</div>
<!-- C内容结束-->
</body>
</html>