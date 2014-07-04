function GetQueryString(name)
{
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r !== null)
        return unescape(r[2]);
    return null;
}
function setCookie(name, value)
{
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
function getCookie(name)
{
    var acookie = document.cookie.split("; ");
    for (var i = 0; i < acookie.length; i++) {
        var arr = acookie[i].split("=");
        if (name === arr[0]) {
            if (arr.length > 1) {
                return unescape(arr[1]);
            }
        }
    }
    return null;
}
function startTest() {
    if (!$('#some_name').val() || $('#some_name').val().length !== 11) {
        alert('请输入正确的手机号码');
    } else {
        var ua = navigator.userAgent;
        $.ajax({
            url: '/test/MentalTestApi.php?a=savephone&client=' + ua + '&fromdata=box-weixin&phone=' + $('#some_name').val() + '&id=' + id + '&tmp=' + Math.random(), type: 'get', async: true, success: function(data) {

            }
        });
        setCookie("phone", $('#some_name').val());
        window.location.href = "#" + start;
    }
}
function goto(tag, cent) {
    score_cent += cent;
    window.location.hash = "item-" + tag;
}
function retest() {
    score_cent = 0;
    setCookie("item_" + id + "_result", '');
    window.location.hash = "home";
}
function showResult2(hashtag) {
    var r = resultjson;
    for (var i = 0; i < r.length; i++) {
        if (score_cent >= r[i].mincent && score_cent < r[i].maxcent) {
            $.ajax({
                url: '/test/MentalTestApi.php?a=saveresult&phone=' + $('#some_name').val() + '&id=' + id + '&result=' + r[i].no + '&tmp=' + Math.random(), type: 'get', async: true, success: function(data) {
                }
            });
            $(".detail-result h1").html(r[i].title);
            $(".result-item-content h1").html(r[i].title);
            $(".result-item-remark p").html(r[i].remark);
            for (var j = 0; j < orderlist.length; j++) {
                if (orderlist[j].no === r[i].no) {
                    orderlist[j].current = true;
                }
                else {
                    orderlist[j].current = false;
                }
            }
            chartJs.calculate(orderlist);
            if (hashtag === 1) {
                window.location.hash = "show-result";
            } else {
                window.location.hash = "show-result";
            }
            setCookie("item_" + id + "_result", score_cent);
        }
    }
}