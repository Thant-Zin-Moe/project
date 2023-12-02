<?php

include("multidb.php");

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="ttstyle.css">
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
    <section class="header">
        <nav>
            <a href="Table tennis.html"><img src="UIT-Logo-big.png" alt=""></a>
            <div class="nav-links">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Event</a></li>
                    <li><a href="">Location</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>Table Tennis Club</h1>

            <br><br>
            <form action="pp.php" method="post">
                <input type="submit" name="join1" class="hero" value="Join Club">
            </form>
        </div>

    </section>

    <!-------Events------>

    <section class="events">
        <h1>Events</h1>
        <div class="row">
            <div class="events-col">
                <img src="event1.jpg" alt="">
                <h3>Matches</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus natus iste aut suscipit nostrum
                    ipsa voluptatibus.</p>
            </div>
            <div class="events-col">
                <img src="event1.jpg" alt="">
                <h3>Activitys</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus natus iste aut suscipit nostrum
                    ipsa voluptatibus.</p>
            </div>
            <div class="events-col">
                <img src="event1.jpg" alt="">
                <h3>Blah Blah</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus natus iste aut suscipit nostrum
                    ipsa voluptatibus.</p>
            </div>
        </div>
    </section>
    <!-----Location------>
    <section class="campus">
        <h1>Our new campus</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
        <div class="row">
            <div class="campus-col">
                <img src="loca1.jpg" alt="">
                <div class="layer">
                    <h3>LONDON</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="loca2.jpg" alt="">
                <div class="layer">
                    <h3>NEW YORK</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="loca3.jpg" alt="">
                <div class="layer">
                    <h3>WASHINGTON</h3>
                </div>
            </div>
        </div>
    </section>

    <!------About us------>

    <section class="course">
        <h1>Course We offer</h1>
        <p>blah balh balh blah blahbalh balh blah </p>
        <div class="row">
            <div class="course-col">
                <h3>Club president</h3>
                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates nihil in dolorum magni doloribus
                    a nostrum corrupti praesentium labore consectetur
                    similique totam aut dignissimos doloremque, pariatur voluptatem aspernatur ipsa aperiam!</P>
            </div>
            <div class="course-col">
                <h3>Vice president</h3>
                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates nihil in dolorum magni doloribus
                    a nostrum corrupti praesentium labore consectetur
                    similique totam aut dignissimos doloremque, pariatur voluptatem aspernatur ipsa aperiam!</P>
            </div>
            <div class="course-col">
                <h3>Contacts</h3>
                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates nihil in dolorum magni doloribus
                    a nostrum corrupti praesentium labore consectetur
                    similique totam aut dignissimos doloremque, pariatur voluptatem aspernatur ipsa aperiam!</P>
            </div>
        </div>
        <section class="aboutus">
            <div class="aboutus-rightcol">
                <div>
                    <h3>University of Information Technology</h3>
                    <h3></h3>
                    <h3><a href="">+959576093287</a></h3>
                    <h3><a href="">+959394023947</a></h3>
                    <h3><a href="">uit.edu.mm</a></h3>
                </div>
            </div>
        </section>
</body>

</html>
