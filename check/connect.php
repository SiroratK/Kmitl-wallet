<?php
$servername = "webservhost";
$username = "wallet_admin";
$password = "wallet123";
$dbname = "wallet_user";
$email = "w@kmitl.ac.th";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
