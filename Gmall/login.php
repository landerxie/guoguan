<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>登陆</title>
<!--公用-->
<script src='js/pace/PACE.js'></script>
<!--<script>paceOptions = { elements: true};</script> -->
<link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" type="text/css" href="css/Gstyle.css"/>
<!--<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 --><!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
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
      <div class="line-b pb40 mt20 text-center">
        <h2 class="font"><b>用户登陆</b></h2>
        <p class="mt20">快来加入我们吧，您也可以重新<a href="" class="hover">注册账号</a></p>
      </div>
      <div class="col-sm-8 col-sm-offset-4">
        <form class="form-horizontal mt40" role="form">
          <div class="form-group">
            <div class="col-xs-10 col-sm-6">
              <input type="text" class="form-control error"  placeholder="账户/手机号/邮箱" >
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5"> <span class="tips error-tips">用户名或密码不正确</span> </div>
          </div>
          <!--form-group -->
          <div class="form-group">
            <div class="col-xs-10 col-sm-6">
              <input type="password" class="form-control error"  placeholder="输入密码" >
            </div>
          </div>

          <!--form-group -->
            <div class="form-group mt60">
              <div class="col-sm-6">
                <button type="submit" class=" btn btn-default btn-login" ><i class="h3">立即登录</i></button>
                <div class="clearfix mt10"> 
                <span class="radio pull-left">
                  <input type="radio">
                  两周内自动登陆
                  </span> 
                  <span class="radio pull-right"><a href="" class="focus">忘记密码</a></span> 
                  </div>
              </div>
            </div>
        </form>
      </div>
      <div class="col-sm-12 line-t mt60 pt20">
             <div class="col-sm-8 col-sm-offset-4 Login-Link">
                 <span class="pull-left">其他登陆方式：</span>
                 <a href="" class="qq">QQ</a><a href="" class="xl">新浪</a><a href="" class="zfb">支付宝</a> 
               </div>
    </div>
    </div>
  </div>
</div>
<!-- container --> 
<!-- C内容结束-->
<!-- F底部-->
<?php include'common/footer.php'?>
<!-- F底部结束-->
</body>
</html>