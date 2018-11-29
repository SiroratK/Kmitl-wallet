<?

$host="localhost";
$uid = "wallet_admin";   
$pwd = "wallet123";  
$Database = "userData"; 

$connectionInfo = array( "UID"=>$uid,                            
                         "PWD"=>$pwd,                            
                         "Database"=>$databaseName); 

$conn = new mysql_connect($host,$uid,$pwd);
//$message = $conn->query("SELECT shopID FROM userData ORDER BY shopID DESC LIMIT 1")->fetch_object()->message;
  //  $SQL = "INSERT INTO 'userData' ('name', 'surname', 'shopName', 'Email', 'password', 'shopID','status','pinCode,balance')
    //        VALUES ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["shopName"]."'
      //      ,'".$_POST["inputEmail"]."','".$_POST["password"]."',$message+1,'".$_POST["inputPin"]."','shop','".$_POST["inputPin"]."',0)";
    //  mysql_select_db($Database);
   // $message = "SELECT * FROM `userData` WHERE 1";
   // $query = mysqli_query($conn,$SQL);
   // if($query) {
   //     echo ("Success");
   // }
   // else
   // {
   //     echo ("Fail");
    //}
   // mysqli_close($conn);

?>