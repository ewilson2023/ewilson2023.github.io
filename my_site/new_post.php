<!-- 
 New Post page for the blog
-->
<?php
$current_page = 'blog';
$page_title = "Blog";
require 'common/required.php';
?>
<?php
// MODAL for blog actual page
session_start();
$DEBUG_ON = false;

if (!logged_in())  redirect('login.php?next=blog.php');
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = htmlspecialchars($_POST['title'] ?? '');
  $body_text = htmlspecialchars($_POST['body_text'] ?? '');
  $timestamp = date('M j, Y', time());

    if ($DEBUG_ON)
        debug_echo($title);debug_echo($body_text);debug_echo($timestamp);

  if ($title == '' || $body_text == '') {
    
  } else {
    // Path to JSON file
    $path = 'JSON\blog_posts.json';
    $blog_posts = [];
    // load contents of json blog_posts if it exists
    if (file_exists($path)){
        $blog_posts = json_decode(file_get_contents($path), true);
        if ($DEBUG_ON) echo "blog_posts exists";
    } else {
        fopen($path, "w"); // create file
        if ($DEBUG_ON)  echo 'uh-oh no file. blog_posts.json created';
    }

    $nextNum = count($blog_posts) + 1;   // assumes keys are blog1, blog2, ...
    $newKey = 'blog' . $nextNum;

    $blog_posts[$newKey] = [
        'date' => $timestamp,
        'title' => $title,
        'paragraphs' => [$body_text]
    ];
    
    file_put_contents($path, json_encode($blog_posts));
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <?php require 'common/head.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="javascript\blog.js">  </script>
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
            <form method="POST" action="new_post.php">

                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Enter Title" name="title" required>

                <label for="body"><b>Body</b></label>
                <textarea name="body_text" placeholder="Enter blog post" class="textarea resize-ta" required></textarea></p>
            
            <!------------- SUBMIT ------------->
            
                <button class="button" type="submit" style="font-size=16px"> 
                    Post </button>
            </form>
            <!-- return button -->
				<a href="blog.php">
					<input class="button" type="button" value="Return">
				</a>
            <div id="error" class="error">
                <?= $error ?>
            </div>

        </div>
      </div>
    </div>
		
	<!---- FOOTER ---->
	<?php include 'common/footer.php'; ?>
         
</body>     
</html>