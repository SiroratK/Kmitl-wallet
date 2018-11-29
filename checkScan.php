<?php
    session_start();
    $conn = include('config/config.php');
    $msg = "SELECT `balance` FROM `userData` WHERE `shopID`='".$_POST["shopID"]."'";
    $result = mysqli_query($conn,$msg) or die(mysqli_error($conn));
    $row = $result ->fetch_assoc();
    $balance = (int)$row['balance'];
    if ($balance != NULL || $balance >= 0){
        $_SESSION["shopID"] = $_POST["shopID"];
        $status = 1;
        echo json_encode($_POST["shopID"]);
    }
    else {
        $status = 0;
        echo json_decode($status);
    }


    


?>
