<?php

include("multidb.php");

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Oswald:wght@500&family=Rubik+Mono+One&family=Teko:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/SStyle.css">
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
        .header{
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(image/UIT1.jpg);
        }
    </style>
    <title>UIT Club Membership</title>
</head>

<body>
    <section class="header" id="header">
        <nav>
            <a href="letkamyinn.html"><img src="image/UIT-Logo-big.png" alt=""></a>
            <div class="nav-links">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#club">Clubs</a></li>
                    <li><a href="#activity">Activity</a></li>
                    <li><a href="#footer">Contact us</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>University Of Information Technology</h1>
        </div>

    </section>

    <section class="intro" id="club">
        <div class="introdiv">
            <h3>We held rainy season sports event every years.</h3>
            <p>Here are currently sport clubs to join.<br> As you login with your Uit email, you can join the following clubs.<br> To know more about clubs, tap the individual clubs that you want to join.</p>

        </div>
    </section>





    <!--------clubs-------->

    <section class="clubs">

        <h1>SPORTS CLUBS</h1>
        <p> We have six sports clubs </p>

        <div class="row">
            <div class="clubs-col">
                <img src="image/footballclub.jpg" alt="">
                <div class="layer">
                    <a href="presentation.html">
                        <h3>FUTSAL <form action="" method="post"> <input type="submit" value="Join" name="join5" class="hero"></form>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="clubs-col">
                <img src="image/basketballclub.jpg" alt="">
                <div class="layer">
                    <a href="basketball.php">
                        <h3>BASKETBALL <form action="" method="post"> <input type="submit" value="Join" name="join3" class="hero"></form>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="clubs-col">
                <img src="image/chessclub.jpg" alt="">
                <div class="layer">
                    <a href="chess.html">
                        <h3>CHESS <form action="" method="post"> <input type="submit" value="Join" name="join" class="hero"></form>
                        </h3>
                    </a>
                </div>
            </div>




        </div>
        <div class="row">
            <div class="clubs-col">
                <img src="image/swimmingclub.jpg" alt="">
                <div class="layer">
                    <a href="swimming.html">
                        <h3>SWIMMING <form action="" method="post"> <input type="submit" value="Join" name="join2" class="hero"></form>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="clubs-col">
                <img src="image/badmintonclub.jpg" alt="">
                <div class="layer">
                    <a href="project1.html">
                        <h3>BADMINTON <form action="" method="post"> <input type="submit" value="Join" name="join4" class="hero"></form>
                        </h3>
                    </a>


                </div>
            </div>
            <div class="clubs-col">
                <img src="image/tabletennisclub.jpg" alt="">
                <div class="layer">
                    <a href="Table tennis.html">
                        <h3>TABLE-TENNIS <form action="" method="post"> <input type="submit" value="Join" name="join1" class="hero"></form>
                        </h3>
                    </a>
                </div>
            </div>




        </div>

    </section>

    <!-----activity------>
    <section class="activity" id="activity">
        <h1>Activity</h1>


        <div class="row">
            <div class="activity-col">
                <img src="image/badminton.jpg" alt="">
                <h3> Sports Events</h3>
                <p>We have rainy season sport events every years. <br>Every club members can participate.</p>

            </div>
            <div class="activity-col">
                <img src="image/basketball.png" alt="">
                <h3> Tranning Courses</h3>
                <p>Each club has tutorial courses for beginners. <br> Group training at every weekend.</p>

            </div>
            <div class="activity-col">
                <img src="image/tabletennis.jpg" alt="">
                <h3> Private Matches</h3>
                <p>You can make local matches with your partner. <br>We will make equals match making for same level.</p>

            </div>

        </div>

    </section>

    <!-----testimonials------>
    <section class="testimonials">


    </section>



    <section class="footer" id="footer">


        <div class="row">

            <div class="footer_rightcol">
                <a href="https://www.uit.edu.mm/">
                    <h3> <i class="fa-solid fa-envelope fa-2xl"></i> &nbsp;&nbsp;&nbsp;hr.admin@uit.edu.mm</h3>
                </a>
                <h3><i class="fa-solid fa-phone fa-2xl"></i>&nbsp;&nbsp;&nbsp;+95-1-9664254</h3>
                <h3><i class="fa-solid fa-phone fa-2xl"></i>&nbsp;&nbsp;&nbsp;+95-1-9664250</h3>
                <h3><i class="fa-solid fa-location-dot fa-2xl"></i> &nbsp;&nbsp;&nbsp;Parami Road, Hlaing Campus, Yangon, Myanmar</h3>

            </div>


            <div class="footer_leftcol">
                <a href="#header"><i class="fa-solid fa-arrow-up fa-2xl"></i></a>

            </div>

        </div>
    </section>
    <div class="logout">
        <a href="logout1.php">
            <button>Log out</button>
        </a>
    </div>
</body>

</html>