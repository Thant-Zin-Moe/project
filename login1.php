<?php

include("db.php");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Log in</title>
    <link rel="stylesheet" href="css/myStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(rgba(4, 9, 30, 0.5), rgba(4, 9, 30, 0.5)), url(https://th.bing.com/th/id/AnmmHjXxEhdib0Q480x360?&rs=1&pid=ImgDet);
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .inputBox span{
            font-family: 'Aclonica', sans-serif;
        }
        .inputBox input{
            font-family: 'Edu TAS Beginner', cursive;
            font-size: 1em;
        }
    </style>
</head>

<body>
    <div class="form1">
        <form action="login1.php" method="post">
            <div class="border">
                <h1 style="text-align: center; margin-bottom: 10px; font-family: 'Times New Roman';">Log in</h1>
                <!-- <div class="error-text">Error</div> -->
                <div class="inputBox">
                    <input type="email" name="email" required="required">
                    <span>Enter Email</span>
                </div><br>
                <div class="inputBox">
                    <input type="password" name="pass" required="required">
                    <span>Enter password</span>
                </div><br>
                <a href="forget.php">
                    <span style="text-align: center;">forget password</span>
                </a><br>
                <span>Don't you have an account? </span>
                <a href="register2.php">
                    <span>Create one<br></span>
                </a>
                <input type="submit" value="Login" name="submit" class="form">
            </div>
        </form>
    </div>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $status = "Verified";

    $sql = mysqli_query($conn, "SELECT * FROM userdata WHERE email = '{$email}' AND password='{$pass}'");
    $sqly1 = mysqli_query($conn, "SELECT * FROM userdata WHERE email = '{$email}' AND status='{$status}'");

    if (mysqli_num_rows($sql) > 0) {
        if (mysqli_num_rows($sqly1) > 0) {
            header("location: letkamyinn.php");
            $x = mysqli_fetch_assoc($sql);
            if ($x) {
                $roll_no = $x['roll_no'];
                $name = $x['name'];
                session_start();
                $_SESSION['email'] = "$email";
                $_SESSION['roll_no'] = "$roll_no";
                $_SESSION['name'] = "$name";
            }
        } else {
            header("location: comfirm.php");
        }
    } else {
        echo "<h6>Incorrect email or password!</h6>";
    }
}

?>