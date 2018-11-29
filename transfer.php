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
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <title>KMITL Wallet - Transfer</title>

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
            <form action="javascript:" class="form text-center" id ="frm" name ="frm" method ="POST">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <label for="transID" class="sr-only">KMITL ID</label>
              <input type="email" id="transMail" name="transMail" class="form-control form-control-bottom" 
                title="KMITL is only number" placeholder="Email address" required autofocus>

              <div class="input-group">
                <label for="amount" class="sr-only">amount</label>
                <input type="number" step="0.01" min="0.00" id="amount" name="amount" class="form-control form-control-bottom" placeholder="Amount" required autofocus>
                <span class="input-group-addon">฿</span>
              </div>

              <br>
              <button style="max-width: 40%; align-item: center; margin:auto" class="btn btn-lg btn-primary btn-block" type="submit">TRANSFER</button>
              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script >



                $("#frm").submit(function () {
                    $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: $("#frm").serialize(),
                    url: 'checkTransfer.php',
                    success: function(data) {
                      if (data.status == 1 ){
                        alert (data.msg);
                        document.location.href = "pincode.php";

 
                      }
                      else {
                        alert(data.msg);
                      }
                    }

                    });
                });
    </script>
  </body>
</html>
