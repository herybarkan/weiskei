<?php require_once('../../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

$id_ = $_POST['hf_id'];
$id_inst = $_POST['hf_id_inst'];

$select_stmt=$db->prepare("UPDATE instructor SET aktif='0' WHERE id_='$id_'");
$select_stmt->execute();

$select_stmt2=$db->prepare("UPDATE user_ SET aktif='0' WHERE kd_user='$id_inst'");
$select_stmt2->execute();


//===========================================================================================

header("Location:../../index.php?com=instructor");

?>