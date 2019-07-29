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
    <title>SAIMAA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/media.css">
    <link rel="icon" type="image/png" href="images/fav5.png">
</head>
<body class=" saima <?php echo $lang; ?>" >
<header class="saim" id="home">
    <div class="bg-video">
        <video autoplay loop id="myvideo" muted>
            <source src="video/saimaa.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container9 saimaa_page">
        <div class=" ">
            <div class="col-md-2 col-xs-4 logo">
                <div>
                    <a href="home.php"><img src="images/LOGO.png" alt="saimaa" ></a>
                </div>
            </div>
            <div class="col-md-10 col-xs-8 ">

                <!--    <div class="language">

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
                <img src="images/LOGO.png" alt="logo">
            </div>

            <h4><?php echo $st2; ?></h4>
            <p><?php echo $st1; ?></p>
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
            <a class=""><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $home; ?></p>
            </div>
        </div>
        <div class="saim_bool1 ttt ">
            <a class=""><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $or_p; ?></p>
            </div>
        </div>
        <div class="saim_bool2 ttt">
            <a ><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $nor_p; ?></p>
            </div>
        </div>
        <div class="saim_bool10 ttt">
            <a ><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $new_p; ?></p>
            </div>
        </div>
        <div class="saim_bool3 ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $farm; ?></p>
            </div>
        </div>
        <div class="saim_bool4 ttt">
            <a ><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $spirit; ?></p>
            </div>
        </div>
        <div class="saim_bool5 ttt">
            <a ><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $water; ?></p>
            </div>
        </div>
        <div class="saim_bool6 ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $target; ?></p>
            </div>
        </div>
        <div class="saim_bool7 ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $competitive; ?></p>
            </div>
        </div>
        <div class="saim_bool8 ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $distribution; ?></p>
            </div>
        </div>
        <div class="saim_bool9 ttt">
            <a><i class="fa fa-circle" aria-hidden="true"></i></a>
            <div class="hhh">
                <p></p>
                <p><?php echo $awards; ?></p>
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
    <div class="menu_saim ">
        <p class="hamburg clos">
            <span class="ham1"></span>
            <span class="ham2"></span>
            <span class="ham3"></span>
        </p>
        <ul >
            <li><a href="#home"><?php echo $home; ?></a></li>
            <li><a href="#saim_org_img"><?php echo $saima_prod; ?></a></li>
            <li><a href="#saim_non_img"><?php echo $saima_non; ?></a></li>
            <li><a href="#saim_new"><?php echo $new_p; ?></a></li>
            <li><a href="#farming"><?php echo $farm; ?></a></li>
            <li><a href="#spirit"><?php echo $spirit; ?></a></li>
            <li><a href="#water"><?php echo $water; ?></a></li>
            <li><a href="#target"><?php echo $target; ?></a></li>
            <li><a href="#competitive"><?php echo $competitive; ?></a></li>
            <li><a href="#distribution"><?php echo $distribution; ?></a></li>
            <li><a href="#awards"><?php echo $awards; ?></a></li>
            <li><a href="#contact"><?php echo $cont; ?></a></li>
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
            <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Sa5DwM6hsPw"  allowfullscreen></iframe>  -->

        </div>

    </div>

</section>

<section class="section2 wow fadeInUp saim" id="saim_bool1">
    <div class="container3">
        <div class="our_story ">
            <h1><?php echo $saima_prod; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>


        </div>
    </div>
</section>


<section id="saim_org_img">
    <div class="saima_org">
        <div class="col-xs-6 first_org ">
            <div class="bg_saima">
                <div>
                    <img src="images/img11.png" alt="saima" class="wow fadeInLeft">
                    <img src="images/img12.png" alt="saima" class="wow fadeInLeft">
                    <img src="images/img13.png" alt="saima" class="wow fadeInLeft">
                    <img src="images/img14.png" alt="saima" class="wow fadeInLeft">
                    <img src="images/img15.png" alt="saima" class="wow fadeInLeft">
                </div>

            </div>

        </div>
        <div class="col-xs-6 round_bg ">
            <div class="pulse">
                <div class="pulse4"></div>
                <div class="pulse3"></div>
                <div class="pulse2"></div>
                <div class="pulse1"></div>
            </div>
            <div class="ver_sl">
                <div class="ver_hid ver_org ">
                    <ul>
                        <li>
                            <div  class=" sect1 sect">
                                <div>
                                    <div class="sect1_1">
                                        <img src="images/saima_organic.png" alt="saimaa" class="img-responsive">
                                    </div>

                                </div>
                                <p><?php echo $org; ?></p>
                            </div>
                        </li>
                        <li>

                            <div  class="sect2 sect">
                                <div>
                                    <div class="sect1_1">
                                        <img src="images/saima-nordic.png" alt="saimaa">
                                    </div>
                                </div>
                                <p> <?php echo $nord; ?></p>
                            </div>
                        </li>
                        <li>
                            <div  class=" sect3 sect">
                                <div>
                                    <div class="sect1_1">
                                        <img src="images/saimaa_black.png" alt="saimaa">
                                    </div>
                                </div>
                                <p ><?php echo $cur; ?> </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


        </div>
    </div>

</section>

<section class="section2 wow fadeInUp saim"  id="saim_bool2">
    <div class="container3">
        <div class="our_story  non_org">
            <h1><?php echo $saima_non; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>


        </div>
    </div>
</section>


<section id="saim_non_img">
    <div class="saima_org">

        <div class="col-xs-6 round_bg ">
            <div class="pulse">
                <div class="pulse4"></div>
                <div class="pulse3"></div>
                <div class="pulse2"></div>
                <div class="pulse1"></div>
            </div>

            <div class="ver_sl ver_sl_non ">
                <div class=" ver_hid_non">
                    <ul>
                        <li>
                            <div  class=" sect1 sect">
                                <div>
                                    <div class="sect1_1">
                                        <img src="images/saima_clasic.png" alt="saimaa">
                                    </div>

                                </div>
                                <p><?php echo $classic; ?></p>
                            </div>
                        </li>
                        <li>

                            <div  class="sect2 sect">
                                <div>
                                    <div class="sect1_1">
                                        <img src="images/hot.png" alt="saimaa">
                                    </div>
                                </div>
                                <p > <?php echo $hotice; ?></p>
                            </div>
                        </li>


                    </ul>


                </div>


            </div>

        </div>
        <div class="col-xs-6 first_org">
            <div class="bg_saima">
                <div>
                    <img src="images/img11.png" alt="saima" class="wow fadeInRight">
                    <img src="images/img12.png" alt="saima" class="wow fadeInRight ">
                    <img src="images/img13.png" alt="saima" class="wow fadeInRight">
                    <img src="images/img14.png" alt="saima" class="wow fadeInRight">
                    <img src="images/img15.png" alt="saima" class="wow fadeInRight">
                </div>

            </div>

        </div>
    </div>
</section>

<section class="section2 wow fadeInUp saim"  id="saim_bool10">
    <div class="container3">
        <div class="our_story ">
            <h1><?php echo $new_p; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>


        </div>
    </div>
</section>
<section id="saim_new">
    <div class="saima_org">
        <div class="col-xs-6 first_org ">
            <div class="bg_saima bg_saima_new">
                <div>
                    <img src="images/88.png" alt="saima" class="wow fadeInLeft">
                    <img src="images/99.png" alt="saima" class="wow fadeInLeft">
                    <img src="images/100.png" alt="saima" class="wow fadeInLeft">
                    <img src="images/101.png" alt="saima" class="wow fadeInLeft">
                    <img src="images/102.png" alt="saima" class="wow fadeInLeft">
                </div>

            </div>

        </div>
        <div class="col-xs-6 round_bg ">
            <div class="pulse">
                <div class="pulse4"></div>
                <div class="pulse3"></div>
                <div class="pulse2"></div>
                <div class="pulse1"></div>
            </div>



            <div class="ver_sl ver_sl_new">
                <div class="ver_hid ver_hid_new">
                    <ul>
                        <li>
                            <div  class="sect">
                                <div>
                                    <div class="sect1_1">
                                        <img src="images/section_1.png" alt="saimaa" class="img-responsive">
                                    </div>

                                </div>
                                <p><?php echo $silver; ?></p>
                            </div>
                        </li>
                        <li>

                            <div  class="sect">
                                <div>
                                    <div class="sect1_1 sect1-5">
                                        <img src="images/section_2.png" alt="saimaa">
                                    </div>
                                </div>
                                <p><?php echo $plat; ?> </p>
                            </div>
                        </li>
                        <li>
                            <div  class="sect">
                                <div>
                                    <div class="sect1_1">
                                        <img src="images/section_3.png" alt="saimaa">
                                    </div>
                                </div>
                                <p ><?php echo $s_gold; ?> </p>
                            </div>
                        </li>

                        <li>
                            <div  class="sect">
                                <div>
                                    <div class="sect1_1">
                                        <img src="images/saimaa-night.png" alt="saimaa">
                                    </div>
                                </div>
                                <p ><?php echo $black5; ?> </p>
                            </div>
                        </li>
                    </ul>


                    </ul>


                </div>

            </div>


        </div>
    </div>

</section>

<section class="section2 wow fadeInUp saim"  id="saim_bool3">
    <div class="container3">
        <div class="our_story ">
            <h1><?php echo $farm; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>


        </div>
    </div>
</section>
<section id="farming">
    <div class="col-sm-6 far_bg wow fadeInLeft">
    </div>
    <div class="col-sm-6 f_txt">
        <div class="far_sec  wow fadeInRight">
            <div class="col-sm-3 ">
                <div class="farm_img">
                    <img src="images/img5.png" alt="image">
                </div>
            </div>
            <div class="col-sm-9 ">
                <h4><?php echo $farm1; ?></h4>
                <p><?php echo $farm2; ?></p>
                <p><?php echo $farm3; ?></p>
                <p><?php echo $farm4; ?></p>
                <p><?php echo $farm5; ?></p>
                <p><?php echo $farm6; ?></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="far_sec  wow fadeInRight">
            <div class="col-sm-3">
                <div class="farm_img">
                    <img src="images/img6.png" alt="image">
                </div>
            </div>
            <div class="col-sm-9">
                <h4><?php echo $farm7; ?></h4>
                <p><?php echo $farm8; ?></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="far_sec  wow fadeInRight">
            <div class="col-sm-3">
                <div class="farm_img">
                    <img src="images/img7.png" alt="image">
                </div>
            </div>
            <div class="col-sm-9 ">
                <h4><?php echo $farm9; ?></h4>
                <p><?php echo $farm10; ?></p>
                <p><?php echo $farm11; ?></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="far_sec  wow fadeInRight">
            <div class="col-sm-3 ">
                <div class="farm_img">
                    <img src="images/img8.png" alt="image">
                </div>
            </div>
            <div class="col-sm-9">
                <h4><?php echo $farm12; ?></h4>
                <p><?php echo $farm13; ?></p>
                <p><?php echo $farm14; ?></p>
            </div>
        </div>
    </div>
</section>


<section class="section2 wow fadeInUp saim"  id="saim_bool4">
    <div class="container3">
        <div class="our_story ">
            <h1><?php echo $spirit; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>


        </div>
    </div>
</section>



<section id="spirit">
    <div class="col-sm-6 spirit_bg wow fadeInRight">
    </div>
    <div class="clearfix1"></div>
    <div class="col-sm-6 f_txt ">
        <div class="far_sec wow fadeInLeft">
            <div class="col-sm-3">
                <div class="farm_img">
                    <img src="images/img16.png" alt="image">
                </div>
            </div>
            <div class="col-sm-9">
                <h4><?php echo $spirit1; ?></h4>
                <p><?php echo $spirit2; ?></p>
                <p><?php echo $spirit3; ?></p>
                <p><?php echo $spirit4; ?></p>
                <p><?php echo $spirit5; ?></p>
                <p><?php echo $spirit6; ?></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="far_sec wow fadeInLeft">
            <div class="col-sm-3">
                <div class="farm_img">
                    <img src="images/img17.png" alt="image">
                </div>
            </div>
            <div class="col-sm-9">
                <h4><?php echo $spirit7; ?></h4>
                <p><?php echo $spirit8; ?></p>
            </div>
        </div>


    </div>

</section>

<section class="section2 wow fadeInUp saim"  id="saim_bool5">
    <div class="container3">
        <div class="our_story ">
            <h1><?php echo $water; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>


        </div>
    </div>
</section>

<section id="water" >
    <div class="col-sm-6 water_bg  wow fadeInLeft">
    </div>
    <div class="col-sm-6 f_txt ">
        <div class="far_sec  wow fadeInRight">
            <div class="col-sm-3">
                <div class="farm_img">
                    <img src="images/img19.png" alt="image">
                </div>
            </div>
            <div class="col-sm-9">
                <h4><?php echo $water1; ?></h4>
                <p><?php echo $water2; ?></p>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="far_sec  wow fadeInRight">
            <div class="col-sm-3">
                <div class="farm_img">
                    <img src="images/img20.png" alt="image">
                </div>
            </div>
            <div class="col-sm-9">
                <h4><?php echo $water3; ?></h4>
                <p><?php echo $water4; ?></p>
            </div>
        </div>

    </div>
</section>


<section class="section2 wow fadeInUp " id="saim_bool6">
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
            <div class="col-xs-4 txt_rt wow fadeInLeft">
                <div class="target_img1"></div>
                <div class="clearfix"></div>
                <h5><?php echo $target1; ?></h5>
                <p><?php echo $target2; ?></p>
            </div>
            <div class="col-xs-4 txt_c wow fadeInUp">
                <h3><?php echo $target3; ?></h3>
                <p><?php echo $target4; ?></p>
                <h6><?php echo $target5; ?></h6>
            </div>
            <div class="col-xs-4 txt_l wow fadeInRight">
                <div class="target_img2"></div>
                <div class="clearfix"></div>
                <h5><?php echo $target6; ?></h5>
                <p><?php echo $target7; ?></p>
            </div>
        </div>
    </div>
</section>


<section class="section2 wow fadeInUp "  id="saim_bool7">
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
            <img src="images/img23.png" alt="saimaa">
        </div>
    </div>
    <div id="myCarousel" class="carousel slide slider" data-ride="carousel">

        <div class="carousel-inner">
            <div class="item active slid">
                <div class="vod_bottle">
                    <img src="images/img24.png" alt="saimaa_bottle">
                </div>
                <div class="intrin_org animated fadeInRight">
                    <h4><?php echo $comp1; ?></h4>
                    <p><?php echo $comp2; ?></p>
                    <p><?php echo $comp3; ?><br>
                        <?php echo $comp4; ?>
                    </p>
                    <p><?php echo $comp5; ?></p>
                    <p><?php echo $comp6; ?></p>
                    <p><?php echo $comp7; ?></p>
                    <p><?php echo $comp8; ?></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="item slid">
                <div class="vod_bottle">
                    <img src="images/hot_sl.png" alt="saimaa_bottle">
                </div>
                <div class="intrin_org org_hot animated fadeInRight"">
                <h4><?php echo $comp10; ?></h4>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="item slid org_cool">
            <div class="vod_bottle">
                <img src="images/cool_sl.png" alt="saimaa_bottle">
            </div>
            <div class="intrin_org animated org_hot fadeInRight">
                <h4><?php echo $comp11; ?></h4>

            </div>
        </div>

    </div>
    <div class="arrow">
        <p class="prev_arrow"><a class="left " href="#myCarousel" data-slide="prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a> </p>
        <p class="next_arrow"><a class="right " href="#myCarousel" data-slide="next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
    </div>
    </div>
</section>

<section class="section2 wow fadeInUp "  id="saim_bool8">
    <div class="container3">
        <div class="our_story">
            <h1><?php echo $distribution; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="distribution">
    <div class="container">
        <div class="col-xs-6 dis_img">
            <div>
                <div class="dis_img1  wow fadeInLeft">
                    <img src="images/img26.png" alt="">
                </div>
                <div class="dis_img2 wow fadeInLeft">
                    <img src="images/img27.png" alt="">
                </div>
            </div>

            <div>
                <div class="dis_img3 wow fadeInLeft">
                    <img src="images/img28.png" alt="">
                </div>
                <div class="dis_img4 wow fadeInLeft">
                    <img src="images/img29.png" alt="">
                </div>
            </div>

        </div>
        <div class="col-xs-6 tradee">
            <div class="trade  wow fadeInRight">
                <h3><?php echo $trade1; ?></h3>
                <p><span><?php echo $trade2; ?></span><?php echo $trade3; ?></p>
                <p><span><?php echo $trade4; ?></span><?php echo $trade5; ?></p>
            </div>
            <div class="trade wow fadeInRight">
                <h3><?php echo $trade6; ?></h3>
                <p><span><?php echo $trade7; ?></span><?php echo $trade8; ?></p>
                <p><span><?php echo $trade9; ?></p>
                <p><span><?php echo $trade10; ?></span><?php echo $trade11; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="section2 wow fadeInUp " id="saim_bool9">
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
        <h1 class="wow fadeInUp"><?php echo $awards1; ?></h1>
        <h1 class="wow fadeInUp"><?php echo $awards2; ?></h1>
        <h1 class="wow fadeInUp"><?php echo $awards3; ?></h1>
        <div class="col-sm-7">
            <h3 class=" wow fadeInLeft"><?php echo $awards4; ?></h3>
            <h3 class=" wow fadeInLeft"><?php echo $awards5; ?></h3>
            <h3 class=" wow fadeInLeft"><?php echo $awards6; ?></h3>
            <h3 class=" wow fadeInLeft"><?php echo $awards7; ?></h3>
            <div class="awards_img wow fadeInLeft">
                <img src="images/img31.png" alt="">
            </div>
            <p class=" wow fadeInLeft"><?php echo $awards8; ?></p>

        </div>
        <div class="col-sm-5 sec_awar ">
            <h3 class="wow fadeInRight"><?php echo $awards9; ?> </h3>

            <div class="awards_img wow fadeInRight">
                <img src="images/img32.png" alt="">
            </div>
            <p class="wow fadeInRight"><?php echo $awards10; ?></p>
        </div>
    </div>

    <p id="contact"></p>
</section>

<div class="to_top">
    <img src="images/to_tops.png" alt="" >
</div>



<p id="contact"></p>