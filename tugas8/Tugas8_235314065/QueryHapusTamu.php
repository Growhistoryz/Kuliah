<?php
include "koneksiTamu.php";

// Mendapatkan Id pada database 
if (isset($_GET['Id_BT'])) {
    $id = $_GET['Id_BT'];

// Syantax yang di gunakan adalah Delete
    $sql = "DELETE FROM daftar_tamu WHERE Id_BT = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus. <a href='daftarTamu.php'>Kembali</a>";
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
