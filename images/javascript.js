pulse();
$('.bar').click(function(){
    $(".menu_hid").slideToggle(500)
})
$('.hamburg.open').click(function(){
    $(".menu_saim").addClass('act_menu').animate({'right':'0%'});
})
$('.hamburg.clos').click(function(){
    $(".menu_saim").animate({'right':'-33%'},300);
    setTimeout(function () {
        $(".menu_saim").removeClass('act_menu');
    },1000)
})

$('.more').click(function(){
	$(".about_hid").slideToggle(500);
})

$('.info').click(function(){
	$(".prod_info").slideDown(500);
})
$('.close_info').click(function(){
	$(".prod_info").slideUp(500);
})

$('.lang').click(function(){
	var lang = $(this).attr('id');
	$.post('include/incl.php',{lang:lang},function(data){
	    location.reload();
    })
})
$('.to_top').mouseover(function(){$(this).addClass('hover')});
$('.to_top').mouseout(function(){$(this).removeClass('hover')});
var interval;
$(".to_top").hover(function(){
    
  interval=setInterval(to_top,400);
},function(){
    clearInterval(interval);
      $(".to_top img").css({'transform':'rotate(0deg)',
        'transform-origin':'50% 70%'});
} )
 function to_top() {
    $(".to_top img").css({'transform':'rotate(20deg)',
        'transform-origin':'50% 70%'});
    setTimeout(function(){
        $(".to_top img").css({'transform':'rotate(-20deg)',
        'transform-origin':'50% 70%'});
    },200)
};

    $('.to_top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
setInterval(function(){
    $('.ham1').animate({width:'52%'});
    $('.ham3').animate({width:'100%'});
    setTimeout(function(){
    $('.ham1').animate({width:'100%'});
    $('.ham3').animate({width:'52%'});
},1500)
},3000)

    $('.filter_type button').click(function() {
        var pr_name = $(this).attr('id');
        var act_filter = $('.filter_type button.active').attr('id');
        $('.' + act_filter).css({'transform': 'rotateY(90deg)'});
        setTimeout(function () {
            $('.' + pr_name).css({'display':'block'})
            $('.' + act_filter).css({'display':'none'});

            setTimeout(function () {
                $('.' + pr_name).css({'transform': 'rotateY(0deg)'})

        }, 300);
        },800)

        $('.filter_type  button').removeClass('active');
        $(this).addClass('active');
    })


        $('.filter_futur button').click(function(){
            var pr_nam=$(this).attr('id');
            var act_filt=$('.filter_futur button.active').attr('id');
            $('.'+act_filt).css({'transform':'rotateY(90deg)'});
            $('.' + pr_nam).css({'display':'block'})
            setTimeout(function(){
                $('.'+ pr_nam).css({'transform':'rotateY(0deg)'})
                $('.' + act_filt).css({'display':'none'});
            },00)

     $('.filter_futur button').removeClass('active');
     $(this).addClass('active');
  })


setInterval(pulse,5500)


function pulse(){
   
    $('.pulse1').css({'transform':'scale(3.1)',opacity:'0',transition:'5.4s'})
    setTimeout(function(){
        $('.pulse2').css({'transform':'scale(2.4)',opacity:'0',transition:'5s'})
    },500);
     setTimeout(function(){
        $('.pulse3').css({'transform':'scale(1.7)',opacity:'0',transition:'4.5s'})
    },1000);
    setTimeout(function(){
        $('.pulse div').css({'transform':'scale(1)',opacity:'1',transition:'0s'})
    },5400);

 }
$('.play').click(function () {
    $('.video_popUps').fadeIn(500);
})
$('.close_video').click(function () {
    $('.video_popUps').fadeOut(500);
})



















//
// $('.header_bg').on('mouseenter', '#wrapper', function(){$(this).addClass('hover')})
// $('.header_bg').on('mouseleave', '#wrapper', function(){$(this).removeClass('hover')})
//
// if(!$("#wrapper").is('.hover')) {
//     $(function () {
//         var w = $("#carousel>div").outerWidth();
//         var _center = {
//             width: 1.5 * w,
//             height: 3*w,
//             marginLeft: 0,
//             marginTop: 0,
//             marginRight: 0
//         };
//         var _left = {
//             width: w,
//             height: 300,
//             marginLeft: 0,
//             marginTop: 100,
//             marginRight: -150
//         };
//         var _right = {
//             width: w,
//             height: 300,
//             marginLeft: -150,
//             marginTop: 100,
//             marginRight: 400
//         };
//         var _outLeft = {
//             width: w / 2,
//             height: 100,
//             marginLeft: 150,
//             marginTop: 200,
//             marginRight: 0
//         };
//         var _outRight = {
//             width: w / 2,
//             height: 100,
//             marginLeft: -150,
//             marginTop: 200,
//             marginRight: -50
//         };
//         $('#carousel').carouFredSel({
//             width: 3 * w,
//             height: 3*w,
//             align: false,
//             items: {
//                 visible: 3,
//                 width: w
//             },
//             scroll: {
//                 items: 1,
//                 duration: 800,
//                 onBefore: function (data) {
//                     data.items.old.eq(0).animate(_outLeft);
//                     data.items.visible.eq(0).animate(_left);
//                     data.items.visible.eq(1).animate(_center);
//                     data.items.visible.eq(2).animate(_right).css({zIndex: 1});
//                     data.items.visible.eq(2).next().css(_outRight).css({zIndex: 0});
//
//                     setTimeout(function () {
//                         data.items.old.eq(0).css({zIndex: 1});
//                         data.items.visible.eq(0).css({zIndex: 2});
//                         data.items.visible.eq(1).css({zIndex: 3});
//                         data.items.visible.eq(2).css({zIndex: 2});
//                     }, 200);
//                 }
//             }
//         });
//         $('#carousel').children().eq(0).css(_left).css({zIndex: 2});
//         $('#carousel').children().eq(1).css(_center).css({zIndex: 3});
//         $('#carousel').children().eq(2).css(_right).css({zIndex: 2});
//         $('#carousel').children().eq(3).css(_outRight).css({zIndex: 1});
//
//     })
// }


