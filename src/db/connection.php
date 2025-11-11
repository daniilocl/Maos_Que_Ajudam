<?php

$servername = "localhost";
$database = "maosqueajudam";
$username = "root";
$password = "";

// Connection
$conn = mysqli_connect($servername,$username,$password, $database);

// Check connection
if(!$conn) {
    die("Connection failed ". mysqli_connect_error());
}

echo"Connected sucessfully";

mysqli_set_charset($conn, "utf8");


?>