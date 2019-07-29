
	<div class="clearfix"></div>

    <section class="wow fadeInUp">
        <div class="container3">
        <div class="our_story">
                    <h1><?php echo $our_news; ?></h1>
                    <div class="row sec1">
                        <div class="col-xs-12">
                            <img src="images/ice1.png" alt="ice" class="img-responsive" >
                        </div>
                    </div>
                </div>
            </div>
    </section>


<section class="news_cont">
	<div class="container">
        <?php

        $result_per_page=6;
        $page=1;
        $activePage=1;

        $query='SELECT * FROM news';
        $result=mysqli_query($mysqli,$query);
        $number_of_results=mysqli_num_rows($result);


        $number_of_pages =ceil($number_of_results/$result_per_page);
        if(isset($_GET['page'])){
            $page=$_GET['page'];
            $activePage=$_GET['page'];
        }
        $this_page_first_result=($page-1)*$result_per_page;
            $query='SELECT *FROM news LIMIT '. $this_page_first_result.','.$result_per_page;

            $result=mysqli_query($mysqli,$query);
             $i=1;
            while ($row=mysqli_fetch_assoc($result)) {
                $dat = explode(",", $row['date']);
                ?>


                <div class="row">
                    <div class="col-sm-6 wow <?php if($i%2==0){echo 'fl_rt fadeInRight'; } else{echo ' fadeInLeft'; } ?> ">
                        <div class="nw_img">
                            <img src="photo/<?php echo $row['news_img']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 nw_desc wow  <?php if($i%2==0){echo 'txt_rt fadeInLeft'; }else{echo 'fl_rt fadeInRight'; } ?> ">
                        <div class="desem">
                            <h1><?php echo $dat[0]; ?></h1>
                            <span><?php echo $dat[1]; ?></span>
                            <p><?php echo $row['news_text_'.$lang]; ?></p>
                        </div>
                    <?php echo   '<a href="newsOpen.php?more='.$row['id'].'">'. $more .'<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>'; ?>

                    </div>
                </div>
                <?php
                $i++;
            }

            ?>
    </div>
</section>
        <section class="page_number wow fadeInUp">
            <div class="container">
                <?php


                echo "<a href='news.php?page=".($page-1)."' class='prev'>Prev</a>";
                for($page=1;$page<=$number_of_pages;$page++){
                    if($activePage==$page){
                        echo '<a href="news.php?page='.$page.'" class="active">'.$page.'</a>';
                    }else{
                        echo '<a href="news.php?page='.$page.'" >'.$page.'</a>';
                    }
                }


                echo "<a href='news.php?page=".($page+1)."' class='next'>Next</a>";
                ?>


            </div>
        </section>


