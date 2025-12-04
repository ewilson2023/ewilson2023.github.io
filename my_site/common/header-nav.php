<!-- 
 The header and navigation bar that appears at the top of
 every page   
 -->
<?php 
$DEBUG_ON = false;
ob_start();
include 'common/labnum.php';
$labnum = ob_get_clean();
$labnum = trim(strip_tags($labnum));	// strip non-text from labnum

if ($DEBUG_ON) var_dump($labnum);

if ($DEBUG_ON) echo "labnum: " .  mb_strlen($labnum);
if ($DEBUG_ON) echo "page_title: " .  mb_strlen($page_title);

$full_title = trim($labnum . " " . $page_title);
$title_size = mb_strlen($full_title);
$title_cqw = (40 - $title_size) / 1.45 ;		// calculate size of 

if ($DEBUG_ON) echo "title_size: " . $title_size;



?>

<!----HEADER ----->
<!-- <div class="header" oncontextmenu="return false"> -->
<div class="header">
	
	<!-- title/subtitle -->
		<div class="title_wrapper">
			<h1 style="font-size: clamp(30px, <?= $title_cqw ?>cqw, 90px)">
				<?= $labnum . " " . $page_title?>
			</h1>
			<div class="subtitle">
				<hr>
					<h2> Liz Wilson	</h2>
				<hr>
			</div>
		</div>
		
<!---- NAV MENU ----->		
  <nav>
	<!--------Home Icon -------->
	<a href="index.php" class="<?= ($current_page === 'home') ? 'active' : '' ?>">
		<img src="images/home.png" alt="Home" style="width:16px; height:16px; margin:0;">
	</a>
	
	<!-------- Drop down -------->
	<form name="discoverme_form">
	<select id="discoverme" name="discoverme_list" style="width: 11em" >
		<option>
			Discover me
		</option>
		<option value="my_vacation.php" class="<?= ($current_page === 'vacation') ? 'active' : '' ?>">
			Dream Vacation
		</option>
		<option value="my_artistic_self.php" class="<?= ($current_page === 'artisticSelf') ? 'active' : '' ?>">
			My Artistic Self
		</option>
	</select>
	</form>
	
	<!-------- Other Pages -------->
	<a href="login.php" class="<?= ($current_page === 'login') ? 'active' : '' ?>">To-Do </a>
	<a href="my_quiz.php" class="<?= ($current_page === 'quiz') ? 'active' : '' ?>">Quiz </a>
	<a href="blog.php" class="<?= ($current_page === 'blog') ? 'active' : '' ?>">Blog </a>
	
	<!-------- these pages are hidden from nav -------->
	<!--	
	<a href="marketplace.php" class="<?= ($current_page === 'marketplace') ? 'active' : '' ?>">Marketplace </a>
	<a href="calculators.php" class="<?= ($current_page === 'calculators') ? 'active' : '' ?>">Calculators </a>
	-->
  </nav>

</div>
