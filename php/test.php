<!-- change url inside htaccess -->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="../css/common.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>


	<body><div id="maindiv">	
		
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

				
			</center>
		</div>
		<div id="header" style="background-image: url(../images/conference_1.jpg); background-size: cover; background-position: center center;">
		</div>
		<div id="contentbody">
			<?php
				if(empty($_GET['page'])){
					?>
					<script>
						document.getElementById('menuform').submit();
					</script>
					<?php
				}
				include("contentreader.php");
				if(strpos($_GET['page'],'.') !== 0 && strpos($_GET['page'],'/') !== 0){
					readContent('../content/' . $_GET['page']);
				}else{
					echo 'nice try';
				}
			?>
		</div>
		<!--
		<div id="footer">
		</div>
		-->
		<script src="../js/sendGetRequest.js"></script>
	</div></body>
<html>