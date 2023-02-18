<?php
session_start();
require '../../database/database.php';
// ===== Convert from string to array ====== 
$seat_arr = explode(",", $_SESSION['seat_number']);
$visa_card = '/^4[0-9]{12}(?:[0-9]{3})?$/';
$master_card = '/^5[1-5][0-9]{14}$|^2(?:2(?:2[1-9]|[3-9][0-9])|[3-6][0-9][0-9]|7(?:[01][0-9]|20))[0-9]{12}$/';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require '../../models/booking.model.php';
        if (!empty($_POST['card_name']) && !empty($_POST['card_number']) && !empty($_POST['exp_date']) && !empty($_POST['cvv'])) {
                if((preg_match($visa_card,$_POST['card_number']) || preg_match($master_card,$_POST['card_number'])) && strlen($_POST['cvv'])==4){
                        foreach ($seat_arr as $seat) {
                                addBooking($_COOKIE['email'], $_SESSION['show_id'], $_SESSION["booking_date"], $seat);
                        }
                        echo "Payment is successful";
                }
                else{
                        echo "error card";
                }
        } else {
                echo "error";
        }
}
