<!-- change url inside htaccess -->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="../css/common.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>

	<body><div id="maindiv">	
	<?php
		include("head.php");
		include("contentreader.php");
		$maindir='../'
	?>
	<div id="contentbody">
		<div class="content">
			<?php echo var_dump($_POST);?>
		</div>
	</div> 
	<?php
		include("tail.php");
	?>
	</div></body>
<html>