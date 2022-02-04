<?php
ob_start();
session_start();

error_reporting(0);
@ini_set('display_errors', 0);


require_once '../../../Connections/con.php';
?>
<?php
									$select_stmt=$db->prepare("SELECT * FROM payments WHERE id='$_GET[id_]' ");	//sql select query
									$select_stmt->execute();
									$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
										
$data_sources  = $row['product_name'];
$data = explode(",", $data_sources);
//echo $data[0]; // piece1
//echo $data[1]; // piece2
//echo $data[2]; // piece2

 $select_cont=$db->prepare("SELECT
   user_.username AS email,
   instructor.*,
   countries.`name` AS nm_negara,
   states.`name` AS nm_state,
   cities.`name` AS nm_city
   FROM
   instructor
   JOIN user_
   ON instructor.kd_instructor = user_.kd_user 
   JOIN countries
   ON countries.id = instructor.country 
   JOIN states
   ON states.id = instructor.state 
   JOIN cities
   ON cities.id = instructor.city
   WHERE instructor.kd_instructor='$data[1]'
   GROUP BY instructor.kd_instructor"); //sql select query
   $select_cont->execute();
   $row_cont=$select_cont->fetch(PDO::FETCH_ASSOC);
   
    $select_mem=$db->prepare("SELECT
member.kd_member,
member.first_name,
member.last_name,
countries.`name` AS nm_negara,
states.`name` AS nm_state,
cities.`name` AS nm_city,
member.photo,
member.aktif,
member.phone_number,
user_.username
FROM
countries
JOIN member
ON countries.id = member.country 
JOIN states
ON states.id = member.state 
JOIN cities
ON cities.id = member.city 
JOIN user_
ON user_.kd_user = member.kd_member
   WHERE member.kd_member='$data[2]'
   GROUP BY member.kd_member"); //sql select query
   $select_mem->execute();
   $row_mem=$select_mem->fetch(PDO::FETCH_ASSOC);
   

									?>
                                    
<style type="text/css">
         .rating {
         display: flex;
         flex-direction: row-reverse;
         justify-content: center
         }
         .rating>input {
         display: none
         }
         .rating>label {
         position: relative;
         width: 1em;
         font-size: 30px;
         color: #FFD600;
         cursor: pointer
         }
         .rating>label::before {
         content: "\2605";
         position: absolute;
         opacity: 0
         }
         .rating>label:hover:before,
         .rating>label:hover~label:before {
         opacity: 1 !important
         }
         .rating>input:checked~label:before {
         opacity: 1
         }
         .rating:hover>input:checked~label:before {
         opacity: 0.4
         }
      </style>
        
<div class="row gutters">
<form action="modul/member/in_review.php" method="POST" enctype="multipart/form-data" style="width:100%;">
<div class="col-12">
							<h4>Confirmation
							  <input name="hf_id" type="hidden" id="hf_id" value="<?php echo $_GET[id_]; ?>" />
							</h4> 
                            <hr>
                            
                                
									
									<div class="row gutters">
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    
                                    <div class="form-group">
												<label for="inputName">Name</label><br>
                                                <?php echo $row_mem['first_name'].' '.$row_mem['last_name']; ?>
                                    </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
												<label for="inputName">Location</label><br>
                                                <?php echo $row_mem['nm_negara'].','.$row_mem['nm_state'].','.$row_mem['nm_city']; ?>
                                    </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
												<label for="inputName">Contact</label><br>
                                                <?php echo $row_mem['username'].', '.$row_mem['phone_number']; ?>
                                    </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
												<label for="inputName">Session</label><br>
                                                <?php echo $data[0]; ?>
                                    </div>
                                    </div>
                                    
                                    <?php if ($data[3]!="") { ?>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
												<label for="inputName">Date</label><br>
                                                <?php echo $data[3].", ".$data[4]; ?>
                                    </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
												<label for="inputName">Time</label><br>
                                                <?php echo $data[5]." - ".$data[6]; ?>
                                    </div>
                                    </div>
                                    <?php } ?>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
												<label for="inputName">Notes Services Requester</label><br>
                                                <?php echo $row['kd_instructor']; ?>
                                    </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
												<label for="inputName">Price</label><br>
                                                <?php echo $row['currency_code']; ?> <?php echo $row['payment_amount']; ?>
                                    </div>
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <hr>
                                    </div>
                                    
                                    <div id="btn_pilih" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <center>
                                    <h4><span style="color:#0C3;">END SESSION CONFIRMATION</span></h4>
                                    </center>
                                    </div>
                                    
                                    
                                            
                                            
                                    <div id="res_app" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                   <div class="rating"> 
                                   <input type="radio" name="rating" value="5" id="5">
                                   <label for="5">☆</label> 
                                   
                                   <input type="radio" name="rating" value="4" id="4">
                                   <label for="4">☆</label> 
                                   
                                   <input type="radio" name="rating" value="3" id="3">
                                   <label for="3">☆</label> 
                                   
                                   <input type="radio" name="rating" value="2" id="2">
                                   <label for="2">☆</label> 
                                   
                                   <input type="radio" name="rating" value="1" id="1">
                                   <label for="1">☆</label>
                                   
                                   </div>
</div> 
                                    </div>
                                   <div id="dapprove" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"> 
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                    <label for="inputName">Notes</label><br>
                                    <textarea name="review" rows="4" style="width:100%;" required="required"></textarea>
                                    </div>
                                    </div>
                                    
                                    
                                    </div>
                                    
                                   
                                    
                                    <div id="kirim">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                    <center>
                                    <button type="submit" class="btn btn-primary mb-2">Submit Your Review</button>
                                    </center>
                                    </div>
                                    </div>
                                    </div>
                                    
                                    
									<!--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
                                            <label for="inputName">Reason</label><br>
												<textarea name="reason" cols="" rows="4" style="width:100%;"></textarea>
											</div>
										</div>
                                        
                                        <input name="hf_app" type="hidden" value="approve"/>
                                     
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
                                            <center>
												<button type="submit" class="btn btn-primary mb-2">Submit</button>
											</center>
                                            </div>
										</div>-->
                                        	
										</div>
                                    
                                    
										
                                        
                                        
                                        
										
										
                                        
                                        
                                    
										
										
									
                                    

								
						
                        </form>
                        </div>
                        
                        