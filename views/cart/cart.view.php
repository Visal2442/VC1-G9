<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<?php
if (empty($bookings)) {
    echo "  <div class='h-96 flex items-center justify-center text-5xl text-white w-full'>
                    <p>Your cart is empty</p>
                </div>";
} else {
?>
    <h1 class="text-center text-5xl text-white m-5 mb-10 font-bold" style="font-family:Algerian;">Your Ticket</h1>
    <div class="grid gap-7 items-center mt-5 w-full justify-center">
        <?php
        foreach ($bookings as $booking) :
        ?>
            <div class="flex flex-col">
                <div class=" flex justify-end items-end w-[55rem]">
                    <button id="PrintButton" onclick="printTicket(this)" class=" bg-blue-500 flex items-center text-white p-2 font-lg rounded">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                        </svg>
                        Print Ticket
                    </button>
                </div>
                <div id="ticket_image" class="w-[55rem] flex flex-col justify-center mb-3 pr-10 py-5 shadow-[0px_22px_70px_10px_rgba(136, 136, 136,0.56)]">
                    <div class="flex justify-between items-center">
                        <img src="assets/logo/cinema-logo.png" class="w-20 ml-10">
                        <h1 id="ticket_header" class="-ml-5 text-center text-3xl text-yellow-500 font-bold">MOVIE TICKET</h1>
                        <div></div>
                    </div>
                    <div class="ticket flex justify-around w-full">
                        <div class="mt-2 ml-8 grid grid-cols-2 gap-x-20">
                            <p class="text-white text-l ">Customer name : <span class="text-yellow-500"><?= $booking['username'] ?></span></p>
                            <p class="text-white text-l ">Movie title : <span class="text-yellow-500"><?= $booking['movie_name'] ?></span></p>
                            <p class="text-white text-l ">Venue: <span class="text-yellow-500"><?= $booking['venue_name'] ?></span></p>
                            <div class="flex gap-5">
                                <p class="text-white text-l"> Hall : <span class="text-yellow-500"> <?= $booking["hall"] ?> </span> </p>
                                <p class="text-white text-l"> Seat : <span class="text-yellow-500"> <?= $booking["seat_number"] ?> </span> </p>
                            </div>
                            <p class="text-white text-l">Showing date : <span class="text-yellow-500"><?= $booking["date"] ?> </span> </p>
                            <p class="text-white text-l">Showing time : <span class="text-yellow-500"><?= $booking["time"] ?> </span> </p>
                            <p class="text-white text-l">Booking date : <span class="text-yellow-500"><?= $booking["booking_date"] ?> </span></p>
                            <p class="text-white text-l">Price of ticket : <span class="text-yellow-500"> <?= $booking["price_per_ticket"] ?>$</span></p>
                        </div>
                        <div class="align-middle ml-16 border-l">
                            <img src="../../assets/movie_image/<?= $booking["image"] ?>" class="shadow-[0px_22px_70px_4px_rgba(0,0,0,0.56)] w-fit h-44 ml-10 mt-2">
                        </div>
                    </div>
                    <div class="text-center">
                        <h6 class="text-white text-sm m-1 text-center">© 2023 Copyright: Cinema Booking Ticket</h6>
                    </div>
                </div>
            </div>

    <?php
        endforeach;
    }
    ?>
    </div>
    <?php require "views/partials/footer.php" ?>