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

    <title>KMITL Wallet - Register</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template300*162 -->
    <link href="scss/all.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="container" style="margin-left:0;margin-top:10;z-index:5">
              <script> document.write('<a class="back" href="javascript:history.back()"> < BACK </a>'); </script>
            </div>
            <div class="form text-center">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <div class="container" style="margin-bottom: 2rem">
                <div class="row">
                  <div class="col" style="padding: 0">
                    <a href="javascript:void(0)" id="cusTab" onclick="openType(event, 'customer');" >
                      <div class="tab tablink tab-bottombar tab-bottombar-org">CUSTOMER</div>
                    </a>
                  </div>
                  <div class="col" style="padding: 0">
                    <a href="javascript:void(0)" id="shopTab" onclick="openType(event, 'shop');">
                      <div class="tab tablink tab-bottombar">SHOP</div>
                    </a>
                  </div>
                </div>
              </div>

              <div id="customer" class="typeReg" style="display:block">
                <form action="javascript:" name="frmMainCustomer" id="frmMainCustomer" method="post">
                  <label for="name" class="sr-only">Name</label>
                  <input type="text" id="name" name="name" class="form-control" pattern="[A-Za-z]{2,}" maxlength="20"
                    title="Name must contain at least 2 characters" placeholder="Name" required autofocus>

                  <label for="surname" class="sr-only">Surname</label>
                  <input type="text" id="surname" name="surname" class="form-control" pattern="[A-Za-z]{2,}" maxlength="20"
                    title="Surname must contain at least 2 characters" placeholder="Surname" required>

                  <label for="inputEmail" class="sr-only">Email address</label>
                  <input type="email" id="inputEmail" name="inputEmail" class="form-control" pattern="[a-zA-Z0-9._-]+@+(k|K)+(m|M)+(i|I)+(t|T)+(l|L)+.(a|A)+(c|C)+.(t|T)+(h|H)$"
                  title="E-mail must use @kmitl.ac.th domain" placeholder="Email address" required>

                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    class="form-control" placeholder="Password" required>

                  <label for="confirmPassword" class="sr-only">Confirm Password</label>
                  <input type="password" id="confirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    class="form-control" placeholder="Confirm Password" required>

                  <label for="inputPin" class="sr-only">PIN Code</label>
                  <input type="password" id="inputPin" name ="inputPin" pattern="[0-9]{4}" title="PIN code must be 4 digits of number"
                    maxlength="4" class="form-control" placeholder="PIN Code" required>

                  <!-- <input type="text" id="status" value="customer" name="status" class="sr-only" disabled="disabled"> -->
                  <button  class="btn btn-lg btn-primary btn-block" type="submit" id="btnSendCustomer">Create your account</button>
                </form>
              </div>

              <div id="shop" class="w3-container typeReg" style="display:none">
                <form action="javascript:" name="frmMainShop" id="frmMainShop" method="post" >
                  <label for="name" class="sr-only">Name</label>
                  <input type="text" id="nameS" name="nameS" class="form-control" pattern="[A-Za-z]{2,}" maxlength="20"
                    title="Name must contain at least 2 characters" placeholder="Name" required autofocus>

                  <label for="surname" class="sr-only">Surname</label>
                  <input type="text" id="surnameS" name ="surnameS" class="form-control" pattern="[A-Za-z]{2,}" maxlength="20"
                    title="Surname must contain at least 2 characters" placeholder="Surname" required>

                  <label for="shopNeme" class="sr-only">Shop's name</label>
                  <input type="text" id="shopNameS" name = "shopNameS" class="form-control" pattern="[^'\x22x27x3Cx3Ex7Bx7Dx5Bx5D]{2,}" maxlength="40"
                    title="Shop's name must not contain <, >, ', &quote, {, }, [, ],number" placeholder="Shop's name" required>

                  <label for="inputEmail" class="sr-only">Email address</label>
                  <input type="email" id="inputEmailS" name="inputEmailS" class="form-control" placeholder="Email address" required>

                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="passwordS" name ="passwordS" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    class="form-control" placeholder="Password" required>

                  <label for="confirmPassword" class="sr-only">Confirm Password</label>
                  <input type="password" id="confirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    class="form-control" placeholder="Confirm Password" required>

                  <label for="inputPin" class="sr-only">PIN Code</label>
                  <input type="password" id="inputPinS" name ="inputPinS" pattern="[0-9]{4}" title="PIN code must be 4 digits of number"
                    maxlength="4" class="form-control" placeholder="PIN Code" required>

                  <!-- <input type="text" id="statusS" value="shop" name ="statusS" class="sr-only" disabled="disabled"> -->
                  <button  class="btn btn-lg btn-primary btn-block" type="submit" name ="btnSendShop" id="btnSendShop">Create your account</button>
                </form>
              </div>
              <br>
              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script >
                $("#frmMainShop").submit(function () {
                  alert($("#frmMainShop").serialize());
                    $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: $("#frmMainShop").serialize(),
                    url: 'saveShop.php',
                    success: function(data) {
                    if(data.status == 1){
                        alert("Successfully");
                        document.location.href = "signin.php";
                    }
                    else{
                      alert(data.msg);
                    }

                }
                    });
                });
    $("#frmMainCustomer").submit(function () {
      alert($("#frmMainCustomer").serialize());
        $.ajax({
            type: "POST",
            dataType :"json",
            url: "saveCustomer.php",
            data : $("#frmMainCustomer").serialize(),
            success: function(data) {
                    if(data.status == 1){
                        alert("Successfully");
                        document.location.href = "signin.php";
                    }
                    else{
                      alert(data.msg);
                    }

                }
        });
    });
      var password = document.getElementById("password")
        , confirmPassword = document.getElementById("confirmPassword");

      function validatePassword(){
        if(password.value != confirmPassword.value) {
          confirmPassword.setCustomValidity("Passwords Don't Match");
        } else {
          confirmPassword.setCustomValidity('');
        }
      }

      password.onchange = validatePassword;
      confirmPassword.onchange = validatePassword;
      confirmPassword.onkeyup = validatePassword;

      function openType(evt, regType) {
        var i, x, tablinks;
        x = document.getElementsByClassName("typeReg");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
           tablinks[i].className = tablinks[i].className.replace(" tab-bottombar-org", "");
        }
        document.getElementById(regType).style.display = "block";
        evt.currentTarget.firstElementChild.className += " tab-bottombar-org";
      }


    </script>

  </body>
</html>
