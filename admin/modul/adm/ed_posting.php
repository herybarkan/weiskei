<?php require_once('../../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

$tgl_in=date('Y-m-d');
$jam_in=date('H:i:s');

$xtitle = addslashes($_POST['title']);
$xcontent = addslashes($_POST['content']);

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
$awal="POST";

$kd_post = $awal.$kode.$zxtahun.$zxbulan.$zxtanggal.$zxjam.$zxmenit.$zxdetik;


//===========================================================================================
if (phpversion() > "4.0.6") {
	$HTTP_POST_FILES = &$_FILES;
}
define("MAX_SIZE",900000000000);
define("DESTINATION_FOLDER", "../../../foto/article/");
//define("no_error", "../index.php?com=upload&id_=".$_POST['hf_id']."&upload=success");
//define("yes_error", "../index.php?com=upload&id_=".$_POST['hf_id']."&upload=error");
$_accepted_extensions_ = "jpg, jpeg, png, gif";
if(strlen($_accepted_extensions_) > 0){
	$_accepted_extensions_ = @explode(",",$_accepted_extensions_);
} else {
	$_accepted_extensions_ = array();
}
$_file_ = $HTTP_POST_FILES['file'];
if(is_uploaded_file($_file_['tmp_name']) && $HTTP_POST_FILES['file']['error'] == 0){
	$errStr = "";
	$_name_ = $_file_['name'];
	$_type_ = $_file_['type'];
	$_tmp_name_ = $_file_['tmp_name'];
	$_size_ = $_file_['size'];
	if($_size_ > MAX_SIZE && MAX_SIZE > 0){
		$errStr = "File troppo pesante";
	}
	$_ext_ = explode(".", $_name_);
	$_ext_ = strtolower($_ext_[count($_ext_)-1]);
	if(!in_array($_ext_, $_accepted_extensions_) && count($_accepted_extensions_) > 0){
		$errStr = "Estensione non valida";
	}
	if(!is_dir(DESTINATION_FOLDER) && is_writeable(DESTINATION_FOLDER)){
		$errStr = "Cartella di destinazione non valida";
	}
		/*if(@copy($_tmp_name_,DESTINATION_FOLDER . "/" . $kd_akun.".".$_ext_)){*/
		if ($_name_ !="") {$_xfoto=$kd_post.".".$_ext_;}
	elseif ($_name_ =="") {$_xfoto="";}
		
		if(@copy($_tmp_name_,DESTINATION_FOLDER . "/" . $_xfoto))
			{
				$sts_upload="success";
			} 
		else 
			{
				$sts_upload="fail";
			}
}


	if ($_xfoto !="") {$_foto=", image='$_xfoto' ";}
elseif ($_xfoto =="") {$_foto="";}


//===========================================================================================

$select_stmt=$db->prepare("UPDATE tbl_post SET
id_category='$_POST[category]',
id_sub_category='$_POST[sub_category]',
title='$xtitle',
content='$xcontent'
$_foto
WHERE id_='$_POST[hf_id]'
");	//sql select query
$select_stmt->execute();


//===========================================================================================

header("Location:../../index.php?com=list_post");

?>