<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>鸿星尔克（商品详细页）</title>
 <!--公用-->
<!-- <script src='js/pace/PACE.js'></script>
 <link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
 --> 
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" type="text/css" href="css/base.css"/>
 <link rel="stylesheet" type="text/css" href="css/Gstyle.css"/>
 <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
  <![endif]-->
 <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
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
	var G_H = $("#mainNav").find("li"),G_List = $("#Swit").find(".SwitList");
	   G_List.first().show();
		G_H.click(function (){
			var i=$(this).index();
			$(this).addClass("selected").siblings().removeClass("selected");
			G_List.eq(i).show().siblings().hide();
			
		})

})
    </script>
     
</head>
<body class="bdbg">
<link rel="stylesheet" type="text/css" href="css/goods.css"/>
<!--放大镜-->
<script type="text/javascript" src="js/cloud-zoom.1.0.2.min.js"></script>
<!--放大镜 end-->
<?php include'common/header.php'?>
<div class="single-hd-wrap">
   <div class="single-hd" id="SingleGnavId">
   <div class="container goodnav">
   <div class="row">
    <ul class="SingleGnav clearfix" id="SingleGnav" style="text-align:center;">
       <li class="tab current"><a href="#">全部</a></li>
       <li class="tab"><a href="#">器具</a></li>
       <li class="tab"><a href="#">礼品</a></li>
       <li class="tab"><a href="#">书画</a></li>
     </ul>
    </div>
    </div>
  </div>
 </div>

<div class="wrap1200" style="padding-bottom:10px;">
<div class="Location mt40 mb20">当前位置：<a href="#">首页</a><span>></span><a href="#"><em>产品详细</em></a></div>
<div class="Detail">
<div class="Detail-l">
<div class="Bigimg lazy2">
            <a href="imgProd/triumph_big1.jpg" class = 'cloud-zoom' id='zoom1' rel="adjustX:10, adjustY:-4" >
             <img src="imgProd/triumph_small1.jpg" width="452" height="452"/>
             </a>
          </div>
<div id="imgswit">
<div class="JQ-slide">
  <div class="JQ-slide-nav"><a class="prev hover" href="javascript:void(0);"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="next hover" href="javascript:void(0);"><span class="glyphicon glyphicon-chevron-right"></span></a></div>
		<div class="wrap lazy1">
			<ul class="JQ-slide-content imgList" id="thumblist">
                            <li><a class='cloud-zoom-gallery' href='imgProd/triumph_big1.jpg' rel="useZoom: 'zoom1', smallImage: 'imgProd/triumph_small1.jpg' ">
							<img src='imgProd/triumph_thumb1.jpg'>
							</a></li>
                            <li><a class='cloud-zoom-gallery' href='imgProd/triumph_big2.jpg' rel="useZoom: 'zoom1', smallImage: 'imgProd/triumph_small2.jpg' ">
							<img src='imgProd/triumph_thumb2.jpg'>
							</a></li>
                            <li><a class='cloud-zoom-gallery' href='imgProd/triumph_big3.jpg' rel="useZoom: 'zoom1', smallImage: 'imgProd/triumph_small3.jpg' ">
							<img src='imgProd/triumph_thumb3.jpg'>
							</a></li>
                            <li><a class='cloud-zoom-gallery' href='imgProd/triumph_big4.jpg' rel="useZoom: 'zoom1', smallImage: 'imgProd/triumph_small4.jpg' ">
							<img src='imgProd/triumph_thumb4.jpg'>
							</a></li>
                            <li><a class='cloud-zoom-gallery' href='imgProd/triumph_big5.jpg' rel="useZoom: 'zoom1', smallImage: 'imgProd/triumph_small5.jpg' ">
							<img src='imgProd/triumph_thumb5.jpg'>
							</a></li>
                            <li><a class='cloud-zoom-gallery' href='imgProd/triumph_big2.jpg' rel="useZoom: 'zoom1', smallImage: 'imgProd/triumph_small2.jpg' ">
							<img src='imgProd/triumph_thumb2.jpg'>
							</a></li>
					 </ul>
	         </div>
	</div>
    <script type="text/javascript">$(function(){
	
	
	var listcount = $('#thumblist li').size(),thumblist = $('#thumblist');
	thumblist.width(listcount*80);
	var cli = 1;
	$('#imgswit .next').click(function() {
   	 	if (cli < listcount-4) {
        $('#thumblist').animate({left:'-=80px'},"fast");
        cli++;
    	}
	});
	$('#imgswit .prev').click(function() {
    	if (cli > 1) {
        	cli--;
        	$('#thumblist').animate({left:"+=80px"},"fast");
    }
	});
		$('#thumblist li a').click(function(){
			$(this).addClass('on');
			$(this).parent('li').siblings('li').find('a').removeClass('on');
		})
	
});</script>
   </div>
</div><!--Detail-l end-->
<div class="Detail-r">
<div class="detail-hd"><h3>国馆精装酒具（套装）</h3><h4>国馆精装酒具</h4></div>
<ul class="yh-meta line-t pt20 mt30">
<li class="yh-PromoPrice"><span>商品价格：</span><p><em>￥</em><strong>998.00</strong></p><i>促销价</i></li>
<li class="yh-rates whald mt20"><span>商品评价：</span><p>
<!--星星-->
<i class="glyphicon glyphicon-star "></i>
<i class="glyphicon glyphicon-star "></i>
<i class="glyphicon glyphicon-star "></i>
<!--星星-->
<a href="#" class="hover">已有55086人评价 >></a></p></li>
</ul>
<div class="line-t pt40 mt30">
 <button type="submit" name="" class="btn btn-default btn-icon-right" >加入购物车<span class="glyphicon glyphicon-chevron-right"></span></button>
 <button type="button" name="" class="btn btn-default btn-icon-right" >收藏<span class="glyphicon glyphicon-chevron-right"></span></button>
</div>
<!-- JiaThis Button BEGIN -->
<div id="ckepop" class="line-t pt20 mt40">
	<span class="jiathis_txt">分享到：</span>
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_renren"></a>
	<a href="http://www.jiathis.com/share?uid=1533109" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
</div>
<script type="text/javascript">var jiathis_config = {data_track_clickback:true};</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1533109" charset="utf-8"></script>
 <!--JiaThis Button END -->
</div><!--Detail-r end-->
</div><!--detail end-->
<div class="good-info-main ">
<div id="mainNav-wrap ">
<div class="mainNav mt40" id="mainNav">
<ul>
<li class="selected"><a href="javascript:viod(0);">商品详情</a></li>
<li ><a href="javascript:viod(0);" >文化典藏</a></li>
<li><a href="javascript:viod(0);">商品评价</a></li>
</ul>
</div><!--mainNav end-->
</div>
<div class="gf-con">
<div class="gf-con-wrap" >
<div id="Swit">
<div class="SwitList" style="display:block;">
<!--<div class="attributes">
<h3>产品参数：</h3>
<ul>
<li>颜色分类：黑/纯铂色/黑色 狼灰/黑/上升红/金属银 深紫蓝/电子绿/体育红/白 黑/黑/新绿/白 白/黑/亮柠檬/现代蓝 狼灰/白/黑 纯铂色/黑/运动绿 煤黑/橙色/白 黑/黑/金色 橙色 黑/纯铂色/黑 宇宙红/黑/金属银/纯铂色 煤黑/黑/荷兰橙色/白</li>
<li>款号：487982</li>
<li>品牌：Nike/耐克</li>
<li>上市时间：2012年春季</li>
<li>吊牌价：1469</li>
<li>性别：男子</li><li>鞋面材料：网面</li><li>外底材料：天然橡胶</li><li>适合路面：跑道</li><li>运动鞋科技：气垫</li><li>运动鞋功能：减震</li>
<li>鞋尺码：39 40 40.5 41 42 42.5 43 44 44.5</li>
<li>价格区间：1001-1500元</li>
<li>闭合方式：系带</li>
<li>流行元素：图腾</li>
<li>系列：跑步AIR MAX</li>
</ul>
</div> 参数-->
<div>
<a href="#"><img src="images/infoimg3.png" class="img-responsive" /></a>
<a href="#"><img src="images/infoimg4.png" class="img-responsive" /></a>
<a href="#"><img src="images/infoimg2.png" class="img-responsive" /></a>
</div>
</div>
<div class="SwitList">
<a href="#"><img src="images/infoimg3.png" class="img-responsive" /></a>
<a href="#"><img src="images/infoimg4.png" class="img-responsive" /></a>
</div>
<div class="SwitList" style="height:5px;"></div>
</div>
<div class="G-comment">
                <div class="G-rate">
                <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                <td class="col-master">
                <div class="rate-content">不错</div>
                <div class="rate-date">今天</div></td>
                <td class="col-meta">
                <div class="rate-sku">
                <p title="颜色分类:白/黑/电黄/宇宙红"><span>颜色分类：</span>白/黑/电黄/宇宙红</p>
                <p title="鞋尺码:44"><span>鞋尺码：</span>44</p></div>
                <div class="rate-user-profile">
                <p title=""></p>
                </div>
                </td>
                <td class="col-author">
                <div class="rate-user-info"><a target="_blank" href="">ltyzy6014</a></div>
                <div class="rate-user-grade">
                <a target="_blank" href="#"><img title="151 - 250个买家信用积分" src="img/logo_user.png"></a></div></td>
                </tr>
                <tr>
                <td class="col-master">
                <div class="rate-content"><span>商品：</span>半个月就2处开胶 可能是真的么 鞋不透气捂脚 鞋面上胶多可还是粘不住 质量很差 600块钱买个教训 下次别图省钱了</div>
                <div class="rate-content"><span>服务：</span>返回去还收运费 要不就给退10元钱自己沾上 呵呵你们这鞋真好卖 真好糊弄</div>
                <div class="rate-reply">解释：产品有任何问题都可以第一时间和我们联系处理 产品质量问题，无限期负责为您处理，直到您满意为止。也希望您不要默默的就确认评价了，您勉强收下不满意的产品是我们最大的不足，希望您可以给我们服务的机会。奥迅期待您的下次光临。祝您生活愉快。</div>
                <div class="rate-date">05.24</div>
                </td>
                <td class="col-meta">
                <div class="rate-sku"><p title="颜色分类:黑/纯铂色/黑"><span>颜色分类：</span>黑/纯铂色/黑</p><p title="鞋尺码:44"><span>鞋尺码：</span>44</p></div>
                <div class="rate-user-profile"><p title="常穿尺码:44码">44码</p></div>
                </td>
                <td class="col-author">
                <div class="rate-user-info"><a target="_blank" href="">畅饮新九台</a></div>
                <div class="rate-user-grade">
                <a target="_blank" href=""><img title="151 - 250个买家信用积分" src="img/logo_user.png"></a></div>
                <div class="rate-gift">获认真评价奖<s></s></div>
                </td>
                </tr>
                <tr>
                <td class="col-master">
                <div class="rate-content"><span>商品：</span>半个月就2处开胶 可能是真的么 鞋不透气捂脚 鞋面上胶多可还是粘不住 质量很差 600块钱买个教训 下次别图省钱了</div>
                <div class="rate-content"><span>服务：</span>返回去还收运费 要不就给退10元钱自己沾上 呵呵你们这鞋真好卖 真好糊弄</div>
                <div class="rate-reply">解释：产品有任何问题都可以第一时间和我们联系处理 产品质量问题，无限期负责为您处理，直到您满意为止。也希望您不要默默的就确认评价了，您勉强收下不满意的产品是我们最大的不足，希望您可以给我们服务的机会。奥迅期待您的下次光临。祝您生活愉快。</div>
                <div class="rate-date">05.24</div>
                </td>
                <td class="col-meta">
                <div class="rate-sku"><p title="颜色分类:黑/纯铂色/黑"><span>颜色分类：</span>黑/纯铂色/黑</p><p title="鞋尺码:44"><span>鞋尺码：</span>44</p></div>
                <div class="rate-user-profile"><p title="常穿尺码:44码">44码</p></div>
                </td>
                <td class="col-author">
                <div class="rate-user-info"><a target="_blank" href="">畅饮新九台</a></div>
                <div class="rate-user-grade">
                <a target="_blank" href=""><img title="151 - 250个买家信用积分" src="img/logo_user.png"></a></div>
                <div class="rate-gift">获认真评价奖<s></s></div>
                </td>
                </tr>
               <tr>
                <td class="col-master">
                <div class="rate-content"><span>商品：</span>半个月就2处开胶 可能是真的么 鞋不透气捂脚 鞋面上胶多可还是粘不住 质量很差 600块钱买个教训 下次别图省钱了</div>
                <div class="rate-content"><span>服务：</span>返回去还收运费 要不就给退10元钱自己沾上 呵呵你们这鞋真好卖 真好糊弄</div>
                <div class="rate-date">2012-5-24</div>
                <div class="rate-append">
                <div class="rate-content"><span class="rate-daydiff">11天后追加：</span>老公很喜欢  穿着舒服  这个价钱很值</div></div>
                </td>
                <td class="col-meta">
                <div class="rate-sku"><p title="颜色分类:黑/纯铂色/黑"><span>颜色分类：</span>黑/纯铂色/黑</p><p title="鞋尺码:44"><span>鞋尺码：</span>44</p></div>
                <div class="rate-user-profile"><p title="常穿尺码:44码">44码</p></div>
                </td>
                <td class="col-author">
                <div class="rate-user-info"><a target="_blank" href="">畅饮新九台</a></div>
                <div class="rate-user-grade">
                <a target="_blank" href=""><img title="151 - 250个买家信用积分" src="img/logo_user.png"></a></div>
                </td>
                </tr>
                </table>
<!--分页 begin-->
<div class="mt20">
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
  </div>
 </div>
<!--分页 end-->
                </div>
</div><!--G-comment end-->
</div>
<div class="gf-Item">
<h3>你可能喜欢</h3>
<ul class="lazy1">
<li>
<div><a href=""><img src="images/img.jpg" width="170" height="170" /></a></div>
<p>促销价：<em>￥998.00</em></p>
<span><a href="#">鸿星尔克鸿星尔克鸿星尔克鸿星尔克</a></span>
</li>
<li>
<div><a href=""><img src="images/img.jpg" width="170" height="170" /></a></div>
<p>促销价：<em>￥998.00</em></p>
<span><a href="#">鸿星尔克鸿星尔克鸿星尔克鸿星尔克</a></span>
</li>
<li>
<div><a href=""><img src="images/img.jpg" width="170" height="170" /></a></div>
<p>促销价：<em>￥998.00</em></p>
<span><a href="#">鸿星尔克鸿星尔克鸿星尔克鸿星尔克</a></span>
</li>
<li>
<div><a href=""><img src="images/img.jpg" width="170" height="170" /></a></div>
<p>促销价：<em>￥998.00</em></p>
<span><a href="#">鸿星尔克鸿星尔克鸿星尔克鸿星尔克</a></span>
</li>
<li>
<div><a href=""><img src="images/img.jpg" width="170" height="170" /></a></div>
<p>促销价：<em>￥998.00</em></p>
<span><a href="#">鸿星尔克鸿星尔克鸿星尔克鸿星尔克</a></span>
</li>
<li>
<div><a href=""><img src="images/img.jpg" width="170" height="170" /></a></div>
<p>促销价：<em>￥998.00</em></p>
<span><a href="#">鸿星尔克鸿星尔克鸿星尔克鸿星尔克</a></span>
</li>
<li>
<div><a href=""><img src="images/img.jpg" width="170" height="170" /></a></div>
<p>促销价：<em>￥998.00</em></p>
<span><a href="#">鸿星尔克鸿星尔克鸿星尔克鸿星尔克</a></span>
</li>
</ul>
</div>
</div><!--gf-con end-->
</div><!--good-info-main end-->
</div><!--box end-->
<?php include'common/footer.php'?>
</body>
</html>