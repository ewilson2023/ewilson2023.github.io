<!-- 
 The main homepage
 -->
 
 <!DOCTYPE html>
<?php
	$current_page = 'home';		// set name variable
	$page_title = "Main Page";
	require 'common/required.php';
?>

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
		  
		  	<div class="h2_decorated">
		  		<hr>
		  			<h2>Past</h2>
		  		<hr>
		  	</div>
		  		<h3 class="after_h2">Early Life</h3>
		  			<div class="p_container">
		  				<p> 
		  				I was born in Ottawa. At home, I live with my parents, my
		  				younger brother and sister, and my two dogs.
		  				</p>
		  			</div>
		  		<h3>Early Education</h3>
		  			<div class="p_container">
		  				<p> 
		  				After high school I studied history at the University
		  				of Ottawa for two years. Eventually, I realised I hated writing
		  				essays and switched to Algonquin College for 
		  				Concept Art &amp Illustration, a three semester program. I was
		  				near the top of the class.
		  				</p>
		  			</div>
		  			
		  		<!-- IMAGE SLIDESHOW	-->			
		  		<div class="slideshow">
		  			<div class="slideshow_img">
		  				<img src="images/art1.jpg">
		  			</div>
		  			<div class="slideshow_img">
		  				<img src="images/art2.jpg">
		  			</div>
		  			<div class="slideshow_img">
		  				<img src="images/art3.jpg">
		  			</div>  
		  			<div class="slideshow_img">
		  				<img src="images/art4.jpg">
		  			</div>
		  			
		  			<div class="prev_next">
		  				<a onclick="previous()">⪻Previous</a>
		  				<a onclick="next()">Next⪼</a>
		  			</div>
		  		</div>
		  		
		  		<h3>Work</h3>
		  			<div class="p_container">
		  				<p>
		  				I made friends and connections at Algonquin that led
		  				to work in the art industry. Most of my work was low-paying
		  				commissions until 2019, when I was hired by Kindly Beast,
		  				a game development studio based in Ottawa. It paid well and
		  				I loved working there, but it closed less than a year later.
		  				</p><p>
		  				I would link my portfolio but it's not public right now because
		  				I stopped giving Adobe any of my money.
		  				</p>
		  			</div>
		  		<h3>Covid-19</h3>
		  			<div class="p_container">
		  				<p>
		  				Covid hit a few months later. I was commissed by Apple UK
		  				to make art for the app store's "Today Tab", but otherwise,
		  				I didn't do much of anything.
		  				</p><p>
		  				In summer 2022, I used the money from Kindly Beast to go on a solo
		  				trip to Ireland, where my grandparents were born. I was there for almost two months.
		  				</p>
		  			</div>
		  			
		  	<div class="h2_decorated">
		  		<hr>
		  			<h2>Present</h2>
		  		<hr>
		  	</div>
		  		<div class="p_container">
		  			<p>
		  			I loved Ireland so much I wanted to try living there, but I
		  			had no reliable way to 
		  			support myself.	I was already burnt out from the art industry 
		  			and was ready to leave it for something more stable. I chose 
		  			to study computer science, something I had limited exposure to,
		  			but felt I had an apitutude for. I started attending Bishop's
		  			in 2023.
		  			</p>
		  		</div>
		  </div>
		</div>
		
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>

	
	</body>
	
	<!-- JAVASCRIPT -->
	<script 
		src="javascript/slideshow.js"> 
	</script>
	
</html>