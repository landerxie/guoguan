//控制器
var phonecatApp = angular.module('phonecatApp', []);

phonecatApp.controller('PhoneListCtrl', function ($scope) {

    var score,result;

    $scope.action = "index";

    $scope.item = [
        {
            "name":"1、你要送一幅字给朋友，你会选什么字：",
            "choose": [{
                "img":"",
                "text":"A、天道酬勤",
                "score":1
            },
                {
                    "img":"",
                    "text":"B、地道酬善",
                    "score":1
                },
                {
                    "img":"",
                    "text":"C、商道酬信",
                    "score":1
                },
                {
                    "img":"",
                    "text":"D、业道酬精",
                    "score":1
                },
            ]
        },
        {
            "name":"2、你认为美是？",
            "choose": [{
                "img":"",
                "text":"A. 20以下",
                "score":1
            },
                {
                    "img":"",
                    "text":"B. 21-30",
                    "score":2
                },
                {
                    "img":"",
                    "text":"C. 31-40",
                    "score":3
                },
                {
                    "img":"",
                    "text":"D. 41-50",
                    "score":3
                },
                {
                    "img":"",
                    "text":"E. 50以上",
                    "score":2
                }
            ]
        },
        {
            "name":"3、你送礼主要会考虑：",
            "choose": [{
                "img":"",
                "text":"A、实用、有品质",
                "score":3
            },
                {
                    "img":"",
                    "text":"B、独特、有创意",
                    "score":3
                },
                {
                    "img":"",
                    "text":"C、大气、有内涵",
                    "score":3
                },
                {
                    "img":"",
                    "text":"D、贵重、有分量",
                    "score":3
                }
            ]
        }
    ];

   /* var browser={
        versions:function(){
            var u = navigator.userAgent, app = navigator.appVersion;
            return {         //移动终端浏览器版本信息
                trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*//*), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或uc浏览器
                iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
        }(),
        language:(navigator.browserLanguage || navigator.language).toLowerCase()
    }*/
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

