<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "flowerpower";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (!$conn) {
    die("Connectie gefaald: " . mysqli_connect_error());
}