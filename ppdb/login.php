<?php
require'function.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['login'])) {
    // Cek username dan password
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result= mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1 ){
        //cek pasword
        $row= mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"])){
            //set session
            $_SESSION['login'] = true;
            $_SESSION['level'] = $row['level'];
            
            // cek level user
            if ($_SESSION['level'] == "admin") {
                echo "<script>
                    alert('Login sebagai Admin berhasil');
                    window.location.href='index.php';
                  </script>";
            } else {
                echo "<script>
                    alert('Login sebagai User berhasil');
                    window.location.href='dashboard.php';
                  </script>";
            }
            exit;
        }
    }
    echo "<script>
        alert('Login gagal');
      </script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name='login'>Log In</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>

</html>
