<?php
	mysql_connect("webservhost","wallet_admin","wallet123");
	mysql_select_db("wallet_user");

	$strSQL = "SELECT * FROM userData WHERE email = '".trim($_POST['inputEmail'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

  $db = "userData";
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $shopName = $_POST['shopName'];
  $status = $_POST['status'];
  $email = $_POST['inputEmail'];
  $password = md5($_POST['password']);
  $confirmpassword = md5($_POST['confirmPassword']);
  $pincode = $_POST['inputPin'];
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{

		$strSQL = "INSERT INTO userData (name, surname, shopName,Email, password,pinCode,status) VALUES ('$name', '$surname', '$shopName', '$email','$password','$pincode','$status')";
		$objQuery = mysql_query($strSQL);

		echo "Register Completed!<br>";

		echo "<br> Go to <a href='login.php'>Login page</a>";

	}

	mysql_close();
?>
