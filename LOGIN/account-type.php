<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Type</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        html,
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://businesscentre.yp.ca/documents/20515/38089/Importance+of+Search+for+Home+Services/f0b6e871-7fe7-4b97-8d66-c4f9b9be8ab9?t=1446211421000);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Poppins', sans-serif;
            margin: 0px;
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
            margin: 34px 10px;
            padding: 20px;
        }

        .user {
            margin-right: 160px;
        }

        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.8);
            cursor: pointer;
            position: relative;
            /* z-index: 0; */
            border-radius: 30px;
        }

        .glow-on-hover:before {
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
        }
    </style>


    <style>
        .bg-img {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://businesscentre.yp.ca/documents/20515/38089/Importance+of+Search+for+Home+Services/f0b6e871-7fe7-4b97-8d66-c4f9b9be8ab9?t=1446211421000);
            /* background: linear-gradient(-45deg, #fff, #000); */
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(3px);
        }

        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 12%;
        }

        .logo img {
            width: 64%;
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
        <h1>Choose your Account Type: Choose hello world</h1>
        <div class="account-type">
            <div class="user">
                <button class="glow-on-hover" type="button"> <a href="login-user.php">User</a> </button>
            </div>
            <div class="provider">
                <button class="glow-on-hover" type="button" style="width: 260px;"> <a href="login-provider.php">Service Provider</a> </button>
            </div>
        </div>
    </div>
</body>

</html>