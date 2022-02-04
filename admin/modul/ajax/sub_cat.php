<?php
ob_start();
session_start();

require_once '../../../Connections/con.php';
?>
<select name="sub_category" class="form-control default-select" id="sub_category">
                                                <option selected>Select...</option>
                                                <?php
									$select_stmt=$db->prepare("SELECT * FROM category_sub WHERE id_category='$_GET[get_subc]'");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <option value="<?php echo $row['id_']; ?>"><?php echo $row['nm_sub_category']; ?></option>
                                        
                                    <?php
									}
									?>

                                                    
                                                </select>