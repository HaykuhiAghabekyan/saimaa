<?php
if(isset($_GET['more'])){
    $query='SELECT * FROM news WHERE  id='.$_GET['more'];
    $rez=mysqli_query($mysqli,$query);
    if(!$rez){
        echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
    }
    $row2=mysqli_fetch_assoc($rez);
    $dat = explode(",", $row2['date']);
}


?>

	<div class="clearfix"></div>
<section class="newOpen">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 wow fadeInLeft">
				<a href="news.php"><i class="fa fa-long-arrow-left" aria-hidden="true"></i><?php echo $return; ?></a>
				<div class="newOp">
					<img src="photo/<?php echo $row2['news_img']; ?>" alt="">
				</div>
			</div>
			<div class="col-sm-6 des wow fadeInRight"">
				<div class="desem">
					<h1><?php echo $dat[0]; ?></h1>
					<span><?php echo $dat[1]; ?></span>
				</div>
				<div class="urge">
					<h2><?php echo $row2['news_tit_'.$lang]; ?><h2>

					<p><?php echo $row2['news_text_'.$lang]; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>