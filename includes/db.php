<?php
// Basic PDO connection settings. Adjust credentials as needed.
$host = 'localhost';
$db   = 'unico';
$user = 'root'; // change if your MySQL user is different
$pass = '';     // set your MySQL password if applicable
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass, $options);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
?>
