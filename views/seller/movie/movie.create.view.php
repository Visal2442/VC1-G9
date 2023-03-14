<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="createMovie" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true">
    <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">Add movie</h5>
            </div>
            <div class="relative p-4">
            <form action="#" method="post" class="ml-2.5" id="create_movie_form" enctype="multipart/form-data">
                    <div class="flex w-full mb-4">
                        <div class="form-movie ml-2 mb-2 mr-5 w-full">
                            <label for="name" class=" text-black">Movie Title </label>
                            <input type="text" id="movie_name" name="movie_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="Movie Title">
                        </div>
                        <div class="movie-genre ml-2 mb-2 mr-5 w-full">
                            <label for="genre" class=" text-black"> Genre </label>
                            <select type="text" id="genre" name="genre" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
                                <option disabled selected>Choose a genre</option>
                                <?php foreach ($genres as $genre) : ?>
                                    <option value="<?= $genre ?>"><?= $genre ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="flex w-full mb-4">
                        <div class="movie-subtitle ml-2 mb-2 mr-5 w-full">
                            <label for="subtitle" class=" text-black"> Subtitle</label>
                            <input type="text" id="subtitle" name="subtitle" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="Subtitle">
                        </div>
                        <div class="movie-duration ml-2 mb-2 mr-5 w-full">
                            <label for="duration" class=" text-black"> Duration </label>
                            <input type="text" id="duration" name="duration" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="0h00mn">
                        </div>
                    </div>
                    <div class="flex w-full mb-4">
                        <div class="movie-image ml-2 mb-2 mr-5 w-full">
                            <label for="image" class=" text-black"> Image </label>
                            <input type="file" id="image" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
                        </div>
                        <div class="movie-trailer ml-2 mb-2 mr-5 w-full">
                            <label for="trailer" class=" text-black">Trailer</label>
                            <input type="text" id="trailer" name="trailer" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="iframe url">
                        </div>
                    </div>
                    <div class="flex w-full mb-4">
                        <div class="movie-description ml-2 mb-2 mr-5 w-full">
                            <label for="description" class=" text-black"> Description </label>
                            <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="Movie Description">
                        </div>
                        <div class="movie-releasedate ml-2 mb-2 mr-5 w-full">
                            <label for="release_date" class=" text-black"> Release Date</label>
                            <input type="text" id="release_date" name="release_date" placeholder="DD/MM/YY" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
                        </div>
                    </div>
                    <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-gray-200 rounded-b-md">
                        <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" data-te-modal-dismiss>CANCEL</button>
                        <button type="submit" class="ml-3 px-6 py-2.5 bg-blue-600 text-white  text-xs leading-tight uppercase rounded shadow-md ">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>