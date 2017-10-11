<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
//echo $_SESSION['email'];
//die();
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'renan.nuevo@gmail.com';                 // SMTP username
    $mail->Password = 'Frobe8kobe24';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($_SESSION['email'], $first_name);     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
  /*  $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
'rodolfonardinio24@gmail.com  '
    //Attachments
    attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
   // $mail->addAttachment('index.php');         // Add 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "<span>". 'Account Verification'. "</span>";
    $mail->Body    = '<div style="background-color:seagreen; color:white; padding:20px"><p><img src="img/logofinal.png">'.'BOSSING TEAM,'.'</p><br/><h1>' .$message_body. '</h1></div>';
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>