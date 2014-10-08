//控制器
var phonecatApp = angular.module('phonecatApp', []);

phonecatApp.controller('PhoneListCtrl', function($scope) {
    var id = 0;
    id = GetQueryString("id");
    var testurl = "http://www.guoguan.com/html/weixinApp/model/index.html";
    var testurl = testurl + "?id=" + id;
    var sharetitle = "";
    var start = "";
    var score_cent = 0;
    var resultjson = "";
    var orderlist = [];
    var score, result;
    $scope.title = "";
    $scope.action = "index";

    $scope.enterApp = function() {
        $scope.action = start;
    };
    /*结果切换*/
    $(".bar-body").on("click", function() {
        $(".bar-tag").removeClass("selected")
        $(this).next().addClass("selected");
    });

    $scope.showResult = function() {
    };
    $scope.hideAd = function() {
        document.getElementById("ad").style.display = "none";
        $("#ad a").click(function() {
            return false
        });
    };
    $scope.closeCover = function() {
        $(".share-cover").css("display", "none");
        $(".show-result-class-two").css("display", "none");
    };
    $scope.goto = function(item) {
        $scope.action = item;
    };
    function load() {
        $.ajax({
            url: '/test/MentalTestApi.php?a=getinfo&id=' + id + '&tmp=' + Math.random(), type: 'get', async: true,
            error: function(data) {
                alert("err:" + data);
            },
            success: function(data) {
                var obj = eval("(" + data + ")");
                if (obj.err === 0) {
                    $("#peoplenum").html(obj.peoplenum);//参与人数
                    $(".test-title").html(obj.msg.mentaltest_title);//题目
                    document.title = obj.msg.mentaltest_title;
                    $(".home-detail p").html(obj.msg.mentaltest_content);//题目描述
                    if (obj.msg.mentaltest_titlephoto) {
                        $(".home-banner").html('<img src="' + obj.msg.mentaltest_titlephoto + '">');//题目图片
                    }
//                    $(".resx-tag").html('<a href="#cluster" class="dissolve">' + obj.msg.resxtag + '</a>');
//                    $(".resx-title h1").html(obj.msg.resxtitle);
//                    $(".resx-content p").html(obj.msg.resxcontent);
                    var html = [];
                    var resulthtml = [];
                    $(".rseultnumber").html((obj.result.length - 1) + "/" + (obj.result.length - 1));
                    for (var i = 0; i < obj.result.length; i++) {
                        if (obj.result[i].item_isresult === "0") {
                            if (i === 0) {
                                $scope.start = "item-" + obj.result[i].item_id;
                            }
                            html.push('<div id="item-' + obj.result[i].item_id + '"><div class="item-title"><h1>' + obj.msg.mentaltest_title + '</h1><p>国馆提醒你：答题越快，结果越准</p>');
                            html.push('<div class="logo"><img src="themes/img/logo.jpg"></div></div><div class="process"><div class="number">' + (i + 1) + '/' + (obj.result.length - 1) + '</div><div class="cent">');
                            html.push('<p><div class="Bars"><div style="width: ' + 100 * (i + 1) / (obj.result.length - 1) + '%;"></div></div></p></div></div><div class="second-title"><h3>' + obj.result[i].item_title + '</h3></div>');
                            if (obj.result[i].item_titlephoto !== "") {
                                html.push('<div class="has-img"><img src="' + obj.result[i].item_titlephoto + '"></div>');
                            }
                            var content = eval("(" + obj.result[i].item_itemcontent + ")");
                            if (content && content.length > 0 && content[0].photo !== "") {
                                html.push('<ul class="metal scroll item">');
                            } else {
                                html.push('<ul class="rounded scroll item">');
                            }
                            for (var j = 0; j < content.length; j++) {
                                html.push('<li class="arrow">');
                                if (content[j].photo !== "") {
                                    html.push('<img src="' + content[j].photo + '">');
                                }
                                if (i === obj.result.length - 2)
                                {
                                    html.push('<a href="javascript:void(0)" onclick="showResult2(2)" data-cent="' + content[j].cent + '">' + content[j].title + '</a> </li>');
                                }
                                else
                                {
                                    html.push('<a href="javascript:void(0)" onclick="goto(' + obj.result[i + 1].item_id + ',' + content[j].cent + ')"  data-cent="' + content[j].cent + '">' + content[j].title + '</a> </li>');
                                }
                            }
                            html.push('</ul><div class="info"> <p>测试提供：国馆，中国收藏级文化白酒</p></div></div>');
                        } else {
                            var item = eval("(" + obj.result[i].item_itemcontent + ")");
                            resultjson = item;
                        }
                    }
                    $("#itemstart").before(html.join(''));
                    for (var i = 0; i < obj.orderlist.length; i++) {
                        for (var j = 0; j < resultjson.length; j++) {
                            if (obj.orderlist[i].result_id === resultjson[j].no.toString())
                            {
                                orderlist.push({no: resultjson[j].no, value: obj.orderlist[i].num, current: false, title: resultjson[j].title});
                            }
                        }
                    }
                    //判断检查用户是否参与过
                    var phone = getCookie("phone");
                    if (phone) {
                        $('#some_name').val(phone);
                    }
                    console.info(phone);
                    var s = getCookie("item_" + id + "_result");
                    if (s) {
                        score_cent = parseInt(s);
                        showResult2(1);
                    }
                    else {
                        // retest();
                        score_cent = 0;
                    }
                    console.info(score_cent);
                }
            }
        });
    }
    var dataForWeixin = {
        appId: "", //微信公众号ID
        MsgImg: "http://www.guoguan.com/ceshi/0001/images/zhongguodao.jpg", //分享给朋友和收藏时显示的缩略图
        TLImg: "http://www.guoguan.com/ceshi/0001/images/zhongguodao.jpg", //分享到朋友圈时显示的缩略图
        url: location.href, //分享地址
        title: "潜意识测试：从送礼测你潜在的性格", //分享至微博、朋友圈、朋友都会用到
        desc: "已有132万网友参与测试！^-^", //分享给 朋友时会用到
        fakeid: "",
        callback: function() {
            //分享成功回调方法，其中分享给朋友、分享到微博、收藏都是成功后回调，而分享到朋友圈是点分享按钮就会调用
        }
    };
    (function() {
        var onBridgeReady = function() {
            //分享给朋友
            WeixinJSBridge.on('menu:share:appmessage', function(argv) {
                WeixinJSBridge.invoke('sendAppMessage', {
                    "appid": dataForWeixin.appId,
                    "img_url": dataForWeixin.MsgImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": dataForWeixin.url,
                    "desc": dataForWeixin.desc,
                    "title": dataForWeixin.title
                }, function(res) {
                    (dataForWeixin.callback)();
                });
            });
            //分享至朋友圈
            WeixinJSBridge.on('menu:share:timeline', function(argv) {
                (dataForWeixin.callback)();
                WeixinJSBridge.invoke('shareTimeline', {
                    "img_url": dataForWeixin.TLImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": dataForWeixin.url,
                    "desc": dataForWeixin.desc,
                    "title": dataForWeixin.title
                }, function(res) {
                });
            });
        };
        if (document.addEventListener) {
            document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
        } else if (document.attachEvent) {
            document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
            document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
        }
    })();

    var browser = {
        versions: function() {
            var u = navigator.userAgent, app = navigator.appVersion;
            return {//移动终端浏览器版本信息
                trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或uc浏览器
                iPhone: u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
        }(),
        language: (navigator.browserLanguage || navigator.language).toLowerCase()
    };
});

