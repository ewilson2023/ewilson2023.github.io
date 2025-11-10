<!DOCTYPE html>

<?php
	$current_page = 'artisticSelf';		// set name variable
	$page_title = "My Artistic Self";
	$title_size = "font-size: clamp(30px, 13cqw, 90px)";
?>
<html>
	<head>
		<?php require 'common/head.php';?>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nabla">
		
		<style>
		/* -left/+right -top/+bottom */
			.wordArt {
				margin: 30px 25% 0 25%;
				
				background-image: url('images/art5.jpg');
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;
				max-height:800px;
				
				font-family: Nabla;
				color: var(--orangeDark);
				text-shadow: 
					1px -2px 0 black, /*right */
					0px -3px 0 black, /*top */
					-3px -1px 0 black, /*left */
					1px 1.5px 0 black; /*bottom */
			}
			
			#w1 {
				font-size: 50px;
				transform: rotate(30deg);
				translate: 100px 150px;			
			}
			#w2 {
				font-size: 75px;
				letter-spacing: 0.3rem;
				translate: -100px 130px;		
			}
			#w3 {
				font-size: 85px;
				translate: 400px -200px;		
			}
			#w4 {
				font-size: 100px;
				transform: rotate(-20deg);
				translate: 100px -200px;		
			}
			#w5 {
				font-size: 90px;
				transform: rotate(15deg);
				translate: 300px -150px;
			}
		</style>
		
	</head>
	
	<body>
		<!-- HEADER -->
		<?php require 'common/header-nav.php';	?>
		
		<!-- MAIN SECTION -->
		<div class="main">
				
				<div class="wordArt">
					<p id="w1">word1</p>
					<p id="w2">Nerdy</p>
					<p id="w3">Artist</p>
					<p id="w4">Curious</p>
					<p id="w5">?????</p>
				
				</div>
				<div class="body_wrapper" style="margin-top: 8px	">
					<p style="margin-left: 20%"> 
						This is a digital painting I created in 2021.
					</p>
				</div>
		</div>
	<!-- FOOTER -->
		<?php include 'common/footer.php';	?>
	</body>
</html>