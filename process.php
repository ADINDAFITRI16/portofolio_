<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require_once 'vendors/library-email/library/PHPMailer.php';
require_once 'vendors/library-email/library/Exception.php';
require_once 'vendors/library-email/library/OAuth.php';
require_once 'vendors/library-email/library/POP3.php';
require_once 'vendors/library-email/library/SMTP.php';


if (isset($_POST['submit']) && $_POST ['submit'] == "form1"){
    $mail = new PHPmailer();
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host="ssl://smtp.gmal.com";
    $mail->SMTPAuth = true;
    $mail->Username="dindafitrinda@gmail.com";
    $mail->Password   = 'hrxz uwgw frdu oiax';                
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->From = $mail->Username;
    $mail->FromName = "codeego";

    $mail->addAddress($_POST['email']);     
    $mail->isHTML(true);     
    $mail->Subject=($_POST ['subject']) ; 
    $mail->Body=($_POST ['message']) ;
    
    if (!$mail->send()){
        echo "Mailer Error" . $mail-> ErrorInfo;
    }
    else{
        echo "pesan berhasil dikirim";
    }
}
