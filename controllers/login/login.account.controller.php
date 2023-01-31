<?php
require 'database/database.php';
$account_error = "";
$isUser = false;
if (isset($_POST['submit'])) {
    if (!empty($_POST['email'])){
        $user = getUserByEmail($_POST['email']);
        $customer= getCusByEmail($_POST['email']);
    }
    if (!empty($user)) {
        $is_passowrd = password_verify($_POST["password"], $user["password"]);
        if ($_POST["username"] == $user["username"] && $is_passowrd) {
            $time=time() + (7 * 24 * 3600);
            setcookie("username", $user["username"], $time);
            setcookie("email", $user["email_address"], $time);
            setcookie("date", $customer["date_of_birth"], $time);
            setcookie("address", $customer["address"], $time);
            $isUser = true;
        } 
    }
    if ($isUser) {
        header('location:/');
    }
    else {
        $account_error = 'Account invalid';
    }
}
