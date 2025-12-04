<!-- 
 New Post page for the blog
-->
<?php
$current_page = 'blog';
$page_title = "Blog";
require 'common/required.php';
?>
<?php
// MODAL for blod actual page
session_start();

if (!logged_in()) {
    redirect('login.php?next=blog.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php require 'common/head.php'; ?>

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
    <?php require 'common/header-nav.php'; ?>

    <!-- MAIN SECTION -->
    <div class="body_wrapper">
        <div class="main">




        
        </div>
    </div>
		
	<!---- FOOTER ---->
	<?php include 'common/footer.php'; ?>
         
</body>     
</html>