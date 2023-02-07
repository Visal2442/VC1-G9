<?php
session_start();
require 'database/database.php';
$account_error = "";
$isUser = false;
if (isset($_POST['submit'])) {
    if (!empty($_POST['email'])) {
        $user = getUserByEmail($_POST['email']);
        if (!empty($user)) {
            if ($user['role'] == 1) {
                $_SESSION['seller_name'] = $user['username'];     // type 1 = seller
                header('Location:/seller');
                exit();
            }
        } else {
            // $customer = getCusByEmail($_POST['email']);
            $is_passowrd = password_verify($_POST["password"], $user["password"]);
            if ($_POST["username"] == $user["username"] && $is_passowrd) {
                $time = time() + (30 * 24 * 3600);
                setcookie("username", $user["username"], $time);
                setcookie("email", $user["email_address"], $time);
                setcookie("date", $user["date_of_birth"], $time);
                setcookie("address", $user["address"], $time);
                $isUser = true;
            }
        }
    }
    if ($isUser) {
        header('location:/');
        exit();
    } else {
        $account_error = 'Account Invalid';
    }
}
