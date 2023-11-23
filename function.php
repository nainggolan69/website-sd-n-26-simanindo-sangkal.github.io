<?php

$_SERVER = "localhost";
$user = "root";
$password = "";
$db = "db_siswa";

$conn = mysqli_connect($_SERVER, $user, $password, $db);

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
  
// function query($query){
//     $result = mysqli_query($conn, $query);
//     $rows=[];
//     while($row = mysqli_fetch_assoc($result)){
//         $rows[] = $row;
//     }

//     return $rows;
// }

function registrasi($data) {
    global $conn;
    $username = strtolower($data['username']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['confirm_password']);

    // Lakukan validasi data (misalnya, cek apakah password dan konfirmasi password sama)
    if ($password !== $password2) {
        // Jika password dan konfirmasi password tidak sama, berikan pesan kesalahan
        echo "Password and confirm password do not match.";
        exit; // Berhenti proses selanjutnya
    }

    // Hash password sebelum menyimpannya ke database
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Simpan data user baru ke database
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }




    //cek username sudah ada atau belom
    mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('username sudah terdaftar')</script>";
        return false;
    }


    //cek konfirmasi pasword
    if($password !== $password2){
        echo "<script>
        alert('pasword tidak sesuai')</script>";
        return false;
    }
    //enkripsi pasword
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}





?>
