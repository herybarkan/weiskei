<?php require_once('../../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

//$id_ = $_POST['hf_id'];
$id_inst = $_POST['hf_id_inst'];

//$select_stmt=$db->prepare("UPDATE user_ SET aktif='0' WHERE id_='$id_'");
//$select_stmt->execute();

$select_stmt=$db->prepare("UPDATE instructor SET sts='1', sts2='R' WHERE kd_instructor='$id_inst'");
$select_stmt->execute();


//===========================================================================================

header("Location:../../index.php?com=instructor");

?>