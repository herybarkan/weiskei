<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>
<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="table-container">
								<div class="t-header">
                                <h4>List Users</h4>
                                <!--<a href="?com=add_instructor"><button type="button" class="btn btn-primary float-right">Add Instructor</button></a>-->
                                </div>
								<div class="table-responsive">
									<table width="100%" class="table custom-table" id="basicExample">
										<thead>
											<tr>
											  <th width="6%">Options</th>
											  <th width="2%">No</th>
											  <th width="5%">Pict</th>
												<th width="23%">Name</th>
												<th width="30%">Contact</th>
												<th width="14%">Join date</th>
												<th width="12%">Group</th>
												<th width="8%">Status</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
										$x=1;
									$select_stmt=$db->prepare("SELECT * FROM user_ ORDER BY id_ DESC");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
										
										$cek_user=$db->prepare("SELECT * FROM instructor WHERE kd_instructor='$row[kd_user]'");
   $cek_user->execute();
   $row_cek_user=$cek_user->fetch(PDO::FETCH_ASSOC);
									?>
											<tr>
											  <td>
                                              <div class="td-actions"> 
                                              <a href="javascript:void(0);" class="icon red openPopup" data-href="modul/user/fedit_user.php?id_=<?php echo $row_cek_user['kd_instructor']; ?>" > <i class="icon-edit1"></i> 
                                              </a> 
                                              
                                              <!--<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"> <i class="icon-zoom-in"></i> 
                                              </a> -->
                                              <?php if ($row['aktif']=="1") { ?>
                                              <a href="javascript:void(0);" class="icon blue openPopup" data-href="modul/user/fdel_user.php?id_=<?php echo $row_cek_user['kd_instructor']; ?>" style="background-color:#F00;"> <i class="icon-trash-2"></i> 
                                              </a> 
                                              <?php } elseif ($row['aktif']=="0") { ?>
                                              <a href="javascript:void(0);" class="icon blue openPopup" data-href="modul/user/faktif_user.php?id_=<?php echo $row_cek_user['kd_instructor']; ?>" style="background-color:#093;"> <i class="icon-trash-2"></i> 
                                              </a> 
                                              <?php } ?>
                                              
                                              
                                              </div>
                                              </td>
											  <td><?php echo $x; ?></td>
											  <td align="center"><img src="../foto/user/<?php echo $row_cek_user['photo']; ?>"  height="60" style="border-radius:5px;"/></td>
												<td>
												<strong>
                                                <a href="../?com=bprofile&kd_inst=<?php echo $row_cek_user['kd_instructor']; ?>" target="_blank">
												<?php echo $row_cek_user['first_name']; ?> 
												<?php echo $row_cek_user['last_name']; ?>
                                                </a>
                                                </strong>
                                                <br>
                                                <?php 
												if ($row_cek_user['sts']=="0") {echo "<span class=\"badge badge-pill badge-dark\">Freemium</span>";} 
												elseif ($row_cek_user['sts']=="1") {echo "<span class=\"badge badge-pill badge-warning\">Profesional</span>";} 
												
												?>
                                                </td>
												<td><?php echo $row_cek_user['street_name']; ?> <?php echo $row['street_number']; ?><br><?php echo $row['phone_number']; ?> / <?php echo $row['username']; ?></td>
												<td><?php echo $row['tgl_in']; ?></td>
												<td>
												<?php 
												$cek_ug=$db->prepare("SELECT * FROM user_grup WHERE kd_grup='$row[grup]'");
   												$cek_ug->execute();
   												$row_cek_ug=$cek_ug->fetch(PDO::FETCH_ASSOC);
												echo $row_cek_ug['nm_grup']; ?>
                                                </td>
												<td>
												<?php 
												if ($row['aktif']=="1")
												{
													echo "Active";
													} else 
													{
														echo "Not Active";
														}
												 ?></td>
											</tr>
                                            <?php $x+=1; } ?>
										</tbody>
									</table>
								</div>
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