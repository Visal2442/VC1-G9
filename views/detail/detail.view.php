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
    <div class='block md:flex px-20 text-white gap-7'>
        <img src="../../assets/movie_image/<?= $shows[0]["image"] ?>" class="w-fit h-96 mt-20">
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
                <p class="font-semibold hidden md:block text-lg text-gray-300">Description</p>
                <p>: <?= $shows[0]['description'] ?></p>
            </div>

            <!-- Modal -->
            <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                    <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                        <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                            <h5 class="text-xl font-medium leading-normal text-red-500 dark:text-neutral-200" id="exampleModalLabel"> WARNING ! </h5>
                            <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="relative flex-auto p-4" data-te-modal-body-ref>
                            <p class="text-black">You don't have an account yet!</p>
                        </div>
                        <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                            <button type="button" class="inline-block rounded bg-gray-50 text-black px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">Close </button>
                            <button type="button" class="ml-1 inline-block rounded bg-blue-600 text-white  px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light"><a href="<?= $url ?>"> log in</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="inline-block bg-yellow-400 hover:bg-yellow-500 rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-black hover:text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] <?= $is_login ? "hidden" : "" ?> " data-te-toggle="modal" data-te-target="#exampleModal" data-te-ripple-init data-te-ripple-color="light"> Buy Ticket</button>
        </div>
    </div>

<!-- ===== Form to select show date =====  -->
    <form action="" method="post" id="booking_form" class="bg-slate-700 p-5 text-white w-4/12 mr-32 mt-20 grid gap-3 <?= $is_login ? "" : 'hidden' ?>" enctype="multipart/form-data">
        <h1 class="text-2xl text-white font-bold text-center mb-4">Buy Ticket</h1>
        <input type="hidden" id="movie_id" name="movie_id" value="<?= $id  ?>">
        <input type="hidden" value="<?= $shows[0]['movie_name'] ?>" id="movie_name" name="movie_name">
        <div class="ml-2 mb-2 mr-5">
            <select id="showing_date" name="showing_date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm block w-full p-2.5 rounded outline-0">
                <option disabled selected>Choose a date</option>
                <?php
                $today = date("Y-m-d");
                $current_date = strtotime($today);
                foreach ($dates as $date) :
                    $show_date = strtotime($date['date']);
                    if ($current_date <= $show_date) {
                ?>
                        <option value="<?= $date['date'] ?>"><?= $date['date'] ?></option>
                <?php
                    }
                endforeach; ?>
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