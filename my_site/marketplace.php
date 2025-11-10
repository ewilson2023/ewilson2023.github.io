<!DOCTYPE html>
<html>
	<head>
		<title>Lab <?php include 'common/labnum.php';?> Marketplace</title>
		<?php require 'common/head.php';?>
	</head>
	
	<body>
	<!-- HEADER -->
		<div class="header">
			<!-- Title -->
			<div class="title_wrapper">
				<h1 style="font-size: clamp(30px, 15cqw, 90px)">
					Lab <?php include 'common/labnum.php';?> Marketplace
				</h1>
				<div class="subtitle">
					<hr>
						<h2> Liz Wilson	</h2>
					<hr>
				</div>
			</div>
			<!-- NAV BAR -->
			<nav>
				<?php
					$current_page = 'marketplace';		// set name variable
					require 'common/nav.php';
				?>
			</nav>
			
		</div>
		
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