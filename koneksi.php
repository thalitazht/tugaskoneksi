<?php
// Informasi koneksi database
$host = "localhost"; // Nama host database
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "uts_312310137"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
echo "Koneksi Berhasil";

// Setelah ini, Anda dapat menggunakan variabel $conn untuk melakukan query ke database.
?>