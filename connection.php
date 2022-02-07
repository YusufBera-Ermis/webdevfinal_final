<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'internship';

$dsn = "mysql:host={$host};dbname={$dbname};charset=UTF8";

try {
    $error = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $pdo = new PDO($dsn, $user, $pass, $error);
} catch (PDOException $e) {
    die($e->getMessage());
}
