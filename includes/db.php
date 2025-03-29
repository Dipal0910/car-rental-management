<?php
$host = "localhost";      // XAMPP runs MySQL on localhost
$dbname = "car_rental";   // You can name it anything in phpMyAdmin
$username = "root";       // Default for XAMPP
$password = "";           // Default is empty

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>