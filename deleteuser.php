<?php

include_once "scripts/checklogin.php";
include_once "scripts/helpers.php";
include_once "scripts/DBUser.php";

if (!check("admin")) {
    header('Location: logout.php');
    exit();
}
if (isset($_POST['remove'])) {
    $input = clean($_POST);
    
    $isRemoved = DBUser::query("DELETE FROM usertable WHERE id=?", [$input['id']]);

    if ($isRemoved) {
        header('Location: manageUsers.php?msg=success');
        exit();
    } else {
        header('Location: manageUsers.php?msg=failed');
        exit();
    }
}
