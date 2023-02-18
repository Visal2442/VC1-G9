<?php 
require("../../../database/database.php");
if(isset($_POST["movie_id"])){
    require("../../../models/movie.model.php");
    require("../../../models/show.model.php");
    $check_showing = getShowByMovieId($_POST["movie_id"]);
    if(!empty($check_showing)){
        echo "This movie is showing";
    }
    else{
        deleteMovie($_POST["movie_id"]);
        echo 'success';
    }
}
