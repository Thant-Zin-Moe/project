<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <div class="form-body  text-white mt-3">
        <div class="container">
       <div class="row">
         <div class="col-3">
<div >
<a href="register.php">
    <button class="btn btn-info  my-3">
        Register
    </button>
</a>
</div>
<div >
    <a href="logIn.php">
        <button class="btn btn-success my-3">
        Log In
    </button>
    </a>
</div>
<div >
    <a href="logOut.php">
        
    <button class="btn btn-danger my-3">
        
        <div class=" h1 bg-danger">
            Log Out success
        </div>
    </button></a>
</div>
        </div>
        <div class="col-8">
</div>
<?php
session_start();

session_destroy();
?>
</body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>