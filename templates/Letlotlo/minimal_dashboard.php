<?php
// Minimal dashboard test without database
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Test</title>
</head>
<body>
    <h2>Dashboard Working!</h2>
    <p>If you see this, PHP and sessions are working.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
