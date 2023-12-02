<?php

include("db.php");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Account</title>
    <link rel="stylesheet" href="css/mystyle1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(rgba(4, 9, 30, 0.5), rgba(4, 9, 30, 0.5)), url(https://th.bing.com/th/id/AnmmHjXxEhdib0Q480x360?&rs=1&pid=ImgDet);
            background-repeat: no-repeat;
            background-size: 100%;
        }

        h1 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }
        .inputBox span{
            font-family: 'Aclonica', sans-serif;
        }
        .inputBox input{
            font-family: 'Edu TAS Beginner', cursive;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="form1">
        <form action="register2.php" method="post">
            <div class="border">
                <h1>Create Account</h1>
                <div class="inputBox">
                    <input type="text" name="name" required>
                    <span>Enter username</span>
                </div><br>
                <div class="inputBox">
                    <input type="email" name="email" required>
                    <span>Enter Your email</span>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="roll_no" required>
                    <span>Enter Roll number</span>
                </div><br>
                <div class="inputBox">
                    <input type="password" name="pass" required>
                    <span>Enter password</span>
                </div><br>
                <div class="inputBox">
                    <input type="password" name="cpass" required>
                    <span>comfirm password</span>
                </div><br>
                <input type="submit" name="submit" value="Sign Up" class="gg">
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $roll_no = filter_input(INPUT_POST, "roll_no", FILTER_VALIDATE_INT);
    $digit = $_POST['pass'];
    $pass = md5($_POST['pass']);
    $cpass = md5($_POST['cpass']);
    if (empty($name) || empty($email) || empty($roll_no) || empty($pass) || empty($cpass)) {
        echo "<script>
        alert('Please fill all field!');
    </script>";
    } elseif ($pass == $cpass) {
        if (strlen($digit) >= 6) {
            $status = "Verified";
            $sql1 = mysqli_query($conn, "SELECT * FROM userdata WHERE email = '{$email}' AND status='{$status}'");
            $sql2 = mysqli_query($conn, "SELECT * FROM userdata WHERE roll_no = '{$roll_no}'");
            if (mysqli_num_rows($sql1) > 0) {
                echo "<h6>$email ~ Already Exists.</h6>";
            } elseif (mysqli_num_rows($sql2)) {
                echo "<h6>Roll Number already exists!</h6>";
            } else {
                $otp = mt_rand(111111, 999999);
                // $hash = password_hash($pass, PASSWORD_DEFAULT);
                $sql = mysqli_query($conn, "INSERT INTO userdata (name, email, roll_no, password, verification_code)
                            VALUES('$name','$email','$roll_no','$pass','$otp')");

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
                $mail->Body = "Verification Code! $otp";

                $mail->send();

                session_start();
                $_SESSION['email'] = "$email";
                $_SESSION['roll_no'] = "$roll_no";
                $_SESSION['otp'] = "$otp";
                $_SESSION['password'] = "$pass";
                $_SESSION['name'] = "$name";

                header("location: comfirm.php");
            }
        } else {
            echo "<h6>The password must be at least 6 characters!</h6>";
        }
    } else {
        echo "<h6>Password doesn't match!</h6>";
    }
}

?>