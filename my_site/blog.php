<!-- 
 The blog for lab 11
-->
<!DOCTYPE html>

<?php
	$current_page = 'blog';		// set name variable
	$page_title = "Blog";
?>

<html>
	<head>
		<?php require 'common/head.php';?>
        
		<style> 
          /*   The hero section  */
            .header {
                background-image: url("images/hero_banner_bg.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                background-attachment: fixed;

                pointer-events: none; 	/* make the img not selectable*/
	            user-select: none;
            }
        </style>
	</head>
	
	<body>
	<!-- HEADER -->
		<?php require 'common/header-nav.php';	?>
		
	<!-- MAIN SECTION -->
		<div class="body_wrapper">
		  <div class="main">

            <div class="row">
            <div class="leftcolumn">
                <div class="card">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Dec 7, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                </div>
                <div class="card">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Sep 2, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                </div>
            </div>
            <div class="rightcolumn">
                <div class="card">
                <h2>About Me</h2>
                <div class="fakeimg" style="height:100px;">Image</div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                </div>
                <div class="card">
                <h3>Popular Post</h3>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div>
                </div>
                <div class="card">
                <h3>Follow Me</h3>
                <p>Some text..</p>
                </div>
            </div>
            </div>







          </div>
        </div>
		
	<!-- FOOTER -->
	<?php include 'common/footer.php';	?>

	</body>
	
	<!-- JAVASCRIPT -->
	<script src=""> </script>
	
</html>