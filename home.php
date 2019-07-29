
<?php

    include_once 'include_file/header.php';
	include_once 'include_file/home_content.php';
	include_once 'include_file/footer.php';
    include_once 'include_file/body.php';
?>
<script type="text/javascript">
	$('title').html('SAIMAA');
		var title=$('title').html();
	$('.menu ul li.'+title).addClass('activ')
</script>
