<?php
ob_start();
session_start();

error_reporting(0);
@ini_set('display_errors', 0);
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="WEISKEI Admin">
		<meta name="author" content="WEISKEI Admin">
		<link rel="shortcut icon" href="../imager/icon.png" />

		<!-- Title -->
		<title>WEISKEI Admin</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<?php
		//
		include ('element/list_css.php');
		?>

	</head>

<?php
if ($_SESSION['wk_uname']=="") {include ('modul/login/login.php');}
elseif ($_SESSION['wk_uname']!="") {
?>
	<body>

		<!--<div id="loading-wrapper">
			
            <span style="color:#FFF;"><img src="img/logo_loader.png" width="80"></span>
		</div>-->


		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<nav id="sidebar" class="sidebar-wrapper">
				
				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="index.php" class="logo">
						<img src="img/logo.png" alt="WK Admin" />
					</a>
				</div>
			<?php
				//
					if ($_SESSION['wk_grup']=="1") {include ('modul/menu/sidebar.php');}
				/*elseif ($_SESSION['yo_grup']=="2") {include ('modul/menu/sidebar_staff.php');}
				elseif ($_SESSION['yo_grup']=="3") {include ('modul/menu/sidebar_inst.php');}
				elseif ($_SESSION['yo_grup']=="4") {include ('modul/menu/sidebar_member.php');}
				*/?>
				
			</nav>
		<div class="page-content">

				<?php
				//
				include ('element/header.php');
				include ('element/header_pages.php');
				?>
			<div class="main-container">
				<?php
					//
					if ($_GET['com']=="")
					{
						//if ($_SESSION['wk_grup']=="1") {include ('modul/dashboard/dashboard_sa.php');}
						
					/*elseif ($_SESSION['wk_grup']=="2") {include ('modul/dashboard/dashboard_staff.php');}
					elseif ($_SESSION['yo_grup']=="3") {include ('modul/dashboard/dashboard_inst.php');}
					elseif ($_SESSION['yo_grup']=="4") {include ('modul/dashboard/dashboard_mem.php');}*/
					//include ('modul/dashboard/dashboard_sa.php');
					/*include ('element/graph_visitor.php');
					include ('element/graph_sales.php');
					include ('element/graph_customer.php');
					include ('element/graph_income.php');
					include ('element/box_bawah.php');*/
					}
					elseif ($_GET['com']=="slider") {include ('modul/content/list_slider.php');}
					elseif ($_GET['com']=="promo_banner") {include ('modul/content/list_banner_promo.php');}
					elseif ($_GET['com']=="content") {include ('modul/content/list_content.php');}
					elseif ($_GET['com']=="product") {include ('modul/content/list_product.php');}
					elseif ($_GET['com']=="testimoni") {include ('modul/content/list_testimoni.php');}
					
					
					elseif ($_GET['com']=="contact") {include ('element/contact.php');}
					elseif ($_GET['com']=="account_setting") {include ('element/account_setting.php');}
					elseif ($_GET['com']=="table") {include ('element/table.php');}
					elseif ($_GET['com']=="form") {include ('element/form.php');}
					elseif ($_GET['com']=="category") {include ('modul/master/list_category.php');}
					elseif ($_GET['com']=="sub_category") {include ('modul/master/list_sub_category.php');}
					
					elseif ($_GET['com']=="member") {include ('modul/member/list_member.php');}
					elseif ($_GET['com']=="member_order") {include ('modul/member/list_member_order.php');}
					
					elseif ($_GET['com']=="instructor") {include ('modul/instruktur/list_instructor.php');}
					elseif ($_GET['com']=="business_profile") {include ('modul/instruktur/business_profile.php');}
					elseif ($_GET['com']=="schedule_inst") {include ('modul/instruktur/schedule_inst.php');}
					elseif ($_GET['com']=="my_order_inst") {include ('modul/instruktur/list_inst_order.php');}
					elseif ($_GET['com']=="my_order_inst_pending") {include ('modul/instruktur/list_inst_pending.php');}
					elseif ($_GET['com']=="my_order_inst_onprogress") {include ('modul/instruktur/list_inst_onprogress.php');}
					elseif ($_GET['com']=="my_order_inst_reject") {include ('modul/instruktur/list_inst_reject.php');}
					
					elseif ($_GET['com']=="order") {include ('modul/adm/list_booking_order.php');}
					elseif ($_GET['com']=="invoices") {include ('modul/adm/list_booking_invoices.php');}
					
					elseif ($_GET['com']=="list_post") {include ('modul/adm/list_posting.php');}
					
					elseif ($_GET['com']=="upgrade_account") {include ('modul/instruktur/list_instructor_upgrade.php');}
					elseif ($_GET['com']=="ambassador_account") {include ('modul/instruktur/list_instructor_ambassador.php');}
					elseif ($_GET['com']=="users") {include ('modul/user/list_user.php');}
					elseif ($_GET['com']=="my_account") {include ('modul/user/my_account.php');}
					
					?>
			</div>

			</div>

		</div>
<?php
//
include ('element/list_js.php');
?>



<?php
//if ($_SESSION['wk_uname']=="") {header("refresh:0; ../index.php?sts_login=fail");}
?>

	</body>
    <?php } ?>
</html>