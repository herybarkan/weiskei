<?php require_once('../../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

$passx = md5($_POST['password']);
$id_ = $_POST['hf_id'];

$select_stmt=$db->prepare("UPDATE user_ SET passwd='$passx' WHERE id_='$id_'");
$select_stmt->execute();


//===========================================================================================

header("Location:../../index.php?com=users");

?>