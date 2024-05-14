<?php
class Database {
    private $connection;
    private $host;
    private $db_name;
    private $username;
    private $password;

    public function __construct($host, $username, $password, $db_name) {
        $this->connection = null;
        $this->host = $host;
        $this->db_name = $db_name;
        $this->username = $username;
        $this->password = $password;
    }

    public function getConnection() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->connection;
    }
}
?>
