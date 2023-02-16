<?php 
require 'database/database.php';
require 'models/show.model.php';
require 'models/login.model.php';

$customer=getCusByEmail($_COOKIE['email']);
$booking = getBookingByCusId($customer['customer_id']);



require 'views/cart/cart.view.php';
