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
    $seat_row = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q'];
    $seat_number = 0;
    $row_number = 1;
    $column_number = 0;
    for ($i = 0; $i < $amount_ticket['amount_ticket']; $i++) :
        if ($i < $row_number * 12) {
            $seat_number++;
            $seat_name = $seat_row[$column_number] . $seat_number;
        } else {
            $row_number++;
            $seat_number = 1;
            $column_number++;
            $seat_name = $seat_row[$column_number] . $seat_number;
        }
?>
        <input type="hidden" id="price_per_ticket" value="<?= $show_booked['price_per_ticket'] ?>">
        <label for="seat<?= $seat_name ?>"><img src=<?= in_array($seat_name, $seat_arr) == 1 ? '../../assets/imgs/booked.png' : '../../assets/imgs/seat.png' ?> width="60" height="60" class="rounded-full"></label>
        <input type="checkbox" id="seat<?= $seat_name ?>" name="seat<?= $seat_name ?>" onclick="selectSeat(this)" <?= in_array($seat_name, $seat_arr) == 1 ? "disabled" : "" ?> class="select-seat hidden bg-red-500 rounded-t-lg p-5 m-1" value="<?= $seat_name ?>">
<?php
    endfor;
};
?>