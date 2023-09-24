<?php
$servername = "localhost";
$username = "root";   //username of the xampp
$password = "root";   
$dbname = "login_system";   //db name created in sql

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>