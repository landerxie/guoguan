<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>品牌故事</title>
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
       $("#Gnav").lavaLamp({
                fx: "backout", 
                speed: 700,
                click: function(event, menuItem) {
                    return false;
                }
            });
	 function $dismiddle(){/*居中*/
	 $(".dis-tab").each(function(){
		 var h = $(this).parent().height();
		 return $(this).height(h);
	 })
	 }
	 $dismiddle()
	 $(window).resize(function(){
		  $dismiddle();
		 })
	  function $Transform(){
	     var a = $(window).scrollTop(),obj = $(".wrap-story"),h = obj.height();
		 var y = a/3;
           obj.find(".story-con").css({
			'-webkit-Transform':"translateY("+-y+"px)",
			'-Moz-Transform':"translateY("+-y+"px)",
			'-ms-Transform':"translateY("+-y+"px)",
			'transform':"translateY("+-y+"px)"
			});
		  }
	 $Transform()
	 $(window).scroll(function(){
		 $Transform()
		 })
	 })
	 
 </script>
</head>
<body>
<!-- H头部-->
<?php include'common/header.php'?>
<!-- H头部结束--> 
<!-- C内容-->
<div class="wrap-story mt40">
<div class="container">
    <div class="text-center story-con"><img src="img/story-title.png"></div>
      <div class="row mt60">
      <div class="col-sm-6 story-con">
       <div  class="row">
        <div class="col-sm-6 ">
         <a href="" class=""><img src="images/storyimg.jpg" class="img-circle img-responsive"></a>
        </div>
        <div class="col-sm-6 dis-tab ">
        <div class="dis-cell-m story-article">
         <h1><a href="">中国道开放预约</a><span class="glyphicon glyphicon-upload"></span></h1>
         <article>
          重新发现中国文化，<br>
          国馆 · 中国道将于2014年2月14日，
          <p><a href="">开始预约。</a></p>
         </article>
         </div>
        </div>
       </div>
      </div><!--/.-->
      <div class="col-sm-3 mt80 col-sm-offset-3 story-con">
      <div class="row">
        <div class="col-sm-8 mt60">
         <a href="" class=""><img src="images/storyimg.jpg" class="img-circle img-responsive"></a>
        </div>
        </div>
        <div class="story-article mt30">
         <h1><a href="">风水·天地人和</a><span class="glyphicon glyphicon-upload"></span></h1>
         <article>
          重新发现中国文化，<br>
          国馆 · 中国道将于2014年2月14日，
          <p><a href="">开始预约。</a></p>
         </article>
       </div>
      </div><!--/.-->
      <div class="col-sm-4 mt80 col-sm-offset-2 story-con">
      <div class="row">
        <div class="col-sm-5">
         <a href="" class=""><img src="images/storyimg.jpg" class="img-circle img-responsive"></a>
        </div>
        <div class="col-sm-7 dis-tab ">
        <div class="dis-cell-m story-article">
         <h1><a href="">宫廷酒膳</a><span class="glyphicon glyphicon-upload"></span></h1>
         <article>
          重新发现中国文化，<br>
          国馆 · 中国道将于2014年2月1日
          <p><a href="">开始预约。</a></p>
         </article>
         </div>
        </div>
       </div>
      </div><!--/.-->
      <div class="col-sm-5 mt80 col-sm-offset-6 story-con">
      <div class="row mt60">
        <div class="col-sm-5">
         <a href="" class=""><img src="images/storyimg.jpg" class="img-circle img-responsive"></a>
        </div>
        <div class="col-sm-7 dis-tab ">
        <div class="dis-cell-m story-article">
         <h1><a href="">稻香</a><span class="glyphicon glyphicon-upload"></span></h1>
         <article>
          重新发现中国文化，<br>
          国馆 · 中国道将于2014年2月1日
          <p><a href="">开始预约。</a></p>
         </article>
         </div>
        </div>
       </div>
      </div><!--/.-->
      <div class="col-sm-3 col-sm-offset-1 mt80 story-con">
      <div class="row">
        <div class="col-sm-7">
         <a href="" class=""><img src="images/storyimg.jpg" class="img-circle img-responsive"></a>
        </div>
        </div>
        <div class="dis-cell-m story-article ">
         <h1 class="mt30"><a href="">失落的酒文化</a><span class="glyphicon glyphicon-upload"></span></h1>
         <article>
          重新发现中国文化，<br>
          国馆 · 中国道将于2014年2月1日
          <p><a href="">开始预约。</a></p>
         </article>
       </div>
      </div><!--/.-->
      <div class="col-sm-5 col-sm-offset-6 story-con">
      <div class="row ">
        <div class="col-sm-5">
         <a href="" class=""><img src="images/storyimg.jpg" class="img-circle img-responsive"></a>
        </div>
        <div class="col-sm-7 dis-tab ">
        <div class="dis-cell-m story-article">
         <h1><a href="">稻香</a><span class="glyphicon glyphicon-upload"></span></h1>
         <article>
          重新发现中国文化，<br>
          国馆 · 中国道将于2014年2月1日
          <p><a href="">开始预约。</a></p>
         </article>
         </div>
        </div>
       </div>
      </div><!--/.-->
    </div>
</div><!-- container --> 
</div>
<!-- C内容结束--> 
<!-- F底部-->
<?php include'common/footer.php'?>
<!-- F底部结束--> 
</body>
</html>