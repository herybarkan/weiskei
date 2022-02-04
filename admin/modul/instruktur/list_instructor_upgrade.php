<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>
<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="table-container">
								<div class="t-header">
                                <h4>List Upgrade Profesioanal Instructor</h4>
                                <!--<a href="?com=add_instructor"><button type="button" class="btn btn-primary float-right">Add Instructor</button></a>-->
                                </div>
								<div class="table-responsive">
									<table width="100%" class="table custom-table" id="basicExample">
										<thead>
											<tr>
											  <th width="2%">No</th>
											  <th width="5%">Pict</th>
												<th width="16%">Name</th>
												<th width="19%">Contact</th>
												<th width="10%">Join date</th>
												<th width="15%">Last Payment</th>
												<th width="12%">Start Subscribe</th>
												<th width="13%">End Subsribe</th>
												<th width="8%">Status</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
										$x=1;
									$select_stmt=$db->prepare("SELECT * FROM
instructor WHERE sts='1' AND sts2='R' AND aktif='1'");	//sql select query
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
												<td>
                                                <?php
												$cek_pay=$db->prepare("SELECT * FROM payments_upgrade
   WHERE kd_instructor='$row[kd_instructor]'
    ORDER BY id DESC LIMIT 1"); //sql select query
   $cek_pay->execute();
   $row_cek_pay=$cek_pay->fetch(PDO::FETCH_ASSOC);
												?>
                                                <?php 
												echo $row_cek_pay['createdtime'];
												?>
                                                </td>
												<td><?php 
												echo $row_cek_pay['tgl_start'];
												?></td>
												<td><?php 
												echo $row_cek_pay['tgl_end'];
												?></td>
												<td>
                                                <?php
												$tgl1 = $row_cek_pay['tgl_end'];
												$tgl2 = date('Y-m-d');
												if (strtotime($tgl2) <= strtotime($tgl1)) 
													{
													echo "Active";
													} 
												else 
													{ 
													echo "Not Active";
													}
												?>
                                                </td>
											</tr>
                                            <?php $x+=1; } ?>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>