<?php
include 'Database.php';
include 'MailerCnfg.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$conn = OpenCon();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $email = test_input($_POST["email"]);
  $check_email = filter_var($email, FILTER_VALIDATE_EMAIL);
  if (!$check_email) {  //if the phone and emails does not match the patterns show an alert msg else continue..
    echo "<script>
    var text= \"Invalid data check your email \";
        window.confirm(text);
 window.open('../View/Reset.html','_self');
      </script> ";
  }

else{
  $subject = 'Reset Email';
  $body =   'Reset your password:
  <a href="http://localhost:8888/TrainingTasks/library/LibraryTask1/Shared/Controller/NewPassword.php?email=' . $email . '"> Reset Password</a>';
  MailerConfig($email,$subject,$body);
}
}
//validate the form data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
CloseCon($conn);
?>