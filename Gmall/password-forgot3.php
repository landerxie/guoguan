<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>忘记密码-重置密码</title>
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
      <div class="font SignIn-title" >
        <h1 class="text-center">重置密码</h1>
      </div>
      <div class="text-center mt40">请重置您的帐户密码</div>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <div class="col-sm-4 col-sm-offset-4 mt30">
              <input type="text" class="form-control"  placeholder="请填写您的新密码" >
            </div>
            <div class="col-sm-8 col-sm-offset-4">
               <span class="tips">密码长度8~16位，数字、字母、字符至少包含两种</span> 
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4 col-sm-offset-4">
              <input type="text" class="form-control"  placeholder="请再一次填写您的新密码" >
            </div>
            <div class="col-sm-8 col-sm-offset-4 hidden">
               <span class="tips error-tips">密码不一致</span> 
            </div>
          </div>
          <!--form-group -->
          <div class="text-center mt60">
          <button type="submit" class="btn btn-default btn-md">提交</button>
          </div>
        </form>
    </div>
  </div>
</div>
<!-- container --> 
<!-- C内容结束--> 
</body>
</html>