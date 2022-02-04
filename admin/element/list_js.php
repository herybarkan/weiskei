<?php
ob_start();
session_start();

require_once '../Connections/con.php';

$year=date('Y');

?>
		<!-- Page wrapper end -->

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

		<!-- Polyfill JS -->
		<script src="vendor/polyfill/polyfill.min.js"></script>
        
        <?php
		//
		if ($_GET['com']=="") { ?>

		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		<!--<script src="vendor/apex/admin/visitors.js"></script>-->
        <!--<script src="modul/dashboard/engadment.php"></script>-->
		<script src="vendor/apex/admin/deals.js"></script>
		<script src="vendor/apex/admin/income.js"></script>
		<script src="vendor/apex/admin/customers.js"></script>
        
        <!-- Apex Charts -->
		<script src="vendor/apex/sales/mixed-line-column.js"></script>
		<script src="vendor/apex/sales/column-visitors.js"></script>
        <?php } ?>
        
        <!-- Data Tables -->
		<script src="vendor/datatables/dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>
        
        <!-- Custom Data tables -->
		<script src="vendor/datatables/custom/custom-datatables.js"></script>
		<script src="vendor/datatables/custom/fixedHeader.js"></script>

		<!-- Download / CSV / Copy / Print -->
		<script src="vendor/datatables/buttons.min.js"></script>
		<script src="vendor/datatables/jszip.min.js"></script>
		<script src="vendor/datatables/pdfmake.min.js"></script>
		<script src="vendor/datatables/vfs_fonts.js"></script>
		<script src="vendor/datatables/html5.min.js"></script>
		<script src="vendor/datatables/buttons.print.min.js"></script>
        
        <script src="vendor/summernote/summernote-bs4.js"></script>


		<!-- Main JS -->
		<script src="js/main.js"></script>
        
        <script>
		 $("#add_session").click(function()
         {
             //alert('tambah attach');
			 
		$("#dsession").append("<div class=\"row\"><div class=\"col-6\"><div class=\"form-group\"><label for=\"inputName\">Time Start</label><input name=\"jam_start[]\" type=\"time\" class=\"form-control\" id=\"jam_start[]\"></div></div><div class=\"col-6\"><div class=\"form-group\"><label for=\"inputName\">Time End</label><input name=\"jam_end[]\" type=\"time\" class=\"form-control\" id=\"jam_end[]\"></div></div></div>");
		 })
		</script>
        
        
        
        
<script>
$(document).ready(function(){
	$("body").on("click", ".openPopup", function(event){ 
   // $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#basicModal').modal({show:true});
        });
    }); 
});
</script>

<script>
$(document).ready(function(){
	$("body").on("click", ".openPopupLG", function(event){ 
    //$('.openPopupLG').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#bd-example-modal-lg').modal({show:true});
        });
    }); 
});
</script>

<script>
$(document).ready(function(){
	$("body").on("click", ".openPopupXL", function(event){ 
    //$('.openPopupXL').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#bd-example-modal-xl').modal({show:true});
			$('.summernote').summernote({
					height: 570,
					tabsize: 2
				});
        });
    }); 
});
</script>

<script>
$(document).ready(function(){    
 $("body").on("click", ".userinfo", function(event){ 
  var userid = $(this).data('id');
    $.ajax({
      url: 'inc/edit_staff_modal.php',
      type: 'post',
      data: {userid: userid},
        success: function(response){ 
         $('.mod').html(response);
            $('#empModal').modal('show'); 
        }
    });
 });
});
</script>

<script>
			$(document).ready(function() {
				$('.summernote').summernote({
					height: 170,
					tabsize: 2
				});
			});
		</script>
        
<script>
var options = {
  chart: {
    height: 280,
    type: 'bar',
    stacked: true,
    toolbar: {
      show: false
    },
    zoom: {
      enabled: true
    }
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '30%',
    },
  },
  dataLabels: {
    enabled: true
  },
  series: [{
    name: 'Visitor',
    data: [
	<?php
	$sbul1=$db->prepare("SELECT * FROM bulan");
	$sbul1->execute();
	while($row_sbul1=$sbul1->fetch(PDO::FETCH_ASSOC))
		{
			$select_visit=$db->prepare("SELECT COUNT(id_) AS jml_visit FROM tbl_visit WHERE MONTH(tgl)='$row_sbul1[kd_bln]' AND YEAR(tgl)='$year' GROUP BY ip_address");
   			$select_visit->execute();
   			$row_visit=$select_visit->fetch(PDO::FETCH_ASSOC);
			$row_cv1 = $select_visit->rowCount(); 
			
			echo $row_cv1.",";
		}
	?>
	//46, 55, 41, 67, 22, 43, 21, 33, 49, 15, 26, 55
	
	]
  },{
    name: 'Like',
    data: [
	<?php
	$sbul2=$db->prepare("SELECT * FROM bulan");
	$sbul2->execute();
	while($row_sbul2=$sbul2->fetch(PDO::FETCH_ASSOC))
		{
			$select_like=$db->prepare("SELECT COUNT(id_) AS jml_like FROM tbl_like WHERE MONTH(tgl)='$row_sbul2[kd_bln]' AND YEAR(tgl)='$year'");
   			$select_like->execute();
   			$row_like=$select_like->fetch(PDO::FETCH_ASSOC);
			
			
			echo $row_like['jml_like'].",";
		}
	?>
	//13, 23, 20, 8, 13, 27, 36, 22, 54, 28, 31, 26
	]
  },{
    name: 'Share',
    data: [
	<?php
	$sbul3=$db->prepare("SELECT * FROM bulan");
	$sbul3->execute();
	while($row_sbul3=$sbul3->fetch(PDO::FETCH_ASSOC))
		{
			$select_share=$db->prepare("SELECT COUNT(id_) AS jml_share FROM tbl_share WHERE MONTH(tgl)='$row_sbul3[kd_bln]' AND YEAR(tgl)='$year'");
   			$select_share->execute();
   			$row_share=$select_share->fetch(PDO::FETCH_ASSOC);
			
			$xshare=$row_share['jml_share']/2; 
			$zshare=round($xshare,0);
			echo $zshare.",";
		}
	?>
	//13, 23, 20, 8, 13, 27, 36, 22, 54, 28, 31, 26
	]
  }],
  xaxis: {
    type: 'month',
    categories: [
	<?php
	$sbul=$db->prepare("SELECT * FROM bulan"); //sql select query
$sbul->execute();
while($row_sbul=$sbul->fetch(PDO::FETCH_ASSOC))
									{
										echo "'".$row_sbul['bln_en']."',";
									}
	?>
	
	/*'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'*/
	
	],
  },
  legend: {
    offsetY: -7
  },
  fill: {
    opacity: 1
  },
  colors: ['#FCE629', '#999999', '#f2b809'],
  tooltip: {
    y: {
      formatter: function(val) {
        return  "" + val + ""
      }
    }
  },
}
var chart = new ApexCharts(
  document.querySelector("#engadment"),
  options
);
chart.render();
</script>