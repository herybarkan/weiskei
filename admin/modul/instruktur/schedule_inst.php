<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>

<div class="row gutters">
<form action="modul/instruktur/in_schedule.php" method="POST" enctype="multipart/form-data" style="width:100%;">
<div class="col-12">
							<h4>Add Master Schedule</h4> 
                            <div class="card" style="width:100%;">
								<div class="card-body">
									
									<div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    
                                    <div class="form-group">
												<label for="inputName">Day</label>
												<select name="day" class="form-control select2" id="day">
                                                <option selected>Select...</option>
                                                <?php
									$select_stmt_day=$db->prepare("SELECT * FROM hari");	//sql select query
									$select_stmt_day->execute();
									while($row_day=$select_stmt_day->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <option value="<?php echo $row_day['hari_en']; ?>"><?php echo $row_day['hari_en']; ?></option>
                                        
                                    <?php
									}
									?>

                                                    
                                                </select>
											</div>
                                            
											
											
										</div>
                                    
                                    
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<!--<label for="inputName">Sub Category Name</label>
												<input name="sub_category_name" type="text" class="form-control" id="sub_category_name" placeholder="">-->
											</div>
										</div>
                                        
                                        <div id="dsession" class="col-6">
                                        <div class="row">
                                        <div class="col-6">
											<div class="form-group">
												<label for="inputName">Time Start</label>
												<input name="jam_start[]" type="time" class="form-control" id="jam_start[]" placeholder="">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group">
												<label for="inputName">Time End</label>
												<input name="jam_end[]" type="time" class="form-control" id="jam_end[]" placeholder="">
											</div>
										</div>
                                        </div>
                                        </div>
                                        
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
                                            <label for="inputName">New Session</label><br>
												<button type="button" class="btn btn-primary mb-2" id="add_session">+</button>
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
								<div class="t-header">
								  <h4>List Master Schedule</h4>
                                
                              </div>
								<div class="table-responsive">
									<table width="100%" class="table custom-table" id="basicExample">
										<thead>
											<tr>
											  <th width="4%">No</th>
											  <th width="28%">Day</th>
												<th width="61%">Session</th>
												<th width="7%">Option</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
									$select_stmt=$db->prepare("SELECT * FROM instructor_sched
 WHERE kd_instructor='$_SESSION[yo_kd_user]' ORDER BY id_ ASC");	//sql select query
									$select_stmt->execute();
									$x=1;
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
											<tr>
											  <td><?php echo $x; ?></td>
											  <td><?php echo $row['hari']; ?></td>
												<td>
												<?php echo $row['jam_start']; ?> - 
                                                <?php echo $row['jam_end']; ?>
                                                </td>
												<td>
                                                <div class="td-actions">
														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
															<i class="icon-edit1"></i>
														</a>
														<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
															<i class="icon-zoom-in"></i>
														</a>
														<a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
															<i class="icon-trash-2"></i>
														</a>
													</div>
                                                </td>
											</tr>
                                            <?php $x+=1; }  ?>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>