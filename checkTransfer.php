<?php
    session_start();
    $_SESSION["action"] = "TRANSFER";
    $email = $_SESSION['email'];
    $conn = include('config/config.php');
    $msg = "SELECT `balance` FROM `userData` WHERE `Email`='".$_POST["transMail"]."'";
    $result = mysqli_query($conn,$msg) or die(mysqli_error($conn));
    $status ="fail";

    $row = $result ->fetch_assoc();
    if($email != $_POST["transMail"]){
        if (is_numeric($row['balance'])){
            $balance = (int)$row['balance'];
            $sql = "SELECT `balance` FROM `userData` WHERE Email='$email'";
            $query = mysqli_query($conn,$sql);
            $row2 = $query->fetch_assoc();
            $checkBalance = (int)$row2['balance'];
            if ($_POST["amount"] <= $checkBalance && $_POST["amount"] > 0){
                if($checkBalance >= $_POST["amount"]){
                    $_SESSION["amount"] =$_POST["amount"];
                    $_SESSION["user_to"] = $_POST["transMail"];
                    echo json_encode(array('status'=> 1,'msg' =>'all pass'));
                }
            }
            else {
            echo json_encode(array('status'=> 0 , 'msg'=>'fail'));
            }
        }
        else {
            echo json_encode(array('status'=> 0 , 'msg'=>'Wrong ID'));
        }
    }
    else {
        echo json_encode(array('status'=> 0 , 'msg'=>'Can not transfer money to account.'));
    }


?>
