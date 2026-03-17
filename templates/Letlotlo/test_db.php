<?php
// Test database connection
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "letlotk0v8e8_admin";
$pass = "@letlotlo";
$db   = "letlotk0v8e8_letlotlo_data";

echo "Testing database connection...<br>";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection successful!<br>";

// Test if registrations table exists
$result = $conn->query("SHOW TABLES LIKE 'registrations'");
if ($result->num_rows > 0) {
    echo "Registrations table exists!<br>";
    
    // Test query
    $result = $conn->query("SELECT COUNT(*) as count FROM registrations");
    $row = $result->fetch_assoc();
    echo "Records in table: " . $row['count'] . "<br>";
} else {
    echo "Registrations table does NOT exist!<br>";
}

$conn->close();
?>
