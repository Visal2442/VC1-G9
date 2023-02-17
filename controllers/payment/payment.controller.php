<?php
session_start();
require '../../database/database.php';
// ===== Convert from string to array ====== 
$seat_arr = explode(",", $_SESSION['seat_number']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require '../../models/booking.model.php';
        if (!empty($_POST['card_name']) && !empty($_POST['card_number']) && !empty($_POST['exp_date']) && !empty($_POST['cvc'])) {
                foreach ($seat_arr as $seat) {
                        addBooking($_COOKIE['email'], $_SESSION['show_id'], $_SESSION["booking_date"], $seat);
                }
        } else {
                echo "error";
        }
}
