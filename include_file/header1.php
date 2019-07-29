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
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/media.css">
    <link rel="icon" type="image/png" href="images/fav5.png">

</head>
<body class="<?php echo $lang; ?>">
	<header>

			<div class="container1">
				<div class="nav ">
					<div class="col-md-2 col-xs-4 logo">
						<div>
							<a href="home.php"><img src="images/LOGO.png" alt="saimaa" ></a>
						</div>
					</div>
					<div class="col-md-10 col-xs-8 menu">
						<ul >
							<li class="SAIMAA "><a href="home.php"><?php echo $about; ?></a></li>
							<li  class="PRODUCT"><a href="product.php"><?php echo $prod; ?></a></li>
							<li class="NEWS"><a href="news.php"><?php echo $news; ?></a></li>
							<li class="CONTACT"><a href="contact.php"><?php echo $cont; ?></a></li>
						</ul>
						<div class="language">
						<p class="bar">
							<span class="bar1"></span>
		                    <span class="bar2"></span>
		                    <span class="bar3"></span>
						</p>
	                        <!-- <span class="lang" id="ru"><?php echo $ru; ?></span>
	                        <span class="lang-slash">/</span>
	                        <span class="lang active" id="en"><?php echo $en; ?></span> -->
	                    </div>
					</div>
						<div class=" menu_hid ">
							<ul >
							<li class="SAIMAA "><a href="home.php"><?php echo $about; ?></a></li>
							<li  class="PRODUCT"><a href="product.php"><?php echo $prod; ?></a></li>
							<li class="NEWS"><a href="news.php"><?php echo $news; ?></a></li>
							<li class="CONTACT"><a href="contact.php"><?php echo $cont; ?></a></li>
							</ul>
					</div>
				</div>
			</div>
		
		
	
	</header>
	<div class="clearfix"></div>