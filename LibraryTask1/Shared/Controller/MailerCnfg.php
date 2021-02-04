<?php
include 'LibraryTask1/vendor/autoload.php';
include '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
include '../../vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
function MailerConfig($useremail,$subject,$body)
{
    $mail = new PHPMailer(true);
    try {
      $mail->isSMTP();                                          
      $mail->Host = "ssl://smtp.gmail.com"; 
      $mail->SMTPAuth   = true;                                
      $mail->Username   = 'zahraabuzahra4@gmail.com';                     
      $mail->Password   = 'newpass11610350';                             
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        
      $mail->Port       = 465;   
     
      $mail->setFrom('zahraabuzahra4@gmail.com', 'Library Website');
   
      $mail->addAddress($useremail);
     
      $mail->isHTML(true);
      //MailerConfig($mail);
    
      $mail->Subject = $subject;
     
      $mail->Body = $body;
    
  
     if( $mail->send()){
      $output = 'check your Email and follow link!';
     }
     else{
      $output = 'something went rong';
     }
      
  } catch (Exception $e) {
   
      $output = $mail->ErrorInfo;
  }
    echo $output;

}

?>