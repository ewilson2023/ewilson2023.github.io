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
		  
		  <!-------------- test ------------------------
		<label class="my_checkmark">
			<input type="checkbox" name="emotions[]" value="Happy">
				Happy
		</label>
		  <label class="my_checkmark">
			  <input type="checkbox"/>
			  Checkbox
		  </label>
		  <label class="my_checkmark">
			  <input type="checkbox" checked />
			  Checkbox - checked
		  </label>
		  <label class="my_checkmark">
			  <input type="checkbox"/>
			  Checkbox
		  </label>
		  <label class="my_checkmark">
			  <input type="checkbox"/>
			  Checkbox
		  </label>


		  		  <label class="my_checkmark">
			  <input type="checkbox" name="checkbox-checked" checked />
			  Checkbox - checked
		  </label>
		  -------------------------------------->
		  
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
						  <div class="checkbox_subcat"> <label> Happiness </label>
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Happy">
								Happy
							</label>
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Confident">
								Confident
							</label>
							
						  </div>

					<!-------- SADNESS --------->		
						  <div class="checkbox_subcat"> <label> Sadness </label> 
							
							<label class="my_checkmark"> 
								<input type="checkbox" name="emotions[]" value="Sad">
								Sad
							</label>
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Lonely">
								Lonely
							</label>
							
						  </div>

					<!--------- ANGER -------->		
						  <div class="checkbox_subcat"> <label> Anger </label> 
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Angry">
								Angry
							</label>
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Annoyed">
								Annoyed
							</label>
							
						  </div>

					<!------- DISGUST -------->		
						  <div class="checkbox_subcat"> <label> Disgust </label> 
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Disgusted">
								Disgusted
							</label>
							
						  </div>

					<!---------- FEAR --------->
						  <div class="checkbox_subcat"> <label> Fear </label> 
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Scared">
								Scared
							</label>
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Tense">
								Tense
							</label>
							
							
						  </div>

					<!------- SURPRISED -------->		
						  <div class="checkbox_subcat"> <label> Surprise </label> 
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Surprised">
								Surprised
							</label>
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Confused">
								Confused
							</label>
							
						  </div>

					<!------- NEUTRAL -------->		
						  <div class="checkbox_subcat"> <label> Neutral </label> 
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Indifferent">
								Indifferent
							</label>
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Bored">
								Bored
							</label>
							
						  </div>

						</div>

					
					<!------- SUBMIT BUTTONS -------->	
		  				<input 
							class="button"
							id="submit_quiz" 
							type="submit" 
							value="Submit">
						<input 
							class="button"
							type="reset" 
							value="Reset">
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
			const checkboxes = document.querySelectorAll('input.my_checkmark);
			
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

QUIZ:
- fix spacing of checkbox subcategories
- add more emotions
- make result text keys have associated colour 

OTHER:
- fix my_artistic self


--->