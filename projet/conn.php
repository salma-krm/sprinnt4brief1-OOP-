<?php

class database {
    
    private string $servename = "localhost"; 
    private string $username = "root";  
    private string $password = "";  
    private string $dbname = "contact"; 

    public function connect() {
        $conn = null;
        try {
            $conn = new PDO("mysql:host={$this->servename};dbname={$this->dbname}", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getmessage();
        }
        return $conn;
    }
}

$connection=new database();
$connection->connect();
?>
