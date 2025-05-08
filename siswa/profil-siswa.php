<?php
include("../function.php");

if (isset($_POST['daftar'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    // $foto=$_POST['foto'];
    
    //buat upload
    if($_POST['upload']){
        $ektensi_diperbolehkan = array('png','jpg');
        $namaFile= $_FILES['file']['name'];
        $x=explode('.', $namaFile);
        $ekstensi=strtolower(end($x));
        $ukuran=$_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];

        if(in_array($ekstensi, $ektensi_diperbolehkan) === true){
            if($ukuran < 1044070){
                move_uploaded_file($file_tmp, 'file/'.$namaFile);
                $query = mysqli_query("INSERT INTO upload VALUES (NULL, '$namaFile')");
                if($query){
                    echo 'File Berhasil di Upload';
                }else{
                    echo 'Gagal mengupload gambar';
                }
            }else{
                echo 'Ekstensi File Terlalu Besar';
            }
        }else{
            echo 'Ekstensi file yang di upload tidak diperbolehkan';
        }
    }


    // Buat query untuk menyimpan data ke database
    $sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Siswa baru berhasil didaftarkan!'); window.location='siswa/list-siswa.php';</script>";
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
    <div class="container">
        <h1>Daftar Baru</h1>

        <!-- form 2-->
        <form action="" method="POST" enctype="multipart/form-data">
            <fieldset>
                <p>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap"  />
                </p>
                <p>
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" required></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin" >Jenis Kelamin</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" > Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama</label>
                    <select name="agama" >
                        <option value='' selected disabled>Pilih Agama Anda</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal" >Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" placeholder="Nama Sekolah"  />
                </p>
                <p>
                    <label for="nama-ortu" >Nama Orang Tua </label>
                    <input type="text" name="nama-ayah" placeholder="nama Ayah">
                    <input type="text" name="nama-ibu" placeholder="nama Ibu">
                </p>
                <p>
                    <label for="image">Foto</label>
                    <input type="file" name='file'>
                    <input type="submit" name='upload' value='upload'>
                </p>
            </fieldset>
            <div class="form-actions">
				<a href="../index.php" class="btn btn-info">Kembali</a>
                <button type="submit" name="daftar" class="btn btn-success btn-lg">Daftar</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
