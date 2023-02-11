<?php
// Get all venues
function getAllVenues(): array
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

function deleteVenue(int $venue_id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from venues where venue_id = :venue_id");
    $statement->execute([":venue_id" => $venue_id]);
    return $statement->rowCount() > 0;
}

//edit venue
// Get venue by id 
function getVenueById(int $venue_id): array
{
    global $connection;
    $statement = $connection->prepare('select * from venues where venue_id = :venue_id');
    $statement -> execute([
        ":venue_id" => $venue_id
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

// Update venue 
function updateVenue(int $venue_id, string $venue_name, string $location):bool
{
    global $connection;
    $statement = $connection->prepare('update venues set venue_name= :venue_name, location= :location where venue_id = :venue_id');
    $statement->execute([
        ":venue_id"=>$venue_id,
        ":venue_name"=>$venue_name,
        ":location"=>$location
    ]);
    return $statement->rowCount()>0;
}

