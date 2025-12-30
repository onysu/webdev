<?php
include "mahasiswa_koneksi.php";

$id = $_GET["id"];

mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

header("Location: mahasiswa.php");
