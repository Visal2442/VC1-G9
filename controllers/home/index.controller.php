<?php
require 'models/show.model.php';

$shows= getShowsForCard();

require "views/home/index.view.php";