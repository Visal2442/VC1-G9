<?php
// Get all shows 
function getAllShows(): array
{
    global $connection;
    $statement = $connection->prepare(' select shows.*, venues.*, movies.* from movies
                                        inner join shows oonmovies.movie_id = shows.movie_id 
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
                                        inner join movies on movies.movie_id = shows.movie_id order by movies.release_date desc');
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

// Get show by movie id 
function getShowByMovieId($movie_id): array
{
    global $connection;
    $statement = $connection->prepare(' select * from shows
                                        inner join movies on movies.movie_id = shows.movie_id
                                        where movies.movie_id = :movie_id');
    $statement->execute([
        ":movie_id" => $movie_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Get show by id 
function getShowById($show_id): array
{
    global $connection;
    $statement = $connection->prepare('select * from shows
                                        inner join movies on movies.movie_id = shows.movie_id
                                        where shows.show_id = :show_id');
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
    return $statement->rowCount() > 0;
}

// Delete show 
function deleteShow(int $show_id): bool
{
    global $connection;
    $statement = $connection->prepare('delete from shows where show_id=:show_id');
    $statement->execute([
        ":show_id" => $show_id
    ]);
    return $statement->rowCount() > 0;
}
// Get show date 
function getShowDate(int $movie_id): array
{
    global $connection;
    $statement = $connection->prepare('select distinct shows.date FROM shows 
                                        inner join movies on movies.movie_id = shows.movie_id
                                        WHERE movies.movie_id = :movie_id');
    $statement->execute([
        ":movie_id" => $movie_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
// Get venues 
function getVenues(int $movie_id, string $showing_date): array
{
    global $connection;
    $statement = $connection->prepare('select distinct venues.venue_id, venues.venue_name FROM shows 
                                        inner join movies on movies.movie_id = shows.movie_id
                                        inner join venues on venues.venue_id = shows.venue_id
                                        where movies.movie_id = :movie_id and shows.date = :showing_date');
    $statement->execute([
        ":movie_id" => $movie_id,
        ":showing_date" => $showing_date
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
// Get Halls 
function getHalls(int $movie_id, string $showing_date, int $venue_id): array
{
    global $connection;
    $statement = $connection->prepare('select distinct shows.hall FROM shows 
                                        inner join movies on movies.movie_id = shows.movie_id
                                        inner join venues on venues.venue_id = shows.venue_id
                                        where movies.movie_id = :movie_id and shows.date = :showing_date and venues.venue_id = :venue_id');
    $statement->execute([
        ":movie_id" => $movie_id,
        ":showing_date" => $showing_date,
        ":venue_id" => $venue_id,
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
// Get times 
function getTimes(int $movie_id, string $showing_date, int $venue_id, string $hall): array
{
    global $connection;
    $statement = $connection->prepare('select distinct time from shows 
                                        inner join movies on movies.movie_id = shows.movie_id
                                        inner join venues on venues.venue_id = shows.venue_id
                                        where movies.movie_id = :movie_id and shows.date = :showing_date and venues.venue_id = :venue_id and shows.hall = :hall');
    $statement->execute([
        ":movie_id" => $movie_id,
        ":showing_date" => $showing_date,
        ":venue_id" => $venue_id,
        ":hall" => $hall
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Get amount of tickets 
function getAmountOfTicket($showing_date, $hall, $time): array
{
    global $connection;
    $statement = $connection->prepare('select shows.amount_ticket from shows
                                        inner join movies on movies.movie_id=shows.movie_id
                                        inner join venues on venues.venue_id = shows.venue_id
                                        where shows.date = :date and shows.hall = :hall and shows.time = :time ');
    $statement->execute([
        ":date" => $showing_date,
        ":hall" => $hall,
        ":time" => $time
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

// Get a show 
function getShow($movie_id, $showing_date, $venue_id, $hall, $time): array
{
    global $connection;
    $statement = $connection->prepare('select * from shows
                                    inner join movies on movies.movie_id = shows.movie_id
                                    inner join venues on venues.venue_id = shows.venue_id
                                    where movies.movie_id = :movie_id and venues.venue_id = :venue_id and shows.date = :date and shows.time= :time and shows.hall = :hall');
    $statement->execute([
        ":movie_id" => $movie_id,
        ":venue_id" => $venue_id,
        ":date" => $showing_date,
        ":time" => $time,
        ":hall" => $hall
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

// Search for show 
function searchShow(string $input): array
{
    global $connection;
    $statement = $connection->prepare(" select distinct movies.movie_name, movies.movie_id from shows 
                                        inner join movies on movies.movie_id = shows.movie_id
                                        where movies.movie_name like '%$input%' ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

