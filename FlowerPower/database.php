<?php 

class database{

    // scope -> private, public, protected
    // eigenschappen - properties
    private $host;
    private $username; // username van je database 'root'
    private $password; // password van je database ''
    private $database;
    private $dbh;

    public function __construct(){
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'flowerpower';

        try {

            $dsn = "mysql:host=$this->host;dbname=$this->database";
            $this->dbh = new PDO($dsn, $this->username, $this->password);

        } catch (PDOException $exception) {
            die("Unable to connect: " . $exception.getMessage());
        }
    }

    public function select($username){

        $sql = "SELECT username, password, email FROM users WHERE username = :uname ;"; // :uname is een named placeholder

        // prepared statement
        $statement = $this->dbh->prepare($sql);

        // uitvoeren prepared statement
        $statement->execute([
            'uname'=>$username
        ]);

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        ['username'=>'nilu', 'password'=> 'helloworld', 'email'=>'n.lican1@rocva.nl'];


        echo $result['username'];
        echo $result['password'];
        echo $result['email'];

    }
}

// index.php:
$object = new database();
$object->select();

?>