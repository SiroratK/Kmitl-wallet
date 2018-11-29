<?

$host='mysql56';
$uid = 'wallet_admin';   
$pwd = 'wallet123';  
$Database = 'wallet_user'; 

//$conn = mysql_connect($host,$uid,$pwd,$Database);
$con = mysql_connect($host,$uid, $pwd)or die(mysql_error());
$db = mysql_select_db($Database,$con)or die(mysql_error());
  //  $SQL = "INSERT INTO 'userData' ('name', 'surname', 'shopName', 'Email', 'password', 'shopID','status','pinCode,balance')
    //        VALUES ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["shopName"]."'
      //      ,'".$_POST["inputEmail"]."','".$_POST["password"]."',$message+1,'".$_POST["inputPin"]."','shop','".$_POST["inputPin"]."',0)";
    //  mysql_select_db($Database);
    $message = "SELECT * FROM `userData`";
    $result = mysql_query($message,$con) or die(mysql_error());
    while($record = mysql_fetch_array($result))
    {
        if (!$result) { // add this check.
            die('Invalid query: ' . mysql_error());
        }
        else{
            echo $record["pinCode"];
        }
    }

     //$query = mysql_query($message);
   // mysqli_close($conn);
   ?>