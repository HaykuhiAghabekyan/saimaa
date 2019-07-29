<div class="clearfix"></div>

<section >
    <div class="container3">
        <div class="our_story wow fadeInUp">
            <h1><?php echo $our_prod; ?></h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="filter row wow fadeInUp">
            <div class="col-xs-12 filter_type">
                <button type="button" class="btn active wow fadeInUp" id="saimaa_prod">Saimaa</button>
                <button type="button" class="btn wow fadeInUp " id="finsky_prod">Finsky</button>
                <button type="button" class="btn wow fadeInUp" id="norppa_prod">Norppa</button>
            </div>

        </div>
    </div>
</section>


<section class="our_product">
    <div class="container">
        <div>
            <div class="row first_row ">


                <?php
                $query = 'SELECT * FROM product_description JOIN  category ON product_description.category_id=category.identificator WHERE product_description.showHide = "show"  AND product_description.availabl="availabl" LIMIT 6';

                $result = mysqli_query($mysqli,$query);
                while( $row=mysqli_fetch_assoc($result)){
$l=1;
                    if($row['category_id']==2){
                       ?>

                        <div class="col-xs-4 card saimaa_prod ">
                            <div class="box_shad  wow fadeInUp">
                                <?php
                                  echo '<a href="description.php?upd='.$row['id'].'">';
                                ?>

                                    <div class="vod_img">
                                        <img src="photo/<?php echo $row['file'];?>" alt="saima-organic" class="img-responsive">
                                    </div>
                                    <p><?php echo $row['title_'.$lang];?></p>
                            </div>
                            <?php echo '</a>';?>
                            </div>

                        <?php
                    }else if($row['category_id']==1){
                    ?>
                    <div class="col-xs-4 card finsky_prod">
                        <div class="box_shad">
                            <?php
                            echo '<a href="description.php?upd='.$row['id'].'">';
                            ?>
                                <div class="vod_img">
                                    <img src="photo/<?php echo $row['file'];?>" alt="saima-organic" class="img-responsive">
                                </div>
                                <p><?php echo $row['title_'.$lang];?></p>
                            <?php echo '</a>';?>
                        </div>
                    </div>
                    <?php
                }else if($row['category_id']==3){
                    ?>
                    <div class="col-xs-4 card norppa_prod">
                        <div class="box_shad">
                            <?php
                            echo '<a href="description.php?upd='.$row['id'].'">';
                            ?>
                                <div class="vod_img">
                                    <img src="photo/<?php echo $row['file'];?>" alt="saima-organic" class="img-responsive">
                                </div>
                                <p><?php echo $row['title_'.$lang];?></p>
                                <?php echo '</a>';?>
                        </div>
                    </div>
            </div>
                    <?php
                }


                }
                ?>

            </div>
            <div class="clearfix"></div>

        </div>


    </div>
</section>
<!-- 
<section class="top_sec">
    <div class="container3">
        <div class="our_story wow fadeInUp">
            <h1>OUR FUTURES</h1>
            <div class="row sec1">
                <div class="col-xs-12">
                    <img src="images/ice1.png" alt="ice" class="img-responsive" >
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row filter wow fadeInUp">
            <div class="col-xs-12 filter_futur" >
                <button type="button" class="btn active wow fadeInUp" id="saim_futures">Saimaa</button>
                <button type="button" class="btn wow fadeInUp" id="fins_futures">Finsky</button>
                <button type="button" class="btn wow fadeInUp" id="nor_futures">Norppa</button>
            </div>
        </div>

    </div>
</section>
 -->

<!-- <section class="our_product product2">
    <div class="container">
        <div>
            <div class="row first_row ">


                <?php
                $query = 'SELECT * FROM product_description JOIN  category ON product_description.category_id=category.identificator WHERE product_description.showHide = "show"  AND product_description.availabl="no_availabl" LIMIT 6';

                $result = mysqli_query($mysqli,$query);
                while( $row=mysqli_fetch_assoc($result)){
                    //print_r($row);


                    if($row['identificator']==2){
                        ?>

                        <div class="col-xs-4 card saim_futures">
                            <div class="box_shad  wow fadeInUp">
                                <a href="description.php">
                                    <div class="vod_img">
                                        <img src="photo/<?php echo $row['file'];?>" alt="saima-organic" class="img-responsive">
                                    </div>
                                    <p><?php echo $row['title_'.$lang];?></p>
                                </a>
                            </div>
                        </div>
                        <?php
                    }else if($row['identificator']==1){
                        ?>
                        <div class="col-xs-4 card fins_futures">
                            <div class="box_shad">
                                <a href="description.php">
                                    <div class="vod_img">
                                        <img src="photo/<?php echo $row['file'];?>" alt="saima-organic" class="img-responsive">
                                    </div>
                                    <p><?php echo $row['title_'.$lang];?></p>
                                </a>
                            </div>
                        </div>
                        <?php
                    }else if($row['identificator']==3){
                        ?>
                        <div class="col-xs-4 card nor_futures">
                            <div class="box_shad">
                                <a href="description.php">
                                    <div class="vod_img">
                                        <img src="photo/<?php echo $row['file'];?>" alt="saima-organic" class="img-responsive">
                                    </div>
                                    <p><?php echo $row['title_'.$lang];?></p>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>


        </div>


    </div>


</section> -->