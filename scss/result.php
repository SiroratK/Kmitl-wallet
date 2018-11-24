
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icon/icon.ico">

    <title>KMITL Wallet - Result</title>



    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template300*162 -->
    <link href="scss/all.css" rel="stylesheet">

  </head>

<body >
<div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">

            <div class="form text-center">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <div class="check_mark">
                <div class="sa-icon sa-success animate">
                  <span class="sa-line sa-tip animateSuccessTip"></span>
                  <span class="sa-line sa-long animateSuccessLong"></span>
                  <div class="sa-placeholder"></div>
                  <div class="sa-fix"></div>
                </div>
              </div>
              <center>
                <button id="restart">Restart Animation</button>
              </center>



              </div>

              </div>


              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
            </div>
          </div>
        </div>
      </div>
  </div>

<script>$("button").click(function() {
  $(".sa-success").addClass("hide");
  setTimeout(function() {
    $(".sa-success").removeClass("hide");
  }, 10);
});
</script>


</body>
</html>
