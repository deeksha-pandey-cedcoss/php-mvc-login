<?php
// login checker
include_once '../assets/variable.php';
include_once BASE_PATH . '/assets/db/config.php';
if (isset($_GET)) {
    $result = User::find_by_email($_GET['email']);
    if ($result->email && $result->pswd) {
        header('location:../View/success.php?');
    } else {
        header('location:../View/login.php');
    }
}
?>