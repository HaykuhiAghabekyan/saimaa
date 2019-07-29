<?php
require_once "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>PRODUCT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet">
</head>
<body>
<div class="cont">
    <h1>ADMIN PRODUCT</h1>
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
            $result = mysqli_query($mysqli,$query);
            if(!$result){
                echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
                exit();
            }
            echo "<ul>";
            while ($row=mysqli_fetch_assoc($result)) {
                echo '<li><a href="product.php?upd='.$row['identificator'].'">'.$row['title_en'].'</a></li>';
            }
            echo "</ul>";
            $title_en='';
            $title_ru='';

            if(isset($_GET['upd'])){

                $query='SELECT * FROM category WHERE identificator='.$_GET['upd'];
                $result1 = mysqli_query($mysqli,$query);
                if(!$result1){
                    echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
                    exit();
                }
                $row1=mysqli_fetch_assoc($result1);

                $title_en=$row1['title_en'];
                $title_ru=$row1['title_ru'];
                $prod_img=$row1['prod_img'];
                $logo_img=$row1['logo_img'];
                $identificator=$row1['identificator'];

            }
            ?>

        </div>
        <div class="form_desc">
            <form method="post" action="product_handle.php" enctype="multipart/form-data">
                <input type="text" name="title_en" value="<?php  echo $title_en; ?>" id="title_en">
                <label for="title_en">tilte en</label><br><br>
                <input type="text" name="title_ru" value="<?php  echo $title_ru; ?>" id="title_ru">
                <label for="title_ru"> title ru</label><br><br>

                <label for="show"> show</label>

                <select name="selec" id="select">
                    <option value="show">show</option>
                    <option value="hidden">hidden</option>
                </select>
                <br><br>
                <?php
                if(isset($prod_img) && !empty($prod_img)){
                    echo '<img src="../photo/'.$prod_img.'" class="img_upd">';
                    echo "<input type='hidden' name='fileUpd' value='".$prod_img."'>";
                }
                ?>
                <input type="file" name="prod_img"><br><br>

                <?php
                if(isset($logo_img) && !empty($logo_img)){
                    echo '<img src="../photo/'.$logo_img.'" class="img_upd">';
                    echo "<input type='hidden' name='fileUpd' value='".$logo_img."'>";
                }
                ?>
                <input type="file" name="logo_img"><br><br>


                <input type="submit" name="send" value="добавить">
                <?php
                if(isset($identificator)){
                    echo "<input type='hidden' name='identificator' value='".$identificator."'>";
                    echo '<input type="submit" name="delete_prod" value="удалить">';
                }
                ?>
                <a href="product.php" class="new_prod">Добавить новый</a>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

</script>
</body>
</html>