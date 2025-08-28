<?php
$host = "localhost";
$username = "root"; // ganti dengan username MySQL Anda
$password = ""; // ganti dengan password MySQL Anda
$database = "rsud_daha_husada";

// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Set charset ke utf8
$conn->set_charset("utf8");
?>
