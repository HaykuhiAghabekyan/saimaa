<?php
session_start();
if(!isset($_SESSION['lang'])){
    $lang='en';

}else {
    $lang=$_SESSION['lang'];
}
require_once ('include/'.$lang.'.php');
require_once "admin/connect.php";


//print_r($row['title_'.$_SESSION['lang']]);
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <title>WELCOME SAIMAA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="icon" type="image/png" href="images/fav5.png">
    <link rel="stylesheet" type="text/css" href="style/media.css">

</head>
<body class=" first_page <?php echo $lang; ?>">
<header> 
<!--  <div class="firs_logo">
         <a href="">
             <img src="images/logo.png" alt="">
         </a>
  </div> -->
    <div class="header_l">
      
    </div>
    <div class="header_r">
      <!--   <div class="language">
                     <span class="lang" id="ru"><?php echo $ru; ?></span>
                    <span class="lang-slash">/</span>
                    <span class="lang active" id="en"><?php echo $en; ?></span>
                </div> -->
        <h1><?php echo $wel1; ?></h1>
        <p><?php echo $wel2; ?></p>
        <p></p>
        <form action="admin/age.php" method="post" class="checkAge">
            <input type="text" name="mont" placeholder="<?php echo $wel7; ?>" class="mont">
            <input type="text" name="day" placeholder="<?php echo $wel8; ?>" class="day">
            <input type="text" name="year" placeholder="<?php echo $wel9; ?>"  class="year">
            <div class="clearfix"></div>
            <button class="send_age" name="send_age" type="button"><?php echo $wel3; ?></button>
            <div class="clearfix"></div>
            <input type="checkbox" name="check" id="check">
            <label for="check"><?php echo $wel4; ?></label>

            <h2 class="animated puls infinite"><?php echo $wel5; ?></h2>
        </form>
        <p class="copy"><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo $wel6; ?></p>
    </div>
</header>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="javascript/age.js"></script>
<?php
if(isset($_SESSION['age']) && $_SESSION['age']=='false'){
?>

<script>

    $(".header_r form h2").css('display','block');
    $(".header_r p span").addClass('animated puls');

</script>


<?php
}
?>
</body>
</html>