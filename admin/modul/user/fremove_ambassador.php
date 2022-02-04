<?php
ob_start();
session_start();

require_once '../../../Connections/con.php';

$select_stmt=$db->prepare("SELECT * FROM user_ WHERE user_.kd_user='$_GET[id_]'");
$select_stmt->execute();
$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

$cek_user=$db->prepare("SELECT * FROM instructor WHERE kd_instructor='$row[kd_user]'");
$cek_user->execute();
$row_cek_user=$cek_user->fetch(PDO::FETCH_ASSOC);
?>
<div class="row gutters">
						
						<div class="col-12">
                        <div class="card h-100">
								<div class="card-body">
									<div class="account-settings">
										<div class="user-profile">
											<div class="user-avatar">
												<img src="../foto/user/<?php echo $row_cek_user['photo']; ?>" alt="Le Rouge Admin">
											</div>
											<h5 class="user-name"><?php echo $row_cek_user['first_name']; ?> 
												<?php echo $row_cek_user['last_name']; ?></h5>
											<h6 class="user-email"><?php echo $row['username']; ?> 
												</h6>
										</div>
										
											<center>
                                            <img class="qr-c-ode-desktop" src="../modul/listing/temp/<?php echo $row['kd_user']; ?>.png" style="width:170px;">
                                            </center>
                                            
                                            <form action="modul/user/ed_remove_ambassador.php" method="post" name="fedit">
                                            <input name="hf_id_inst" type="hidden" id="hf_id_inst" value="<?php echo $row['kd_user']; ?>" />
                                            <div class="row gutters">
										<div class="col-12">

											

										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-center">
												<!--<button type="button" id="submit" name="submit" class="btn btn-white">Cancel</button>-->
												<button type="submit" id="submit" name="submit" class="btn btn-primary" style="background-color:#F00;">Remove Ambassador</button>
											</div>
										</div>
									</div>
                                            </form>
										
									</div>
								</div>
							</div>
                            
							
						</div>
					</div>