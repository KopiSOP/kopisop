<?php
session_start();
if (isset($_SESSION['login'])) {
    header('location:../menu.php');
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../assets/styles/alert.css">
    <link rel="stylesheet" href="../../assets/styles/register.css">
    <title>Register</title>
</head>

<body>
    <?php include '../../component/alert.php' ?>
    <div class="row no-gutters">
        <div class="col-lg-5 col-md-12 no-gutters">
            <div class="leftside">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <img src="../../assets/images/logo.png" class="img-fluid" alt="kopisop">
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 no-gutters">
            <div class="rightside d-flex justify-content-center align-items-center">
                <div class="card-block" style="width: 25rem;">
                    <form action="../../controller/Register_Controller.php" method="POST">
                        <h1>Create Account</h1>
                        <div class="form-group">
                            <label for="nameInput">Full Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light border-0">
                                        <img class="input-icon" src="../../assets/icons/user.png" alt="user">
                                    </span>
                                </div>
                                <input type="name" name="name" class="form-control " id="nameInput" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emailInput">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light border-0">
                                        <img class="input-icon" src="../../assets/icons/email.png" alt="email">
                                    </span>
                                </div>
                                <input type="email" name="email" class="form-control " id="emailInput" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passwordInput">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light border-0">
                                        <img class="input-icon" src="../../assets/icons/lock.png" alt="password">
                                    </span>
                                </div>
                                <input type="password" name="password" class="form-control " id="passwordInput" placeholder="Enter your password" required>
                            </div>
                        </div>
                        <button type="submit" name="reg_user" class="btn btn-block btn-custom">Sign Up</button>
                    </form>
                    <br>
                    <p class="text-center">Already a member? <a href="./login.php">Sign in.</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>