<?php
include "koneksiTamu.php";

$nama = $_POST['Nama'];
$harga = $_POST['Harga'];
$jenis = $_POST['Jenis'];
$sql = "INSERT INTO daftar_tamu (Nama,Email,Isi)
VALUES ('$nama','$harga','$jenis')";

if($conn -> query($sql) === TRUE){
    echo "New record created succesfully";
    header("Location:daftarBarang.php");

}else{
    echo "Error Mas";
}$conn -> close();
?>
