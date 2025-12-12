<?php
$function_url="../assets/php/functions.php";
include('./php/admin_functions.php');
if(!isset($_SESSION['admin_auth'])) header('Location:./pages/login.php');
$admin = getAdmin($_SESSION['admin_auth']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CoachNextDoor| Dashboard</title>
  <link rel="stylesheet" href="pages/css/style1.css">

  <link rel="shortcut icon" href="pages/src/images/favicon.png" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous"
  />
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets/images/icon.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <li class="nav-item">
        <a class=" btn btn-sm btn-danger" href="php/admin_actions.php?logout" role="button">
          Logout
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="color:#fff; background-color: #343a40">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../assets/images/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color:#fff;">CoachNextDoor</span>
    </a>

    <div class="sidebar" style="background-color:#343a40">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info"  >
          <a href="#" style="color:#fff" class="d-block"><?=$admin['full_name']?></a>
        </div>
      </div>




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" >
            <a href="?dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" style="color:#ff1313"></i>
              <p style="color:#fff">
                Dashboard

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?edit_profile" class="nav-link">
              <i class="nav-icon fas fa-user" style="color:#ff1313"></i>
              <p style="color:#fff">
               Edit Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?add_user" class="nav-link">
              <i class="nav-icon fas fa-user" style="color:#ff1313"></i>
              <p style="color:#fff">
                 Add User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?user_request" class="nav-link">
              <i class="nav-icon fas fa-user" style="color:#ff1313"></i>
              <p style="color:#fff">
                 User Request
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?add_blog" class="nav-link">
              <i class="nav-icon fas fa-user" style="color:#ff1313"></i>
              <p style="color:#fff">
                 Add Blog
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?blog_detail" class="nav-link">
              <i class="nav-icon fas fa-user" style="color:#ff1313"></i>
              <p style="color:#fff">
                 Blog Details
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              <?php if(isset($_GET['edit_profile'])){
                echo "Edit Profile";

              }
else if (isset($_GET['add_user'])) {
   echo "Add User";
 }
 else if (isset($_GET['user_request'])) {
   echo "User List";
 }
 else if (isset($_GET['add_blog'])) {
   echo "Add Blog";
 }
 else if (isset($_GET['blog_detail'])) {
   echo "Blog Details";
 }
              else{

                echo "Dashboard";
              } ?>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      <?php if(isset($_GET['edit_profile'])){

      }
else if (isset($_GET['add_user'])) {
  // code...
}
else if (isset($_GET['user_request'])) {
  // code...
}
else if (isset($_GET['add_blog'])) {
  // code...
}
else if (isset($_GET['blog_detail'])) {
  // code...
}
      else{
        ?>
 <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=totalUsersCount()?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=totalPostsCount()?></h3>
                <p>Total Posts</p>
              </div>

              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=totalCommentsCount()?></h3>
                <p>Total Comments</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=totalLikesCount()?></h3>
                <p>Total Likes</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <?php
      }

      ?>

        <!-- /.row -->
        <!-- Main row -->
       <div class="row">
<?php
if(isset($_GET['edit_profile'])){
?>
 <div class="card card-primary col-12">
              <div class="card-header">
                <h3 class="card-title">Edit Your Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?=showError('adminprofile')?>
              <form method="post" action="php/admin_actions.php?updateprofile">
                <input type="hidden" name="user_id" value="<?=$admin['id']?>" >
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" name="full_name" value="<?=$admin['full_name']?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"  value="<?=$admin['email']?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" name="password" value="<?=$admin['password_text']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
              </form>
            </div>
<?php
}


  else if(isset($_GET['add_user'])){
  ?>
   <div class="card card-primary col-12">
                <div class="card-header">
                  <h3 class="card-title">Add Users</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?=showError('adminprofile')?>
                <form method="post" action="php/admin_actions.php?signup">
                  <input type="hidden"  >
                  <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" name="first_name"   class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" name="last_name"   class="form-control" id="exampleInputEmail1" placeholder="Enter Second Name" required>
                    </div>
                    <?=showError('first_name')?>
                    <?=showError('last_name')?>
                    <div class="d-flex gap-3 my-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                                value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                            <label class="form-check-label" for="exampleRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                                value="2" <?=showFormData('gender')==2?'checked':''?>>
                            <label class="form-check-label" for="exampleRadios3">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                                value="0" <?=showFormData('gender')==0?'checked':''?>>
                            <label class="form-check-label" for="exampleRadios2">
                                Other
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="email" name="email"   class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                    </div>
                      <?=showError('email')?>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Username</label>
                      <input type="text" name="username"  class="form-control" id="exampleInputPassword1" placeholder="Enter Username">
                    </div>
                    <?=showError('username')?>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                   <?=showError('password')?>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add User</button>
                  </div>
                </form>
              </div>
  <?php
}

else if(isset($_GET['user_request'])){
?>

<div class="card w-100">
  <div class="card-header">
    <h3 class="card-title">User Lists</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <?php
$userslist = getUsersList();
$count=1;
    ?>
    <table  class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>#No</th>
        <th>User</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>

      <?php
foreach($userslist as $user){
?>
<tr>
        <td>#<?=$count?></td>
        <td>
          <div class="d-flex">
            <div>
              <img src="../assets/images/profile/<?=$user['profile_pic']?>" class="rounded-circle border border-2 shadow-sm mx-2" width="55px" height="55px" />
            </div>
            <div>
              <h5><?=$user['first_name'].' '.$user['last_name']?> - <span class="text-muted">@<?=$user['username']?></span></h5>
              <h6 class="text-muted"><?=$user['email']?></h6>


            </div>
</div>
        </td>

        <td>


        <a href="./php/admin_actions.php?userlogin=<?=$user['email']?>" target="_blank" class="btn btn-success btn-sm m-1">Login User</a>

        <?php if($user['ac_status']==0): ?><button class="m-1 btn btn-warning btn-sm verify_user_btn" data-user-id="<?=$user['id']?>">Verify</button><?php endif; ?>


            <button style="display:<?=$user['ac_status']==1?'':'none'?>" class="m-1 btn btn-danger btn-sm block_user_btn ub" data-user-id="<?=$user['id']?>">Block</button>
            <button style="display:<?=$user['ac_status']==2?'':'none'?>" class="m-1 btn btn-primary btn-sm unblock_user_btn" data-user-id="<?=$user['id']?>">Unblock</button>
           <a href='php/delete-user.php?id=<?php echo $user["id"]; ?>'> <button type="button" class="m-1 btn btn-danger btn-sm unblock_user_btn"name="button">Delete</button> </a>



        </td>

      </tr>
<?php
  $count++;
}
      ?>

      <?php
      }

      else if(isset($_GET['add_blog'])){
      ?>
      <div id="admin-content">
          <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <h1 class="admin-heading">Add New Post</h1>
                 </div>
                  <div class="addingpanel">

                      <form  action="../assets/php/save-blogpost.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="post_title">Title</label>
                              <input type="text" name="blog_title" class="form-control" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Description</label>
                              <textarea name="blogdesc" class="form-control" rows="5"  required></textarea>
                          </div>

                          <div class="form-group">
                              <label for="exampleInputPassword1">Post image</label>
                              <input type="file" name="fileToUpload" required>
                          </div>
                          <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <?php
      }

      else if(isset($_GET['blog_detail'])){
      ?>
      <div id="main-content">

          <?php
             // database configuration
            /* Calculate Offset Code */

            /* select query of user table with offset and limit */
            $sql = "SELECT * FROM blog ORDER BY blogid  ";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
            if(mysqli_num_rows($result) > 0){
          ?>
      <table cellpadding="7px">
         <thead>
         <th>ID</th>
         <th>Title</th>
         <th>Description</th>
         <th>Post_Date</th>
         <th>Post_Img</th>
         <th>Delete</th>

         </thead>
         <tbody>
           <?php
             $serial =  + 1;
             while($row = mysqli_fetch_assoc($result)) {
           ?>
             <tr>
                 <td class='id'><?php echo $serial; ?></td>
                 <td><?php echo $row['title']; ?></td>
                 <td><?php echo $row['description']; ?></td>
                 <td><?php echo $row['blog_date']; ?></td>
                 <td><?php echo $row['blog_img']; ?></td>

                 <td class='delete'><a href='../assets/php/delete_blog.php?id=<?php echo $row["blogid"]; ?>'><i class='fa fa-trash-o'></i></a></td>
             </tr>
           <?php
             $serial++;
           } ?>
         </tbody>
         </table>
         <?php
         }else {
         echo "<h3>No Results Found.</h3>";
         }
         // show pagination
         $sql1 = "SELECT * FROM blog";
         $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

         ?>

            </div>

<?php
}
else {

 ?>
            <div class="card w-100">
              <div class="card-header">
                <h3 class="card-title">User Lists</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
$userslist = getUsersList();
$count=1;
                ?>
                <table  class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#No</th>
                    <th>User</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
foreach($userslist as $user){
  ?>
   <tr>
                    <td>#<?=$count?></td>
                    <td>
                      <div class="d-flex">
                        <div>
                          <img src="../assets/images/profile/<?=$user['profile_pic']?>" class="rounded-circle border border-2 shadow-sm mx-2" width="55px" height="55px" />
                        </div>
                        <div>
                          <h5><?=$user['first_name'].' '.$user['last_name']?> - <span class="text-muted">@<?=$user['username']?></span></h5>
                          <h6 class="text-muted"><?=$user['email']?></h6>


                        </div>
</div>
                    </td>

                    <td>


                    <a href="./php/admin_actions.php?userlogin=<?=$user['email']?>" target="_blank" class="btn btn-success btn-sm m-1">Login User</a>

                    <?php if($user['ac_status']==0): ?><button class="m-1 btn btn-warning btn-sm verify_user_btn" data-user-id="<?=$user['id']?>">Verify</button><?php endif; ?>


                        <button style="display:<?=$user['ac_status']==1?'':'none'?>" class="m-1 btn btn-danger btn-sm block_user_btn ub" data-user-id="<?=$user['id']?>">Block</button>
                        <button style="display:<?=$user['ac_status']==2?'':'none'?>" class="m-1 btn btn-primary btn-sm unblock_user_btn" data-user-id="<?=$user['id']?>">Unblock</button>
                       <a href='php/delete-user.php?id=<?php echo $user["id"]; ?>'> <button type="button" class="m-1 btn btn-danger btn-sm unblock_user_btn"name="button">Delete</button> </a>



                    </td>

                  </tr>
  <?php
  $count++;
}
                  ?>

   <?php
       }
           ?>
</tbody>
</table>

</div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://www.youtube.com/channel/UCtpdZTndGnAyX-8uxUdTDnQ" target="_blank">CoachNextDoor Pvt Ltd.</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" >
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->





<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="js/actions.js?v=<?=time()?>"></script>

</body>
</html>
<?php

if(isset($_SESSION['error'])){
  unset($_SESSION['error']);

}
?>
