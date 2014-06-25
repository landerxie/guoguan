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
            title:"这酒就是用来把玩的" ,
            count:"已有 23874 人 参与" ,
            href:"http://mp.weixin.qq.com/s?__biz=MzA5NjQ2NTIyNw==&mid=200303134&idx=1&sn=da12f74fac977c32c2e7c840ed705057&scene=1#rd" ,
            img:"0003/01.jpg"
        },
        {
            title:"用户故事：三十多岁的男人缺什么",
            count:"三十多岁的男人缺什么？进来看看你就知道！" ,
            href:"http://mp.weixin.qq.com/s?__biz=MzA5NjQ2NTIyNw==&mid=200521400&idx=1&sn=f96e73fc7ee4e2b96934a69e4f0fe65a&scene=1#rd" ,
             img:"0003/02.jpg"
        }
    ];

    $scope.postCluster = [
        {
            title:"每日新闻快读" ,
            detail:"每日头条新闻，每天花几分钟可以帮助你了解天下正在发生什么大事。" ,
            href:"http://mp.weixin.qq.com/s?__biz=MzA4MTIzMTYwNA==&mid=200323561&idx=1&sn=426e4bbdb738c4154af5e6f845db34ce#rd" ,
            img:"0003/03.jpg"
        },
        {
            title:"创业故事案例",
            detail:"以独特视角解读创业实战经历、教训以及真实案例。如果你正在经商或者想创业当老板，那这微信一定适合你的胃口。" ,
            href:"http://mp.weixin.qq.com/s?__biz=MzA4MTEyNjEwMQ==&mid=201718844&idx=1&sn=951b37eec5c0823a72aa96df7bf1bf50#rd" ,
            img:"0003/04.jpg"
        },
        {
            title:"互联网干货",
            detail:"适合喜欢互联网人关注。爆料业内最新动态，让你深度了解互联网行业。" ,
            href:"http://mp.weixin.qq.com/s?__biz=MjM5NjA0MDIzNw==&mid=200289547&idx=1&sn=5d36d4b7c2ef3fb9249673e9e5682ac5#rd",
            img:"0003/05.jpg"
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

