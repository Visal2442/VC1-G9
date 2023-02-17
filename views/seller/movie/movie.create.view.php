<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="createMovie">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800">Add movie</h5>
                <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
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
                        <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="ml-3 px-6 py-2.5 bg-blue-600 text-white  text-xs leading-tight uppercase rounded shadow-md ">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>