<?php
// Get all movies
function getAllMovies(): array
{
    global $connection;
    $statement = $connection->prepare('select * from movies');
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
