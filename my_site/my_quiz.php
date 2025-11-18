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
				<fieldset style="margin-bottom:150px">
		  			<legend>Pick up to four emotions</legend>
					    <!-- send an array called emotions[] to results page -->
						<div class="checkbox_container">
						
					<!-------- HAPPINESS -------->	
						  <div class="checkbox_subcat"> <label> Happiness </label>
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" 
								value="Happy">
								Happy	</label>
							<label class="my_checkmark">
								<input value="Confident" type="checkbox" name="emotions[]" >
								Confident	</label>
							<label class="my_checkmark">
								<input value="Amused" type="checkbox" name="emotions[]">
								Amused	</label>
							<label class="my_checkmark">
								<input value="Excited" type="checkbox" name="emotions[]">
								Excited		</label>
							<label class="my_checkmark">
								<input value="Proud" type="checkbox" name="emotions[]">
								Proud	</label>
							<label class="my_checkmark">
								<input value="Optimistic" type="checkbox" name="emotions[]">
								Optimistic	</label>
							
						  </div>

					<!-------- SADNESS --------->		
						  <div class="checkbox_subcat"> <label> Sadness </label> 
							
							<label class="my_checkmark">
								<input value="Sad" type="checkbox" name="emotions[]">
								Sad	</label>	
							<label class="my_checkmark">
								<input value="Lonely" type="checkbox" name="emotions[]">
								Lonely	</label>	
							<label class="my_checkmark">
								<input value="Hurt" type="checkbox" name="emotions[]">
								Hurt	</label>	
							<label class="my_checkmark">
								<input value="Distress" type="checkbox" name="emotions[]">
								Distress	</label>	
							<label class="my_checkmark">
								<input value="Disappointed" type="checkbox" name="emotions[]">
								Disappointed	</label>	
							<label class="my_checkmark">
								<input value="Defeated" type="checkbox" name="emotions[]">
								Defeated	</label>	
							<label class="my_checkmark">
								<input value="Neglected" type="checkbox" name="emotions[]">
								Neglected	</label>						
							
						  </div>

					<!--------- LOVE -------->		
						  <div class="checkbox_subcat"> <label> Love </label> 
								
							<label class="my_checkmark">
								<input value="Love" type="checkbox" name="emotions[]">
								Love	</label>	
							<label class="my_checkmark">
								<input value="Passion" type="checkbox" name="emotions[]">
								Passion	</label>	
							<label class="my_checkmark">
								<input value="Desire" type="checkbox" name="emotions[]">
								Desire	</label>	
							<label class="my_checkmark">
								<input value="Empathy" type="checkbox" name="emotions[]">
								Empathy	</label>	
							
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
							<label class="my_checkmark">
								<input value="Jealous" type="checkbox" name="emotions[]">
								Jealous	</label>	
							
						  </div>

					<!------- DISGUST -------->		
						  <div class="checkbox_subcat"> <label> Disgust </label> 
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Disgusted">
								Disgusted	</label>
							<label class="my_checkmark">
								<input value="Embarrassed" type="checkbox" name="emotions[]">
								Embarrassed	</label>	
							<label class="my_checkmark">
								<input value="Guilt" type="checkbox" name="emotions[]">
								Guilt	</label>	
							<label class="my_checkmark">
								<input value="Regret" type="checkbox" name="emotions[]">
								Regret	</label>	
							
						  </div>

					<!---------- FEAR --------->
						  <div class="checkbox_subcat"> <label> Fear </label> 
							
							<label class="my_checkmark">
								<input value="Scared" type="checkbox" name="emotions[]">
								Scared	</label>
							<label class="my_checkmark">
								<input value="Anxious" type="checkbox" name="emotions[]">
								Anxious	</label>
							<label class="my_checkmark">
								<input value="Suspense" type="checkbox" name="emotions[]">
								Suspense	</label>
							
						  </div>

					<!------- SURPRISED -------->		
						  <div class="checkbox_subcat"> <label> Surprise </label> 
							
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Surprised">
								Surprised	</label>
							<label class="my_checkmark">
								<input value="Curious" type="checkbox" name="emotions[]">
								Curious	</label>
							<label class="my_checkmark">
								<input value="Confused" type="checkbox" name="emotions[]">
								Confused	</label>
							
						  </div>

					<!------- DISCOMFORT -------->		
						  <div class="checkbox_subcat"> <label> Discomfort </label> 
							
							<label class="my_checkmark">
								<input value="Uncomfortable" type="checkbox" name="emotions[]">
								Uncomfortable	</label>
							<label class="my_checkmark">
								<input value="Tense" type="checkbox" name="emotions[]">
								Tense	</label>
							
						  </div>

					<!------- NEUTRAL -------->		
						  <div class="checkbox_subcat"> <label> Neutral </label> 
							
							<label class="my_checkmark">
								<input value="Neutral" type="checkbox" name="emotions[]">
								Neutral	</label>
							<label class="my_checkmark">
								<input type="checkbox" name="emotions[]" value="Bored">
								Bored	</label>
							<label class="my_checkmark">
								<input value="Nostalgic" type="checkbox" name="emotions[]">
								Nostalgic	</label>
							<label class="my_checkmark">
								<input value="Relaxed" type="checkbox" name="emotions[]">
								Relaxed	</label>
							<label class="my_checkmark">
								<input value="Content" type="checkbox" name="emotions[]">
								Content	</label>
							
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