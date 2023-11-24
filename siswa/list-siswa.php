<?php 
include("C:\laragon\www\ppdb/function.php");

session_start();
if(!isset($_SESSION['login'])){
  header("Location:login.php");
  exit;
}



?>
<!-- $siswa = query("SELECT * FROM siswa"); -->
<!DOCTYPE html>
<html>
<head>
    <title> Siswa Baru di SD N 26 SIMANINDO SANGKAL</title>
    <link rel="stylesheet" href="../css/list-siswa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php include 'C:\laragon\www\ppdb\navbar.php';?>
<br><br>
<body class="bg-light">
    <div class="container">
        <header class="my-4">
            <h3>Siswa yang sudah mendaftar</h3>
        </header>
        <a href="/daftar.php" class="btn btn-primary mb-3">[+] Tambah Baru</a>
        <table class="table table-striped">
            <thead class="table-success">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Sekolah Asal</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM siswa";
            $query = mysqli_query($conn, $sql);
            $i = 1;
            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";
                echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                echo "<td>";
                echo "<a href='/siswa/form-edit.php?id=" . $siswa['id'] . "' class='btn btn-info btn-sm'>Edit</a> ";
                echo "<a href='/siswa/hapus.php?id=" . $siswa['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah Anda akan menghapus tabel ini?');\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
        <a href="/index.php" class="btn btn-secondary">Kembali ke Menu Utama</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
