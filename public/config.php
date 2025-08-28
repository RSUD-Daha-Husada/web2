<?php
$host = 'localhost';
$db   = 'klinik';      // nama database Anda
$user = 'root';        // username MySQL
$pass = '313354';            // password MySQL
$charset = 'utf8mb4';

$dsn = "mysql:host=localhost;dbname=rumah_sehat;charset=utf8mb4";
$pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);