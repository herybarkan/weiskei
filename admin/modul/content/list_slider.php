<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<div class="row gutters">


<div class="col-12">
						<h4>Add Slider</h4>
                        <?php
										$x=1;
									$select_stmt=$db->prepare("SELECT * FROM slider WHERE aktif='1'");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                    <form action="modul/master/in_category.php" method="POST" enctype="multipart/form-data" style="width:100%;">
                        <div class="card" style="width:100%;">
								<div class="card-body">
									
									<div class="row gutters">
                                    
										<div class="col-4">
									    <img src="../imager/slider/<?php echo $row['bg_mobile']; ?>" width="100%" /> 
                                        </div>
                                        <div class="col-8">
									    <img src="../imager/slider/<?php echo $row['bg_desktop']; ?>" width="100%" /> 
                                        </div>
                                        
                                        <input name="link" type="hidden" class="form-control" id="link" placeholder="">
										<div class="col-4">
											<div class="form-group">
												<label for="inputEmail">Images</label>
                                                <small>(600 x 640 pixel)</small>
												<input name="file" type="file" class="form-control" id="file" placeholder="">
											</div>
										</div>
                                        
                                        <div class="col-8">
											<div class="form-group">
												<label for="inputEmail">Images</label>
                                                <small>(1920 x 820 pixel)</small>
												<input name="file" type="file" class="form-control" id="file" placeholder="">
											</div>
										</div>
                                        
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="inputPwd">Status</label>
												<div class="custom-control custom-switch">
										<input name="aktif" type="checkbox" class="custom-control-input" id="aktif" value="1" checked="">
										<label class="custom-control-label" for="customSwitch3">Active</label>
									</div>
											</div>
										</div>
                                        
                                        
                                    
										
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<button type="submit" class="btn btn-primary mb-2">Submit</button>
											</div>
										</div>
									</div>
                                    

								</div>
							</div>
                             </form>
                            <?php } ?>
						</div>
                       
                        </div>
                        
                        
                        
                    
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="bd-example-modal-lg">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<!--<h5 class="modal-title" id="myLargeModalLabel">Modal Title</h5>-->
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="modal-body">
													...
												</div>
												<!--<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save</button>
												</div>-->
											</div>
									  </div>
									</div>
                                    
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true" style="display: none;">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<!--<h5 class="modal-title" id="basicModalLabel">Modal Title</h5>-->
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="modal-body">
													...
												</div>
												<!--<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save</button>
												</div>-->
											</div>
										</div>
									</div>