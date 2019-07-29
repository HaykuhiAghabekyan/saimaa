<?php
if(isset($_GET['upd'])){
    $query='SELECT * FROM product_description WHERE  id='.$_GET["upd"];
    $result=mysqli_query($mysqli,$query);
    if(!$result){
        echo 'Error'.$query.'<br>'.mysqli_error($mysqli);
    }
    $row2=mysqli_fetch_assoc($result);

}
?>

<div class="clearfix"></div>

	<section class="description">
		<div class="container">
			<div class="sours">
				<p>
					<span>Product /</span>
					<span>Saimaa /</span>
					<span>Organic /</span>
					<span>Saimaa Organic vodka</span>
				</p>
			</div>
			<div class="desc">
				<div class="desc_img wow fadeInLeft">
					<img src="photo/<?php echo $row2['file']?>" alt="" class="img-responsive">
				</div>
				<div class="desc_text wow fadeInRight">
					<p class="desc_head"><?php echo $row2['title_'.$lang]; ?></p>
					<div class="desc_imghid">
						<img src="images/saima-organic.png" alt="" class="img-responsive">
					</div>
					<p><?php echo $row2['text_'.$lang]; ?></p>
			
					<button class="info"><?php echo $pr_info; ?></button>
				</div>
			</div>

		</div>	
	</section>
<section>
	<div class="container">
		<div class="prod_info">
			<span class="close_info"><i class="fa fa-times" aria-hidden="true"></i></span>
		<div class="prod_inf">
			<ul class="info1">
				<li><?php echo $brend; ?></li>
				<li><?php echo $origin; ?></li>
				<li><?php echo $alcohol; ?></li>
				<li><?php echo $calories; ?> </li>
				<li><?php echo $volume; ?></li>
				<li><?php echo $code; ?></li>
			</ul>
			<ul class="info2">
				<li><?php echo $row2['brend_'.$lang]; ?></li>
				<li><?php echo $row2['origin_'.$lang]; ?></li>
				<li><?php echo $row2['alcohol']; echo $vol; ?> </li>
				<li><?php echo $row2['calories']; ?></li>
				<li><?php echo $row2['volume']; echo $ml; ?> </li>
				<li><?php echo $row2['code']; ?></li>
			</ul>		
		</div>
	</div>

						
	</div>
</section>
	<section >
		<div class="container3">
		<div class="our_story med_story wow fadeInUp">
					<h1><?php echo $rprod; ?></h1>
					<div class="row sec1">
						<div class="col-xs-12">
							<img src="images/ice1.png" alt="ice" class="img-responsive" >
						</div>
					</div>	
				</div>
			</div>
	</section>

			
	<section class="our_product our_product1">
		<div class="container">
			<div class="row first_row first_row1 wow fadeInUp">
            <?php
                $query='SELECT * FROM product_description WHERE   category_id="'.$row2['category_id'].'" AND organic="'.$row2['organic'].'"AND id!="'.$row2['id'].'" LIMIT 3';
                $res=mysqli_query($mysqli,$query);
            while($row3=mysqli_fetch_assoc($res)){

                ?>
                <div class="col-xs-4">
                    <div class="box_shad">
                        <a href="">
                            <div class="vod_img">
                                <img src="photo/<?php echo $row3['file']; ?>" alt="saima-organic" class="img-responsive">
                            </div>
                            <p><?php echo $row3['title_'.$lang];?></p>
                        </a>
                    </div>
                </div>
                <?php
            }
                ?>
<!--				<div class="col-xs-4">-->
<!--					<div class="box_shad">-->
<!--						<a href="">-->
<!--							<div class="vod_img">-->
<!--								<img src="images/saima-nordic.png" alt="saima-organic" class="img-responsive">-->
<!--							</div>-->
<!--							<p>Saima Nordic Berries</p>-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-xs-4">-->
<!--					<div class="box_shad">-->
<!--						<a href="">-->
<!--							<div class="vod_img">-->
<!--								<img src="images/saima-black.png" alt="saima-organic" class="img-responsive">-->
<!--							</div>-->
<!--							<p>Saima Black Currant</p>-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
			</div>
			<div class="clearfix"></div>
			</div>
	</section>
