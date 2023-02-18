<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="createShow" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding  rounded outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800">ADD SHOW</h5>
            </div>
            <div class="modal-body p-4">
                <form action="" method="post" id="create_show_form" class="mb-5">
                    <div class="flex w-full mb-4">
                        <div class="w-full px-3 mb-3">
                            <label for="title" class="text-black px-1 font-medium">Movie</label>
                            <select name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
                                <option disabled selected>Select Movie</option>
                                <?php foreach ($movies as $movie) : ?>
                                    <option value="<?= $movie['movie_id'] ?>"><?= $movie['movie_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="w-full px-3 mb-3">
                            <label for="price" class="text-black px-1 font-medium text-blak-500">Price Per Ticket</label>
                            <input type="number" name="price" id="price" min="1" placeholder="Price for one ticket" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0">
                        </div>
                    </div>
                    <div class="flex w-full mb-4">
                        <div class="w-full px-3 mb-3">
                            <label for="venue" class="text-black px-1 font-medium">Venue</label>
                            <select name="venue" id="venue" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0 ">
                                <option disabled selected>Select Venue</option>
                                <?php foreach ($venues as $venue) : ?>
                                    <option value="<?= $venue['venue_id'] ?>"><?= $venue['venue_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="w-full px-3 mb-3">
                            <label for="hall" class="text-black px-1 font-medium">Hall</label>
                            <select name="hall" id="hall" required class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0 ">
                                <option disabled selected>HALL</option>
                                <?php foreach ($halls as $hall) : ?>
                                    <option value="<?= $hall ?>"><?= $hall ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="flex w-full mb-4">
                        <div class="w-full px-3 mb-3">
                            <label for="date" class="text-black px-1 font-medium">Date</label>
                            <input type="text" name="date" id="date" placeholder="DD/MM/YY" autocomplete="off" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0">
                        </div>
                        <div class="w-full px-3 mb-3">
                            <label for="time" class="text-black px-1 font-medium text-blak-500">Time</label>
                            <input type="time" name="time" id="time" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0">
                        </div>
                    </div>
                    <div class="w-full px-3 mb-3">
                        <label for="amount_of_ticket" class="text-black px-1 font-medium text-blak-500">Amount Of Ticket</label>
                        <input type="number" name="amount_of_ticket" id="amount_of_ticket" min="1" placeholder="Amount of ticket for this show" class="bg-gray-50 border rounded border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 outline-0">
                    </div>
                    <div class="modal-footer flex items-center justify-end px-3 border-gray-200 rounded-b-md w-full">
                        <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" name="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>