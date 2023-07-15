<?php
$jsonObject = array(
    "version" => "1.2.0"
);

$jsonString = json_encode($jsonObject);

header('Content-Type: application/json');
echo $jsonString;
?>