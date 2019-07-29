<?php
require_once "connect.php";
if(isset($_POST['send_news'])){
    print_r($_POST);

    $news_tit_en=$_POST['news_tit_en'];
    $news_tit_ru=$_POST['news_tit_ru'];
    $news_text_en=$_POST['news_text_en'];
    $news_text_ru=$_POST['news_text_ru'];
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }
    $selectt=$_POST['selec'];
    $date=date("F,d");
    $img=[];
    if(isset($_POST['fileUpd'])){
        $news_img=$_POST['fileUpd'];
    }else{
        $news_img='';
    }
    print_r(gd_info() );
    foreach ($_FILES as $f) {
        echo'<br>';

        if($f['error']==0){
            $img_type=$f['type'];
            $type=explode($img_type,'/');
            $t=end($type);
            if(preg_match('/jpg || jpeg || png /',$t)){
                $tmp=$f['tmp_name'];
               if(move_uploaded_file($tmp, '../photo/'.$f['name'])){
                   array_push($img, $f['name']);
               }


//                header("Content-Type: image/png");
//                $im = imagecreate(110, 20)
//                or die("Невозможно создать поток изображения");
//                $background_color = imagecolorallocate($im, 0, 0, 0);
//                $text_color = imagecolorallocate($im, 233, 14, 91);
//                imagestring($im, 1, 5, 5,  "Простая Текстовая Строка", $text_color);
//                imagepng($im);








                header('Content-Type: image/jpeg');
//                $new_width=200;
//                $new_height=200;
//                $image_p = imagecreatetruecolor($new_width, $new_height);
//                $image = imagecreatefromjpeg('../photo/'.$f['name']);
//                if(imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height))echo 45;
//                imagejpeg($image_p, null, 100);

                $imagepath = $f['name'];
                $save = "../photo/" . $imagepath;
                $file = "../photo/" . $imagepath;

                list($width, $height) = getimagesize($file);
                $modwidth = 200;
                $diff = $width / $modwidth;
                $modheight = $height / $diff;
                $tn = imagecreatetruecolor($modwidth, $modheight);
                $imag=imagecreatefromjpeg($save);



                if(imagecopyresampled($tn, $imag, 0, 0, 0, 0, $modwidth, $modheight, $width, $height))
               if(imagejpeg($tn, $save, 90))
               imagedestroy($tn);





            }
        }
    }
    if(count($img)==1){
        $news_img=$img[0];
    }

    if(isset($_POST['id'])){
        $query='UPDATE news SET 
 			news_tit_en="'.$news_tit_en.'",
 			news_tit_ru="'.$news_tit_ru.'",
 			news_text_en="'.$news_text_en.'",
 			news_text_ru="'.$news_text_ru.'",
			news_img="'.$news_img.'",
			selectt="'.$selectt.'",
			date="'.$date.'" WHERE id='.$_POST['id'];
        if(!mysqli_query($mysqli,$query)){
            echo "Error".'<br>'.mysqli_error($mysqli);
        }
    }else{
        $query='INSERT INTO news(
			news_tit_en,
			news_tit_ru,
			news_text_en,
			news_text_ru,
			news_img,
			selectt,date)
		VALUES("'.$news_tit_en.'","'.$news_tit_ru.'" ,
		"'.$news_text_en.'" ,"'.$news_text_ru.'" ,
	    "'.$news_img.'",
		"'.$selectt.'","'.$date.'")';


        if(!mysqli_query($mysqli,$query)){
            echo "Error".'<br>'.mysqli_error($mysqli);
        }
        $x=mysqli_insert_id($mysqli);

        if (!$x){
            $_SESSION['result']= "Error".$query."<br>".mysqli_error($mysqli);
        }else{
            $_SESSION['result']='ok';

        }

    }

}else if (isset($_POST['delete_news'])) {
    $query='DELETE FROM news WHERE id='.$_POST['id'];
    if(!mysqli_query($mysqli,$query)){
        echo "Error".'<br>'.mysqli_error($mysqli);
    }
}
//header('Location:news.php');
?>

