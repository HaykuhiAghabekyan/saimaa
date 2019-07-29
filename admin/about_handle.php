<?php
require_once "connect.php";
if(isset($_POST['send'])){


    $about_us_en=$_POST['about_us_en'];
    $about_us_ru=$_POST['about_us_ru'];
    $mineral_en=$_POST['mineral_en'];
    $mineral_ru=$_POST['mineral_ru'];
    $agriculture_en=$_POST['agriculture_en'];
    $agriculture_ru=$_POST['agriculture_ru'];
    $cruise_en=$_POST['cruise_en'];
    $cruise_ru=$_POST['cruise_ru'];
    $soil_en=$_POST['soil_en'];
    $soil_ru=$_POST['soil_ru'];
    $his_text_en=$_POST['his_text_en'];
    $his_text_ru=$_POST['his_text_ru'];
    $about_img='';
    $file='';
    $his_img='';
    $select=$_POST['select'];
    $dat=time();
    $img=[];
    foreach ($_FILES as $f) {
        echo'<br>';
        if($f['error']==0){
            $img_type=$f['type'];
            $type=explode($img_type,'/');
            $t=end($type);
            if(preg_match('/jpg || jpeg || png /',$t)) {
                $tmp = $f['tmp_name'];
                $x = mt_rand(1000, 10000000);
                if (move_uploaded_file($tmp, '../photo/' . $x . $f['name'])){
                    if ($_FILES['about_img']['name'] == $f['name']) {
                        $about_img = $x . $f['name'];

                    } else if ($_FILES['his_img']['name'] == $f['name']) {
                        $his_img = $x . $f['name'];
                    } else {
                        $file = $x . $f['name'];
                    }
            }
            }
        }
    }
    if(isset($_POST['id'])){
        $query='UPDATE about_us SET 
 			about_us_en="'.$about_us_en.'",
 			about_us_ru="'.$about_us_ru.'",
 			mineral_en="'.$mineral_en.'",
 			mineral_ru="'.$mineral_ru.'",
 			agriculture_en="'.$agriculture_en.'",
 		    agriculture_ru="'.$agriculture_ru.'", 
 			cruise_en="'.$cruise_en.'",
 		    cruise_ru="'.$cruise_ru.'", 
 		    soil_en="'.$soil_en.'",  
 		   	soil_ru="'.$soil_ru.'",
 		    his_text_en="'.$his_text_en.'",
 		    his_text_ru="'.$his_text_ru.'",
			about_img="'.$about_img.'",
			file="'.$file.'",
			his_img="'.$his_img.'",
			date="'.$dat.'",
			options="'.$select.'"  WHERE id='.$_POST['id'];

        if(!mysqli_query($mysqli,$query)){
            echo "Error".$query.'<br>'.mysqli_error($mysqli);
        }

    }else{
        $query='INSERT INTO about_us(
			about_us_en,about_us_ru,
			mineral_en,mineral_ru,
			agriculture_en,agriculture_ru,
			cruise_en,cruise_ru,
		    soil_en,soil_ru,
			his_text_en,his_text_ru,
			about_img,file,his_img,
			date,options)
		VALUES("'.$about_us_en.'","'.$about_us_ru.'" ,
		"'.$mineral_en.'" ,"'.$mineral_ru.'" ,
		"'.$agriculture_en.'","'.$agriculture_en.'",
		"'.$cruise_en.'","'.$cruise_ru.'",
		"'.$soil_en.'","'.$soil_ru.'",
		"'.$his_text_en.'","'.$his_text_ru.'",
		"'.$about_img.'","'.$file.'",
		"'.$his_img.'","'.$dat.'","'.$select.'")';

        if(!mysqli_query($mysqli,$query)){
            echo "Error".$query.'<br>'.mysqli_error($mysqli);
        }
        $x=mysqli_insert_id($mysqli);

        if (!$x){
            $_SESSION['result']= "Error".$query."<br>".mysqli_error($mysqli);
        }else{
            $_SESSION['result']='ok';

        }

    }

}else if (isset($_POST['delete'])) {
    $query='DELETE FROM about_us WHERE id='.$_POST['id'];
    if(!mysqli_query($mysqli,$query)){
        echo "Error".'<br>'.mysqli_error($mysqli);
    }
}
header('Location:about_us.php');
?>

