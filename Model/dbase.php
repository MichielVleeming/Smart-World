<?php
$host = "localhost";
$username = "root";
$password = "123";
$dbname = "verkeersveiligheidmonitor";

// Create connection
$sql = new MySQLi($host, $username, $password, $dbname);





?>
<!--
<?php
class MySQLConnection {

    private $dbhost = 'localhost';                                
    private $dbuser = 'root';
    private $dbpassword = '123';
    private $dbname = 'verkeersveiligheidmonitor';

    private $connection;  
    
    public function MySQLConnection() {
            $this->openConnection();           
    }

    public function openConnection() {
        $this->connection = 
                mysqli_connect($this->dbhost, 
                        $this->dbuser, 
                        $this->dbpassword, 
                        $this->dbname);
        if (!$this->connection) {
            die("Database connection error: " . mysqli_error($this->connection));
        	} 
        return $this->connection;      
    }        

	public function query($sql) {
        $this->last_query = $sql;
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }     

} -->