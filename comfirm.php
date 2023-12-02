<?php

include('db.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Comfirm Account</title>
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
        <form action="comfirm.php" method="post" autocomplete="off">
        <div class="border">
            <h1 style="text-align: center; margin-bottom: 10px; font-family: 'Times New Roman';">Comfirm</h1>
            <div>
                <span>Comfirm your account with 6-digit code from your email</span>
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
    $roll_num = $_SESSION['roll_no'];
    $otp1 = $_POST['otp'];

    if(!empty($otp1)){
        $sql3 = mysqli_query($conn, "SELECT roll_no FROM userdata WHERE roll_no='{$roll_num}'");
        if($otp1 == $otp && mysqli_num_rows($sql3)>0){
            $null_otp = 0;
            $sql4 = mysqli_query($conn, "UPDATE userdata SET `status` = 'Verified', `verification_code` = '$null_otp' WHERE roll_no ='{$roll_num}'");
            if($sql4){
                $row = mysqli_fetch_assoc($sql3);
                if($row){
                    $_SESSION['roll_no'] = $row['roll_no'];
                    $_SESSION['status'] = $row['status'];
                    header("location: letkamyinn.php");
                }
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