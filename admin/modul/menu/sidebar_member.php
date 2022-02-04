<?php
ob_start();
session_start();
?>
<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<li class="header-menu">MENU</li>
							<!--<li class="sidebar-dropdown active">-->
                            <li>
								<a href="../index.php?com=mprofile&kd_mem=<?php echo $_SESSION['yo_kd_user']; ?>">
									<i class="icon-home"></i>
									<span class="menu-text">Profile Page</span>
								</a>
								
							</li>
                            
                            <li>
								<a href="index.php">
									<i class="icon-devices_other"></i>
									<span class="menu-text">Dashboards</span>
								</a>
								
							</li>
							<!--<li>
								<a href="chat.html">
									<i class="icon-message-circle"></i>
									<span class="menu-text">Chat</span>
								</a>
							</li>
							--><li >
								<a href="?com=member_order">
									<i class="icon-calendar1"></i>
									<span class="menu-text">My Orders</span>
								</a>
								
							</li>
							
							
							
							<!--<li>
								<a href="?com=support_contact">
									<i class="icon-box"></i>
									<span class="menu-text">Supports</span>
								</a>
								
							</li>-->
                            
                            <li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-toggle-right"></i>
									<span class="menu-text">Setting</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="?com=account">Account</a>
										</li>
										<li>
											<a href="?com=setting">Settings</a>
										</li>
										<!--<li>
											<a href="?com=notiffication">Notification</a>
										</li>-->
										
									</ul>
								</div>
							</li>
                            
                            
                            
                            
							

						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>