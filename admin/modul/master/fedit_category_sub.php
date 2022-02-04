<?php
ob_start();
session_start();

require_once '../../../Connections/con.php';

$select_stmt=$db->prepare("SELECT * FROM category_sub WHERE id_='$_GET[id_]'");
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
                                <h4>Update Sub Category</h4>
									<div class="account-settings">
									  <div class="user-profile">
											<div class="user-avatar">
												<img src="../foto/assets/<?php echo $row['image']; ?>" >
											</div>
											
										</div>
										
											
                                            
                                            <form action="modul/master/ed_category_sub.php" method="post" enctype="multipart/form-data" name="fedit">
                                            <div class="row gutters">
										<div class="col-12">
                                        <div class="form-group">
												<label for="phone">New File Image</label>
                                                 (<small>dimension 150 x 150 pixel</small>)
												<input name="file" type="file" class="form-control" id="file" placeholder="">
											</div>
                                            

											<div class="form-group">
												<label for="eMail">Category </label>
                                                <select name="category" class="form-control default-select" id="category">
                                                <option selected>Select...</option>
												<?php
												
									$select_stmt=$db->prepare("SELECT * FROM category WHERE aktif='1'");	//sql select query
									$select_stmt->execute();
									while($row_cat=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <option value="<?php echo $row_cat['id_']; ?>"<?php if (!(strcmp($row_cat['id_'], $row['id_category']))) {echo "selected=\"selected\"";} ?>><?php echo $row_cat['nm_category']; ?></option>
                                        
                                    <?php
									}
									?>
                                    </select>
										      
											</div>
                                            <div class="form-group">
												<label for="eMail">Sub Category Name</label>
												<input type="text" class="form-control" name="nm_cat_sub" id="nm_cat+sub" value="<?php echo $row['nm_sub_category']; ?>">
										      <input name="hf_id" type="hidden" id="hf_id" value="<?php echo $row['id_']; ?>" />
											</div>
                                            
											<!--<div class="form-group">
												<label for="phone">Link</label>
												<input type="text" class="form-control" name="link" id="link" required="required" value="<?php //echo $row['link']; ?>">
											</div>-->
<input type="hidden" class="form-control" name="link" id="link" required="required" value="<?php //echo $row['link']; ?>">
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