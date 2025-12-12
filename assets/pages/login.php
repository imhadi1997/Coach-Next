<section class="contactts">
    <div  class="contactt">
      <ul>
        <li><i class="fa fa-phone"></i><a href="#">+92 42 321 479 1116</a></li>
        <li><i class="fa fa-envelope"></i><a href="#">coachnextdoor@gmail.com</a></li>
      </ul>
    </div>
    <div class="loginn">
      <ul>
      <li><i class="fa fa-sign-in"></i><a href="http://localhost/coachnext/index.php">Login</a></li>
     </ul>
    </div>
</section>

<section class="sub-header">
<nav>
<a href="front-end/home.html"><img src="assets/images/usericon.png" alt=""></a>
<div class="nav-links" id="navlinks">
  <i class="fa fa-times" onclick="hideMenu()"></i>
  <ul>
    <li><a href="front-end/home.html">HOME</a><i class="fa fa-caret-down"></i></li>
     <li><a href="front-end/about.html">ABOUT</a><i class="fa fa-caret-down"></i></li>
     <li><a href="front-end/services.html">SERVICES</a><i class="fa fa-caret-down"></i></li>
     <li><a href="front-end/gallery.html">GALLERY</a><i class="fa fa-caret-down"></i></li>
    <div class="dropdownn">
   <button class="dropbtnn">BLOG &nbsp <i class="fa fa-caret-down"></i></button>
   <div class="dropdownn-content">
     <a href="front-end/blog.php">blog</a>
    </div>
   </div>
    <li><a href="front-end/contact.html">CONTACT</a><i class="fa fa-caret-down"></i></li>
    <li class="log"><i class="fa fa-sign-in"></i><a href="http://localhost/coachnext/index.php">Login</a></li>
  </ul>
</div>
<i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
</section>
    <div class="login">
        <div class="col-sm-12 col-md-4 ">
            <form method="post" action="assets/php/actions.php?login">
                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="assets/images/logo.png" alt="" height="45">
                </div>
                <h1 class="h5 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="text" name="username_email" value="<?=showFormData('username_email')?>" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">username/email</label>
                </div>
                <?=showError('username_email')?>
                <div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">password</label>
                </div>
                <?=showError('password')?>
                <?=showError('checkuser')?>


                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Sign in</button>
                    <a href="?signup" class="text-decoration-none">Singup Request</a>


                </div>
                <a href="?forgotpassword&newfp" class="text-decoration-none">Forgot password ?</a>
            </form>
        </div>
    </div>
