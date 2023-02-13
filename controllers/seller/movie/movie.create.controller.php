<?php
require '../../../database/database.php';
$regex = "/[0-9]{1}[h]{1}[0-9]{2}[m]{1}[n]{1}$/";
if(isset($_POST["movie_name"]) && isset($_POST["genre"]) && isset($_POST["duration"]) && isset($_POST["subtitle"]) && isset($_POST["description"]) && isset($_POST["release_date"]) && isset($_FILES["image"]) && isset($_POST["trailer"]))
{
    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $tmp_name=$_FILES['image']['tmp_name'];
        if($img_size > 1000000)
        {
            echo "size_too_large";
        }
        elseif(!preg_match($regex,$_POST["duration"])){
            echo "Error pattern";
        }
        else
        {
            $img_ex= pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc= strtolower($img_ex);
            $allowed_exs= array("jpg", "jpeg", "png");
            if(in_array($img_ex_lc, $allowed_exs))
            {
                $img_upload_path="../../../assets/movie_image/". $img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                if(!empty($_POST["movie_name"]) && !empty($_POST["genre"]) && !empty($_POST["duration"]) && !empty($_POST["subtitle"])&& !empty($_POST["description"]) && !empty($_POST["release_date"])&& !empty($_FILES["image"]) && !empty($_POST["trailer"]))
                {
                    require '../../../models/movie.model.php';
                    $check_movie= getMovieByName(trim($_POST["movie_name"]));
                    if(!empty($check_movie)){
                        echo "This movie is already exists";
                    }
                    else{
                        addMovie($_POST["movie_name"],$_POST["genre"], $_POST["subtitle"],$_POST["description"],$_POST["release_date"], $_POST["duration"], $img_name, $_POST["trailer"]);
                        echo "success";
                    }
                }
            }
            else
            {
                echo "Extension doesn't support";
            }
        }


};




