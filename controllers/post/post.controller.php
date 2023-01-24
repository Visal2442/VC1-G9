<?php


require 'models/post.model.php';

$posts = getPosts();

require "views/post/post.view.php";