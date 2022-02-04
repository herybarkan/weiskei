<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>
<script type="text/javascript" src="modul/ajax/ajax_sub_cat.js"></script>
<div class="row gutters">
<form action="modul/adm/in_posting.php" method="POST" enctype="multipart/form-data" style="width:100%;">
<div class="col-12">
							<h4>Add Post</h4> 
                            <div class="card" style="width:100%;">
								<div class="card-body">
									
									<div class="row gutters">
                                    <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    
                                    <div class="form-group">
												<label for="inputName">Select Category</label>
												<select name="category" class="form-control default-select" id="category" onchange="show_subc(document.getElementById('category').value);">
                                                <option selected>Select...</option>
                                                <?php
									/*$select_stmt=$db->prepare("SELECT * FROM category WHERE aktif='1'");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{*/
									?>
                                        <option value="<?php //echo $row['id_']; ?>"><?php //echo $row['nm_category']; ?></option>
                                        
                                    <?php
									//}
									?>

                                                    
                                                </select>
											</div>
                                            
											
											
										</div>-->
                                    
                                    
										<!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="inputName">Sub Category Name</label>
                                                <div id="result_subc">
												<select name="sub_category" class="form-control default-select" id="sub_category">
                                                <option selected>Select...</option>
                                                </select>
                                                </div>
											</div>
										</div>-->
                                        <input name="category" type="hidden" class="form-control" id="category" >
                                        <input name="sub_category" type="hidden" class="form-control" id="sub_category" >
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="inputName">Title</label>
												<input name="title" type="text" class="form-control" id="title" placeholder="">
											</div>
										</div>
                                        
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
                                            <label for="inputName">Content</label>
                                            
                                            <!--<div class="summernote"></div>-->
                                            <textarea name="content" cols="" rows="5" class="summernote"></textarea>
                                            
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
								<div class="t-header">
								  <h4>List Post</h4>
                                
                              </div>
								<div class="table-responsive">
									<table width="100%" class="table custom-table" id="basicExample">
										<thead>
											<tr>
											  <th width="2%">No</th>
											  <th width="5%">Images</th>
												<th width="43%">Title</th>
												<th width="43%">Content</th>
												<th width="5%">Option</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
									$select_stmt=$db->prepare("SELECT id_, kd_post, id_category, id_sub_category, title, tgl, jam, image, in_by, aktif FROM tbl_post WHERE aktif='1' ORDER BY id_ DESC");	//sql select query
									$select_stmt->execute();
									$x=1;
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
											<tr>
											  <td><?php echo $x; ?></td>
											  <td align="center"><img src="../foto/article/<?php echo $row['image']; ?>"  height="60" /></td>
												<td><?php echo $row['title']; ?></td>
												<td>
												<a href="javascript:void(0);" class="openPopupXL" data-href="modul/adm/detail_posting.php?id_=<?php echo $row['id_']; ?>" id="xxx"><span class="btn btn-sm btn-warning">Detail</span></a>
												<?php //echo $row['content']; ?></td>
												<td>
                                                <div class="td-actions">
														<a href="javascript:void(0);" class="icon red openPopupXL" data-href="modul/adm/fedit_post.php?id_=<?php echo $row['id_']; ?>" > <i class="icon-edit1"></i> 
                                              </a> 
														<!--<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
															<i class="icon-zoom-in"></i></a>-->
														
														<a href="javascript:void(0);" class="icon blue openPopup" data-href="modul/adm/fdel_post.php?id_=<?php echo $row['id_']; ?>" style="background-color:#F00;"> <i class="icon-trash-2"></i> 
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
                    
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="bd-example-modal-xl">
										<div class="modal-dialog modal-xl">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myExtraLargeModalLabel">Detail</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
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
                                    
<script>
			
				$('.summernote').summernote({
					height: 170,
					tabsize: 2
				});
			
		</script>