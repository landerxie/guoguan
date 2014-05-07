//控制器
var phonecatApp = angular.module('phonecatApp', []);

phonecatApp.controller('PhoneListCtrl', function ($scope) {

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
                "text":"A. 不知道",
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
        $scope.action = "resultPrevious";
    }


    $scope.showResult = function(){
            if(score >= 4 && score <=7){
                $scope.action = "resultOne";
                $scope.title = "您的酒量已击败全球10%的网友";
            } else if (score >= 8 && score <= 9)
            {
                $scope.action = "resultTwo";
                $scope.title = "您的酒量已击败全球36%的网友";
            } else if (score >= 10 && score <= 11)
            {
                $scope.action = "resultThree";
                $scope.title = "您的酒量已击败全球51%的网友";
            } else if (score >= 12 && score <= 13)
            {
                $scope.action = "resultFour";
                $scope.title = "您的酒量已击败全球69%的网友";
            }
            else if (score >= 14 && score <= 15)
            {
                $scope.action = "resultFive";
                $scope.title = "您的酒量已击败全球82%的网友";
            }
            else
            {
                $scope.action = "resultSix";
                $scope.title = "您的酒量已击败全球96%的网友";
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



});

