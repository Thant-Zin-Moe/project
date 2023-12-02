<?php

include("db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball Admin Page</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="form">
        <form action="basketball_admin.php" method="post">
            <h2>Basketball Admin Page</h2>
            <h3>About Event</h3>
            <textarea name="content" id="form1" cols="40" rows="5"></textarea><br>
            <input type="submit" name="send" value="Send" class="form2">
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

if (isset($_POST['send'])) {

    $content = $_POST['content'];
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'uitsportclub@gmail.com';
    $mail->Password = 'ebyrrfmnqubrnnda';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('uitsportclub@gmail.com');

    $email = "SELECT * FROM basketball WHERE email_send=1";
    $res = mysqli_query($conn, $email);
    if (mysqli_num_rows($res) > 0) {

        while($x=mysqli_fetch_assoc($res)){
            $mail->addBCC($x['email']);
        }
        
        $mail->isHTML(true);

        $mail->Subject = "UIT Sport Club!";
        $mail->Body = "$content";

        if($mail->send()){
            echo "<h3>Success!</h3>";
        }
        else{
            echo "<h3>Fail!</h3>";
        }
    }
}

?>