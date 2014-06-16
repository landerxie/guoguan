//控制器
var phonecatApp = angular.module('phonecatApp', []);

phonecatApp.controller('PhoneListCtrl', function ($scope) {

    var score,result;

    $scope.title = "";
    $scope.action = "index";

    $scope.item = [
        {
            "name":"1、你要送一幅字给朋友，你会选什么字：",
            "choose": [{
                "text":"A、天道酬勤"
            },
                {
                    "text":"B、地道酬善"
                },
                {
                    "text":"C、商道酬信"
                },
                {
                    "text":"D、业道酬精"
                },
            ]
        },
        {
            "name":"2、你认为美是？",
            "choose": [{
                "text":"A. 20以下",
                "score":1
            },
                {
                    "text":"B. 21-30",
                    "score":2
                },
                {
                    "text":"C. 31-40",
                    "score":3
                },
                {
                    "text":"D. 41-50",
                    "score":3
                },
                {
                    "text":"E. 50以上",
                    "score":2
                }
            ]
        },
        {
            "name":"3、你送礼主要会考虑：",
            "choose": [{
                "text":"A、实用、有品质"
            },
                {
                    "text":"B、独特、有创意"
                },
                {
                    "text":"C、大气、有内涵"
                },
                {
                    "text":"D、贵重、有分量"
                }
            ]
        },
        {
            "name":"4、你最需要的是？",
            "choose": [{
                "text":"A、个性"
            },
                {
                    "text":"B、梦想"
                },
                {
                    "text":"C、金钱"
                },
                {
                    "text":"D、爱人"
                },
                {
                    "text":"E、知己"
                },
                {
                    "text":"F、自由 "
                }
            ]
        },
        {
            "name":"5、你猜这是什么？",
            "choose": [{
                "text":"A、艺术品"
            },
                {
                    "text":"B、客厅摆件"
                },
                {
                    "text":"C、葵花宝典"
                },
                {
                    "text":"D、某装逼利器"
                }
            ]
        },
        {
            "name":"6、如果要在一个小岛生活一辈子，你会去？",
            "choose": [{
                "text":"A、温和友善、经常活动聚会的阳光岛",
                "score":1
            },
                {
                    "text":"B、高度发达、充满发展机会的富庶岛",
                    "score":2
                },
                {
                    "text":"C、整洁规划、一切井然有序的安全岛",
                    "score":1
                },
                {
                    "text":"D、自然原始、崇尚手工制作的田园岛",
                    "score":2
                },
                {
                    "text":"E、博学多思、求知氛围浓厚的科学岛",
                    "score":0
                },
                {
                    "text":"F、美丽浪漫、充满文艺气息的艺术岛",
                    "score":0
                }
            ]
        },
        {
            "name":"7、你喜欢下面哪种颜色？",
            "choose": [{
                "text":"A、灰"
            },
                {
                    "text":"B、白"
                },
                {
                    "text":"C、红"
                },
                {
                    "text":"D、绿"
                },
                {
                    "text":"E、蓝"
                },
                {
                    "text":"F、紫 "
                }
            ]
        }
    ];

    $scope.enterApp = function(){
        $scope.action = "itemOne";
    }

    $scope.itemOneChoose = function(item) {
        score = item;
        $scope.action = "itemTwo";
    }
    $scope.itemTwoChoose = function(item) {
        score += item;
        $scope.action = "itemThree";
    }
    $scope.itemThreeChoose = function(item) {
        score += item;
        $scope.action = "itemFour";
    }
    $scope.itemFourChoose = function(item) {
        score += item;
        $scope.action = "itemFive";
    }
    $scope.itemFiveChoose = function(item) {
        score += item;
        $scope.action = "itemSix";
    }
    $scope.itemSixChoose = function(item) {
        score += item;
        result = item;
        $scope.action = "itemSeven";
    }
    $scope.itemSevenChoose = function(item) {
        score += item;
        $(".show-result-class").css("display","none");
        $(".loading-div").css("display","block");
        setTimeout(function(){
            if (result == "s") {
                $("#result-one").css("display","block");
            }else if (result == "e"){
                $("#result-two").css("display","block");
            }
            else if (result == "c"){
                $("#result-three").css("display","block");
            }
            else if (result == "r"){
                $("#result-four").css("display","block");
            }
            else if (result == "i"){
                $("#result-five").css("display","block");
            }
            else if (result == "a"){
                $("#result-six").css("display","block");
            }
            $(".loading-div").css("display","none");
        },2000);
    }


    $scope.showResult = function(){
        $(".share-cover").css("display","block");
        $(".share-guide").css("display","none");
        $("#weixin-guide").css("display","block");
        $(".loading-div").css("display","none");
    }

    $scope.closeCover = function(){
        $(".share-cover").css("display","none");
        $(".show-result-class-two").css("display","none");
    }

    var dataForWeixin = {
        appId: "",//微信公众号ID
        MsgImg: "http://www.guoguan.com/ceshi/0001/images/zhongguodao.jpg", //分享给朋友和收藏时显示的缩略图
        TLImg: "http://www.guoguan.com/ceshi/0001/images/zhongguodao.jpg", //分享到朋友圈时显示的缩略图
        url: location.href,//分享地址
        title: "潜意识测试：从送礼测你潜在的性格", //分享至微博、朋友圈、朋友都会用到
        desc: "已有132万网友参与测试！^-^", //分享给 朋友时会用到
        fakeid: "",
        callback: function () {
            //分享成功回调方法，其中分享给朋友、分享到微博、收藏都是成功后回调，而分享到朋友圈是点分享按钮就会调用
        }
    };
    (function(){
        var onBridgeReady=function(){
            //分享给朋友
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
                WeixinJSBridge.invoke('sendAppMessage',{
                    "appid":dataForWeixin.appId,
                    "img_url":dataForWeixin.MsgImg,
                    "img_width":"120",
                    "img_height":"120",
                    "link":dataForWeixin.url,
                    "desc":dataForWeixin.desc,
                    "title":dataForWeixin.title
                }, function(res){(dataForWeixin.callback)();});
            });
            //分享至朋友圈
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                (dataForWeixin.callback)();
                WeixinJSBridge.invoke('shareTimeline',{
                    "img_url":dataForWeixin.TLImg,
                    "img_width":"120",
                    "img_height":"120",
                    "link":dataForWeixin.url,
                    "desc":dataForWeixin.desc,
                    "title":dataForWeixin.title
                }, function(res){});
            });
        };
        if(document.addEventListener){
            document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
        }else if(document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady'   , onBridgeReady);
            document.attachEvent('onWeixinJSBridgeReady' , onBridgeReady);
        }
    })();

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

    /*function is_weixin(){
        var ua = navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i)=="micromessenger") {
            return true;
        } else {
            return false;
        }
    }*/
    /*function clientBrowseCheck(){
        if(is_weixin()){
            //微信浏览器
            $("#share-to-sina-button").styles("display","inline-block");
            $("#share-to-sina-button-pc").styles("display","none");
            return
        }
    }*/



});

