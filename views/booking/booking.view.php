<div class="!visible hidden" id="seat" data-te-collapse-item>
    <div class="flex justify-between pl-10 pr-10">
        <div class="seats flex-col">
            <h1 class=" text-white text-center mb-10 font-bold text-3xl ">Book Ticket now</h1>
            <div class="flex">
                <div class="ml-8 hidden bg-slate-800 p-5" id="seat_container">
                    <div class="flex justify-around bg-gray-300 items-center  ">
                        <div class=" flex items-center ">
                            <img src="../../assets/imgs//seat.png" width="40" height="40">
                            <p class=" ml-3">Available</p>
                        </div>
                        <div class="flex items-center">
                            <img src="../../assets/imgs/select.png" id="selected">
                            <p class=" ml-3 ">Select</p>
                        </div>
                        <div class=" flex items-center">
                            <img src="../../assets/imgs//booked.png" width="50" height="30">
                            <p class=" ml-3">Unavailable</p>
                        </div>
                    </div>
                    <div id="seat_view" class="grid grid-cols-12 mt-5 ">
                        <!-- For seat view  -->
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[32rem] mt-20 shadow-2xl ml-2">
            <div class='flex text-white gap-10 pr-4 pl-4 '>
                <img src="../../assets/movie_image/<?= $shows[0]["image"] ?>" class="w-fit h-56">
                <div class=" flex flex-col gap-3">
                    <h1 class="font-bold text-3xl mb-2"><?= $shows[0]['movie_name'] ?></h1>
                    <div class="flex items-center">
                        <i class="material-icons block pr-4">language</i>
                        <p> <?= $shows[0]['subtitle'] ?></p>
                    </div>
                    <div class=" flex items-center">
                        <i class="material-icons block pr-4">calendar_month</i>
                        <p> <?= $shows[0]['release_date'] ?></p>
                    </div>
                    <div class="flex items-center">
                        <i class="material-icons block pr-4 ">sell</i>
                        <p><?= $shows[0]['genre'] ?></p>
                    </div>
                    <div class="flex items-center">
                        <i class="material-icons block pr-4">schedule</i>
                        <p><?= $shows[0]['duration'] ?></p>
                    </div>
                    <div class="flex items-center">
                        <i class="material-icons block pr-4">paid</i>
                        <p id="ticket_price"></p>
                    </div>
                </div>
            </div>
            <form action="" method="post" id="form_booking" class="p-4 uppercase" enctype="multipart/form-data">
                <input type="hidden" id="movie_id" name="movie_id" value="<?= $id  ?>">
                <input type="hidden" value="<?= $shows[0]['movie_name'] ?>" id="movie_name" name="movie_name">

                <label for="default-input" class="block mb-2  text-sm font-medium text-white">Show Date</label>
                <input type="hidden" id="show_date" name="show_date">
                <p id="show_d" class="text-sm text-yellow-500 rounded-sm pt-1 pb-3  w-full"></p>

                <label for="default-input" class="block mb-2 mt-2 text-sm font-medium text-white">show time</label>
                <input type="hidden" id="time_show" name="time_show">
                <p id="time_s" class="text-sm text-yellow-500 rounded-sm pt-1 pb-3   w-full"></p>

                <label for="default-input" class="block mb-2 mt-2  text-sm font-medium text-white">venue</label>
                <input type="hidden" id="venue_id" name="venue_id">
                <p id="venue_n" class="text-sm text-yellow-500 rounded-sm pt-1 pb-3   w-full"></p>

                <label for="default-input" class="block mb-2 mt-2  text-sm font-medium text-white">hall</label>
                <input type="hidden" id="hall_name" name="hall_name">
                <p id="hall_n" class="text-sm text-yellow-500 rounded-sm pt-1 pb-3 w-full"></p>

                <label for="default-input" class="block mb-2 mt-2  text-sm font-medium text-white">Number of seats</label>
                <input type="hidden" id="total_seats" name="total_seats">
                <input type="text" disabled id="number_of_seat" class="text-sm text-yellow-500 rounded-sm pt-1 pb-3 w-full" style="background: none;">

                <label for="default-input" class="block mb-2 mt-2  text-sm font-medium text-white">Seats detail</label>
                <input type="hidden" id="seat_number" name="seat_number">
                <input type="text" disabled id="display_seat_number" class="text-sm text-yellow-500 rounded-sm pt-1 pb-3 w-full" style="background: none;">

                <label for="default-input" class="block mb-2 mt-2  text-sm font-medium text-white">Total price</label>
                <input type="hidden" id="total_price" name="total_price">
                <input type="text" disabled id="display_ticket_price" class="text-sm text-yellow-500 rounded-sm pt-1 pb-3 w-full" style="background: none;">

                <label for="default-input" class="block mb-2 mt-2 text-sm font-medium text-white">Booking date</label>
                <input type="text" id="booking_date" name="booking_date" class="text-sm text-white rounded-sm p-2 w-full outline-0 border-b border-b-gray-500 " style="background: none;" placeholder="DD/MM/YY">

                <button type="submit" class="w-full uppercase bg-yellow-500 hover:bg-yellow-600 hover:text-white font-bold p-1.5 rounded-sm mt-4">confirm booking</button>
            </form>
        </div>
    </div>
</div>