<?php
include 'config.php';

$id = $_GET['updateid'];

$sql_id = "select * from `from0` where id=$id";
$rslt = mysqli_query($con, $sql_id);
$row = mysqli_fetch_assoc($rslt);

  $name = $row['name'];
  $email =$row['email'];
  $username =$row['username'];
  $mobile = $row['mobile'];
  $password =$row['password']; 
  $term = $row['term'];


if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password']; 
  $term = 'checked';

  $sql_u = "update `from0` set id=$id, name='$name', email='$email', username='$username', mobile='$mobile', password='$password', term='$term' where id=$id ";
  $rslt = mysqli_query($con,$sql_u);

  if(!$rslt){
    die(mysqli_error($con));
  }else{
    header('location:display.php');
  }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Dashboard</span>
      </a>
      
    </div><!-- End Logo -->

    

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="display.php">
          <i class="bi bi-eye"></i>
          <span>Display</span>
        </a>
      </li><!-- End display Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="register.php">
          <i class="bi bi-pencil-square"></i>
          <span>Create</span>
        </a>
      </li><!-- End create Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-arrow-clockwise"></i>
          <span>Update</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-eyeglasses"></i>
          <span>Read</span>
        </a>
      </li><!-- End read Page Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="error-404.php">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      
    </ul>


  </aside><!-- End Sidebar-->

  <main id="main" class="main">

  <div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="index.html" class="logo d-flex align-items-center w-auto">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Dashboard</span>
          </a>
        </div><!-- End Logo -->

        <div class="card mb-3">

          <div class="card-body">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Update an Account</h5>
              <p class="text-center small">Enter your personal details to Update account</p>
            </div>
           
            <form method="POST">
              <div class="col-12">
                <label for="yourName" class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" required value="<?php echo $name; ?>">
                <div class="invalid-feedback">Please, enter your name!</div>
              </div>

              <div class="col-12">
                <label for="yourEmail" class="form-label">Your Email</label>
                <input type="email" name="email" class="form-control" required value="<?php echo $email; ?>">
                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
              </div>

              <div class="col-12">
                <label for="yourUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <span  class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" name="username" class="form-control"  required value="<?php echo $username; ?>">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
              <div class="col-12">
                <label  class="form-label">Mobile</label>
                <input type="mobileNumber" name="mobile" class="form-control" id="yourmobile" value="<?php echo $mobile; ?>" required>
                <div class="invalid-feedback">Please enter your Mobile!</div>
              </div>
              <div class="col-12">
                <label  class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="yourPassword" value="<?php echo $password; ?>" required>
                <div class="invalid-feedback">Please enter your password!</div>
              </div>

              <label class="form-label">
              </label>
              <div class="col-12">
                <button class="btn btn-primary w-100" name="submit" type="submit">Update Account</button>
              </div>
              
            </form>

          </div>
        </div>

        <div class="credits">
          
        </div>

      </div>
    </div>
  </div>

</section>

</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>