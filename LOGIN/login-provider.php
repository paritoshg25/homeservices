<?php require_once "controllerUserData.php"; ?>
<?php require_once "../scripts/login.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">

    <style>
        .bg-img {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://businesscentre.yp.ca/documents/20515/38089/Importance+of+Search+for+Home+Services/f0b6e871-7fe7-4b97-8d66-c4f9b9be8ab9?t=1446211421000);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(3px);
        }
    </style>


</head>

<body>
    <div class="bg-img"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="../scripts/login.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login For Service Provider</h2>
                    <p class="text-center">Login with your email and password.</p>


                    <?php
                    if (isset($_SESSION['info'])) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (count($errors) > 0) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>



                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Register for Service Provider? <a href="register-provider.php">Register now</a></div>
                    <div class="link login-link text-center">Login as member? <a href="login-user.php">Login Here</a></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>