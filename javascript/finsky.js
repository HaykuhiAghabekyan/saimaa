
$(window).scroll(function () {
    if ($(this).scrollTop() > 800) {
        $('.to_top').fadeIn();
    } else {
        $('.to_top').fadeOut();
    }
    s_top = $(this).scrollTop();


    var fin1=$("#f_bool1").offset().top;
    var fin2=$("#f_bool2").offset().top;
    var fin3=$("#f_bool3").offset().top;
    var fin4=$("#f_bool4").offset().top;
    var fin5=$("#contact").offset().top;
    if(s_top > fin1 && s_top < fin2){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.f_bool1").addClass("active_circle");
    } else if(s_top > fin2 && s_top < fin3){
        $('.round .ttt').removeClass("active_circle");
        $(".ttt.f_bool2").addClass("active_circle");
    }else if(s_top > fin3 && s_top < fin4){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.f_bool3").addClass("active_circle");
    }else if(s_top > fin4 && s_top < fin5){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.f_bool4").addClass("active_circle");
    }else if(s_top > fin5){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.contact").addClass("active_circle");
    }else {
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.home").addClass("active_circle");
    }



});
var vid = document.getElementById("myvideo");
vid.playbackRate = 0.7;

$('.carousel').carousel({
    interval: 10000
})


$('.round .ttt ').click(function(){
    var cc=$(this).attr('class');
    var ss=cc.split(' ');
    console.log(ss)
    var top=$('#'+ss[0]).offset().top;
    console.log(top)
    $("html, body").animate({
        scrollTop:top+50
    }, 1000);
    $('.round .ttt ').removeClass('active_circle') ;
    $(this).addClass('active_circle') ;
    console.log(22)
    return false;
});