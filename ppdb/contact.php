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
    <title>contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



</head>
<body>
  <br>
    <!--start navbar -->
    <?php include 'C:\laragon\www\ppdb\navbar.php';?>
<!--end navbar -->
<br>
    <div class="row justify-content-center mx-5 my-5">
      <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
      <strong>Terima kasih</strong> Pesan anda sudah kami terima.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        <form name='contact-form'>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="nama">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
          </div>

          <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

          <button class="btn btn-primary btn-loading d-none" type="button" disabled>
          <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
          <span role="status">Loading...</span>
          </button>
        </form>
      </div>
    </div>
    <br>

    <br><br>

    <a href="https://wa.me/62812345678?text=Halo,%20saya%20ingin%20bertanya%20tentang%20..." class="whatsapp-icon" target="_blank">
    <i class='fab fa-whatsapp-square fa-3x' style="height:20px; font-size: 20px;"> klik disini</i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbwuQE_LN70Zny8ro8OO8MqIqiV4saZ9foGv2LMMXJJuQ5YSjgWrbGGfvI6LePt3r1mRqw/exec';
      const form = document.forms['contact-form'];
      const btnKirim = document.querySelector('.btn-kirim');    
      const btnLoading = document.querySelector('.btn-loading');
      const myAlert = document.querySelector('.my-alert');

      form.addEventListener('submit', e => {
      e.preventDefault();
      //ketika tombol submit di klik
      //tampilkan tombol loading, dan hilangkan tombol kirim
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');
      fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then(response => {
          //tampilkan tombol kirim, dan hilangkan tombol loading
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          //tampilkan alert
          myAlert.classList.toggle('d-none');
          //reset formnya
          form.reset();
          console.log('Success!', response)})
        .catch(error => console.error('Error!', error.message));
    });

  </script>
</body>
</html>