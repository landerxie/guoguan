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
    })

    $("#weixin-guide").click(function(){
        $(".share-cover").css("display","none");
    })
    $("#mobile-guide").click(function(){
        $(".share-cover").css("display","none");
    })

});

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