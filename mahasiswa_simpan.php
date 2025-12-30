<?php
include "mahasiswa_koneksi.php";

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$kelas = $_POST["kelas"];

$sql = "INSERT INTO mahasiswa (nama, kelas, alamat)
        VALUES ('$nama', '$kelas', '$alamat')";

mysqli_query($conn, $sql);

echo "Data berhasil disimpan";

header("Location: mahasiswa_tambah.php");