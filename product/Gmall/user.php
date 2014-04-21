<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>我的账号</title>
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
 //设置弹窗
  $("#modal-link a").each(function(){
	  var $this = $(this);
	  var content = $this.attr("data-content");
	  $this.bind('click',function(){
		  $(content).siblings().hide();
		  $(content).show();
		  })
	  })
  $("#myModal .nextstep").each(function(){
	  var $this = $(this);
	  var theopen = $this.attr("data-next");
	  $this.bind('click',function(){
		  $(theopen).show();
		  $(theopen).siblings().hide();
		  })
	  })
})
 </script>
</head>
<body>
<!-- H头部-->
<?php include'common/header-simple.php'?>

<!-- H头部结束--> 
<!-- C内容-->
<div class="container ptonav">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h1 class="text-center line-b pt40 pb30"><b>我的账号</b></h1>
        <form class="form-horizontal" role="form">
<div class="row" id="modal-link">
        <div class="col-sm-4 col-sm-offset-4 text-center mt40">
         <a href="javascript:;" data-toggle="modal" data-target="#myModal" data-content="#modal-head"><img src="images/head.png" class=" img-responsive"></a>
        </div>
        <div class="col-sm-6 col-md-offset-4">
        <div class="pt40">国馆ID：1125687458 <a href="" class="focus ml20">退出</a></div>
        <div class="setup mt30 h5 gray999">
         <p>
         <span class="mr20 mt10">昵称：（未设置）<a href="javacript:;" class="hover" data-toggle="modal" data-target="#myModal" data-content="#modal-name">更改</a></span>
         <span class="mr20 mt10">邮箱：（未设置）<a href="javacript:;" class="hover" data-toggle="modal" data-target="#myModal" data-content="#modal-emil">更改</a></span>
         </p>
         <p class="mt20">
         <span class="mr20 mt10">手机：（未设置）<a href="javacript:;" class="hover" data-toggle="modal" data-target="#myModal" data-content="#modal-phone">更改</a></span>
         <span class="mr20 mt10">密码：<a href="javacript:;" class="hover" data-toggle="modal" data-target="#myModal" data-content="#modal-password">更改</a></span>
         </p>
         </div>
        </div>
        </div>
      </form>
      <div class=" line-t mt40 pb40">
      <div class=" text-center pt40" >你还可以去</div>
      <div class=" text-center mt30" >
      <a href="" class="btn btn-default mt10">国馆官网</a>
      <a href="" class="btn btn-default mt10">预约抢购</a>
      <a href="" class="btn btn-default mt10">个人中心</a>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- container --> 
<!-- C内容结束--> 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modal-head">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="mt20 text-center" >更改头像</h1>
      </div>
      <div class="modal-body">
            <div class="form-group">
				<label class="col-sm-3 control-label">选着图片：</label>
					<div class="col-sm-7">
					<input type="file" class="form-control"  placeholder="请选择您要作为头像的图片">
					<span class="help-block text-danger hidden">*图片格式不正确</span>
                </div>
               </div>                             
        </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default btn-sm-lg" data-dismiss="modal">确&nbsp;&nbsp;认</button>
      </div>
      </form>
    </div><!-- /.头像 -->
    <div class="modal-content" id="modal-name">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="mt20 text-center" >更改昵称</h1>
      </div>
      <div class="modal-body">
            <div class="form-group">
				<label class="col-sm-3 control-label">当前昵称：</label>
                <label class="col-sm-7 control-label"><span class="pull-left">国馆</span></label>
                </div>                             
            <div class="form-group">
				<label class="col-sm-3 control-label">新昵称：</label>
					<div class="col-sm-7">
					<input type="text" class="form-control"  placeholder="请填写您的新昵称">
					<span class="help-block text-danger hidden">*请填写您的新昵称</span>
                </div>
               </div>                             
        </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default btn-sm-lg" data-dismiss="modal">确&nbsp;&nbsp;认</button>
      </div>
      </form>
    </div><!-- /.昵称 -->
    <div class="modal-content" id="modal-emil">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="mt20 text-center" >更改邮箱</h1>
      </div>
      <div class="modal-body">
            <div class="form-group">
				<label class="col-sm-3 control-label">当前邮箱：</label>
                <label class="col-sm-7 control-label"><span class="pull-left">guoguan110@163.com</span></label>
                </div>                             
            <div class="form-group">
				<label class="col-sm-3 control-label">新邮箱：</label>
					<div class="col-sm-7">
					<input type="text" class="form-control"  placeholder="请填写您的新邮箱">
					<span class="help-block text-danger hidden">*邮箱格式不正确</span>
                </div>
               </div>                             
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm-lg nextstep" data-next="#modal-emil2">下一步</button>
      </div>
      </form>
    </div><!-- /.邮箱 -->
    <div class="modal-content" id="modal-emil2">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="mt20 text-center" >更改邮箱</h1>
      </div>
      <div class="modal-body text-center">
         <p>为保障帐户安全，<br>
我们往您的邮箱<a href="">2312309411@qq.com</a>发送了确认邮件，
点击邮件中的链接即可完成更改绑定</p>
        <p class="mt40"><button type="button" class="btn btn-default btn-sm-lg" >重发验证邮件</button></p>
        </div>
      <div class="modal-footer">
        <a href="" class="hover" data-dismiss="modal" aria-hidden="true">取消这次绑定</a>
      </div>
      </form>
    </div><!-- /.邮箱发送验证码 -->
    <div class="modal-content" id="modal-phone">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="mt20 text-center" >更改手机</h1>
      </div>
      <div class="modal-body">
            <div class="form-group">
				<label class="col-sm-3 control-label">当前手机：</label>
                <label class="col-sm-7 control-label"><span class="pull-left">guoguan110@163.com</span></label>
                </div>                             
            <div class="form-group">
				<label class="col-sm-3 control-label">新手机号：</label>
					<div class="col-sm-5">
					<input type="text" class="form-control"  placeholder="请填写您的新手机号">
					<span class="help-block text-danger hidden">*手机格式不正确</span>
                   </div>
					<div class="col-sm-4">
					<button type="button" class="btn btn-default btn-xs" >发送验证短信</button>
                   </div>
               </div>                             
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm-lg nextstep" data-next="#modal-phone2">下一步</button>
      </div>
      </form>
    </div><!-- /.手机 -->
    <div class="modal-content" id="modal-phone2">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="mt20 text-center" >更改手机</h1>
      </div>
      <div class="modal-body text-center">
         <p class="pb40">我们往您要绑定的手机13462727372发送了验证短信，请输入里面的验证码</p>
         <div class="form-group">
				<label class="col-sm-3 control-label">短信验证码：</label>
					<div class="col-sm-5">
					<input type="text" class="form-control"  placeholder="请填写您的验证码">
					<span class="help-block text-danger hidden">*验证码不正确</span>
                   </div>
					<div class="col-sm-4">
					<button type="button" class="btn btn-default btn-xs" >重发验证短信</button>
                   </div>
               </div>                             
        </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default btn-sm-lg" data-dismiss="modal">确&nbsp;&nbsp;认</button>
      </div>
      </form>
    </div><!-- /.手机发送验证码 -->
    <div class="modal-content" id="modal-password">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="mt20 text-center" >更改密码</h1>
      </div>
      <div class="modal-body">
            <div class="form-group">
               <div class="col-sm-6 col-sm-offset-3">
				<label for="inputEmail3" >旧密码</label>
				<input type="text" class="form-control"  placeholder="请填写您的旧密码">
				<span class="help-block text-danger hidden">密码不正确</span>
                </div>
             </div>                             
            <div class="form-group">
               <div class="col-sm-6 col-sm-offset-3">
				<label for="inputEmail3" >新密码</label>
				<input type="text" class="form-control"  placeholder="请填写您的新密码">
				<span class="help-block text-danger hidden">密码不正确</span>
               </div> 
              </div>                            
            <div class="form-group">
               <div class="col-sm-6 col-sm-offset-3">
				<label for="inputEmail3" >确认新密码</label>
				<input type="text" class="form-control"  placeholder="请再次填写您的新密码">
				<span class="help-block text-danger hidden">密码不一致</span>
               </div>  
               </div>  
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm-lg nextstep" data-next="#modal-password-ok">确&nbsp;&nbsp;认</button>
      </div>
      </form>
    </div><!-- /.密码 -->
    <div class="modal-content" id="modal-password-ok">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="mt20 text-center" >更改密码</h1>
      </div>
      <div class="modal-body">
            <p class="pt40 pb40 text-center">密码修改成功</p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm-lg" data-dismiss="modal" >返回我的账户</button>
      </div>
      </form>
    </div><!-- /.密码修改成功 -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- F底部-->
<?php include'common/footer.php'?>
<!-- F底部结束-->
</body>
</html>