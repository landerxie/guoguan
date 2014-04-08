<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>会员中心</title>
<!--公用-->
<script src='js/pace/PACE.js'></script>
<link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" type="text/css" href="css/center.css"/>
<!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" >
 $(function(){
   $(".VIP-title").click(function(){
	   $(this).find("i").toggleClass("open");
	   $(this).parent(".panel").siblings().find(".VIP-title i").removeClass("open");
	   })
	 function bgcover(){
		 var a = 450,b = $(window).scrollTop(),c = b/a;
		 if(b<a){
			 $(".bgbox-cover").css("opacity",c)
			 }
		 }
		  bgcover();
         $(window).scroll(function(){
          bgcover();
       })
	 })
</script>
</head>
<body>
<div class="wrap">
  <div class="bgbox" style="background-image: url(images/center-bg.jpg);">
    <div class="bgbox-cover" style="background-image: url(images/center-bg-cover.jpg);"></div>
  </div>
   <div class="container" style="position:relative"><div class="center-logo"><a href=""><img src="img/logo-heng.png" /></a></div></div>
  <div class="content VIPbox">
    <!-- C内容-->
 <div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
     <div class="VIP-top">
      <div class="VIP-head text-center">
       <span><img src="images/head.png" class="img-responsive"/></span>
      </div>
      <h1 class=" mt20 text-center">TYXQ-H</h1>
      <div class="row status-bar">
       <div class="col-md-8 col-md-offset-2">
        <div class="pt40 clearfix">
        <span class="pull-left mr10">账户安全：</span>
        <div  class="pull-left">
         <span class="mr20"><span class=" hover glyphicon glyphicon-remove-circle"></span> <a href="">邮箱验证</a></span>
         <span class="mr20"><span class=" hover glyphicon glyphicon-ok-circle"></span> <a href="">手机验证</a></span>
        </div>
        </div>
        <div class="pt20 clearfix">
        <span class="pull-left mr10">订单中心：</span>
        <div  class="pull-left">
        <a href="">未付款订单</a>
        <span class="ml20 mr20 gray">|</span>
        <a href="" >已付款订单</a>
        <span class="ml20 mr20 gray">|</span>
        <a href="" >已关闭订单</a>
        </div>
        </div>
        <div class="pt20 clearfix">
        <span class="pull-left mr10">个人信息：</span>
        <div  class="pull-left">
        <a href="">收货地址</a>
        <span class="ml20 mr20 gray">|</span>
        <a href="">密码修改</a>
        <span class="ml20 mr20 gray">|</span>
        <a href="">我的收藏</a>
        </div>
        </div>
       </div> 
      </div>
     </div><!--/.VIP-top-->
     
     <!--折叠-->
 <div class="panel-group" id="accordion">
  <!--未付款订单组-->
  <div class="panel">
    <div class="VIP-title " data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne"><b>未付款订单</b><i class="open"></i></div>
    <div id="collapseOne" class="panel-collapse collapse in mt20">
      <div class="panel-body">
        <div class="order-row p10 bg-color-e6e6e6">
         <div class="col-sm-4">订单号：223456754323</div>
         <div class="text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
          </tbody>
        </table>
      </div> 
        <div class="line-t pb20 pt20 text-right" >
        <div class="inline-black mr20">共：<span class="hover">4,000.00元</span></div>
        <button type="button" class="btn btn-default btn-xs">去支付</button>
        <button type="submit" class="btn btn-default btn-xs mr10">订单详情</button>
        </div>
      </div><!--/.-->
      <div class="panel-body">
        <div class="order-row p10 bg-color-e6e6e6">
         <div class="col-sm-4">订单号：223456754323</div>
         <div class="text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
          </tbody>
        </table>
      </div> 
        <div class="line-t pb20 pt20 text-right" >
        <div class="inline-black mr20">共：<span class="hover">4,000.00元</span></div>
        <button type="button" class="btn btn-default btn-xs">去支付</button>
        <button type="submit" class="btn btn-default btn-xs mr10">订单详情</button>
        </div>
      </div><!--/.-->
    </div>
  </div>
  <!--/.组-->
  <!--最近已付款的订单组-->
  <div class="panel">
    <div class="VIP-title " data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo"><b>最近已付款的订单</b><i></i></div>
    <div id="collapseTwo" class="panel-collapse collapse mt20">
      <div class="panel-body">
        <div class="order-row p10 bg-color-e6e6e6">
         <div class="col-sm-4">订单号：223456754323</div>
         <div class="text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
          </tbody>
        </table>
      </div> 
        <div class="line-t pb20 pt20 text-right" >
        <div class="inline-black mr20">共：<span class="hover">4,000.00元</span></div>
        <button type="submit" class="btn btn-default btn-xs mr10">订单详情</button>
        </div>
      </div><!--/.-->
      <div class="panel-body">
        <div class="order-row p10 bg-color-e6e6e6">
         <div class="col-sm-4">订单号：223456754323</div>
         <div class="text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
          </tbody>
        </table>
      </div> 
        <div class="line-t pb20 pt20 text-right" >
        <div class="inline-black mr20">共：<span class="hover">4,000.00元</span></div>
        <button type="button" class="btn btn-default btn-xs">去支付</button>
        <button type="submit" class="btn btn-default btn-xs mr10">订单详情</button>
        </div>
      </div><!--/.-->
    </div>
  </div>
  <!--/.组-->
  <!--我的购物车组-->
  <div class="panel">
    <div class="VIP-title " data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree"><b>我的购物车</b><i></i></div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="row mt20">
       <div class="col-xs-6 "><p class="h2">我的购物车</p></div>
       <div class="col-xs-6 text-right"><button type="button" class="btn btn-default btn-xs" >去结算</button></div>
      </div>
      <div class=" row mt20">
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">删除</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">删除</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">删除</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">删除</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">删除</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">删除</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">删除</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
      </div><!--/.-->
    </div>
  </div>
  <!--/.组-->
  <!--我的收藏组-->
  <div class="panel">
    <div class="VIP-title " data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour"><b>我的收藏</b><i></i></div>
    <div id="collapseFour" class="panel-collapse collapse ">
      <div class="collect row mt20">
       <div class="col-xs-6 "><p class="h2">我的收藏</p></div>
       <div class="col-xs-6 text-right"><a href=""  class="btn btn-default btn-xs" >更多</a></div>
      </div>
      <div class=" row mt20">
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">查看</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">查看</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">查看</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">查看</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">查看</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       <div class=" col-xs-6 col-sm-3 ">
        <div class="view">
		 <img src="images/img.jpg" >
		 <div class="mask">
            <div>
			 <h4>国馆中国道</h4>
			 <a href="#" class=" btn btn-opacity btn-xs">查看</a>
            </div>
        </div>
	   </div> 
       </div><!--/.-->
       </div><!--/.-->
    </div>
  </div>
  <!--/.组-->
  
</div>   <!--/.折叠-->

    </div>
  </div>
 </div>
 <!-- container --> 
<!-- C内容结束-->
 </div><!-- /.content-->
</div><!-- /.wrap-->
</body>
</html>