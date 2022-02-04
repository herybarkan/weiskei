<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>
<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="table-container">
								<div class="t-header">
                                <h4>List Member</h4>
                                <a href="?com=add_member"><button type="button" class="btn btn-primary float-right">Add Member</button></a>
                                </div>
								<div class="table-responsive">
									<table width="100%" class="table custom-table" id="basicExample">
										<thead>
											<tr>
											  <th width="5%">No</th>
											  <th width="6%">Pict</th>
												<th width="16%">Name</th>
												<th width="12%">Address</th>
												<th width="10%">Phone</th>
												<th width="22%">Email</th>
												<th width="19%">Join date</th>
												<th width="10%">Options</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
										$x=1;
									$select_stmt=$db->prepare("SELECT * FROM member WHERE aktif='1' ORDER BY id_ DESC");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
											<tr>
											  <td><?php echo $x; ?></td>
											  <td align="center"><img src="../foto/user/<?php echo $row['photo']; ?>"  height="60" /></td>
												<td><strong><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></strong></td>
												<td><?php echo $row['street_name']; ?> <?php echo $row['street_number']; ?></td>
												<td><?php echo $row['phone_number']; ?></td>
												<td>
                                                <?php
												$select_email=$db->prepare("SELECT username FROM user_ WHERE kd_user='$row[kd_member]'");	//sql select query
									$select_email->execute();
									$row_email=$select_email->fetch(PDO::FETCH_ASSOC);
												?>
                                                <?php echo $row_email['username']; ?>
                                                </td>
												<td><?php echo $row['tgl_in']; ?></td>
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
                                            <?php $x+=1; } ?>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>