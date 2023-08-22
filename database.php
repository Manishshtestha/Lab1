<?php
class Database{
    protected $connection;
    function __construct(){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'lab1';
        $this->connection = new mysqli($host,$user,$password,$database);
        if($this->connection->connect_error){
            die('Connection failed: '.$this->connection->connect_error.'<br>');
        }
    }
}

?>