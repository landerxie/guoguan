<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>国管社区-图文</title>
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
<div class="Community">
<div class="container">
  <div class="row gc-picture ">
   <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 ">
   <p class="gc-picture-title">
   在一回首间，才忽然发现，原来，我一生的种种努力，不过只为了周遭的人对我满意而已。为了博得他人的称许与微笑，我战战兢兢地将自己套入所有的模式所有的桎梏。走到途中才忽然发现，我只剩下一副模糊的面目，和一条不能回头的路。——席慕容
   </p>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
      <div class="Article">
        <img src="images/gc1.jpg" class="img-responsive">
        <img src="images/gc2.jpg" class="img-responsive">
        </div>
   <div class="Gcgtn-pic text-center">
    <a href=""><span class="glyphicon glyphicon-random"></span>&nbsp;&nbsp;随机浏览</a>
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