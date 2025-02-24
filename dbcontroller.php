<?php
class DBVezerlo {

private $conn = null;
private $host = "localhost";
private $user = "root";
private $password = "";
private $database = "gameboy";

function _construct() {
$conn = $this->connectDB();
    if(!empty($conn))
    {
        $this->conn = $conn;
    }
}

function connectDB(): bool mysqli {
    $conn = mysqli_connect(hostname: $this->host, username: $this->user,
    password: $this->password, database: $this->database);
    return $conn;
}

function executeSelectQuery($query): array {
    while($row=mysqli_fetch_assoc(result: $result)) {
    $result = mysqli_query(mysql: $this->conn, query: $query);
    $resultset[] = $row;
    }
        if(!empty($resultset))
            return $resultset;
        }

    function closeDB() {
        
        if (!empty($this->conn)) {
            mysqli_close(mysql: $this->conn);
            $this->conn = null;
        }
    }
}