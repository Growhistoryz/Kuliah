<?php 
$panjang=10 + 5;
$web[0][0] = "Youtube";
$web[1][0] = "google";
$web[2][0] = "X";
$web[3][0] = "github";

echo "<table border='1'>";

for ($i= 0;$i<4; $i++ ){
    echo "<tr>
            <td>" . ($i +1)."</td>
            <td>" . $web[$i][0]."</td> 
            </tr>";
}
    echo "</table>";
    
    $p =$_POST['Panjang'];
    $l =$_POST['Luas'];
    $luas = $p * $l;

    echo "Luas Persegi Panjang 5 x 10 = " .$luas;

   
?>

<?php 

$panjang = 10 + 5;
$web[0][0] = "Youtube";
$web[1][0] = "google";
$web[2][0] = "X";
$web[3][0] = "github";

echo "<table border='1'>";

for ($i = 0; $i < 4; $i++) {
    echo "<tr>
            <td>" . ($i + 1) . "</td>
            <td>" . $web[$i][0] . "</td> 
          </tr>";
}
echo "</table>";

// Process rectangle area calculation if form is submitted
if (isset($_POST['Panjang']) && isset($_POST['Luas'])) {
    $p = $_POST['Panjang'];
    $l = $_POST['Luas']; // Note: This should probably be 'Lebar' instead of 'Luas'
    $luas = $p * $l;

    echo "<p>Luas Persegi Panjang $p x $l = $luas</p>";
} else {
    // Display a form for input
    echo '
    <form method="post">
        <p>
            <label for="panjang">Panjang:</label>
            <input type="number" name="Panjang" id="panjang" required>
        </p>
        <p>
            <label for="lebar">Lebar:</label>
            <input type="number" name="Luas" id="lebar" required>
        </p>
        <p>
            <input type="submit" value="Hitung Luas">
        </p>
    </form>
    ';
}
?>



