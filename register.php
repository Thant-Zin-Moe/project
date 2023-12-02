<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body class="bg-dark text-white">
    <div class="form-body  text-white mt-3">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div>
                        <a href="register.php">
                            <button class="btn btn-info  my-3">
                                Register
                            </button>
                        </a>
                    </div>
                    <div>
                        <a href="logIn.php">
                            <button class="btn btn-success my-3">
                                Log In
                            </button>
                        </a>
                    </div>
                    <div>
                        <a href="logOut.php">

                            <button class="btn btn-danger my-3">

                                Log Out
                            </button></a>
                    </div>
                </div>
                <div class="col-8 bg-white text-dark card mt-3 ">
                    <form action="register.php" method="post" class="my-2">
                        <label for="" class="my-2">Name</label><br>
                        <input type="text" name="name" id=""><br>
                        <label for="" class="my-2">Email</label><br>
                        <input type="email" name="email" id=""><br>
                        <label for="" class="my-2">Password</label><br>
                        <input type="password" name="password" id=""><br>
                        <label for="" class="my-2">Confirm Password</label><br>
                        <input type="password" name="confirmPassword" id=""><br>
                        <button type="submit" class="my-3 " name="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        if ($name != "" && $email != "" && $password != "" && $confirmPassword != "") {
            if (strlen($password) >= 6  && strlen($confirmPassword) >= 6) {
                if ($password == $confirmPassword) {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
                    echo "Register success";
                } else {
                    echo "The password and confirm password must be the same";
                }
            } else {
                echo "Password must be greater than 6";
            }
        } else {
            echo "Please fill in all the information";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>