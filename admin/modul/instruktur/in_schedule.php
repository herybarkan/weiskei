<?php require_once('../../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

$tgl_in=date('Y-m-d');
$jam_in=date('H:i:s');

srand ((double) microtime() * 10000000);
$input = array ("A", "B", "C", "D", "E","F","G","H","I","J","K","L","M","N","O","P","Q",
"R","S","T","U","V","W","X","Y","Z");
$rand_index = array_rand($input,8);
$kode= $input[$rand_index[3]].$input[$rand_index[5]].$input[$rand_index[4]].$input[$rand_index[2]].$input[$rand_index[1]];

$zxtahun=date('y');
$zxbulan=date('m');
$zxtanggal=date('d');
$zxjam=date('H');
$zxmenit=date('i');
$zxdetik=date('s');
$awal="SCD";

$kd_scd = $awal.$kode.$zxtahun.$zxbulan.$zxtanggal.$zxjam.$zxmenit.$zxdetik;

$jam_s=$_POST['jam_start'];
$jame=$_POST['jam_end'];
//===========================================================================================
foreach( $jam_s as $index => $jams ) {
   echo "value=" . $jams . "-" . $jame[$index] . "<br>";
   $select_jam=$db->prepare("INSERT INTO instructor_sched (
		kd_sched,
		kd_instructor,
		hari,
		jam_start,
		jam_end 
		) VALUES (
		'$kd_scd',
		'$_SESSION[yo_kd_user]',
		'$_POST[day]',
		'$jams',
		'$jame[$index]'
		)");	
	$select_jam->execute();
}




header("Location:../../index.php?com=schedule_inst");

?>