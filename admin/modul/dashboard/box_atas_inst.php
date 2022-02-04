<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>

<?php
$select_visit=$db->prepare("SELECT COUNT(id_) AS jml_visit FROM tbl_visit WHERE kd_instructor='$_SESSION[yo_kd_user]' GROUP BY ip_address
"); //sql select query
   $select_visit->execute();
   $row_visit=$select_visit->fetch(PDO::FETCH_ASSOC);
   //$num_rows = $row_visit->fetchColumn();
   $row_count = $select_visit->rowCount(); 
   
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
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-eye1"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo $row_count; ?><?php //echo number_format($row_visit['jml_visit'],0,",","."); ?></h3>
									<p>Visitors </p>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-shopping-cart1"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo number_format($row_book['jml_book'],0,",","."); ?></h3>
									<p>Booking & Payment</p>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-heart"></i>
								</div>
                                <div class="sale-num">
									<h3><?php echo number_format($row_like['jml_like'],0,",","."); ?></h3>
									<p>Like</p>
								</div>
								
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-share-2"></i>
								</div>
								<div class="sale-num">
									<h3>0</h3>
									<p>Share</p>
								</div>
							</div>
						</div>
					</div>