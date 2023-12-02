<?php

$conn = mysqli_connect("localhost", "root", "userdata");

if(!$conn){
    echo "Connection failed " .mysqli_connect_error() or die;
}