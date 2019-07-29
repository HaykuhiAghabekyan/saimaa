<?php	


    include_once 'include_file/header1.php';
	include_once 'include_file/product_content.php';
	include_once 'include_file/footer.php';
    include_once 'include_file/body.php';
?>
<script type="text/javascript">
	$('title').html('PRODUCT');
	var title=$('title').html();
	$('.menu ul li.'+title).addClass('activ')
</script>