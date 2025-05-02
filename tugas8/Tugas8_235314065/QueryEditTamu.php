<?php
include "koneksiTamu.php";

// Mendapatkan Id pada database 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['Id_BT'];
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $isi = $_POST['Isi'];

    // Syantax Bahasa Querynya
    $sql = "UPDATE daftar_tamu SET NAMA='$nama', EMAIL='$email', ISI='$isi' WHERE Id_BT='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui. <a href='daftarTamu.php'>Kembali</a>";
    } else {
        echo "Gagal " . $conn->error;
    }
}
?>
