<?php
include  "./mail/PHPMailer/src/PHPMailer.php";
include  "./mail/PHPMailer/src/Exception.php";
include  "./mail/PHPMailer/src/OAuth.php";
include  "./mail/PHPMailer/src/POP3.php";
include  "./mail/PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Mailer{
   public function sendmail($title,$mailer,$body){
$mail= new PHPMailer(true);
$mail->CharSet='UTF-8';
// print_r($mail);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host ='smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'Pham522634@gmail.com';                 // SMTP username
    $mail->Password = 'djzpkkcskijsoerh';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('Pham522634@gmail.com', 'Admin');
    $mail->addAddress($mailer);     // Add a recipient
                  // Name is optional
    // $mail->addReplyTo('info@example.com','Information');
    // $mail->addCC('Tampham113113@gmail.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $title;
    $mail->Body    = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Đã gửi tin nhắn';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    }


}














?>