<?php
// Get all shows 
function getShows(): array
{
    global $connection;
    $statement = $connection->prepare(' select show_id, image, movie_name, venue_name, hall, date, time, price_per_ticket from movies
                                        inner join shows on movies.movie_id = shows.movie_id 
                                        inner join dates_format on dates_format.date_id = shows.date_id
                                        inner join venues on venues.venue_id = shows.venue_id
                                        ORDER BY movies.movie_name');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Get all show for dispaly in card 
function getShowsForCard() : array
{
    global $connection;
    $statement = $connection->prepare(' select distinct movies.movie_id, image, movie_name, genre, duration,release_date from shows
                                        inner join movies on movies.movie_id = shows.movie_id');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Get show by Id 
function getShowById($id) : array
{
    global $connection;
    $statement = $connection->prepare(' SELECT venues.*, movies.*, shows.* FROM shows
                                        INNER JOIN movies ON movies.movie_id = shows.movie_id
                                        INNER JOIN venues ON venues.venue_id = shows.venue_id
                                        WHERE movies.movie_id = :movie_id');
    $statement->execute([
        ":movie_id" => $id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Search for show 
function searchShow(string $input): array
{
    global $connection;
    $statement = $connection->prepare("select * from movies where movie_name like '%$input%' ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
