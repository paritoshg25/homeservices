<?php
include_once "session.php";
include_once "checklogin.php";
include_once "DBUser.php";
include_once "helpers.php";

if (!check()) {
    header('Location: logout.php');
    exit();
}

if (isset($_POST['register'])) {
    $input = clean($_POST);

    $name = $input['name'];
    $id = $input['id'];
    $contact = $input['contact'];
    $email = $input['email'];
    $adder1 = $input['adder1'];
    $city = $input['city'];
    $password = $input['password'];

    $photo = $_FILES['photo'];

    $file1 = upload($photo);

    if ($file1 === false) {
        header('Location', '../register.php?msg=file');
        exit();
    }

    $isProviderCreated = DBUser::query(
        "UPDATE usertable SET name=?, contact=?,email=?, adder1=?, city=?, photo=?, password=? WHERE id=?",
        [$name,$contact,$email,$adder1,$city,$file1, $password,$id]
    );

    if ($isProviderCreated) {
        unlink($_SESSION['username']->photo);
        header('Location: ../logout.php');
        exit();
    } else {
        unlink('../storage/'.$file1);
        echo "";
        header('Location: ../logout.php');
        exit();
    }
}
