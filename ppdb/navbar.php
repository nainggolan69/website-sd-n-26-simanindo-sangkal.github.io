<?php 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(!isset($_SESSION['login'])){
  header("Location:login.php");
  exit;
}



?>

<!--start navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/dashboard.php">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                  <div class="nav-item">
                      <a class="nav-link active" href="/index.php">
                      <i class="bi bi-house-door-fill"></i>
                          Beranda
                      </a>
                  </div>
                  <a class="nav-link" href="/dasar-sekolah.php">PROFIL</a>
                  <div class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PPDB Online</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/daftar.php">Daftar Siswa</a></li>
                        <li><a class="dropdown-item" href="/ppdb/pengumuman.php">Pengumuman</a></li>
                      </ul>
                  </div>
                <?php if (isset($_SESSION['level'])) {
                    if ($_SESSION['level'] == 'admin') {
                        echo '<a class="nav-link" href="/siswa/list-siswa.php">List SISWA</a>';
                    } else {
                        echo '<a class="nav-link" href="/contact.php">CONTACT</a>';
                    }
                }
                ?>
              <a class="nav-link" href="/logout.php">Logout</a>
            </div>
          </div>
        </div>
      </nav>
      <br><br>
<!--end navbar -->