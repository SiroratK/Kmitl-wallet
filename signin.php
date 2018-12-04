<?php
   session_start();
   include("config/connect.php");



   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myemail = mysqli_real_escape_string($db,$_POST['inputEmail']);
      $mypassword = mysqli_real_escape_string($db,$_POST['inputPassword']);
      $inputPass = $_POST['inputPassword'];
      $salt      = 'ceKmitlWalleteiei2018';
      $password_hashed    = hash('sha256', $inputPass . $salt);

      $sql = "SELECT * FROM userData WHERE Email = '$myemail' and password = '$password_hashed    '";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $mystatus = $row["status"];
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION["email"] = $myemail;
         $_SESSION["status"] = $mystatus;

         header("location: showInfo.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "<script>alert('Your Login Name or Password is invalid')</script>";
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

    <title>KMITL Wallet - Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template300*162 -->
    <link href="scss/all.css" rel="stylesheet">
    <script src="all.js"></script>

  </head>

  <body>

    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- <div class="container" style="margin-left:0;margin-top:10;z-index:5">
                  <script> document.write('<a class="back" href="javascript:history.back()"> < BACK </a>'); </script>
            </div> -->
            <form class="form text-center" method="POST">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="inputPassword" id="inputPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                class="form-control" placeholder="Password" required>

              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>

              <button formaction="" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              <a href="register.php" class="btn btn-lg btn-primary btn-block" role="button">Register</a>
              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- <script>
      $( document ).ready(function() {
        alert($_SESSION['Email']);
      });
    </script> -->
  </body>
</html>
