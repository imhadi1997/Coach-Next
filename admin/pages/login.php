<?php
include('../php/admin_functions.php');
if(isset($_SESSION['admin_auth'])) header('Location:../');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Panel</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="src/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="src/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="src/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="src/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="src/images/logo.png" alt="logo">
              </div>
              <form class="pt-3" action="../php/admin_actions.php?login"  method="POST" >
                <p class="login-box-msg">Login panel for admin only</p>
          <?=showError('useraccess')?>
                <div class="form-group">
                  <label for="InputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-danger"></i>
                      </span>
                    </div>
                    <input type="email" required name="email" class="form-control form-control-lg border-left-0" id="InputEmail" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="InputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-danger"></i>
                      </span>
                    </div>
                    <input type="password" required name="password" class="form-control form-control-lg border-left-0" id="InputPassword" placeholder="Password">
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="forget-password.php" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <button class="btn btn-block btn-danger btn-lg font-weight-dark auth-form-btn" type="submit" name="login">LOGIN</button>
                </div>
              </form>

            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; <?php echo date("Y"); ?>  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="src/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="src/js/off-canvas.js"></script>
  <script src="src/js/hoverable-collapse.js"></script>
  <script src="src/js/template.js"></script><script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  </body>
  </html>
  <?php

  if(isset($_SESSION['error'])){
    unset($_SESSION['error']);

  }
  ?>
