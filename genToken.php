<?php
    $conn = include('config/config.php');
    $token = generateRandomString();
    $msg = "SELECT `token` FROM `topup` WHERE `token` = '$token'";
    $result = mysqli_query($conn,$msg);
    $row = $result->fetch_assoc();
    $value = (int)$_POST["amount"];

    if ($row['token'] == NULL && $value>=0){
        $msg = "INSERT INTO `topup`(`token`, `value`) VALUES('$token', $value)";
        $query = mysqli_query($conn,$msg) or die (mysqli_error($conn));

    
        if($query){
            echo json_encode(array('status'=>'1','token'=>$token));
        }
        else{
            echo json_encode(array('status'=>'0','token'=>'fail 1'));
        }
    

    }
    
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
