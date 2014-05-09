$(document).ready(function(){
    /*$("#share-to-sina-button").css("position","relative").css("left","50%").css("margin-left","-61.5px");*/

    clientBrowseCheck();


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
        window.location.href = "http://guoguan.com";
        return
    } else if(browser.versions.iPhone){
        window.location.href = "http://mp.weixin.qq.com/s?__biz=MjM5ODc2ODY2NA==&mid=200322542&idx=1&sn=a87b8eba6ec74bf246efb187f8542d09&scene=1&from=singlemessage&isappinstalled=0#rd";
        return
    } else if (browser.versions.android){
        window.location.href = "http://mp.weixin.qq.com/s?__biz=MjM5ODc2ODY2NA==&mid=200322542&idx=1&sn=a87b8eba6ec74bf246efb187f8542d09&scene=1&from=singlemessage&isappinstalled=0#rd";
        return
    }
    else {
        return
    }
}