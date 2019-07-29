<?php
	session_start();
	$day='';
	$mont='';
	$year='';
	 
	$now1=date("Y/m/d");
	$now=explode('/',$now1);
	$now_day=(int)$now[2];
	$now_mont=(int)$now[1];
	$now_year=(int)$now[0];

	if(isset($_POST['year'])){
        $day=(int)$_POST['day'];
        $mont=(int)$_POST['mont'];
        $year=(int)$_POST['year'];
        $age=$now_year-$year;
	if(($age>=19) || ($age==18 && $now_mont>$mont ) || ($age==18 && $now_mont==$mont && $now_day>=$day )){
		$_SESSION['age']='true';
		if($_POST['check']=='on'){
		    setcookie('remember','yes',time() + 3600,'/saimaa2/');
        }
		header('Location:../home.php');
	}else {
        $_SESSION['age']='false';
        if($_POST['check']=='on'){
            setcookie('remember','no',time() +3600,'/saimaa2/');
        }
        header('Location:../welcome.php');
	}
}
 ?>