<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>注册</title>
<!--公用-->
<script src='js/pace/PACE.js'></script>
<!--<script>paceOptions = { elements: true};</script> -->
<link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" type="text/css" href="css/Gstyle.css"/>

<!--<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 -->  <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/placeholder.min.js"></script>
<script type="text/javascript" >
 $(function(){
	 function RadioRegister(){
		 var a = $("#radio-register .forPhone"),b = $("#radio-register .forEmail"),p = $("#regByPhone"),e = $("#regByEmail");
   a.find("input").click(function(){
	   $(this).attr("checked",true);
	   p.removeClass("hidden");
	   e.addClass("hidden");
	   })
   a.find("span").click(function(){
	   $(this).siblings('input').attr("checked",true);
	   p.removeClass("hidden");
	   e.addClass("hidden");
	   })
   b.find("input").click(function(){
	   $(this).attr("checked",true);
	   e.removeClass("hidden");
	   p.addClass("hidden");
	   
	   })
   b.find("span").click(function(){
	   
	   $(this).siblings('input').attr("checked",true);
	   e.removeClass("hidden");
	   p.addClass("hidden");
	   })
   b.one("click", function(){//兼容 placeholder
           funplaceholder();
    });   
	   }
	   RadioRegister();
})
 </script>

</head>
<body>
<!-- H头部-->
<?php include'common/header-simple.php'?>

<!-- H头部结束-->
<!-- C内容-->
<div class="container SignIn ptonav">
  <div class="row register-form-bg">
    <div class="col-md-12 ">
    <div class="line-b pb40 mt20">
        <h3 class="register-form-title"><b>成为国馆用户</b></h3>
        <p class="mt20">如果您是国馆会员，可<a href="login.php" class="focus">在此登录</a></p>
    </div>
    <div id="radio-register" class="col-sm-9 radio mt40 register-style-choose">
     <div class="pull-left forPhone"><input type="radio" name="registerMethod" checked><span class="fs14">手机注册</span></div>
     <div class="pull-left forEmail"><input type="radio" name="registerMethod"><span class="fs14">邮箱注册</span></div>
    </div>
     <div class="col-sm-9 col-sm-offset-1" id="regByPhone">
      <form class="form-horizontal" role="form">
    <div class="form-group">
        <div class="col-xs-12 col-sm-2 form-label">
            <label>手机号码:</label>
        </div>
        <div class="col-xs-10 col-sm-5 inlinebl">
          <input type="text" class="form-control error"  placeholder="请填写您的手机号码" >
        </div>
    <!--成功-->
    <div class="col-xs-2 col-md-1 hidden">
     <span class=" text-success mt10 glyphicon glyphicon-ok-circle"></span>
    </div>
    <!--/.成功-->
    <div class="col-xs-12 col-sm-4 get-valid-code" >
           <button class=" btn btn-default btn-xs" type="button">获取验证码</button>
      </div>

    <div class="col-xs-12 col-sm-6 ">
     <span class="tips error-tips">手机格式不正确</span>
    </div>

   </div><!--form-group -->
    <div class="form-group get-valid-code-position">
    <div class="col-xs-12 col-sm-2 form-label">
                <label>验证码:</label>
            </div>
        <div class="col-xs-6 col-sm-3">
          <input type="text" class="form-control"  placeholder="请填写验证码" >
        </div>
     <!--成功-->
    <div class="col-xs-2 col-sm-3 hidden">
     <span class=" text-success mt10 glyphicon glyphicon-ok-circle"></span>
    </div>
    <!--/.成功-->
    <div class="col-xs-12">
     <span class="tips error-tips hidden">请输入验证码</span>
    </div>
   </div><!--form-group -->
    <div class="form-group">
     <div class="col-xs-12 col-sm-2 form-label">
                    <label>设置密码:</label>
                </div>
    <div class="col-xs-10 col-sm-5">
      <input type="password" class="form-control"  placeholder="密码长度8~16位" >
    </div>
    <!--成功-->
    <div class="col-xs-2 hidden">
     <span class=" text-success mt10 glyphicon glyphicon-ok-circle"></span>
    </div>
    <!--/.成功-->
    <!--错误-->
    <div class="col-xs-12  col-sm-6 ">
     <span class="tips error-tips ">密码格式不正确</span>
    </div>
    <!--/.错误-->
   </div><!--form-group -->
    <div class="form-group">
     <div class="col-xs-12 col-sm-2 form-label">
                    <label>确认密码:</label>
                </div>
    <div class="col-xs-10 col-sm-5">
      <input type="password" class="form-control"  placeholder="确认密码" >
    </div>
    <!--成功-->
    <div class="col-xs-2 col-md-1">
     <span class=" text-success mt10 glyphicon glyphicon-ok-circle"></span>
    </div>
    <!--/.成功-->
    <!--错误-->
    <div class="col-xs-12 col-md-6 hidden">
     <span class="tips error-tips hidden">*密码不一致</span>
    </div>
    <!--/.错误-->
   </div><!--form-group -->
   <div class="form-group">
        <div class="col-xs-12 col-sm-2 form-label">
                   </div>
       <div class="col-xs-10 col-sm-5 mt10">
           <button type="submit" class=" btn btn-default btn-md" >立即注册</button>
       </div>
    </div>
    <div class="form-group">
            <div class="col-xs-12 col-sm-2 form-label">
                       </div>
           <div class="col-xs-10 col-sm-5 mt10">
                <div class="mt10">
                    点击"立即注册"，即表示您同意并愿意遵守国馆<a href="" class="focus">用户协议</a>和<a href="" class="focus">隐私政策</a>
                    </div>
           </div>
        </div>


     </form>
  </div><!--/.regByPhone-->
     <div class="col-sm-9 col-sm-offset-1 hidden" id="regByEmail">
      <form class="form-horizontal" role="form">
    <div class="form-group">
    <div class="col-xs-12 col-sm-2 form-label">
                <label>电子邮箱:</label>
            </div>
    <div class="col-xs-10 col-sm-5">
      <input type="text" class="form-control error"  placeholder="请填写您的电子邮箱" >
    </div>
    <!--成功-->
    <div class="col-xs-2 col-sm-1 hidden">
     <span class=" text-success mt10 glyphicon glyphicon-ok-circle"></span>
    </div>
    <!--/.成功-->
    <div class="col-xs-12  col-sm-6">
    <span class="tips error-tips">邮箱格式不正确</span>
    </div>
   </div><!--form-group -->
    <div class="form-group">
    <div class="col-xs-12 col-sm-2 form-label">
                <label>设置密码:</label>
            </div>
    <div class="col-xs-10 col-sm-5">
      <input type="password" class="form-control"  placeholder="密码长度8~16位" >
    </div>
    <!--成功-->
    <div class="col-xs-2 col-sm-1 hidden">
     <span class=" text-success mt10 glyphicon glyphicon-ok-circle"></span>
    </div>
    <!--/.成功-->
    <!--错误-->
    <div class="col-xs-12  col-sm-6">
     <span class="tips error-tips hidden">密码格式不正确</span>
    </div>
    <!--/.错误-->
   </div><!--form-group -->
    <div class="form-group">
    <div class="col-xs-12 col-sm-2 form-label">
                <label>确认密码:</label>
            </div>
    <div class="col-xs-10 col-sm-5">
      <input type="password" class="form-control"  placeholder="确认密码" >
    </div>
    <!--成功-->
    <div class="col-xs-2 col-sm-1">
     <span class=" text-success mt10 glyphicon glyphicon-ok-circle"></span>
    </div>
    <!--/.成功-->
    <!--错误-->
    <div class="col-xs-12  col-sm-6">
     <span class="tips error-tips hidden">密码不一致</span>
    </div>
    <!--/.错误-->
   </div><!--form-group -->
    <div class="form-group">
     <div class="col-xs-12 col-sm-2 form-label">
                    <label>验证码:</label>
                </div>
    <div class="col-xs-5 col-sm-3">
      <input type="text" class="form-control error" placeholder="输入验证码">
    </div>
    <div class="col-xs-12 col-sm-5">
      <span class="form-Yzmimg"><a href="#"><img src="img/Yzm.jpg" height="34" align="absmiddle"></a><span class="pl10">点击刷新</span></span>
    </div>
   </div><!--form-group -->
   <div class="form-group">
           <div class="col-xs-12 col-sm-2 form-label">
                      </div>
          <div class="col-xs-10 col-sm-5 mt10">
              <button type="submit" class=" btn btn-default btn-md" >立即注册</button>
          </div>
       </div>
       <div class="form-group">
               <div class="col-xs-12 col-sm-2 form-label">
                          </div>
              <div class="col-xs-10 col-sm-5 mt10">
                   <div class="mt10">
                       点击"立即注册"，即表示您同意并愿意遵守国馆<a href="" class="focus">用户协议</a>和<a href="" class="focus">隐私政策</a>
                       </div>
              </div>
           </div>
     </form>
  </div><!--/.regByEmail-->
</div>
  </div>
</div><!-- container -->
<!-- C内容结束-->
</body>
</html>