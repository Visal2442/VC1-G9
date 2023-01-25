<?php

require 'database/database.php';
$username_error = $email_error = $password_error = $confirm_error = $date_error = $address_error = "";
$form_valid = true;
if (isset($_POST['submit'])) {
    if (isset($_POST['username'])) {
        $username = validateInput($_POST['username']);
        if (strlen($username) > 5 && ctype_alnum($username)) {
            $_SESSION['username'] = $username;
        } elseif (empty($username)) {
            $username_error = "Must fill username";
            $form_valid = false;
        } else {
            $username_error = "Username is invalid";
            $form_valid = false;
        }
    }
    if (isset($_POST['email'])) {
        $email = validateInput($_POST['email']);
        if (str_contains($email, '@') && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email'] = $email;
        } elseif (empty($email)) {
            $email_error = "Email is required";
            $form_valid = false;
        } else {
            $email_error = "Email is invalid";
            $form_valid = false;
        }
    }
    if (isset($_POST['password'])) {
        $passowrd = validateInput($_POST['password']);
        if (strlen($passowrd) > 8) {
            $_SESSION['password'] = $passowrd;
        } elseif (empty($passowrd)) {
            $password_error = "Must fill password";
            $form_valid = false;
        } else {
            $passowrd = "Password is invalid";
            $form_valid = false;
        }
    }
    if (isset($_POST['confirm_password'])) {
        $confirm_password = validateInput($_POST['confirm_password']);
        if ($confirm_password === $passowrd) {
            $_SESSION['confirm_password'] = $confirm_password;
        } elseif (empty($passowrd)) {
            $confirm_error = "Must fill password";
            $form_valid = false;
        } else {
            $confirm_error = "Password does not match";
            $form_valid = false;
        }
    }
    if (isset($_POST['date_of_birth'])) {
        $date = validateInput($_POST['date_of_birth']);
        if (!empty($date)) {
            $_SESSION['date'] = $date;
        } else {
            $date_error = "Date invalid";
            $form_valid = false;
        }
    }
    if (isset($_POST['address'])) {
        $address = validateInput($_POST['address']);
        if (!empty($address)) {
            $_SESSION['address'] = $address;
        } else {
            $address_error = "Address invalid";
            $form_valid = false;
        }
    }
    if ($form_valid) {
        $type = 0;
        createUser($email, $username, $confirm_password, $type);
        createCustomer($address, $date, $email);
        header('location: /');
    }
}




// validate input 
function validateInput(string $input): string
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}
