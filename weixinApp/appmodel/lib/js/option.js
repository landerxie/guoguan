$(document).ready(function(){
    /*$("#share-to-sina-button").styles("position","relative").styles("left","50%").styles("margin-left","-61.5px");*/

    clientBrowseCheck();

    $(".share-to-sina-button").click(function(){
        if(is_weixin()){
            //微信浏览器
            $(".share-cover").css("display","block");
            $(".share-guide").css("display","none");
            $("#weixin-guide").css("display","block");
            $(".share-to-sina-button").css("display","inline-block");
            $(".share-to-sina-button-pc").css("display","none");
            return
        }
        else{
            //微信浏览器
            $(".share-cover").css("display","block");
            $(".share-guide").css("display","none");
            $("#weixin-guide").css("display","block");
            $(".share-to-sina-button").css("display","inline-block");
            $(".share-to-sina-button-pc").css("display","none");
            return
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
function clientBrowseCheck(){
    if(is_weixin()){
        //微信浏览器
        $(".pc-share").css("display","none");
        $(".weixin-banner").css("display","block");
        return
    } else{
        $(".weixin-share").css("display","none");
        $(".pc-banner").css("display","block");
    }
}