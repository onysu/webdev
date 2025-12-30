<?php
include "mahasiswa_koneksi.php";

$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<form action="update.php" method="post">
  <input type="hidden" name="id" value="<?= $data['id'] ?>">
  Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
  Alamat: <input type="text" name="kelas" value="<?= $data['kelas'] ?>"><br>
  Email: <input type="text" name="alamat" value="<?= $data['alamat'] ?>"><br>
  <button type="submit">Update</button>
</form>