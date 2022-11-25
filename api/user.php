<?php
include_once('../middlewares/bodyParser.php');
include_once('../controllers/user.php');

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        get();
        break;
    case 'POST':
        post();
        break;
    break;
    case 'PUT':
        put();
        break;
    case 'DELETE':
        delete();
        break;
}
?>
