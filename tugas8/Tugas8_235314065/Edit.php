<?php
include "koneksiTamu.php";
// Mendapatkan Id pada database 
if (isset($_GET['Id_BT'])) {
    $id = $_GET['Id_BT'];
    $sql = "SELECT * FROM daftar_tamu WHERE Id_BT = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

 <!-- Form buat bagian edit  -->
<form method="POST" action="QueryEditTamu.php">
    <input type="hidden" name="Id_BT" value="<?php echo $row['Id_BT']; ?>">
    
    <label for="Nama">Nama Anda :</label><br>
    <input type="text" name="Nama" value="<?php echo $row['NAMA']; ?>"><br>

    <label for="Email">Email :</label><br>
    <input type="text" name="Email" value="<?php echo $row['EMAIL']; ?>"><br>

    <label for="Isi">Isi :</label><br>
    <input type="text" name="Isi" value="<?php echo $row['ISI']; ?>"><br><br>

    <input type="submit" value="Update">
</form>

<?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
