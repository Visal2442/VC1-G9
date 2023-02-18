<?php
session_start();
$_SESSION["total_price"] = $_POST['total_price'];
$_SESSION["seat_number"] = $_POST['seat_number'];
$_SESSION["booking_date"] = $_POST["booking_date"];

if (isset($_POST["show_date"]) && isset($_POST["time_show"]) && isset($_POST["venue_id"]) && isset($_POST["hall_name"]) && isset($_POST["seat_number"]) && isset($_POST["booking_date"])) {
    if (empty($_POST['seat_number']) || empty($_POST['booking_date'])) {
        echo "error";
    } else {
?>

        <h1 class=" uppercase border-b-2 border-black mr-3 ml-3  text-black  pt-6 pb-2 text-2xl text-center">summary booking</h1>
        <div class="text-black p-5">
            <p class="p-1">Movie title: <span class="font-bold"><?= $_SESSION['movie_name'] ?></span></p>
            <p class="p-1">Venue name: <span class="font-bold"><?= $_SESSION['venue_name'] ?></span></p>
            <p class="p-1">Hall: <span class="font-bold"> <?= $_POST['hall_name']  ?></span></p>
            <p class="p-1">Show date: <span class="font-bold"><?= $_POST['show_date'] ?></span></p>
            <p class="p-1">Show time: <span class="font-bold"> <?= $_POST['time_show']  ?> </span></p>
            <p class="p-1">Number of ticket: <span class="font-bold"> <?= $_POST['total_seats'] ?></span></p>
            <p class="p-1">Seat detail: <span class="font-bold"> <?= $_POST['seat_number'] ?> </span></p>
            <p class="p-1">Total price: <span class="font-bold"> <?= $_POST['total_price'] ?></span>$</p>
        </div>
        <img src="../../assets/imgs/footer.png" alt="" class="rounded-bl-lg shadow-current w-96 h-36" style="box-shadow: 0 -2px 2px -4px rgb(142, 142, 142);">

<?php
    }
}
?>