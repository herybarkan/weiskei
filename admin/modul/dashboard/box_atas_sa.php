<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<?php
$select_visit=$db->prepare("SELECT COUNT(id_) AS jml_visit FROM tbl_visit WHERE page='profile' GROUP BY ip_address"); //sql select query
   $select_visit->execute();
   $row_visit=$select_visit->fetch(PDO::FETCH_ASSOC);
   $row_count_visit = $select_visit->rowCount(); 
   
$select_visit2=$db->prepare("SELECT COUNT(id_) AS jml_visit FROM tbl_visit WHERE page='home' GROUP BY ip_address"); //sql select query
   $select_visit2->execute();
   $row_visit2=$select_visit2->fetch(PDO::FETCH_ASSOC);
   $row_count_visit2 = $select_visit2->rowCount(); 
   
$select_book=$db->prepare("SELECT COUNT(id) AS jml_book FROM payments"); //sql select query
   $select_book->execute();
   $row_book=$select_book->fetch(PDO::FETCH_ASSOC);
   
$select_inst=$db->prepare("SELECT COUNT(id_) AS jml_inst FROM instructor WHERE aktif='1'"); //sql select query
   $select_inst->execute();
   $row_inst=$select_inst->fetch(PDO::FETCH_ASSOC);
   

   
$select_like=$db->prepare("SELECT COUNT(id_) AS jml_like FROM tbl_like"); //sql select query
   $select_like->execute();
   $row_like=$select_like->fetch(PDO::FETCH_ASSOC);

$select_share=$db->prepare("SELECT COUNT(id_) AS jml_share FROM tbl_share
"); //sql select query
   $select_share->execute();
   $row_share=$select_share->fetch(PDO::FETCH_ASSOC);
?>

<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-eye1"></i>
								</div>
								<div class="sale-num">
									<h3><?php //echo $row_count; ?>
									<?php 
									$jx_visit=$row_count_visit+$row_count_visit2;
									//$jxx=round(($jx_visit/2),0);
									echo number_format($jx_visit,0,",","."); ?></h3>
									<p>Visitor</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-thumb_up"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo number_format($row_like['jml_like']); ?></h3>
                                    <?php //echo $_SESSION['yo_kd_user']; ?>
									<p>Like</p>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-share"></i>
								</div>
								<div class="sale-num">
									<h3>
									<?php 
$xshare=$row_share['jml_share']/2; 
$zshare=round($xshare,0);
echo $zshare;
?></h3>
									<p>Share</p>
								</div>
							</div>
						</div>
                        
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-users"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo number_format($row_inst['jml_inst']); ?></h3>
									<p>Instructor</p>
								</div>
							</div>
						</div>
					</div>
                    
