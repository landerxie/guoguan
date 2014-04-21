<!DOCTYPE>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>购物车-填写资料</title>
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
<script type="text/javascript" src="js/placeholder.min.js"></script> 
<script type="text/javascript">
$(function() {/*单选项*/
	function $radio(obj){
			obj.click(function(){
				$(this).find("input").attr("checked",true);
				$(this).siblings().find("input").attr("checked",false);
				})
		}
	 		   $radio($(".radio-inline"));
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
         <div class="cart-form-title">
            <span>收货地址</span>
         </div>
         <div class="cart-form-body mb50">
                    <div class="row cart-address mt20">
                    <!-- 一组-->
                     <div class="col-sm-3">
                      <div class="cart-adr-list selected">
                       <div class="p10 clearfix">
                         <span class="pull-left text-left">周杰伦</span>
                         <span class="pull-right text-right">13111236549</span>
                       </div>
                       <div class="p10"> 广州市天河区燕岭路120号金燕大厦502<br>(510630)</div>
                       <div class="p10 clearfix">
                        <div class="pull-left icon-ok-circle text-left" style="color:#02b913; font-size:20px"></div>
                        <div class="pull-right text-right"><a href="">编辑</a>&nbsp;&nbsp;<a href="">删除</a></div>
                       </div>
                       </div>
                     </div>
                     <!-- /.一组-->
                    <!-- 一组-->
                     <div class="col-sm-3">
                      <div class="cart-adr-list">
                       <div class="p10 clearfix">
                         <span class="pull-left text-left">周杰伦</span>
                         <span class="pull-right text-right">13111236549</span>
                       </div>
                       <div class="p10"> 广州市天河区燕岭路120号金燕大厦502<br>(510630)</div>
                       <div class="p10 clearfix">
                        <div class="pull-left selectIcon">使用</div>
                        <div class="pull-right text-right"><a href="">编辑</a>&nbsp;&nbsp;<a href="">删除</a></div>
                       </div>
                       </div>
                     </div>
                     <!-- /.一组-->
                    <!-- 一组-->
                     <div class="col-sm-3">
                      <div class="cart-adr-list">
                       <div class="p10 clearfix">
                         <span class="pull-left text-left">周杰伦</span>
                         <span class="pull-right text-right">13111236549</span>
                       </div>
                       <div class="p10"> 广州市天河区燕岭路120号金燕大厦502<br>(510630)</div>
                       <div class="p10 clearfix">
                        <div class="pull-left selectIcon">使用</div>
                        <div class="pull-right text-right"><a href="">编辑</a>&nbsp;&nbsp;<a href="">删除</a></div>
                       </div>
                       </div>
                     </div>
                     <!-- /.一组-->
                    <!-- 一组-->
                     <div class="col-sm-3">
                      <div class="cart-adr-list">
                       <div class="p10 clearfix">
                         <span class="pull-left text-left">周杰伦</span>
                         <span class="pull-right text-right">13111236549</span>
                       </div>
                       <div class="p10"> 广州市天河区燕岭路120号金燕大厦502<br>(510630)</div>
                       <div class="p10 clearfix">
                        <div class="pull-left selectIcon">使用</div>
                        <div class="pull-right text-right"><a href="">编辑</a>&nbsp;&nbsp;<a href="">删除</a></div>
                       </div>
                       </div>
                     </div>
                     <!-- /.一组-->
                    </div>
                    <div class="mt30 mb10">
                     <button type="submit" class="btn btn-default btn-icon-left"  data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-plus"></span>使用新地址
                     </button>
                    </div>
                    <!--组-->
        </div>
        <div class="cart-form-title" >支付及配送方式</div>
            <div class="cart-form-body mb50">
               <div>
               <div class=" mb20">
                   <div class="radio">
                    <label>
                       <input type="radio" name="paytype" checked class="mt2"> 在线支付
                    </label>
                    </div>
                </div>
               <div class="radio mt20">
                <label>
                   <input type="radio" name="paytype" class="mt2"> 上门自取
                </label>
                </div>
               </div>
            </div>
        <!-- /.组-->
        <!--组-->
        <div class="cart-form-title" >送货时间</div>
        <div class="cart-form-body mb50">
           <div class="p10">
           <div>
           <div class="radio-inline mr50">
               <input type="radio" name="Invoice" checked class="mt2"> 不开发票
            </div>
           <div class="radio-inline">
               <input type="radio" name="Invoice" class="mt2"> 普通发票
            </div>
            </div>
            <div class="form-group mt20">
              <label class=" pull-left control-label">&nbsp;&nbsp;发票抬头：</label>
              <div class="col-xs-12 col-sm-10 clearfix">
              <div class=" pull-left radio-inline mr20"><input type="radio" name="unit" checked class="mt2"> 不开发票 </div>
              <div class=" pull-left radio-inline mr10"><input type="radio" name="unit" class="mt2"> 普通发票</div>
              <div class=" pull-left gray form-control-static">(请确认单位名称正确,以免因名称错误耽搁您的报销)</div>
             </div>
            </div>
            <div class="form-group">
              <label class="pull-left control-label">&nbsp;&nbsp;发票名称：</label>
              <div class="col-sm-4"><input type="text" class="form-control"></div>
            </div>
            <div class="form-group">
              <label class="pull-left control-label">&nbsp;&nbsp;发票名称：</label>
              <div class="col-xs-6 form-control-static">购买商品明细</div>
            </div>
           </div>
        </div>
        <!-- /.组-->
        <!--组-->
        <div class="cart-form-title" >商品清单</div>
        <div class="cart-form-body mb50">
            <div class="table-responsive">
            <table class="table bordernone" >
              <thead>
                <tr>
                  <th width="40%"><span class="ml20">商品</span></th>
                  <th width="15%" class="text-center">商品编号</th>
                  <th width="15%" class="text-center">单价</th>
                  <th width="15%" class="text-center">数量</th>
                  <th width="15%" class="text-center">小计</th>
                </tr>
              </thead>
              <tbody>
                <tr align="center">
                  <td>
                  <div class="clearfix">
                  <div class="pull-left pt10">
                   <a href="">国馆酒HT87990090（经典装）</a>
                  </div>
                  </div>
                  </td>
                  <td><div class="pt10">HT87990090</div></td>
                  <td><div class="pt10">2000元</div></td>
                  <td><div class="pt5 col-sm-8 col-sm-offset-2"><input type="text" class="form-control text-center" value="1"></div></td>
                  <td><div class="pt10 hover">2000元</div></td>
                </tr>
              </tbody>
            </table>
          </div>
            <!-- /.组-->
            <!--组-->
            <div class="line-t pb20 mt30" >
             <div class="pr10 cart-form-total">
               <div class="pt20 text-right ">共1件<br>运费：10元</div>
               <div class=" text-right">金额合计:&nbsp;<span class="hover"><strong>4,000.00元</strong></span></div>
             </div>
            </div>
            <!--组-->
            <!--组-->
            <div class="line-t pb20 pt40 text-right" >
            <button type="button" class="btn btn-default btn-icon-right mt10">继续购物</button>
            <button type="submit" class="btn btn-default btn-icon-right mt10">提交，并去结账 <span class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
            <!--组-->
        </div>
        </form>
    </div>
  </div>
</div>
<!-- container --> 
<!-- C内容结束--> 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="mt20 text-center" >添加收货地址</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
				<label for="inputEmail3" class="col-sm-3 control-label">姓名</label>
					<div class="col-sm-7">
					<input type="text" class="form-control"  placeholder="请填写收货人姓名">
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
				<label for="inputEmail3" class="col-sm-3 control-label">详细地址</label>
					<div class="col-sm-7">
					<input type="text" class="form-control"  placeholder="请填写详细地址">
					<span class="help-block text-danger hidden">请填写您的详细地址</span>
                </div>
               </div>                             
            <div class="form-group">
				<label for="inputEmail3" class="col-sm-3 control-label">手机号</label>
					<div class="col-sm-7">
					<input type="text" class="form-control"  placeholder="请填写收货人手机号">
					<span class="help-block text-danger hidden">请填写您的手机号</span>
                </div>
               </div>                             
            <div class="form-group">
				<label for="inputEmail3" class="col-sm-3 control-label">邮政编码</label>
					<div class="col-sm-7">
					<input type="text" class="form-control col-sm-5"  placeholder="请填写邮政编码">
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

<!-- F底部-->
<?php include'common/footer.php'?>
<!-- F底部结束-->
 
</body>
</html>