<section class="contactts">
    <div  class="contactt">
      <ul>
        <li><i class="fa fa-phone"></i><a href="#">+92 42 321 479 1116</a></li>
        <li><i class="fa fa-envelope"></i><a href="#">coachnextdoor@gmail.com</a></li>
      </ul>
    </div>
    <div class="loginn">
      <ul>
      <li><i class="fa fa-sign-in"></i><a href="index.php">Login</a></li>
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
        <div class="col-lg-4 col-md-8 col-sm-12 MT-4">
            <form method="post" action="assets/php/actions.php?signup">
                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="" alt="" height="45">
                </div>
                <h1 class="h5 mb-3 fw-normal">Create new account</h1>
                <div class="d-flex">
                    <div class="form-floating mt-1 col-6 ">
                        <input type="text" style="text-transform:capitalize;" name="first_name" value="<?=showFormData('first_name')?>" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">first name</label>
                    </div>
                    <div class="form-floating mt-1 col-6">
                        <input type="text" style="text-transform:capitalize;"name="last_name" value="<?=showFormData('last_name')?>" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">last name</label>
                    </div>
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
                <div class="form-floating mt-1">
                    <input type="email" name="email" value="<?=showFormData('email')?>" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">email</label>
                </div>
                <?=showError('email')?>

                <div class="form-floating mt-1">
                    <input type="text" name="username" value="<?=showFormData('username')?>" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">username</label>
                </div>
                <?=showError('username')?>

                <div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">password</label>
                </div>
                <?=showError('password')?>


                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Sign Up</button>


                </div>

            </form>
        </div>
    </div>
