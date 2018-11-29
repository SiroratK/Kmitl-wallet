<?php
    session_start();

    $email = $_SESSION["email"];
    $conn = include('config/config.php');
    $msg = "SELECT `pinCode`,`name`,`surname`,`shopID`,`balance` FROM `userData` WHERE `Email`='$email'";
    $result = mysqli_query($conn,$msg) or die(mysqli_error($conn));
    $row = $result ->fetch_assoc();

    $pin = $row["pinCode"];
    $fullname = $row["name"]+" "+$row["surname"];
    $userID = $row["shopID"];
    $balance = (int)$row["balance"];

    $money = (int)$_POST["amount"];
    if ($pin == $_POST["pincode"]){
        if ($_SESSION["action"]=="PAY"){
            $msg = "UPDATE `userData` SET   `balance` = `balance`+$money WHERE `shopID` = '".$_POST["shop"]."'";
            $result = mysqli_query($conn,$msg) or die(mysqli_error($conn));
            $sql ="SELECT `name`,`surname`,`shopID` FROM `userData` WHERE `shopID`='".$_POST["shop"]."'";
            $query = mysqli_query($conn,$sql);
            $row2 = $query ->fetch_assoc();

            $nameShop = $row2["name"]+" "+$row2["surname"];
            $shopID = $row2["shopID"];

            $_SESSION["user_from"] = $fullname;
            $_SESSION["user_to"] = $nameShop;
            $_SESSION["id_from"] = $userID;
            $_SESSION["id_to"] = $shopID;
            $msg = "UPDATE `userData` SET   `balance` = `balance`-$money WHERE `Email`='$email'";
            $result2 = mysqli_query($conn,$msg) or die(mysqli_error($conn));
           /* $msg = "INSERT INTO`shopLog`(
                `shopID`,
                `Email`,
                `amount`,
                `dateandTime`,
                `Name`
              )
            VALUES(
              '.$userID.',
              '.$email.',
              '.$money.',
              'date',
              '.$fullname.'
            )";
            $log = mysqli_query($conn,$msg) or die(mysqli_error($conn));*/
            echo json_encode(array('status'=> 1,'msg'=>'Pay success'));

        }
        else if($_SESSION["action"] == "TRANSFER"){
            $putInBalance = (int)$_SESSION["amount"];
            $update = "UPDATE `userData`SET `balance` = `balance`+$putInBalance WHERE Email = '".$_POST["user_to"]."'";
            mysqli_query($conn,$update);
            $update = "UPDATE `userData`SET `balance` = `balance`-$putInBalance WHERE Email = '$email'";
            mysqli_query($conn,$update);
            $update = "SELECT `Email` FROM `userData` WHERE Email = '".$_POST["user_to"]."'";
            $result3 = mysqli_query($conn,$update);
            $row3 = $result3 ->fetch_assoc();

            $_SESSION["user_from"] = $fullname;
            $_SESSION["user_to"] = $row3["Email"];
            $_SESSION["id_from"] = $userID;
          /*  $msg = "INSERT INTO`shopLog`(
                `shopID`,
                `Email`,
                `amount`,
                `dateandTime`,
                `Name`
              )
            VALUES(
              '.$userID.',
              '.$email.',
              '.$putInBalance.',
              'date',
              '.$fullname.'
            )";
            $log = mysqli_query($conn,$msg) or die(mysqli_error($conn));*/
            echo json_encode(array('status'=> 1,'msg'=>'Transfer success'));
        }
        else{
            echo json_encode(array('status'=>0,'msg'=>'fail'));
        }
    }

        else{
            echo json_encode(array('status'=>0,'msg'=>$pin));
        }









?>
