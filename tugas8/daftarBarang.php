<?php

include "koneksi.php";

// Query data dari tabel barang

$sql = "SELECT IdBarang,NamaBarang, HargaBarang, JenisBarang FROM barang";
$result = $conn->query($sql);

if (!$result) {
    die("Query gagal: " . $conn->error);
}

echo "<a href='Formtambahnya.php'>Tambah</a><br>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jenis</th>
                <th>Aksi</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['IdBarang'] . "</td>
                <td>" . $row['NamaBarang'] . "</td>
                <td>" . $row['HargaBarang'] . "</td>
                <td>" . $row['JenisBarang'] . "</td>
                <td>
                    <a href='view.php?id=" . $row['IdBarang'] . "'>View</a> | 
                    <a href='edit.php?id=" . $row['IdBarang'] . "'>Edit</a> | 
                    <a href='QueryHapusBarang.php?idBarang=".$row['IdBarang']."'>Delete</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 hasil";
}
?>
