<?php require_once('../../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

$id_ = $_POST['hf_id'];

$select_stmt=$db->prepare("UPDATE tbl_post SET aktif='0' WHERE id_='$id_'");
$select_stmt->execute();


//===========================================================================================

header("Location:../../index.php?com=list_post");

?>