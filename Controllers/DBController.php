<?php

namespace Controllers;


use mysqli;

class DBController
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "lms";
    private $port = "3306";
    private $conn;

    public function connect(): bool
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database, $this->port);
        if ($this->conn->connect_error) {
            echo "Connection failed: " . $this->conn->connect_error;
            return false;
        } else
            return true;
    }

    public function query($sql) {
        $result = $this->conn->query($sql);
        if(!$result) {
            die("Query failed: " . $this->conn->error);
        }
        return $result;
    }
    public function Select($sql)
    {
        $result = $this->conn->query($sql);
        if (!$result) {
            echo "Query failed: " . $this->conn->error;
            return false;
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function insert($sql)
    {
        $result = $this->conn->query($sql);
        if (!$result) {
            echo "Query failed: " . $this->conn->error;
            return false;
        } else {
            return $this->conn->insert_id;
        }
    }
    public function selectQuery($sql)
    {
        $link = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->port);
        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $result = mysqli_query($link, $sql) or trigger_error(mysqli_error($link));
        mysqli_close($link);
        return ($result);
    }

    public function close()
    {
        $this->conn->close();
    }
}