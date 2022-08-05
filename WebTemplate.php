<!-- Exercise on pages 215 - 217 -->
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Template</title>
</head>
<body>
	<?php include("inc_header.html"); ?>
	<div style="width:20%; text-align: center; float: left;">
		<?php include("inc_buttonnav.html"); ?>
	</div>
	<!-- Start of dynamic content section -->
	<?php
		if(isset($_GET["content"])) {
			switch($_GET["content"]){
				case "About me":
					include("inc_about.html");
					break;
				case "Contact Me":
					include("inc_contact.html");
					break;
				default: // Home was clicked 
					include("inc_home.html");
					break;
			} // end of switch 
		} 
		else {
			// No button has been clicked yet
			include("inc_home.html");

		}
	?>
	<!-- End of the dynamic content section -->
	<?php 
		include("inc_footer.php");
	?>
</body>
</html>