<?php
// Get all shows 
function getAllShows(): array
{
    global $connection;
    $statement = $connection->prepare(' select shows.*, venues.*, movies.* from movies
                                        inner join shows on movies.movie_id = shows.movie_id 
                                        inner join venues on venues.venue_id = shows.venue_id
                                        ORDER BY shows.date');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Get all show for dispaly in card 
function getShowsForCard(): array
{
    global $connection;
    $statement = $connection->prepare(' select distinct movies.movie_id, image, movie_name, genre, duration, release_date from shows
                                        inner join movies on movies.movie_id = shows.movie_id');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Create a show 
function createShow(string $movie_id, string $venue_id, string $date, string $time, string $amount_of_ticket, string $ticket_price, string $hall): bool
{
    global $connection;
    $statement = $connection->prepare('insert into shows (movie_id, venue_id, date, time, amount_ticket, price_per_ticket, hall) values (:movie_id, :venue_id, :date, :time, :amount_ticket, :ticket_price, :hall)');
    $statement->execute([
        ":movie_id" => $movie_id,
        ":venue_id" => $venue_id,
        ":date" => $date,
        ":time" => $time,
        ":amount_ticket" => $amount_of_ticket,
        ":ticket_price" => $ticket_price,
        ":hall" => $hall
    ]);
    return $statement->rowCount() > 0;
}

// Get show by id 
function getShowById($show_id): array
{
    global $connection;
    $statement = $connection->prepare('select * from shows where show_id = :show_id');
    $statement->execute([
        ":show_id" => $show_id
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

// Update show 
function updateShow(string $show_id, string $movie_id, string $venue_id, string $date, string $time, string $ticket_price, string $hall): bool
{
    global $connection;
    $statement = $connection->prepare('update shows set movie_id = :movie_id, venue_id = :venue_id, date = :date, time = :time, amount_ticket = :amount_ticket, price_per_ticket = :ticket_price, hall = :hall where show_id = :show_id');
    $statement->execute([
        ":show_id" => $show_id,
        ":movie_id" => $movie_id,
        ":venue_id" => $venue_id,
        ":date" => $date,
        ":time" => $time,
        ":amount_ticket" => 0,
        ":ticket_price" => $ticket_price,
        ":hall" => $hall
    ]);
    return $statement->rowCount()>0;
}

// Delete show 
function deleteShow($show_id):bool
{
    global $connection;
    $statement = $connection->prepare('delete from shows where show_id=:show_id');
    $statement->execute([
        ":show_id" => $show_id
    ]);
    return $statement->rowCount()>0;
}

// Search for show 
function searchShow(string $input): array
{
    global $connection;
    $statement = $connection->prepare("select * from movies where movie_name like '%$input%' ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
