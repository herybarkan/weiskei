<?php
ob_start();
session_start();

require_once 'admin/Connections/con.php';
?>

<style>
@media all and (min-width: 1024px) {
	<?php
									$x1=1;
									$rslider1=$db->prepare("SELECT * FROM slider WHERE aktif='1'");
									$rslider1->execute();
									while($row_rslider1=$rslider1->fetch(PDO::FETCH_ASSOC))
									{
									?>	
  	.img_slider<?php echo $x1; ?> 
  	{
    	background-image:url('imager/slider/<?php echo $row_rslider1['bg_desktop']; ?>');
	} 
 <?php $x1+=1; } ?>
	/*.img_slider2 
  	{
    	background-image:url('imager/slider/slider2a.jpg');
	} 
	.img_slider3 
  	{
    	background-image:url('imager/slider/slider3a.jpg');
	} */
}
@media all and (min-width: 768px) and (max-width: 1023px) 
{
	<?php
									$x2=1;
									$rslider2=$db->prepare("SELECT * FROM slider WHERE aktif='1'");
									$rslider2->execute();
									while($row_rslider2=$rslider2->fetch(PDO::FETCH_ASSOC))
									{
									?>	
	.img_slider<?php echo $x2; ?>  
  	{
    	background-image:url('imager/slider/<?php echo $row_rslider2['bg_desktop']; ?>');
	} 
<?php $x2+=1; } ?>
	/*.img_slider2 
  	{
    	background-image:url('imager/slider/slider2a.jpg');
	} 
	.img_slider3 
  	{
    	background-image:url('imager/slider/slider3a.jpg');
	} */
}
@media all and (max-width: 767px) and (min-width: 361px) 
{
	<?php
									$x3=1;
									$rslider3=$db->prepare("SELECT * FROM slider WHERE aktif='1'");
									$rslider3->execute();
									while($row_rslider3=$rslider3->fetch(PDO::FETCH_ASSOC))
									{
									?>	
	.img_slider<?php echo $x3; ?>   
  	{
    	background-image:url('imager/slider/<?php echo $row_rslider3['bg_mobile']; ?>');
	} 
<?php $x3+=1; } ?>
	/*.img_slider2 
  	{
    	background-image:url('imager/slider/slider_kecil2.jpg');
	} 
	.img_slider3 
  	{
    	background-image:url('imager/slider/slider_kecil3.jpg');
	} */
}
</style>

<div class="slider-homepage1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            
            <?php
									$x=1;
									$rslider=$db->prepare("SELECT * FROM slider WHERE aktif='1'");
									$rslider->execute();
									while($row_rslider=$rslider->fetch(PDO::FETCH_ASSOC))
									{
									?>	
                <div class="carousel-item <?php echo $row_rslider['sts']; ?>">
                    <div class="slide-homepage img_slider<?php echo $x; ?>" >
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-6 col-sm-8 col-8 content-slide">
                                <?php if ($row_rslider['aktif_text']=="1") { ?>
                                   <h2><?php echo $row_rslider['text1']; ?></h2>
                                    <p><?php echo $row_rslider['text2']; ?></p>
                                <?php } else { ?>
                                	<h2><!--Skin <br/> Anti-aging-->&nbsp;<br>&nbsp;</h2>
                                    <p><!--GENTLE FOR WINTER-->&nbsp;</p>
                                    <!--<a href="product-list.html">shop now</a>-->
                                
                                <?php } ?>
                                    <!--<a href="product-list.html">shop now</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php $x+=1; } ?>
                
            </div>
        </div>
        <!--<div class="control-slider-homepage1">
            <a class="carousel-control-prev" href="index.php#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon">  <span class="lnr lnr-chevron-left"></span>  </span>
            </a>
            <a class="carousel-control-next" href="index.php#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon"> <span class="lnr lnr-chevron-right"></span> </span>
            </a>
        </div>-->
    </div>