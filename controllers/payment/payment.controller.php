<?php
session_start();
// ===== Convert from string to array ====== 
$seat_arr=explode(",",$_SESSION['seat_number']);

if($_SERVER['REQUEST_METHOD'] == 'POST'){  
        echo($_SESSION['movie_name']);    
        echo($_SESSION['show_id']);        
}