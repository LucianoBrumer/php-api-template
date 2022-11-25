<?php
$response = ["Hello"=>"World"];
header('Content-Type: application/json');
echo json_encode($response);
?>