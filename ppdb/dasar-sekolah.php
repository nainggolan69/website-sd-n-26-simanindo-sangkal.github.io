<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location:login.php");
  exit;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi</title>
    <link rel="stylesheet" href="visimisi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php include 'C:\laragon\www\ppdb\navbar.php';?>
<br>
<br>
<br>    
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow mb-3">
                            <div class="card-body">
                                <h2 class="text-center mb-4">Profil, Visi, Misi, dan Tujuan Sekolah</h2>
                                <h5>Profil</h5>
                                <p>
                                SD Negeri 26 Simanindo Sangkal berdiri pada tahun 1979. Yang melatarbelakangi pendirian sekolah ini adalah karena di wilayah ini belum ada sekolah tingkat pendidikan dasar atau Sekolah Dasar (SD). Sekolah dasar milik pemerintah ini pertama kali berdiri berdasarkan hasil rapat tetua desa dan para warga. Mereka ingin memajukan pengetahuan warga setempat di bidang pendidikan. Setelah melakukan rapat desa dan warga, ditemukanlah sebuah lahan hibah dan pemberian DAK (Dana Alokasi Khusus) dari pemerintah untuk pembangunan sekolah. Setelah proses gotong royong masyarakat dan bantuan pemerintah, sekolah ini berhasil dibangun pada bulan Juli tahun 1980 dan langsung digunakan.
                                </p>
                                <h5>Visi</h5>
                                <p class="mb-3">Terwujudnya peserta didik yang beriman, berprestasi, terampil, mandiri dan berwawasan global.</p>
                                
                                <h5>Misi</h5>
                                <p class="mb-3">
                                    Menanamkan keimanan dan ketaqwaan melalui pengalaman ajaran agama Berprestasi dalam semua pelajaran akademiks maupun non akademiks Mengoptimalkan proses pembelajaran dan bimbingan Mengembangkan bidang ilmu pengetahuan dan teknologi berdasarkan minat, bakat, dan potensi peserta didik Membina kemandirian peserta didik melalui kegiatan pembiasaan, kewirausahaan, dan pengembangan diri yang terencana dan berkesinambungan Menjalin kerjasama yang harmonis antar warga sekolah, dan lembaga lain yang terkait.
                                </p>

                                <h5>Tujuan</h5>
                                <p class="mb-3">
                                    Mengembangkan budaya sekolah yang religious melalui kegiatan keagamaan Siswa dibimbing untuk dapat kejuaran lomba anak prestasi maupun olympiade sains dan olah raga Semua kelas melaksanakan pendekatan pembelajaran aktif pada semua mata pelajaran Mengembangkan berbagai kegiatan dalam proses belajar di kelas berbasis pendidikan karakter bangsa Menyelenggarakan berbagai kegiatan social yang menjadi bagian dari pendidikan karakter bangsa Menjalin kerja sama dengan lembaga lain dalam merealisasikan program sekolah Memanfaatkan dan memelihara fasilitas mendukung proses pembeljaran berbasis TIK.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>