//控制器
var nextHour = angular.module('nextHour', []);

nextHour.controller('nextHourCtrl', function ($scope) {

    var score;

    $scope.phones = [
        {'name': 'Nexus S',
            'snippet': 'Fast just got faster with Nexus S.'},
        {'name': 'Motorola XOOM™ with Wi-Fi',
            'snippet': 'The Next, Next Generation tablet.'},
        {'name': 'MOTOROLA XOOM™',
            'snippet': 'The Next, Next Generation tablet.'}
    ];

    $scope.title = "";
    $scope.action = "index";

    $scope.item = [
        {
            "name":"请选择你的性别",
            "choose": [{
                "text":"A. 真汉子",
                "score":2
            },
                {
                    "text":"B. 豪爽女",
                    "score":1
                }
            ]
        },
        {
            "name":"请选择你的年龄范围",
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
            "name":"你的父亲是否很能喝酒？",
            "choose": [{
                "text":"A. 不喝",
                "score":2
            },
                {
                    "text":"B. 大概一杯",
                    "score":1
                },
                {
                    "text":"C. 一瓶",
                    "score":2
                },
                {
                    "text":"D. 三瓶左右",
                    "score":3
                },
                {
                    "text":"E. 不见底",
                    "score":4
                }
            ]
        },
        {
            "name":"距离上次喝酒有多少天了？",
            "choose": [{
                "text":"A. 昨天刚喝过",
                "score":2
            },
                {
                    "text":"B. 前天吧",
                    "score":1
                },
                {
                    "text":"C. 三四天了",
                    "score":2
                },
                {
                    "text":"D. 快一个星期",
                    "score":3
                },
                {
                    "text":"E. 一星期以上",
                    "score":2
                }
            ]
        },
        {
            "name":"昨晚睡了多久？",
            "choose": [{
                "text":"A. 三个小时左右",
                "score":1
            },
                {
                    "text":"B. 差不多六个小时",
                    "score":2
                },
                {
                    "text":"C. 八个小时",
                    "score":3
                },
                {
                    "text":"D. 睡到自然醒",
                    "score":3
                },
                {
                    "text":"E. 没睡",
                    "score":0
                }
            ]
        },
        {
            "name":"你今天已经锻炼过了吗？",
            "choose": [{
                "text":"A. 跑步",
                "score":1
            },
                {
                    "text":"B. 球类运动",
                    "score":2
                },
                {
                    "text":"C. 器械类",
                    "score":1
                },
                {
                    "text":"D. 其他激烈运动",
                    "score":2
                },
                {
                    "text":"E. 没有",
                    "score":0
                }
            ]
        },
        {
            "name":"你今天心情如何？",
            "choose": [{
                "text":"A. 还不错",
                "score":1
            },
                {
                    "text":"B. 一般",
                    "score":0
                },
                {
                    "text":"C. 不怎么开心",
                    "score":0
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
        $scope.action = "itemSeven";
    }
    $scope.itemSevenChoose = function(item) {
        score += item;
        $(".show-result-class").css("display","none");
        $(".loading-div").css("display","block");
        setTimeout(function(){
            $(".show-result-class-two").css("display","block");
            $(".loading-div").css("display","none");
        },3000);
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
        if(score >= 4 && score <=7){
                $scope.action = "resultOne";

        } else if (score >= 8 && score <= 9)
        {

                $scope.action = "resultTwo";
        } else if (score >= 10 && score <= 11)
        {

                $scope.action = "resultThree";
        } else if (score >= 12 && score <= 13)
        {

                $scope.action = "resultFour";
        }
        else if (score >= 14 && score <= 15)
        {

                $scope.action = "resultFive";
        }
        else
        {

                $scope.action = "resultSix";
        }
    }

    var dataForWeixin = {
        appId: "",//微信公众号ID
        MsgImg: "图片决对地址,http的那种", //分享给朋友和收藏时显示的缩略图
        TLImg: "图片决对地址,http的那种", //分享到朋友圈时显示的缩略图
        url: location.href,//分享地址
        title: "酒量排名大赛", //分享至微博、朋友圈、朋友都会用到
        desc: "您酒量真行 ^-^", //分享给 朋友时会用到
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
            $("#share-to-sina-button").css("display","inline-block");
            $("#share-to-sina-button-pc").css("display","none");
            return
        }
    }*/



});

