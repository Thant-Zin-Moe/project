<?php

include("db.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

session_start();
$email = $_SESSION['email'];
$roll_no = $_SESSION['roll_no'];
$name = $_SESSION['name'];

//for joining table tennis club 
if (isset($_POST['join1'])) {

    $sql = mysqli_query($conn, "SELECT * FROM userdata WHERE email='{$email}'");
    $sql1 = mysqli_query($conn, "SELECT * FROM table_tennis WHERE email='{$email}' AND roll_no='{$roll_no}'");
    if ($sql) {
        //$name = "SELECT name FROM data WHERE email='{$email}'";
        if (mysqli_num_rows($sql1) > 0) {
            echo "<h6>You are already membered!</h6>";
        } else {
            $status = "member";
            $sql1 = mysqli_query($conn, "INSERT INTO table_tennis (name,email,roll_no,status)
                            VALUES('$name','$email','$roll_no','$status')");
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'uitsportclub@gmail.com';
            $mail->Password = 'ebyrrfmnqubrnnda';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('uitsportclub@gmail.com');

            $mail->addAddress($email);

            $mail->isHTML(true);

            $mail->Subject = "UIT Sport Club!";
            $mail->Body = "Dear $name! <br>You're now Table Tennis club member.";

            $mail->send();
            header("location: Table tennis.html");
        }
    }
}


//for joining chess club
if (isset($_POST['join'])) {

    $sql = mysqli_query($conn, "SELECT * FROM userdata WHERE email='{$email}'");
    $sql1 = mysqli_query($conn, "SELECT * FROM chess WHERE email='{$email}' AND roll_no='{$roll_no}'");
    if ($sql) {
        //$name = "SELECT name FROM data WHERE email='{$email}'";
        if (mysqli_num_rows($sql1)>0) {
            echo "<h6>You are already membered!</h6>";
        } else {
            $status = "member";
            $sql1 = mysqli_query($conn, "INSERT INTO chess (name,email,roll_no,status)
                            VALUES('$name','$email','$roll_no','$status')");
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'uitsportclub@gmail.com';
            $mail->Password = 'ebyrrfmnqubrnnda';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('uitsportclub@gmail.com');

            $mail->addAddress($email);

            $mail->isHTML(true);

            $mail->Subject = "UIT Sport Club!";
            $mail->Body = "Dear $name! <br>You're now Chess club member.";

            $mail->send();
            header("location: chess.html");
        }
    }
}

//for joining swimming club
if (isset($_POST['join2'])) {

    $sql = mysqli_query($conn, "SELECT * FROM userdata WHERE email='{$email}'");
    $sql1 = mysqli_query($conn, "SELECT * FROM swimming WHERE email='{$email}' AND roll_no='{$roll_no}'");
    if ($sql) {
        //$name = "SELECT name FROM data WHERE email='{$email}'";
        if (mysqli_num_rows($sql1)>0) {
            echo "<h6>You are already membered!</h6>";
        } else {
            $status = "member";
            $sql1 = mysqli_query($conn, "INSERT INTO swimming (name,email,roll_no,status)
                            VALUES('$name','$email','$roll_no','$status')");
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'uitsportclub@gmail.com';
            $mail->Password = 'ebyrrfmnqubrnnda';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('uitsportclub@gmail.com');

            $mail->addAddress($email);

            $mail->isHTML(true);

            $mail->Subject = "UIT Sport Club!";
            $mail->Body = "Dear $name! <br>You're now Swimming club member.";

            $mail->send();
            header("location: swimming.html");
        }
    }
}

//for joining basketball club
if (isset($_POST['join3'])) {

    $sql = mysqli_query($conn, "SELECT * FROM userdata WHERE email='{$email}'");
    $sql1 = mysqli_query($conn, "SELECT * FROM basketball WHERE email='{$email}' AND roll_no='{$roll_no}'");
    if ($sql) {
        //$name = "SELECT name FROM data WHERE email='{$email}'";
        if (mysqli_num_rows($sql1)>0) {
            echo "<h6>You are already membered!</h6>";
        } else {
            $status = "member";
            $sql1 = mysqli_query($conn, "INSERT INTO basketball (name,email,roll_no,status)
                            VALUES('$name','$email','$roll_no','$status')");
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'uitsportclub@gmail.com';
            $mail->Password = 'ebyrrfmnqubrnnda';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('uitsportclub@gmail.com');

            $mail->addAddress($email);

            $mail->isHTML(true);

            $mail->Subject = "UIT Sport Club!";
            $mail->Body = "Dear $name!<br> You're now Basketball club member.";

            $mail->send();
            header("location: basketball.php");
        }
    }
}

//for joining badminton club
if (isset($_POST['join4'])) {

    $sql = mysqli_query($conn, "SELECT * FROM userdata WHERE email='{$email}'");
    $sql1 = mysqli_query($conn, "SELECT * FROM badminton WHERE email='{$email}' AND roll_no='{$roll_no}'");
    if ($sql) {
        //$name = "SELECT name FROM data WHERE email='{$email}'";
        if (mysqli_num_rows($sql1)>0) {
            echo "<h6>You are already membered!</h6>";
        } else {
            $status = "member";
            $sql1 = mysqli_query($conn, "INSERT INTO badminton (name,email,roll_no,status)
                            VALUES('$name','$email','$roll_no','$status')");
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'uitsportclub@gmail.com';
            $mail->Password = 'ebyrrfmnqubrnnda';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('uitsportclub@gmail.com');

            $mail->addAddress($email);

            $mail->isHTML(true);

            $mail->Subject = "UIT Sport Club!";
            $mail->Body = "Dear $name! <br>You're now Badminton club member.";

            $mail->send();
            header("location: project1.html");
        }
    }
}

//for joining football club
if (isset($_POST['join5'])) {

    $sql = mysqli_query($conn, "SELECT * FROM userdata WHERE email='{$email}'");
    $sql1 = mysqli_query($conn, "SELECT * FROM football WHERE email='{$email}' AND roll_no='{$roll_no}'");
    if ($sql) {
        //$name = "SELECT name FROM data WHERE email='{$email}'";
        if (mysqli_num_rows($sql1)>0) {
            echo "<h6>You are already membered!</h6>";
        } else {
            $status = "member";
            $sql1 = mysqli_query($conn, "INSERT INTO football (name,email,roll_no,status)
                            VALUES('$name','$email','$roll_no','$status')");
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'uitsportclub@gmail.com';
            $mail->Password = 'ebyrrfmnqubrnnda';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('uitsportclub@gmail.com');

            $mail->addAddress($email);

            $mail->isHTML(true);

            $mail->Subject = "UIT Sport Club!";
            $mail->Body = "Dear $name! <br>You're now Football club member.";

            $mail->send();
            header("location: presentation.html");
        }
    }
}

?>