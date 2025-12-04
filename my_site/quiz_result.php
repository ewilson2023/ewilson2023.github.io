<!-- 
This page shows the results of the "my_quiz" page. A coloured 
gradient circle should appear with the results as a string below.
-->

<!DOCTYPE html>

<?php
	$current_page = 'quiz';		// set name variable
	$page_title = "Quiz";
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
					

			<!------- RESULT CALCULATION ------->
			<?php include'common/quiz_management.php';?>

			<!----------- SUBHEADER ------------>
			<div class="h2_decorated">
				<hr><h2>Mood Ring</h2><hr>
			</div>		    
					
			<!---------- DISPLAY RESULT -------->		
			<div style=" display: flex;	flex-direction: column;	align-items: center;">

				<!-- place an html element with a gradient of the chosen colours -->
				<div class="circle_base" <?= $gradient_style ?> >
				
					<img style="opacity: 15%; mix-blend-mode: initial" src="images/moodring_overlay1.png">
					<img src="images/moodring_overlay1.png">
					<img src="images/moodring_overlay2.png">
				</div>

				<!-- print final result string -->
				<div class="result_text">
				<?= $FINAL_RESULT_STR ?> </div>
				
				<!-- print selected emotions string -->
				<div stlye="text-align: center;">
				<?= $byline_str ?> </div>
				
				<!-- return button -->
				<a href="my_quiz.php">
					<input 
					class="button" 
					id="return_to_quiz" 
					type="button" 
					value="Return">
				</a>

			</div>

	<!----- END OF MAIN BODY ------>
		  </div>
		</div>
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	</body>
</html>