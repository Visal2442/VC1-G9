
<?php  require 'views/partials/head.php';?>
<?php  require 'views/partials/nav.php';?>

<div class='flex justify-center w-full px-12 text-white gap-16'>
    <div class="flex">   
        <img src="<?= $show["image"]?>" class="w-96 mt-20 h-96" alt="..." />
    </div>
    <div class=" mt-20 flex flex-col gap-2">
        <h1 class="font-bold text-5xl"><?= $show['show_name']?></h1>
        <!-- <p>Subtitle: English</p> -->
        <div class=" flex items-center">
            <i class="material-icons md:hidden sm:block">calendar_month</i>
            <p class="font-semibold text-lg md:block sm:hidden">Showing Date</p>
            <p> : <?= $show['date']?></p>
        </div>
        <div class="flex items-center">
            <i class="material-icons md:hidden sm:block">high_quality</i>
            <p class="font-semibold text-lg md:block sm:hidden">Quality</p>
            <p>: 3D</p>
        </div>
        <div class="flex items-center">
            <i class="material-icons md:hidden sm:block">location_on</i>
            <p class="font-semibold text-lg md:block sm:hidden">Location</p>
            <p>: Phnom penh </p>
        </div>
        <div class="flex items-center">
            <i class="material-icons md:hidden sm:block">local_atm</i>
            <p class="font-semibold text-lg md:block sm:hidden">Price</p>
            <p>: 30$</p>
        </div>
        <div class="">
            <i class="material-icons md:hidden sm:block">description</i>
            <p class="font-semibold text-lg md:block sm:hidden">Description:</p>
            <p><?= $show['description']?></p>
        </div>
        <button class=" bg-yellow-400 rounded w-36 p-1 text-black">BUY NOW</button>
    </div>
</div>
<div class="video w-full p-10">
    <iframe  class="m-auto w-full h-96" <?=$show['video']?>></iframe>
</div>
<?php  require 'views/partials/footer.php';?>
