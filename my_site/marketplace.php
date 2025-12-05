<!-- 
 A javascript marketplace simulation from a previous lab
-->
<!DOCTYPE html>

<?php
	$current_page = 'marketplace';		// set name variable
	$page_title = "Marketplace";
?>
<html>
	<head>
		<?php require 'common/head.php';?>
	</head>
	
	<body>
	<!-- HEADER -->
		<?php require 'common/header-nav.php';	?>
		
	<!-- MAIN SECTION -->
		<div class="body_wrapper">
			<div class="main">	
			
			<script src="javascript/1-marketplace.js"> </script>
			
			</div>
		</div>
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	</body>
</html>