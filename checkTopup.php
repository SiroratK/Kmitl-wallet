<?php
    session_start();
    $email = $_SESSION['email'];
    $conn = include('config/config.php');
    $msg = "SELECT `token`,`value` FROM `topup` WHERE `token` ='".$_POST["tokenTopup"]."'";
    $result = mysqli_query($conn,$msg);
    $row = $result->fetch_assoc();
    $check = $row['token'];
    $value = (int)$row['value'];
    if($value >= 0){
        if ($check != NULL ){
            $sql = "DELETE FROM `topup` WHERE `token`='".$_POST["tokenTopup"]."'";
            mysqli_query($conn,$sql);
            $sql = "UPDATE `userData` SET `balance` = `balance`+$value  WHERE `Email` = '$email'";
            $query = mysqli_query($conn,$sql) or die (mysqli_error($conn));

            if($query){
                echo json_encode(array('status'=>'1','msg'=>'Topup success'));
            }
            else{
                echo json_encode(array('status'=>'0','msg'=>'fail 1'));
            }
        }
        else {
            echo json_encode(array('status'=>'0','msg'=>'fail 2'));
        }
    }
    else{
        echo json_encode(array('status'=>'0','msg'=>'fail 3'));

    }

?>
