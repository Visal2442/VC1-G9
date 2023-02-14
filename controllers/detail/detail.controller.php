<?php
require 'database/database.php';
require 'models/show.model.php';
$id=$_GET["id"]?$_GET["id"]:null;
if(isset($id)){
    $shows= getShowByMovieId($_GET["id"]);
    $dates = getShowDate($id);
}

require 'views/detail/detail.view.php';

