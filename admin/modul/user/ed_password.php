<?php require_once('../../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

$passx = md5($_POST['password']);
$kd_inst = $_POST['hf_kd_inst'];

$select_stmt=$db->prepare("UPDATE user_ SET passwd='$passx' WHERE kd_user='$kd_inst'");
$select_stmt->execute();

$_SESSION['yo_uname'] = NULL;	
$_SESSION['yo_kd_user']= NULL;
$_SESSION['yo_grup']= NULL;

unset($_SESSION['yo_uname']);
unset($_SESSION['yo_kd_user']);
unset($_SESSION['yo_grup']);


//===========================================================================================

header("Location:../../index.php");

?>