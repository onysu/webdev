<?php
$nama = $_POST["nama"];
$email = $_POST["email"];
$pass = $_POST["password"];

if (empty($nama) || empty($email) || empty($pass)) {
  echo "Semua field wajib diisi!";
} else {
  echo "Registrasi berhasil<br>";
  echo "Nama: $nama<br>";
  echo "Email: $email";
}
