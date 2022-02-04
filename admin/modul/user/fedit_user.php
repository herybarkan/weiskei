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
                                            
                                            <form action="modul/user/ed_user_pass.php" method="post" name="fedit">
                                            <div class="row gutters">
										<div class="col-12">

											<div class="form-group">
												<label for="eMail">Username</label>
												<input type="email" class="form-control" name="username" id="username" value="<?php echo $row['username']; ?>">
										      <input name="hf_id" type="hidden" id="hf_id" value="<?php echo $row['id_']; ?>" />
											</div>
											<div class="form-group">
												<label for="phone">Password</label>
												<input type="text" class="form-control" name="password" id="password" required="required">
											</div>

										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-right">
												<!--<button type="button" id="submit" name="submit" class="btn btn-white">Cancel</button>-->
												<button type="submit" id="submit" name="submit" class="btn btn-primary">Submit Form</button>
											</div>
										</div>
									</div>
                                            </form>
										
									</div>
								</div>
							</div>
                            
							
						</div>
					</div>