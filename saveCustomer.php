    <?php
    $conn = include('config.php');
    $message = $conn->query("SELECT message FROM myTable")->fetch_object()->message;
    $conn->close();
    echo "$message <br/>";
    echo "Hello From Sites Folder!";
    echo json_encode(array('status' => '1','message'=> 'Record add successfully'));
    
    phpinfo();
    ?>