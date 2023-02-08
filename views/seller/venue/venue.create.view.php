

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="createVenue" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                    Add Venue
                </h5>
                <button type="button" class="btn-cancel box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="cancel"></button>
            </div>
            <div class="modal-body relative p-4">
                <form action="#" method="post" class="ml-2.5" id="create_venue_form">
                    <div class="form-venue ml-2 mb-2 mr-5">
                        <label for="movie venue">Venue Name </label>
                        <input type="text" id="venue_name" name="venue" class="bg-gray-50 rounded border-black text-gray-900 text-sm block w-full p-2.5  outline-none border " placeholder="Venue Name">
                        <small id="error_msg" class="text-red-500"></small>
                    </div>
                    <div class="venue-address ml-2 mb-2 mr-5">
                        <label for="address"> Address </label>
                        <input type="text" id="venue_address" name="address" class="bg-gray-50 rounded border-black text-gray-900 text-sm  block w-full p-2.5  outline-none border " placeholder="Venue Address">
                    </div>
                    <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" onclick="addVenue()" class="inline-block px-6 py-2.5 bg-blue-600 
                        text-white font-medium text-xs leading-tight 
                        uppercase rounded shadow-md hover:bg-blue-700
                         hover:shadow-lg focus:bg-blue-700 focus:shadow-lg 
                         focus:outline-none focus:ring-0 active:bg-blue-800 
                         active:shadow-lg transition duration-150 ease-in-out ml-1">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>