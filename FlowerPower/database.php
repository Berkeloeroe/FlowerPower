<?php

class database{

    // properties
    private $host;
    private $username; // username van je db
    private $password; // password van je db
    private $db;
    private $dbh; // dbhost/connectie

    // wordt slechts één keer aangeroepen en dus uitgevoerd
    public function __construct(){
        $this->host = 'localhost'; // ip adres 127.0.0.1
        $this->username = 'root';
        $this->password = '';
        $this->db = 'flowerpower';

        try{
            $dsn = "mysql:host=$this->host;dbname=$this->db";
            $this->dbh = new PDO($dsn, $this->username, $this->password);
        }catch(PDOException $e){
            die("Unable to connect: " . $e.getMessage());
        }
    }

    public function select($statement, $username){

        //$sqsl = "SELECT * FROM table";
        
        // prepared statement
        $stmt = $this->dbh->prepare($statement);

        // execute
        $stmt->execute(['user' => $username]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // $result['username'] / $result['password']
    }

}

$obj = new database();
$obj->select("SELECT username, password FROM table WHERE gebruiker = :user");

<?

