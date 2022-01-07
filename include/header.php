<?php require_once "scripts/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/navbar-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Home Services</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300;400&display=swap');

        .navbar {
            /* background: linear-gradient(0deg, #6481d2, #8e91fd); */
            background: linear-gradient(0deg, #a9968ae0, #5782c1) !important;
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.2), 0 0 20px 0 rgba(0, 0, 0, 0.19);
            opacity: 100;
        }

        .left-nav {
            display: flex;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            border-right: 2px solid white;
        }

        .navbar-brand label {
            margin-left: 10px;
        }

        .brand-name {
            font-size: 1.8rem;
            margin-bottom: 0px;
            font-family: 'Poppins';
            letter-spacing: 1px;
            color: #b5d6ff;
            margin-right: 20px;
            font-family: 'Kalam', cursive;
        }

        a.my-bookings {
            color: white;
            text-decoration: none;
            margin-right: 29px;
            font-size: 20px;
            padding: 5px;
        }

        .profile-menu .dropdown-menu {
            right: 0;
            left: unset;
        }

        .profile-menu .fa-fw {
            margin-right: 10px;
        }

        .toggle-change::after {
            border-top: 0;
            border-bottom: .3em solid;
        }

        .bg-custom-1 {
            background-color: #85144b;
        }

        .bg-custom-2 {
            background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top">
        <?php if (!isset($_SESSION['user'])) : ?>
            <div class="left-nav">
                <a class="navbar-brand" href="./index.php">
                    <img src="./animation/Servify 24x7-logo/customer-support2.png" alt="" width="42" height="32" class="d-inline-block align-text-top">
                    <label for="" class="brand-name">Servify.24x7</label>

                    <!-- <img src="./animation/Servify 24x7-logo/vector/default-monochrome.svg" alt="" width="42" height="32" class="d-inline-block align-text-top">  -->
                </a>
                <a class="nav-item nav-link active" id="find-provider" href="index.php">Home</a>
                <!-- <a class="nav-item nav-link" href="login.php">Login Service Provider</a> -->
                <!-- <a class="nav-item nav-link" id="register-provider" href="register.php">Register Service Provider</a> -->
                <a class="nav-item nav-link" id="about" href="about.php">About</a>
                <a class="nav-item nav-link" id="contact-us" href="contact-us.php">Contact Us</a>
            </div>
            <div class="profile">
                <?php if (isset($_SESSION['username'])) : ?>
                    <p><a class="my-bookings nav-item" id="my-bookings" href="mybookings.php">My Bookings</a></p>

                    <nav class="navbar-expand-sm">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction()">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-list-4">
                            <ul class="navbar-nav">
                                <li class="dropdown">
                                    <a class="nav-link dropdown-toggle" onclick="myFunction()" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu" id="btndrop" aria-labelledby="navbarDropdownMenuLink" style="margin-left: -74px;">
                                        <a class="dropdown-item" href="#"> <p class="user-name" style="margin-right: 13px;font-size: 19px;">Welcome&nbsp; <strong> <?php echo $_SESSION['username']; ?></strong></p></a>
                                        <a class="dropdown-item" href="#">Edit Profile</a>
                                        <a class="dropdown-item" href="./LOGIN/logout-user.php">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>


                    <!-- <p class="user-name" style="margin-right: 13px;font-size: 19px;">Welcome&nbsp; <strong> <?php echo $_SESSION['username']; ?></strong></p> -->
                    <p class=""> <a href="./LOGIN/logout-user.php" class="btn btn-danger" role="button" style="color: white;margin: 5px 6px 6px 4px; border-radius: 20px">LOGOUT</a> </p>


                    <!--  ------------------------------------------------------------- -->

                    <!-- <button type="button" id= "btndrop" style= "height: 30px; width:40px" onclick="drop">
                    A
                    </button> -->

                    <!-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="myFunction()">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" id="btndrop" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div> -->



                <?php endif; ?>
            </div>

        <?php elseif ($_SESSION['user']->name == 'admin') : ?>
            <div class="admin-nav">
                <li><a class="nav-item nav-link " id="admin-manage-provider" href="managehall.php">Manage Providers</a></li>
                <li><a class="nav-item nav-link" id="admin-manage-booking" href="admin.php">Manage Booking</a></li>
                <!-- <li><a class="nav-item nav-link" href="logout.php">Log Out</a></li> -->
            </div>

            <div class="profile">
                <p class="user-name" style="margin-right: 13px;font-size: 19px;">Welcome&nbsp; <strong>Admin</strong></p>
                <p class=""> <a href="./LOGIN/logout-user.php" class="btn btn-danger" role="button" style="color: white;margin: 5px 6px 6px 4px; border-radius: 20px">LOGOUT</a> </p>
            </div>

        <?php else : ?>
            <a class="nav-item nav-link" id="provider-update-profile" href="provider.php">Update Profile</a>
            <a class="nav-item nav-link" id="provider-manage-booking" href="provider-bookings.php">Manage Booking</a>
            <div class="profile">
                <p class="user-name" style="margin-right: 13px;font-size: 19px;">Welcome&nbsp; <strong><?php echo $_SESSION['user']->name; ?></strong></strong></p>
                <p class=""> <a href="./LOGIN/logout-provider.php" class="btn btn-danger" role="button" style="color: white;margin: 5px 6px 6px 4px; border-radius: 20px">LOGOUT</a> </p>
            </div>
            <!-- <a class=" btn btn-danger" href="logout.php" role="button" style="color: white;margin: 5px 6px 6px 4px; border-radius: 7px">Log Out</a> -->
        <?php endif; ?>

    </nav>

    <script>
        document.querySelectorAll('.dropdown-toggle').forEach(item => {
            item.addEventListener('click', event => {

                if (event.target.classList.contains('dropdown-toggle')) {
                    event.target.classList.toggle('toggle-change');
                } else if (event.target.parentElement.classList.contains('dropdown-toggle')) {
                    event.target.parentElement.classList.toggle('toggle-change');
                }
            })
        });

        function myFunction() {
            var element = document.getElementById("btndrop");
            element.classList.toggle("show");
        }

        document.querySelectorAll('.dropdown-menu').forEach(item => {
            item.addEventListener('click', event => {
                if (event.target.classList.contains('dropdown-menu')) {
                    event.target.classList.toggle('show');
                } else if (event.target.parentElement.classList.contains('dropdown-menu')) {
                    event.target.parentElement.classList.toggle('show');
                }

            })
        });
    </script>