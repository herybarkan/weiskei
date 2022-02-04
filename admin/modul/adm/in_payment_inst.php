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

$note_pay = addslashes($_POST['note_pay']);


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
   sts_pay='1',
   note_pay='$note_pay'
   WHERE id='$_POST[hf_id]'
	");	
	$select_inor->execute();
	
	$select_inrev=$db->prepare("
   INSERT INTO pay_instructor (
   id_payment,
   kd_instructor,
   kd_member,
   amount,
   fee,
   nominal,
   pay_note,
   kd_admin,
   tgl,
   jam
   ) VALUES (
   '$_POST[hf_id]',
   '$data[1]',
   '$data[2]',
   '$_POST[hf_amount]',
   '$_POST[hf_fee]',
   '$_POST[hf_nom]',
   '$note_pay',
   '$_SESSION[yo_kd_user]',
   '$tgl_in',
   '$jam_in'
   )
	");	
	$select_inrev->execute();


//================================================================================
$email = $row_cont['email'];
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

$mailz->setFrom('system@yoinstructor.com', 'Payment Confirmation');
$mailz->addReplyTo('system@yoinstructor.com', 'Payment Confirmation');

// Menambahkan penerima
$mailz->addAddress($email);
//$mail->addAddress('tambahlong@gmail.com');

// Subjek email
$mailz->Subject = 'Payment Confirmation';

// Mengatur format email ke HTML
$mailz->isHTML(true);

         $mailContent = '<table width="90%" border="0" align="center">
  <tr>
    <td colspan="2"><img src="https://yoinstructor.com/images/logo.png" width="300" height="71" />
    
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><span>
      <h2>Payment Confirmation</h2>
    </span></td>
  </tr>
  <tr>
    <td width="34%">&nbsp;</td>
    <td width="66%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">Hi <strong>'.$row_cont['first_name'].' '.$row_cont['last_name'].'</strong><br>
      we have made payment for the session <strong>'.$data[0].'</strong> with <strong>'.$row_mem['firstname'].'  '.$row_mem['last_name'].'</strong> member
and nominal <br><h4>'.$row['currency_code']." ". $_POST['hf_nom'].'</h4><br>
Thank you for being a part of "yoinstructor"</td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><strong>Notes</strong></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><span style="color:#096;">'.$_POST['note_pay'].'</span></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
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

header("Location:../../index.php?com=order");

?>