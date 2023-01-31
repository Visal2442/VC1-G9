<?php 
function getUser() : array
{
    global $connection;
    $statement = $connection -> prepare('select * from users');
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getUserByEmail($email)
{
    global $connection;
    $statement = $connection -> prepare('select * from users where email_address = :email');
    $statement -> execute([
        ":email" => $email
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getUserEmail(string $email)
{
    global $connection;
    $statement = $connection -> prepare('select email_address from users where email_address = :email');
    $statement -> execute([
        ":email" => $email
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getCusByEmail(string $email)
{
    global $connection;
    $statement = $connection -> prepare('select *from customers where email_address = :email');
    $statement -> execute([
        ":email" => $email
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
