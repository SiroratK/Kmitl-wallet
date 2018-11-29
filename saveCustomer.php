<?php

    $conn = include('config/config.php');
    $msg = "SELECT MAX(shopID) FROM `userData`";
    $result = mysqli_query($conn,$msg);
    
    $sql = "SELECT `Email` FROM  `userData`  WHERE `Email` = '".$_POST["inputEmail"]."'";
    $query = mysqli_query($conn,$sql);
    $row = $query->fetch_assoc();
    $check = $row['Email'];
    if ($check == NULL || $check != $_POST["inputEmail"]){
        while ($row = $result->fetch_assoc()) {
            $num = $row['MAX(shopID)'];
        }
        $int = (is_numeric($_POST['inputPin']) ? (int)$_POST['inputPin'] : 0);
        $sql = "INSERT INTO userData (name,surname,shopName,Email,password,shopID,status,pinCode,balance)
        VALUES ('".$_POST["name"]."','".$_POST["surname"]."','None','".$_POST["inputEmail"]."','".$_POST["password"]."',
        $num+1,'Customer',$int,0)";
        


            $query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
            if($query){
                echo json_encode(array('status'=>'1','msg'=>'success'));
            }
            else{
                echo json_encode(array('status'=>'0','msg'=>'fail 1'));
            }
    }
    else {
        echo json_encode(array('status'=>'0','msg'=>'fail 2'));
    }
    
?>