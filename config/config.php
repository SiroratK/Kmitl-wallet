<?php
$username="wallet_admin";
$password="wallet123";
$host="webservhost";
$database="wallet_user";


/*try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}*/
$conn = mysqli_connect($host,$username,$password,$database) or die(mysql_error());
return $conn;



?>
