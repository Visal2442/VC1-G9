<?php
function createUser(string $email, string $username, string $password, string $date, string $address, int $role): bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (email_address, username, password,date_of_birth,address, role) values (:email_address, :username, :password,:date_of_birth,:address, :role)");
    $statement->execute([
        ":email_address" => $email,
        ":username" => $username,
        ":password" => $password,
        ":date_of_birth" => $date,
        ":address" => $address,
        ":role" => $role
    ]);
    return $statement->rowCount() > 0;
}

function createCustomer(string $email): bool
{
    global $connection;
    $statement = $connection->prepare("insert into customers (email_address) values (:email_address)");
    $statement->execute([
        ":email_address" => $email
    ]);
    return $statement->rowCount() > 0;
}
