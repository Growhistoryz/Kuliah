<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    // Ini Bagian C1
    // Buat Inisiasi
    $nilai_1 = 10;
    $nilai_2 = 3;
    // ada penjumlah antar variabel
    $nilai_3 = 2 * $nilai_2 + 8 * $nilai_2 ; 
    echo "nilai = ", $nilai_3;
    echo "<br>";
    $jumlah = $nilai_1 + $nilai_2;
    echo "Hasil dari $nilai_1 + $nilai_2 adalah : $jumlah";
    echo "<br><br>";
    echo "Nama : Michael Yoseph Anggoro";
    echo "<br>NIM  : 235314065";
    echo "<br>";

    // Ini C2
    // array selalu di muali dari 0 yang paling awal
    echo "<br>";
    $nama = ["Anies", "Prabowo", "Ganjar"];
    echo $nama[1] . " " . $nama[2] . " " . $nama[0];
    echo "<br>";

    // Hitung jumlah elemen array
    echo "Jumlah elemen array = " . count($nama);
    echo "<br>";

    // Ini C3
    // Untuk buat tipe data ssuatu variabel 
    echo "<br>";
    $a = 300.4;
    echo "Tipe Double : " . doubleval($a) . "<br>";  
    echo "Tipe Int : " . intval($a) . "<br>";  
    echo "Tipe String : " . strval($a) . "<br>";  

    // Ini C4 (Format Tanggal)
    echo "<br>";
    echo date("m-F-Y, g:i:s a");
    echo "<br>";
    ?>

    
    <form method="post">
        <p>
            <label for="panjang">Panjang:</label>
            <input type="number" name="Panjang" id="panjang" required>
        </p>
        <p>
            <label for="lebar">Lebar:</label>
            <input type="number" name="Lebar" id="lebar" required>
        </p>
        <p>
            <input type="submit" value="Hitung Luas">
        </p>
    </form>

    <?php

    // Ini D1 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $p = $_POST['Panjang'];
        $l = $_POST['Lebar'];
        $luas = $p * $l;
        echo "Luas Persegi Panjang = " . $luas;
    }
    echo "<br>";

    // Ini E1 
    //saya ganti dengan d hari 
    echo "<br>";
    echo date("l, d F Y");
    echo "<br>";

  
    // Ini E2
    // simpan biodata di variabel
    $nama = "Michael Yosep";
    $nim = "235314065";
    $kuliah = "Sanatha Dharma";
    $tanggal_lahir = "29 Maret 2025";
    $hobi = "Menikmati Hidup";
    
    // Menampilkan biodata
    echo "Nama: $nama <br>";
    echo "NIM: $nim <br>";
    echo "Kuliah: $kuliah <br>";
    echo "Tanggal Lahir: $tanggal_lahir <br>";
    echo "Hobi: $hobi <br>";
    
    

    ?>
</body>
</html>
