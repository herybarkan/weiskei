<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>

<div class="row gutters">
<form action="modul/master/in_sub_category.php" method="POST" enctype="multipart/form-data" style="width:100%;">
<div class="col-12">
							<h4>Add Sub Category</h4> 
                            <div class="card" style="width:100%;">
								<div class="card-body">
									
									<div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    
                                    <div class="form-group">
												<label for="inputName">Select Category</label>
												<select name="category" class="form-control default-select" id="category">
                                                <option selected>Select...</option>
                                                <?php
												
									$select_stmt=$db->prepare("SELECT * FROM category WHERE aktif='1'");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <option value="<?php echo $row['id_']; ?>"><?php echo $row['nm_category']; ?></option>
                                        
                                    <?php
									}
									?>

                                                    
                                                </select>
											</div>
                                            
											
											
										</div>
                                    
                                    
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="inputName">Sub Category Name</label>
												<input name="sub_category_name" type="text" class="form-control" id="sub_category_name" placeholder="">
											</div>
										</div>
                                        <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="inputName">Link</label>
												<input name="link" type="text" class="form-control" id="link" placeholder="">
											</div>
										</div>-->
                                        <input name="link" type="hidden" class="form-control" id="link" placeholder="">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="inputEmail">Images</label>
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
						</div>
                        </form>
                        </div>
                        
                        <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="table-container">
								<div class="t-header"><h4>List Sub Category</h4>
                                
                              </div>
								<div class="table-responsive">
									<table width="100%" class="table custom-table" id="basicExample">
										<thead>
											<tr>
											  <th width="3%">No</th>
											  <th width="6%">Images</th>
												<th width="43%">Category</th>
												<th width="41%">Sub Category</th>
												<th width="7%">Option</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
									$select_stmt=$db->prepare("SELECT
category.nm_category,
category.image,
category.link,
category.aktif,
category_sub.nm_sub_category,
category_sub.image AS image_subcat,
category_sub.link AS link_subcat,
category_sub.aktif AS aktif_subcat,
category_sub.id_
FROM
category_sub
JOIN category
ON category_sub.id_category = category.id_ WHERE category_sub.aktif='1' ORDER BY id_ DESC");	//sql select query
									$select_stmt->execute();
									$x=1;
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
											<tr>
											  <td><?php echo $x; ?></td>
											  <td align="center"><img src="../foto/assets/<?php echo $row['image_subcat']; ?>"  height="60" /></td>
												<td><?php echo $row['nm_category']; ?></td>
												<td><?php echo $row['nm_sub_category']; ?></td>
												<td>
                                                <div class="td-actions">
														<a href="javascript:void(0);" class="icon red openPopupLG" data-href="modul/master/fedit_category_sub.php?id_=<?php echo $row['id_']; ?>" > <i class="icon-edit1"></i> 
                                              </a> 
														<!--<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
															<i class="icon-zoom-in"></i></a>-->
														
														<a href="javascript:void(0);" class="icon blue openPopup" data-href="modul/master/fdel_category_sub.php?id_=<?php echo $row['id_']; ?>" style="background-color:#F00;"> <i class="icon-trash-2"></i> 
                                              </a> 
													</div>
                                                </td>
											</tr>
                                            <?php $x+=1; } ?>
										</tbody>
									</table>
								</div>
							</div>

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