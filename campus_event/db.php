<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "campus_event";
$port = "3307";

$conn = mysqli_connect($servername, $username, $password, $database,$port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>