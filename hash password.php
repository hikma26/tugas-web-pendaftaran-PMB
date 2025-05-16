<?php
// Password asli
$password = 'hikma123';

// Menghasilkan hash dari password menggunakan algoritma PASSWORD_DEFAULT
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Menampilkan hasil hash
echo $hashed_password;
?>
