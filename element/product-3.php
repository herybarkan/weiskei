<?php
require_once 'admin/Connections/con.php';


?>

<div class="container list-product">
    <div class="content-shop-3colum">
        <div class="row product">
        
        <?php
				$rproduct=$db->prepare("SELECT * FROM product WHERE aktif='1'");
$rproduct->execute();
while($row=$rproduct->fetch(PDO::FETCH_ASSOC))
{
	?>
            <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="card">
                
                
                    <div class="card-img-top">
                        <a href="product-single.html" class="wp-post-image">
                            <img class="image-cover" src="imager/product/<?php echo $row['image']; ?>" alt="product">
                        </a>
                        <!--<p class="onnew">New</p>-->
                        <div class="icon-product">
                            <button class="btn">
                                <span class="lnr lnr-lock"></span>
                            </button>
                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                <span class="lnr lnr-magnifier"></span>
                            </button>
                            <button class="btn">
                                <span class="lnr lnr-heart"></span>
                            </button>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="card-body">
                        <p class="card-title"><a href="product-list.html"><?php echo $row['type']; ?></a></p>
                        <p class="woocommerce-loop-product__title"><a href="#">
                            <?php echo $row['nm_product']; ?></a></p>
                        <span class="price">
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">Rp. </span><?php echo $row['harga']; ?>
                                </span>
                            </ins>
                        </span>
                    </div>
                </div>

            </div>
			<?php } ?>
            <!--<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-img-top">
                        <a href="product-single.html" class="wp-post-image">
                            <img class="image-cover" src="imager/product/product2.jpg" alt="product">
                        </a>
                        <p class="onsale">Sale</p>
                        <div class="icon-product">
                            <button class="btn">
                                <span class="lnr lnr-lock"></span>
                            </button>
                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                <span class="lnr lnr-magnifier"></span>
                            </button>
                            <button class="btn">
                                <span class="lnr lnr-heart"></span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><a href="product-list.html">Spa</a></p>
                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                            Night cream</a></p>
                        <span class="price">
                            <del>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>45
                                </span>
                            </del>
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>38
                                </span>
                            </ins>
                        </span>
                    </div>
                </div>
            </div>-->
            <!--<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-img-top">
                        <a href="product-single.html" class="wp-post-image">
                            <img class="image-cover" src="imager/shop/Shop_3Columns-1.jpg" alt="product">
                        </a>
                        <div class="icon-product">
                            <button class="btn">
                                <span class="lnr lnr-lock"></span>
                            </button>
                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                <span class="lnr lnr-magnifier"></span>
                            </button>
                            <button class="btn">
                                <span class="lnr lnr-heart"></span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><a href="product-list.html">Make up</a></p>
                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                            Cleanser layde</a></p>
                        <span class="price">
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>56
                                </span>
                            </ins>
                        </span>
                    </div>
                </div>
            </div>-->
            
            
            
            
            
            
            <!--<ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="shop-3-colum.html#">1</a></li>
                <li class="page-item"><a class="page-link" href="shop-3-colum.html#">2</a></li>
                <li class="page-item"><a class="page-link" href="shop-3-colum.html#"> &gt; </a></li>
            </ul>-->
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content container">
                    <div class="product-single-quick-view">
                        <div class="row product_detail">
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="flex-quick-view">
                                    <div id="flex-slider" class="flexslider">
                                        
                                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                            <li class="flex-active-slide" style="width: 514px; margin-right: 0px; float: left; display: block;">
                                                <img src="imager/product-detail/product_detail.jpg" alt="" draggable="false">
                                            </li>
                                            <li style="width: 514px; margin-right: 0px; float: left; display: block;">
                                                <img src="imager/product-detail/product_detail.jpg" alt="" draggable="false">
                                            </li>
                                            <li style="width: 514px; margin-right: 0px; float: left; display: block;">
                                                <img src="imager/product-detail/product_detail.jpg" alt="" draggable="false">
                                            </li>
                                            <li style="width: 514px; margin-right: 0px; float: left; display: block;">
                                                <img src="imager/product-detail/product_detail.jpg" alt="" draggable="false">
                                            </li>
                                            <!-- items mirrored twice, total of 12 -->
                                        </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
                                    <div id="flex-carousel" class="flexslider">
                                        
                                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                            <li class="flex-active-slide" style="width: 114px; margin-right: 20px; float: left; display: block;">
                                                <img src="imager/product-detail/product_detail1.jpg" alt="" draggable="false">
                                            </li>
                                            <li style="width: 114px; margin-right: 20px; float: left; display: block;">
                                                <img src="imager/product-detail/product_detail2.jpg" alt="" draggable="false">
                                            </li>
                                            <li style="width: 114px; margin-right: 20px; float: left; display: block;">
                                                <img src="imager/product-detail/product_detail3.jpg" alt="" draggable="false">
                                            </li>
                                            <li style="width: 114px; margin-right: 20px; float: left; display: block;">
                                                <img src="imager/product-detail/product_detail4.jpg" alt="" draggable="false">
                                            </li>
                                            <!-- items mirrored twice, total of 12 -->
                                        </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12 content-product">
                                <h2>Whitening cream | $65</h2>
                                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> &nbsp; (2 customer
                                    review)</p>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.
                                    It has survived not only five centuries, but also the leap into electronic </p>
                                <div class="infor-product">
                                    <p><span>Sku: </span>22</p>
                                    <p><span>Category: </span>Cosmetic</p>
                                    <p><span>Tag: </span>Trendy</p>
                                    <p><span>Share: </span>
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a></p>
                                </div>
                                <div>
                                    <div class="btn-group">
                                        <button type="button" class="prev btn ">-</button>
                                        <button type="button" class="show-number btn ">1</button>
                                        <button type="button" class="next btn ">+</button>
                                    </div>
                                    <div class="btn-group">
                                        <a href="shop-3-colum.html#" class="btn add-to-cart">ADD TO CART<p><i class="fas fa-cart-plus"></i></p> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="lnr lnr-cross close-quick-view" data-dismiss="modal"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>