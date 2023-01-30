<?php
require 'database/database.php';
$account_error ="";
if (isset($_POST['submit'])) {
    $users = getUser();
    $password=$_POST['password'];
    foreach ($users as $user) {
        $is_passowrd=password_verify($password, $user['password']);
        if ($_POST['email'] == $user["email_address"] && $_POST['username'] == $user["username"] && $is_passowrd ) {
            $_SESSION['email'] = $user["email_address"];
            $_SESSION['username'] = $user["username"];
            setcookie("username", $user["username"], time()+(7*24*3600));
            $isUser = true;
            break;
        } else {
            $isUser = false;
            $account_error= 'Account invalid';
        }
    }
    if ($isUser) {
        header('location:/');
    }
}