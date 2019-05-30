<?php
$servername = "localhost";
$username = "vidyaedu_wp7";
$password = "J&(b*EwjL9WMhQU(Dw*67.[7";
$dbname = "vidyaedu_wp7";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//mysqli_query($conn,"drop TABLE transactiontable");

// sql to create table
$sql1 = "update `admin_logins` set `password`='ABC@123#myschoolvgs' WHERE `user_id`='ADMIN' ";

if ($conn->query($sql1) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>