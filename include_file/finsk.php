<?php
session_start();
if(!isset($_SESSION['lang'])){
    $lang='en';

}else {
    $lang=$_SESSION['lang'];
}
if(isset($_COOKIE['remember']) && $_COOKIE['remember']=='yes'){
    $_SESSION['age']='true';
}
if(!isset($_SESSION['age']) || $_SESSION['age']=='false'){
    header('Location:welcome.php');
}
require_once ('include/'.$lang.'.php');
require_once "admin/connect.php";


//print_r($row['title_'.$_SESSION['lang']]);
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <title>FINSKY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/media.css">
    <link rel="icon" type="image/png" href="images/fav5.png">
</head>
<body class="finsk finsk<?php echo $lang; ?>">
<header id="home">
<div class="bg-video">
    <video autoplay loop muted id="myvideo" >
      <source src="video/finsky.mp4" type="video/mp4" >
    </video>
</div>
    <div class="container9 saimaa_page">
        <div class=" ">
            <div class="col-md-2 col-xs-4 logo">
                <div>
                    <a><img src="images/Finsky logo.png" alt="saimaa" ></a>
                </div>
            </div>
            <div class="col-md-10 col-xs-8 ">

              <!--   <div class="language">
                    
                     <span class="lang" id="ru"><?php echo $ru; ?></span>
                    <span class="lang-slash">/</span>
                    <span class="lang active" id="en"><?php echo $en; ?></span>
                </div> -->
                <p class="hamburg open">
                    <span class="ham1"></span>
                    <span class="ham2"></span>
                    <span class="ham3"></span>
                </p>
            
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="saima_title">
            <div class="prod_logo">
                <img src="images/Finsky logo.png" alt="logo">
            </div>

            <h4><?php echo $ft2; ?></h4>
            <p><?php echo $ft1; ?></p>
            <div class="play">
                <img src="images/play.png" alt="play">
            </div>

            <a href="home.php"><?php echo $back; ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            <h5 class="prod_type"></h5>
        

        </div>
    </div>
    <div class="round">
        <div class="shape"></div>
        
        <div class="home ttt active_circle">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $home; ?></p>
            </div>
        </div>
        <div class="f_bool1 ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $competitive; ?></p>
            </div>
        </div>
        <div class="f_bool2 ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $target; ?></p>
            </div>
        </div>
      
        <div class="f_bool3 ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $awards; ?></p>
            </div>
        </div> 
        <div class="f_bool4 ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $conclusion; ?></p>
            </div>
        </div> 
        <div class="contact ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $cont; ?></p>
            </div>
        </div>
        
        
 
    </div>
<div class=" menu_saim ">
    <p class="hamburg clos">
        <span class="ham1"></span>
        <span class="ham2"></span>
        <span class="ham3"></span>
    </p>
    <ul >
        <li><a href="#home"><?php echo $home; ?></a></li>
        <li><a href="#competitive"> <?php echo $competitive; ?></a></li>
        <li><a href="#target"><?php echo $target; ?></a></li>
        <li ><a href="#awards"><?php echo $awards; ?></a></li>
        <li ><a href="#conclusion"><?php echo $conclusion; ?></a></li>
        <li ><a href="#contact"><?php echo $cont; ?></a></li>
    </ul>
    <a href="home.php"><?php echo $back; ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

</div>
</header>

<section class="video_popUps">
      <div class="container"> 
        <p class="close_video">
        <i class="fa fa-times" aria-hidden="true"></i>
    </p>
          <div class="you_tube">
  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/paxHamEVgo4" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    
    </div>
   
      </div>
    
</section>
<section class="wow fadeInUp " id="f_bool1">
    <div class="container3">
        <div class="our_story comp">
            <h1><?php echo $competitive; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>
        </div>
    </div>
</section>

<section id="competitive">
    <div class="compet">
       <div class="com_logo">
           <img src="images/f_logo1.png" alt="saimaa">
       </div> 
    </div>




<div id="myCarousel" class="carousel slide slider" data-ride="carousel">

    <div class="carousel-inner">
      <div class="item active slid">
         <div class="vod_bottle">
            <img src="images/f_bottle.png" alt="finsky_bottle">
        </div>
            <div class="intrin_org  animated fadeInRight">
                <h1><?php echo $fint1; ?></h1>
                <h4><?php echo $fint2; ?></h4>
                <p><?php echo $fint3; ?></p>
                <p><?php echo $fint4; ?></p>
                <p><?php echo $fint5; ?> </p>
                <p><?php echo $fint6; ?></p>
                
            </div>
      </div>
<div class="clearfix"></div>
      <div class="item">
         <div class="vod_bottle bott_hot">
                <img src="images/f_hot.png" alt="finsky_bottle">
            </div>
            <div class="intrin_org bott_hot1 animated fadeInRight">
                <h4><?php echo $fint7; ?></h4>
                
            </div>
      </div>
    
 <div class="arrow">
            <p class="prev_arrow"><a class="left " href="#myCarousel" data-slide="prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a> </p>
            <p class="next_arrow"><a class="right " href="#myCarousel" data-slide="next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
        </div>
        </div>
       
    </div>
</section>

<section class="section2 wow fadeInUp "  id="f_bool2">
    <div class="container3">
        <div class="our_story targ">
            <h1><?php echo $target; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>
        </div>
    </div>
</section>

<section id="target">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-5 txt_rt wow fadeInLeft">
                <div class="target_img3">
                </div>
                <div class="clearfix"></div>
                <h5><?php echo $ftarg1; ?></h5>
                <p><?php echo $ftarg2; ?></p>
            </div>
            <div class="col-md-4 col-xs-2 txt_c gold_f wow fadeInUp">
         
             <img src="images/f_gold.png" alt="gold">
            </div>
            <div class="col-md-4 col-xs-5 txt_l wow fadeInRight">
                <div class="target_img4"></div>
                <div class="clearfix"></div>
                <h5><?php echo $ftarg3; ?></h5>
                <p><?php echo $ftarg4; ?></p>
            </div>
        </div>
    </div>
</section>







<section class="section2 wow fadeInUp "  id="f_bool3">
    <div class="container3">
        <div class="our_story">
            <h1><?php echo $awards; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="awards">
    <div class="container">
        <h1 class="wow fadeInUp"><?php echo $fawards1; ?></h1>
        <h1 class="wow fadeInUp"><?php echo $fawards2; ?></h1>
        <p class="wow fadeInUp award_p"><?php echo $fawards3; ?></p>
        <div class="col-sm-4">
        
            <div class="awards_img aw_img1 wow fadeInLeft">
             </div>
            <p class=" wow fadeInLeft"><?php echo $fawards4; ?></p>  
           
        </div>   
        <div class="col-sm-4 sec_awar ">           
            <div class="awards_img wow fadeInUp">
                <img src="images/img32.png" alt="">
             </div>
                <p><i class="fa fa-circle" aria-hidden="true"></i><?php echo $fawards5; ?></p>
                <p><i class="fa fa-circle" aria-hidden="true"></i><?php echo $fawards6; ?></p>
                <p><i class="fa fa-circle" aria-hidden="true"></i><?php echo $fawards7; ?></p>
        </div>  
         <div class="col-sm-4 sec_awar ">           
            <div class="awards_img aw_img2 wow fadeInRight">
             </div>  
             <p class="wow fadeInRight"><?php echo $fawards8; ?></p>
            
        </div>
    </div>
</section> 

<section class="section2 wow fadeInUp "  id="f_bool4">
    <div class="container3">
        <div class="our_story targ">
            <h1><?php echo $conclusion; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>
        </div>
    </div>
</section>

<section id="conclusion">
    <div class="container">
        <p class="wow fadeInUp concl"><?php echo $fconc1; ?></p>
        <p class="wow fadeInUp concl"><?php echo $fconc2; ?></p>
        <p class="wow fadeInUp concl"> <?php echo $fconc3; ?></p>
        <div class="row">
            <div class="col-xs-4 txt_rt wow fadeInLeft">
                <div class="target_img5"></div>
                <div class="clearfix"></div>
                <p><?php echo $fconc4; ?></p>
            </div>
            <div class="col-xs-4 txt_c wow fadeInUp">
             <img src="images/img41.png" alt="gold">
                <p id="contact"></p>
            </div>
            <div class="col-xs-4 txt_l wow fadeInRight">
                <div class="target_img6"></div>
                <div class="clearfix"></div>
              
                <p class="stud"><?php echo $fconc5; ?></p>
            </div>
        </div>
    </div>
</section>

<div class="to_top">
    <img src="images/to_top.png" alt="">
</div>


