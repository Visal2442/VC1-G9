<?php
session_start();
require '../../database/database.php';
$showing_date = $_SESSION['showing_date'];
$venue_id = $_SESSION['venue_id'];
$hall = $_SESSION['hall'];
if (isset($_POST['time'])) {
    require '../../models/show.model.php';
    require '../../models/booking.model.php';
    $show_booked = getShow($_POST['movie_id'], $showing_date, $venue_id, $hall, $_POST['time']);
    $_SESSION['show_id'] = $show_booked['show_id'];
    $seat_booked = getSeatBooked($show_booked['show_id']);
    $seat_arr = [];
    foreach ($seat_booked as $seat) {
        array_push($seat_arr, $seat['seat_number']);
    }
    $amount_ticket = getAmountOfTicket($showing_date, $hall, $_POST['time']);
    for ($i = 1; $i <= $amount_ticket['amount_ticket']; $i++) :
?>
        <input type="hidden" id="price_per_ticket" value="<?=$show_booked['price_per_ticket'] ?>">
        <label for="seat<?= $i ?>"><img src=<?= in_array($i, $seat_arr) == 1 ? '../../assets/imgs/booked.png' : '../../assets/imgs/seat.png' ?> width="65" height="65" class="rounded-full"></label>
        <input type="checkbox" id="seat<?= $i ?>" name="seat<?= $i ?>" onclick="selectSeat(this)" <?= in_array($i, $seat_arr) == 1 ? "disabled" : "" ?> class="select-seat hidden bg-red-500 rounded-t-lg p-5 m-1" value="<?= $i ?>">
<?php
    endfor;
};
?>