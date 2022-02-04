<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>
<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="table-container">
								<div class="t-header">
                                <h4>List My Pending Order</h4>
                                
                              </div>
								<div class="table-responsive">
									<table width="100%" class="table custom-tablex" id="basicExamplex">
										<thead>
											<tr>
											  <th width="2%">No</th>
											  <th width="4%">Status</th>
											  <th width="5%">Pict</th>
												<th width="56%">Name</th>
												<th width="20%">Contact</th>
												<th width="13%">Date</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
										$x=1;
									$select_stmt=$db->prepare("SELECT * FROM payments WHERE product_name LIKE '%$_SESSION[yo_kd_user]%' AND approve='0' ORDER BY id DESC");	//sql select query
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
   
    $select_mem=$db->prepare("SELECT
member.kd_member,
member.first_name,
member.last_name,
countries.`name` AS nm_negara,
states.`name` AS nm_state,
cities.`name` AS nm_city,
member.photo,
member.aktif,
member.phone_number,
user_.username
FROM
countries
JOIN member
ON countries.id = member.country 
JOIN states
ON states.id = member.state 
JOIN cities
ON cities.id = member.city 
JOIN user_
ON user_.kd_user = member.kd_member
   WHERE member.kd_member='$data[2]'
   GROUP BY member.kd_member"); //sql select query
   $select_mem->execute();
   $row_mem=$select_mem->fetch(PDO::FETCH_ASSOC);
   

									?>
											<tr>
											  <td><?php echo $x; ?></td>
											  <td align="center">
                                              <!--<a href="javascript:void(0);" class="openPopup" data-href="modul/instruktur/approve_order.php?id_=<?php //echo $row['id']; ?>" id="xxx">
<button class="btn btn-primary btn-sm" type="button">Confirm</button>														</a>-->
                                              <a href="javascript:void(0);" class="openPopup" data-href="modul/instruktur/approve_order.php?id_=<?php echo $row['id']; ?>" id="xxx">
                    <img src="img/pending.png" width="41" height="40" />
                    </a>
                    </td>
											  <td align="center"><img src="../foto/user/<?php echo $row_mem['photo']; ?>"  height="60" /></td>
												<td>
												<strong>
												<?php echo $row_mem['first_name'].' '.$row_mem['last_name']; ?></strong> <br>
												<?php echo $row_mem['nm_negara'].','.$row_mem['nm_state'].','.$row_mem['nm_city']; ?></td>
												<td><?php echo $row_mem['username'].', '.$row_mem['phone_number']; ?></td>
												<td><?php echo $row['date_order']; ?></td>
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