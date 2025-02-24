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