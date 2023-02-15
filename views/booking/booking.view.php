
<div class="flex flex-col collapse mb-5" id="seat">
    <h1 class=" text-white text-center mb-10 font-bold text-3xl ">Book Ticket now</h1>
    <div class="flex">
        <div class="ml-8 hidden" id="seat_container">
            <div class="flex bg-gray-300 ml-4  ">
                <div class=" flex ml-20">
                    <p class=" bg-red-500 rounded-t-lg p-5 m-1"></p>
                    <p class=" mt-3">Available</p>
                </div>
                <div class="flex ml-40">
                    <p class=" bg-green-500 rounded-t-lg p-5 m-1"></p>
                    <p class=" mt-3">Select</p>
                </div>
                <div class=" flex ml-40">
                    <p class=" bg-gray-500 rounded-t-lg p-5 m-1"></p>
                    <p class=" mt-3">Sold</p>
                </div>
            </div>
    
            <div id="seat_view" class="grid grid-cols-12 gap-2 mt-5 ml-12 ">
       
            </div>
        </div>
    
        <form action="" method="post" id="booking_form" class="bg-slate-700 p-5 text-white w-4/12 m-auto grid gap-2" enctype="multipart/form-data">
            <input type="hidden" id="movie_id" name="movie_id" value="<?= $id  ?>">
            <div class="form-movie ml-2 mb-2 mr-5">
                <label for="name" class=" ">Movie Title </label>
                <input type="hidden" value="<?= $shows[0]['movie_name'] ?>" id="movie_name" name="movie_name">
                <input type="text" disabled value="<?= $shows[0]['movie_name'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="Movie Title">
            </div>
            <div class="movie-genre ml-2 mb-2 mr-5">
                <label for="showing_date" class=" "> Showing Date </label>
                <select id="showing_date" name="showing_date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
                    <option disabled selected>Choose a date</option>
                    <?php foreach ($dates as $date) : ?>
                        <option value="<?= $date['date'] ?>"><?= $date['date'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="movie-genre ml-2 mb-2 mr-5">
                <label for="genre" class=""> Select Venue </label>
                <select id="venue" name="venue" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
    
                </select>
            </div>
            <div class="movie-genre ml-2 mb-2 mr-5">
                <label for="genre" class=""> Select Hall </label>
                <select id="hall" name="hall" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
    
                </select>
            </div>
            <div class="movie-genre ml-2 mb-2 mr-5">
                <label for="time" class=" "> Select Time </label>
                <select id="time" name="time" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">

                </select>
            </div>
            <div class="movie-releasedate ml-2 mb-2 mr-5">
                <label for="booking_date" class=" "> Booking Date</label>
                <input type="text" id="booking_date" name="booking_date" placeholder="DD/MM/YY" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
            </div>
            <div class="ml-2 mb-2 mr-5">
                <label for="seat_number" class=" "> Seat Number</label>
                <input type="text" disabled id="no_seat" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
                <input type="hidden" id="seat_number" name="seat_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
            </div>
            <div class="ml-2 mb-2 mr-5">
                <label for="total_price" class=" ">Total Price</label>
                <input type="text" disabled id="t_price" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
                <input type="hidden" id="total_price" name="total_price" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
            </div>
            <div class="modal-footer ml-2 my-5 mr-5 flex border-gray-200 rounded-b-md">
                <button type="submit"  id="booking_btn" class="p-2.5 bg-yellow-400 hover:bg-yellow-500 text-black text-lg leading-tight uppercase rounded shadow-md w-full">Confrim Booking</button>
            </div>
        </form>
    </div>

    <!-- <script src="views/js/booking/booking.js"></script> -->
</div>