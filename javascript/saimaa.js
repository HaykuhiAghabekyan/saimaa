$(window).scroll(function () {
    if ($(this).scrollTop() > 800) {
        $('.to_top').fadeIn();
    } else {
        $('.to_top').fadeOut();
    }
    var s_top = $(this).scrollTop();
    var yes1 = $("#saim_bool1").offset().top;
    var  yes2 = $("#saim_bool2").offset().top;
    var  yes3 = $("#saim_bool3").offset().top;
    var  yes4 = $("#saim_bool4").offset().top;
    var  yes5 = $("#saim_bool5").offset().top;
    var yes6 = $("#saim_bool6").offset().top;
    var yes7 = $("#saim_bool7").offset().top;
    var  yes8 = $("#saim_bool8").offset().top;
    var yes9 = $("#saim_bool9").offset().top;
    var yes11 = $("#saim_bool10").offset().top;
    var yes10 = $("#contact").offset().top;
    if(s_top > yes1 && s_top < yes2){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.saim_bool1").addClass("active_circle");
    } else if(s_top > yes2 && s_top < yes11){
        $('.round .ttt').removeClass("active_circle");
        $(".ttt.saim_bool2").addClass("active_circle");
    }else if(s_top > yes11 && s_top < yes3){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.saim_bool10").addClass("active_circle");
    }else if(s_top > yes3 && s_top < yes4){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.saim_bool3").addClass("active_circle");
    }else if(s_top > yes4 && s_top < yes5){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.saim_bool4").addClass("active_circle");
    }else if(s_top > yes5 && s_top < yes6){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.saim_bool5").addClass("active_circle");
    }else if(s_top > yes6 && s_top < yes7){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.saim_bool6").addClass("active_circle");
    }else if(s_top > yes7 && s_top < yes8){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.saim_bool7").addClass("active_circle");
    }else if(s_top > yes8 && s_top < yes9){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.saim_bool8").addClass("active_circle");
    }else if(s_top > yes9 && s_top < yes10){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.saim_bool9").addClass("active_circle");
    }else if( s_top < yes1){
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.home").addClass("active_circle");
    }else{
        $('.round .ttt ').removeClass("active_circle");
        $(".ttt.contact").addClass("active_circle");
    }
});



var t=0;
var p=$('.ver_org ul').html();
for(var i=0;i<15;i++){
    document.querySelector('.ver_sl ul').innerHTML+=p;
}
var h=$('.ver_hid').outerHeight();

var slider=setInterval(function(){
    t-=h;
    $('.ver_org ul').css("top",t+"px").css("transition","2s");

    if(t<=-h*15){
        t=0;

    }
},5000);



var h1=$('.ver_hid_non').outerHeight();
var n=0;
var p=$('.ver_sl_non ul').html();
for(var i=0;i<15;i++){
    document.querySelector('.ver_hid_non ul').innerHTML+=p;
}

var slider1=setInterval(function(){
    n-=h1;
    $('.ver_hid_non ul').css("top",n+"px").css("transition","2s");
    if(n<=-h1*15){
        n=0;
    }
},5000);



var h2=$('.ver_hid_new').outerHeight();
var l=0;
var p=$('.ver_sl_new ul').html();
for(var i=0;i<15;i++){
    document.querySelector('.ver_sl_new ul').innerHTML+=p;
}

var slider=setInterval(function(){
    l-=h2;
    $('.ver_sl_new ul').css("top",l+"px").css("transition","2s");
    if(l<=-h2*15){
        l=0;
    }
},3000);




//
// $('.round .ttt ').click(function(){
//     var cc=$(this).attr('class');
//     var ss=cc.split(' ');
//     var top=$('#'+ss[0]).offset().top;;
//     $("html, body").animate({
//         scrollTop:top+50
//     }, 1000);
//     $('.round .ttt ').removeClass('active_circle') ;
//     $(this).addClass('active_circle') ;
//     return false;
// });







var vid = document.getElementById("myvideo");
vid.playbackRate = 0.7;

$('.carousel').carousel({
    interval: 10000
})