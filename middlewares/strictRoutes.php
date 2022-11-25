<?php
$routes = [
    '/apirest/api/user',
    '/apirest/api'
];

if(!in_array($_SERVER['REQUEST_URI'], $routes)){
    http_response_code(404);

    require_once('../404.php');

    exit;
}
?>