<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pendaftaran Mahasiswa Baru</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #d16ba5, #86a8e7, #5ffbf1);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .card {
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 600px;
    }
    .step {
      display: none;
    }
    .step.active {
      display: block;
    }
    .progress {
      height: 20px;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 20px;
    }
    .progress-bar {
      transition: width 0.3s;
    }
  </style>
</head>
<body>
<div class="card p-4">
  <h4 class="text-center text-primary mb-4"><i class="bi bi-pencil-square me-2"></i>Form Pendaftaran Mahasiswa Baru</h4>
  <div class="progress">
    <div class="progress-bar bg-success" role="progressbar" style="width: 33%;" id="progressBar"></div>
  </div>
  <form id="regForm" action="proses_daftar.php" method="post">
    <!-- Step 1: Data Pribadi -->
    <div class="step active">
      <div class="mb-3">
        <label><i class="bi bi-person-fill me-2"></i>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" required>
      </div>
      <div class="mb-3">
        <label><i class="bi bi-credit-card-2-front-fill me-2"></i>NIK</label>
        <input type="text" name="nik" class="form-control" required>
      </div>
      <div class="mb-3">
        <label><i class="bi bi-geo-alt-fill me-2"></i>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" required>
      </div>
      <div class="mb-3">
        <label><i class="bi bi-calendar-event-fill me-2"></i>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" required>
      </div>
      <div class="mb-3">
        <label><i class="bi bi-gender-ambiguous me-2"></i>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-select" required>
          <option value="" disabled selected>-- Pilih --</option>
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
        </select>
      </div>
      <button type="button" class="btn btn-primary w-100" onclick="nextStep()">Lanjut</button>
    </div>
    <!-- Step 2: Kontak & Asal Sekolah -->
    <div class="step">
      <div class="mb-3">
        <label><i class="bi bi-house-door-fill me-2"></i>Alamat</label>
        <input type="text" name="alamat" class="form-control" required>
      </div>
      <div class="mb-3">
        <label><i class="bi bi-envelope-fill me-2"></i>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label><i class="bi bi-phone-fill me-2"></i>No HP</label>
        <input type="text" name="no_hp" class="form-control" required>
      </div>
      <div class="mb-3">
        <label><i class="bi bi-building me-2"></i>Asal Sekolah</label>
        <input type="text" name="asal_sekolah" class="form-control" required>
      </div>
      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Kembali</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Lanjut</button>
      </div>
    </div>
    <!-- Step 3: Pilihan Jurusan -->
    <div class="step">
      <div class="mb-3">
        <label><i class="bi bi-journal-code me-2"></i>Pilih Jurusan</label>
        <select name="jurusan" class="form-select" required>
          <option value="" disabled selected>-- Pilih Jurusan --</option>
          <option value="Informatika">Informatika</option>
          <option value="Sistem Informasi">Sistem Informasi</option>
          <option value="Teknik Elektro">Teknik Elektro</option>
          <option value="Teknik Sipil">Teknik Sipil</option>
          <option value="Manajemen">Manajemen</option>
          <option value="Akuntansi">Akuntansi</option>
          <option value="Farmasi">Farmasi</option>
          <option value="Keperawatan">Keperawatan</option>
        </select>
      </div>
      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Kembali</button>
        <button type="submit" class="btn btn-success">Daftar</button>
      </div>
    </div>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  let currentStep = 0;
  const steps = document.querySelectorAll(".step");
  const progressBar = document.getElementById("progressBar");

  function showStep(index) {
    steps.forEach((step, i) => {
      step.classList.toggle("active", i === index);
    });
    progressBar.style.width = ((index + 1) / steps.length) * 100 + "%";
  }

  function nextStep() {
    if (currentStep < steps.length - 1) {
      currentStep++;
      showStep(currentStep);
    }
  }

  function prevStep() {
    if (currentStep > 0) {
      currentStep--;
      showStep(currentStep);
    }
  }

  // Initialize first step
  showStep(currentStep);
</script>
</body>
</html>
