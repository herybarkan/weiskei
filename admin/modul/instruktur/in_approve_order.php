<?php require_once('../../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

error_reporting(0);
@ini_set('display_errors', 0);

date_default_timezone_set('Asia/Jakarta');

require '../../../modul/phpmailler/PHPMailerAutoload.php';
require '../../../modul/phpmailler/class.phpmailer.php';
require '../../../modul/phpmailler/class.phpmaileroauth.php';

$tgl_in=date('Y-m-d');
$jam_in=date('H:i:s');

$reason=$_POST['reasona'].$_POST['reasonb'];

 $select_pay=$db->prepare("SELECT * FROM payments where id='$_POST[hf_id]'"); //sql select query
   $select_pay->execute();
   $row=$select_pay->fetch(PDO::FETCH_ASSOC);
   
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

   $select_inor=$db->prepare("
   UPDATE payments SET 
   approve='$_POST[hf_app]',
   catatan_inst='$reason'
   WHERE id='$_POST[hf_id]'
	");	
	$select_inor->execute();


//================================================================================
$email = $row_mem['username'];
//$email = "herybarkan@gmail.com";
$to = $email; 
//$subject = "Konfirmasi Aktivasi Akun ". $email;

$mailz = new PHPMailer;

// Konfigurasi SMTP
$mailz->isSMTP();
$mailz->Host = 'mail.yoinstructor.com';
$mailz->SMTPAuth = true;
$mailz->Username = 'system@yoinstructor.com';
$mailz->Password = 'Alhamdulilah2021';
$mailz->SMTPSecure = 'tls';
$mailz->Port = 587;
/*$mailz->smtpConnect(
	    array(
	        "ssl" => array(
	            "verify_peer" => false,
	            "verify_peer_name" => false,
	            "allow_self_signed" => true
	        )
	    )
	);*/

$mailz->setFrom('system@yoinstructor.com', 'Booking Confirmation');
$mailz->addReplyTo('system@yoinstructor.com', 'Booking Confirmation');

// Menambahkan penerima
$mailz->addAddress($email);
//$mail->addAddress('tambahlong@gmail.com');

// Subjek email
$mailz->Subject = 'Booking Confirmation';

// Mengatur format email ke HTML
$mailz->isHTML(true);

         $mailContent = '<table width="90%" border="0" align="center">
  <tr>
    <td colspan="2"><img src="https://yoinstructor.com/images/logo.png" width="300" height="71" />
    
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><span><h2>Booking Confirmation</h2>
    </span></td>
  </tr>
  <tr>
    <td width="34%">&nbsp;</td>
    <td width="66%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><p>Hi '.$row_mem['first_name'].' '.$row_mem['last_name'].'</p>
      <p>My Name is <br>
      '.$row_cont['first_name'].' '.$row_cont['last_name'].'<br>
        I\'m glad you ordered me.<br>
        this is my message
        
        and you can contact me at<br>
        '.$row_cont['email'].', '.$row_cont['phone_number'].'<br>
        
        to prepare for this training
    </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Notes</td>
    <td><span style="color:#096;">'.$_POST['reasona'].$_POST['reasonb'].'</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">To see details please click the button below</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <a href="https://yoinstructor.com/admin/?com=member_order">
      <input type="button" name="btn" id="btn" value="OPEN" style="background-color:#FC6; color:#FFF; border:none; width:120px; border-radius:8px; height:40px;"/>
      </a>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">Book wellness instructors Anytime &amp; Anywhere.</td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="font-weight: bold">www.yoinstructor.com</td>
  </tr>
</table>';
         
$mailz->Body = $mailContent;


// Kirim email
if(!$mailz->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mailz->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}
//==========================================================================================

header("Location:../../index.php?com=my_order_inst_pending");

?>