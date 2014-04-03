$(document).ready(function(){
    var isHiden = true; /*控制切换菜单*/
    $('#popView').click(function(){
        if(isHiden){
            $('#popView').animate({left:'+=380px'});//菜单块向右移动
        }else{
            $('#popView').animate({left:'-=380px'}); //菜单块向左移动
        }
        isHiden = !isHiden;
    });
});  /**
 * Created by Lander-qi on 14-4-1.
 */
