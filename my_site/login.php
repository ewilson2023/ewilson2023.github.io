<!DOCTYPE html>
<?php
	$current_page = 'login';		// set name variable
	$page_title = "To-Do List";
?>

<html>
	<head>
		<?php require 'common/head.php';?>
		
		<style>
		.error { color:#FF5722;	font-weight: bold;	}
		</style>
		
	</head>
	
	<body>
	<!-- HEADER -->
		<?php require 'common/header-nav.php';	?>
		
	<!-- MAIN SECTION -->
		<div class="body_wrapper">
			<div class="main">	
			
				<form action="login.php" method="POST">
					Enter Password: <input type="text" name="pword">
					<input 
						class="button"
						type="submit" 
						value="Submit">
				</form>
				
				<?php
				$result = '';
				
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					
					$password = htmlspecialchars($_POST['pword'] ?? '');
					if ($password == '') {
						$result = "Please enter password";
					}
					$password = strtoupper($password);		// make case insensitive for my own convienience
					$password = hash("sha256", $password);	// protect password
					
					
					if ($password != "b14e9015dae06b5e206c2b37178eac45e193792c5ccf1d48974552614c61f2ff") {
						$result = '<div class="error">No!</div>';
					} else {
						// identify server host
						if ($_SERVER['SERVER_NAME'] === 'localhost') {
							$BASE_URL= $_SERVER['HTTP_HOST'] . '/my_site/';
						} elseif ($_SERVER['SERVER_NAME'] === 'osiris.ubishops.ca'){
							$BASE_URL= $_SERVER['HTTP_HOST'] . '/home/ewilson/';
						} else {
							$BASE_URL= $_SERVER['HTTP_HOST'];
						}
						// redirect
						header('Location: http://' . $BASE_URL .  'to-do.php');
						exit();
					}
				}
				// known bug: "Please enter password" always appears by default. making the below "!=" makes "No!" appear
				if ($result !== '') { echo $result; }
				?>		
	
				</div>
		</div>
	
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	</body>
</html>


<!--/////////////
		/*
		Ternary Operator: if/else shorthand
			[store in variable] = [condition] ? [do this if TRUE] : [do this if FALSE]
			$i = ($i == $n) ? return : $i + 1;
		
		?? checks if something is set and not null. if not set, returns a default value
			$name = $name ?? 'Guest';
		IS THE SAME AS:
			if (isset($name))	$name = $name;
			else $name = 'Guest';
		*/
-->