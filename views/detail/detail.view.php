<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php
if (isset($_COOKIE['username'])) {
    $url = "/";
} else {
    $url = "/login?login";
}
?>

<div class='block md:flex px-12 text-white gap-10'>
    <img src="<?= $show["image"] ?>" class="w-80 h-96 md:w-80 md:h-96 mt-20">
    <div class="mt-10 md:mt-20 flex flex-col gap-2">
        <h1 class="font-bold text-5xl"><?= $show['movie_name'] ?></h1>
        <div class="flex items-center">
            <i class="material-icons block md:hidden">sell</i>
            <p class="font-semibold hidden md:block text-lg text-gray-300">Subtitle</p>
            <p>: <?= $show['subtitle'] ?></p>
        </div>
        <div class=" flex items-center">
            <i class="material-icons block md:hidden">calendar_month</i>
            <p class="font-semibold hidden md:block text-lg text-gray-300">Showing Date</p>
            <p> : <?= $show['release_date'] ?></p>
        </div>
        <div class="flex items-center">
            <i class="material-icons block md:hidden">high_quality</i>
            <p class="font-semibold hidden md:block text-lg text-gray-300">Quality</p>
            <p>: 3D</p>
        </div>
        <div class="flex items-center">
            <i class="material-icons block md:hidden">sell</i>
            <p class="font-semibold hidden md:block text-lg text-gray-300">Genre</p>
            <p>: <?= $show['genre'] ?></p>
        </div>
        <div class="flex items-center">
            <i class="material-icons block md:hidden">schedule</i>
            <p class="font-semibold hidden md:block text-lg text-gray-300">Duration</p>
            <p>: <?= $show['duration'] ?></p>
        </div>
        <div class="flex items-center">
            <i class="material-icons block md:hidden">location_on</i>
            <p class="font-semibold hidden md:block text-lg text-gray-300">Location</p>
            <p>: Phnom penh </p>
        </div>
        <div class="flex items-center">
            <i class="material-icons block md:hidden">local_atm</i>
            <p class="font-semibold hidden md:block text-lg text-gray-300">Price</p>
            <p>: 30$</p>
        </div>
        <div class="flex md:block">
            <p class="font-semibold hidden md:block text-lg text-gray-300">Description:</p>
            <p><?= $show['description'] ?></p>
        </div>
        <button class="bg-yellow-400 rounded w-36 p-1 text-black mt-2"><a href="<?= $url; ?>">BOOK TICKET</a></button>
    </div>
</div>
<div class="video w-full p-10">
    <iframe class="m-auto" <?= $show['trailer'] ?>></iframe>
</div>


<?php require 'views/partials/footer.php'; ?>