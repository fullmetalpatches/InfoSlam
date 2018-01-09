<?php
$config = require_once ('/var/www/InfoSlam/config.php');
$styles = require_once ('/var/www/InfoSlam/HomePageStyles.css');

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



