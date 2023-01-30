<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php
    if (isset($_COOKIE['username'])) {
        $url = "/";
    } else {
        $url = "/login?login";
    }
?>

<div class='block md:flex justify-center px-12 text-white gap-10'>
    <div class="flex">
        <img src="<?= $show["image"] ?>" class="w-80 h-96 md:w-96 md:h-96 mt-20">
    </div>
    <div class=" mt-10 md:mt-20 flex flex-col gap-2">
        <h1 class="font-bold text-5xl"><?= $show['show_name'] ?></h1>
        <p class="font-semibold text-lg text-gray-300 md:block">Subtitle: English</p>
        <div class=" flex items-center">
            <i class="material-icons block md:hidden">calendar_month</i>
            <p class="font-semibold hidden md:block text-lg text-gray-300">Showing Date</p>
            <p> : <?= $show['date'] ?></p>
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
        <button class="bg-yellow-400 rounded w-36 p-1 text-black mt-2"><a href="<?= $url; ?>">BUY NOW</a></button>
    </div>
</div>
<div class="video w-full p-10">
    <iframe class="m-auto" <?= $show['video'] ?>></iframe>
</div>


<?php require 'views/partials/footer.php'; ?>