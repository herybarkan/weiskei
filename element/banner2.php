<?php
require_once 'admin/Connections/con.php';

$rbanner=$db->prepare("SELECT * FROM banner_promo WHERE aktif='1'");
$rbanner->execute();
$row_rbanner=$rbanner->fetch(PDO::FETCH_ASSOC);
?>
<div class="container" style="margin-top:10%; width:100%;">
        <div class="banner-product">
            <a href="index3.html#"><img src="imager/banner/<?php echo $row_rbanner['image']; ?>" alt="" style="width:100%;"></a>
        </div>
    </div>