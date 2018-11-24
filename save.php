<?php
header('Content-Type: application/json');
$serverName = "localhost";
$userName = "wallet";
$userPassword = "wallet123";
$dbName = "userData";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$sql = "INSERT INTO userData (name, surname, shopName, Email, password, shopID,status,pinCode,balance)
VALUES ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["inputEmail"]."'
,'".$_POST["password"]."','".$_POST["inputPin"]."')";
$query = mysqli_query($conn,$sql);
if($query) {
echo json_encode(array('status' => '1','message'=> 'Record add successfully'));
}
else
{
echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
}
mysqli_close($conn);

?>