<?php
require_once "connect.php";
if(isset($_POST['send'])){


    $title_en=$_POST['title_en'];
    $title_ru=$_POST['title_ru'];
    $selectt=$_POST['selec'];
    $date=time();
    $logo_img='';
    $prod_img='';
    var_dump($_FILES);
    foreach ($_FILES as $f) {
        echo'<br>';

        if($f['error']==0){
            $img_type=$f['type'];
            $type=explode($img_type,'/');
            $t=end($type);
            if(preg_match('/jpg || jpeg || png /',$t)){
                $tmp=$f['tmp_name'];
                $x=mt_rand(1000,10000000);
                if(move_uploaded_file($tmp, '../photo/'.$x.$f['name']))
                    if($_FILES['prod_img']['name']==$f['name']){
                        $prod_img=$x.$f['name'];
                    }else{
                        $logo_img=$x.$f['name'];
                    }

            }
        }
    }
    if(isset($_POST['identificator'])){
        $query='UPDATE category SET 
 			title_en="'.$title_en.'",
 			title_ru="'.$title_ru.'",
			prod_img="'.$prod_img.'",
			logo_img="'.$logo_img.'",
			selectt="'.$selectt.'",
			date="'.$date.'" WHERE identificator='.$_POST['identificator'];
        if(!mysqli_query($mysqli,$query)){
            echo "Error".'<br>'.mysqli_error($mysqli);
        }
    }else{
        $query='INSERT INTO category(
		    title_en,
			title_ru,
			prod_img,
			logo_img,
			selectt,date)
		VALUES("'.$title_en.'" ,
		"'.$title_ru.'" ,
	    "'.$prod_img.'", "'.$logo_img.'",
		"'.$selectt.'","'.$date.'")';


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

}else if (isset($_POST['delete_prod'])) {
    $query='DELETE FROM category WHERE identificator='.$_POST['identificator'];
    if(!mysqli_query($mysqli,$query)){
        echo "Error".'<br>'.mysqli_error($mysqli);
    }
}
header('Location:product.php');
?>

