
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icon/icon.ico">
    <style class="cp-pen-styles">
    svg {
      width: 100px;
      display: block;
      margin: 40px auto 0;
    }
    .path {
      stroke-dasharray: 1000;
      stroke-dashoffset: 0;
    }
    .path.circle {
      -webkit-animation: dash 0.9s ease-in-out;
      animation: dash 0.9s ease-in-out;
    }
    .path.line {
      stroke-dashoffset: 1000;
      -webkit-animation: dash 0.9s 0.35s ease-in-out forwards;
      animation: dash 0.9s 0.35s ease-in-out forwards;
    }
    .path.check {
      stroke-dashoffset: -100;
      -webkit-animation: dash-check 0.9s 0.35s ease-in-out forwards;
      animation: dash-check 0.9s 0.35s ease-in-out forwards;
    }
    p {
      text-align: center;
      margin: 20px 0 60px;
      font-size: 1.25em;
    }
    p.success {
      color: #73AF55;
    }
    p.error {
      color: #D06079;
    }
    @-webkit-keyframes dash {
      0% {
        stroke-dashoffset: 1000;
      }
      100% {
        stroke-dashoffset: 0;
      }
    }
    @keyframes dash {
      0% {
        stroke-dashoffset: 1000;
      }
      100% {
        stroke-dashoffset: 0;
      }
    }
    @-webkit-keyframes dash-check {
      0% {
        stroke-dashoffset: -100;
      }
      100% {
        stroke-dashoffset: 900;
      }
    }
    @keyframes dash-check {
      0% {
        stroke-dashoffset: -100;
      }
      100% {
        stroke-dashoffset: 900;
      }
    }
    </style>



  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'> -->


    <title>KMITL Wallet - Result</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template300*162 -->
    <link href="scss/all.css" rel="stylesheet">
    <link href="scss/draw.css" rel="stylesheet">

  </head>

<body>
<div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">

            <div class="form text-center">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <div class="whitebg">
              <div class="container" >
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2" style="margin-bottom:40px">
  <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
  <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
</svg>

                <div class="row" style="margin-bottom:10px">
                  <div class="col-4 textRes" style="text-align:left;padding:5;">Topup</div>
                  <div class="col-8 textRes " style="text-align:right;padding:5;">11-11-2018</div>
                </div>

                <div class="row" style="margin-bottom:10px">
                  <div class="col-3 textRes"  style="text-align:left;padding:5;">From: </div>
                  <div class="col-9 textRes" style="text-align:right;padding:5;">Waritthon Sampantakit <br> 59011194 </div>
                </div>

                <div class="row" style="margin-bottom:10px">
                  <div class="col-3 textRes"  style="text-align:left;padding:5;">To: </div>
                  <div class="col-9 textRes" style="text-align:right;padding:5;">Waritthon Sampantakit <br> 59011194 </div>
                </div>

                <div class="row" style="margin-bottom:10px">
                  <div class="col-4 textRes"  style="text-align:left;padding:5;">Amount: </div>
                  <div class="col-8 textRes" style="text-align:right;padding:5;">0.00 ฿ </div>
                </div>





              </div>

              </div>
              <div class="row" style="margin-top:50px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <a href="menu.php">  <button class="btn btn-lg btn-primary btn-block inner" >Menu</button></a>
                </div>
                <div class="col-md-4"></div>
              </div>


              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
            </div>
          </div>
        </div>
      </div>
  </div>

</body>
</html>
