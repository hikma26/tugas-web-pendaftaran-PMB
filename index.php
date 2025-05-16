<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: dashboard.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang - PMB Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #c471f5, #fa71cd);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .welcome-box {
      background: white;
      padding: 50px;
      border-radius: 20px;
      text-align: center;
      max-width: 600px;
    }
    .btn-daftar,
    .btn-daftar:hover {
      background-color: #6f42c1;
      color: white;
}

  </style>
</head>
<body>

<div class="welcome-box">
  <h1><i class="bi bi-mortarboard-fill text-primary"></i> PMB ONLINE</h1>
  <p class="lead" style="font-size: 25px; font-weight: 500; color:rgb(85, 63, 99);">Selamat datang di Portal Pendaftaran Mahasiswa Baru</p>
  <p>Silakan klik tombol di bawah ini untuk memulai pendaftaran</p>
  <a href="daftar.php" class="btn btn-daftar btn-lg mt-3"><i class="bi bi-person-plus-fill"></i> Daftar Sekarang</a>
  <hr>
  <p class="text-muted">Admin? <a href="login.php">Login di sini</a></p>
</div>

</body>
</html>
