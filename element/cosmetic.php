<?php
require_once 'admin/Connections/con.php';

$rcontent=$db->prepare("SELECT * FROM content WHERE aktif='1'");
$rcontent->execute();
$row_rcontent=$rcontent->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
        <div class="row cosmetic">
            <div class="col-md-6 bg-cosmetic">
                <img src="imager/home/<?php echo $row_rcontent['image']; ?>" alt="">
            </div>
            <div class="col-md-6">
                <div class="inner-cosmetic">
                <?php echo $row_rcontent['isi']; ?>
                    <!--<h2>#Genuine Cosmetics</h2>
                    <h3>Customers Satisfaction</h3>
                    <h4>Organic cream</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <h4>Natural extracts</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <h4>Quality assurance</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>-->
                </div>
            </div>
        </div>
    </div>