<?php
session_start();
$not_exist = false;
$pass_incorr = false;
$not_verified=false;
if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['not_exist'] == true) {
        $not_exist = true;
    } 
    else if ($_SESSION['pass_incorr'] == true) {
        $pass_incorr = true;
    }
    else if($_SESSION['not_verified']==true){
            $not_verifed=true;
    }
    if ($_SESSION['loggedin'] == true) {
        header('Location: welcome.php');
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <?php require "links.php" ?>
    <title>Login</title>
</head>

<body>

    <?php
    if (isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==false) {
        if ($not_exist) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Email Not Exist </strong> Please enter correct email.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        if ($pass_incorr) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Incorrect Password </strong> Please enter correct password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        if($not_verified){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Account not verified. Check your inbox for the activation link </strong> Please enter correct password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    ?>
    <section class="wrapper">
        <div class="container">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
                <div class="logo">
                    <img src="images/logo.png" class="img-fluid" alt="">
                </div>

                <form method="POST" action="loginbackend.php" class="rounded bg-white shadow p-5">
                    <h3 class="text-dark fw-bolder mb-2 fs-4"> Sign In to HillTop</h3>
                    <div class="fw-normal text-muted mb-2">
                        New Here? <a href="signup.php" class="text-decoration-none fw-bold text-primary">Create new account</a>
                    </div>
                    <div class="form-floating mb-3">

                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="form-floating mb-3">

                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                    </div>
                    <!-- <div class="mb-3 form-check text-start">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label " for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="submit" name="submit" class="btn btn-primary submit_button my-4 w-100">Continue</button>
                    <div class="text-center text-muted text-uppercase mb-3">or</div>

                    <a href="#" class="btn btn-light w-100  mb-3  login_with text-decoration-none">
                        <img src="images/google-icon.svg" class="img-fluid" alt=""> Continue with Google
                    </a>


                    <a href="#" class="btn btn-light  w-100 mb-3 login_with text-decoration-none">
                        <img src="images/facebook-icon.svg" class="img-fluid" alt=""> Continue with Facebook
                    </a>

                </form>

            </div>

        </div>
    </section>


</body>

</html>