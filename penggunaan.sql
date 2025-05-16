CREATE DATABASE IF NOT EXISTS pendaftaran;
USE pendaftaran;

CREATE TABLE pendaftar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_lengkap VARCHAR(100),
  nik VARCHAR(20),
  tempat_lahir VARCHAR(50),
  tanggal_lahir DATE,
  jenis_kelamin VARCHAR(1),
  alamat TEXT,
  email VARCHAR(100),
  no_hp VARCHAR(20),
  asal_sekolah VARCHAR(100),
  jurusan VARCHAR(50)
);

CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL
);

INSERT INTO admin (username, password) VALUES ('admin', '$2y$10$.Qi9YbyAByEC4zhU9KoNteTfHilq6acYtjdI11hSW7eLY5Qi0kdi2');