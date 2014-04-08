<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>会员中心-修改密码</title>
<!--公用-->
<script src='js/pace/PACE.js'></script>
<link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" type="text/css" href="css/center.css"/>
 <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
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
         <span class="mr20 gray"><span class="glyphicon icon-envelope"></span> <a href="" class="gray">邮箱验证</a></span>
         <span class="mr20"><span class="glyphicon icon-mobile-phone" style="font-size:18px"></span> <a href="">手机验证</a></span>
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
     
  <!--我的收藏组-->
  <div class="panel">
    <div class="VIP-title"><b>找回密码</b></div>
<form role="form" >
<div class="row mt20">
  <div class="col-sm-6">
  <div class="form-group mt10">
    <label for="exampleInputEmail1">旧密码</label>
    <input type="text" class="form-control" placeholder="请输入旧密码">
    <div class="tips error-tips hidden">*请正确填写</div>
  </div>
  <div class="form-group mt20">
    <label for="exampleInputPassword1">新密码</label>
    <input type="password" class="form-control error"  placeholder="请输入新密码">
    <div class="tips error-tips">请正确填写</div>
  </div>
  <div class="form-group mt20">
    <label for="exampleInputFile">确认新密码</label>
    <input type="password" class="form-control error"  placeholder="请再次输入新密码">
    <div class="tips error-tips">密码不一致，请重新填写</div>
  </div>
        <button type="submit" class="btn btn-default btn-md mt20">确认</button>
      </div>

    </div>

</form>        
      <!--/.-->
  </div>
  <!--/.组-->
  

    </div>
  </div>
 </div>
 <!-- container --> 
<!-- C内容结束-->
 </div><!-- /.content-->
</div><!-- /.wrap-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="mt20 text-center" >添加收货地址</h1>
      </div>
      <div class="modal-body">
            <div class="form-group">
				<label for="inputEmail3" class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-7">
					<input type="text" class="form-control"  placeholder="收货人姓名">
					<span class="help-block text-danger hidden">请填写收货人的姓名</span>
                </div>
               </div>                             
                 <div class="form-group">
									    <label for="inputEmail3" class="col-sm-3 control-label">收货地址</label>
									    <div class="col-sm-3">
									    	<select class="form-control">
											  <option>省份</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
									    </div>
									    <div class="col-sm-3">
									    	<select class="form-control">
											  <option>城市</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
									    </div>
									    <div class="col-sm-3">
									    	<select class="form-control">
											  <option>地区</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
									    </div>
									</div> 
            <div class="form-group">
				<label for="inputEmail3" class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-7">
					<input type="text" class="form-control"  placeholder="详细地址">
					<span class="help-block text-danger hidden">请填写您的详细地址</span>
                </div>
               </div>                             
            <div class="form-group">
				<label for="inputEmail3" class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-7">
					<input type="text" class="form-control"  placeholder="收货人手机号">
					<span class="help-block text-danger hidden">请填写您的手机号</span>
                </div>
               </div>                             
            <div class="form-group">
				<label for="inputEmail3" class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-7">
					<input type="text" class="form-control col-sm-5"  placeholder="邮政编码">
					<span class="help-block text-danger hidden">请填写邮政编码</span>
                </div>
               </div>                             
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm-lg" data-dismiss="modal">确&nbsp;&nbsp;认</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>