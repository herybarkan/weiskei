<?php
ob_start();
session_start();

require_once '../../../Connections/con.php';

$select_stmt=$db->prepare("SELECT * FROM category WHERE id_='$_GET[id_]'");
$select_stmt->execute();
$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

/*$cek_user=$db->prepare("SELECT * FROM instructor WHERE kd_instructor='$row[kd_user]'");
$cek_user->execute();
$row_cek_user=$cek_user->fetch(PDO::FETCH_ASSOC);
*/?>
<div class="row gutters">
						
						<div class="col-12">
                        
                        <div class="card h-100">
								<div class="card-body">
                                <h4>Update Category</h4>
									<div class="account-settings">
									  <div class="user-profile">
											<div class="user-avatar">
												<img src="../foto/assets/<?php echo $row['image']; ?>" style="size:100%;" >
											</div>
											
										</div>
										
											
                                            
                                            <form action="modul/master/ed_category.php" method="post" enctype="multipart/form-data" name="fedit">
                                            <div class="row gutters">
										<div class="col-12">
                                        <div class="form-group">
												<label for="phone">New File Image</label>
                                                 (<small>dimension 400 x 370 pixel</small>)
												<input name="file" type="file" class="form-control" id="file" placeholder="">
											</div>
                                            

											<div class="form-group">
												<label for="eMail">Category Name</label>
												<input type="text" class="form-control" name="nm_cat" id="nm_cat" value="<?php echo $row['nm_category']; ?>">
										      <input name="hf_id" type="hidden" id="hf_id" value="<?php echo $row['id_']; ?>" />
											</div>
											<!--<div class="form-group">
												<label for="phone">Link</label>
												<input type="text" class="form-control" name="link" id="link" required="required" value="<?php //echo $row['link']; ?>">
											</div>-->
<input type="hidden" class="form-control" name="link" id="link" required="required" value="">
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