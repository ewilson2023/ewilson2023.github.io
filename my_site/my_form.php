<!DOCTYPE html>
<html>
	<head>
		<title>Lab <?php include 'common/labnum.php';?>: Quiz</title>
		<?php require 'common/head.php';?>
		
	</head>
	
	<body>
	<!-- HEADER -->
		<div class="header">
			<!-- Title -->
			<div class="title_wrapper">
				<h1>Lab <?php include 'common/labnum.php';?> Quiz</h1>
				<div class="subtitle">
					<hr>
						<h2> Liz Wilson	</h2>
					<hr>
				</div>
			</div>
			<nav> 
				<?php
					$current_page = 'quiz';
					require 'common/nav.php';
				?>
			</nav> 
			
		</div>
		
	<!-- MAIN SECTION -->
		<div class="body_wrapper">
		  <div class="main">	
		  	<div class="h2_decorated">
		  		<hr>
		  			<h2>work in progress</h2>
		  		<hr>
		  	</div>			
		  	
		  	<!--The <fieldset> tag is used to group related elements in a form.
		  	The <fieldset> tag draws a box around the related elements. -->
		  	<fieldset>
		  		<form action="quiz_verification.php"  method="GET">
		  			<legend>Quiz:</legend>
		  			<div>
						<label for="input1"> 
		  				it's 11:23pm and i do NOT have time to make this a real quiz</label><br>
		  				<input id="input1" type="text" value="Enter text here">
		  			</div>
					<div>
		  				Prompt for input2<br>
		  				<input  id="input2a" type="radio" value="input2a_value" name="input2_name">
						<label for="input2a">input2a label</label><br>
		  				<input  id="input2b" type="radio" value="input2b_value" name="input2_name">
						<label for="input2b">input2b label</label><br>
		  				<input  id="input2c" type="radio" value="input2c_value" name="input2_name">
						<label for="input2c">input2c label</label><br>
		  			</div>
		  			<div>
						<label for="dateinput">	Prompt for dateinput </label>
						<input  id="dateinput" type="date">
		  			</div>
					<div>
		  				<input id="submit_quiz" type="button" value="Click here" onclick="<!-- SOMETHING -->">
		  				<label for="submit_quiz"> submit answers </label><br>
		  			</div>
		  			
		  		</form>
		  	</fieldset>
		  	
		  </div>
		</div>
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	</body>
</html>