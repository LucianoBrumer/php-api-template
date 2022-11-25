<?php
include_once('../middlewares/strictRoutes.php');
include_once('./Database.php');

class User extends Database{
    function getAll(){
        return $this->query('select * from user');
    }
}
?>