<?php
session_start();

// Cek apakah status login sudah ada dan bernilai true
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    // Jika tidak ada atau bernilai false, redirect kembali ke halaman login
    header('Location: login.php');
    exit;
}

// // Jika user telah login sebagai admin, tampilkan halaman admin
// // Jika tidak, tampilkan pesan bahwa user tidak diizinkan mengakses halaman ini
// if ($_SESSION['username'] == 'admin') {
//     // Tampilkan halaman admin
// } else {
//     echo "Anda tidak diizinkan mengakses halaman ini!";
//     // Atau redirect ke halaman index jika diperlukan
//     // header('Location: index.php');
//     // exit;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
<!--start navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/dashboard.php">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <?php if($_SESSION['level'] == 'user') { ?>
                  <div class="nav-item">
                      <a class="nav-link active" href="/index.php">
                      <i class="bi bi-house-door-fill"></i>
                          Beranda
                      </a>
                  </div>
                  <div class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PROFIL</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/profil/sejarah.php">Sejarah</a></li>
                          <li><a class="dropdown-item" href="/profil/visimisi.php">Visi Misi </a></li>
                          <li><a class="dropdown-item" href="#">Sarana Prasarana</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <!-- isi dropdown PROFIL -->
                      </ul>
                  </div>
                  <div class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PPDB 2023</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/daftar.php">Daftar Siswa</a></li>
                        <li><a class="dropdown-item" href="/formulir.php">Cetak Formulir PPDB</a></li>
                        <li><a class="dropdown-item" href="/seleksi.php"> Hasil Seleksi </a></li>
                        <li><a class="dropdown-item" href="/pengumuman.php">Jadwal Penting</a></li>
                        <li><hr class="dropdown-divider"></li>
                          <!-- isi dropdown PPDB 2023 -->
                      </ul>
                  </div>
              <?php } else { ?>
                  <a class="nav-link" href="/siswa/list-siswa.php">List SISWA</a>
                  <a class="nav-link" href="/about2.php">ABOUT</a>
              <?php } ?>
              <a class="nav-link" href="/contact.php">CONTACT</a>
              <a class="nav-link" href="/logout.php">Logout</a>
            </div>
          </div>
        </div>
      </nav>
<!--end navbar -->
</body>
</html>