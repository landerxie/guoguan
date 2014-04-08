<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>会员中心-订单中心（已付款订单）</title>
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
  <div class="center-logo"><a href=""><img src="img/logo.png" /></a></div>
  <div class="bgbox" style="background-image: url(images/center-bg.jpg);">
    <div class="bgbox-cover" style="background-image: url(images/center-bg-cover.jpg);"></div>
  </div>
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
        <a href="" >未付款订单</a>
        <span class="ml20 mr20 gray">|</span>
        <a href="" class="hover" >已付款订单</a>
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
     
  <!--未付款订单组-->
  <div class="panel">
    <div class="VIP-title gray"><b>未付款订单</b></div>
    <ul class="screenNav clearfix" id="myTab">
  <li>筛选：</li>                    
  <li class="active"><a href="#tabOne" data-toggle="tab">全部</a></li> 
  <li>|</li>                    
  <li><a href="#tabTwo" data-toggle="tab">近一周</a></li>
  <li>|</li>                    
  <li><a href="#tabThree" data-toggle="tab">近一月</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane fade in active" id="tabOne">
      <div class="panel-body">
        <div class="row p10">
         <div class="col-sm-6 h4">订单号：223456754323</div>
         <div class="col-sm-6 text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待收货</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待收货</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
          </tbody>
        </table>
      </div> 
        <div class="line-t pb20 pt20 text-right" >
        <div class="inline-black mr20">共：<span class="hover">4,000.00元</span></div>
        <button type="button" class="btn btn-default btn-xs">确认收货</button>
        <button type="submit" class="btn btn-default btn-xs mr10">订单详情</button>
        </div>
      </div><!--/.-->
      <div class="panel-body">
        <div class="row p10">
         <div class="col-sm-6 h4">订单号：223456754323</div>
         <div class="col-sm-6 text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待确认</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待确认</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待确认</td>
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
      <div class="Loadmore p10">加载更多</div>
  </div><!--/.tabOne-->
  <div class="tab-pane fade" id="tabTwo">
      <div class="panel-body">
        <div class="row p10">
         <div class="col-sm-6 h4">订单号：12345667778</div>
         <div class="col-sm-6 text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">已收货</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥12379.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">已收货</td>
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
        <div class="row p10">
         <div class="col-sm-6 h4">订单号：12345667778</div>
         <div class="col-sm-6 text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">已收货</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥78878.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">已收货</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥78878.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">已收货</td>
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
      <div class="Loadmore p10">加载更多</div>
  </div><!--/.tabTwo-->
  <div class="tab-pane fade" id="tabThree">
      <div class="panel-body">
        <div class="row p10">
         <div class="col-sm-6 h4">订单号：98765432</div>
         <div class="col-sm-6 text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">退货中</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥56576.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">退货中</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥4356.00</td>
            </tr>
          </tbody>
        </table>
      </div> 
        <div class="line-t pb20 pt20 text-right" >
        <div class="inline-black mr20">共：<span class="hover">5,000.00元</span></div>
        <button type="submit" class="btn btn-default btn-xs mr10">订单详情</button>
        </div>
      </div><!--/.-->
      <div class="panel-body">
        <div class="row p10">
         <div class="col-sm-6 h4">订单号：98765432</div>
         <div class="col-sm-6 text-right order-time">2014/01/13/17:23</div>
        </div>
        <div class="table-responsive">
        <table class="table" >
          <tbody>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">已收货</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥34567.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">已收货</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥3545645.00</td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">已收货</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  ¥3455.00</td>
            </tr>
          </tbody>
        </table>
      </div> 
        <div class="line-t pb20 pt20 text-right" >
        <div class="inline-black mr20">共：<span class="hover">4,000.00元</span></div>
        <button type="submit" class="btn btn-default btn-xs mr10">订单详情</button>
        </div>
      </div><!--/.-->
      <div class="Loadmore p10">加载更多</div>
  </div><!--/.tabThree-->
</div>
  </div>
  <!--/.panel组-->  

    </div>
  </div>
 </div>
 <!-- container --> 
<!-- C内容结束-->
 </div><!-- /.content-->
</div><!-- /.wrap-->

</body>
</html>