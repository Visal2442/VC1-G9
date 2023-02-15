<?php
session_start();
require '../../database/database.php';
$showing_date = $_SESSION['showing_date'];
$venue_id = $_SESSION['venue_id'];
if (isset($_POST['hall'])) {
    $_SESSION['hall'] = $_POST['hall'];
    require '../../models/show.model.php';
    $times = getTimes($_POST['movie_id'], $showing_date, $venue_id, $_POST['hall']);
?>
    <option value="" disabled selected>Choose a time</option>
    <?php
    foreach ($times as $time) :
    ?>
        <option value="<?= $time['time'] ?>"><?= $time['time'] ?></option>

<?php
    endforeach;
}; ?>