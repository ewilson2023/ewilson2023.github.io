<!DOCTYPE html>

<?php
	$current_page = 'quiz';		// set name variable
	$page_title = "Quiz";
	$title_size = "font-size: clamp(40px, 18cqw, 90px)";
?>

<html>
	<head>
		<?php require 'common/head.php';?>
		
		<style>
			.gradient_moodring {
				max-width: 300px;
				max-height: 300px;
				width: 70vw; 
				height: 70vw; 
				margin-top: 20px;
				border-radius: 50%;		/* make it a circle */
				
				background-color: green; /* default */
			}
			.result_text {
				text-align: center;
				text-transform: none;
				font-variant: small-caps;
				padding-top: 0;
				font-weight: bold;
				font-size: clamp(15px, 10vw, 20px);
				letter-spacing: 0.15rem;
				margin-top: 20px;
			}
			
		</style>
	</head>
	
	<body>
	<!-- HEADER -->
		<?php require 'common/header-nav.php';	?>
		
	<!-- MAIN SECTION -->
		<div class="body_wrapper">
		  <div class="main">
		  
		  	<!-- this works: 
			<div 
				class="grad_base" 
				style="background-image: conic-gradient(red, blue, red);">
			</div>-->
			
			

<!-- quiz stuff -->
<?php
// use an array to store emotions as keys to colours
require 'common/emotion_colours.php';

$emotion_keys = "";
$emotion_hexs = "";
$emotions = array();
$str = "[result string]";

/* var_dump($emotionColours);	//debug
echo "<br><br>";
 */	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		
		$emotions = array();
		
		if (!isset($_GET['emotions']) || count($_GET['emotions']) == 0){
			$str = "no emotions";
			$emotions['Indifferent'] = '#e9e9e9';
		} else {
			$emotions_input = ($_GET['emotions']);
			
			// make $emotions store the selected "emotion" => "hexcode" 	
			foreach ($emotions_input as $x => $y) {
				// $emotions[] = add "Lonely" => "#342caa" 
				$emotions[$y] = $emotionColours[$y];	// add to the emotions array
/* 				echo "\t\$emotionColours['$y'] = " . $emotionColours[$y] . "<br>";
				echo "\t\$emotions['$y'] = " . $emotions[$y] . "<br>";
 */
			}


			foreach ($emotions as $x => $y) {
				if ($emotion_keys == "") {
					$emotion_keys = $x;
					$emotion_hexs = $y;
				} else  {
					$emotion_keys = $emotion_keys . ", " . $x;
					$emotion_hexs = $emotion_hexs . ", " . $y;
				}
			}
			
			// append first key for smooth gradient
			$emotion_hexs = $emotion_hexs . ", " . $emotions[array_key_first($emotions)];


/* 			echo $emotion_keys . "<br>";
			echo $emotion_hexs . "<br>"; */
			
		}

		$col1 = 'red';
		$col2 = 'blue';
		$gradient_cols = $col1 . ", " . $col2;
        
	}
				
?>

	<div class="h2_decorated">
		  <hr><h2>Mood Ring</h2><hr>
	</div>		    
			
			
	<div style="
		display: flex;
		flex-direction: column;
		align-items: center;
	">

		<!-- place an html element with a gradient of the chosen colours -->
		<div class="gradient_moodring" 
			style="background-image: conic-gradient(
			<?= $emotion_hexs ?> )">
		</div>

		<div class="result_text">
		<?= $emotion_keys ?> </div>
		
		
		<a href="my_quiz.php">
			<input id="return_to_quiz" type="button" value="Return">
		</a>
		
	</div>
	


	<!----- END OF MAIN BODY ------>
		  </div>
		</div>
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	</body>
</html>