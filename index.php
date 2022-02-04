<?php
error_reporting(0);
@ini_set('display_errors', 0);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
	//
	include ('element/list_css.php');
	?>
    <title>WEISKEI WHITE</title>
</head>
<body>

<!--header-->
<!--header desktop-->
<?php
//
include ('element/header_desktop.php');
include ('element/header_mobile.php');
?>
<div class="content-homepage">
    <?php
	//
	if ($_GET['com']=="")
	{
	include ('element/slider.php');
	include ('element/banner2.php');
	include ('element/cosmetic.php');
	//include ('element/fluid.php');
	include ('element/product-3.php');
	include ('element/review.php');
	//include ('element/front_news.php');
	}
	elseif ($_GET['com']=="new_arrivals") {include ('element/new_arrivals.php');}
	elseif ($_GET['com']=="product") {include ('element/cek_product.php');}
	elseif ($_GET['com']=="about_us") {include ('element/about_us.php');}
	elseif ($_GET['com']=="contact") {include ('element/contact_us.php');}
	
	include ('element/footer.php');
	?>
</div>
<?php
//
include ('element/list_js.php');
?>
</body>
</html>