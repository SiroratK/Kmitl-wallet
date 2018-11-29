<?php
   session_start();
   include("config/connect.php");
   include("config/config.php");
   ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icon/icon.ico">

    <title>KMITL Wallet - Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template300*162 -->
    <link href="scss/all.css" rel="stylesheet">
      <link href="scss/vbox.css" rel="stylesheet">

  </head>

<body>
<div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="container" style="margin-left:0;margin-top:10;z-index:5">

  				<script>
  document.write('<a class="back" href="javascript:history.back()"> < BACK </a>');
</script>
            </div>
            <div class="form text-center">
              <img class="mb-4 logo" src="images/logo.png" alt="logo" >

              <div class="whitebg">
              <div class="container"  >
                <div class="vbox" id="frame" style=" width: 100%;">
                <!-- <button onclick="myFunction()">eeeeee it</button> -->


  </div>

              </div>
              </div>



              <p class="mt-5 mb-3 text-muted">&copy; 2018 CE-KMITL</p>
            </div>
          </div>
        </div>
      </div>
  </div>

</body>
</html>
<script>
function myFunction(namee,emaill,amoutt,datetimee) {

    var profile = document.createElement("IMG");
    profile.setAttribute("src", "images/default-user.png");
    profile.setAttribute("width", "35");
    profile.setAttribute("height", "35");
    var section = document.createElement("DIV");

    var pic = document.createElement("DIV");
    var info = document.createElement("DIV");
    var amount = document.createElement("DIV");
    var colInfo = document.createElement("DIV");

    var namediv = document.createElement("DIV");
    var iddiv = document.createElement("DIV");
    var datediv = document.createElement("DIV");

      var name = document.createTextNode(namee);
      var kmitlid = document.createTextNode(emaill);
      var datetime = document.createTextNode(datetimee);
      var money = document.createTextNode(amoutt + " ฿");
section.className = "row";
pic.className = "col-2";
colInfo.className = "col-7";
amount.className = "col-3 text-right";
section.style.padding=15;
info.style.padding=5;
amount.style.padding=5;
pic.align="center";
pic.style.padding=5;
namediv.className = "text-left";
iddiv.className = "text-left";
datediv.className = "text-left";

info.className="vbox";
info.style="width:100%";

    //para.className = "a";
    namediv.appendChild(name);
    iddiv.appendChild(kmitlid);
    datediv.appendChild(datetime);
    amount.appendChild(money);
    info.appendChild(namediv);
    info.appendChild(iddiv);
    info.appendChild(datediv);
    pic.appendChild(profile);
    colInfo.appendChild(info);
    section.appendChild(pic);
    section.appendChild(colInfo);
    section.appendChild(amount);
    document.getElementById("frame").append(section);

}
</script>
<?php
$shopID = "1";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 date_default_timezone_set("Asia/Bangkok");
 $today =  date("Y-m-d")." 00:00:00";
 $nextday = date("Y-m-d")." 23:59:59";
$sql = "SELECT* FROM shopLog WHERE shopID = '$shopID' and (dateandTime between '$today' and '$nextday' )Order By dateandTime DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Email: " . $row["Email"]. " - Name: " . $row["Name"]. " " . $row["amount"]. "Date". $row["amount"]. "<br>";
        // $abc = "nameeeeeeee";
        // echo '<script type="text/javascript"> myFunction(echo json_encode($row["Email"]),echo json_encode($row["Name"]),echo json_encode($row["amount"]),echo json_encode($row["dateTime"])); </script>';
         $name = $row["Name"];
         $email = $row["Email"];
         $amount = $row["amount"];
         $date = $row["dateandTime"];
        //echo $name;
      //  echo $email;

        echo "<script type='text/javascript'>myFunction('$name', '$email', '$amount', '$date');</script>";
    }
} else {
    echo "no results";
}
$conn->close();
?>
