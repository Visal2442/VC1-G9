<?php
session_start();
require 'models/venue.model.php';
require 'models/movie.model.php';
$movies = getAllMovies();
$venues=getAllVenues();
$halls = ['Hall 1', 'Hall 2', 'Hall 3', 'Hall 4', 'Hall 5'];
$genres = ['Action', 'Horror', 'Adventure', ' Thriller', 'Comedy', 'Fantasy', 'Animation', 'Mystery'];
if (!isset($_SESSION['seller_name'])) {
    header('location:/login');
} else {
    require 'views/seller/seller.view.php';
}