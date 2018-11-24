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

    <title>KMITL Wallet - Scan</title>

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

              <div class="container">
              <img class="mb-4" src="images/scan.png" alt="scan" style="max-width:200px; width:100%; height:auto; margin-bottom: 0px !important">
</div>
              <label for="shopId" class="sr-only">SHOP ID</label>
              <input type="text" id="shopId" pattern="[0-9]{8}" maxlength="8" 
              class="form-control form-control-bottom" placeholder="SHOP ID" required autofocus>

              <br>
              <button formaction="amount.php" style="max-width: 40%; align-item: center; margin:auto" class="btn btn-lg btn-primary btn-block" type="submit">ENTER</button>

              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
