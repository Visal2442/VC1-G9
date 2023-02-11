<?php
// Get all movies
function getAllMovies(): array
{
    global $connection;
    $statement = $connection->prepare('select * from movies order by release_date desc');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
// add movie into database 
function addMovie(string $movie_name, string $genre, string $subtitle, string $description, string $release_date, string $duration, string $image, string $trailer): bool
{
    global $connection;
    $statement = $connection->prepare('insert into movies(movie_name, genre, subtitle, description, release_date, duration, image, trailer ) values(:movie_name, :genre, :subtitle, :description, :release_date, :duration, :image, :trailer)');
    $statement->execute([
        ":movie_name" => $movie_name,
        ":genre" => $genre,
        ":subtitle"=>$subtitle,
        ":description" => $description,
        ":release_date" => $release_date,
        ":duration" => $duration,
        ":image" => $image,
        ":trailer" => $trailer
    ]);
    return $statement->rowCount() > 0;
}

// Get movie by id 
function getMovieById($movie_id): array
{
    global $connection;
    $statement = $connection->prepare('select * from movies where movie_id = :movie_id');
    $statement->execute([
        ":movie_id" => $movie_id
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
