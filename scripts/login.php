<?php

require_once 'session.php';
require_once 'DB.php';
require_once 'helpers.php';

if (isset($_POST['login'])) {
    $input = clean($_POST);

    // $contact = $input['contact'];
    $email = $input['email'];
    $password = $input['password'];

    if ($email ==  "admin.homeservice@gmail.com" && $password == "admin123") {
        $s = new stdClass();
        $s->name = "admin";
        $_SESSION['user'] = $s;
        $_SESSION['username'] = $s;

        header('Location: ../admin.php');
        exit();
    } else {
        $stmt = DB::query(
            "SELECT * FROM providers WHERE email=? AND password=?",
            [$email , $password]
        );
        $provider = $stmt->fetch(PDO::FETCH_OBJ);

        if (isset($provider->name)) {
            $_SESSION['user'] = $provider;
            $_SESSION['username'] = $provider;
            $_SESSION['provider-id'] = $provider->id;
            header('Location: ../provider-bookings.php');
        } else {
            $info = "Incorrect email or password!";
            $_SESSION['info'] = $info;
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
            header('Location: ../LOGIN/login-provider.php');

        }
    }
}
