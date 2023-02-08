<?php
// Get all venues
function getVenues(): array
{
    global $connection;
    $statement = $connection->prepare('select * from venues');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
// add venue into database 
function addVenue(string $venue_name, string $location): bool
{
    global $connection;
    $statement = $connection->prepare('insert into venues(venue_name, location) values(:venue_name, :venue_location)');
    $statement->execute([
        ":venue_name" => $venue_name,
        ":venue_location" => $location
    ]);
    return $statement->rowCount() > 0;

}