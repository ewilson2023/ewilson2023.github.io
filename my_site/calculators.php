 <!DOCTYPE html>
<?php
	$current_page = 'calculators';		// set name variable
	$page_title = "Calculators";
	$title_size = "font-size: clamp(30px, 15.5cqw, 90px)";
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
		  	<div class="calculator_div">

		  		<!-- Calcultor 1: your age in terms of days -->
		  		<fieldset>
		  			<legend> How old are you terms of days? </legend>
		  			<div>
		  				<label for="DOB"> Your date of birth </label>
		  				<input  id="DOB" type="date">
		  			</div>
		  			<div>
		  				<input 
							type="button" 
							id="submit_days" 
							value="Click here to compute" 
							onclick="compute_days()">
		  			</div>
		  			<div class="answer">
		  				<p> The answer is: </p>
		  				<p id="p_answer_days"> (click submit first!) </p>
		  			</div>
		  		</fieldset>
		  		
		  		
		  		<!-- Calcultor 2: your age in terms of days -->
		  		<fieldset class="right">
		  			<legend> The radius & area of the biggest circle fitting in your screen </legend>
		  			<div>
		  				<input type="button" id="submit_circle" value="Click here to compute" onclick="compute_circle()">
		  			</div>
		  			<div class="answer">
		  				<p> The answer is: </p>
		  				<p id="p_answer_circle"> (click submit first!) </p>
		  			</div>
		  		</fieldset>
		  		
		  		
		  		<!-- Calcultor 3: Palindrome checker -->
		  		<fieldset>
		  			<legend> Palindrome checker </legend>
		  			<div>
		  				<input 
							type="text"
							id="possible_palindrome"
							value="Enter text here">
		  			</div>
		  			<div> 
		  				<input 
							type="button"
							id="submit_palindrome"
							value="Click here to compute"
							onclick="check_palindrome()">
		  			</div>
		  			<div  class="answer">
		  				<p> The answer is: </p>
		  				<p id="p_answer_palindrome"> (click submit first!) </p>
		  			</div>
		  		</fieldset>
		  		
		  		
		  		<!-- Calcultor 4: Fibonnacci -->
		  		<fieldset class="right">
		  			<legend> Fibonacci </legend>
		  			<div>
		  				<label for="fibo_length"> 
		  				How long would you like me to create the Fibonacci sequence?
		  				<input type="number" id="fibo_length">
		  			</div>
		  			<div>
		  				<input type="button" id="submit_fibo" value="Click here to compute" onclick="create_fibo()">
		  			</div>
		  			<div class="answer">
		  				<p> The answer is: </p>
		  				<p id="p_answer_fibo"> (click submit first!) </p>
		  			</div>
		  		</fieldset>
		  			
		  			
		  	</div>
		  
		  </div>
		</div>
		
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	</body>
</html>