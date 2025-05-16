<?php
session_start();
include 'koneksi.php';

$nama = $_POST['nama_lengkap'];
$nik = $_POST['nik'];
$tempat = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal_lahir'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$hp = $_POST['no_hp'];
$asal = $_POST['asal_sekolah'];
$jurusan = $_POST['jurusan'];

$query = "INSERT INTO pendaftar (nama_lengkap, nik, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, email, no_hp, asal_sekolah, jurusan) 
VALUES ('$nama', '$nik', '$tempat', '$tanggal', '$jk', '$alamat', '$email', '$hp', '$asal', '$jurusan')";

if (mysqli_query($conn, $query)) {
  echo "<script>alert('Pendaftaran berhasil!'); window.location='index.php';</script>";
} else {
  echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>
