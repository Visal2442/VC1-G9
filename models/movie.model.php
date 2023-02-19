<?php
// Get all movies
function getAllMovies(): array
{
    global $connection;
    $statement = $connection->prepare('select * from movies order by movie_id desc');
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
        ":subtitle" => $subtitle,
        ":description" => $description,
        ":release_date" => $release_date,
        ":duration" => $duration,
        ":image" => $image,
        ":trailer" => $trailer
    ]);
    return $statement->rowCount() > 0;
}

// Update movie into database 
function updateMovie(string $movie_id, string $movie_name, string $genre, string $subtitle, string $description, string $release_date, string $duration, string $image, string $trailer): bool
{
    global $connection;
    if (empty($image)) {
        $statement = $connection->prepare('update movies set movie_name = :movie_name, genre = :genre, subtitle = :subtitle, description = :description, release_date =:release_date, duration= :duration, trailer=:trailer where movie_id = :movie_id');
        $statement->execute([
            ":movie_id" => $movie_id,
            ":movie_name" => $movie_name,
            ":genre" => $genre,
            ":subtitle" => $subtitle,
            ":description" => $description,
            ":release_date" => $release_date,
            ":duration" => $duration,
            ":trailer" => $trailer
        ]);
    } else {
        $statement = $connection->prepare('update movies set movie_name = :movie_name, genre = :genre, subtitle = :subtitle, description = :description, release_date =:release_date, duration= :duration, image= :image, trailer=:trailer where movie_id = :movie_id');
        $statement->execute([
            ":movie_id" => $movie_id,
            ":movie_name" => $movie_name,
            ":genre" => $genre,
            ":subtitle" => $subtitle,
            ":description" => $description,
            ":release_date" => $release_date,
            ":duration" => $duration,
            ":image" => $image,
            ":trailer" => $trailer
        ]);
    }
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

// Get movie by name 
function getMovieByName($movie_name) 
{
    global $connection;
    $statement = $connection->prepare('select * from movies where movie_name = :movie_name');
    $statement ->execute([
        ":movie_name" => $movie_name
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

// Delete movie 
function deleteMovie($movie_id): bool
{
    global $connection;
    $statement = $connection->prepare('delete from movies where movie_id = :movie_id');
    $statement->execute([
        ":movie_id" => $movie_id
    ]);
    return $statement->rowCount() > 0;
}
