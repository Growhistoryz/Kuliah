<?php

include "koneksiTamu.php";

// Mengambil data dari form 
$nama = $_POST['Nama'];
$email = $_POST['Email'];
$isi = $_POST['Isi'];

// Membuat query SQL 
$sql = "INSERT INTO daftar_tamu (Nama,Email,Isi) VALUES ('$nama','$email','$isi')";


if ($conn->query($sql) === TRUE) {
    
    echo "New record created succesfully";
    header("Location:daftarTamu.php");
} else {
    echo "Error Mas";
}


$conn->close();
