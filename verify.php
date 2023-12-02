<?php

include('db.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Verify Account</title>
        <link rel="stylesheet" href="css/mystyle2.css">
        <style>
            body{
                background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url(https://th.bing.com/th/id/AnmmHjXxEhdib0Q480x360?&rs=1&pid=ImgDet);
                background-repeat: no-repeat;
                background-size: 100%;
            }
        </style>
    </head>
    <body>
        <form action="verify.php" method="post" autocomplete="off">
        <div class="border">
            <h1 style="text-align: center; margin-bottom: 10px; font-family: 'Times New Roman';">Comfirm</h1>
            <div>
                <span>We send 6-digit code to your email to reset password</span>
            </div><br>
            <div class="inputBox">
                <input type="number" class="otp_field" name="otp" required="required" maxlength="6">
                <span>Enter code</span>
            </div><br>
            <input type="submit" value="Comfirm" name="verify" class="form">
        </div>
    </form>
    </body>
    <sctipt src="verify.js"></sctipt>
</html>

<?php

if(isset($_POST['verify'])){

    session_start();

    $otp = $_SESSION['otp'];
    $otp1 = $_POST['otp'];
    $email = $_SESSION['email'];

    if(!empty($otp1)){
        if($otp1 == $otp){
            $null_otp = 0;
            $sql4 = mysqli_query($conn, "UPDATE userdata SET `status` = 'Verified', `verification_code` = '$null_otp' WHERE email ='{$email}'");
            if($sql4){
                    header("location: newpassword.php");
            }
        }
        else{
            echo "<h6>Wrong OTP!</h6>";
        }
    }
    else{
        echo "<h6>Enter OTP!</h6>";
    }
}

?>