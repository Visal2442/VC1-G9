<?php
require 'database/database.php';
$username_error = $email_error = $password_error = $confirm_error = $date_error = $address_error= $isTaken_error = "";
$form_valid = true;
if (isset($_POST['submit'])) {
    $isUser=getUserByemail($_POST['email']);
    if($isUser>0){
        $isTaken_error = "Account is already taken"; 
        $form_valid=false;
    }
    elseif (isset($_POST['username'])) {
        $username = validateInput($_POST['username']);
        if(ctype_alnum($username)){
            $_SESSION['username'] = $username;
        } elseif (strlen($username) <= 5 ) {
            $username_error= "Username must be at least 5 characters";
            $form_valid=false;
        } elseif (empty($username)) {
            $username_error = "Username is required";
            $form_valid = false;
        } else {
            $username_error = "Username is invalid";
            $form_valid = false;
        }
    }
    if (isset($_POST['email'])) {
        $email = validateInput($_POST['email']);
        $_SESSION['email'] = $email;
        if (!str_contains($email, '@') && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Email is invalid";
            $form_valid = false;
        } elseif (empty($email)) {
            $email_error = "Email is required";
            $form_valid = false;
        }
    }
    if (isset($_POST['password'])) {
        $passowrd = validateInput($_POST['password']);
        if (strlen($passowrd) < 8) {
            $passowrd="Password at least 8 length";
        } elseif (empty($passowrd)) {
            $password_error = "Password is required";
            $form_valid = false;
        }
    }
    if (isset($_POST['confirm_password'])) {
        $confirm_password = validateInput($_POST['confirm_password']);
        if ($confirm_password === $passowrd) {
            $password_hash = password_hash($confirm_password,PASSWORD_BCRYPT);
        } elseif (empty($confirm_password)) {
            $confirm_error = "Confirm Password is required";
            $form_valid = false;
        } else {
            $confirm_error = "Password does not match";
            $form_valid = false;
        }
    }
    if (isset($_POST['date_of_birth'])) {
        $date = validateInput($_POST['date_of_birth']);
        $_SESSION['date'] = $date;
        if (empty($date)) {
            $date_error = "Date is required";
            $form_valid = false;
        }
    }
    if (isset($_POST['address'])) {
        $address = validateInput($_POST['address']);
        if(!empty($address)){
            $_SESSION['address'] = $address;
        }
        elseif (empty($address)) {
            $address_error = "Address is required";
            $form_valid = false;
        } else {
            $address_error = "Address invalid";
            $form_valid = false;
        }
    }
    if ($form_valid) {
        $type = 0;
        createUser($email, $username, $password_hash, $type);
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
