<?php

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('Location: welcome.php');
}


?>

<!doctype html>
<html lang="en">

<head>
    <?php require "links.php" ?>
    <title>Sign Up</title>
</head>

<body>
    <?php
    if (isset($_SESSION['signup']) && $_SESSION['signup'] == false && $_SESSION['show_email'] == true) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Email Already Exist </strong> You should try some other email.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }
    if (isset($_SESSION['signup']) && $_SESSION['signup'] == false && $_SESSION['show_pass'] == true) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Passwords are not matching</strong> Both password fields should be matching.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }
    ?>
    <section class="wrapper">
        <div class="container">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
                <div class="logo">
                    <img src="images/logo.png" class="img-fluid" alt="">
                </div>

                <form action="signupbackend.php" method="POST" class="rounded bg-white shadow p-5">
                    <h3 class="text-dark fw-bolder mb-2 fs-4"> Create An Account</h3>
                    <div class="fw-normal text-muted mb-3">
                        Already have an account ? <a href="login.php" class="text-decoration-none fw-bold text-primary">Sign in here</a>
                    </div>
                    <div class="form-floating mb-3">

                        <input type="text" name="username" class="form-control" id="username" aria-describedby="usernameHelp" required>
                        <label for="username" class="form-label">User Name</label>
                    </div>
                    <div class="form-floating mb-3">

                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                    </div>
                    <div class="form-floating mb-3">

                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                        <label for="exampleInputPassword1" class="form-label" aria-describedby="passwordHelp">Password</label>
                        <div id="passwordHelp" class="form-text text-start">Use 8 or more characters for your password</div>
                    </div>
                    <div class="form-floating mb-3">

                        <input type="password" name="cpassword" class="form-control" id="exampleInputConfirmPassword1" required>
                        <label for="exampleInputConfirmPassword1" class="form-label">Confirm Password</label>
                    </div>
                    <div class="mb-3 form-check text-start">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required checked>
                        <label class="form-check-label " for="exampleCheck1">I Agree <a href="#">Terms & Conditions</a></label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary submit_button my-4 w-100">Sign Up</button>
                    <div class="text-center text-muted text-uppercase mb-3">or</div>

                    <a href="#" class="btn btn-light w-100  mb-3  login_with text-decoration-none">
                        <img src="images/google-icon.svg" class="img-fluid" alt=""> Sign in with Google
                    </a>


                    <a href="#" class="btn btn-light  w-100 mb-3 login_with text-decoration-none">
                        <img src="images/facebook-icon.svg" class="img-fluid" alt=""> Sign in with Facebook
                    </a>

                </form>

            </div>

        </div>
    </section>



</body>

</html>