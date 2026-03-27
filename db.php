<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "myshop";

$conn = new mysqli($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection Failed:  ". mysqli_connect_error());
}
?>
