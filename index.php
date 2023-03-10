<?php
include('connection.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> BFC Laboratories | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="hold-transition login-page">

  </div>
  <div class="carousel slide" data-ride="carousel" data-interval="3500">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="dist/img/carousel-pics/c-pic1.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img src="dist/img/carousel-pics/c-pic2.png" alt="">
      </div>
      <div class="carousel-item">
        <img src="dist/img/carousel-pics/c-pic3.jpeg" alt="">
      </div>
      <div class="carousel-item">
        <img src="dist/img/carousel-pics/c-pic4.jpeg" alt="">
      </div>
      <div class="carousel-item">
        <img src="dist/img/carousel-pics/c-pic5.jpeg" alt="">
      </div>
      <div class="carousel-item">
        <img src="dist/img/carousel-pics/c-pic6.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img src="dist/img/carousel-pics/c-pic7.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img src="dist/img/carousel-pics/c-pic8.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img src="dist/img/carousel-pics/c-pic9.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img src="dist/img/carousel-pics/c-pic10.jpg" alt="">
      </div>
    </div>

  </div>
  <img src="dist/img/bfc-logo-1.png" alt="" style="position: absolute; top: 0; left: 0; z-index: 100; width: 200px;">
  <div class="login-box" style="position: fixed;">
    <!-- /.login-logo -->
    <div id="login-card" class="card card-outline card-primary" style="background-color: rgba(216, 221, 236, 0.75) !important;">
      <div class="card-header text-center">
        <a href="index.php" class="">
          <img src="dist/img/valuemed-logo.png" alt="" style="width: 90%;">
          <div class="text-blue">
            Inventory System
          </div>
        </a>
      </div>
      <div class="card-body">
        <form action="functions.php" method="post">
          <div class="input-group mb-2">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <input type="text" class="form-control" name="username" placeholder="Username" required autocomplete="off">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <!-- /.col -->
          <div class="text-center d-flex justify-content-center align align-items-center">
            <button type="submit" class="btn btn-primary btn-block" name="signin">Submit</button>
          </div>
          <!-- /.col -->
      </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="d-flex justify-content-center">
        <a href="examples/recover-password-v2.php"> <u> Reset Password </u></a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

</body>

</html>