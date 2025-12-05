
<?php
	$current_page = 'login'; 
	$page_title = "Login";
	require 'common/required.php';
?>
 
<?php
// MODAL for to-do login
session_start();

// Remember which page the user was trying to access, 'todo' or 'blog'
/* $next_page; */
$next_page = $_GET['next'] ?? $_POST['next'] ?? 'index.php';
$url = $_SERVER['REQUEST_URI'];
$exp_url = "/next=/";	$exp_next = "/.*=/";

if (preg_match($exp_url, $url)){
	$next_page = preg_replace($exp_next, "", $url);
}

if ($DEBUG_ON)	debug_echo($url);
if ($DEBUG_ON && isset($next_page))	debug_echo($next_page);

// If  user was already logged in, skip login page without verifying password
if (logged_in()) {
	redirect($next_page);
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

	if ($verify_pword === 0){	// if no input
		$result = '<div>Please enter password</div>';
	}else if ($verify_pword === -1){	// if pword incorrect
		$result = '<div class="error">No!</div>';	
	}else {
		// password is correct
		$_SESSION['is_logged_in'] = true;

		// Use posted next_page if present, otherwise default to to-do.php
		if (!empty($_POST['next_page'])) {
			$dest = $_POST['next_page'];
			echo '$_POST[\'next_page\'] = empty';
		} else {
			$dest = 'to-do.php';
			echo '$_POST[\'next_page\'] = NOT empty';
		}
		
		redirect($dest);
	}
	}
}

?>	

<!DOCTYPE html>
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

				<div class="card">
					<!----------- SUBHEADER ------------>
					<div class="h2_decorated"><hr><h2>Login</h2><hr> </div>	

					<!------------- FORM -------------->
					<form method="POST">
						<input type="hidden" name="next_page" value="<?php echo $next_page; ?>">

						<label for="sumbit"><b>Enter the password...</b></label>
						<input type="text" placeholder="Type here" name="pword">

						<!------------- SUBMIT ------------->
						<input class="button" name="submit" type="submit" value="Submit">
								
						<?php if ($result !== '') echo $result; ?>

					</form>

				</div>
			</div>
		</div>
	
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	</body>
</html>


