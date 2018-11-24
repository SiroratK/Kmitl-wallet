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

    <title>KMITL Wallet - Change Password</title>

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
            <form class="form text-center">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <p class="mb-3 topic">CHANGE PASSWORD</p>

              <label for="currentPwd" class="sr-only">Current password</label>
              <input type="password" id="currentPwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                class="form-control" placeholder="Current password" required autofocus>

              <label for="newPwd" class="sr-only">New password</label>
              <input type="password" id="newPwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                class="form-control" placeholder="New password" required>

              <label for="ConfirmPwd" class="sr-only">Confirm Password</label>
              <input type="password" id="ConfirmPwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                class="form-control" placeholder="Confirm Password" required>

              <br>
              <button formaction="showInfo.php" class="btn btn-lg btn-primary btn-block inner" type="submit">Confirm</button>
              <a href="showInfo.php" class="btn btn-lg btn-primary btn-block" role="button">Cancel</a>

              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
