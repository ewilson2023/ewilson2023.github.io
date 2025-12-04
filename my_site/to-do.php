<!DOCTYPE html>
<?php
	$current_page = 'todo';		// set name variable
	$page_title = "To-Do List";
?>

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
					</div>
					<div>
						<input 
							type="button" 
							id="submit_todo_item" 
							value="Click here to add" 
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
