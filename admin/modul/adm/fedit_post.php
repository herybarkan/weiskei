<?php
ob_start();
session_start();

require_once '../../../Connections/con.php';

$sel_post=$db->prepare("SELECT * FROM tbl_post WHERE id_='$_GET[id_]'");	//sql select query
$sel_post->execute();
$row_post=$sel_post->fetch(PDO::FETCH_ASSOC);
?>

<script type="text/javascript" src="modul/ajax/ajax_sub_cat.js"></script>
<div class="row gutters">
<form action="modul/adm/ed_posting.php" method="POST" enctype="multipart/form-data" style="width:100%;">
<div class="col-12">
							<h4>Edit Post
							  <input name="hf_id" type="hidden" id="hf_id" value="<?php echo $row_post['id_']; ?>" />
							</h4> 
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
                                        <option value="<?php //echo $row['id_']; ?>"<?php //if (!(strcmp($row['id_'], $row_post['id_category']))) {echo "selected=\"selected\"";} ?>><?php //echo $row['nm_category']; ?></option>
                                        
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
												<select name="category" class="form-control default-select" id="category" onchange="show_subc(document.getElementById('category').value);">
                                                <option selected>Select...</option>
                                                <?php
									/*$select_sc=$db->prepare("SELECT * FROM category_sub WHERE id_category='$row_post[id_category]'");	//sql select query
									$select_sc->execute();
									while($row_sc=$select_sc->fetch(PDO::FETCH_ASSOC))
									{*/
									?>
                                        <option value="<?php //echo $row['id_']; ?>"<?php //if (!(strcmp($row_sc['id_'], $row_post['id_sub_category']))) {echo "selected=\"selected\"";} ?>><?php //echo $row_sc['nm_sub_category']; ?></option>
                                        
                                    <?php
									//}
									?>

                                                    
                                                </select>
                                                </div>
											</div>
										</div>-->
                                        <input name="category" type="hidden" class="form-control" id="category" >
                                        <input name="sub_category" type="hidden" class="form-control" id="sub_category" >
                                       
                                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="inputName">Title</label>
												<input name="title" type="text" class="form-control" id="title" placeholder="" value="<?php echo $row_post['title']; ?>">
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
                                            <textarea name="content" cols="" rows="15" id="summernote" class="summernote"><?php echo $row_post['content']; ?></textarea>
                                            
												<button type="submit" class="btn btn-primary mb-2">Submit</button>
											</div>
										</div>
									</div>
                                    

								</div>
							</div>
						</div>
                        </form>
                        </div>
                        
                        <script>
			
				$('.summernote').summernote({
					height: 570,
					tabsize: 2
				});
			
		</script>