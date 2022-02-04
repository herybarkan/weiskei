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
								<a href="../index.php?com=bprofile&kd_inst=<?php echo $_SESSION['yo_kd_user']; ?>">
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
							--><!--<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-toggle-right"></i>
									<span class="menu-text">Order</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="?com=new_order">New Order</a>
										</li>
										<li>
											<a href="?com=on_going">On Going</a>
										</li>
										<li>
											<a href="?com=completed">Completed</a>
										</li>
                                        <li>
											<a href="?com=completed">Canceled</a>
										</li>
										
									</ul>
								</div>
							</li>-->
                            <li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-star2"></i>
									<span class="menu-text">Booking</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										
										<li>
											<a href="?com=my_order_inst_pending">New Booking</a>
										</li>
                                        
                                        <!--<li>
											<a href="?com=my_order_inst_pending">Accepted Booking</a>
										</li>-->
                                        
                                        <li>
											<a href="?com=my_order_inst_onprogress">Accepted Booking</a>
										</li>
                                        
                                        <li>
											<a href="?com=my_order_inst">Completed</a>
										</li>
                                        <li>
											<a href="?com=my_order_inst_reject">Rejected</a>
										</li>
										<!--<li>
											<a href="?com=notiffication">Notification</a>
										</li>-->
										
									</ul>
								</div>
							</li>
                            
							
                            <!--<li>
								<a href="?com=market_insight">
									<i class="icon-line-graph"></i>
									<span class="menu-text">Market Insight</span>
								</a>
							</li>-->
							<!--<li>
								<a href="?com=rating_review">
									<i class="icon-star2"></i>
									<span class="menu-text">Ratings & Reviews </span>
								</a>
							</li>-->
                            <!--<li>
								<a href="?com=business_profile">
									<i class="icon-star2"></i>
									<span class="menu-text">My Profile </span>
								</a>
							</li>-->
							<!--<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-edit1"></i>
									<span class="menu-text">Manage</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="?com=business_profile">Business Profile</a>
										</li>
										<li>
											<a href="?com=schedule_inst">Schedule</a>
										</li>
										<li>
											<a href="?com=classes">Classes</a>
										</li>
										<li>
											<a href="?com=packages">Packages</a>
										</li>
									</ul>
								</div>
							</li>-->
							<li>
								<a href="?com=receipt_payment">
									<i class="icon-box"></i>
									<span class="menu-text">Invoices</span>
								</a>
								
							</li>
                            
                            
                            
                            <li>
								<a href="?com=schedule_inst">
									<i class="icon-toggle-right"></i>
									<span class="menu-text">Schedule</span>
								</a>
								
							</li>
                            <li>
								<a href="?com=my_account">
									<i class="icon-cog"></i>
									<span class="menu-text">Setting</span>
								</a>
								
							</li>
                            
                            
                           
							

						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>