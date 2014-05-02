<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo $option['title']; ?></title>
	<link rel="stylesheet" href="themes/MuGlobal/css/style.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/easyTooltip.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("[title]").easyTooltip();
		});
	</script>
</head>
<body>
<div id="body_wrapper">

	<div id="container">
		<div class="clearfix">

			<div class="left">
				<nav>
					<?php
						include 'themes/MuGlobal/index/side_menu.php';
					?>
				</nav>
				<?php
					include 'themes/MuGlobal/index/user_panel.php';
				?>
			</div>
			
			<div class="right">
			
				<div class="content">
					<div class="contentTitle">Content</div>
					<div class="contentBody">
						<?php
							require 'inc/loader.php';
						?>
					</div>
				</div>
				
			</div>
			
		</div>

		<div class="fixfooter">
			<div id="footer">
				<p>
					<a href="?p=files">Download Client</a> |
					<a href="?p=register">Register</a> |
					<a href="?p=home">Home</a> | 
					<a href="?p=gamemasters">Staff</a>
					<br /> 
					Copyrights &copy; MeMoS, All Rights Reserved.
					<br />
					Original Design by RisingKing
				</p>
			</div>
		</div>
		
	</div>
</div>
</body>
</html>
