<?php require_once "scripts/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Home Services</title>

    <style>
        .navbar {
            background: linear-gradient(0deg, #6481d2, #8e91fd);
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.2), 0 0 20px 0 rgba(0, 0, 0, 0.19);
            opacity: 100;
        }

        /* body {
            background: linear-gradient(0deg, #306788, #182942);
        } */

        a.my-bookings {
            color: white;
            text-decoration: underline;
            margin-right: 29px;
            font-size: 20px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top">
        <?php if (!isset($_SESSION['user'])) : ?>
            <a class="nav-item nav-link active" id="find-provider" href="index.php">Find Service Provider</a>
            <!-- <a class="nav-item nav-link" href="login.php">Login Service Provider</a> -->
            <!-- <a class="nav-item nav-link" id="register-provider" href="register.php">Register Service Provider</a> -->
            <a class="nav-item nav-link" id="about" href="about.php">About</a>
            <a class="nav-item nav-link" id="contact-us" href="contact-us.php">Contact Us</a>
            <div class="profile">
                <?php if (isset($_SESSION['username'])) : ?>
                    <p><a class="my-bookings nav-item" id="my-bookings" href="mybookings.php">My Bookings</a></p>
                    <p class="user-name" style="margin-right: 13px;font-size: 19px;">Welcome&nbsp; <strong> <?php echo $_SESSION['username']; ?></strong></p>
                    <p class=""> <a href="./LOGIN/logout-user.php" class="btn btn-danger" role="button" style="color: white;margin: 5px 6px 6px 4px; border-radius: 20px">LOGOUT</a> </p>
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