<?php 
require_once "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet">
</head>
<body>
<div class="cont">
<h1>ADMIN SAIMAA PRODUCTS</h1>
    <ul class="menu">
        <li class="desc"><a href="admin.php">DESCRIPTION</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="product.php">PRODUCT</a></li>
        <li><a href="about_us.php">ABOUT US</a></li>
    </ul>
    <section id="desc">
<div class="title">
	<?php
    $query='SELECT identificator,title_en FROM category';
    $resultCategory = mysqli_query($mysqli,$query);
    if(!$resultCategory){
        echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
        exit();
    }

		$query='SELECT id,title_en FROM product_description';
		$result = mysqli_query($mysqli,$query);
		if(!$result){
			echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
			exit();
		}
		echo "<ul>";
			while ($row=mysqli_fetch_assoc($result)) {
				echo '<li><a href="admin.php?upd='.$row['id'].'">'.$row['title_en'].'</a></li>';
			}
		echo "</ul>";
		$title_ru='';
		$title_en='';
		$text_ru='';
        $text_en='';
        $brend_ru='';
        $brend_en='';
        $origin_ru='';
        $origin_en='';
        $alcohol='';
        $calories='';
        $volume='';
        $code='';
            if(isset($_GET['upd'])){

			$query='SELECT * FROM product_description WHERE id='.$_GET['upd'].'';
			$result1 = mysqli_query($mysqli,$query);
			if(!$result1){
				echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
				exit();
			}
			$row1=mysqli_fetch_assoc($result1);
                $title_ru=$row1['title_ru'];
                $title_en=$row1['title_en'];
                $text_ru=$row1['text_ru'];
                $text_en=$row1['text_ru'];
                $brend_ru=$row1['brend_ru'];
                $brend_en=$row1['brend_en'];
                $origin_ru=$row1['origin_ru'];
                $origin_en=$row1['origin_en'];
                $alcohol=$row1['alcohol'];
                $calories=$row1['calories'];
                $volume=$row1['volume'];
                $code=$row1['code'];
                $file=$row1['file'];
                $id=$row1['id'];

		}
	?>
	
</div>
<div class="form_desc">
	<form method="post" action="handle.php" enctype="multipart/form-data">
	<input type="text" name="title_ru" value="<?php  echo $title_ru; ?>" id="title ru">
	<label for="title ru">title ru</label><br><br>
	<input type="text" name="title_en" value="<?php  echo $title_en; ?>" id="title_en">
	<label for="title en">title en</label><br><br>
        <textarea name="text_ru" id="text_ru"><?php  echo $text_ru;?></textarea>
        <label for="text1 ru">text1 ru</label><br><br>
        <textarea name="text_en" id="text_en"><?php  echo $text_en;?></textarea>
        <label for="text1 en">text1 en</label><br  ><br>
    <input type="text" name="brend_ru" value="<?php echo   $brend_ru; ?>" id="brend_ru">
     <label for="brend ru">brend ru</label><br><br>
	<input type="text" name="brend_en" value="<?php  echo $brend_en; ?>" id="brend_en">
	<label for="brend en">brend en</label><br><br>
        <input type="text" name="origin_ru" value="<?php echo   $origin_ru; ?>" id="origin_ru">
        <label for="origin ru">origin ru</label><br><br>
        <input type="text" name="origin_en" value="<?php  echo $origin_en; ?>" id="origin_en">
        <label for="origin en">origin en</label><br><br>
        <input type="text" name="alcohol" value="<?php echo   $alcohol; ?>" id="alcohol">
        <label for="alcohol">alcohol</label><br><br>
        <input type="text" name="calories" value="<?php echo   $calories; ?>" id="calories">
        <label for="calories">calories</label><br><br>
        <input type="text" name="volume" value="<?php  echo $volume; ?>" id="volume">
        <label for="volume">volume</label><br><br>
        <input type="text" name="code" value="<?php  echo $code; ?>" id="code">
        <label for="code">code</label><br><br>


<!--         <input type="hidden" name="user_id" value="--><?php //?><!--"-->
        <label for="selectt">show</label>
        <select name="selectt" id="selectt">
            <option value="show">show</option>
            <option value="hidden">hidden</option>
        </select>
        <label for="organic">organic</label>
        <select name="organic" id="organic">
            <option value=""></option>
            <option value="organic">organic</option>
            <option value="no_organic">no organic</option>
        </select>
        <label for="category">category</label>
        <select name="category_id" id="category">
            <?php
                while ($rowCategory=mysqli_fetch_assoc($resultCategory)){
                    echo '<option value="'.$rowCategory['identificator'].'">'.$rowCategory['title_en'].'</option>';
                }
            ?>
        </select>
        <label for="available">availablе </label>
        <select name="availabl" id="availablе ">
            <option value="availabl">availablе </option>
            <option value="no_availabl">no availablе </option>
        </select>
<br><br>
<?php
if(isset($file) && !empty($file)){
	echo '<img src="../photo/'.$file.'" class="img_upd">';
	echo "<input type='hidden' name='fileUpd' value='".$file."'>";
}
?>

            <input type="file" name="file"><br><br>


<input type="submit" name="send" value="добавить">
<?php
if(isset($id)){
	echo "<input type='hidden' name='id' value='".$id."'>";
	echo '<input type="submit" name="delete" value="удалить">';
}
?>
        <a href="admin.php" class="new_prod">Добавить новый</a>
</form>
</div>
    </section>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
if(isset($id)){
?>
<script>
    $('option[value="<?php echo $row1['selectt'];?>"]').attr('selected',true);
    $('option[value="<?php echo $row1['organic'];?>"]').attr('selected',true);
    $('option[value="<?php echo $row1['category_id'];?>"]').attr('selected',true);
    $('option[value="<?php echo $row1['availabl'];?>"]').attr('selected',true);
</script>
<?php
}
?>
</body>
</html>