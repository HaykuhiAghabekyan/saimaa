<?php
require_once "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>NEWS ADMIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet">
</head>
<body>
<div class="cont">
    <h1>ADMIN NEWS</h1>
    <ul class="menu">
        <li class="desc"><a href="admin.php">DESCRIPTION</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="product.php">PRODUCT</a></li>
        <li><a href="about_US.php">ABOUT US</a></li>
    </ul>
    <section id="desc">
        <div class="title">
            <?php
            $query='SELECT id,news_tit_en FROM news';
            $result = mysqli_query($mysqli,$query);
            if(!$result){
                echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
                exit();
            }
            echo "<ul>";
            while ($row=mysqli_fetch_assoc($result)) {
                echo '<li><a href="news.php?upd='.$row['id'].'">'.$row['news_tit_en'].'</a></li>';
            }
            echo "</ul>";
            $news_tit_en='';
            $news_tit_ru='';
            $news_text_en='';
            $news_text_ru='';
            if(isset($_GET['upd'])){

                $query='SELECT * FROM news WHERE id='.$_GET['upd'].'';
                $result1 = mysqli_query($mysqli,$query);
                if(!$result1){
                    echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
                    exit();
                }
                $row1=mysqli_fetch_assoc($result1);
                $news_tit_en=$row1['news_tit_en'];
                $news_tit_ru=$row1['news_tit_ru'];
                $news_text_en=$row1['news_text_en'];
                $news_text_ru=$row1['news_text_ru'];
                $news_img=$row1['news_img'];
                $id=$row1['id'];

            }
            ?>

        </div>
        <div class="form_desc">
            <form method="post" action="handle_news.php" enctype="multipart/form-data">
                <input type="text" name="news_tit_en" value="<?php  echo $news_tit_en; ?>" id="news_tit_en">
                <label for="news_tit_en">news tilte en</label><br><br>
                <input type="text" name="news_tit_ru" value="<?php  echo $news_tit_ru; ?>" id="news_tit_ru">
                <label for="news_tit_ru">news title ru</label><br><br>
                <textarea name="news_text_en" id="news_text_en"><?php  echo $news_text_en;?></textarea>
                <label for="news_text_en">text en</label><br><br>
                <textarea name="news_text_ru"id="news_text_ru" ><?php  echo $news_text_ru;?></textarea>
                <label for="news_text_ru">text ru</label><br  ><br>
                <label for="selec"> show</label>
                <select name="selec" id="selec">
                    <option value="show">show</option>
                    <option value="hidden">hidden</option>
                </select>

                <br><br>
                <?php
                if(isset($news_img) && !empty($news_img)){
                    echo '<img src="../photo/'.$news_img.'" class="img_upd">';
                    echo "<input type='hidden' name='fileUpd' value='".$news_img."'>";
                }
                ?>
                <input type="file" name="news_img"><br><br>
                <input type="submit" name="send_news" value="добавить">
                <?php
                if(isset($id)){
                    echo "<input type='hidden' name='id' value='".$id."'>";
                    echo '<input type="submit" name="delete_news" value="удалить">';
                }
                ?>
                <a href="news.php" class="new_prod">Добавить новый</a>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    // $(document).ready(function(){
    // 	m='<?php echo $row["selectt"]; ?>';
    // 	s='option[value="'+m+'"]';
    // 	$(s).attr('selected',true);
    // })
//    var cls=$('.menu li').attr('class')
//    $('.menu li').click(function (){
//        $('section').css('display','none');
//        $('section#'+cls).fadeIn(200)
//
//    })
</script>
</body>
</html>