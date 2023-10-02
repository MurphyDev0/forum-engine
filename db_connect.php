<?php
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "forum-engine";

$conn = new mysqli($servername, $usernama, $pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successfully";
?>