<?php

include("connect2.php");
header('Content-Type: application/json');

$sql = "INSERT INTO customer (CustomerID, Name, Email, CountryCode, Budget, Used)
        VALUES ('".$_POST["txtCustomerID"]."','".$_POST["txtName"]."','".$_POST["txtEmail"]."'
        ,'".$_POST["txtCountryCode"]."','".$_POST["txtBudget"]."','".$_POST["txtUsed"]."')";
$query = mysql_query($sql);
    if($query) {
        $sql="SELECT 'name','surname','Email','balence' WHERE name=".$_POST["txtEmail"]."";
        $query = mysql_query($sql);
        while ( $record = mysql_fetch_array($query)){
            $name = $record["name"];
            $surname = $record["surname"];
            $email = $record["Email"];
            $balance = $record["balance"];
        }
        echo json_encode(array('name' => $name,'surname'=>$surname,'email'=>$email,'message'=> 'Record add successfully'));
    }
    else
    {   
        echo json_encode(array('message'=> 'Error insert data!'));
    }


?>