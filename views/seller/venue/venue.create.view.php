<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="createVenue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
        <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="exampleModalLabel">
                    Add Venue
                </h5>
            </div>
            <div class="relative flex-auto p-4" data-te-modal-body-ref>
                <form action="#" method="post" class="ml-2.5" id="create_venue_form">
                    <div class="form-venue ml-2 mb-2 mr-5 text-black">
                        <label for="venue">Venue Name </label>
                        <input type="text" id="venue_name" name="venue" class="bg-gray-50 rounded border-black text-gray-900 text-sm block w-full p-2.5  outline-none border " placeholder="Venue Name">
                    </div>
                    <div class="venue-address ml-2 mb-2 mr-5 text-black">
                        <label for="address"> Address </label>
                        <input type="text" id="venue_address" name="address" class="bg-gray-50 rounded border-black text-gray-900 text-sm  block w-full p-2.5  outline-none border " placeholder="Venue Address">
                    </div>
                    <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" data-te-modal-dismiss>Cancel</button>
                        <button type="button" onclick="addVenue()" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>