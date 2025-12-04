
<?php
	$current_page = 'login'; 
	$page_title = "To-Do List";

	require 'common/required.php';
	
?>

<?php
/**
 * MODAL for to-do login
 */

session_start();

// If  user was already logged in, skip login page without verifying password
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true && !isset($_POST['logout'])) {
	redirect('to-do.php');
	exit;
}


$result = '';	// instantiate result string


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (isset($_POST['logout'])) {
		session_destroy();  
		session_start(); 
		$result = 'Sucessfully logged out';
	} else {



	$input = htmlspecialchars($_POST['pword'] ?? '');
	$correct_hash = "b14e9015dae06b5e206c2b37178eac45e193792c5ccf1d48974552614c61f2ff";
	$verify_pword = verify_pword($input, $correct_hash);

	if ($verify_pword === 0)	// if no input
		$result = '<div>Please enter password</div>';
	else if ($verify_pword === -1)	// if pword incorrect
		$result = '<div class="error">No!</div>';
	else {
		// password is correct
		$_SESSION['is_logged_in'] = true;
		redirect('to-do.php');
	}
	}
}

?>	

<!DOCTYPE html>
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
						<?php 
						// known bug: "Please enter password" always appears by default. 
						// making the below "!=" makes "No!" appear
						if ($result !== '') echo $result;
						?>
				</form>
				

	
			</div>
		</div>
	
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	</body>
</html>


