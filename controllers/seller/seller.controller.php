<?php
session_start();
require 'models/venue.model.php';
require 'models/show.model.php';
$movies = getShows();
$venues=getVenues();
if (!isset($_SESSION['seller_name'])) {
    header('location:/login');
} else {
    require 'views/seller/seller.view.php';
}