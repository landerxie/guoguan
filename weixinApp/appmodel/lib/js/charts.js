/**
 * Created by Administrator on 14-6-25.
 */

var chartJs = (function($){
    var /*data = [{
            value:"278463",
            current: false,
            title:"结果一"
        },
            {
                value:234234,
                current: true,
                title:"结果二"
            },
            {
                value:78678,
                current: false,
                title:"结果三"
            },
            {
                value:99999,
                current: false,
                title:"结果四"
            },
            {
                value:123123,
                current: false,
                title:"结果五"
            },
            {
                value:9999,
                current: false,
                title:"结果六"
            }
        ],*/
        chartHeight = 0,
        chartNum = 0,
        templateOne,
        bigest = 0,
        templateTwo;

    function compare(value1, value2){
        if ((value1 - value2) < 0) {
            return value2;
        } else{
            return value1;
        }
    }

    function calculate (data){
        $("#container").empty();

        var percentResult,totalResult = 0 ;

        for(var m = 0; m < data.length; m++){
            bigest = compare(parseInt(data[m].value), bigest);
            totalResult += parseInt(data[m].value);
        }

        for (var l =0; l< data.length; l++) {
            chartHeight = 100 * data[l].value/bigest;
            chartNum = data[l].value;

            if(data[l].value === bigest){
                chartHeight = 100;
            }

            if(data[l].current){
                percentResult = parseInt(100*data[l].value/totalResult);
            }

            var resultTitle = data[l].title;

            templateOne = "<div class='chart-bar'>" +
                "<div class='chart-bar-zhu selected' onclick='chartJs.showTitle(\"" + resultTitle + "\")'" +
                "style='height:" + chartHeight + "%'>" +
                "<div class='test-number'>" + chartNum + "</div>" +
                "<div class='top-border'></div></div></div>";

            templateTwo = "<div class='chart-bar'>" +
                "<div class='chart-bar-zhu' onclick='chartJs.showTitle(\"" + resultTitle + "\")'" +
                "style='height:" + chartHeight + "%'>" +
                "<div class='test-number'>" + chartNum + "</div>" +
                "<div class='top-border'></div></div></div>";

            if (!data[l].current){
                $("#container").append(templateTwo);
            }
            else{
                $("#container").append(templateOne);
            }
        }

        $("#percent-result").html("有" + percentResult +"%的人测试结果和我一样");
    }

    function showTitle(item){
        alert(item)
    }
    /*calculate(data);*/

    return {
        showTitle: showTitle,
        calculate: calculate
    }


})(jQuery);
