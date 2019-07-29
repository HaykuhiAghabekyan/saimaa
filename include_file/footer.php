<footer>
	<div class="container7">
		<div class="foot_logo">
			<img src="images/footer saima.png" alt="saimaa">
		</div>
		<div class="phone  wow fadeInUp">
			<div>
				<h5><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo $address; ?></h5>
				<p><?php echo $addr; ?></p>
			</div>	
			<div>
				<h5><span><i class="fa fa-envelope" aria-hidden="true"></i></span><?php echo $email; ?></h5>
				<p>info@saimaabeverages.fi</p>
			</div>
			<div>
				<h5><span><i class="fa fa-phone" aria-hidden="true"></i></span><?php echo $phone; ?></h5>
				<p><i class="fa fa-plus" aria-hidden="true"></i><a href="tel:358503504100">358503504100</a></p>
			</div>
		</div>
			<div class="clearfix"></div>
		<div class="footer_menu  wow fadeInUp">
			<ul>
				<li><a href="saimaa.php"><?php echo $about; ?></a> <span>|</span></li>
				<li><a href="product.php"><?php echo $prod; ?></a><span>|</span></li>
				<li><a href="news.php"><?php echo $news; ?></a><span>|</span></li>
				<li><a href="contact.php"><?php echo $cont; ?></a></li>
			</ul>
		</div>
		<div class="soc">
			<div class="soc_icon  wow fadeInLeft">
				<p><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
				<p><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
				<p><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
				<p><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></p>
				<p><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></p>
				
			</div>
			<div class="copyright  wow fadeInRight">
				<p> <i class="fa fa-copyright" aria-hidden="true"></i><?php echo $copy; ?></p>
            </div>
		</div>

	</div>
</footer>



 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<!-- <script type="text/javascript" src="javascript/jquery.carouFredSel-6.0.4-packed.js"></script> -->

<script type="text/javascript" src="javascript/wow.js"></script>
<script type="text/javascript" src="javascript/javascript.js"></script>
<script>
    $('.lang').removeClass('active');
    $('.lang#<?php echo $lang;?>').addClass('active');

    new WOW().init();
</script>
