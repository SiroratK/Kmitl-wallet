<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/icon/icon.ico">

      <title>KMITL Wallet - Menu</title>

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template300*162 -->
      <link href="scss/all.css" rel="stylesheet">

      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
          <div class="card">
            <div class="container" style="margin-left:0;margin-top:10;z-index:5">
                  <script> document.write('<a class="back" href="javascript:history.back()"> < BACK </a>'); </script>
            </div>
              <div class="form text-center">
                <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <div class="container">
                <div id="customer" style="display:none">
                  <div class="row">
                    <div class="col-4 col-menu" onclick=location.href='scan.php'>
                      <img src ="images/project-img/project/Scan.svg" class="img-menu">
                    </div>
                    <div class="col-4 col-menu" onclick=location.href='topup.php'>
                      <img src ="images/project-img/project/topup.svg" class="img-menu">
                    </div>
                    <div class="col-4 col-menu" onclick=location.href='transfer.php'>
                      <img src ="images/project-img/project/transfer.svg" class="img-menu">
                    </div>
                  </div>
                </div>

                <div id="shop" style="display:block">
                  <div class="row">
                    <div class="col-4 col-menu" onclick=location.href='scan.php'>
                      <img src ="images/project-img/project/Scan.svg" class="img-menu">
                    </div>
                    <div class="col-4 col-menu" onclick=location.href='topup.php'>
                      <img src ="images/project-img/project/topup.svg" class="img-menu">
                    </div>
                    <div class="col-4 col-menu" onclick=location.href='transfer.php'>
                      <img src ="images/project-img/project/transfer.svg" class="img-menu">
                    </div>
                  </div>
                </div>

                <div class="row" >
                  <div class="col-4 col-menu" onclick=location.href='promotion.php'>
                    <img src ="images/project-img/project/promo.svg" class="img-menu">
                  </div>
                  <div class="col-4 col-menu" onclick=location.href='order.php'>
                    <img src ="images/project-img/project/order.svg" class="img-menu">
                  </div>
                  <div class="col-4 col-menu" onclick=location.href='order.php'> <!--wewrwerwerwer-->
                    <img src ="images/project-img/project/history.svg" class="img-menu">
                  </div>
                </div>
              </div>
            </div>
        </div>

        <script>
          function openType(typeMenu) {
            document.getElementById(typeMenu).style.display = "block";
          }
        </script>
    </body>
</html>
