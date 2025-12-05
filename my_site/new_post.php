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
        <div class="card">
            <!----------- SUBHEADER ------------>
            <div class="h2_decorated"><hr><h2>New Blog Post</h2><hr> </div>	

            <!------------- FORMS -------------->
            <!-- fixme: forms hve to do smth -->
            <form>
                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Enter Title" name="title" required>
            </form>

            <form>
                <label for="body"><b>Body</b></label>
<!--                 <textarea name="paragraph_text" placeholder="Enter blog post" cols="50" rows="10"></textarea>
 -->
                 
                <textarea name="paragraph_text" placeholder="Enter blog post" class="textarea resize-ta"></textarea></p>
            </form>

            
            <!------------- SUBMIT ------------->
            <form method="POST" action="new_post.php">
                <button class="button" type="submit" style="font-size=16px"> Post </button>
            </form>


        </div>
      </div>
    </div>
		
	<!---- FOOTER ---->
	<?php include 'common/footer.php'; ?>
         
</body>     
</html>