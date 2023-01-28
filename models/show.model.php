<?php 

function getShow() :array
{
    global $connection;
    $statement = $connection->prepare('select * from shows');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getShowById(int $id) :array
{
    global $connection;
    $statement = $connection->prepare('select * from shows where show_id = :id');
    $statement->execute([
        ":id" => $id
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function searchShow(string $input) :array
{
    global $connection;
    $statement = $connection->prepare("select * from shows where show_name like '%$input%' ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}