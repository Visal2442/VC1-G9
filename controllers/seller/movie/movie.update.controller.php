<?php
require '../../../database/database.php';

if (isset($_POST["movie_name_edit"]) && isset($_POST["genre_edit"]) && isset($_POST["duration_edit"]) && isset($_POST["subtitle_edit"]) && isset($_POST["description_edit"]) && isset($_POST["release_date_edit"]) && isset($_FILES["image_edit"]) && isset($_POST["trailer_edit"])) {
    require '../../../models/movie.model.php';
    $img_name = $_FILES['image_edit']['name'];
    $img_size = $_FILES['image_edit']['size'];
    $tmp_name = $_FILES['image_edit']['tmp_name'];
    if (empty($img_name)) {
        updateMovie($_POST['movie_id'], $_POST["movie_name_edit"], $_POST["genre_edit"], $_POST["subtitle_edit"], $_POST["description_edit"], $_POST["release_date_edit"], $_POST["duration_edit"], $img_name, $_POST["trailer_edit"]);
        echo "success";
    } else {
        if ($img_size > 1000000) {
            echo "size_too_large";
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . "." . $img_ex_lc;
                $img_upload_path = "../../../assets/movie_image/" . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                if (!empty($_POST["movie_name_edit"]) && !empty($_POST["genre_edit"]) && !empty($_POST["duration_edit"]) && !empty($_POST["subtitle_edit"]) && !empty($_POST["description_edit"]) && !empty($_POST["release_date_edit"]) && !empty($_FILES["image_edit"]) && !empty($_POST["trailer_edit"])) {
                    updateMovie($_POST['movie_id'], $_POST["movie_name_edit"], $_POST["genre_edit"], $_POST["subtitle_edit"], $_POST["description_edit"], $_POST["release_date_edit"], $_POST["duration_edit"], $new_img_name, $_POST["trailer_edit"]);
                    echo "success";
                }
            } else {
                echo "wrong_exs";
            }
        }
    }
};
