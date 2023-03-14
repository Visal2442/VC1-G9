<?php
require '../../../database/database.php';

if(isset($_POST["venue_id"])){
    require ("../../../models/venue.model.php");
    $venue = getVenueById($_POST['venue_id']);
?>
    <form action="#" method="post" class="ml-2.5">
        <div class="form-venue ml-2 mb-3 mr-5">
            <label for="movie venue" class=" text-black px-1">Venue Name </label>
            <input type="text" id="venue-name" name="venue-name" class="bg-gray-50 mt-1 rounded border-black text-gray-900 text-sm block w-full p-2.5  outline-none border " placeholder="Venue Name" value="<?= $venue['venue_name']; ?>">
        </div>
        <div class="venue-address ml-2 mb-2 mr-5">
            <label for="address" class=" text-black px-1"> Address </label>
            <input type="text" id="venue-address" name="venue-address" class="bg-gray-50 mt-1 rounded border-black text-gray-900 text-sm  block w-full p-2.5  outline-none border " placeholder="Venue Address" value="<?= $venue['location'] ?>">
        </div>
        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
            <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 transition duration-150 ease-in-out" data-te-modal-dismiss>Close</button>
            <button type="button" onclick="updateVenue(<?= $venue['venue_id']; ?>)" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 transition duration-150 ease-in-out ml-1">Edit</button>
        </div>
    </form>
<?php
}
?>