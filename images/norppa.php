<?php
session_start();
if(!isset($_SESSION['lang'])){
    $lang='en';

}else {
    $lang=$_SESSION['lang'];
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
    <title>NORPPA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/media.css">
    <link rel="icon" type="image/png" href="images/fav5.png">

</head>
<body class=" norppa <?php echo $lang; ?>">
<header>
    <div class="norpppa_logo">
        <div >
            <a href="home.php">
                <img src="images/norpraa.png" alt='norpppa'>
            </a>

        </div>
      <!--   <div class="language">
                    
                     <span class="lang" id="ru"><?php echo $ru; ?></span>
                    <span class="lang-slash">/</span>
                    <span class="lang active" id="en"><?php echo $en; ?></span>
                </div> -->
    </div>
    <div class="nor_cont">
        <div class="nor_log">
            <img src="images/norpraa.png" alt='norpppa'>
            <h1><?php echo $nor1; ?></h1>
        </div>
        <p><?php echo $nor2; ?></p>
        <p><?php echo $nor3; ?></p>
        <p><?php echo $nor4; ?></p>
        <p><?php echo $nor5; ?></p>
          <a href="home.php"><?php echo $back; ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
</header>
</body>
</html>
