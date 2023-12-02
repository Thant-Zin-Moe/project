<?php

include("db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Tennis Club member</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(https://th.bing.com/th/id/AnmmHjXxEhdib0Q480x360?&rs=1&pid=ImgDet);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            gap: 30px;
        }

        spam {
            color: #07b5e0;
            font-family: 'Playfair Display', serif;
            font-size: 3em;
            font-weight: 900;
        }

        table{
            border: 2px solid grey;
            color: white;
            padding: 10px;
        }
        table th{
            color: yellow;
            font-family: 'Playfair Display', serif;
            border: 1px solid grey;
            padding: 15px;
        }
        table td{
            border: 1px solid grey;
            padding: 10px;
            color: cyan;
        }
    </style>

</head>

<body>
</body>

</html>
<?php

$sql5 = mysqli_query($conn, "SELECT * FROM table_tennis WHERE email_send=1");
if (mysqli_num_rows($sql5) > 0) {
    echo "<spam>Table Tennis Club Members</spam>";
    while ($x = mysqli_fetch_assoc($sql5)) {
        echo "<table>
        <tr><th>Name</th><th>Roll Number</th><th>Email</th></tr>
        <tr><td>&nbsp; $x[name]</td>
        <td>Thanata-&nbsp; $x[roll_no]</td>
        <td>$x[email]</td>
        </tr></table>";
    }
}

?>