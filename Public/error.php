<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>失败</title>
</head>
<body>
	<h2><?php echo $msg ?> ):</h2>
	<?php if(!is_null($url)){ ?>
		<script type="text/javascript">
			setTimeout(function(){
				location.href='<?php echo $url ?>'
			},2000);
		</script>
	<?php }else{ ?>
		<script type="text/javascript">
			setTimeout(function(){
				history.back();
			},2000);
		</script>
	<?php } ?>
	
	
	
	
</body>
</html>