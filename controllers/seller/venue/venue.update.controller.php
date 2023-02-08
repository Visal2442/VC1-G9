<?php
require '../../../database/database.php';
if (isset($_POST['venue_id'])) {
    require '../../../models/venue.model.php';
    updateVenue($_POST['venue_id'], $_POST['venue_name'], $_POST['venue_address']);
    echo "success";
}