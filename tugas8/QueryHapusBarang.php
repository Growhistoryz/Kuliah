<?php
include "koneksi.php";

if (isset($_GET['idBarang'])) {
    $id = $_GET['idBarang'];
    $sql = "DELETE FROM barang WHERE IdBarang = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus. <a href='daftarBarang.php'>Kembali</a>";
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
