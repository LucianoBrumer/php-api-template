<?php
$response = ['error'=>'404'];
header('Content-Type: application/json');
echo json_encode($response);
?>