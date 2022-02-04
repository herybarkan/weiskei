<?php
ob_start();
session_start();

$_SESSION['wk_uname'] = NULL;	
$_SESSION['wk_kd_user']= NULL;
$_SESSION['wk_grup']= NULL;

unset($_SESSION['wk_uname']);
unset($_SESSION['wk_kd_user']);
unset($_SESSION['wk_grup']);
		
header("refresh:0; ../../index.php");
?>