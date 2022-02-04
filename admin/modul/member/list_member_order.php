<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>
<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="table-container">
								<div class="t-header">
                                <h4>List My  Order</h4>
                                
                              </div>
								<div class="table-responsive">
									<table width="100%" class="table custom-tablex" id="basicExamplex">
										<thead>
											<tr>
											  <th width="2%">No</th>
											  <th width="5%">Status</th>
											  <th width="8%">Pict</th>
												<th width="59%">Name</th>
												<th width="12%">Date</th>
												<th width="14%">Session</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
										$x=1;
									$select_stmt=$db->prepare("SELECT * FROM payments WHERE product_name LIKE '%$_SESSION[yo_kd_user]%' ORDER BY id DESC");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
										
$data_sources  = $row['product_name'];
$data = explode(",", $data_sources);
//echo $data[0]; // piece1
//echo $data[1]; // piece2
//echo $data[2]; // piece2

 $select_cont=$db->prepare("SELECT
   user_.username AS email,
   instructor.*,
   countries.`name` AS nm_negara,
   states.`name` AS nm_state,
   cities.`name` AS nm_city
   FROM
   instructor
   JOIN user_
   ON instructor.kd_instructor = user_.kd_user 
   JOIN countries
   ON countries.id = instructor.country 
   JOIN states
   ON states.id = instructor.state 
   JOIN cities
   ON cities.id = instructor.city
   WHERE instructor.kd_instructor='$data[1]'
   GROUP BY instructor.kd_instructor"); //sql select query
   $select_cont->execute();
   $row_cont=$select_cont->fetch(PDO::FETCH_ASSOC);
   

									?>
											<tr>
											  <td><?php echo $x; ?></td>
											  <td align="center">
                                              <?php //echo $row['approve']; ?>
											  <?php //echo $row['sts_end']; ?>
                    <?php //echo $row['approve']; ?>
                    <?php if ($row['approve']=="0" && $row['sts_end']=="0") { ?>                          
                    <a href="javascript:void(0);" class="openPopup" data-href="modul/member/info_order.php?id_=<?php echo $row['id']; ?>" id="xxx">
                    <img src="img/pending.png" width="41" height="40" />
                    </a>
                    <?php } elseif ($row['approve']=="1" && $row['sts_end']=="0") { ?>                          
                    <a href="javascript:void(0);" class="openPopup" data-href="modul/member/info_progress.php?id_=<?php echo $row['id']; ?>" id="xxx">
                    <img src="img/progress.png" width="41" height="40" />
                    </a>
                    <?php } elseif ($row['approve']=="1" && $row['sts_end']=="1") { ?>                          
                    <a href="javascript:void(0);" class="openPopup" data-href="modul/member/form_review.php?id_=<?php echo $row['id']; ?>" id="xxx">
                    <img src="img/new_order.png" width="41" height="40" />
                    </a>
                    <?php } elseif ($row['approve']=="3" && $row['sts_end']=="1") { ?>                          
                    <a href="javascript:void(0);" class="openPopup" data-href="modul/member/info_done.php?id_=<?php echo $row['id']; ?>" id="xxx">
                    <img src="img/done.png" width="41" height="40" />
                    </a>
                    <?php } elseif ($row['approve']=="9" && $row['sts_end']=="0") { ?>                          
                    <a href="javascript:void(0);" class="openPopup" data-href="modul/member/info_reject.php?id_=<?php echo $row['id']; ?>" id="xxx">
                    <img src="img/reject.png" width="41" height="40" />
                    </a>
                    <?php } ?>
                    

                                              </td>
											  <td align="center"><img src="../foto/user/<?php echo $row_cont['photo']; ?>"  height="60" /></td>
											  <td>
						<strong><?php echo $row_cont['first_name'].' '.$row_cont['last_name']; ?></strong><br> 
											  <?php echo $row_cont['nm_negara'].','.$row_cont['nm_state'].','.$row_cont['nm_city']; ?><?php echo $row_cont['email'].', '.$row_cont['phone_number']; ?></td>
												<td><?php echo $data[3]; ?> <?php echo $data[4]; ?></td>
												<td>
												<?php echo $data[0]; ?><br>
												<?php echo $data[5]; ?> - <?php echo $data[6]; ?></td>
											</tr>
                                            <?php $x+=1; ?>
                                            <?php } ?>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
                    
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="basicModalLabel"></h5>
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