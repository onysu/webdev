<?php
include "mahasiswa_koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$alamat = $_POST["alamat"];

$sql = "UPDATE mahasiswa SET 
        nama='$nama',
        kelas='$kelas',
        alamat='$alamat'
        WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: mahasiswa.php");
