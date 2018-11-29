<?php
   session_start();
   include("config/connect.php");


   $email = $_SESSION["email"];
   $balance = 0;

      // username and password sent from for

      $sql = "SELECT * FROM userData WHERE Email = '$email'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $mystatus = $row["status"];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
        $balance = $row["balance"];

      }else {
         $error = "Your are not Login ";

      }

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icon/icon.ico">

    <title>KMITL Wallet - Show Balance</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template300*162 -->
    <link href="scss/all.css" rel="stylesheet">

    <style>
    .inload {
      z-index:1000;
      position:absolute;
      margin:auto;
      left:0;
      right:0;
      margin-top:50px;


    }
    </style>
  </head>

<body>
<div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="container" style="margin-left:0;margin-top:10;z-index:5">
              <script>document.write('<a class="back" href="logout.php"> < Log out </a>');</script>
            </div>
            <div class="form text-center">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <div class="container" align="center" >
              <center>
                <p id="showBalance" class="textRes inload"></p>
              </center>
              <div class="loader" > </div>
            </div>
            <div class="row" style="margin-top:50px;">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <a href="menu.php">  <button class="btn btn-lg btn-primary btn-block inner" >Main Menu</button></a>
              </div>
              <div class="col-md-4"></div>
            </div>

            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-4" style="margin-top:10px;">
                  <a href="changePass.php"><button style="align-item: center; margin:auto" class="btn btn-lg btn-primary btn-block">Change Password</button></a>
              </div>
              <div class="col-md-4" style="margin-top:10px;">
                  <a href="changepin.php"><button style="align-item: center; margin:auto" class="btn btn-lg btn-primary btn-block" type="submit">Change PIN Code</button></a>
              </div>
              <div class="col-md-2"></div>
            </div>

            <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
          </div>
        </div>
      </div>
  </div>
  <script type="text/javascript">
     var balance2 = <?php echo json_encode($balance) ?>;
     document.getElementById("showBalance").innerHTML = "Balance<br>"+balance2+" ฿";
  </script>
</body>
</html>
