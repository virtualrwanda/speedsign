<?php

class DBConnection
{
    private $conn;
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $port;

    // Constructor to initialize default database connection parameters
    function __construct($params = array()) {
        $this->conn = false;
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';  // Make sure this is set appropriately
        $this->dbName = 'iotrw_speedsigns';
        $this->port = '3306'; // Default MySQL port
        $this->connect(); // Call connect method to establish DB connection
    }

    // Destructor to disconnect from the database when object is destroyed
    function __destruct() {
        $this->disconnect();
    }

    // Private function to connect to the database using PDO
    private function connect() {
        if (!$this->conn) {
            try {
                // Creating a new PDO connection
                $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8';
                $this->conn = new PDO($dsn, $this->user, $this->password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable exceptions for errors
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Default fetch mode to associative array
                ]);
            } catch (PDOException $e) {
                die('Database connection error: ' . $e->getMessage());
            }
        }
        return $this->conn;
    }

    // Disconnect from the database by setting the connection to null
    private function disconnect() {
        if ($this->conn) {
            $this->conn = null;
        }
    }

    // Function to fetch one row from the database (for queries expecting a single row)
    public function getOne($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params); // Execute the query with optional parameters
            return $stmt->fetch(); // Return the first result
        } catch (PDOException $e) {
            die('Error executing query: ' . $e->getMessage());
        }
    }

    // Function to fetch all rows from the database (for queries expecting multiple rows)
    public function getAll($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll(); // Return all results as an array
        } catch (PDOException $e) {
            die('Error executing query: ' . $e->getMessage());
        }
    }

    // Function to execute an INSERT, UPDATE, or DELETE statement
    public function execute($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            return $stmt->execute($params); // Return true on success, false on failure
        } catch (PDOException $e) {
            die('Error executing query: ' . $e->getMessage());
        }
    }
}

// Example usage:
// $dbConn = new DBConnection();
// print_r($dbConn->getAll("SELECT * FROM `admins`"));
?>
