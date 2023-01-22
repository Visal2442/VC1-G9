<?php
require '../../database/database.php';

$id = $_GET["id"] ? $_GET["id"] : null;
if (isset($id)) {
    require "../../models/post.model.php";
    $post = getPost($id);

    require "../../views/post/post.edit.view.php";
}

