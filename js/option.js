$(document).ready(function(){

    $("#share-to-sina-button").css("position","relative").css("left","50%").css("margin-left","-61.5px");

    $("#share-to-sina-button").click(function(){
        if(is_weixin()){
            //微信浏览器
            $(".share-cover").css("display","block");
            $(".share-guide").css("display","none");
            $("#weixin-guide").css("display","block");
            return
        }
        if(browser.versions.mobile){
            //移动端
            $(".share-cover").css("display","block");
            $(".share-guide").css("display","none");
            $("#mobile-guide").css("display","block");
            return
        }
        else{
            var content_t = "#每日一文# 门前  -   @顾城 @国馆";
            var content_p = "http://img.guoguan.com/images/201404/1396554514850740305.jpg";
            window._bd_share_config={"common":{"bdSnsKey":{"tsina":"2106128267","tqq":"101030289"},"bdText":content_t,"bdMini":"2","bdMiniList":false,"bdPic":content_p,"bdStyle":"1","bdSize":"24"},"share":{"bdSize":16},"image":{"viewList":["qzone","tsina","douban","tqq","renren","weixin"],"viewText":"推荐给朋友","viewSize":"24"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","douban","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
        }
    })

    $("#weixin-guide").click(function(){
        $(".share-cover").css("display","none");
    })
    $("#mobile-guide").click(function(){
        $(".share-cover").css("display","none");
    })

});

var browser={
        versions:function(){
            var u = navigator.userAgent, app = navigator.appVersion;
            return {         //移动终端浏览器版本信息
                trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或uc浏览器
                iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
        }(),
        language:(navigator.browserLanguage || navigator.language).toLowerCase()
    }
/*document.writeln("语言版本: "+browser.language);
document.writeln(" 是否为移动终端: "+browser.versions.mobile);
document.writeln(" ios终端: "+browser.versions.ios);
document.writeln(" android终端: "+browser.versions.android);
document.writeln(" 是否为iPhone: "+browser.versions.iPhone);
document.writeln(" 是否iPad: "+browser.versions.iPad);
document.writeln(navigator.userAgent);*/

function is_weixin(){
    var ua = navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i)=="micromessenger") {
        return true;
    } else {
        return false;
    }
}