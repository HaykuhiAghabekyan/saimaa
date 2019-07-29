	
	<div class="clearfix"></div>

	<section>
		<div class="container3">
		<div class="our_story contt wow fadeInUp">
					<h1><?php echo $touch; ?></h1>
					<div class="row sec1">
						<div class="col-xs-12">
							<img src="images/ice1.png" alt="ice" class="img-responsive" >
						</div>
					</div>	
				</div>
			</div>
	</section>

	<section class="contactt">
		<div class="container8">
			<div class="cont_content">
				<div class="con_us">
				<h1><?php echo $con_us; ?></h1>
				<form action="admin/contact_handle.php" method="post" enctype="multipart/form-data">
					<input type="text" name="name" placeholder="<?php echo $name; ?>" class="wow fadeInLeft">
					<input type="text" name="last_name" placeholder="<?php echo $lastName; ?>" class="wow fadeInRight">
					<input type="text" name="email" placeholder="<?php echo $email; ?>" class="wow fadeInLeft">
					<input type="text" name="subject" placeholder="<?php echo $subject; ?>" class="wow fadeInRight">
					<textarea name="message" placeholder="<?php echo $message; ?>"  class="wow fadeInUp"></textarea>
					<button name="send_message" class="wow fadeInLeft"><?php echo $send; ?></button>
				</form>
				</div>
				
				<div class="cont_map">
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.8177788729!2d28.17100511642981!3d61.057197082296476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469095a1840d68e9%3A0xce6a764b15261901!2zVmFsdGFrYXR1IDIsIDUzNjAwIExhcHBlZW5yYW50YSwg0KTQuNC90LvRj9C90LTQuNGP!5e0!3m2!1sru!2s!4v1512133064140" width="100%" height="100" style="border:0" allowfullscreen></iframe> -->
					<img src="images/map.jpg" alt="map">
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>		
