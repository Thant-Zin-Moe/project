<?php

include("multidb.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="ok.css">
    <link rel="icon" href="image/ic.png">
    <style>
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
    <h1 style="color:rgb(179, 223, 245); text-shadow: 4px 4px black;margin-left: 7%;margin-top: 50px;font-size: 60px;position: absolute;">
        <spam style="margin-left: 80px;">Welcome</spam><br>
        <spam style="margin-left: 180px;"> to</spam><br>
        <spam style="position: relative;">UIT Chess Club</spam>
        <br>
        <form action="main.php" method="post">
            <input type="submit" class="btn" style="padding: 10px;margin-left: 170px;margin-top: 70px;" name="join" value="join">
        </form>
    </h1>
    <img src="image/chess.jpg" width="250px" height="150px" style="border-radius: 50px;margin-left:800px ;margin-top: 65px;">
    <img src="image/bbc.jpg" width="240px" height="150px" style="border-radius: 65px;margin-left:900px;margin-top: 15px;">
    <div id="a"><img src="image/rr.jpg" width="170px" style="opacity:0.9;border-radius: 60%;margin-left:20px;">
        <img src="image/h.jpg" width="170px " height="120" style="border-radius: 60%;margin-left:20px;">
        <img src="image/g.jpg" width="170px " height="120" style="border-radius: 60%;margin-left:40px;">
        <img src="image/ee.jpg" width="230px" height="140px" style="border-radius: 70px;padding:10px;margin-left:60px;">
    </div>
</body>

</html>
