<?php
require 'models/show.model.php';

$shows= getShowsForCard();
$genres = ['Action', 'Horror', 'Adventure', ' Thriller', 'Comedy', 'Fantasy', 'Animation', 'Mystery'];
require "views/home/index.view.php";