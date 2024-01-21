<?php
$servername ="localhost";
$username = "root@localhost";
$password = "";
$dbname = "user_registration_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if (conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "connected successfully";
$conn->close();
?>