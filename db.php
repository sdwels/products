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

<!-- product_id (int 11), product_name (varchar 225), product_image (longblob), price (int 11), stocks (int 11) -->
