<?php
session_start();
require '../../database/database.php';
if (isset($_POST['showing_date'])) {
    $_SESSION['showing_date'] = $_POST['showing_date'];
    require '../../models/show.model.php';
    $venues = getVenues($_POST['movie_id'], $_POST['showing_date']);
?>
    <option disabled selected>Choose Venue/Cinema</option>
    <?php foreach ($venues as $venue) : ?>
        <option value="<?= $venue['venue_id'] ?>"><?= $venue['venue_name'] ?></option>

<?php
    endforeach;
}; ?>