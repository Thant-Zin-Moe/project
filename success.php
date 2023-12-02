<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password changed</title>
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
        <form action="success.php" method="post">
            <div class="border">
                <div class="inputBox" style="font-size: 1em;">
                    <h6>Your password changed successfully.</h6>
                </div><br>
                <div>
                    <input type="submit" name="continue" value="Continue" class="gg1">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php

if(isset($_POST['continue'])){
    header("location: login1.php");
}

?>