<?php
$servername = "mysql_db_lab_loker"; // Ganti dengan server database Anda jika perlu
$username = "root"; // Ganti dengan username database Anda
$password = "root"; // Ganti dengan password database Anda
$dbname = "lab_loker"; // Nama database yang dibuat sebelumnya
$host  = 'http://217.15.163.197:8004';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
?>