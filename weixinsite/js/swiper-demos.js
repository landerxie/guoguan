/*
 Author: Vladimir Kharlampidi, The iDangero.us
 */
document.createElement('header');
document.createElement('footer');

$(function(){

    //Main Swiper
    var swiper = new Swiper('.swiper1', {
        pagination : '.pagination1',
        loop:true,
        grabCursor: true
    });


    //Navigation arrows
/*    $('.arrow-left').click(function(e) {
        e.preventDefault()
        swiper.swipePrev()
    });
    $('.arrow-right').click(function(e) {
        e.preventDefault()
        swiper.swipeNext()
    });*/


    //Clickable pagination
    $('.pagination1 .swiper-pagination-switch').click(function(){
        swiper.swipeTo($(this).index())
    })

    var swiperDynamic = new Swiper(".swiper-dynamic",{
        pagination : '.pagination2',
        loop:true,
        grabCursor: true
    })
    //Clickable pagination
    $('.pagination2 .swiper-pagination-switch').click(function(){
        swiperDynamic.swipeTo($(this).index())
    })
})

