<?php
require 'models/show.model.php';
$shows= getShowsForCard();
$genres = ['All','Action', 'Horror', 'Adventure', 'Comedy', 'Fantasy', 'Mystery'];

require "views/home/index.view.php";