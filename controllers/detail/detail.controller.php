<?php
require 'database/database.php';
require 'models/show.model.php';
$id=$_GET["id"]?$_GET["id"]:null;
if(isset($id)){
    $show= getShowById($_GET["id"]);
}

require 'views/detail/detail.view.php';

