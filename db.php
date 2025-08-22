<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elearning";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "Connected to database successfully!";
}
?>