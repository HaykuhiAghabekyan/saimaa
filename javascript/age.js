
$('.send_age').click(function(){
var dd=$('.day').val();
var mm=$('.mont').val();
var yy=$('.year').val();
   if((dd>0 && dd<=31) && (mm>0 && mm<=12) && (yy>1900)){
         document.querySelector('.checkAge').submit();
    }else{
   $('.header_r input[type="text"]').css('border','1px solid red');
    } 

})