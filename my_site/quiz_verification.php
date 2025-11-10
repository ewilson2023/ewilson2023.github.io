<!-- quiz stuff -->
<?php

	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$finalResult;
		$result = 80;
		
		/* define $result */
		
		if ($result >=75 && $result <= 100) {
			$finalResult = 'A';
		}
		elseif ($result >= 50 && $result < 75) {
			$finalResult = 'B';
		}
		elseif ($result >= 25 && $result < 50) {
			$finalResult = 'C';
		}
		elseif ($result >= 0 && $result < 25) {
			$finalResult = 'D';
		}
		
		
		if ($finalResult !== '') 
			{ echo $finalResult; }
	}
	

					
?>

<p> ... My answer is: <?php echo "$finalResult"  ?></p>