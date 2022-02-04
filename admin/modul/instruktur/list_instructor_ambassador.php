<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>
<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="table-container">
								<div class="t-header">
                                <h4>List Ambassador Instructor</h4>
                                <!--<a href="?com=add_instructor"><button type="button" class="btn btn-primary float-right">Add Instructor</button></a>-->
                                </div>
								<div class="table-responsive">
									<table width="100%" class="table custom-table" id="basicExample">
										<thead>
											<tr>
											  <th width="3%">No</th>
											  <th width="9%">Pict</th>
												<th width="40%">Name</th>
												<th width="27%">Contact</th>
												<th width="21%">Join date</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
										$x=1;
									/*$select_stmt=$db->prepare("SELECT

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
instructor.jam_in
FROM
instructor
JOIN payments_upgrade
ON instructor.kd_instructor = payments_upgrade.kd_instructor GROUP BY payments_upgrade.kd_instructor ORDER BY payments_upgrade.id DESC");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))*/
									
									$select_stmt=$db->prepare("SELECT * FROM
instructor WHERE sts='1' AND sts2='A' AND aktif='1'");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
											<tr>
											  <td><?php echo $x; ?></td>
											  <td align="center"><img src="../foto/user/<?php echo $row['photo']; ?>"  height="60" style="border-radius:5px;"/></td>
												<td>
												<strong>
                                                <a href="../?com=bprofile&kd_inst=<?php echo $row['kd_instructor']; ?>" target="_blank">
												<?php echo $row['first_name']; ?> 
												<?php echo $row['last_name']; ?>
                                                </a>
                                                </strong>
                                                </td>
												<td><?php echo $row['street_name']; ?> <?php echo $row['street_number']; ?><br>
                                                <?php echo $row['phone_number']; ?> / <?php echo $row['username']; ?></td>
												<td><?php echo $row['tgl_in']; ?></td>
											</tr>
                                            <?php $x+=1; } ?>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>