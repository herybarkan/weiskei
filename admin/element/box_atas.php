<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>

<?php
$select_visit=$db->prepare("SELECT COUNT(id_) AS jml_visit FROM tbl_visit WHERE kd_user='$_SESSION[yo_kd_user]'
"); //sql select query
   $select_visit->execute();
   $row_visit=$select_visit->fetch(PDO::FETCH_ASSOC);
   
$select_book=$db->prepare("SELECT COUNT(id) AS jml_book FROM payments WHERE product_name LIKE '%$_SESSION[yo_kd_user]%'
"); //sql select query
   $select_book->execute();
   $row_book=$select_book->fetch(PDO::FETCH_ASSOC);
   
$select_like=$db->prepare("SELECT COUNT(id_) AS jml_like FROM tbl_like WHERE kd_instructor='$_SESSION[yo_kd_user]'
"); //sql select query
   $select_like->execute();
   $row_like=$select_like->fetch(PDO::FETCH_ASSOC);
?>

<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-eye1"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo $row_visit['jml_visit']; ?></h3>
									<p>I Visited</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-shopping-cart1"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo $row_book['jml_book']; ?></h3>
                                    <?php //echo $_SESSION['yo_kd_user']; ?>
									<p>Booking</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-shopping-bag1"></i>
								</div>
								<div class="sale-num">
									<h3>7500</h3>
									<p>Instructor</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h3>3500</h3>
									<p>Paid Off</p>
								</div>
							</div>
						</div>
					</div>