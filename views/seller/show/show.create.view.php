<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="createShow" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true">
    <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">ADD SHOW</h5>
            </div>
            <div class="relative p-4">
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
                        <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-te-modal-dismiss>CANCEL</button>
                        <button type="submit" name="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>