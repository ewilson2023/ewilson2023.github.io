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

               /*  pointer-events: none; 	
	            user-select: none; /* make the img not selectable*/
            }
            .main {
                width: clamp(100px, 75vw, 800px);
            }
        </style>
	</head>
	
	<body>
	<!-- HEADER -->
		<?php require 'common/header-nav.php';	?>
	
    <!-- MAIN SECTION -->
    <div class="body_wrapper">
        <div class="main">

            <!-- adapted from https://www.w3schools.com/howto/howto_css_login_form.asp -->

            <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <h2>TITLE HEADING</h2>
                    <h5>Title description, Dec 7, 2017</h5>
                    <div class="fakeimg" style="height:200px;">Image</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>

                <div class="card">
                    <h2>TITLE HEADING</h2>
                    <h5>Title description, Sep 2, 2017</h5>
                    <div class="fakeimg" style="height:200px;">Image</div>
                    <p>
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                </div>
            </div>

            <div class="rightcolumn">
                <div class="card">

                 <?php 
                 /* if (...)
                 check session. if logged in, display "edd post" button instead of 
                 login form
                 */
                 ?>
                <!----  LOGIN FORM ----->
                  <form action="blog.php" method="POST">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pword" required>
                    <button class="button" type="submit">Login</button>

                  </form>
                </div>


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

                <!-- fixme: put this somewhere else. and fix it -->
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
						header('Location: http://' . $BASE_URL .  'blog.php');
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
	
	<!-- JAVASCRIPT -->
	
</html>