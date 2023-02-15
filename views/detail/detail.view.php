<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php
if (isset($_COOKIE['username'])) {
    $is_login=true;
    $url="";
} else {
    $is_login=false;
    $url = "/login?login";
}
?>

<div class='block md:flex px-12 text-white gap-10'>
    <img src="../../assets/movie_image/<?= $shows[0]["image"] ?>" class="w-80 h-96 md:w-80 md:h-96 mt-20">
    <div class="mt-10 md:mt-20 flex flex-col gap-2">
        <h1 class="font-bold text-5xl"><?= $shows[0]['movie_name'] ?></h1>
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
            <p >: <?= $shows[0]["price_per_ticket"] ?> $</p>
            <input type="hidden" id="price" value="<?= $shows[0]["price_per_ticket"] ?>">
        </div>
        <div class="flex items-center">
            <p class="font-semibold hidden md:block text-lg text-gray-300">Description</p>
            <p>: <?= $shows[0]['description']?></p>
        </div>
        <button type="button" id="show_time" class="bg-yellow-400 hover:bg-yellow-500 rounded w-36 p-1 text-black hover:text-white mt-2" <?=$is_login?'data-bs-toggle="collapse" data-bs-target="#seat"':'' ?>><a href="<?= $url; ?>">SHOW TIME</a></button>
    </div>
</div>
<div class="video w-full p-10">
    <?= $shows[0]["trailer"] ?>
</div>

<?php require("views/booking/booking.view.php"); ?>
<script src="views/js/booking/booking.js"></script>
<?php require 'views/partials/footer.php'; ?>