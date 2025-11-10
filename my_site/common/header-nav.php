<?php 
//$labnum = 9; 
ob_start();
include 'common/labnum.php';
$labnum = ob_get_clean();
?>


<div class="header">
	
	<!-- TITLE -->
		<div class="title_wrapper">
			<h1 style="<?php echo $title_size ?>">
				Lab <?= $labnum . " " . $page_title?>
			</h1>
			<div class="subtitle">
				<hr>
					<h2> Liz Wilson	</h2>
				<hr>
		<!--	<HEADER -->
			</div>
		</div>
		
<nav>
	<!--------Home Icon -------->
	<a href="index.php" class="<?= ($current_page === 'home') ? 'active' : '' ?>">
		<img src="images/home.png" alt="Home" style="width:16px; height:16px; margin:0;">
	</a>
	
	<!-------- Drop down -------->
	<form name="discoverme_form">
	<select id="discoverme" name="discoverme_list" >
		<option>
			Discover me!
		</option>
		<option value="my_vacation.php" class="<?= ($current_page === 'vacation') ? 'active' : '' ?>">
			Dream Vacation
		</option>
		<option value="my_artistic_self.php" class="<?= ($current_page === 'artisticSelf') ? 'active' : '' ?>">
			My Artistic Self
		</option>
	</select>
	</form>
	
	<!-------- Other pages -------->
	<a href="marketplace.php" class="<?= ($current_page === 'marketplace') ? 'active' : '' ?>">Marketplace </a>
	<a href="calculators.php" class="<?= ($current_page === 'calculators') ? 'active' : '' ?>">Calculators </a>
	<a href="login.php" class="<?= ($current_page === 'login') ? 'active' : '' ?>">To-Do </a>
	<a href="my_form.php" class="<?= ($current_page === 'quiz') ? 'active' : '' ?>">Quiz </a>

</nav>

</div>

<!-------- SCRIPTS -------->
<script type="text/javascript">
	var nav_selector = document.getElementById( 'discoverme' );
	nav_selector.onchange = function() {
		window.open(  
			this.options[ this.selectedIndex ].value ,"_self"
		);
	};
</script>