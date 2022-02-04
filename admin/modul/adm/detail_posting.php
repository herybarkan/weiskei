<?php
ob_start();
session_start();

require_once '../../../Connections/con.php';
?>
<?php
									$select_stmt=$db->prepare("SELECT * FROM tbl_post WHERE id_='$_GET[id_]'");	//sql select query
									$select_stmt->execute();
									$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
									?>
									
                                    <?php echo $row['content']; ?>