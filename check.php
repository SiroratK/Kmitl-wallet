<?php
$input = file_get_contents('php://input');
$obj = json_decode($input);

echo $obj->{'name'};
echo $obj->{'age'};
?>