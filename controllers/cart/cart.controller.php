<?php 
require 'database/database.php';
require 'models/show.model.php';
require 'models/booking.model.php';
require 'models/login.model.php';

$customer=getCusByEmail($_COOKIE['email']);
$booking = getBookingByCusEmail($_COOKIE['email']);



require 'views/cart/cart.view.php';
