<?php
include "koneksi.php";

$sql = "SELECT menu_id, menu_nama, menu_link, menu_errornya FROM menunya ORDER BY menu_sort";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table border='1'>
          <tr><td>Menu</td></tr>";

    while($row = $result->fetch_assoc()) {
        if($row["menu_errornya"] == 0){
            echo "<tr><td><a href='" . $row["menu_link"] . "'>" . $row["menu_nama"] . "</a></td></tr>";
        } else {
            echo "<tr><td>" . $row["menu_nama"] . "</td></tr>";
        }
    }

    echo "</table>";
} else {
    echo "Data set kosong";
}

$conn->close();
?>
