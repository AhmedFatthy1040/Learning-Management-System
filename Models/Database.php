<?php
class Database {
    private $host = "localhost";
    private $user = "username";
    private $password = "password";
    private $database = "database_name";
    private $conn;

    function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function query($sql) {
        $result = $this->conn->query($sql);
        if(!$result) {
            die("Query failed: " . $this->conn->error);
        }
        return $result;
    }

    function close() {
        $this->conn->close();
    }
}
