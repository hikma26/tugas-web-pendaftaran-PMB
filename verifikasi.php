<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}

require 'koneksi.php';
require 'Pendaftar.php';

$pendaftar = new Pendaftar($conn);

// Mengecek apakah id dan status diberikan dalam URL
if (isset($_GET['id']) && isset($_GET['status'])) {
  $id = intval($_GET['id']);
  $status = $_GET['status'];

  // Proses verifikasi status pendaftar
  $pendaftar->verifikasi($id, $status);
}

// Setelah verifikasi selesai, arahkan kembali ke dashboard
header("Location: dashboard.php");
exit;
?>
