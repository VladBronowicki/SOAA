<!--NOTE: The index will NOT be the entry point on the final site. The index is only used to check the functionality of visual elements, so please do not put in a lot of work in it.-->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="../css/common.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>


	<body>		
		<div id="menu">
			<center>
				<form id="menuform" method="get" action="../php/test.php">
					<div class="menuitem" id="SOAA">		SOAA Logo	</div>
					<div class="menuitem" id="home">		Home		</div>
					<div class="menuitem" id="about">		About		</div>
					<div class="menuitem" id="events">		Events		</div>
					<div class="menuitem" id="changeforx">	Change For X</div>
					<div class="menuitem" id="contact">		Contact Us	</div>
					<input id="formvalue" type="hidden" name="page" value="home">
				</form>
				<script src="../js/sendGetRequest.js"></script>
			</center>
		</div>
		<div id="header" style="background-image: url(../images/conference_1.jpg); background-size: cover; background-position: center center;">
		</div>
		<div id="body">
			<h1>Body</h1>
			<?php
				include("contentreader.php");
				readContent($_GET['page']);
			?>
		</div>
		<div id="footer">
			<h1>Footer</h1>
		</div>
	</body>
<html>