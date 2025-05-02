<?php

include "koneksiTamu.php";

// Query data dari tabel barang

$sql = "SELECT Id_BT,NAMA,EMAIL,ISI FROM daftar_tamu";
$result = $conn->query($sql);

if (!$result) {
    die("Query gagal: " . $conn->error);
}

echo "<a href='FormtambahnyaTamu.php'>Tambah</a><br>";

// Menampilkan tabel padaa websitenya nanti 
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['Id_BT'] . "</td>
                <td>" . $row['NAMA'] . "</td>
                <td>" . $row['EMAIL'] . "</td>
                <td>" . $row['ISI'] . "</td>
                <td> 
                    <a href='QueryViewTamu.php?Id_BT=".$row['Id_BT']."'>View</a>
                    <a href='Edit.php?Id_BT=".$row['Id_BT']."'>Edit</a>
                    <a href='QueryHapusTamu.php?Id_BT=".$row['Id_BT']."'>Delete</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 hasil";
}
?>
