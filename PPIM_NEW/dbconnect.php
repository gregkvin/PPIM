<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "ppim";

// Create connection
$conn = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT * from `CAMPUS` ";
$res = mysqli_query($conn, $query)
    
    ?>