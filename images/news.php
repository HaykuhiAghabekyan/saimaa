<?php	


    include_once 'include_file/header1.php';
	include_once 'include_file/news_content.php';
	include_once 'include_file/footer.php';
    include_once 'include_file/body.php';

?>
<script type="text/javascript">
	$('title').html('NEWS');
	var title=$('title').html();
	$('.menu ul li.'+title).addClass('activ');
    $('a.page ').first().addClass('active');
</script>