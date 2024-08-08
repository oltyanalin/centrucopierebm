<?php
// Test database connection
$host = 'localhost';
$db = 'planuri1_centru';
$user = 'planuri1_centru';
$pass = 'Ropressodigit@l123!';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
