<?php
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = "userData";
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $shopName = $_POST['shopName'];
    $status = $_POST['status'];
    $email = $_POST['inputEmail'];
    $password = md5($_POST['password']);
    $confirmpassword = md5($_POST['confirmPassword']);
    $pincode = $_POST['inputPin'];

           $sql = "INSERT INTO $db (name, surname, shopName,Email, password,pinCode,status) "
                  . "VALUES ('$name', '$surname', '$shopName', '$email','$password','$pincode','$status')";

                $_SESSION['message'] = "Registration Successful";

            }
            else {
                $_SESSION['message'] = "Error: User account could not be
created. Please try again.";
            }
            mysqli_close($mysqli);




?>
