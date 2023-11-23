<?php
require'function.php';

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
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

  
</head>
<body><br>
<?php include 'C:\laragon\www\ppdb\navbar.php';?>
<br><br>
    <!-- awal Jumbotron -->
      <section class="jumbotron bg-light p-5 shadow-lg text-center mx-5 my-5 ">
          <h4 class='display-4 mb-3'>Selamat Datang siswa dan para bapak ibu di Dashboard</h4>
          <h3 class='mb-4 sd26'>SD NEGERI 26 SIMANINDO SANGKAL</h3>
          <div class="container mt-4">
          <img src="/gambar/kepsek.jpeg" alt="murid" width="450" height="450" class='img-thumbnail mb-4'>
          <p class="text-justify">

              Sambutan Kepala Sekolah
              Sebastian Apung S.Ag.,M.Ag
              Selaku Kepala Sekolah <br>
                <br>
              Pujian, Hormat  Dan Rasa Syukur  Kita  Panjatkan Kepada Tuhan Yang Mahamurah Karena Dengan Berkat Dan Cinta Kasih Nya,<br> Website SD Negeri 26 Simanindo Sangkal Dapat Di Publikasikan.

              <br>Dengan kemajuan teknologi informasi di masa sekarang telah membawa Implikasi Yang Sangat Luas Terhadap Berbagai Aspek Kehidupan, Termasuk Di Dunia Pendidikan. Kemajuan Ini Merupakan Anugerah Yang Patut Kita Syukuri, Kerena Dengan Keberadaannya Dapat Membuka  Cakrawala  Baru  Dalam Mengikuti Perkembangan Dan Kemajuan Keilmuan Di Berbagai  Bidang Dan Aspek Kehidupan. Bahkan Dalam Melaksanakan Rutinitas Sehari-Hari  Kita Telah Banyak Dibantu Dengan Kehadiran Teknologi Ini.

              Pemanfaatan Teknologi Informasi Dan Komunikasi (TIK) Melalui Website Ini, Diharapkan Dapat Meningkatkan Eksistensi SD Negeri 26 Simanindo Sangkal  Dalam Rangka  Mengoptimalkan  Peran  Dan  Fungsinya Sebagai Lembaga Pendidikan Yang Berkualitas Secara Spiritual, Intelektual, Mental Dan Sosial. Selanjutnya Dengan Mengedepankan Proses Pendidikan Dan Pengajaran Yang Bermutu Mampu Membangun Pribadi Warga Sekolah Yang Berkarakter Kuat, Beriman Teguh, Disiplin, Cerdas, Terampil, Berwawasan Luas Dan Berkepribadian Unggul. Dengan Memperhatikan Dan Memanfaatkan Kemajuan teknologi informasi ini Kiranya Dapat Mendorong Dan Memfasilitasi Warga Sekolah Untuk Terus Berkarya Dan Berkontribusi Terhadap Pembangunan Daerah Dan Bangsa Melalui Penyelenggaraan Pendidikan Yang Selaras Dengan Harapan Masyarakat  Serta  Relevan Dengan  Dinamika  Kemajuan teknologi Pada Masa Sekarang Dan  Di  Masa Mendatang.

              Pengadaan Dan Penampilan Website Ini Disamping Untuk Memenuhi Kebutuhan Informasi Dan Publikasi Juga Untuk Memenuhi Harapan Masyarakat Dan Alumni Yang Membutuhkan Informasi Pendidikan Yang Diselenggarakan Oleh SD Negeri 26 Simanindo Sangkal.  Untuk Memenuhi Harapan Tersebut,  Tentunya Tidak Akan Memadai Jika Tanpa Partisipasi Aktif Dari Berbagai Pihak.  Untuk Itu Kritik Dan Saran Yang Membangun Dari Berbagai Pihak Sangat Kami Harapkan. 

              Akhirnya Saya Mengapresiasi Dan Mengucapkan terimakasih yang sebesar-besarnya Atas Penampilan Website SD Negeri 26 Simanindo Sangkal. Semoga Dengan Penampilan Website Ini Informasi Tentang SD Negeri 26 Simanindo Sangkal  Serta Aktifitas Yang Ada Di Dalamnya Dapat Diketahui Oleh Masyarakat Luas. Melalui Website Ini Juga Semoga Bisa Menjadi Sarana Komunikasi Bagi Alumni, Masyarakat, Dan Keluarga Besar SD Negeri 26 Simanindo Sangkal. 

              Terima Kasih Untuk Para Guru/Karyawan, Peserta Didik, Orang Tua, ALumni, Donatur Dan seluruh orang yang turut dalam berdirinya sekolah ini. Dedikasi, dukungan, dan kontribusi Anda semua membuat sekolah ini berkembang. Semoga bersama-sama kita terus membangun masa depan yang lebih baik. Terima kasih atas semua yang telah dilakukan!" 
          </p>
          </div>
          
          <p class='lead'>Untuk mendaftar siswa baru silahkan melakukan klik navbar PPDB dan daftar siswa diatas atau klik <a href="daftar.php">Disini</a></p>
      </section>
<!-- Akhir jumbotron -->

<?php include 'C:\laragon\www\ppdb\footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
