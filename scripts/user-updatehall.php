<?php
include_once "session.php";
include_once "checklogin.php";
include_once "DBUser.php";
include_once "helpers.php";

// if (!check()) {
//     header('Location: logout.php');
//     exit();
// }
$user_email = $_SESSION['email'];

$stmt = DBUser::query(
    "SELECT * FROM usertable WHERE email=?",
    [$user_email]
);
$user = $stmt->fetch(PDO::FETCH_OBJ);


if (isset($_POST['register'])) {
    $input = clean($_POST);

    $name = $input['name'];
    $id = $input['id'];
    $contact = $input['contact'];
    $email = $input['email'];
    $adder1 = $input['adder1'];
    $city = $input['city'];
    $password = $input['password'];
    $encppass = password_hash($password, PASSWORD_BCRYPT);


    $isProviderCreated = DBUser::query(
        "UPDATE usertable SET name=?, contact=?,email=?, address=?, city=?, password=? WHERE id=?",
        [$name,$contact,$email,$adder1,$city, $encppass,$id]
    );

    if ($isProviderCreated) {
        // unlink($user->photo);
        // header('Location: ../LOGIN/logout-user.php');
        header('Location: ../user-editprofile.php?msg=success');
        exit();
    } else {
        unlink('../storage/'.$file1);
        echo "";
        // header('Location: ../LOGIN/logout-user.php');
        header('Location: ../user-editprofile.php?msg=failed');
        exit();
    }
}
