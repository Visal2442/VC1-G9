<?php
require '../../database/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) and !empty($_POST['description'])) {
        require_once('../../models/post.model.php');
        createPost($_POST['title'], $_POST['description']);

        header('location: /post');
    }
}
