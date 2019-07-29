<?php 
require_once "connect.php";
if(isset($_POST['send'])){
    $title_ru=$_POST['title_ru'];
    $title_en=$_POST['title_en'];
    $text_ru=$_POST['text_ru'];
    $text_en=$_POST['text_ru'];
    $brend_ru=$_POST['brend_ru'];
    $brend_en=$_POST['brend_en'];
    $origin_ru=$_POST['origin_ru'];
    $origin_en=$_POST['origin_en'];
    $alcohol=$_POST['alcohol'];
    $calories=$_POST['calories'];
    $volume=$_POST['volume'];
    $code=$_POST['code'];
    $showHide=$_POST['selectt'];
    $organic=$_POST['organic'];
    $category_id=$_POST['category_id'];
    $availabl=$_POST['availabl'];
	$dat=time();
	$img=[];
	if(isset($_POST['fileUpd'])){
		$file=$_POST['fileUpd'];
	}else{
		$file='';
	}
	foreach ($_FILES as $f) {
		echo'<br>';

		if($f['error']==0){
			$img_type=$f['type'];
			$type=explode($img_type,'/');
			$t=end($type);
			if(preg_match('/jpg || jpeg || png /',$t)){
				$tmp=$f['tmp_name'];
				if(move_uploaded_file($tmp, '../photo/'.$f['name']));
				array_push($img, $f['name']);
			}
		}
	}
		if(count($img)==1){
		$file=$img[0];
	}

	if(isset($_POST['id'])){
		$query='UPDATE product_description SET 
 			title_ru="'.$title_ru.'",
 			title_en="'.$title_en.'",
 			text_ru="'.$text_ru.'",
 			text_en="'.$text_en.'",
 			brend_ru="'.$brend_ru.'",
 		    brend_en="'.$brend_en.'", 
 			origin_ru="'.$origin_ru.'",
 		    origin_en="'.$origin_en.'", 
 		    alcohol="'.$alcohol.'",  
 		   	calories="'.$calories.'",
 		    volume="'.$volume.'",
 		    code="'.$code.'",
			file="'.$file.'",
			showHide="'.$showHide.'",
			organic="'.$organic.'",
			category_id="'.$category_id.'",
			availabl="'.$availabl.'",
			dat="'.$dat.'" WHERE id='.$_POST['id'];

		if(!mysqli_query($mysqli,$query)){
			echo "Error".$query.'<br>'.mysqli_error($mysqli);
		}

	}else{
		$query='INSERT INTO product_description(
			title_ru,title_en,
			text_ru,text_en,
			brend_ru,brend_en,
			origin_ru,origin_en,
			alcohol,calories,  
			volume,code,file,showHide,organic,category_id,availabl,dat)
		VALUES("'.$title_ru.'","'.$title_en.'" ,
		"'.$text_ru.'" ,"'.$text_en.'" ,
		"'.$brend_ru.'","'.$brend_en.'",
		"'.$origin_ru.'","'.$origin_en.'",
		"'.$alcohol.'","'.$calories.'",
		"'.$volume.'","'.$code.'","'.$file.'",
		"'.$showHide.'","'.$organic.'","'.$category_id.'","'.$availabl.'","'.$dat.'")';

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
	$query='DELETE FROM product_description WHERE id='.$_POST['id'];
	if(!mysqli_query($mysqli,$query)){
			echo "Error".'<br>'.mysqli_error($mysqli);
		}
}
	header('Location:admin.php');
?>

