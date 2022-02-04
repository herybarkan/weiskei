<?php
ob_start();
session_start();

require_once 'Connections/con.php';

if ($_SESSION['wk_grup']=="1") {
$select_stmt_inst=$db->prepare("SELECT * FROM user_ WHERE kd_user='$_SESSION[wk_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

/*$stsx="Super Admin";
}
elseif ($_SESSION['wk_grup']=="2") {
$select_stmt_inst=$db->prepare("SELECT * FROM staff WHERE kd_staff='$_SESSION[wk_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);*/

/*$stsx="Staff";
}
elseif ($_SESSION['wk_grup']=="3") {
$select_stmt_inst=$db->prepare("SELECT * FROM instructor WHERE kd_instructor='$_SESSION[wk_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Instructor";
}
elseif ($_SESSION['wk_grup']=="4") {
$select_stmt_inst=$db->prepare("SELECT * FROM member WHERE kd_member='$_SESSION[wk_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Member";*/
}

?>
<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="index.php#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="index.php#">
							<i class="icon-list"></i>
						</a>
					</div>
					<div class="header-items">
						<!-- Custom search start -->
						<!--<div class="custom-search">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>-->
						<!-- Custom search end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							<!--<li class="dropdown">
								<a href="index.php#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-box"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">-->
									<!--<div class="dropdown-menu-header">
										Tasks (05)
									</div>	-->
									<!--<ul class="header-tasks">
										<li>
											<p>#20 - Dashboard UI<span>90%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
													<span class="sr-only">90% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#35 - Alignment Fix<span>60%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
													<span class="sr-only">60% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#50 - Broken Button<span>40%</span></p>
											<div class="progress">
												<div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
													<span class="sr-only">40% Complete (success)</span>
												</div>
											</div>
										</li>
									</ul>-->
								<!--</div>
							</li>-->
							<!--<li class="dropdown">
								<a href="index.php#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-bell"></i>
									<span class="count-label">8</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Notifications (40)
									</div>
									<ul class="header-notifications">
										<li>
											<a href="index.php#">
												<div class="user-img away">
													<img src="img/user21.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Abbott</div>
													<div class="noti-details">Membership has been ended.</div>
													<div class="noti-date">Oct 20, 07:30 pm</div>
												</div>
											</a>
										</li>
										<li>
											<a href="index.php#">
												<div class="user-img busy">
													<img src="img/user10.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Braxten</div>
													<div class="noti-details">Approved new design.</div>
													<div class="noti-date">Oct 10, 12:00 am</div>
												</div>
											</a>
										</li>
										<li>
											<a href="index.php#">
												<div class="user-img online">
													<img src="img/user6.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Larkyn</div>
													<div class="noti-details">Check out every table in detail.</div>
													<div class="noti-date">Oct 15, 04:00 pm</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>-->
							<li class="dropdown">
								<a href="index.php#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name"><?php echo $row_inst['first_name']; ?> <?php echo $row_inst['last_name']; ?></span>
									<span class="avatar">
										<img src="../foto/user/<?php echo $row_inst['photo']; ?>" alt="avatar">
										<span class="status busy"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="../foto/user/<?php echo $row_inst['photo']; ?>" alt="foto">
											</div>
											<h5><?php echo $row_inst['first_name']; ?> <?php echo $row_inst['last_name']; ?></h5>
											<p><?php echo $stsx; ?></p>
										</div>
										<!--<a href="?com=myprofile"><i class="icon-user1"></i> My Profile</a>
										<a href="?com=settings"><i class="icon-settings1"></i> Account Settings</a>-->
										<a href="modul/login/logout.php"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</header>