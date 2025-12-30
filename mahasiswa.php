<?php
include "mahasiswa_koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

echo "<h2>Data Mahasiswa</h2>";
echo "<a href='mahasiswa_tambah.php'><button>Add Mahasiswa</button></a>";

while ($row = mysqli_fetch_assoc($result)) {
  echo $row["nama"] . " - " . $row["kelas"] . " - " . $row["alamat"];
  echo " | <a href='mahasiswa_edit.php?id=" . $row["id"] . "'>Edit</a>";
  echo " | <a href='mahasiswa_delete.php?id=" . $row["id"] . "'>Hapus</a><br>";
}
?>