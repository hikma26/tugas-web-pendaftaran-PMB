<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}

require 'koneksi.php';
require 'Pendaftar.php';

$pendaftar = new Pendaftar($conn);
$data = $pendaftar->getAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <h3>Dashboard Admin</h3>
  <p>Selamat datang, <?= $_SESSION['user'] ?> | <a href="logout.php">Logout</a></p>
  <table class="table table-bordered table-hover">
    <thead class="table-light">
      <tr>
        <th>Nama</th>
        <th>NIK</th>
        <th>TTL</th>
        <th>JK</th>
        <th>Email</th>
        <th>HP</th>
        <th>Asal Sekolah</th>
        <th>Jurusan</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $data->fetch_assoc()): ?>
        <tr>
          <td><?= htmlspecialchars($row['nama_lengkap']) ?></td>
          <td><?= $row['nik'] ?></td>
          <td><?= $row['tempat_lahir'] . ", " . $row['tanggal_lahir'] ?></td>
          <td><?= $row['jenis_kelamin'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['no_hp'] ?></td>
          <td><?= $row['asal_sekolah'] ?></td>
          <td><?= $row['jurusan'] ?></td>
          <td><?= $row['status'] ?? '-' ?></td>
          <td>
            <!-- Tombol untuk menerima atau menolak pendaftar -->
            <a href="verifikasi.php?id=<?= $row['id'] ?>&status=Diterima" class="btn btn-success btn-sm">Terima</a>
            <a href="verifikasi.php?id=<?= $row['id'] ?>&status=Ditolak" class="btn btn-danger btn-sm">Tolak</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
