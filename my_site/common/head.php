<?php 
//$labnum = 9; 
ob_start();
include 'common/labnum.php';	// save lab number as a variable
$labnum = ob_get_clean();
$labnum = trim(strip_tags($labnum));    // only keep text
?>

<title><?= $labnum . ": " . $page_title?></title>

<meta name="author" content="Liz Wilson">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
<link rel="stylesheet" href="common/styles.css">
<link rel="stylesheet" href="common/header.css">
<link rel="stylesheet" href="common/scrollbar.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<script src="javascript\misc_scripts.js">   </script>