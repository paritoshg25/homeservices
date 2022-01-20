<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Type</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        html,
        body {
            /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../animation/background.gif); */
            background: linear-gradient(87deg, #a9968ae0, #5782c1);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Poppins', sans-serif;
            margin: 0px;
        }

        .bg-img {
            height: 100vh;
            /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../animation/background.gif); */
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(3px);
        }

        h1 {
            color: #cef0ff;
            justify-content: center;
            text-align: center;
            font-size: 3rem;
        }

        a {
            text-decoration: none;
            display: inline-block;
            font-size: 1.7rem;
            padding: 0px;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .account-type {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
            height: 300px;
        }

        .glow-on-hover {
            font-family: 'Montserrat', sans-serif;
            width: 334px;
            height: 70px;
            cursor: pointer;
            display: inline-block;
            font-size: 1.6rem;
            padding: 0px;
            color: rebeccapurple;

            transition: all .5s ease;
            color: #fff;
            border: 3px solid white;
            text-transform: uppercase;
            text-align: center;
            line-height: 1;
            background-color: transparent;
            outline: none;
            border-radius: 4px;
        }

        .glow-on-hover:hover {
            color: #001F3F;
            background-color: #fff;
            border-radius: 4px;
        }
    </style>


    <style>
        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 12%;
        }

        .logo img {
            width: 31rem;
            border: 2px solid #a0c6ff;
            padding: 15px;
            background: rgb(10 23 22 / 30%);
        }
    </style>
</head>

<body>
    <div class="bg-img"></div>

    <div class="container">
        <div class="logo">
            <img src="../animation/logo3.png" alt="">
        </div>
        <!-- <h1>Choose your Account Type</h1> -->
        <div class="account-type">
            <div class="admin">
                <a href="login-user.php"><button class="glow-on-hover" type="button"> Admin</button></a>
            </div>
            <div class="user">
                <a href="login-user.php"><button class="glow-on-hover" type="button"> User</button></a>
            </div>
            <div class="provider">
                <a href="login-provider.php"><button class="glow-on-hover provider" type="button">Service Provider </button></a>
            </div>
        </div>
    </div>
</body>

</html>