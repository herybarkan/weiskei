<?php require_once('../../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

$id_ = $_POST['hf_id'];

$select_stmt=$db->prepare("UPDATE user_ SET aktif='1' WHERE id_='$id_'");
$select_stmt->execute();


//===========================================================================================

header("Location:../../index.php?com=users");

?>