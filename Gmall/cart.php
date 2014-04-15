<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>购物车</title>
<!--公用-->
<script src='js/pace/PACE.js'></script>
<link rel="stylesheet" type="text/css" href="js/pace/PACE.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" type="text/css" href="css/Gstyle.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
<!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
</head>
<body>
<!-- H头部-->
<?php include'common/header.php'?>

<!-- H头部结束--> 
<!-- C内容-->
<div class="container ptonav bg-color-fff">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="cart-form-title">
            <span>我的购物车</span>
        </div>
        <div class="cart-form-body">
            <form class="form-horizontal" role="form">
            <div class="table-responsive">
            <table class="table" >
              <thead>
                <tr>
                  <th width="50%" class="text-center">商品</th>
                  <th width="12%" class="text-center">单价</th>
                  <th width="12%" class="text-center">数量</th>
                  <th width="14%" class="text-center">操作</th>
                </tr>
              </thead>
              <tbody>
                <tr align="center">
                  <td>
                  <div class="clearfix">
                  <div class="p10 pull-left  cart-product-img">
                   <a href=""><img src="images/img.jpg" width="100" height="100"></a>
                  </div>
                  <div class="pull-left line-height-100 tl-left">
                   <a href="">国馆-中国道</a>
                   <span class="product-muse-detail">大师之作，国馆首款收藏级文化白酒</span>
                  </div>
                  </div>
                  </td>
                  <td><div class="pt10">2000元</div></td>
                  <td>
                      <div class="pt5 width160">
                        <div class="minus-button icon-minus"></div>
                        <input type="text" class="form-control form-control-number text-center" value="1">
                        <div class="plus-button icon-plus"></div>
                      </div>
                  </td>
                  <td><div class="pt10"><a href="" class="hover">删除</a></div></td>
                </tr>
                <tr align="center">
                  <td>
                  <div class="clearfix">
                  <div class="p10 pull-left cart-product-img">
                   <a href=""><img src="images/img.jpg" width="100" height="100"></a>
                  </div>
                  <div class="tl-left pull-left line-height-100">
                   <a href="">国馆-中国道</a>
                     <span class="product-muse-detail">大师之作，国馆首款收藏级文化白酒</span>
                  </div>
                  </div>
                  </td>
                  <td><div class="pt10">2000元</div></td>
                  <td>
                      <div class="pt5 width160">
                       <div class="minus-button icon-minus"></div>
                        <input type="text" class="form-control form-control-number text-center" value="1">
                        <div class="plus-button icon-plus"></div>
                      </div>
                  </td>
                  <td><div class="pt10"><a href="" class="hover">删除</a></div></td>
                </tr>
              </tbody>
            </table>
          </div>
            <div class="line-t row p20">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6 text-right pr0"><span class="h5">共计：</span><font class="hover h3 "> 4,000 元</font></div>
             </div>
            <div class="text-right pb40" >
            <button type="submit" class="btn btn-default btn-icon-right">去结算 <span class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
<!-- container --> 
<!-- C内容结束-->
<!-- F底部-->
<!-- F底部结束-->
</body>
</html>