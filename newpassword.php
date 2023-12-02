<?php

include("db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>
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
        <form action="newpassword.php" method="post">
            <div class="border">
                <div class="inputBox">
                    <h2>Change Password</h2>
                    <input type="text" name="pass" required>
                    <span>new password</span>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="cpass" required>
                    <span>comfirm password</span>
                </div><br>
                <input type="submit" name="change" value="Change" class="gg">
            </div>
        </form>
    </div>
</body>

</html>
<?php

if (isset($_POST['change'])) {
    session_start();
    $email = $_SESSION['email'];
    $sql = mysqli_query($conn, "SELECT * FROM userdata WHERE email='{$email}'");
    if ($sql) {
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $hash = md5($_POST['pass']);
        if ($pass == $cpass) {
            $sqly = mysqli_query($conn, "UPDATE userdata SET `password` = '{$hash}' WHERE email='{$email}'");
            if ($sqly) {
                header("location: success.php");
            }
        } else {
            echo "<h6>Comfirm password does not match!</h6>";
        }
    }
}

?>