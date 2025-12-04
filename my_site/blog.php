<!-- 
 The blog for lab 10
-->
<?php
    $current_page = 'todo';
    $page_title = "To-Do List";
    require 'common/required.php';
?>
<?php
// MODAL for blod actual page
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] == false) {
	redirect('login.php?next=blog.php');
} 
?>
<!DOCTYPE html>


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

    <!---------------------------------------->
    <!------------  BLOG COLUMN -------------->
    <!---------------------------------------->
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
    <!---------------------------------------->
    <!-----------  RIGHT COLUMN -------------->
    <!---------------------------------------->
            <div class="rightcolumn">
                <div class="card">

                  <?php 
                  /* if (...)
                  check session. if logged in, display "add post" button instead of 
                  login form
                  */
                  if (logged_in()) { ?>
                  <!----  NEW POST ----->
                    <button class="button" type="submit">
                            New Post</button>
                  <!----  LOGOUT FORM ----->
                    <form method="POST" action="login.php?next=blog.php">
						<input type="submit" 
								class="button"
								name="logout" 
								value="Log out">
					</form>
                  <?php } else { ?>
                  <!----  LOGIN FORM ----->
                    <form action="blog.php" method="POST">
                        <label for="psw">
                            <b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pword" required>
                        <button class="button" type="submit">
                            Login</button>
                    </form>
                    </div>
                  <?php }?>
                




<!--                 <div class="card">
                    <h2>About Me</h2>
                    <div class="fakeimg" style="height:100px;">Image</div>
                    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                </div> -->

               <!-----  ALL POSTS SECTION ----->
                <div class="card">
                    <h3>All Posts</h3>
                    <ul>
                        <li> <a>link1</a></li>
                        <li> <a>link2</a></li>
                        <li> <a>link3</a></li>
                    </ul>
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
	
</html>