<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>
<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="table-container">
								<div class="t-header">
                                <h4>List Instructor</h4>
                               <!-- <a href="?com=add_instructor"><button type="button" class="btn btn-primary float-right">Add Instructor</button></a>-->
                                </div>
								<div class="table-responsive">
									<table width="120%" class="table custom-table" id="basicExample">
										<thead>
											<tr>
											  <th width="6%">Options</th>
											  <th width="3%">No</th>
											  <th width="6%">Pict</th>
												<th width="11%">Name</th>
												<th width="20%">Contact</th>
												<th width="16%">Category</th>
												<th width="16%">Sub Category</th>
												<th width="14%">Who Train</th>
												<th width="14%">Where Work</th>
												<th width="10%">Join date</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
										$x=1;
									$select_stmt=$db->prepare("SELECT
user_.username,
user_.aktif,
instructor.id_,
instructor.kd_instructor,
instructor.first_name,
instructor.last_name,
instructor.country,
instructor.state,
instructor.city,
instructor.street_name,
instructor.street_number,
instructor.zip_code,
instructor.phone_number,
instructor.photo,
instructor.typec,
instructor.who_train,
instructor.where_work,
instructor.tgl_in,
instructor.jam_in,
instructor.sts,
instructor.sts2
FROM
instructor
JOIN user_
ON instructor.kd_instructor = user_.kd_user WHERE user_.aktif='1' ORDER BY instructor.id_ DESC");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
											<tr>
											  <td>
       <div class="td-actions"> 
       <!--<a href="javascript:void(0);" class="icon red openPopupLG" data-href="modul/instruktur/fedit_instructor.php?id_=<?php //echo $row['id_']; ?>" > 
       <i class="icon-edit1"></i> 
       </a> -->
														<!--<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail">
															<i class="icon-zoom-in"></i></a>-->
														
	<!--<a href="javascript:void(0);" class="icon blue openPopup" data-href="modul/instruktur/fdel_instructor.php?id_=<?php //echo $row['id_']; ?>" style="background-color:#F00;"> 
    <i class="icon-trash-2"></i>
    </a> -->
    
    <!--<a href="javascript:void(0);" class="icon blue openPopup" data-href="modul/instruktur/fdel_instructor.php?id_=<?php //echo $row['id_']; ?>" style="background-color:#096;"> 
    <i class="icon-edit"></i>
    </a> -->
       
 <!--<a href="javascript:void(0);" class="icon red openPopup" data-href="modul/user/fedit_user.php?id_=<?php //echo $row['kd_instructor']; ?>" > <i class="icon-edit1"></i> 
                                              </a>       -->
 </div>
 
 <!--=================================================-->
 <div class="dropdown">
											<button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Click
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
												<a class="dropdown-item openPopupLG" href="javascript:void(0);" data-href="modul/instruktur/fedit_instructor.php?id_=<?php echo $row['id_']; ?>">Edit Instructor</a>
												<a class="dropdown-item openPopup" href="javascript:void(0);" data-href="modul/instruktur/fdel_instructor.php?id_=<?php echo $row['id_']; ?>">Delete Instructor</a>
												<a class="dropdown-item openPopup" href="javascript:void(0);" data-href="modul/user/fedit_user.php?id_=<?php echo $row['kd_instructor']; ?>">Update User login</a>
                                                <?php if ($row['sts2']=="R") { ?>
                                                <a class="dropdown-item openPopup" href="javascript:void(0);" data-href="modul/user/fmake_ambassador.php?id_=<?php echo $row['kd_instructor']; ?>">Make Ambassador</a>
                                                <?php } elseif ($row['sts2']=="A") { ?>
                                                <a class="dropdown-item openPopup" href="javascript:void(0);" data-href="modul/user/fremove_ambassador.php?id_=<?php echo $row['kd_instructor']; ?>">Remove Ambassador</a>
                                                <?php } ?>
                                                
											</div>
										</div>
 <!--=================================================-->
       
       </td>
											  <td><?php echo $x; ?></td>
											  <td align="center"><img src="../foto/user/<?php echo $row['photo']; ?>"  height="60" style="border-radius:5px;"/></td>
												<td>
												<strong>
                                                <a href="../?com=bprofile&kd_inst=<?php echo $row['kd_instructor']; ?>" target="_blank">
												<?php echo $row['first_name']; ?> 
												<?php echo $row['last_name']; ?>
                                                </a>
                                                </strong>
                                                <br>
                                                <?php 
												if ($row['sts']=="0") {echo "<span class=\"badge badge-pill badge-dark\">Freemium</span>";} 
												elseif ($row['sts']=="1") {echo "<span class=\"badge badge-pill badge-warning\">Profesional</span>";} 
												
												if ($row['sts2']=="A") {echo "<span class=\"badge badge-pill \" style=\"background-color:#FF0000; color:#FFF;\">Ambassador</span>";} 
												
												?>
                                                </td>
												<td><?php echo $row['street_name']; ?> <?php echo $row['street_number']; ?><br><?php echo $row['phone_number']; ?> / <?php echo $row['username']; ?></td>
												<td>
                                                <?php
                                                $select_stmt_type=$db->prepare("SELECT *
FROM
type_class WHERE kd_instructor ='$row[kd_instructor]'");	//sql select query
									$select_stmt_type->execute();
									while($row_type=$select_stmt_type->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                                <span class="badge badge-pill badge-dark"><?php echo $row_type['type']; ?></span>
                                    <?php } ?>
                                                </td>
												<td><?php
                                                $select_stmt_type_sub=$db->prepare("SELECT *
FROM
type_class_sub WHERE kd_instructor ='$row[kd_instructor]'");	//sql select query
									$select_stmt_type_sub->execute();
									while($row_type_sub=$select_stmt_type_sub->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                                  <span class="badge badge-pill badge-dark"><?php echo $row_type_sub['sub_class_name']; ?></span>
                                                <?php } ?></td>
												<td><?php
                                                $select_stmt_wt=$db->prepare("SELECT *
FROM who_train WHERE kd_instructor ='$row[kd_instructor]'");	//sql select query
									$select_stmt_wt->execute();
									while($row_wt=$select_stmt_wt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                                  <span class="badge badge-pill badge-warning"><?php echo $row_wt['wtrain']; ?></span>
                                                <?php } ?></td>
												<td>
                                                <?php
                                                $select_stmt_ww=$db->prepare("SELECT *
FROM where_work WHERE kd_instructor ='$row[kd_instructor]'");	//sql select query
									$select_stmt_ww->execute();
									while($row_ww=$select_stmt_ww->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                                <span class="badge badge-pill badge-warning"><?php echo $row_ww['wwork']; ?></span>
                                                <?php } ?>
                                                </td>
												<td><?php echo $row['tgl_in']; ?></td>
											</tr>
                                            <?php $x+=1; } ?>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
                    
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="bd-example-modal-lg">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<!--<h5 class="modal-title" id="myLargeModalLabel">Detail</h5>-->
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