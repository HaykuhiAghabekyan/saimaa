<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Saimaabeverages - English</title>

	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/cufon.js"></script>
	<script type="text/javascript" src="js/cufon-fonts.js"></script>
	<script type="text/javascript" src="js/cufon-settings.js"></script>
	<script type="text/javascript" src="js/jquery.easing.js"></script>

	<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<script>

$(document).ready(function(e) {
    var obj_datas = new Object();
	obj_datas.doc_width = $(window).width();
	obj_datas.doc_height = $(window).height();
	obj_datas.logo_size = $("#LogoPart").width();
	obj_datas.permission = false;
	$("#LogoPart").hide();
	$("#PerDany").hide();
	$("#FirstPage").hide();
	$("#under_recon_content").hide();
	$("#right_nav").hide();
	$(".abs_value").hide();
	$("#LogoPart").css('left',((obj_datas.doc_width/2)-(obj_datas.logo_size/2)));
	$("#LogoPart").css('top', (obj_datas.doc_height/6));
	$("#PerDany").css('top', (obj_datas.doc_height/2));
	$("#FirstPage").css('top', (obj_datas.doc_height/3));
	$("#LogoPart").fadeIn(3000);
	$("#PerDany div").css('width',(obj_datas.doc_width/4));
	$("#FirstPage div").css('width',(obj_datas.doc_width/4));
	$("#PerDany .left").css('margin-left',(obj_datas.doc_width/10));
	$("#PerDany .right").css('margin-right',(obj_datas.doc_width/10));
	$("#FirstPage .left").css('margin-left',(obj_datas.doc_width/10));
	$("#FirstPage .right").css('margin-right',(obj_datas.doc_width/10));
	$("#FirstPage .left img").css('height', obj_datas.vodka_height);
	$("#FirstPage .left img").css('height',150);
	$("#FirstPage .right img").css('width',250);
	$("#FirstPage .right > img").css('margin-top', 50);
	$(".abs_value").css('width', obj_datas.doc_width);
	$(".abs_value").css('height', (obj_datas.doc_height-85));

	$("#PerDany .Per_ok").click(function(){
		obj_datas.permission = true;
		$("#PerDany").hide();
		$("#FirstPage").fadeIn(500);
		$("#right_nav").fadeIn(500);
	});
	obj_datas.animate_started = false;
	obj_datas.current_frame = 1;
	$(".UnderCon").click(function(){
		$("#UnderCon").fadeOut();
		$("#under_recon_content").css('height',350);
		$("#under_recon_content").css('width', 900);
		$(".UnderCon").fadeIn();
		$("#under_recon_content").fadeIn();
		$(".cursor_next").show();	
	});
	
	$("#right_nav p").click(function(){
		var cur_id = $(this).attr('id');
	});
	
	function ShowNextFrame(){
		obj_datas.current_frame = obj_datas.current_frame+1;
		var prev_frame = "#content"+(obj_datas.current_frame-1);
		var next_frame = "#content"+(obj_datas.current_frame);
		if(obj_datas.current_frame<=6){
			$(prev_frame).hide();
			$(next_frame).css('left', obj_datas.doc_width);
			$(next_frame).animate({'left':0},1000).show();
		}
	}
	$("#under_recon").click(function(){
		obj_datas.animate_started = true;
		$("#content1").hide(500);	
		ShowNextFrame();
	});
	
	if(obj_datas.permission===false)
		$("#PerDany").fadeIn(3000);
	
	//Configuring content2 's elements
	
	$("#content2 img").css('width', (obj_datas.doc_width/3));
	$("#content2 img").css('margin-left',((obj_datas.doc_width/2)-(obj_datas.doc_width/3/2)));	
	$("#content2 img").css('margin-top',(obj_datas.doc_height/5));
	
	$("#content3 .PagePicture").css('height', (obj_datas.doc_height-100));
	$("#content3 .PagePicture").css('margin-left',(100));	

	$("#content4 .PagePicture").css('height', (obj_datas.doc_height-100));
	$("#content4 .PagePicture").css('margin-left',(100));	
	$("#content5 .PagePicture").css('height', (obj_datas.doc_height-100));
	$("#content5 .PagePicture").css('margin-left',(100));	

	$("#content6 .PagePicture").css('height', (obj_datas.doc_height-100));
	$("#content6 .PagePicture").css('margin-left',(100));	
	$(".cursor_next").click(function(){
		ShowNextFrame();	
		if(obj_datas.current_frame>2){
			$("#prev").fadeIn(500).show();
		}
	});
	
});
</script>
<body>
	<div id="TopHeader">
    	<div id="LangPanel">
        	<p>Eng</p> <hr>
            <p><a href="russian.php">Рус</a></p>
        </div>
        
        <div id="right_nav">
        	<p id="history">
            	<img src="images/w512h5121390846454rightcircular512.png" class="cursor_next" id="next">
            </p>
        </div>
    </div>
    
    <div id="content1">
            <div id="LogoPart">
            	<img src="images/logo.png" id="logo">
                <p>PO Box 226 (Valtakatu 2), 53101 LAPPEENRANTA, Finland </p>
            </div>
            
            <div id="PerDany">
            	<div class="left">
                    <p>В соответствии с законодательством , просмотреть<br> сайт можно только по достижении 21 года.</p>
                    <p class="Per_ok">ДА, МНЕ УЖЕ ИСПОЛНИЛСЯ 21 ГОД</p>
                    <p class="Per_fail">НЕТ, МНЕ ЕЩЕ НЕ ИСПОЛНИЛСЯ 21 ГОД </p>
                </div>
                
                <div class="right">
                    <p>According to Legalizations, you must be at least <br>21 years of age to view this webpage.</p>
                    <p class="Per_ok">YES, I AM AT LEAST 21 YEARS OF AGE</p>
                    <p class="Per_fail">NO, I AM NOT YET 21 YEARS OF AGE</p>
                </div>
            </div>
            
            <div id="FirstPage">
            	<div class="left">
                   	<img src="images/saimaa logo.png">
                    <p><a href="http://saimaa-vodka.com" target="_blank">www.saimaa-vodka.com</a></p>
 					<p class="UnderCon">Geography</p>
               </div>
                
                <div class="right">
                	<img src="images/finski_logo.png">
                    <p><a href="#" id="under_recon">www.finsky-vodka.com</a></p>
					<p class="UnderCon">Geography</p>
                    <div id="under_recon_content">
                    <div>
<iframe src="https://mapsengine.google.com/map/embed?mid=zS5fcIR71iXQ.kE-34GNfj7gU&zoom=+18" width="894px" height="342px"></iframe></div>


                    </div>
                </div>
            </div>
            
   </div>
   
   <div id="content2" class="abs_value">
   		<img src="images/finski_logo.png">
        <p>
        	SOFT AS CLOUDS<br>
			PURE AS ICE
		</p>
   </div>

   <div id="content3" class="abs_value">
   		<img src="images/FinskyVodka-SXAL.png" class="PagePicture">
		<span>
        	<h1>Rational Opportunities </h1>
            <ul>
            	<li>For the first time in the markets super attaractive price for Finnish product of premium quality. </li>
            	<li>The product is certified with «Finnish Key» certificate like everything produced in Finland. </li>
               	<li>Use of only natural ingredients in production and the nature’s purest melt water.</li>
               	<li>The symbiosis of European innovative technologies and Finnish classic vodka recipe heritage .</li>
            </ul>
        </span>
   </div>

   <div id="content4" class="abs_value">
   		<img src="images/FinskyVodka-SXAL.png" class="PagePicture">
		<span>
        	<h1>Awards and Accolades</h1>
            <p>Approved with Finnish certificate “Finnish Key” </p>
			<img src="images/sert.png">

        </span>
   </div>

   <div id="content5" class="abs_value">
   		<img src="images/FinskyVodka-SXAL.png" class="PagePicture">
		<span>
        	<h1>TARGET AUDIENCE:</h1>
            <p>20-50 LDA with medium income. Students, young professionals. People that love to hang out during the weekend and at the same time value quality products.
</p>
<p>Active users of social media. Generally their choice depends on external feedbacks and opinions.</p>	

        </span>
   </div>

   <div id="content6" class="abs_value">
   		<img src="images/FinskyVodka-SXAL.png" class="PagePicture">
		<span>
        	<h1>The website is under construction and will be presented to you soon</h1>
        </span>
   </div>

</body>
</html>