<?php
    session_start();

    $_SESSION["amount"] = $_POST["amount"];
    $_SESSION["action"] = "PAY";
    echo json_encode(1);






?>
