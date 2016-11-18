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
			<h1>Content Creation Tools</h1>
			<form action='contenthandler.php' method='POST'>
				Select page to edit:
				<select name="contentdirectories">
					<?php
					$temp = getDirectoryNames($maindir . 'content');
					foreach($temp as $dirname){
						echo '<option value = ' . $dirname . '>' . $dirname . '</option>';
					}
					?>
				</select>
				<h4>Add Content</h4>
				<input type='text' name='title' value='Title'/><br/>
				<textarea name='article' rows='4' cols='40'>Add Text for your article here</textarea><br/>
				<input type='file' name='uploadimage'/><br/>
				<input type='submit'/>
			</form>
		</div>
	</div> 
	<?php
		include("tail.php");
	?>
	</div></body>
<html>