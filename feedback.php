<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

if (isset($_POST['over'])) {

    try{
        $email = $_POST['email'];
        $content = $_POST['content'];
        $name = $_POST['name'];
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'uitsportclub@gmail.com';
        $mail->Password = 'ebyrrfmnqubrnnda';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($email);


        $mail->addAddress('uitsportclub@gmail.com');

        $mail->isHTML(true);

        $mail->Subject = 'UIT Sport Club!';
        $mail->Body = "$name<br>$content";
        $mail->addReplyTo($email);

        $mail->send();
        echo "<h3>Success!</h3>";
    }
    catch(Exception $e){
        echo "<h3>Fail!</h3>";
    }
    
}

?>