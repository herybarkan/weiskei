<?php
ob_start();
session_start();

require_once '../Connections/con.php';

$cek_user=$db->prepare("SELECT * FROM user_ WHERE kd_user='$_SESSION[yo_kd_user]'");
$cek_user->execute();
$row_cek_user=$cek_user->fetch(PDO::FETCH_ASSOC);
?>

<div class="row gutters justify-content-center" style="margin-top:30px;">
						<div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
							<form action="modul/user/ed_password.php" method="POST">
								<div class="card m-0">
									<div class="card-header">
										<div class="card-title">My Account
										  <input name="hf_kd_inst" type="hidden" id="hf_kd_inst" value="<?php echo $_SESSION['yo_kd_user']; ?>">
										</div>
										<div class="card-sub-title">Update Password</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" value="<?php echo $row_cek_user['username']; ?>" disabled>
										</div>
										<!--<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
										</div>-->
										<div class="form-group">
											<input type="text" class="form-control" id="password" name="password" placeholder="New Password" required>
										</div>
										<!--<div class="form-group">
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="">
										</div>-->
										<!--<div class="form-group">
											<textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="4"></textarea>
											<div class="form-text text-muted">
												<p id="characterLeft" class="help-block">140 characters left</p>
											</div>
										</div>-->
										
										<button type="submit" id="submit" name="submit" class="btn btn-primary float-right">Submit Form</button>
									</div>
								</div>
							</form>
						</div>
					</div>