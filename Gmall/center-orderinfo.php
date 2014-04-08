<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>会员中心-订单详情</title>
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
      <h1 class=" mt20 text-center">千颂伊</h1>
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
     
  <!--订单详情组-->
  <div class="panel">
    <div class="VIP-title"><b>订单详情</b></div>
      <div class="panel-body mt20">
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
              <td width="22%" valign="middle"> 单价：  <strong class="color-404040">¥12379.00</strong></td>
            </tr>
            <tr align="center" >
              <td width="15%" valign="middle"><a href=""><img src="images/img.jpg" width="60" height="60" class="img-circle"></a></td>
              <td width="23%" align="left" valign="middle"><a href="">国馆 · 中国道</a></td>
              <td width="10%" valign="middle">x1</td>
              <td width="15%" valign="middle">等待付款</td>
              <td width="15%" valign="middle">在线付款</td>
              <td width="22%" valign="middle"> 单价：  <strong class="color-404040">¥12379.00</strong></td>
            </tr>
          </tbody>
        </table>
      </div> 
        <div class="row line-t pb40">
        <div class=" col-xs-10 col-xs-offset-1 pt40 ">
          <div class="step-group Goto4"><!-- 到达的步骤控制 Goto-->
          <div class="step stepinfo1">
            <div class="pointwrap">
             <div class="point">1</div>
            </div>
            <div class="linewrap">
              <div class="line"></div>
            </div>
            <div class="step-txt"><p>下单</p>2014-01-13<br>17:23:03</div>
           </div>
          <div class="step stepinfo2">
            <div class="pointwrap">
             <div class="point">2</div>
            </div>
            <div class="linewrap">
              <div class="line"></div>
            </div>
            <div class="step-txt"><p>付款</p></div>
           </div>
          <div class="step stepinfo3">
            <div class="pointwrap">
             <div class="point">3</div>
            </div>
            <div class="linewrap">
              <div class="line"></div>
            </div>
            <div class="step-txt"><p>配货</p></div>
           </div>
          <div class="step stepinfo4">
            <div class="pointwrap">
             <div class="point">4</div>
            </div>
            <div class="linewrap">
              <div class="line"></div>
            </div>
            <div class="step-txt"><p>出货</p></div>
           </div>
          <div class="step stepinfo5">
            <div class="pointwrap">
             <div class="point">5</div>
            </div>
            <div class="step-txt"><p>交易成功</p></div>
           </div>
        </div><!--/.step-->
        </div>
        </div>
        <div class=" line-t pb20 pt20 mt80 text-right" >
         <div class="inline-black mr20">共：<span class="hover"><strong>4,000.00元</strong></span></div>
         <button type="button" class="btn btn-default btn-xs">立即支付</button>
         <button type="submit" class="btn btn-default btn-xs mr10">取消订单</button>
        </div>
      </div><!--/.-->
      <div class="panel-body orderInfo-txt">
       <div class="p20 color-404040">
        <div class="h4 pb20">收货信息</div>
         <p>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：     刘德华</p>
         <p>收货地址：     广东 广州市 天河区, 燕岭路120号金燕大厦502</p>
         <p>联系电话：     186****3323</p>
         <p>支付方式：     在线支付</p>
      <div class="mt20 line-t">
        <div class="h4 pb20 mt20">送货时间</div>
        <p>工作日送货(适用于办公地址)</p>
        </div>
      <div class="mt20 line-t">
        <div class="h4 pb20 mt20">发票</div>
         <p>不开发票</p>
        </div>
        
       </div>
      </div>
      <div class=" p10 gray999">请在2014-01-15 17:23:03前完成支付,逾期订单将被系统做超时关闭处理.</div>
  </div>
  <!--/.组-->
  

    </div>
  </div>
 </div>
 <!-- container --> 
<!-- C内容结束-->
 </div><!-- /.content-->
</div><!-- /.wrap-->
</body>
</html>