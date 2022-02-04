<?php
ob_start();
session_start();

require_once '../Connections/con.php';

if ($_SESSION['yo_grup']=="1") {
$select_stmt_inst=$db->prepare("SELECT * FROM user_ WHERE kd_user='$_SESSION[yo_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Super Admin";
}
elseif ($_SESSION['yo_grup']=="2") {
$select_stmt_inst=$db->prepare("SELECT * FROM staff WHERE kd_staff='$_SESSION[yo_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Staff";
}
elseif ($_SESSION['yo_grup']=="3") {
$select_stmt_inst=$db->prepare("SELECT
user_.username,
instructor.*
FROM
instructor
JOIN user_
ON instructor.kd_instructor = user_.kd_user WHERE kd_instructor='$_SESSION[yo_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Instructor";
}
elseif ($_SESSION['yo_grup']=="4") {
$select_stmt_inst=$db->prepare("SELECT * FROM member WHERE kd_member='$_SESSION[yo_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Member";
}
?>

					<!-- Row start -->
                    <div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-body">
									<div class="account-settings">
										<div class="user-profile">
											<div class="user-avatar">
												<img src="../foto/user/<?php echo $row_inst['photo']; ?>" alt="img">
											</div>
											<h5 class="user-name"><?php echo $row_inst['first_name']; ?> <?php echo $row_inst['last_name']; ?></h5>
											<h6 class="user-email"><?php echo $row_inst['username']; ?></h6>
										</div>
										<div class="list-group">
											<a href="contacts.html" class="list-group-item">Contacts</a>
											<a href="chat.html" class="list-group-item">Chat</a>
											<a href="tasks.html" class="list-group-item">Tasks</a>
											<a href="documents.html" class="list-group-item">Documents</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title">Update Profile</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Full Name</label>
												<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
											</div>
											<div class="form-group">
												<label for="eMail">Email</label>
												<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
											</div>
											<div class="form-group">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
											</div>
											<div class="form-group">
												<label for="website">Website URL</label>
												<input type="url" class="form-control" id="website" placeholder="Website url">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="addRess">Address</label>
												<input type="text" class="form-control" id="addRess" placeholder="Enter Address">
											</div>
											<div class="form-group">
												<label for="ciTy">City</label>
												<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
											</div>
											<div class="form-group">
												<label for="sTate">State</label>
												<input type="text" class="form-control" id="sTate" placeholder="Enter State">
											</div>
											<div class="form-group">
												<label for="zIp">ZIP</label>
												<input type="number" class="form-control" id="zIp" placeholder="Website ZIP">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-right">
												<button type="button" id="submit" name="submit" class="btn btn-white">Cancel</button>
												<button type="button" id="submit" name="submit" class="btn btn-primary">Submit Form</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    
					<!--<div class="row gutters">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        
							<div class="card h-400">
								<div class="card-body">
									<div class="col-12">
                                    <div class="row">
                                    <div class="col-6">
                                    <img src="../foto/user/<?php echo $row_inst['photo']; ?>" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="col-6">
                                    <h5 class="mt-0 media-heading"><?php echo $row_inst['first_name']; ?> <?php echo $row_inst['last_name']; ?></h5>
                                    <br>
                                    
                                    <h5>Quote:</h5>
											<p class="m-0">Mensana in corporesano</p>
                                            <br>
                                            
                                    <h5>Overview:</h5>
											<p class="m-0">The grid right now is being handled by the Bootstrap grid system. You can get as many rows as you want, but as far as columns you are limited to what Bootstrap's framework can offer.</p></div>
                                    </div>
                                    </div>
                                    
                                    <a href="#">
									<i class="icon-edit1 float-right" style="size:30px;"></i>
									
								</a>
								</div>
                                
							</div>
                        

                            
						</div>

                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-400">
								<div class="card-header">
									<div class="card-title">Data</div>
								</div>
								<div class="card-body">
                                <div class="customScroll5">
									<ul class="list-group">
										<li class="list-group-item d-flex justify-content-between align-items-center">
											First Name:
											<h6><?php echo $row_inst['first_name']; ?></h6>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Last Name:
											<h6><?php echo $row_inst['last_name']; ?></h6>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Contry:
											<h6>Zuairia Zaman</h6>
										</li>
                                        
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
											States:
											<h6>Zuairia Zaman</h6>
										</li>
                                        
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
											City:
											<h6>Zuairia Zaman</h6>
										</li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
											Zip Code:
											<h6>Zuairia Zaman</h6>
										</li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
											Street:
											<h6>Zuairia Zaman</h6>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center">
											Phone:
											<span class="badge badge-secondary badge-pill">Success</span>
										</li>
									</ul>
                                    </div>
                                    
                                    <a href="#">
									<i class="icon-edit1 float-right" style="size:30px;"></i>
									
								</a>
								</div>
                                
							</div>
						</div>
					</div>-->
                    <br>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        
							<!--<div class="card h-340">
								<div class="card-header">
									<div class="card-title">Class Type</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="statistics">
											<?php
										
									/*$select_stmt_type=$db->prepare("SELECT * FROM type_class WHERE kd_instructor='$row_inst[kd_instructor]' AND aktif='1'");	//sql select query
									$select_stmt_type->execute();
									while($row_type=$select_stmt_type->fetch(PDO::FETCH_ASSOC))
									{*/
									?>
											<li>
												<span class="stat-icon">
													<i class="icon-star"></i>
												</span>
												<?php //echo $row_type['type']; ?>
											</li>
                                            <?php //} ?>
											
										</ul>
									</div>
                                    <a href="#">
									<i class="icon-edit1 float-right" style="size:30px;"></i>
									
								</a>
								</div>
							</div>-->
                            
                            
                        
                        
                            
							<!--<div class="card h-310">
								<div class="card-header">
									<div class="card-title">Certificates</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="recent-orders">
                                        <?php
										
									/*$select_stmt_sert=$db->prepare("SELECT * FROM instructor_sertifikat  WHERE kd_instructor='$row_inst[kd_instructor]' AND aktif='1'");	//sql select query
									$select_stmt_sert->execute();
									while($row_sert=$select_stmt_sert->fetch(PDO::FETCH_ASSOC))
									{*/
									?>
                                    
											<li>
												<div class="order-img">
													<img src="img/orders/order5.png" alt="Food">
													<span class="badge badge-success">Delivered</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">The Original Cake</h5>
													<p class="order-desc">Wedding cake with macarons.</p>
													<span class="order-date">21 mins ago</span>
												</div>
											</li>
                                            <?php //} ?>
											<li>
												<div class="order-img">
													<img src="img/orders/order6.png" alt="Food">
													<span class="badge badge-danger">On Hold</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">Classic Sandwich</h5>
													<p class="order-desc">Creamy Sandwich with pie.</p>
													<span class="order-date">32 mins ago</span>
												</div>
											</li>
											<li>
												<div class="order-img">
													<img src="img/orders/order3.png" alt="Food">
													<span class="badge badge-danger">On Hold</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">Strawberry Pecan</h5>
													<p class="order-desc">Homemade cheese Pecan with berries.</p>
													<span class="order-date">15 mins ago</span>
												</div>
											</li>
											<li>
												<div class="order-img">
													<img src="img/orders/order1.png" alt="Food">
													<span class="badge badge-info">Processing</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">Double Stacker</h5>
													<p class="order-desc">Homemade cheese cake with berries.</p>
													<span class="order-date">10 mins ago</span>
												</div>
											</li>
											<li>
												<div class="order-img">
													<img src="img/orders/order4.png" alt="Food">
													<span class="badge badge-success">Delivered</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">Veggie Burger</h5>
													<p class="order-desc">Homemade cheese cake with berries.</p>
													<span class="order-date">17 mins ago</span>
												</div>
											</li>
											<li>
												<div class="order-img">
													<img src="img/orders/order2.png" alt="Food">
													<span class="badge badge-danger">On Hold</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">Teriyaki Cheese Balls</h5>
													<p class="order-desc">Chocolate cake with mascarpone.</p>
													<span class="order-date">12 mins ago</span>
												</div>
											</li>
										</ul>
									</div>
                                    <a href="#">
									<i class="icon-edit1 float-right" style="size:30px;"></i>
									
								</a>
								</div>
							</div>-->
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <!--<div class="card h-340">
								<div class="card-header">
									<div class="card-title">Sub Class Type</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="statistics">
											<?php
										
									/*$select_stmt_types=$db->prepare("SELECT * FROM type_class_sub WHERE kd_instructor='$row_inst[kd_instructor]' AND aktif='1'");	//sql select query
									$select_stmt_types->execute();
									while($row_types=$select_stmt_types->fetch(PDO::FETCH_ASSOC))
									{*/
									?>
											<li>
												<span class="stat-icon">
													<i class="icon-star"></i>
												</span>
												<?php //echo $row_types['sub_class_name']; ?>
											</li>
                                            <?php //} ?>
											
										</ul>
									</div>
                                    <a href="#">
									<i class="icon-edit1 float-right"></i>
									
								</a>
								</div>
							</div>-->
                            
							<!--<div class="card h-340">
								<div class="card-header">
									<div class="card-title">Experience</div>
								</div>
								<div class="card-body">
									<div class="projectLog">
										<div class="logs-container">
											<div class="logs-body">
                                            
                                            
												<?php
										
									/*$select_stmt_ex=$db->prepare("SELECT * FROM instructor_experience WHERE kd_instructor='$row_inst[kd_instructor]' AND aktif='1'");	//sql select query
									$select_stmt_ex->execute();
									while($row_ex=$select_stmt_ex->fetch(PDO::FETCH_ASSOC))
									{*/
									?>
                                    <div class="log-list">
													<i class="icon-check_circle text-danger"></i>
													<div class="log-info">
														<div class="log-title">Product Delivered</div>
														<div class="log-message">Interactive dashboard design</div>
														<div class="log-user">By: <span class="name">Zuairia</span> - On<span class="dt">10/10/2019</span> </div>
													</div>
												</div>
                                                <?php //} ?>
												<div class="log-list">
													<i class="icon-warning1 text-danger"></i>
													<div class="log-info">
														<div class="log-title">Issues fixed</div>
														<div class="log-message">4 high risk tasks overdue</div>
														<div class="log-user">By: <span class="name">Zyan</span> - On<span class="dt">10/15/2019</span> </div>
													</div>
												</div>
                                                
												<div class="log-list">
													<i class="icon-calendar text-danger"></i>
													<div class="log-info">
														<div class="log-title">Team Meeting</div>
														<div class="log-message">Discuss on status update</div>
														<div class="log-user">By: <span class="name">Lewis</span> - On<span class="dt">10/18/2019</span> </div>
													</div>
												</div>
												<div class="log-list">
													<i class="icon-message-circle text-info"></i>
													<div class="log-info">
														<div class="log-title">New Comment</div>
														<div class="log-message">Currently 7% over target budget</div>
														<div class="log-user">By: <span class="name">Sayed</span> - On<span class="dt">10/12/2019</span> </div>
													</div>
												</div>
											</div>										
										</div>
									</div>
                                    <a href="#">
									<i class="icon-edit1 float-right"></i></a>
								</div>
                                
									
								
							</div>-->
                            
						</div>
						<!--<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Photos</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="photo-gallery">
											<div class="row gutters">
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img1.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img2.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img3.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img4.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
													<img src="img/img5.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
													<img src="img/img6.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
													<img src="img/img7.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img8.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img9.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img10.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img11.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img12.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/img7.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
													<img src="img/img8.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
													<img src="img/img3.jpg" class="img-fluid" alt="Le Rouge Dashboard">
												</div>
											</div>
										</div>
                                        <a href="#">
									<i class="icon-edit1 float-right" style="size:30px;"></i>
									
								</a>
									</div>
								</div>
							</div>
						</div>-->
					</div>
					<!-- Row end -->

					<!-- Row start -->
					
					<!-- Row end -->

					<!-- Row start -->
					<!--<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Projects</div>
								</div>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table projects-table">
											<thead>
												<tr>
													<th>Client</th>
													<th>Location</th>
													<th>Budjet</th>
													<th>Progress</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>												
												<tr>
													<td>
														<div class="project-details">
															<img src="img/user6.png" class="avatar" alt="Le Rouge Admin">
															<div class="project-info">
																<p>Valda Purdy</p>
																<p>Ecommerce Store</p>
															</div>
														</div>
													</td>										
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>California, LA</p>
																<p>USA</p>
															</div>
														</div>														
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>$65,820</p>
																<p>$31,000 Paid</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>30% completed</p>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<div class="status approved">
																	<i class="icon-check_circle"></i> Completed
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="project-details">
															<img src="img/user22.png" class="avatar" alt="Le Rouge Admin">
															<div class="project-info">
																<p>Désirée Nosbusch</p>
																<p>Television presenter</p>
															</div>
														</div>
													</td>										
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>Luxembourg</p>
																<p>Europe</p>
															</div>
														</div>														
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>$86,409</p>
																<p>$72,000 Paid</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>45% completed</p>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<div class="status pending">
																	<i class="icon-info1"></i> Ongoing
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="project-details">
															<img src="img/user5.png" class="avatar" alt="Le Rouge Admin">
															<div class="project-info">
																<p>Ichiro Suzuki</p>
																<p>Baseball outfielder</p>
															</div>
														</div>
													</td>										
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>Nagoya</p>
																<p>Japan</p>
															</div>
														</div>														
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>$92,498</p>
																<p>$56,000 Paid</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>75% completed</p>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<div class="status rejected">
																	<i class="icon-circle-with-cross"></i> Cancelled
																</div>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>-->
					<!-- Row end -->

