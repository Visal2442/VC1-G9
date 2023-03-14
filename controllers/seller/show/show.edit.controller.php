<?php
require '../../../database/database.php';

if (isset($_POST["show_id"])) {
    require("../../../models/show.model.php");
    require "../../../models/movie.model.php";
    require "../../../models/venue.model.php";
    $show = getShowById($_POST['show_id']);
    $movies = getAllMovies();
    $venues = getAllVenues();
    $halls = ['Hall 1', 'Hall 2', 'Hall 3', 'Hall 4', 'Hall 5'];
?>

    <form action="" method="post" class="mb-5">
        <div class="flex w-full mb-4">
            <div class="w-full px-3 mb-3">
                <label for="edit_title" class="text-black px-1 font-medium">Movie</label>
                <select name="edit_title" id="edit_title" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500  rounded aoutline-0 ">
                    <option disabled>Select Movie</option>
                    <?php
                    foreach ($movies as $movie) :
                    ?>
                        <option value="<?= $movie['movie_id'] ?>" <?= $movie['movie_id'] == $show['movie_id'] ? "selected" : "" ?>> <?= $movie['movie_name'] ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>
            </div>
            <div class="w-full px-3 mb-3">
                <label for="edit_price" class="text-black px-1 font-medium text-blak-500">Price Per Ticket</label>
                <input type="number" name="edit_price" id="edit_price" value="<?= $show['price_per_ticket'] ?>" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0">
            </div>
        </div>
        <div class="flex w-full mb-4">
            <div class="w-full px-3 mb-3">
                <label for="edit_venue" class="text-black px-1 font-medium">Venue</label>
                <select name="edit_venue" id="edit_venue" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0 ">
                    <option disabled>Select Venue</option>
                    <?php foreach ($venues as $venue) : ?>
                        <option value="<?= $venue['venue_id'] ?>" <?= $venue['venue_id'] == $show['venue_id'] ? "selected" : "" ?>><?= $venue['venue_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="w-full px-3 mb-3">
                <label for="hall" class="text-black px-1 font-medium">Hall</label>
                <select name="edit_hall" id="edit_hall" required class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0 ">
                    <option disabled>HALL</option>
                    <?php foreach ($halls as $hall) : ?>
                        <option value="<?= $hall ?>" <?= $hall == $show['hall'] ? "selected" : "" ?>><?= $hall ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="flex w-full mb-4">
            <div class="w-full px-3 mb-3">
                <label for="edit_date" class="text-black px-1 font-medium">Date</label>
                <input type="text" name="edit_date" id="edit_date" placeholder="DD/MM/YY" value="<?= $show['date'] ?>" autocomplete="off" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0">
            </div>
            <div class="w-full px-3 mb-3">
                <label for="edit_time" class="text-black px-1 font-medium text-blak-500">Time</label>
                <input type="time" name="edit_time" id="edit_time" value="<?= $show['time'] ?>" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0">
            </div>
        </div>
        <div class="w-full px-3 mb-3">
            <label for="amount_of_ticket_edit" class="text-black px-1 font-medium text-blak-500">Amount Of Ticket</label>
            <input type="number" name="amount_of_ticket_edit" id="amount_of_ticket_edit" min=1 value="<?= $show['amount_ticket'] ?>" placeholder="Amount of ticket for this show" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0">
        </div>
        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end ml-10  border-gray-200 rounded-b-md ">
            <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" data-te-modal-dismiss>CANCEL</button>
            <button type="button" onclick="updateShow(<?= $show['show_id'] ?>)" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">EDIT</button>
        </div>
    </form>

<?php
}
?>