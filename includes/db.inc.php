<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online-shop";
$conn = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);
if (!$conn) {
    die ("Error connecting to database: " . mysqli_connect_error());
}
