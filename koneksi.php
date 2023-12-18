<?php

$sname= "localhost";
$uname= "root";
$password= "";
$db_name= "uaspemweb";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>