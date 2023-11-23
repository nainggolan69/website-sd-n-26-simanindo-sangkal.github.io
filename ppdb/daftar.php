<?php
include("function.php");

if (isset($_POST['daftar'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    
    // Buat query untuk menyimpan data ke database
    $sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Siswa baru berhasil didaftarkan!'); window.location='ppdb/index.php';</script>";
    } else {
        echo "Pendaftaran gagal!";
        echo mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR BARU</title>
    <link rel="stylesheet" href="css/daftar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
       
    </style>
</head>
 
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Baru</h2>

    <form action="" method="POST" enctype="multipart/form-data" class="shadow p-4 bg-white rounded">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" class="form-select">
                <option selected disabled>Pilih Agama Anda</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Budha</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
            <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama Sekolah">
        </div>

        <div class="form-actions text-center">
            <a href="../index.php" class="btn btn-info me-2">Kembali</a>
            <button type="submit" name="daftar" class="btn btn-success me-2">Daftar</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
