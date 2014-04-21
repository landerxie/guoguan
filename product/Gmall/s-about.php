<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>品牌故事-公司介绍</title>
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
      <li class="current"><a href="#">公司介绍</a></li>
      <li><a href="#">管理团队</a></li>
      <li><a href="#">国馆产品</a></li>
      <li><a href="#">国馆文化</a></li>
      <li><a href="#">国馆新闻</a></li>
      <li><a href="#">加入国馆</a></li>
      <li><a href="#">联系我们</a></li>
    </ul>
</div>    
</div>

  <div class="container single">
<div class="row line-b mt40">
   <h1 class="single-title pb40">公司介绍</h1>
</div>    
  </div>
  <div class="single-info pb20">
  <!--文章内容-->
  <div class="container single">
  <div class="pl10 pr10">
    <h2>「国馆·中国道」系列——中国古代哲学的经典表达</h2>
    <div class="mt30 single-article">
在器形设计上，从中国传统元素中汲取灵感，融入书法艺术与现代美学思想，兼具文化性、审美性、收藏性、艺术性。包装灵感源于中国传
统书画卷轴，采用景泰蓝陶器的经典纹饰，瓶身字体由著名艺术家李正天先生亲笔题写，朴拙写意，意蕴非凡。    </div>
  </div>
  </div>
  <div class="pb30"><img src="images/pimg1.jpg" class="img-responsive"></div>
  <div class="container single">
  <div class="pl10 pr10">
    <h2>「国馆·福禄八骏」——清代皇室御用国宝葫芦器形，绘画大师郎世宁传世之作</h2>
    <div class="mt30 single-article">

取形于清廷御用"斗彩勾莲纹'寿'字葫芦瓶"。原件现存故宫博物馆，作为镇馆之宝供世人瞻仰，该宝物价值连城，属于有价无市。目前
收藏市场相关仿制品的价格在三万元左右。中国收藏家协会陶瓷委员会主任荆治中曾言葫芦瓶最有品位、种类最多、档次最高是在乾隆时期。
他认为乾隆以后，不仅是葫芦瓶，而且整个瓷器烧造都逊色很多。而「福禄八骏」所取形的"斗彩勾莲纹'寿'字葫芦瓶"正是乾隆时期葫
芦瓶的扛鼎之作，葫芦瓶不仅蕴意无穷、福寿绵延，工艺更是造化惊人、巧夺天工，令后世诸辈画师、瓷匠所怯步。<br>

郎世宁（1688—1766）为意大利人，清康熙五十四年（1715）到中国，历任康、雍、乾三朝，供奉清廷绘画达50多年。由于郎世宁作品采
用西方明暗画法和写实风格，开中国风气之先，所以深受康熙、雍正、乾隆三代皇帝垂青，故郎世宁创作作品几乎都藏于深宫，因而弥足珍
贵。郎世宁所画之马，更是世所闻名。「福禄八骏」的八骏图即取自他的画作。郎世宁以生花妙笔将八骏之珍重现康乾盛世，八骏各享"八
德"：孝、悌、忠、信、礼、义、廉、耻。八骏齐聚、合而为一，寓意流年大吉、通达四方。</div>
  </div>
  </div>
  <div class="pb30"><img src="images/pimg2.jpg" class="img-responsive"></div>
  <div class="container single">
  <div class="pl10 pr10">
    <h2>「国馆·福禄八骏」——清代皇室御用国宝葫芦器形，绘画大师郎世宁传世之作</h2>
    <div class="mt30 single-article">

取形于清廷御用"斗彩勾莲纹'寿'字葫芦瓶"。原件现存故宫博物馆，作为镇馆之宝供世人瞻仰，该宝物价值连城，属于有价无市。目前
收藏市场相关仿制品的价格在三万元左右。中国收藏家协会陶瓷委员会主任荆治中曾言葫芦瓶最有品位、种类最多、档次最高是在乾隆时期。
他认为乾隆以后，不仅是葫芦瓶，而且整个瓷器烧造都逊色很多。而「福禄八骏」所取形的"斗彩勾莲纹'寿'字葫芦瓶"正是乾隆时期葫
芦瓶的扛鼎之作，葫芦瓶不仅蕴意无穷、福寿绵延，工艺更是造化惊人、巧夺天工，令后世诸辈画师、瓷匠所怯步。<br>

郎世宁（1688—1766）为意大利人，清康熙五十四年（1715）到中国，历任康、雍、乾三朝，供奉清廷绘画达50多年。由于郎世宁作品采
用西方明暗画法和写实风格，开中国风气之先，所以深受康熙、雍正、乾隆三代皇帝垂青，故郎世宁创作作品几乎都藏于深宫，因而弥足珍
贵。郎世宁所画之马，更是世所闻名。「福禄八骏」的八骏图即取自他的画作。郎世宁以生花妙笔将八骏之珍重现康乾盛世，八骏各享"八
德"：孝、悌、忠、信、礼、义、廉、耻。八骏齐聚、合而为一，寓意流年大吉、通达四方。</div>
  </div>
  </div>
  <!--/.文章内容-->
  </div><!-- single-info --> 
<!-- C内容结束--> 
<!-- F底部-->
<?php include'common/footer.php'?>
<!-- F底部结束--> 
</body>
</html>