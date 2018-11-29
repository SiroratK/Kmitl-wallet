<?php
   define('DB_SERVER', 'webservhost');
   define('DB_USERNAME', 'wallet_admin');
   define('DB_PASSWORD', 'wallet123');
   define('DB_DATABASE', 'wallet_user');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
