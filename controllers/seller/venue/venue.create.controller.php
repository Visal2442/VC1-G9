<?php
require '../../../database/database.php';

if(isset($_POST["venue_name"]) && isset($_POST["location"])){
    require("../../../models/venue.model.php");
    if(!empty($_POST["venue_name"]) && !empty($_POST["location"]) ){
        addVenue($_POST["venue_name"],$_POST["location"]);
        echo "success";
    } 
}
