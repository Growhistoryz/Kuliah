<?php
include "koneksiTamu.php";

  // Membuat query untuk ambil data berdasarkan ID
if (isset($_GET['Id_BT'])) {
    $id = $_GET['Id_BT'];
    $sql = "SELECT * FROM daftar_tamu WHERE Id_BT = '$id'";
    $result = $conn->query($sql);

    // Menampilkan detail tamu
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Detail Tamu</h2>";
        echo "ID: " . $row['Id_BT'] . "<br>";
        echo "Nama: " . $row['NAMA'] . "<br>";
        echo "Email: " . $row['EMAIL'] . "<br>";
        echo "Isi: " . $row['ISI'] . "<br>";
        echo "<a href='daftarTamu.php'>Kembali</a>";
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
