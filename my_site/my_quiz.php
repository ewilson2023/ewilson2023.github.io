<!DOCTYPE html>

<?php
	$current_page = 'quiz';		// set name variable
	$page_title = "Quiz";
	$title_size = "font-size: clamp(40px, 18cqw, 90px)";
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
		  
		  
		  	<div class="h2_decorated">
		  		<hr><h2>Mood Ring</h2><hr>
		  	</div>			
		  	
		  	<!--The <fieldset> tag is used to group related elements in a form.
		  	The <fieldset> tag draws a box around the related elements. -->
		  	<form action="quiz_result.php"  method="GET">
				<fieldset>
		  			<legend>Pick up to four emotions</legend>
					    <!-- send an array called emotions[] to results page -->
						<div class="checkbox_container">
						
					<!-------- HAPPINESS -------->	
						  <div class="checkbox_subcat"> <label> Happiness  </label> 
							
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_Happy" name="emotions[]" value="Happy">
								<label for="emotion_Happy"> 
									Happy
								</label>
							</div>
							
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_Confident" name="emotions[]" value="Confident">
								<label for="emotion_Confident"> 
									Confident
								</label>
							</div>
							
						  </div>
							

							
					<!-------- SADNESS --------->		
						  <div class="checkbox_subcat"> <label> Sadness </label> 
							
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_Sad" name="emotions[]" value="Sad">
								<label for="emotion_Sad">
									Sad
								</label>
							</div>
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_Lonely" name="emotions[]" value="Lonely">
								<label for="emotion_Lonely">
									Lonely
								</label>
							</div>
							
						  </div>
						  
					<!--------- ANGER -------->		
						  <div class="checkbox_subcat"> <label> Anger </label> 
							
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_angry" name="emotions[]" value="Angry">
								<label for="emotion_angry">
									Angry
								</label>
							</div>
							
						  </div>	
						  
					<!------- DISGUST -------->		
						  <div class="checkbox_subcat"> <label> Disgust </label> 
							
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_Disgusted" name="emotions[]" value="Disgusted">
								<label for="emotion_Disgusted">
									Disgusted
								</label>
							</div>
							
						  </div>
						  
					<!---------- FEAR --------->
						  <div class="checkbox_subcat"> <label> Fear </label> 
							
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_Afraid" name="emotions[]" value="Afraid">
								<label for="emotion_Afraid">
									Afraid
								</label>
							</div>
							
							
						  </div>
						  
					<!------- SURPRISED -------->		
						  <div class="checkbox_subcat"> <label> Surprise </label> 
							
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_Surprised" name="emotions[]" value="Surprised">
								<label for="emotion_Surprised">
									Surprised
								</label>
							</div>
							
						  </div>
						  
					<!------- NEUTRAL -------->		
						  <div class="checkbox_subcat"> <label> Neutral </label> 
							
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_indifferent" name="emotions[]" value="Indifferent">
								<label for="emotion_indifferent">
									Indifferent
								</label>
							</div>
							
							<div class="checkbox_and_label">
								<input class="single-checkbox" type="checkbox" id="emotion_bored" name="emotions[]" value="Bored">
								<label for="emotion_bored">
									Bored
								</label>
							</div>
							
						  </div>
						  
						</div>

					
					<div>
		  				<input id="submit_quiz" type="submit" value="Submit">
						<input type="reset" value="Reset">
		  			</div>
		  			
				</fieldset>
		  		</form>
		  	
		  </div>
		</div>
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	<!-- JAVASCRIPT -->	
	<script> /* limit number of choices */
		document.addEventListener('DOMContentLoaded', function () {
			const max = 4;
			const checkboxes = document.querySelectorAll('input.single-checkbox');
			
			// for every checkbox...
			checkboxes.forEach(
				function (checkbox) {
					// if its status is changed...
					checkbox.addEventListener('change', 
						function () {
							// tally the currently checked boxes
							const checked = document.querySelectorAll('input.single-checkbox:checked');
							
							// if too many are checked, keep the one just clicked unchecked
							if (checked.length > max) {
								this.checked = false;
							}
						}
					);
				}
			);
		});
	</script>
	
	
	
	
	</body>
</html>


<!--
Add/fix later:

GENERAL:
- checkbox formatting
- button formatting
- drop down formatting

QUIZ:
- circle result overflow on right side of container
- add subtle shading esp. for single emotions
- fix spacing of checkbox subcategories
- add more emotions
- make result text keys have associated colour 
- make resaults a random type od gradient

OTHER:
- fix my_artistic self


--->