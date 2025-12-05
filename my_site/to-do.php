
<?php
	$current_page = 'todo';		
	$page_title = "To-Do List";
	require 'common/required.php';
?>
<?php
// MODAL for to-do actual page
session_start();

if (!logged_in()) {
	redirect('login.php?next=to-do.php');
} 
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require 'common/head.php';?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

		<script src="javascript/todo.js">
	
		</script>
	</head>
	
	<body>
	<!-- HEADER -->
		<?php require 'common/header-nav.php';	?>
		
	<!-- MAIN SECTION -->
		<div class="body_wrapper">
			<div class="main">	
				<div style="position: absolute">
					<form method="POST" action="login.php?next=to-do.php">
						<input type="submit" 
								class="button"
								name="logout" 
								value="Log out">
					</form>
				</div>
			
				<div class="h2_decorated">
					<hr>
						<h2>To-Do List</h2>
					<hr>
				</div>
				
				<!-- TO-DO list -->
				<fieldset>
					<legend> List </legend>
					<!-- list input -->
					<div>
						<label for="item_text"> Enter list items: </label>
						<input type="text" id="item_text">
						
						<input 
							type="button" 
							id="submit_todo_item" 
							value="Add"
							class="button"
							onclick="addItem()">
					</div>
					
					<!-- the actual list -->
					<ul id="the_list">
					</ul>
					
				</fieldset>
				
				
			</div>
		</div>
		
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>
	
	</body>

</html>
