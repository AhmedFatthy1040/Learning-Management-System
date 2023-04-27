<?php
class Database
{private $host = "host";
    private $user = "user";
    private $password = "password";
    private $database = "database name";
    private $port = "port";
    private $conn;

    function Connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database, $this->port);
        if($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function Query($sql)
    {
        $link = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->port);
        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        if (!mysqli_query($link, $sql)) {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        mysqli_close($link);
    }
    function selectQuery($sql){
        $link = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->port);
        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $result = mysqli_query($link, $sql) or trigger_error(mysqli_error($link));
        mysqli_close($link); 
        return ($result);
       }
}