<?php 
$host = "localhost";
$username = "root";
$password = "";  // ✅ Change null to empty string
$database = "discuss";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("❌ Not connected with DB: " . $conn->connect_error);
}
?>
