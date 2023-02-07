<?php
require 'models/show.model.php';

$shows= getShows();

require "views/home/index.view.php";