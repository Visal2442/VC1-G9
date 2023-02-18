<?php 
require 'database/database.php';
require 'models/show.model.php';
require 'models/booking.model.php';
require 'models/login.model.php';


$customer=getCusByEmail($_COOKIE['email']);
$bookings = getBookingByCusEmail($_COOKIE['email']);



require 'views/cart/cart.view.php';
