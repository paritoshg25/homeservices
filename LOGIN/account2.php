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
            width: 240px;
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

        /* .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 30px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 30px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        } */
    </style>


    <style>
        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 12%;
        }

        .logo img {
            width: 20rem;
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
                <a href="login-provider.php"><button class="glow-on-hover provider" type="button" style="">Service Provider </button></a>
            </div>
        </div>
    </div>
</body>

</html>