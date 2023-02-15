<?php
// ===== Convert from string to array ====== 
$seat_arr=explode(",",$_POST['seat_number']);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['movie_name']) && !empty($_POST['showing_date']) && !empty($_POST['venue']) && !empty($_POST['hall']) && !empty($_POST['time']) && !empty($_POST['booking_date'])){
        // echo "Success";
        print_r($seat_arr);
    }
    else{
        echo "Error";
    }
}