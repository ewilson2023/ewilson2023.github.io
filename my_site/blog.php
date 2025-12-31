<!-- 
 The blog for lab 10
-->
<?php
    $current_page = 'todo';
    $page_title = "Blog";
    require 'common/required.php';
?>
<?php
// MODAL for blog actual page
session_start();

if (!logged_in()) redirect('login.php?next=blog.php');

$blog_posts = [];
$path = 'JSON/blog_posts.json';
if (file_exists($path)){
    $blog_posts = json_decode(file_get_contents($path),true);
}

?>
<!DOCTYPE html>


<html>
	<head>
		<?php require 'common/head.php';?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
        <script src="javascript/blog.js">  </script>
        <script> 
            let blog_posts = <?php echo json_encode($blog_posts); ?>;
        </script>

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
            <div class="leftcolumn" id="blog_column">
                <div class="card">
                    <div class="title_grid">
                        
                        <h2>TITLE HEADING</h2>
                        <span>
                          <h5>Dec 4, 2025</h5>
                            <?php // eventually make clickable to delete post
                              if (logged_in()) { ?>
                                <span>🗑️</span> 
                              <?php } ?>
                        </span>
                    </div>
                    <p> the json posts don't load and i don't have time to fix it!!! 
                        it's probably because all of blog.js expects an array, but blog_posts is an object
                    </p><p> this page has its own login field if logged out but i forgot i did that 
                        & made links to the blog redirect to the login page instead. 
                        comment out "if (!logged_in()) redirect('login.php?next=blog.php');" to see it
                    </p>
                </div>

                <div class="card">
                    <h2 style="color: red">TITLE HEADING</h2>
                    <h5>Dec 4, 2025</h5>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                </div>
            </div>
    <!---------------------------------------->
    <!-----------  RIGHT COLUMN -------------->
    <!---------------------------------------->
            <div class="rightcolumn">
                <div class="card">

                  <?php 

                  if (logged_in()) { ?>
                  <!----  NEW POST ----->
                  <form method="POST" action="new_post.php">
                    <button class="button" type="submit"> New Post</button>
                  </form>
                  <!----  LOGOUT FORM ----->
                  <form method="POST" action="login.php?next=blog.php" >
					<input value="Log out" type="submit" class="button" name="logout">
				  </form>
                  <?php } else { ?>
                  <!----  LOGIN FORM ----->
                    <form action="login.php" method="POST">
                        <label> <b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pword" required>
                        <button class="button" type="submit">
                            Login</button>
                    </form>
                    <?php }?>
                </div>


               <!-----  ALL POSTS SECTION ----->
                <div class="card">
                    <h3>All Posts</h3>
                    <ul>
                        <li> <a>link1</a></li>
                        <li> <a>link2</a></li>
                        <li> <a>link3</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
		
	<!---- FOOTER ---->
	<?php include 'common/footer.php';	?>

	</body>
</html>
