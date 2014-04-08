<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>购物车-支付</title>
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
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript">
$(function() {/*单选项*/
	function $radio(obj){
			obj.click(function(){
				$(this).find("input").attr("checked",true);
				$(this).siblings().find("input").attr("checked",false);
				})
		}
	 		   $radio($(".radio-cart"));
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
      <form class="form-horizontal" role="form">
        <!-- 组-->
        <div class=" mt40 pb20 line-b">
           <p>订单：54678654345678</p>
           <p class="mt5">总计：<span class=" hover h3">4,000.00</span> 元</p>
           <p class="mt20">配送：周杰伦/15912345678/燕玲路金燕大厦502室/不限送货时间/不开发票</p>
         </div>
        <!-- /.组-->
        <!-- 组-->
        <div class=" mt40 pb20 line-b">
           <h1 class="gray">配送及支付方式</h1>
           <div class="mt40 mb20">
            <span class="radio-cart"><input type="radio" checked ><span class="ml10 Icon-border"><img src="img/Icon-zfb.jpg" /></span></span>
            <span class="ml20">大额支付推荐使用支付宝快捷支付</span>
           </div>
         </div>
        <!-- /.组-->
        <!-- 组-->
        <div class=" mt20 pb20 line-b">
           <div class="mb20">
            <span class="radio-cart mt20 mr50"><input type="radio" checked ><span class="ml10 Icon-border"><img src="img/Icon-Icbc.jpg" /></span></span>
            <span class="radio-cart mt20 mr50"><input type="radio"  ><span class="ml10 Icon-border"><img src="img/Icon-Icbc.jpg" /></span></span>
            <span class="radio-cart mt20 mr50"><input type="radio"  ><span class="ml10 Icon-border"><img src="img/Icon-Icbc.jpg" /></span></span>
            <span class="radio-cart mt20 mr50"><input type="radio"  ><span class="ml10 Icon-border"><img src="img/Icon-Icbc.jpg" /></span></span>
            <span class="radio-cart mt20 mr50"><input type="radio"  ><span class="ml10 Icon-border"><img src="img/Icon-Icbc.jpg" /></span></span>
           </div>
         </div>
        <!-- /.组-->
        <!--组-->
        <div class="line-t pb20 pt40 text-right" >
        <button type="button" class="btn btn-gray mt10">修改订单</button>
        <button type="submit" class="btn btn-default btn-icon-right mt10" data-toggle="modal" data-target="#myModal">
          去支付<span class="glyphicon glyphicon-chevron-right"></span>
         </button>
        </div>
        <!--/.组-->
        </form>
    </div>
  </div>
</div>
<!-- container --> 
<!-- C内容结束--> 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-catpay pb20">
    <div class="modal-header" style="border:none">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
      <div class="modal-body pb40">
        <div class="p10 clearfix">
        <p class="f-st" style="font-size:36px;"><b>正在支付...</b></p>
        <div class="col-sm-5 col-sm-offset-7 mt60 clearfix">
            <p class="h3 mt10">如果支付失败</p>
            <a href="" class=" focus">请查看支付常见问题>></a>
          </div>
        <div class="col-sm-5 col-sm-offset-7 mt40 clearfix">
            <p class="h3 mt10">支付成功了</p>
            <a href="" class=" focus">立即查看订单详情>></a>
          </div>
        </div>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>