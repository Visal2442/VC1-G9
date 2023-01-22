<?php

$heading = "Post Page";

require 'models/post.model.php';

$posts = getPosts();

require "views/post/post.view.php";