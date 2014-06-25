/**
 * Created by Administrator on 14-6-25.
 */

(function($){
    var data = [278463, 234234, 78678, 99999, 123123, 9999],
        currentData = 99999,
        chartHeight = 0,
        chartNum = 0,
        templateOne,
        templateTwo;


    Array.max = function( array ){
        return Math.max.apply( Math, array );
    };

    var bigest = Array.max(data);


    for (var l =0; l< data.length; l++) {
        chartHeight = 100 * data[l]/bigest;
        chartNum = data[l];

        if(data[l] === bigest){
            chartHeight = 100;
        }

        templateOne = "<div class='chart-bar'>" +
            "<div class='chart-bar-zhu selected'" +
            "style='height:" + chartHeight + "%'>" +
            "<div class='test-number'>" + chartNum + "</div>" +
            "<div class='top-border'></div></div></div>";

        templateTwo = "<div class='chart-bar'>" +
            "<div class='chart-bar-zhu'" +
            "style='height:" + chartHeight + "%'>" +
            "<div class='test-number'>" + chartNum + "</div>" +
            "<div class='top-border'></div></div></div>";

        if (data[l] === currentData){
            $("#container").append(templateOne);
        }
        else{
            $("#container").append(templateTwo);
        }
    }


})(jQuery);
