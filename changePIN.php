<?php
session_start();
include("config/connect.php");
include("config/config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form
   $newPincode = mysqli_real_escape_string($db,$_POST['newPIN']);
   $currentPincode = mysqli_real_escape_string($db,$_POST['currentPIN']);
   $confirmPincode = mysqli_real_escape_string($db,$_POST['ConfirmPIN']);
   $email = $_SESSION['email'];


   $sql = "SELECT pinCode FROM userData WHERE Email = '$email' ";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   $getPincode =  $row["pinCode"];

        if(!$result)
        {
        echo "The username you entered does not exist";
        }

        else if($currentPincode!= $getPincode)
        {
        echo "You entered an incorrect pinCode";
        }
        if($currentPincode== $getPincode){

          $kiki=mysqli_query($conn,"UPDATE userData SET pinCode='$newPincode' WHERE Email ='$email'");
        }
        if($kiki)
        {
        echo "Congratulations You have successfully changed your pinCode";
        }
       else
        {
       echo "PIN do not match";
       }
     }
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icon/icon.ico">

    <title>KMITL Wallet - Change PIN</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template300*162 -->
    <link href="scss/all.css" rel="stylesheet">

  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="container" style="margin-left:0;margin-top:10;z-index:5">
                  <script> document.write('<a class="back" href="javascript:history.back()"> < BACK </a>'); </script>
            </div>
            <form class="form text-center" method="POST">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <p class="mb-3 topic">CHANGE PIN</p>

              <label for="currentPIN" class="sr-only">Current PIN</label>
              <input type="password" name="currentPIN" id="currentPIN" pattern="[0-9]{4}"
                title="PIN code must be 4 digits of number" maxlength="4"
                class="form-control" placeholder="Current PIN" required autofocus>

              <label for="newPIN" class="sr-only">New PIN</label>
              <input type="password" name="newPIN" id="newPIN" pattern="[0-9]{4}"
                title="PIN code must be 4 digits of number" maxlength="4"
                class="form-control" placeholder="New PIN" required>

              <label for="ConfirmPIN" class="sr-only">Confirm PIN</label>
              <input type="password" id="ConfirmPIN" pattern="[0-9]{4}"
                title="PIN code must be 4 digits of number" maxlength="4"
                class="form-control" placeholder="Confirm PIN" required>

              <br>
              <button formaction="" class="btn btn-lg btn-primary btn-block inner" type="submit">Confirm</button>
              <a href="showInfo.php" class="btn btn-lg btn-primary btn-block" role="button">Cancel</a>

              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
