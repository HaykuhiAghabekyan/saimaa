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
    <h1>ABOUT US</h1>
    <ul class="menu">
        <li class="desc"><a href="admin.php">DESCRIPTION</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="product.php">PRODUCT</a></li>
        <li><a href="about_us.php">ABOUT US</a></li>
    </ul>
    <section id="desc">
        <div class="title">
            <?php
            $query='SELECT id, date FROM about_us';
            $result = mysqli_query($mysqli,$query);
            if(!$result){
                echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
                exit();
            }
            echo "<ul>";
            while ($row=mysqli_fetch_assoc($result)) {
                echo '<li><a href="about_us.php?upd='.$row['id'].'">'.$row['date'].'</a></li>';
            }
            echo "</ul>";
            $about_us_en='';
            $about_us_ru='';
            $mineral_en='';
            $mineral_ru='';
            $agriculture_en='';
            $agriculture_ru='';
            $cruise_en='';
            $cruise_ru='';
            $soil_en='';
            $soil_ru='';
            $his_text_en='';
            $his_text_ru='';

            if(isset($_GET['upd'])){

                $query='SELECT * FROM about_us WHERE id='.$_GET['upd'].'';
                $result1 = mysqli_query($mysqli,$query);
                if(!$result1){
                    echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
                    exit();
                }
                $row1=mysqli_fetch_assoc($result1);
                $about_us_en=$row1['about_us_en'];
                $about_us_ru=$row1['about_us_ru'];
                $mineral_en=$row1['mineral_en'];
                $mineral_ru=$row1['mineral_ru'];
                $agriculture_en=$row1['agriculture_en'];
                $agriculture_ru=$row1['agriculture_ru'];
                $cruise_en=$row1['cruise_en'];
                $cruise_ru=$row1['cruise_ru'];
                $soil_en=$row1['soil_en'];
                $soil_ru=$row1['soil_ru'];
                $his_text_en=$row1['his_text_en'];
                $his_text_ru=$row1['his_text_ru'];
                $about_img=$row1['about_img'];
                $file=$row1['file'];
                $his_img=$row1['his_img'];
                $id=$row1['id'];

            }
            ?>

        </div>
        <div class="form_desc">
            <form method="post" action="about_handle.php" enctype="multipart/form-data">
                <textarea name="about_us_en" id="about_us_en"><?php  echo $about_us_en;?></textarea>
                <label for="about_us_en">about us en</label><br><br>
                <textarea name="about_us_ru" id="about_us_ru"><?php  echo $about_us_ru;?></textarea>
                <label for="about_us_ru">about us ru</label><br  ><br>
                <textarea name="mineral_en" id="mineral_en"><?php  echo $mineral_en;?></textarea>
                <label for="mineral_en">mineral en</label><br><br>
                <textarea name="mineral_ru" id="mineral_ru"><?php  echo $mineral_ru;?></textarea>
                <label for="mineral_ru">mineral ru</label><br  ><br>
                <textarea name="agriculture_en" id="agriculture_en"><?php  echo $agriculture_en;?></textarea>
                <label for="mineral_en">agriculture en</label><br><br>
                <textarea name="agriculture_ru" id="agriculture_ru"><?php  echo $agriculture_ru;?></textarea>
                <label for="agriculture_ru">agriculture ru</label><br  ><br>
                <textarea name="cruise_en" id="cruise_en"><?php  echo $cruise_en;?></textarea>
                <label for="cruise_en">cruise en</label><br><br>
                <textarea name="cruise_ru" id="cruise_ru"><?php  echo $cruise_ru;?></textarea>
                <label for="cruise_ru">cruise ru</label><br  ><br>
                <textarea name="soil_en" id="soil_en"><?php  echo $soil_en;?></textarea>
                <label for="soil_en">soil en</label><br><br>
                <textarea name="soil_ru" id="soil_ru"><?php  echo $soil_ru;?></textarea>
                <label for="soil_ru">soil ru</label><br  ><br>
                <textarea name="his_text_en" id="his_text_en"><?php  echo $his_text_en;?></textarea>
                <label for="his_text_en">his_text en</label><br><br>
                <textarea name="his_text_ru" id="his_text_ru"><?php  echo $his_text_ru;?></textarea>
                <label for="his_text_ru">his_text ru</label><br><br>
                <label for="selectt">show</label>
                <select name="select" id="selectt">
                    <option value="show">show</option>
                    <option value="hidden">hidden</option>
                </select>
                <br><br>
                <?php
                    if(isset($about_img) && !empty($about_img)){
                        echo '<img src="../photo/'.$about_img.'" class="img_upd">';
                        echo "<input type='hidden' name='about_imgUpd' value='".$about_img."'>";
                    }
                ?>
                <input type="file" name="about_img"><br><br>

                <?php
                    if(isset($file) && !empty($file)){
                    echo '<img src="../photo/'.$file.'" class="img_upd">';
                    echo "<input type='hidden' name='fileUpd' value='".$file."'>";
                    }
                ?>
                <input type="file" name="file"><br><br>

                <?php
                    if(isset($his_img) && !empty($his_img)){
                    echo '<img src="../photo/'.$his_img.'" class="img_upd">';
                    echo "<input type='hidden' name='his_imgUpd' value='".$his_img."'>";
                    }
                ?>

                <input type="file" name="his_img"><br><br>

                <input type="submit" name="send" value="добавить">
                <?php
                if(isset($id)){
                    echo "<input type='hidden' name='id' value='".$id."'>";
                    echo '<input type="submit" name="delete" value="удалить">';
                }
                ?>
                <a href="about_us.php" class="new_prod">Добавить новый</a>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
if(isset($id)){
    ?>
    <script>
        $('option[value="<?php echo $row1['select'];?>"]').attr('selected',true);
    </script>
    <?php
}
?>
</body>
</html>