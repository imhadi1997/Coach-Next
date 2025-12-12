<?php
global $user;
?>
    <div class="login">
        <div class="col-md-4 col-sm-11 bg-white border rounded p-4 shadow-sm">
            <form method="post" action="assets/php/actions.php?verify_email">
                <div class="d-flex justify-content-center">


                </div>
                <h1 class="h5 mb-3 fw-normal">Admin didn't Verify Your Email Id(<?=$user['email']?>)</h1>


                <p>Please Contact to Admnistrator For Other Query</p>
                <div class="form-floating mt-1">


                </div>
                <?php
if(isset($_GET['resended'])){
    ?>
<p class="text-success">Verification code resended !</p>

<?php
}
                ?>
                <?=showError('email_verify')?>

                <div class="mt-3 d-flex justify-content-between align-items-center"> 
                    <a href="assets/php/actions.php?resend_code" class="text-decoration-none" type="submit"></a>





                </div>
                <br>
                <a href="assets/php/actions.php?logout" class="text-decoration-none mt-5"><i class="bi bi-arrow-left-circle-fill"></i>
                    Logout</a>
            </form>
        </div>
    </div>
