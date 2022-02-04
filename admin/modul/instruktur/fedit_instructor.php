<?php
ob_start();
session_start();

require_once '../../../Connections/con.php';

$select_stmt=$db->prepare("SELECT * FROM instructor WHERE id_='$_GET[id_]'");
$select_stmt->execute();
$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

/*$cek_sc=$db->prepare("SELECT * FROM category WHERE aktif='1'");
$cek_sc->execute();
$row_cek_sc=$cek_sc->fetch(PDO::FETCH_ASSOC);*/
?>
<div class="row gutters">
						
						<div class="col-12">
                        
                        <div class="card h-100">
								<div class="card-body">
                                <h4>Update Instructor</h4>
									<div class="account-settings">
									  <div class="user-profile">
											<div class="user-avatar">
												<img src="../foto/user/<?php echo $row['photo']; ?>" >
											</div>
											
										</div>
										
											
                                            
                                            <form action="modul/instruktur/ed_instructor.php" method="post" enctype="multipart/form-data" name="fedit">
                                            <div class="row gutters">
										<div class="col-12">
                                        <div class="row">
                                        <div class="col-6">
                                        <div class="form-group">
												<label for="phone">First Name</label>
										  <input type="text" class="form-control" name="firstname" id="firstname" required="required" value="<?php echo $row['first_name']; ?>">
										  <input type="hidden" name="hf_id" id="hf_id" value="<?php echo $row['id_']; ?>"/>
                                        </div>
                                        </div>
                                        
                                        <div class="col-6">
                                        <div class="form-group">
												<label for="phone">Last Name</label>
										  <input type="text" class="form-control" name="lastname" id="lastname" required="required" value="<?php echo $row['last_name']; ?>">
										  </div>
                                        </div>
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