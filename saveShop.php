<?php
    $conn = include('config/config.php');
    $msg = "SELECT MAX(shopID) FROM `userData`";
    $result = mysqli_query($conn,$msg);
    $sql = "SELECT `Email` FROM  `userData`  WHERE `Email` = '".$_POST["inputEmailS"]."'";
    $query = mysqli_query($conn,$sql);
    $row = $query->fetch_assoc();
    $check = $row['Email'];


    if ($check == NULL || $check != $_POST["inputEmailS"]){
        $sql = "SELECT `shopName` FROM  `userData`  WHERE `shopName` = '".$_POST["shopNameS"]."'";
        $query = mysqli_query($conn,$sql);
        $row = $query->fetch_assoc();
        if ($row['shopName'] == NULL || $row['shopName'] != $_POST["shopNameS"]){
            while ($row2 = $result->fetch_assoc()) {
                $num = $row2['MAX(shopID)'];

            }
            $int = (is_numeric($_POST['inputPinS']) ? (int)$_POST['inputPinS'] : 0);
            $sql = "INSERT INTO userData (name,surname,shopName,Email,password,shopID,status,pinCode,balance)
            VALUES ('".$_POST["nameS"]."','".$_POST["surnameS"]."','".$_POST["shopNameS"]."','".$_POST["inputEmailS"]."','".$_POST["passwordS"]."',
            $num+1,'Shop',$int,0)";
        
            $query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
            if($query){
                echo json_encode(array('status'=>'1','msg'=>'success'));
            }
            else{
                echo json_encode(array('status'=>'0','msg'=>'fail 1'));
            }
        }
        else {
            echo json_encode(array('status'=>'0','msg'=>'fail2'));
        }
    }
    else {
        echo json_encode(array('status'=>'0','msg'=>'fail 3'));
    }

?>