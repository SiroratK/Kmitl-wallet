<?php
    session_start();

    $_SESSION["amount"] = $_POST["amount"];
    echo json_encode(1);



    


?>
