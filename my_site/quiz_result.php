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
	
		</style>
	</head>
	
	<body>
	<!-- HEADER -->
		<?php require 'common/header-nav.php';	?>
		
	<!-- MAIN SECTION -->
		<div class="body_wrapper">
		  <div class="main">
			

<!-- quiz stuff -->
<?php
// use an array to store emotions as keys to colours
require 'common/emotion_colours.php';
require 'common/emotion_recipes.php';

$FINAL_RESULT_STR;
$byline_str = "";
$colour_vals = "";
$moods_map = array();
$gradient_style = "";

/* var_dump($emotions_map_data);	//debug
echo "<br><br>";
 */	
$DEBUG_ON = false;

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		
		$moods_map = array();
		
		// if no options chosen
		if (!isset($_GET['emotions']) || count($_GET['emotions']) == 0){
			// display error
			$FINAL_RESULT_STR = "Uh-Oh";
			$gradient_style = "style=\"background-image: 
				repeating-radial-gradient(yellow, skyblue 10%, yellow 15%);\"";  /* error */
		
		// if only one option chosen
		} else if (sizeof(($_GET['emotions'])) == 1){
			$moods_index = ($_GET['emotions']);

			$FINAL_RESULT_STR = $moods_index[0];
			$col = $emotions_map_data[$FINAL_RESULT_STR];
			$gradient_style = "style=\"background-image: conic-gradient(" . $col . ");\"";
		
		// if more than 1 option chosen
		} else {
			$moods_index = ($_GET['emotions']);
			
			// make $moods_map store the selected "emotion" => "hexcode" 	
			foreach ($moods_index as $x => $y) {
				// $moods_map[] = add "Lonely" => "#342caa" 
				$moods_map[$y] = $emotions_map_data[$y];	// add to the emotions array
			}

			// $x => $y
			// create byline strings and 
			for ($i = 0; $i < sizeof($moods_map); $i++) {
				$x = $moods_index[$i];	// $moods_index is 0 => 'mood name'
				$y = $moods_map[$x];	// $moods_map is 'mood name' => 'mood_colour'
				
				// save the 'mood name' to $byline_str (for printing) 
				// & save 'mood_colour' to $colour_vals for gradient generation
				if ($byline_str == "") {
					$byline_str = $x;
					$colour_vals = $y;
				} else  {
					$byline_str = $byline_str . ", " . $x;
					$colour_vals = $colour_vals . ", " . $y;
				}
				
			}

			// append first key for smooth gradient
			$colour_vals = $colour_vals .
				", " . $moods_map[array_key_first($moods_map)];
			$gradient_style = 
				"style=\"background-image: conic-gradient(" .
				$colour_vals . ");\"";

			/********* SYNONYMNS ***********/
			
			$matched_syns = [];	// store matched synonymns
			$matched_moods = [];	// store selected emotion

			/*debug*/ if($DEBUG_ON) echo "<b>\$cur_combo:</b><br>";

			// compare all selected moods with known recipes 
			for ($i = 0; $i < sizeof($moods_map); $i++) {
			  for ($j = $i + 1; $j < sizeof($moods_map); $j++) {

				$key1 = $moods_index[$i]; $key2 = $moods_index[$j]; 
				
				// normalize order of mood names alphabetically
				if(strcmp($key1, $key2) > 0) {
					$tmp = $key1;
					$key1 = $key2;
					$key2 = $tmp;
				} 

				$cur_combo = $key1 . ', ' . $key2;
				
 
				// if the 'key1, key2' pair has a synonym
				if (isset($EMOTION_RECIPES_DATA[$cur_combo])) {
					/*debug*/	if($DEBUG_ON) echo "<i><br>recipe [<b>$cur_combo</b>] is set! => \"<b>$EMOTION_RECIPES_DATA[$cur_combo]</b>\"</i><br>";
					// add the matched moods and synonyms to their arrays
					$matched_moods[$key1] = "1";	// 1 is a sentinel value
					$matched_moods[$key2] = "1";
					$matched_syns[] = $EMOTION_RECIPES_DATA[$cur_combo];
				} /*debug*/	else if($DEBUG_ON) echo "<i><br>recipe [<b>$cur_combo</b>] is NOT set. </i><br>";
				 
				  
				// check for three emotion combos
				if (sizeof($moods_map) > 2) {
				  for ($k = $j + 1; $k < sizeof($moods_map); $k++) {

					$key3 = $moods_index[$k];

					// normalize order of mood names alphabetically
					if(strcmp($key2, $key3) > 0) {
						$tmp = $key2;
						$key2 = $key3;
						$key3 = $tmp;

						if(strcmp($key1, $key2) > 0) {
							$tmp = $key1;
							$key1 = $key2;
							$key2 = $tmp;
						}
					}

					$cur_combo = $key1 . ', ' . $key2 . ', ' . $key3;
					

					// if the 'key1, key2' pair has a synonym
					if (isset($EMOTION_RECIPES_DATA[$cur_combo])) {
						/*debug*/	if($DEBUG_ON) echo "<i>recipe [<b>$cur_combo</b>] is set! => \"<b>$EMOTION_RECIPES_DATA[$cur_combo]</b>\"</i><br>";
						// add the matched moods and synonyms to their arrays
						$matched_moods[$key1] = "1";
						$matched_moods[$key2] = "1";
						$matched_moods[$key3] = "1";
						$matched_syns[] = $EMOTION_RECIPES_DATA[$cur_combo];
					} else if($DEBUG_ON) echo "<i>recipe [<b>$cur_combo</b>] is NOT set.</i><br>";

				  }
				}
				
			  }
			}
			unset($i, $j, $k);
			
			$nomatch_moods = [];
			
			// Remove duplicate synonyms
			$matched_syns = array_values(array_unique($matched_syns));

			// if $mood wasn't matched, add it to the nomatch array
			foreach ($moods_map as $mood => $val) {
				if (!isset($matched_moods[$mood])) {
					$nomatch_moods[] = $mood;
				}
			}
			$final_size = sizeof($matched_syns) + sizeof($nomatch_moods);
			// save matched synonyms and any remaining emotions

			for ($i = 0; $i < sizeof($matched_syns); $i++){
				if (!isset($FINAL_RESULT_STR)) {
					$FINAL_RESULT_STR = $matched_syns[$i];
				} else if ($i == $final_size - 1) {
					$FINAL_RESULT_STR .=  " and " . $matched_syns[$i];
				} else $FINAL_RESULT_STR .=  ", " . $matched_syns[$i];
			}
			for ($i = 0; $i < sizeof($nomatch_moods); $i++){
				if (!isset($FINAL_RESULT_STR)) {
					$FINAL_RESULT_STR = $nomatch_moods[$i];
				} else if ($i == $final_size - 1) {
					$FINAL_RESULT_STR .=  " and " . $nomatch_moods[$i];
				} else $FINAL_RESULT_STR .=  ", " . $nomatch_moods[$i];
			}
		
/* 	/*debug	echo "<b>var_dump(\$matched_syns): </b><br>&Tab;"; var_dump($matched_syns);
	/*debug	echo "<b><br>var_dump(\$nomatch_moods): </b><br>&Tab;"; var_dump($nomatch_moods);
	/*debug	echo "<b><br>var_dump(\$matched_moods): </b><br>&Tab;"; var_dump($matched_moods);		
				 */
		// hide byline if it's the same as the final result	
			if (empty($matched_syns)) {
				$byline_str = "";
			}

/* 			echo $byline_str . "<br>";
			echo $colour_vals . "<br>"; */
			
		}  
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