<?php
    function createUser(string $email, string $username, string $password, int $type) :bool
    {
        global $connection;
        $statement = $connection->prepare("insert into users (email_address, username, password, type) values (:email_address, :username, :password, :type)");
        $statement->execute([
            ":email_address" => $email,
            ":username" => $username,
            ":password" => $password,
            ":type" => $type
        ]);
        return $statement->rowCount()>0;
    }
    
    function createCustomer(string $address,string $date, string $email): bool
    {
        global $connection;
        $statement = $connection->prepare("insert into customers (address, date_of_birth, email_address) values (:address, :date_of_birth, :email_address)");
        $statement->execute([
            ":address" => $address,
            ":date_of_birth" => $date,
            ":email_address" => $email
        ]);
        return $statement->rowCount()>0;
    }


