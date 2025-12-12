<?php global $user;?>
    <nav class="navbar navbar-expand-lg ">
        <div class="container col-lg-9 col-sm-12 col-md-10 d-flex flex-lg-row flex-md-row flex-sm-column justify-content-between">
            <div class="d-flex justify-content-between col-lg-8 col-sm-12">
                <a class="navbar-brand" href="front-end/home.html">
                    <img src="assets/images/usericon.png" alt="" height="" style="width:100px;">
                </a>



         <form class="d-flex input" id="searchform">
                <div class="input-group">
                  <div class="form-outline">
                    <input type="search"  id="search" class="form-control" />
                  </div>

                </div>




<div class="bg-white text-end rounded border shadow py-3 px-4 mt-5" style="display:none;position:absolute;z-index:+99;magrin-top:20px;" id="search_result" data-bs-auto-close="true">
<button type="button" class="btn-close" aria-label="Close" id="close_search"></button>
<div id="sra" class="text-start">
<p class="text-center text-muted">enter name or username</p>

</div>
</div>

</form>
            </div>


            <ul class="navbar-nav flex-fill flex-row justify-content-evenly mb-lg-1 mb-sm-0">

                <li class="nav-item">
                    <a class="nav-link text-light" href="?"><i class="fa fa-home" style="font-size:30px"></i></a>
                </li>
                <li class="nav-item">

                    <a class="nav-link text-light" data-bs-toggle="modal" data-bs-target="#addpost" href="#"><i class="fa fa-plus" style="font-size:30px"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light" data-bs-toggle="offcanvas" href="#message_sidebar" href="#"><i class="fa fa-comments" style="font-size:30px"></i>  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger" id="msgcounter">

  </span></a>
                </li>
                <li class="nav-item dropdown dropstart">
                    <a class="nav-link" style="margin:0;"href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" >

                    </a>
                    <ul class="dropdown-menu position-absolute top-100 end-50" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="?u=<?=$user['username']?>"><i class="fa fa-user"></i> My Profile</a></li>

                        <li><a class="dropdown-item" href="?editprofile"><i class="fa fa-edit"></i> Edit Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="assets/php/actions.php?logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>

                </li>

            </ul>
<h6  style="margin: 0px; text-transform:capitalize;color:#fff;"><?=$user['first_name']?> <?=$user['last_name']?></h6>

        </div>
    </nav>
