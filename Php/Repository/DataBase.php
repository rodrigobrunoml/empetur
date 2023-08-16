<?php
class DataBase
{
private $hostName;
private $user;
private $password;
private $database;
function __construct()
{
$this->hostName = "127.0.0.1";
$this->user = "root";
$this->password = "";
$this->database = "teste";
}

function connect()
{
$databaseConnect = mysqli_connect($this->hostName, $this->user, $this->password, $this->database);
return $databaseConnect;
}
}
?>