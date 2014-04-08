<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>忘记密码</title>
<!--公用-->
<script src='js/pace/PACE.js'></script>
<!--<script>paceOptions = { elements: true};</script> -->
<link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" type="text/css" href="css/Gstyle.css"/>
<!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="js/placeholder.min.js"></script> 
</head>
<body>
<!-- H头部-->
<?php include'common/header-simple.php'?>

<!-- H头部结束--> 
<!-- C内容-->
<div class="container SignIn ptonav">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="font line-b pt40 pb40" >
        <h1 class="text-center"><b>忘记密码</b></h1>
      </div>
      <div class="text-center mt40">请输入您绑定国馆帐号的邮箱、手机号码、或者国馆ID：</div>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 mt30">
              <input type="text" class="form-control"  placeholder="请填写您的手机号码" >
            </div>
            <div class="col-sm-6 col-sm-offset-3">
               <span class="tips error-tips">*请填写您的手机号码</span> 
            </div>
          </div>
          <!--form-group -->
          <div class="text-center mt40">
          <button type="submit" class="btn btn-default btn-md">下一步</button>
          </div>
        </form>
    </div>
  </div>
</div>
<!-- container --> 
<!-- C内容结束--> 
</body>
</html>