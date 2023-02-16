<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php
if (isset($_COOKIE['username'])) {
    $is_login = true;
    $url = "";
} else {
    $is_login = false;
    $url = "/login?login";
}
?>
<div class="flex justify-between">
    <div class='block md:flex px-12 text-white gap-10'>
        <img src="../../assets/movie_image/<?= $shows[0]["image"] ?>" class="w-80 h-96 md:w-80 md:h-96 mt-20">
        <div class="mt-10 md:mt-20 flex flex-col gap-3">
            <h1 class="font-bold text-5xl mb-7"><?= $shows[0]['movie_name'] ?></h1>
            <div class="flex items-center">
                <i class="material-icons block md:hidden">sell</i>
                <p class="font-semibold hidden md:block text-lg text-gray-300">Subtitle</p>
                <p>: <?= $shows[0]['subtitle'] ?></p>
            </div>
            <div class=" flex items-center">
                <i class="material-icons block md:hidden">calendar_month</i>
                <p class="font-semibold hidden md:block text-lg text-gray-300">Release Date</p>
                <p> : <?= $shows[0]['release_date'] ?></p>
            </div>
            <div class="flex items-center">
                <i class="material-icons block md:hidden">high_quality</i>
                <p class="font-semibold hidden md:block text-lg text-gray-300">Quality</p>
                <p>: 3D</p>
            </div>
            <div class="flex items-center">
                <i class="material-icons block md:hidden">sell</i>
                <p class="font-semibold hidden md:block text-lg text-gray-300">Genre</p>
                <p>: <?= $shows[0]['genre'] ?></p>
            </div>
            <div class="flex items-center">
                <i class="material-icons block md:hidden">schedule</i>
                <p class="font-semibold hidden md:block text-lg text-gray-300">Duration</p>
                <p>: <?= $shows[0]['duration'] ?></p>
            </div>
            <div class="flex items-center">
                <i class="material-icons block md:hidden">local_atm</i>
                <p class="font-semibold hidden md:block text-lg text-gray-300">Ticket</p>
                <p>: <?= $shows[0]["price_per_ticket"] ?> $</p>
                <input type="hidden" id="price" value="<?= $shows[0]["price_per_ticket"] ?>">
            </div>
            <div class="flex items-center">
                <p class="font-semibold hidden md:block text-lg text-gray-300">Description</p>
                <p>: <?= $shows[0]['description'] ?></p>
            </div>
            <button type="button" class="bg-yellow-400 hover:bg-yellow-500 rounded w-36 p-1 text-black hover:text-white mt-2 <?= $is_login ? "hidden" : "" ?>"><a href="<?= $url ?>">Buy Ticket</a></button>
        </div>
    </div>
    <form action="" method="post" id="booking_form" class="bg-slate-700 p-5 text-white w-4/12 mr-20 my-auto grid gap-3 <?= $is_login ? "" : 'hidden' ?>" enctype="multipart/form-data">
        <h1 class="text-2xl text-white font-bold text-center mb-4">Buy Ticket</h1>
        <input type="hidden" id="movie_id" name="movie_id" value="<?= $id  ?>">
        <input type="hidden" value="<?= $shows[0]['movie_name'] ?>" id="movie_name" name="movie_name">
        <div class="ml-2 mb-2 mr-5">
            <select id="showing_date" name="showing_date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm block w-full p-2.5 rounded outline-0">
                <option disabled selected>Choose a date</option>
                <?php foreach ($dates as $date) : ?>
                    <option value="<?= $date['date'] ?>"><?= $date['date'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="ml-2 mb-2 mr-5">
            <select id="venue" name="venue" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm block w-full p-2.5 rounded outline-0">
                <option disabled selected>Choose Venue/Cinema</option>

            </select>
        </div>
        <div class="ml-2 mb-2 mr-5">
            <select id="hall" name="hall" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm block w-full p-2.5 rounded outline-0">
                <option disabled selected>Choose a Hall</option>

            </select>
        </div>
        <div class="ml-2 mb-2 mr-5">
            <select id="time" name="time" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm block w-full p-2.5 rounded outline-0">
                <option disabled selected>Choose a Show Time</option>

            </select>
        </div>
    </form>
</div>
<div class="video w-full p-10">
    <?= $shows[0]["trailer"] ?>
</div>

<?php require("views/booking/booking.view.php"); ?>
<script src="views/js/booking/booking.js"></script>
<?php require("views/payment/payment.view.php"); ?>
<?php require 'views/partials/footer.php'; ?>