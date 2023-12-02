<?php

include("db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget password</title>
    <link rel="stylesheet" href="css/myStyle3.css">
    <style>
        body {
            background-image: linear-gradient(rgba(4, 9, 30, 0.5), rgba(4, 9, 30, 0.5)),
                url(https://th.bing.com/th/id/AnmmHjXxEhdib0Q480x360?&rs=1&pid=ImgDet);
            background-repeat: no-repeat;
            background-size: 100%;
        }

        h6 {
            text-align: center;
            font-size: 1em;
            font-family: 'Times New Roman', Times, serif;
            color: #000000;
            border: 3px solid #d1d50a;
            background: #04db65;
            border-left: none;
            border-right: none;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="form1">
        <form action="forget.php" method="post">
            <div class="border">
                <div class="inputBox">
                    <h2>Forget Password</h2>
                    <input type="email" name="email" required>
                    <span>Enter Your email</span>
                </div><br>
                <input type="submit" name="check-mail" value="continue" class="gg">
            </div>
        </form>
    </div>
</body>

</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

if (isset($_POST['check-mail'])) {
    $email = $_POST['email'];
    $run_sql = mysqli_query($conn, "SELECT * FROM userdata WHERE email='{$email}'");
    if (mysqli_num_rows($run_sql) > 0) {
        $code = rand(999999, 111111);
        $sql1 = mysqli_query($conn, "UPDATE userdata SET `verification_code` = '$code', `status`='' WHERE email = '{$email}'");
        if ($sql1) {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'uitsportclub@gmail.com';
            $mail->Password = 'ebyrrfmnqubrnnda';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('uitsportclub@gmail.com');

            $mail->addAddress($_POST["email"]);

            $mail->isHTML(true);

            $mail->Subject = "UIT Sport Club!";
            $mail->Body = "Password Reset Code! $code";

            $mail->send();
            session_start();
            $_SESSION['email'] = "$email";
            $_SESSION['otp'] = "$code";
            $_SESSION['password'] = "$pass";


            header("location: verify.php");
        } else {
            echo "<h6>Failed while sending code!</h6>";
        }
    } else {
        echo "<h6>Your email does not exist!</h6>";
    }
}

?>