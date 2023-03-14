<?php
session_start();
require 'models/venue.model.php';
require 'models/movie.model.php';
require 'models/show.model.php';
require 'models/login.model.php';
require 'models/booking.model.php';
$movies = getAllMovies();
$venues=getAllVenues();
$shows= getAllShows();
$customers = getAllCustomers();
$bookings= getAllBookings();
$total_balances = 0;
$halls = ['Hall 1', 'Hall 2', 'Hall 3', 'Hall 4', 'Hall 5'];
$genres = ['Action', 'Horror', 'Adventure', ' Thriller', 'Comedy', 'Fantasy', 'Animation', 'Mystery'];
foreach($bookings as $booking){
    $total_balances+=$booking['price_per_ticket'];
}
if (!isset($_SESSION['seller_name'])) {
    header('location:/login');
} else {
    require 'views/seller/seller.view.php';
}