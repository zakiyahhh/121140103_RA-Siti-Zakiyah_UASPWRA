<?php

$sname= "localhost";
$uname= "id21685494_databasesql";
$password= "Databasesql13_";
$db_name= "id21685494_databasesql";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
