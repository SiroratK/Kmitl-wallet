<?php
      session_start();

      $amount = $_SESSION["amount"];
      $shopID = $_SESSION["shopID"];
      $user_to = $_SESSION["user_to"];
      
?>
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

      <title>KMITL Wallet - Pincode</title>

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrasp.min.css" rel="stylesheet">

      <!-- Custom styles for this template300*162 -->
      <link href="scss/all.css" rel="stylesheet">

      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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

                <p class="mb-3 topic">Enter your PIN Code</p>

                <svg height="40" width="145">
                      <circle cx="20" cy="10" r="5" class="dot" name="circle" id="circle0"/>
                      <circle cx="55" cy="10" r="5" class="dot" name="circle" id="circle1"/>
                      <circle cx="90" cy="10" r="5" class="dot" name="circle" id="circle2"/>
                      <circle cx="125" cy="10" r="5" class="dot" name="circle" id="circle3"/>
                </svg>
                <table align="center">
                  <tr>
                    <td><button type="button" class="button button5" id="pin1">1</button></td>
                    <td><button type="button" class="button button5" id="pin2">2</button></td>
                    <td><button type="button" class="button button5" id="pin3">3</button></td>
                  </tr>
                  <tr>
                    <td><button type="button" class="button button5" id="pin4">4</button></td>
                    <td><button type="button" class="button button5" id="pin5">5</button></td>
                    <td><button type="button" class="button button5" id="pin6">6</button></td>
                  </tr>
                  <tr>
                    <td><button type="button" class="button button5" id="pin7">7</button></td>
                    <td><button type="button" class="button button5" id="pin8">8</button></td>
                    <td><button type="button" class="button button5" id="pin9">9</button></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><button type="button" class="button button5" id="pin0">0</button></td>
                    <td><button type="button" class="button button5" id="del">del</button></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>


      <script>
        var pincodeA = ["", "", "", ""];
        var pincode;
        var i = 0;
        var circle = ["#circle0", "#circle1", "#circle2", "#circle3"];

          $("#pin1").click(function(){
            pincodeA[i] = "1";
            increaseDot()
          });
          $("#pin2").click(function(){
            pincodeA[i] = "2";
            increaseDot()
          });
          $("#pin3").click(function(){
            pincodeA[i] = "3";
            increaseDot()
          });
          $("#pin4").click(function(){
            pincodeA[i] = "4";
            increaseDot();
          });
          $("#pin5").click(function(){
            pincodeA[i] = "5";
            increaseDot()
          });
          $("#pin6").click(function(){
            pincodeA[i] = "6";
            increaseDot()
          });
          $("#pin7").click(function(){
            pincodeA[i] = "7";
            increaseDot()
          });
          $("#pin8").click(function(){
            pincodeA[i] = "8";
            increaseDot()
          });
          $("#pin9").click(function(){
            pincodeA[i] = "9";
            increaseDot()
          });
          $("#pin0").click(function(){
            pincodeA[i] = "0";
            increaseDot()
          });
          $("#del").click(function(){
            if (i > 0){
              i--;
              $(circle[i]).removeClass("dot2");
              $(circle[i]).addClass("dot");
            }
          });

          function increaseDot(){
            if (i < 4) {
              $(circle[i]).addClass("dot2");
              i++;
              if (i == 4){
                pincode = pincodeA[0] + pincodeA[1] + pincodeA[2] + pincodeA[3];
                $(document).ready(function(){
                
                  var data = <?php echo json_encode(array('amount'=>$amount,'shop'=>$shopID,'user_to'=>$user_to)) ?>;
                  data.pincode = pincode
                  alert(data.user_to+" "+data.amount+" "+data.pincode);
                  $.ajax({
                    type : "POST",
                    dataType : "json",
                    url : 'checkPin.php',
                    data : data,
                    success : function(data){
                      if (data.status != 1){
                      alert(data.msg)
                      }
                      else {
                        alert(data.msg)
                        document.location.href = "confirm.php";

                      }
                    }
                  });
                });
              }
            }
          }
      </script>

    </body>
</html>
