
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<!-- Modal start -->
							<div class="modal fade" id="addNewContact" tabindex="-1" role="dialog" aria-labelledby="addNewContactLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="addNewContactLabel">New Contact</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form class="row gutters">
												<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="upload-photo-container">
														<img src="img/user.png" class="user-thumb" alt="Upload" />
														<div class="form-group m-0">
															<div class="input-group">
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="uploadPhoto">
																	<label class="custom-file-label" for="uploadPhoto" aria-describedby="uploadPhotoAddon">../design/user.png</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
													<div class="form-group">
														<label for="contactName">Full Name:</label>
														<input type="text" class="form-control" id="contactName">
													</div>
													<div class="form-group">
														<label for="userEmail">Email:</label>
														<input type="email" class="form-control" id="userEmail">
													</div>
													<div class="form-group">
														<label for="company">Company:</label>
														<input type="text" class="form-control" id="company">
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
													<div class="form-group">
														<label for="nickName">Nick Name:</label>
														<input type="text" class="form-control" id="nickName">
													</div>
													<div class="form-group">
														<label for="phoneNumber">Phone Number:</label>
														<input type="text" class="form-control" id="phoneNumber">
													</div>
													<div class="form-group">
														<label for="birthday">Birthday:</label>
														<div class="custom-date-input">
															<input type="text" name="" class="form-control datepicker" id="birthday" placeholder="dd mm yyyy">
														</div>
													</div>
												</div>
												<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="form-group">
														<label for="addResss">Address:</label>
														<textarea class="form-control" id="addResss"></textarea>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer custom">
											<div class="left-side">
												<button type="button" class="btn btn-link danger btn-block" data-dismiss="modal">Cancel</button>
											</div>
											<div class="divider"></div>
											<div class="right-side">
												<button type="button" class="btn btn-link success btn-block">Save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Modal end -->

						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<!-- Edit Contact Modal -->
							<div class="modal fade" id="editContact" tabindex="-1" role="dialog" aria-labelledby="editContactLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="editContactLabel">Edit Contact</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form class="row gutters">
												<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="upload-photo-container">
														<img src="img/user.png" class="user-thumb" alt="Upload" />
														<div class="form-group m-0">
															<div class="input-group">
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="uploadPhoto">
																	<label class="custom-file-label" for="uploadPhoto" aria-describedby="uploadPhotoAddon">../design/user.png</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
													<div class="form-group">
														<label for="contactName">Full Name:</label>
														<input type="text" class="form-control" id="contactName" value="Aliko Catherine">
													</div>
													<div class="form-group">
														<label for="userEmail">Email:</label>
														<input type="email" class="form-control" id="userEmail" value="aliko.catherine@LeRouge.com">
													</div>
													<div class="form-group">
														<label for="company">Company:</label>
														<input type="text" class="form-control" id="company" value="Le Rouge">
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
													<div class="form-group">
														<label for="nickName">Nick Name:</label>
														<input type="text" class="form-control" id="nickName" value="Maxx">
													</div>
													<div class="form-group">
														<label for="phoneNumber">Phone Number:</label>
														<input type="text" class="form-control" id="phoneNumber" value="+2 300-332-7753">
													</div>
													<div class="form-group">
														<label for="birthday">Birthday:</label>
														<div class="custom-date-input">
															<input type="text" name="" class="form-control datepicker" id="birthday" placeholder="dd mm yyyy">
														</div>
													</div>
												</div>
												<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="form-group mb-0">
														<label for="addResss">Address:</label>
														<textarea class="form-control" id="addResss"></textarea>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer custom">
											<div class="left-side">
												<button type="button" class="btn btn-link danger btn-block" data-dismiss="modal">Cancel</button>
											</div>
											<div class="divider"></div>
											<div class="right-side">
												<button type="button" class="btn btn-link success btn-block">Save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user14.png" alt="Le Rouge Admin" class="profile">
									<h5>Ali Sayed</h5>
									<ul class="list-group">
										<li class="list-group-item">ali.sd@LeRouge.com</li>
										<li class="list-group-item">+2 300-223-4567</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user.png" alt="Le Rouge Admin" class="profile">
									<h5>Amy Hood</h5>
									<ul class="list-group">
										<li class="list-group-item">amy.hk@LeRouge.com</li>
										<li class="list-group-item">+2 300-678-6789</li>
									</ul>
								</figcaption>
							</figure>
						</div>						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user6.png" alt="Le Rouge Admin" class="profile">
									<h5>Den Klenkov</h5>
									<ul class="list-group">
										<li class="list-group-item">den.kv@LeRouge.com</li>
										<li class="list-group-item">+2 300-332-7753</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user22.png" alt="Le Rouge Admin" class="profile">
									<h5>Lily Jordan</h5>
									<ul class="list-group">
										<li class="list-group-item">lily.jd@LeRouge.com</li>
										<li class="list-group-item">+2 300-768-9809</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user9.png" alt="Le Rouge Admin" class="profile">
									<h5>Harry Brown</h5>
									<ul class="list-group">
										<li class="list-group-item">harry.bn@LeRouge.com</li>
										<li class="list-group-item">+2 300-678-8897</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user20.png" alt="Le Rouge Admin" class="profile">
									<h5>Haley Bridges</h5>
									<ul class="list-group">
										<li class="list-group-item">haley.bs@LeRouge.com</li>
										<li class="list-group-item">+2 300-234-3390</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user24.png" alt="Le Rouge Admin" class="profile">
									<h5>Meg Lewis</h5>
									<ul class="list-group">
										<li class="list-group-item">meg.lewis@LeRouge.com</li>
										<li class="list-group-item">+2 300-888-9999</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user18.png" alt="Le Rouge Admin" class="profile">
									<h5>Mohammed Chahin</h5>
									<ul class="list-group">
										<li class="list-group-item">mohammed.ch@LeRouge.com</li>
										<li class="list-group-item">+2 300-999-0000</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user12.png" alt="Le Rouge Admin" class="profile">
									<h5>Roberts Hernandez</h5>
									<ul class="list-group">
										<li class="list-group-item">robert.hrd@LeRouge.com</li>
										<li class="list-group-item">+2 300-345-5908</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user10.png" alt="Le Rouge Admin" class="profile">
									<h5>Sullivan Rodriguez</h5>
									<ul class="list-group">
										<li class="list-group-item">sullivan.rrg@LeRouge.com</li>
										<li class="list-group-item">+2 300-567-3569</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user17.png" alt="Le Rouge Admin" class="profile">
									<h5>Zhenya Rynzhuk</h5>
									<ul class="list-group">
										<li class="list-group-item">zhenya.ryn@LeRouge.com</li>
										<li class="list-group-item">+2 300-345-8790</li>
									</ul>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
							<figure class="user-card">
								<figcaption>
									<a href="contacts.html#" class="edit-card" data-toggle="modal" data-target="#editContact">
										<i class="icon-mode_edit"></i>
									</a>
									<img src="img/user21.png" alt="Le Rouge Admin" class="profile">
									<h5>Zuairia Zaman</h5>
									<ul class="list-group">
										<li class="list-group-item">zuairia.zn@LeRouge.com</li>
										<li class="list-group-item">+2 300-890-3456</li>
									</ul>
								</figcaption>
							</figure>
						</div>
					</div>
					<!-- Row end -->

		