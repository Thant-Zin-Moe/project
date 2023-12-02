<!-- <!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Feedback.css">
</head>
<body>
  <div>
    <h1>Contant Us</h1>

  </div>
  <h2>FEED BACK FORM</h2>
  <div class="container">
    <form>
      <div class="row">
        <div class="col-25">
          <label for="feed_back">Feed Back</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Write your feedback.." style="height:200px"></textarea>
        </div>
      </div>
      <div class="col">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>

</body>

</html> -->
<?php

include("feedback.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  <title>Document</title>
  <style>
    body {
      background-color: rgba(23, 53, 75, 0.368);
      background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url("photo.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      flex-direction: column;
      gap: 30px;
      color: beige;
      font-family: 'Playfair Display', serif;
    }

    ::placeholder {
      font-family: 'Playfair Display', serif;
    }

    .mid {
      width: 60%;
      height: 90%;
      background-color: rgba(137, 43, 226, 0.084);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      flex-direction: column;
      gap: 30px;
      margin-left: 240px;
      
    }

    h1 {
      padding: 3%;
      text-align: center;
    }

    .left {
      float: left;
      margin-left: 5%;
      text-align: center;
    }
    .left input {
      margin: 20px;
      margin-top: 250px;
      border-radius: 10px 5px 10px 5px;
      font-size: 1em;
    }

    .right {
      float: right;
      width: 50%;
      height: 70%;
    }

    .rig {
      width: 320px;
      height: 300px;
      display: flex;
      border: transparent;
      padding: 5px;

    }

    input[type=submit]:hover {
      background-color: #344698;
      font-family: 'Playfair Display', serif;
    }

    textarea,
    input[type=text],
    [type=email] {
      font-family: 'Playfair Display', serif;
    }
    .send{
      margin-bottom: 0;
      float: bottom;
    }
    .send input{
      padding: 10px;
      border-radius: 10px 5px 10px 5px;
      font-size: 1em;
      font-family: 'Playfair Display', serif;
    }
    .div1{
      width: 100%;
      height: 100%;
    }
    .lef{
      float: left;
    }
    .lef a span{
      color: green;
      font-size: 1em;
    }
  </style>
</head>

<body>
  <div class="div1">
  <div class="lef">
    <a href="project1.html"><span>Back to previous page</span></a>
  </div>
  <div class="mid">
    <h1>Contant Us</h1>
    <form action="" method="post">
      <div class="left">
        <h2>Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15273.618021955277!2d96.1352775!3d16.855873!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1936f625d4ba7%3A0x9676670831769962!2sUniversity%20of%20Information%20Technology(UIT)!5e0!3m2!1sen!2smm!4v1694279043913!5m2!1sen!2smm" width="150" height="150" allowfullscreen="no" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
      <div class="right">
        &emsp;Name&emsp; :&emsp;<input type="text" placeholder="name" name="name" size="32"><br><br>
        &emsp;E-mail&emsp;:&emsp;<input type="email" placeholder="email" size="31" name="email" required="required"><br><br>
        <div class="rig">
          <div style="margin-top: 0;">
            feedback&emsp;:&emsp;
          </div>
          <div style="float: left;">
            <textarea cols="31" rows="15" name="content" placeholder="Write your feedback.."></textarea>
          </div>
        </div>
        <div class="send">
      <input type="submit" value="send" name="over">
      </div>
      </div>


    </form>
  </div>
  </div>
</body>

</html>