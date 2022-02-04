<?php
ob_start();
session_start();

require_once '../../../Connections/con.php';

$select_stmt=$db->prepare("SELECT * FROM instructor WHERE id_='$_GET[id_]'");
$select_stmt->execute();
$row=$select_stmt->fetch(PDO::FETCH_ASSOC);


?>
<div class="row gutters">
						
						<div class="col-12">
                        <div class="card h-100">
								<div class="card-body">
									<div class="account-settings">
										<div class="user-profile">
											<div class="user-avatarx">
												<img src="../foto/user/<?php echo $row['photo']; ?>" alt="" style="width:100%;">
											</div>
                                            <br>
											<h5 class="user-name"><?php echo $row['first_name']; ?> 
                                             <?php echo $row['last_name']; ?> 
												</h5>
											<!--<h6 class="user-email"><?php //echo $row['username']; ?> 
												</h6>-->
										</div>
										
											
                                            
                                            <form action="modul/instruktur/del_instructor.php" method="post" name="fedit">
                                            <div class="row gutters">
										<div class="col-12">
                                        <center>
                                        <input name="hf_id" type="hidden" id="hf_id" value="<?php echo $row['id_']; ?>" />

<input name="hf_id_inst" type="hidden" id="hf_id_inst" value="<?php echo $row['kd_instructor']; ?>" />
											<button type="submit" id="submit" name="submit" class="btn btn-primary" style="background-color:#F00;">Delete Instructor</button>
                                            </center>
											

										</div>
										
									</div>
                                            </form>
										
									</div>
								</div>
							</div>
                            
							
						</div>
					</div>