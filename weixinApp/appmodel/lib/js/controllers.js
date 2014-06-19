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
            title:"心理测试一" ,
            count:"112334" ,
            href:"http://www.guoguan.com" ,
            img:"themes/images/2_03.jpg"
        },
        {
            title:"心理测试一",
            count:"112334" ,
            href:"http://www.guoguan.com" ,
            img:"themes/images/2_04.jpg"
        }
    ]

    $scope.postCluster = [
        {
            title:"集合贴一" ,
            detail:"这是一个集合贴" ,
            href:"http://www.guoguan.com" ,
            img:"themes/images/2_03.jpg"
        },
        {
            title:"集合贴二",
            detail:"这是一个集合贴" ,
            href:"http://www.guoguan.com" ,
            img:"themes/images/2_04.jpg"
        }
    ]

    $("ul.item li > a").click(function(){
        var scoreTmp = $(this).data("cent");
        $scope.score += scoreTmp;
    })

    $scope.showResult = function (){
        if($scope.score < 10){
            alert("小于10");
            window.location.hash = "result";
        }else
        if($scope.score > 10 && $scope.score < 20){
            alert("小于20");
            window.location.hash = "result";
        }else{
            alert("大于20");
            window.location.hash = "result";
        }
    }

});

