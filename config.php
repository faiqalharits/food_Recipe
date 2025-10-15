<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "food_recipe";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Yahh, gagal bre koneknya" . mysqli_connect_error());
} else {
    echo "Gokil Konesksi Berhasil Bre! ✅";
}
?>
