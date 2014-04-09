<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container nav-container">
          <a href="home.php" id="logo-lg"><img src="img/logo-heng.png" class="logo"  /></a>
          <a href="home.php" id="logo-xs" ><img src="img/Glogo-lg.png" class=" pt10 pb10" /></a>
          <ul>
            <li>登录</li>
            <li>注册</li>
          </ul>
    </div>
</nav>
<script language="javascript">
$(function(){
	function headersimple(){
		 var $top = $(document).scrollTop(),logolg = $("#logo-lg"),logoxs = $("#logo-xs");
		 logoxs.hide();
		 if($top>0){
			 logolg.hide();logoxs.show();
			 }else{logolg.show();logoxs.hide();}
		}
		headersimple();
		$(window).scroll(function(){
		headersimple();
			})
	})
</script>