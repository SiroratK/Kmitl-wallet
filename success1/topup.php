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

    <title>KMITL Wallet - Top up</title>

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
            <form action="" name="pincodee" method="post" class="form text-center">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <!-- <label for="ref" class="sr-only">Ref1.</label>
              <input type="text" id="ref" class="form-control form-control-bottom" placeholder="Ref1." required autofocus> -->

              <div class="input-group">
                <label for="amountTopup" class="sr-only">amount</label>
                <input type="number" step="0.01" min="0.00" id="amountTopup" class="form-control form-control-bottom" placeholder="Amount" required autofocus>

                <input hidden type="text" id="page" value="topup" name="page">

                <span class="input-group-addon">฿</span>
              </div>

              <br>
              <button formaction="pincode.php" id="topupBtn" style="max-width: 40%; align-item: center; margin:auto" class="btn btn-lg btn-primary btn-block" type="submit">TOP UP</button>
              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
