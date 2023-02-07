<?php
// Get all venues
function getVenues(): array
{
    global $connection;
    $statement = $connection->prepare('select * from venues');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}