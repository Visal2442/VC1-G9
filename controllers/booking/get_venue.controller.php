<?php
session_start();
require '../../database/database.php';
if (isset($_POST['showing_date'])) {
    $_SESSION['showing_date'] = $_POST['showing_date'];
    require '../../models/show.model.php';
    $venues = getVenues($_POST['movie_id'], $_POST['showing_date']);
?>
    <option value="" disabled selected>Choose a venue</option>
    <?php foreach ($venues as $venue) : ?>
        <option value="<?= $venue['venue_id'] ?>"><?= $venue['venue_name'] ?></option>

<?php
    endforeach;
}; ?>