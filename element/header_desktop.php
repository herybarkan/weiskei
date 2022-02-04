<div class="header">
    <div class="container-fluid search-header">
        <form>
            <input type="text" placeholder="Search">
            <span class="close-search">X</span>
        </form>
    </div>
    <div class="container-fluid">
        <div class="header-desktop ">
            <div class=" header-menu-desktop d-flex justify-content-between">
                <div>
                    <div class="logo">
                        <a href="index.php"><img src="imager/home/Logo.png" alt=""></a>
                    </div>
                </div>
                <div>
                    <div class="menu">
                    <?php
					$aktif="class=\"menu-active\"";
					?>
                        <ul>
                            <li><a href="index.php" <?php if ($_GET['com']=="") {echo $aktif;} ?>>home</a>
                                <!--<ul>
                                    <li><a href="index.php">Home Page_v1</a></li>
                                    <li><a href="index2.html">Home Page_v2</a></li>
                                    <li><a href="index3.html">Home Page_v3</a></li>
                                </ul>-->
                            </li>
                            <li><a href="?com=new_arrivals" <?php if ($_GET['com']=="new_arrivals") {echo $aktif;} ?>>New Arrivals</a>
                                <!--<ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="what-we-offer.html">What We Offer</a></li>
                                    <li><a href="our-team.html">Our Team</a></li>
                                    <li><a href="comming-soon.html">Comming Soon</a></li>
                                    <li><a href="error-page.html">Error Page</a></li>
                                </ul>-->
                            </li>
                            <li><a href="#" <?php if ($_GET['com']=="product") {echo $aktif;} ?>>Product</a>
                                <ul>
                                    <li><a href="?com=product&item=serums">Serums</a></li>
                                    <li><a href="?com=product&item=essence_toner">Essense Toner</a></li>
                                    <li><a href="?com=product&item=moisturizer">Moisturizer</a></li>
                                    <!--<li><a href="cart.html">About Us</a><span class="lnr lnr-chevron-right"></span>
                                        <ul>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wish List</a></li>
                                            <li><a href="checkout.html">Check Out</a></li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </li>
                            <!--<li><a href="blog-single.html">blog</a>
                                <ul>
                                    <li><a href="blog-masonry.html">Masonry</a></li>
                                    <li><a href="blog-standard-right-siderbar.html">Standard</a><span
                                            class="lnr lnr-chevron-right"></span>
                                        <ul>
                                            <li><a href="blog-standard-right-siderbar.html">Right Sidebar</a></li>
                                            <li><a href="blog-standard-left-siderbar.html">Left Sidebar</a></li>
                                            <li><a href="blog-standard-no-sliderbar.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-single.html">Single</a></li>
                                </ul>
                            </li>-->
                             <li><a href="?com=about_us" <?php if ($_GET['com']=="about_us") {echo $aktif;} ?>>About Us</a></li>
                            <li><a href="?com=contact" <?php if ($_GET['com']=="contact") {echo $aktif;} ?>>contact</a></li>
                        </ul>
                    </div>
                </div>
                <!--<div>
                    <div class="header-right">
                        <ul class="list-inline">
                            <li><a href="index.php#" class="cart-index">
                                <img src="imager/home/bag-2.png" alt=""
                                     style="width: 16px;height: 22px;margin-top: -10px;">
                                <div class="number-cart">
                                    2
                                </div>
                            </a>
                                <div class="widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                <a class="product-image" href="index.php#">
                                                    <img src="imager/home/cart-home1.jpg" alt="cart-1">
                                                </a>
                                                <a class="product-title" href="index.php#">Skin recreation</a>

                                                <span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>
														56
                                                </span>
                                                <span class="quantity">
													Qty: 1
												</span>
                                                <a href="index.php#" class="remove">
                                                    <span class="lnr lnr-cross"></span>
                                                </a>
                                            </li>
                                            <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                <a class="product-image" href="index.php#">
                                                    <img src="imager/home/cart-home2.jpg" alt="cart-2">
                                                </a>
                                                <a class="product-title" href="index.php#">Face cream</a>

                                                <span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>
														48
													</span>
                                                <span class="quantity">
													Qty: 2
												</span>
                                                <a href="index.php#" class="remove">
                                                    <span class="lnr lnr-cross"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="woocommerce-mini-cart__total total">
                                            <span>Order Total:</span>
                                            <span class="woocommerce-Price-amount amount">
												<span class="woocommerce-Price-currencySymbol">$</span>
												200
											</span>
                                        </p>
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="index.php#" class="button wc-forward au-btn btn-small">VIEW CART &
                                                CHECKOUT</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="search-header1"><img src="imager/home/search-header.png" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a>
                            </li>
                            <li><a href="javascript:void(0)" class="introduce1"><img
                                    src="imager/home/control-introduce.png" alt=""
                                    style="width: 16px;height: 16px;margin-top: -10px;"></a>
                            </li>
                        </ul>

                    </div>
                </div>-->
                <!--<div class="introduce">
                    <div class="content-introduce">
                        <h3>follow instagram</h3>
                        <p>@Ura.cosmetic_beauty</p>
                        <div class="img-controduce">
                            <img src="imager/home/introduce.jpg" alt="">
                            <img src="imager/home/introduce1.jpg" alt="">
                            <img src="imager/home/introduce2.jpg" alt="">
                            <img src="imager/home/introduce3.jpg" alt="">
                            <img src="imager/home/introduce4.jpg" alt="">
                            <img src="imager/home/introduce5.jpg" alt="">
                        </div>
                        <h4>newsletter</h4>
                        <p>Subcribe to our newsletter</p>
                        <input type="text" placeholder="Email">
                        <button class="bt"><i class="fas fa-angle-right"></i></button>
                        <div class="icon-introduce">
                            <a href="" style="margin-left: 95px;"><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <span class="lnr lnr-cross close-introduce" ></span>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>