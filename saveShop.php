<?php
    $conn = include('config.php');
    $message = $conn->query("SELECT shopID FROM userData ORDER BY shopID DESC LIMIT 1")->fetch_object()->message;
    $SQL = "INSERT INTO 'userData' ('name', 'surname', 'shopName', 'Email', 'password', 'shopID','status','pinCode,balance')
            VALUES ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["shopName"]."'
            ,'".$_POST["inputEmail"]."','".$_POST["password"]."',$message+1,'".$_POST["inputPin"]."','shop','".$_POST["inputPin"]."',0)";
    $query = mysqli_query($conn,$SQL);
    if($query) {
        echo json_encode(array('status' => '1','message'=> 'Record add successfully'));
    }
    else
    {
        echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
    }
    mysqli_close($conn);
?>