<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location:login.php");
  exit;
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru </title>
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

  
  </head>
<body>

    <?php include 'C:\laragon\www\ppdb\navbar.php';?>


    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>

    <?php endif; ?>

      <!-- Carousel start -->
      <br> <br> <br>
      
      <div class="container mt-8">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/gambar/1.jpeg" class="d-block w-100 img-fluid" alt="gambar murid">
                        <div class="carousel-caption d-none d-md-block text-warning">
                            <p>Antusiasme murid berfoto bersama kepala sekolah dan guru.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/gambar/2.jpeg" class="d-block w-100 img-fluid" alt="gambar murid">
                        <div class="carousel-caption d-none d-md-block text-warning">
                            <p>Sesi foto para Guru bersama Kepala Sekolah.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/gambar/3.jpeg" class="d-block w-100 img-fluid" alt="gambar murid">
                        <div class="carousel-caption d-none d-md-block text-warning">
                            <p>murid-murid melakukan baris-berbaris pada hari ulos.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/gambar/4.jpeg" class="d-block w-100 img-fluid" alt="gambar murid">
                        <div class="carousel-caption d-none d-md-block text-warning">
                            <p>murid-murid meraih penghargaan pada festival lomba seni siswa nasional.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/gambar/5.jpeg" class="d-block w-100 img-fluid" alt="gambar murid">
                        <div class="carousel-caption d-none d-md-block text-warning">
                            <p> foto petugas upacara yang dilakukan setiap hari senin.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-4">
            <br>
        <h3 class="mb-4 text-primary">Sejarah SD NEGERI 26 SIMANINDO SANGKAL</h3>
            <p>
                SD Negeri 26 Simanindo Sangkal berdiri pada tahun 1979. Yang melatarbelakangi pendirian sekolah ini adalah karena di wilayah ini belum ada sekolah tingkat pendidikan dasar atau Sekolah Dasar (SD). Sekolah dasar milik pemerintah ini pertama kali berdiri berdasarkan hasil rapat tetua desa dan para warga. Mereka ingin memajukan pengetahuan warga setempat di bidang pendidikan. Setelah melakukan rapat desa dan warga, ditemukanlah sebuah lahan hibah dan pemberian DAK (Dana Alokasi Khusus) dari pemerintah untuk pembangunan sekolah. Setelah proses gotong royong masyarakat dan bantuan pemerintah, sekolah ini berhasil dibangun pada bulan Juli tahun 1980 dan langsung digunakan.
            </p>
            <footer class="text-muted">
                Sumber data: orang tua/masyarakat setempat
            </footer>
        </div>
    </div>
</div>

<br><?php include 'C:\laragon\www\ppdb\footer.php'; ?>
    <?php// include 'C:\laragon\www\ppdb\ppdb\persyaratan.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
