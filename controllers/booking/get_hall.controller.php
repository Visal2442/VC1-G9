<?php
session_start();
require '../../database/database.php';

$showing_date = $_SESSION['showing_date'];
if (isset($_POST['venue_id'])) {
    $_SESSION['venue_id'] = $_POST['venue_id'];
    $_SESSION['venue_name'] = $_POST['venue_name'];
    require '../../models/show.model.php';
    $halls = getHalls($_POST['movie_id'], $showing_date, $_POST['venue_id']);
?>
    <option disabled selected>Choose a Hall</option>
    <?php foreach ($halls as $hall) : ?>
        <option value="<?= $hall['hall'] ?>"><?= $hall['hall'] ?></option>

<?php
    endforeach;
}; ?>