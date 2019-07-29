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
        <li><a href="contact.php">CONTACT</a></li>
    </ul>
    <section id="desc">
        <div class="title">
            <?php
            $query='SELECT id, name FROM contact';
            $result = mysqli_query($mysqli,$query);
            if(!$result){
                echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
                exit();
            }
            echo "<ul>";
            while ($row=mysqli_fetch_assoc($result)) {
                echo '<li><a href="news.php?upd='.$row['id'].'">'.$row['name'].'</a></li>';
            }
            echo "</ul>";
            $name='';
            $last_name='';
            $email='';
            $subject='';
            $message='';
            if(isset($_GET['upd'])){

                $query='SELECT * FROM contact WHERE id='.$_GET['upd'].'';
                $result1 = mysqli_query($mysqli,$query);
                if(!$result1){
                    echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
                    exit();
                }
                $row1=mysqli_fetch_assoc($result1);
                $name=$row1['name'];
                $last_name=$row1['last_name'];
                $email=$row1['email'];
                $subject=$row1['subject'];
                $message=$row1['message'];
                $id=$row1['id'];

            }
            ?>

        </div>
        <div class="form_desc">
            <form method="post" action="handle_news.php" enctype="multipart/form-data">
                <input type="text" name="name" value="<?php  echo $name; ?>">
                <span>name</span><br><br>
                <input type="text" name="last_name" value="<?php  echo $last_name; ?>">
                <span>last name</span><br><br>
                <input type="email" name="email" value="<?php  echo $email; ?>">
                <span>email</span><br><br>
                <input type="text" name="subject" value="<?php  echo $subject; ?>">
                <span>subject</span><br><br>
                <textarea name="message"><?php  echo $message;?></textarea>
                <span>message</span><br><br>


                <select name="selec">
                    <option value="show">show</option>
                    <option value="hide">hide</option>
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