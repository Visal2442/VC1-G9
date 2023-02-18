<?php 

require("../../../database/database.php");

if(isset($_POST["show_id"])){
    require("../../../models/show.model.php");
    require("../../../models/booking.model.php");
    $check_booking= getBookingByShowId($_POST["show_id"]);
    $today = date("Y-m-d");
    $current_date = strtotime($today);
    if(!empty($check_booking)){
        if(strtotime($check_booking[0]['date'])< $current_date){
            deleteShow($_POST["show_id"]);
            echo 'success';
        }
        else{
            echo "This show is booked";
        }
    }
    else{
        deleteShow($_POST["show_id"]);
        echo 'success';
    }
}