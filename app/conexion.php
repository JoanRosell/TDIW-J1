<?php
$servername = "localhost";
$database = "tdiwj1";
$username = "tdiw-j1";
$password = "ovLRZ7bS";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


