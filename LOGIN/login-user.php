<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style3.css">

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

        #login:hover{
            background: #485f85;
            border-color: #485f85;
        }
    </style>
</head>
<script src = 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'></script>
<body>
    <div class="bg-img">    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <!-- style="background: linear-gradient(0deg, #a9968ae0, #5782c1;) -->
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
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
                        <input class="form-control button" id="login" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                    <div class="link login-link text-center"><a href="login-provider.php">Login as Service Provider?</a></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>