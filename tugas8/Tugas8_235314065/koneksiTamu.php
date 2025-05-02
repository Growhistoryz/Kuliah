<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdatabase";

// Buat Koneksinya
$conn = new mysqli($servername, $username, $password,$dbname);

// Cek apakah terkoneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else 
?>