<?php 
require("../../../database/database.php");
if(isset($_POST["movie_id"])){
    require("../../../models/movie.model.php");
    deleteMovie($_POST["movie_id"]);
}
