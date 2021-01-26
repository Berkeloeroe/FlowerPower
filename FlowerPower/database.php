<?php
 
class database {
 
    private $host;
    private $dbh;
    private $user;
    private $pass;
    private $db;
 
    function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->host = '';
        $this->host = 'flowerpower';
 
        try{
            $dsn = "mysql:host=$this->host;dbname=$this->db";
            $this->dbh = new PDO($dsn, $this->$user, $this->pass);
        }catch(PDOExeption $e){
            die("Unable to connect: " . $e->getMessage());
 
        }
    }
}
 
$obj = new database('localhost');
 
?>