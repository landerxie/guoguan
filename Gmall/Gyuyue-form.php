<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>填写预约信息</title>
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
<script type="text/javascript" >
 $(function(){
           $('.dropdown-toggle').dropdown();//下拉select
		   //弹窗
		   $("#Gbtn-YzPhone").click(function() {
			   var $this = $(this); 
             if($this.hasClass('ok')){
				 $("#YzPhone").hide();
				 $("#ConfirmAddress").fadeIn();
				 }
           });
		   $("#Backchange").bind('click', function() {
				 $("#YzPhone").show();
				 $("#ConfirmAddress").hide();
			   $("html , body").animate({scrollTop:$("#Gyuyue-Formheader").offset().top},500);
			   });
			   
/*			$("#NextStap").bind('click', function() {
				if(处理成功判断){
					$(this).attr("data-toggle","modal");
					$(this).trigger("click");
					}
				 });
*/			   
})
    </script>
</head>
<body>
<!-- H头部-->
<?php include'common/header-simple.php'?>
<!-- H头部结束-->
<!-- C内容-->
<div class="container Gyuyue-Form mt160">
  <div class="row">
    <div class="font font-lg text-center" id="Gyuyue-Formheader">填写预约信息</div>
       <div class="col-xs-12 col-md-10 col-md-offset-1">
      <form class="form-horizontal" role="form">
    <div class="form-item">
    <div class="font font-md">请务必填写您的真实信息，购买时使用此信息验证您的身份</div>
    <div class="form-group">
    <label class="control-label">真实姓名：</label>
    <div class="col-xs-10 col-md-5">
      <input type="text" class="form-control error"  placeholder="请填写您的真实姓名" >
    </div>
    <span class="tips error-tips">请输入你的真实姓名</span>
   </div><!--form-group -->
    <div class="form-group">
    <label for="inputEmail" class="control-label">电子邮箱：</label>
    <div class="col-xs-10 col-md-5">
      <input type="email" class="form-control" id="inputEmail"  placeholder="请填写您的电子邮箱" >
    </div>
    <span class=" text-success mt10 glyphicon glyphicon-ok-circle"></span>
   </div><!--form-group -->
    <div class="form-group">
    <label class="control-label">手机号码：</label>
    <div class="col-xs-10 col-md-5">
      <input type="email" class="form-control" placeholder="请填写您的手机号码">
    </div>
   </div><!--form-group -->
  </div><!--form-item -->
    <div class="form-item">
    <div class="font font-md">请填写您的详细地址，地址提交后不能更改</div>
    <div class="form-group">
    <label class="control-label">您的地址：</label>
									    <div class="col-sm-2">
									    	<select class="form-control">
											  <option>省份</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
									    </div>
									    <div class="col-sm-2">
									    	<select class="form-control">
											  <option>城市</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
									    </div>
									    <div class="col-sm-2">
									    	<select class="form-control">
											  <option>地区</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
									</div> 
    <!--<div class="col-xs-10 col-md-5"> -->
    <!--按钮组-->
      <!--<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    广东省 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">广东省</a></li>
    <li><a href="#">广西省</a></li>
    <li><a href="#">北京省</a></li>
    <li><a href="#">上海省</a></li>
  </ul>
  </div> -->
   <!--按钮组-->
    <!--按钮组-->
      <!--<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    广州市 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">广州市</a></li>
    <li><a href="#">深圳市</a></li>
    <li><a href="#">佛山市</a></li>
    <li><a href="#">东莞市</a></li>
  </ul>
  </div> -->
   <!--按钮组-->
    <!--按钮组-->
      <!--<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    天河区 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">越秀区</a></li>
    <li><a href="#">海珠区</a></li>
    <li><a href="#">番禺区</a></li>
    <li><a href="#">白云区</a></li>
  </ul>
  </div> -->
   <!--按钮组-->
    <!--</div> -->
   </div><!--form-group -->
    <div class="form-group">
    <label for="inputEmail" class="control-label">详细地址：</label>
    <div class="col-xs-10 col-md-5">
      <input type="email" class="form-control" id="inputEmail"  placeholder="请填写您的详细地址">
    </div>
   </div><!--form-group -->
    <div class="form-group">
    <label class="control-label">邮政编码：</label>
    <div class="col-xs-10 col-md-5 form-control-xs">
      <input type="text" class="form-control"  placeholder="邮政编码">
    </div>
   </div><!--form-group -->
  </div><!--form-item -->
    <div class="form-item">
    <div class="font font-md">您的购买意向</div>
    <div class="radio">
     <label>
     <input type="radio"  name="buyyx" checked >
     <span class="font18">自己购买</span>
     </label>
   </div>
    <div class="radio">
     <label>
     <input type="radio"  name="buyyx" >
     <span class="font18">送礼赠人</span>
     </label>
   </div>
  </div><!--form-item -->
    <div class="form-item">
    <div class="form-Yzm form-control-xs">
     <input type="text" class="form-control"  placeholder="请填写验证码">
     <span class="form-Yzmimg"><a href="#"><img src="img/Yzm.jpg" height="34" align="absmiddle"></a><span class="font18">点击图片刷新验证码</span></span>
     </div>
  <div class="checkbox">
  <label class="font18">
    <input type="checkbox" value="">
         我已阅读并同意&nbsp;&nbsp;<a href="" class="focus">《国馆预约/购买协议》</a>&nbsp;&nbsp;及地址不可更改相关条件  
     </label>
 </div>  
 <div class="mt40">
 <a href="javascript:;" class="btn btn-default btn-icon-right" data-toggle="modal" data-target="#myModal" id="NextStap" >
      下一步 <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
    </div>
</div><!--form-item -->
</form>
      <div class="Tsap font18">温馨提示
请确认您的预约信息，提交后将不可能更改。预约并不代表购买成功，请在开放购买时准时访问。数量有限，先到先得。</div>
      </div>
  </div>
</div>
<!-- C内容结束-->
<!-- W 弹窗-->
<div class="modal fade Gmodal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <div class="YzPhone-con" id="YzPhone">
    <div class="modal-content">
     <form class="form-horizontal" role="form">
      <div class="modal-header">
        <div class="h1 text-center mt20">绑定手机号码</div>
        <div class="row">
        <div class="mt10 col-md-10 col-xs-offset-1">为保护顾客利益，请绑定手机号，此手机号可用于登陆和找回密码，验证完后进入预约页面</div>
        </div>
      </div>
      <div class="modal-body">
        
     <div class="form-group row">
     <div class="col-xs-10 col-md-6 col-xs-offset-0 col-md-offset-1 ">
      <input type="text" class="form-control" placeholder="请填写您的手机号码">
    </div>
    <a href="javascript:;" class="Gbtn-Form fl">发送验证短信</a>
   </div><!--form-group -->
     <div class="form-group row">
     <div class="col-xs-10 col-md-6 col-xs-offset-0 col-md-offset-1">
      <input type="text" class="form-control" placeholder="请填写您的验证码">
    </div>
   </div><!--form-group -->
      </div>
      <div class="modal-footer row">
        <div class="col-md-6 col-md-offset-1 ">
         <a href="javascript:;" class=" pull-left btn btn-default btn-sm-lg ok" id="Gbtn-YzPhone" >确&nbsp;&nbsp;认</a><!--关闭判断 data-dismiss="modal" -->
         </div>
      </div>
      </form>
    </div><!-- /.Gmodal-content-->
    </div><!-- / 手机绑定-->
    <div class="ConfirmAddress-con" id="ConfirmAddress">
    <div class="modal-content">
     <form class="form-horizontal" role="form">
      <div class="modal-header">
        <div class="h1 text-center mt20">确认收货地址</div>
        <div class="h4 text-center mt10">如购买成功，将为您配送至</div>
      </div>
      <div class="modal-body">
      <address class=" pl10 pr10"> 
       地&nbsp;&nbsp;址：广州市天河区燕玲路120号金燕大厦502室（510650）<br>
       收货人：黄英欢（收）<br>
       手&nbsp;&nbsp;机：15914295473
      </address>
      </div><!-- / modal-body-->
      <div class="modal-footer ">
      <div>如购买成功，此地址将无法更改，请您仔细核对为您配送至</div>
      <div class="mt40">
         <a href="javascript:;" class="btn btn-default btn-sm-lg" id="Backchange"  data-dismiss="modal">返回修改</a>
         <a href="javascript:;" class="btn btn-default btn-sm-lg" >确认地址</a><!--关闭判断 data-dismiss="modal" -->
         </div>
      </div>
      </form>
    </div><!-- /.Gmodal-content-->
    </div><!-- /. 确认收货地址-->
  </div><!-- /.modal-dialog -->

</div><!-- /.modal  -->
<!-- W 弹窗-->

</body>
</html>