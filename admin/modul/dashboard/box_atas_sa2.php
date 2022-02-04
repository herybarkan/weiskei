<?php
ob_start();
session_start();

require_once '../Connections/con.php';
$tgl=date('Y-m-d');
?>

<?php
$select_visit=$db->prepare("SELECT COUNT(id_) AS jml_visit FROM tbl_visit WHERE page='profile' GROUP BY ip_address"); //sql select query
   $select_visit->execute();
   $row_visit=$select_visit->fetch(PDO::FETCH_ASSOC);
   $row_count = $select_visit->rowCount(); 
   

   
$select_book=$db->prepare("SELECT COUNT(id) AS jml_book FROM payments"); //sql select query
   $select_book->execute();
   $row_book=$select_book->fetch(PDO::FETCH_ASSOC);
   
$sfree=$db->prepare("SELECT COUNT(id_) AS jml_inst FROM instructor WHERE sts='0' AND aktif='1'"); //sql select query
   $sfree->execute();
   $row_sfree=$sfree->fetch(PDO::FETCH_ASSOC);
   
$spro=$db->prepare("SELECT COUNT(id_) AS jml_inst FROM instructor WHERE sts='1' AND aktif='1'"); //sql select query
   $spro->execute();
   $row_spro=$spro->fetch(PDO::FETCH_ASSOC);
   
$sreg=$db->prepare("SELECT COUNT(id_) AS jml_reg FROM instructor WHERE tgl_in='$tgl' AND  aktif='1'"); //sql select query
   $sreg->execute();
   $row_sreg=$sreg->fetch(PDO::FETCH_ASSOC);
   
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
									<i class="icon-magnifying-glass"></i>
								</div>
								<div class="sale-num">
									<h3><?php //echo $row_count; ?>
									<?php 
									$jxx=round(($row_count),0);
									echo number_format($jxx,0,",","."); ?></h3>
									<p>Profil Visit</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-user-plus"></i>
								</div>
								<div class="sale-num">
									<h3><?php echo number_format($row_sreg['jml_reg']); ?></h3>
                                    <?php //echo $_SESSION['yo_kd_user']; ?>
									<p>New Sign Up</p>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-network_locked"></i>
								</div>
								<div class="sale-num">
									<h3>
									<?php 
echo $row_sfree['jml_inst'];
?></h3>
									<p>Freemium</p>
								</div>
							</div>
						</div>
                        
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-network_cell"></i>
								</div>
								<div class="sale-num">
									<h3><?php 
echo $row_spro['jml_inst'];
?></h3>
									<p>Profesional</p>
								</div>
							</div>
						</div>
					</div>
                    
