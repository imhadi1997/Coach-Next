<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <section class="contacts">
        <div  class="contact">
          <ul>
            <li><i class="fa fa-phone"></i><a href="#">+92 42 321 479 1116</a></li>
            <li><i class="fa fa-envelope"></i><a href="#">coachnextdoor@gmail.com</a></li>
          </ul>
        </div>
        <div class="login">
          <ul>
          <li><i class="fa fa-sign-in"></i><a href="http://localhost/coachnext/index.php">Login</a></li>
         </ul>
        </div>
    </section>

 <section class="sub-header">
   <nav>
     <a href="home.html"><img src="img/usericon.png" alt=""></a>
     <div class="nav-links" id="navlinks">
       <i class="fa fa-times" onclick="hideMenu()"></i>
       <ul>
         <li><a href="home.html">HOME</a><i class="fa fa-caret-down"></i></li>
          <li><a href="about.html">ABOUT</a><i class="fa fa-caret-down"></i></li>
          <li><a href="services.html">SERVICES</a><i class="fa fa-caret-down"></i></li>
          <li><a href="gallery.html">GALLERY</a><i class="fa fa-caret-down"></i></li>
         <div class="dropdown">
        <button class="dropbtn">BLOG &nbsp <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content">
          <a href="http://localhost/coachnext/front-end/blog.php">blog</a>
         </div>
        </div>
         <li><a href="contact.html">CONTACT</a><i class="fa fa-caret-down"></i></li>
         <li class="log"><i class="fa fa-sign-in"></i><a href="http://localhost/coachnext/index.php">Login</a></li> 
       </ul>
     </div>
 <i class="fa fa-bars" onclick="showMenu()"></i>
   </nav>
  <div class="textbox1">
    <h1>Blog</h1>

  </div>
</section>

<section>
  <?php
   include "../assets/php/config.php";
   $sql = "SELECT blog.blogid, blog.title,blog.description,blog.blog_date,blog.blog_img FROM blog ORDER BY blog.blogid";
   $result = mysqli_query($conn,$sql) or die("Query Failed");
   if (mysqli_num_rows($result)) {
     while ($row = mysqli_fetch_assoc($result)) {

   ?>
  <div class="container">
        <div class="square">
          <img src="../upload/<?php echo $row['blog_img'];?>" class="mask">
       <div class="h1"><?php echo $row['title'];?></div>
          <p><?php echo $row['description'];?></p>
 <label class="date" ><?php echo $row['blog_date'];?></label>
       <div><a href="#" target="_" class="button">Read More</a></div>

        </div>
        </div>
        <?php
           }
        }else {
          echo "<h2>No Record Found.<h2>";
        }
         ?>
      </div>


</section>


<footer class="footer">
  <ul class="footer-left">
    <li>
    <h2>CONTACT US</h2>
    <ul class="box">
      <li><a href="#">+92 42 321 479 1116</a></li>
      <li><a href="#">imalimofficial@gmail.com</a></li>
    </ul>
  </li>
  <div class="socials">
    <a href=""><img src="img/FACEBOOK.png" alt=""> </a>
    <a href=""><img src="img/twitter.png" alt=""></a>
    <a href=""><img src="img/instagram.png" alt=""></a>
    <a href=""><img src="img/linkedin.png" alt=""></a>
  </div>
  </ul>
  <ul class="footer-right">
    <li>
    <h2>OPEN HOUR</h2>
    <ul class="box">
      <li><a href="#">Monday 11am-7pm</a></li>
      <li><a href="#">Tuesday-Friday 11am-8pm</a></li>
      <li><a href="#">Saturday 10am-6pm</a></li>
      <li><a href="#">Sunday 11am-6pm</a></li>



    </ul>
  </li>
  <li class="features">
  <h2>COMMITMENTS</h2>
  <ul class="box">
    <li><a href="#">FREE SERVICES</a></li>
    <li><a href="#">TRANSPARENCY GUARANTEED</a></li>
    <li><a href="#">MARKET SURVEY SPECIALIST</a></li>
    <li><a href="#">DESIGN CONSULTANCY</a></li>
    <li><a href="#">SURVEY SPECAILLIST</a></li>
  </ul>
</li>
<li>
<h2>ADDRESS</h2>
<ul class="box">
  <li><a href="#">Head Office: 18 & 19, <br>LG-Floor, Al-Latif Center, Main Boulevard, Gulberg, Lahore.</a></li>
  <li><a href="contact us.html">Location</a></li>
  <img src="img/usericon.png" alt="">
</ul>
</li>
  </ul>
  <!---<div class="footer-bottom">
    <p>All Right Reserved by &copy; concept</p>
  </div>--->
</footer>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/main.js"></script>

    <script>
     var x = document.getElementById('navlinks');
     function showMenu()
     {
       x.style.right = "0";
     }
     function hideMenu()
     {
       x.style.right = "-100%";
     }

    </script>

  </body>
</html>
