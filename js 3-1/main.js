$(".btn").on("click",function(){
    if(document.getElementsByClassName(".left") === null){
        $('body').prepend('＜div class="left"＞＜/div＞');
    }
    if(document.getElementsByClassName("right") === null){
        $('body').prepend('＜div class="right"＞＜/div＞');
    }
    $(".left").stop().animate({width:'0'}, 1000 );
    $(".right").stop().animate({width:'0'},1000 );
    setTimeout('Eliminate()',5000);
});