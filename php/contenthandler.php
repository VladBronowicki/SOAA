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
		$maindir='../';
		$contentdir = $maindir . 'content/';
		
	?>
	<div id="contentbody">
		<div class="content">
			<?php 
			echo var_dump($_POST);
			//preg_replace('/\s+/', '', $str);
			$contentfile = preg_replace('/\s+/', '',$_POST['title']);
			echo $contentfile;
			$path_to_save = $contentdir . $_POST['contentdirectories'] . '/'. time() . '_' . $contentfile;
			if (!mkdir($path_to_save, 0777)) {
				die('Failed to create folders...');
			}
			$myfile = fopen($path_to_save."/".$contentfile.'.txt', "w") or die("Unable to open file!");
			fwrite($myfile, '<h1>' . $_POST['title'] . '</h1>');
			fwrite($myfile, '<p>' . $_POST['article'] . '</p>');
			fclose($myfile);
			?>
		</div>
	</div> 
	<?php
		include("tail.php");
	?>
	</div></body>
<html>