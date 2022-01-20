<?php

include_once "scripts/checklogin.php";
include_once "scripts/helpers.php";
include_once "scripts/DB.php";

if (!isset($_SESSION['username'])) {
    header('Location: logout.php');
    exit();
}
if (isset($_GET['id'])) {
    $input = clean($_GET);
    
    $isRemoved = DB::query("DELETE FROM bookings WHERE id=?", [$input['id']]);

    if ($isRemoved) {
        header('Location: provider-bookings.php?msg=success');
        exit();
    } else {
        header('Location: provider-bookings.php?msg=failed');
        exit();
    }
}
