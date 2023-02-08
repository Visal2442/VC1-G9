<?php
// Get all movies
function getMovies(): array
{
    global $connection;
    $statement = $connection->prepare('select * from movies');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}