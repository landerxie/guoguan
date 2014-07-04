//控制器
var phonecatApp = angular.module('phonecatApp', []);

phonecatApp.controller('PhoneListCtrl', function ($scope) {
    $scope.score = 0;

    $scope.action = "index";

    $scope.result = {
        title:"这是测试结果的title",
        result:"析出八万项雨",
        analysis: "费用是是这是相的你，半中不中费用是是这是相的你，半中不中费用是是这是相的你，半中不中费用是是这是相的你，半中不中。"
    }

    $scope.wxapp = [
        {
            title:"这个广告碉堡了！" ,
            count:"什么小米、锤子都弱爆了，这才是让民族自豪的品牌！" ,
            href:"http://mp.weixin.qq.com/s?__biz=MzA5NjQ2NTIyNw==&mid=200641909&idx=1&sn=a2dada5141765e8ed777a999680b5a69#rd " ,
            img:"0003/01.jpg"
        },
        {
            title:"三十多岁的男人缺什么",
            count:"三十多岁的男人缺什么？进来看看你就知道进来看看你就知道！" ,
            href:"http://mp.weixin.qq.com/s?__biz=MzA5NjQ2NTIyNw==&mid=200521400&idx=1&sn=f96e73fc7ee4e2b96934a69e4f0fe65a&scene=1#rd" ,
             img:"0003/02.jpg"
        }
    ];
    $.ajax({
        url: '/test/MentalTestApi.php?a=resx&id=' + id + '&tmp=' + Math.random(), type: 'get', async: true,
        error: function(data) {
            alert("err:" + data);
        },
        success: function(data) {
            var obj = eval("(" + data + ")");
            if(obj.err === 0){
                $scope.postCluster = obj.result;
            }
        }
    });
    $scope.postCluster = [
        {
            resx_title:"每日新闻快读" ,
            resx_smalltitle:"每日头条新闻，每天花几分钟可以帮助你了解天下正在发生什么大事。" ,
            resx_url:"http://mp.weixin.qq.com/s?__biz=MzA4MTIzMTYwNA==&mid=200323561&idx=1&sn=426e4bbdb738c4154af5e6f845db34ce#rd" ,
            resx_photo:"0003/03.jpg"
        },
        {
            resx_title:"创业故事案例",
            resx_smalltitle:"以独特视角解读创业实战经历、教训以及真实案例。如果你正在经商或者想创业当老板，那这微信一定适合你的胃口。" ,
            resx_url:"http://mp.weixin.qq.com/s?__biz=MzA4MTEyNjEwMQ==&mid=201718844&idx=1&sn=951b37eec5c0823a72aa96df7bf1bf50#rd" ,
            resx_photo:"0003/04.jpg"
        },
        {
            resx_title:"互联网干货",
            resx_smalltitle:"适合喜欢互联网人关注。爆料业内最新动态，让你深度了解互联网行业。" ,
            resx_url:"http://mp.weixin.qq.com/s?__biz=MjM5NjA0MDIzNw==&mid=200289547&idx=1&sn=5d36d4b7c2ef3fb9249673e9e5682ac5#rd",
            resx_photo:"0003/05.jpg"
        }
    ];

    $("ul.item li > a").click(function(){
        var scoreTmp = $(this).data("cent");
        $scope.score += scoreTmp;
    })

    $scope.showResult = function (){
        window.location.hash = "result";
    }

});

