
//返回顶部
$(function() {
$("body").append("<div id='goTopBtn' style='display:none ;'><a href='javascript:viod(0);' calss='Fix_png'>返回顶部</a></div>");
var av_height = $(window).height();
var av_width = $(window).width();
var go_top= $("#goTopBtn");
var Gotop_w = go_top.width();
var Gotop_h = go_top.height();
var doc_width = 1200;
var Gotop_x = (av_width>doc_width?0.5*av_width+0.5*doc_width:av_width-Gotop_w);
var Gotop_y = (av_height/2)-Gotop_h-36;
var ie6Hack = "<style>#goTopBtn{position:absolute; top:expression(documentElement.scrollTop+documentElement.clientHeight - this.offsetHeight-20);}</style>";
if ($.browser.msie && ($.browser.version == "6.0")){
$("body").append(ie6Hack);
}
function setGotop(){
av_height = $(window).height();
av_width = $(window).width();
Gotop_y = (av_height/2)-Gotop_h-36;
Gotop_x = (av_width>doc_width?0.5*av_width+0.5*doc_width:av_width-Gotop_w);
if($(window).scrollTop()>200){
go_top.fadeIn(200);
}else{
go_top.fadeOut(200);
}
if ($.browser.msie && ($.browser.version == "6.0")){
go_top.animate({"left":Gotop_x},0);
return false;
}
go_top.animate({"left":Gotop_x,"bottom":20},0);
}
setGotop();
$(window).resize(function(){
setGotop();
})
$(window).scroll(function(){
setGotop();
})
go_top.click(function(){
$("html , body").animate({scrollTop:"0"},0);
})

});