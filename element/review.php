<?php
require_once 'admin/Connections/con.php';


?>

<div class="container-fluid" style="margin-bottom:100px;">
        <div class="row review-homepage" style=" background-image: url('imager/home/bg-review.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        ">
            <div class="container">
                <div class="row ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <?php
				$rproduct=$db->prepare("SELECT * FROM testimoni WHERE aktif='1'");
$rproduct->execute();
while($row=$rproduct->fetch(PDO::FETCH_ASSOC))
{
	?>
                            <div class="carousel-item <?php echo $row['sts']; ?>">
                                <div class="content-review-homepage">
                                        <img src="imager/home/<?php echo $row['image']; ?>" alt="">
                                    <h3 class="text-center"><?php echo $row['nm_user']; ?></h3>
                                    <p class="text-center">
                                    <?php
									if ($row['bintang']=="5") 
									{ ?>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <?php } elseif ($row['bintang']=="4") 
									{ ?>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <?php } elseif ($row['bintang']=="3") 
									{ ?>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <?php } elseif ($row['bintang']=="2") 
									{ ?>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <?php } elseif ($row['bintang']=="1") 
									{ ?>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <?php } ?>
									
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        <?php echo $row['isi_testi']; ?>
                                    </p>
                                </div>
                            </div>
                            
                            <?php } ?>
                            
                            <!--<div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="imager/home/patricsia2.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>-->
                            <!--<div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="imager/home/patricsia3.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>-->
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>