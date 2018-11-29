<?php
    session_start();
    $email = $_SESSION['email'];
    $conn = include('config/config.php');
    $num = (int)$_POST["amount"];
    $msg = "UPDATE `userData` SET `balance` = `balance`-$num WHERE `Email`='$email'";
    if($num > 0){
    $result = mysqli_query($conn,$msg) or die(mysqli_error($conn));
    if($result){
        echo json_encode(1);
    }
    else{
        echo json_encode(0);
    }
    }
    else{
        echo json_encode(0);
    }
    


?>
