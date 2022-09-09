<?php
error_reporting(0);
    $servername = "localhost";
    $username ="root";
    $password = "";
    $database ="project";

    $con = mysqli_connect($servername,$username,$password,$database);
    if($con)
    {
         echo "Connected";
    }
    else
    {
        echo "Not Connected";
    }
?>