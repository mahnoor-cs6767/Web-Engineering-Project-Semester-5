<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "little_learner";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
