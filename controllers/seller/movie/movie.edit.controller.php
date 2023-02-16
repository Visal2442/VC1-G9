<?php
require '../../../database/database.php';
$genres = ['Action', 'Horror', 'Adventure', 'Thriller', 'Comedy', 'Fantasy', 'Animation', 'Mystery'];
if (isset($_POST['movie_id'])) {
    require '../../../models/movie.model.php';
    $movie = getMovieById($_POST['movie_id']);
}
?>

<form action="" method="post" class="ml-2.5" id="edit_movie_form" enctype="multipart/form-data">
    <input type="hidden" id="movie_id" name="movie_id" value="<?=$_POST['movie_id']?>">
    <div class="form-movie ml-2 mb-2 mr-5">
        <label for="name" class=" text-black">Movie Title </label>
        <input type="text" id="movie_name_edit" name="movie_name_edit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="Movie Title" value="<?= $movie['movie_name'] ?>">
    </div>
    <div class="movie-image ml-2 mb-2 mr-5">
        <label for="image" class=" text-black"> Image </label>
        <input type="file" id="image_edit" name="image_edit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
    </div>
    <div class="movie-duration ml-2 mb-2 mr-5">
        <label for="duration" class=" text-black"> Duration </label>
        <input type="text" id="duration_edit" name="duration_edit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="Duration" value="<?= $movie['duration'] ?>">
    </div>
    <div class="movie-subtitle ml-2 mb-2 mr-5">
        <label for="subtitle" class=" text-black"> Subtitle</label>
        <input type="text" id="subtitle_edit" name="subtitle_edit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="Subtitle" value="<?= $movie['subtitle'] ?>">
    </div>
    <div class="movie-description ml-2 mb-2 mr-5">
        <label for="description" class=" text-black"> Description </label>
        <input type="text" id="description_edit" name="description_edit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="Movie Description" value="<?= $movie['description'] ?>">
    </div>
    <div class="movie-trailer ml-2 mb-2 mr-5">
        <label for="trailer" class=" text-black">Trailer</label>
        <input type="text" id="trailer_edit" name="trailer_edit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" placeholder="url" value='<?= $movie["trailer"] ?>'>
    </div>
    <div class="movie-genre ml-2 mb-2 mr-5">
        <label for="genre" class="text-black"> Genre </label>
        <select type="text" id="genre_edit" name="genre_edit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0">
            <option disabled>Choose a genre</option>
            <?php foreach ($genres as $genre) : ?>
                <option value="<?= $genre ?>" <?= $genre == $movie["genre"] ? "selected" : "" ?> ><?= $genre ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="movie-releasedate ml-2 mb-2 mr-5">
        <label for="release_date_edit" class=" text-black"> Release Date</label>
        <input type="text" id="release_date_edit" name="release_date_edit" placeholder="DD/MM/YY" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:focus:ring-blue-500 rounded aoutline-0" value="<?= $movie['release_date'] ?>">
    </div>
    <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-gray-200 rounded-b-md">
        <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">CANCEL</button>
        <button type="submit" class="ml-3 px-6 py-2.5 bg-blue-600 text-white text-xs leading-tight uppercase rounded shadow-md ">EDIT</button>
    </div>
</form>
<script src="views/js/movie/movie.js"></script>