<?php
if (empty($_POST['email']) || empty($_POST['password'])) {
    header("Location: waktu.php");
    exit();
}

include "waktu.php";

$email = $_POST['email'];
$password = $_POST['password'];


$Iemail = "admin";
$Ipassword = "123456";

if ($email !== $Iemail || $password !== $Ipassword) {
    header("Location: waktu.php");
    exit();
}


$email = $_POST['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Login</title>
</head>
<body>
    <h2>Login Berhasil</h2>
    <p>Email: <?= htmlspecialchars($email) ?></p>
    <p>Jam Login: <?= $jam ?></p>
    <p>Hari: <?= $hari ?></p>
    <p>Tanggal: <?= $tanggal ?></p>
</body>
</html>
