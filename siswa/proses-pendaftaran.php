<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location:login.php");
  exit;
}
include("function.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    // buat query
    $sql = "INSERT INTO user (nama, password) VALUE ('$nama', '$password')";
    $query = mysqli_query($conn);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>