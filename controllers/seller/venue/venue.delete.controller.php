<?php 

require("../../../database/database.php");

if(isset($_POST["venue_id"])){
    require("../../../models/venue.model.php");
    $deleteVenue = deleteVenue($_POST["venue_id"]);
}

