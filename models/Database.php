<?php
include_once('../middlewares/strictRoutes.php');
include_once('../inc/config.php');

class Database {
    $connection = null;

    function __construct(){
        try {
            $this->connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    function connect($host, $username, $password, $name){
        try {
            $this->connection = new mysqli($host, $username, $password, $name);

            if ($this->connection->connect_error) {
                throw new Exception('Failed to connect to MyQL: ' . $this->connection->connect_error);
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    function query($sql){
        try {
            $result = $this->$connection->query($sql);

            return $result;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }
}
?>